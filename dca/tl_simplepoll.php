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
 * Load tl_module language files
 */
$this->loadLanguageFile('tl_module');


/**
 * Table tl_simplepoll 
 */
$GLOBALS['TL_DCA']['tl_simplepoll'] = array
(

	// Config
	'config' => array
	(
		'dataContainer'               => 'Table',
		'ctable'                      => array('tl_simplepoll_option'),
		'switchToEdit'                => true,
		'enableVersioning'            => true
	),

	// List
	'list' => array
	(
		'sorting' => array
		(
			'mode'                    => 1,
			'fields'                  => array('title'),
			'flag'                    => 1,
			'panelLayout'             => 'filter;search,limit',
		),
		'label' => array
		(
			'fields'                  => array('title'),
			'format'                  => '%s',
			'label_callback'          => array('tl_simplepoll', 'addStatus')
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
				'label'               => &$GLOBALS['TL_LANG']['tl_simplepoll']['edit'],
				'href'                => 'table=tl_simplepoll_option',
				'icon'                => 'edit.gif',
				'attributes'          => 'class="contextmenu"'
			),
			'editheader' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_simplepoll']['editheader'],
				'href'                => 'act=edit',
				'icon'                => 'header.gif',
				'attributes'          => 'class="edit-header"'
			),
			'copy' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_simplepoll']['copy'],
				'href'                => 'act=copy',
				'icon'                => 'copy.gif'
			),
			'delete' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_simplepoll']['delete'],
				'href'                => 'act=delete',
				'icon'                => 'delete.gif',
				'attributes'          => 'onclick="if (!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm'] . '\')) return false; Backend.getScrollOffset();"'
			),
			'toggle' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_simplepoll']['toggle'],
				'icon'                => 'visible.gif',
				'attributes'          => 'onclick="Backend.getScrollOffset(); return AjaxRequest.toggleVisibility(this, %s);"',
				'button_callback'     => array('tl_simplepoll', 'toggleIcon')
			),
			'feature' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_simplepoll']['feature'],
				'icon'                => 'featured.gif',
				'attributes'          => 'onclick="Backend.getScrollOffset(); return AjaxRequest.toggleFeatured(this, %s);"',
				'button_callback'     => array('tl_simplepoll', 'iconFeatured')
			),
			'show' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_simplepoll']['show'],
				'href'                => 'act=show',
				'icon'                => 'show.gif'
			)
		)
	),

	// Palettes
	'palettes' => array
	(
		'default'                     => '{title_legend},title,voteInterval,protected,featured,showResults;{redirect_legend:hide},jumpTo;{publish_legend},published,closed,start,stop'
	),

	// Fields
	'fields' => array
	(
		'title' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_simplepoll']['title'],
			'exclude'                 => true,
			'search'                  => true,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>true, 'maxlength'=>255, 'tl_class'=>'w50')
		),
		'voteInterval' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_simplepoll']['voteInterval'],
			'default'                 => 86400,
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('rgxp'=>'digit', 'tl_class'=>'w50')
		),
		'protected' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_simplepoll']['protected'],
			'exclude'                 => true,
			'filter'                  => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50')
		),
		'featured' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_simplepoll']['featured'],
			'exclude'                 => true,
			'filter'                  => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'w50')
		),
		'showResults' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_simplepoll']['showResults'],
			'exclude'                 => true,
			'filter'                  => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'clr')
		),
		'jumpTo' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_module']['jumpTo'],
			'exclude'                 => true,
			'filter'                  => true,
			'inputType'               => 'pageTree',
			'eval'                    => array('fieldType'=>'radio', 'tl_class'=>'clr')
		),
		'published' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_simplepoll']['published'],
			'exclude'                 => true,
			'filter'                  => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('doNotCopy'=>true, 'tl_class'=>'w50')
		),
		'closed' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_simplepoll']['closed'],
			'exclude'                 => true,
			'filter'                  => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('doNotCopy'=>true, 'tl_class'=>'w50')
		),
		'start' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_simplepoll']['start'],
			'exclude'                 => true,
			'search'                  => true,
			'flag'                    => 8,
			'inputType'               => 'text',
			'eval'                    => array('rgxp'=>'datim', 'datepicker'=>true, 'tl_class'=>'w50 wizard')
		),
		'stop' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_simplepoll']['stop'],
			'exclude'                 => true,
			'search'                  => true,
			'flag'                    => 8,
			'inputType'               => 'text',
			'eval'                    => array('rgxp'=>'datim', 'datepicker'=>true, 'tl_class'=>'w50 wizard')
		)
	)
);


