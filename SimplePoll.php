<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2011 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  Kamil Kuzminski 2011 
 * @author     Kamil Kuzminski <http://qzminski.com> 
 * @author     Andreas Schempp <andreas@schempp.ch>
 * @package    SimplePoll 
 * @license    LGPL 
 * @filesource
 */


/**
 * Class SimplePoll
 *
 * Provide methods to handle polls.
 * @copyright  Kamil Kuzminski 2011 
 * @author     Kamil Kuzminski <http://qzminski.com> 
 * @package    SimplePoll
 */
class SimplePoll extends Hybrid
{

	/**
	 * Key
	 * @var string
	 */
	protected $strKey = 'simplepoll';

	/**
	 * Table
	 * @var string
	 */
	protected $strTable = 'tl_simplepoll';

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'simplepoll';

	/**
	 * Cookie name (prefix)
	 * @var string
	 */
	protected $strCookie = 'SIMPLEPOLL_';


	/**
	 * Check if there is DC_Multilingual installed
	 * @return boolean
	 */
	public static function checkMultilingual()
	{
		return (file_exists(TL_ROOT . '/system/drivers/DC_Multilingual.php') && count(self::getAvailableLanguages()) > 1) ? true : false;
	}


	/**
	 * Return a list of available languages
	 * @return array
	 */
	public static function getAvailableLanguages()
	{
		$objDatabase = Database::getInstance();
		return $objDatabase->execute("SELECT DISTINCT language FROM tl_page WHERE type='root'")->fetchEach('language');
	}


	/**
	 * Get a fallback language
	 * @return string
	 */
	public static function getFallbackLanguage()
	{
		$objDatabase = Database::getInstance();
		return $objDatabase->execute("SELECT language FROM tl_page WHERE type='root' AND fallback=1")->language;
	}


	/**
	 * Display a wildcard in the back end
	 * @return string
	 */
	public function generate()
	{
		if (TL_MODE == 'BE')
		{
			$this->Template = new BackendTemplate('be_wildcard');
			
			$this->Template->wildcard = '### SIMPLE POLL ###';
			$this->Template->title = $this->headline;
			$this->Template->id = $this->id;
			$this->Template->link = $this->title;
			$this->Template->href = 'contao/main.php?do=simplepoll&amp;table=tl_simplepoll_option&amp;id=' . $this->id;

			return $this->Template->parse();
		}

		return parent::generate();
	}


	/**
	 * Generate module
	 */
	protected function compile()
	{
		$this->Template->showResults = false;
		$this->Template->showForm = false;

		$objPoll = $this->Database->prepare($this->getPollQuery('tl_simplepoll'))
								  ->limit(1)
								  ->execute($this->id);

		// Return if poll does not exist
		if (!$objPoll->numRows || !$objPoll->options)
		{
			return;
		}

		// Display a "login to vote" message
		if ($objPoll->protected && !FE_USER_LOGGED_IN)
		{
			$_SESSION['TL_INFO'][] = $GLOBALS['TL_LANG']['MSC']['loginToVote'];
		}

		$time = time();
		$arrIps = deserialize($objPoll->ips, true);
		$strFormId = 'poll_' . $this->id;
		$this->Template->title = $objPoll->title;
		$this->Template->featured = $objPoll->featured ? true : false;
		$this->Template->messages = $this->getMessages();

		$objOptions = $this->Database->prepare($this->getPollQuery('tl_simplepoll_option'))
									 ->execute($this->id);

		// Display results if poll is closed or visitor has already voted
		if ($objPoll->closed || ($this->Input->get('results') == $objPoll->id && $objPoll->showResults) || $this->hasVoted($arrIps, $objPoll->id) || (($arrRow['start'] != '' && $arrRow['start'] > $time) && ($arrRow['stop'] != '' && $arrRow['stop'] < $time)))
		{
			$arrResults = array();
			$intVotes = array_sum($objOptions->fetchEach('votes'));
			$objOptions->reset();

			// Generate results
			while ($objOptions->next())
			{
				$arrResults[] = array
				(
					'title' => $objOptions->title,
					'prcnt' => ($intVotes > 0 ) ? (round(($objOptions->votes / $intVotes), 2) * 100) : 0
				);
			}

			$this->Template->showResults = true;
			$this->Template->results = $arrResults;
			return;
		}

		// Generate options
		while ($objOptions->next())
		{
			$arrOptions[$objOptions->id] = $objOptions->title;
		}

		// Options form field
		$arrField = array
		(
			'name' => 'options',
			'options' => $arrOptions,
			'inputType' => 'radio',
			'eval' => array('mandatory'=>true)
		);

		$doNotSubmit = false;
		$objWidget = new $GLOBALS['TL_FFL'][$arrField['inputType']]($this->prepareForWidget($arrField, $arrField['name']));

		// Validate the widget
		if ($this->Input->post('FORM_SUBMIT') == $strFormId && !$this->Input->post('results'))
		{
			$objWidget->validate();

			if ($objWidget->hasErrors())
			{
				$doNotSubmit = true;
			}
		}

		$this->Template->showForm = true;
		$this->Template->options = $objWidget;
		$this->Template->submit = ($objPoll->protected && !FE_USER_LOGGED_IN) ? '' : $GLOBALS['TL_LANG']['MSC']['vote'];
		$this->Template->resultsLink = ($objPoll->showResults && !empty($arrIps)) ? sprintf('<a href="%s" title="%s">%s</a>', $this->Environment->request . (($GLOBALS['TL_CONFIG']['disableAlias'] || strpos($this->Environment->request, '?') !== false) ? '&amp;' : '?') . 'results=' . $objPoll->id, specialchars($GLOBALS['TL_LANG']['MSC']['showResults']), $GLOBALS['TL_LANG']['MSC']['showResults']) : '';
		$this->Template->action = ampersand($this->Environment->request);
		$this->Template->formId = $strFormId;
		$this->Template->hasError = $doNotSubmit;

		// Add the vote
		if ($this->Input->post('FORM_SUBMIT') == $strFormId && !$doNotSubmit)
		{
			if ($objPoll->protected && !FE_USER_LOGGED_IN)
			{
				return;
			}

			$this->import('FrontendUser', 'User');
			$intExpires = ($objPoll->voteInterval > 0) ? ($time + $objPoll->voteInterval) : ($time + (30 * 86400));

			// Set the cookie
			$this->setCookie($this->strCookie . $objPoll->id, true, $intExpires);

			// Save the IP address or user ID
			$arrIps[] = array
			(
				'id' => FE_USER_LOGGED_IN ? $this->User->id : $this->Environment->remoteAddr,
				'expires' => $intExpires
			);

			// Update the database
			$this->Database->prepare("UPDATE tl_simplepoll_option SET votes=votes + 1 WHERE id=?")->execute($objWidget->value);
			$this->Database->prepare("UPDATE tl_simplepoll SET ips=? WHERE id=?")->execute(serialize($arrIps), $objPoll->id);
			$this->log('Submitted vote ID ' . $objWidget->value . ' in poll ID ' . $objPoll->id, 'SimplePoll addPollToTemplate()', TL_GENERAL);

			// Reload the page
			$_SESSION['TL_CONFIRM'][] = $GLOBALS['TL_LANG']['MSC']['voteSubmitted'];
			$this->reload();
		}
	}


