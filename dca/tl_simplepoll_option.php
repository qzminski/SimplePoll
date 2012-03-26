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
 * @copyright  Kamil Kuzminski 2011-2012 
 * @author     Kamil Kuzminski <kamil.kuzminski@gmail.com> 
 * @author     Andreas Schempp <andreas@schempp.ch>
 * @package    SimplePoll 
 * @license    LGPL 
 * @filesource
 */


/**
 * Table tl_simplepoll_option 
 */
$GLOBALS['TL_DCA']['tl_simplepoll_option'] = array
(

	// Config
	'config' => array
	(
		'dataContainer'               => 'Table',
		'ptable'                      => 'tl_simplepoll',
		'enableVersioning'            => true
	),

	// List
	'list' => array
	(
		'sorting' => array
		(
			'mode'                    => 4,
			'fields'                  => array('sorting'),
			'headerFields'            => array('title', 'tstamp', 'published'),
			'child_record_callback'   => array('tl_simplepoll_option', 'listPollOptions')
		),
		'global_operations' => array
		(
			'all' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['MSC']['all'],
				'href'                => 'act=select',
				'class'               => 'header_edit_all',
				'attributes'          => 'onclick="Backend.getScrollOffset();" accesskey="e"'
			)
		),
		'operations' => array
		(
			'edit' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_simplepoll_option']['edit'],
				'href'                => 'act=edit',
				'icon'                => 'edit.gif'
			),
			'copy' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_simplepoll_option']['copy'],
				'href'                => 'act=copy',
				'icon'                => 'copy.gif'
			),
			'delete' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_simplepoll_option']['delete'],
				'href'                => 'act=delete',
				'icon'                => 'delete.gif',
				'attributes'          => 'onclick="if (!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm'] . '\')) return false; Backend.getScrollOffset();"'
			),
			'toggle' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_simplepoll_option']['toggle'],
				'icon'                => 'visible.gif',
				'attributes'          => 'onclick="Backend.getScrollOffset(); return AjaxRequest.toggleVisibility(this, %s);"',
				'button_callback'     => array('tl_simplepoll_option', 'toggleIcon')
			),
			'show' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_simplepoll_option']['show'],
				'href'                => 'act=show',
				'icon'                => 'show.gif'
			)
		)
	),

	// Palettes
	'palettes' => array
	(
		'default'                     => '{title_legend},title,votes;{publish_legend},published'
	),

	// Fields
	'fields' => array
	(
		'title' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_simplepoll_option']['title'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>true, 'maxlength'=>255, 'tl_class'=>'w50')
		),
		'votes' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_simplepoll_option']['votes'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('doNotCopy'=>true, 'readonly'=>true, 'tl_class'=>'w50')
		),
		'published' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_simplepoll_option']['published'],
			'exclude'                 => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('doNotCopy'=>true)
		)
	)
);


/**
 * Provide support for DC_Multilingual
 */
if (SimplePoll::checkMultilingual())
{
	$GLOBALS['TL_DCA']['tl_simplepoll_option']['config']['dataContainer'] = 'Multilingual';
	$GLOBALS['TL_DCA']['tl_simplepoll_option']['config']['languages'] = SimplePoll::getAvailableLanguages();
	$GLOBALS['TL_DCA']['tl_simplepoll_option']['config']['pidColumn'] = 'lid';
	$GLOBALS['TL_DCA']['tl_simplepoll_option']['config']['fallbackLang'] = SimplePoll::getFallbackLanguage();

	// Make "title" field translatable
	$GLOBALS['TL_DCA']['tl_simplepoll_option']['fields']['title']['eval']['translatableFor'] = '*';
}


/**
 * Class tl_simplepoll_option
 *
 * Provide miscellaneous methods that are used by the data configuration array.
 * @copyright  Kamil Kuzminski 2011-2012 
 * @author     Kamil Kuzminski <kamil.kuzminski@gmail.com> 
 * @package    SimplePoll
 */
class tl_simplepoll_option extends Backend
{

	/**
	 * List poll options
	 * @param array
	 * @return string
	 */
	public function listPollOptions($arrRow)
	{
		$arrVotes = $this->Database->prepare("SELECT votes FROM tl_simplepoll_option WHERE pid=?")->execute($arrRow['pid'])->fetchEach('votes');
		$width = $arrRow['votes'] ? (round(($arrRow['votes'] / array_sum($arrVotes)), 2) * 150) : 0;

		return '<div><div style="display:inline-block;margin-right:8px;background-color:#8AB858;height:10px;width:' . $width . 'px;"></div>' . $arrRow['title'] . ' <span style="padding-left:3px;color:#b3b3b3;">[' . sprintf((($arrRow['votes'] == 1) ? $GLOBALS['TL_LANG']['tl_simplepoll_option']['voteSingle'] : $GLOBALS['TL_LANG']['tl_simplepoll_option']['votePlural']), $arrRow['votes']) . ']</span></div>';
	}


	/**
	 * Return the "toggle visibility" button
	 * @param array
	 * @param string
	 * @param string
	 * @param string
	 * @param string
	 * @param string
	 * @return string
	 */
	public function toggleIcon($row, $href, $label, $title, $icon, $attributes)
	{
		if (strlen($this->Input->get('tid')))
		{
			$this->toggleVisibility($this->Input->get('tid'), ($this->Input->get('state') == 1));
			$this->redirect($this->getReferer());
		}

		$href .= '&amp;tid='.$row['id'].'&amp;state='.($row['published'] ? '' : 1);

		if (!$row['published'])
		{
			$icon = 'invisible.gif';
		}		

		return '<a href="'.$this->addToUrl($href).'" title="'.specialchars($title).'"'.$attributes.'>'.$this->generateImage($icon, $label).'</a> ';
	}


	/**
	 * Publish/unpublish a poll option
	 * @param integer
	 * @param boolean
	 */
	public function toggleVisibility($intId, $blnVisible)
	{
		$this->createInitialVersion('tl_simplepoll_option', $intId);
	
		// Trigger the save_callback
		if (is_array($GLOBALS['TL_DCA']['tl_simplepoll_option']['fields']['published']['save_callback']))
		{
			foreach ($GLOBALS['TL_DCA']['tl_simplepoll_option']['fields']['published']['save_callback'] as $callback)
			{
				$this->import($callback[0]);
				$blnVisible = $this->$callback[0]->$callback[1]($blnVisible, $this);
			}
		}

		// Update the database
		$this->Database->prepare("UPDATE tl_simplepoll_option SET tstamp=". time() .", published='" . ($blnVisible ? 1 : '') . "' WHERE id=?")
					   ->execute($intId);

		$this->createNewVersion('tl_simplepoll_option', $intId);
	}
}

?>