/**
 * Provide support for DC_Multilingual
 */
if (SimplePoll::checkMultilingual())
{
	$GLOBALS['TL_DCA']['tl_simplepoll']['config']['dataContainer'] = 'Multilingual';
	$GLOBALS['TL_DCA']['tl_simplepoll']['config']['languages'] = SimplePoll::getAvailableLanguages();
	$GLOBALS['TL_DCA']['tl_simplepoll']['config']['pidColumn'] = 'lid';
	$GLOBALS['TL_DCA']['tl_simplepoll']['config']['fallbackLang'] = SimplePoll::getFallbackLanguage();

	// Make "title" field translatable
	$GLOBALS['TL_DCA']['tl_simplepoll']['fields']['title']['eval']['translatableFor'] = '*';
}


/**
 * Class tl_simplepoll
 *
 * Provide miscellaneous methods that are used by the data configuration array.
 * @copyright  Kamil Kuzminski 2011 
 * @author     Kamil Kuzminski <http://qzminski.com> 
 * @package    SimplePoll
 */
class tl_simplepoll extends Backend
{

	/**
	 * Add the poll status
	 * @param array
	 * @param string
	 * @return string
	 */
	public function addStatus($arrRow, $strLabel)
	{
		if ($arrRow['closed'])
		{
			$strLabel .= ' <span style="padding-left:3px;color:#b3b3b3;">[Closed]</span>';
		}

		return $strLabel;
	}


	/**
	 * Return the "feature/unfeature element" button
	 * @param array
	 * @param string
	 * @param string
	 * @param string
	 * @param string
	 * @param string
	 * @return string
	 */
	public function iconFeatured($row, $href, $label, $title, $icon, $attributes)
	{
		if (strlen($this->Input->get('fid')))
		{
			$this->toggleFeatured($this->Input->get('fid'), ($this->Input->get('state') == 1));
			$this->redirect($this->getReferer());
		}

		$href .= '&amp;fid='.$row['id'].'&amp;state='.($row['featured'] ? '' : 1);

		if (!$row['featured'])
		{
			$icon = 'featured_.gif';
		}		

		return '<a href="'.$this->addToUrl($href).'" title="'.specialchars($title).'"'.$attributes.'>'.$this->generateImage($icon, $label).'</a> ';
	}


	/**
	 * Feature/unfeature a poll
	 * @param integer
	 * @param boolean
	 * @return string
	 */
	public function toggleFeatured($intId, $blnVisible)
	{
		$this->createInitialVersion('tl_simplepoll', $intId);
	
		// Trigger the save_callback
		if (is_array($GLOBALS['TL_DCA']['tl_simplepoll']['fields']['featured']['save_callback']))
		{
			foreach ($GLOBALS['TL_DCA']['tl_simplepoll']['fields']['featured']['save_callback'] as $callback)
			{
				$this->import($callback[0]);
				$blnVisible = $this->$callback[0]->$callback[1]($blnVisible, $this);
			}
		}

		// Update the database
		$this->Database->prepare("UPDATE tl_simplepoll SET tstamp=". time() .", featured='" . ($blnVisible ? 1 : '') . "' WHERE id=?")
					   ->execute($intId);

		$this->createNewVersion('tl_simplepoll', $intId);
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
	 * Publish/unpublish a poll
	 * @param integer
	 * @param boolean
	 */
	public function toggleVisibility($intId, $blnVisible)
	{
		$this->createInitialVersion('tl_simplepoll', $intId);
	
		// Trigger the save_callback
		if (is_array($GLOBALS['TL_DCA']['tl_simplepoll']['fields']['published']['save_callback']))
		{
			foreach ($GLOBALS['TL_DCA']['tl_simplepoll']['fields']['published']['save_callback'] as $callback)
			{
				$this->import($callback[0]);
				$blnVisible = $this->$callback[0]->$callback[1]($blnVisible, $this);
			}
		}

		// Update the database
		$this->Database->prepare("UPDATE tl_simplepoll SET tstamp=". time() .", published='" . ($blnVisible ? 1 : '') . "' WHERE id=?")
					   ->execute($intId);

		$this->createNewVersion('tl_simplepoll', $intId);
	}
}

?>