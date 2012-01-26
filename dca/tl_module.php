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
 * @package    SimplePoll 
 * @license    LGPL 
 * @filesource
 */


/**
 * Load tl_content language file
 */
$this->loadLanguageFile('tl_content');
$this->loadDataContainer('tl_content');


/**
 * Add a palette to tl_module
 */
$GLOBALS['TL_DCA']['tl_module']['palettes']['simplepoll'] = '{title_legend},name,headline,type;{include_legend},simplepoll;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space';


/**
 * Add a field to tl_module
 */
$GLOBALS['TL_DCA']['tl_module']['fields']['simplepoll'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['simplepoll'],
	'exclude'                 => true,
	'inputType'               => 'select',
	'options_callback'        => array('tl_content_simplepoll', 'getPolls'),
	'eval'                    => array('mandatory'=>true, 'includeBlankOption'=>true, 'chosen'=>true, 'tl_class'=>'w50')
);

?>