	/**
	 * Determine whether the current user has already voted
	 * @param mixed
	 * @param integer
	 * @return boolean
	 */
	protected function hasVoted($arrIps, $intId)
	{
		if ($this->Input->cookie($this->strCookie . $intId))
		{
			return true;
		}

		$arrIps = deserialize($arrIps);

		// No votes have been made yet
		if (!is_array($arrIps) || empty($arrIps))
		{
			return false;
		}

		$varNeedle = $this->Environment->remoteAddr;

		// Search for the current user
		if (FE_USER_LOGGED_IN)
		{
			$this->import('FrontendUser', 'User');
			$varNeedle = $this->User->id;
		}

		$time = time();

		// Find the needle
		foreach ($arrIps as $arrEntry)
		{
			if ($arrEntry['id'] == $varNeedle && $arrEntry['expires'] > $time)
			{
				return true;
			}
		}

		return false;
	}


	/**
	 * Generate a select statement that includes translated fields (thanks to Andreas Schempp)
	 * @param string
	 * @param string
	 * @return string
	 */
	protected function getPollQuery($strTable)
	{
		$blnMultilingual = self::checkMultilingual();

		// Multilingual settings
		if ($blnMultilingual)
		{
			$arrFields = array();
			$this->loadDataContainer($strTable);

			// Get translatable fields
			foreach ($GLOBALS['TL_DCA'][$strTable]['fields'] as $field => $arrData)
			{
				if ($arrData['eval']['translatableFor'] != '')
				{
					$arrFields[] = "IFNULL(t2." . $field . ", t1." . $field . ") AS " . $field;
				}
			}
		}

		// Build the query
		switch ($strTable)
		{
			case 'tl_simplepoll':
				$strQuery = "SELECT *, (SELECT COUNT(*) FROM tl_simplepoll_option WHERE pid=tl_simplepoll.id) AS options FROM tl_simplepoll WHERE id=?" . (!BE_USER_LOGGED_IN ? " AND published=1" : "");

				if ($blnMultilingual)
				{
					$strQuery = "SELECT t1.*, " . implode(', ', $arrFields) . ", (SELECT COUNT(*) FROM tl_simplepoll_option WHERE pid=t1.id) AS options FROM tl_simplepoll t1 LEFT OUTER JOIN tl_simplepoll t2 ON t1.id=t2.lid AND t2.language='" . $GLOBALS['TL_LANGUAGE'] . "' WHERE t1.lid=0 AND t1.id=?" . (!BE_USER_LOGGED_IN ? " AND t1.published=1" : "");
				}
				break;

			case 'tl_simplepoll_option':
				$strQuery = "SELECT * FROM tl_simplepoll_option WHERE pid=?" . (!BE_USER_LOGGED_IN ? " AND published=1" : "") . " ORDER BY sorting";

				if ($blnMultilingual)
				{
					$strQuery = "SELECT t1.*, " . implode(', ', $arrFields) . " FROM tl_simplepoll_option t1 LEFT OUTER JOIN tl_simplepoll t2 ON t1.id=t2.lid AND t2.language='" . $GLOBALS['TL_LANGUAGE'] . "' WHERE t1.lid=0 AND t1.pid=?" . (!BE_USER_LOGGED_IN ? " AND t1.published=1" : "") . " ORDER BY t1.sorting";
				}
				break;
		}

		return $strQuery;
	}
}

?>