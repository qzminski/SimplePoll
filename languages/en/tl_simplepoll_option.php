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
 * Fields
 */
$GLOBALS['TL_LANG']['tl_simplepoll_option']['title']     = array('Title', 'Please enter the option title.');
$GLOBALS['TL_LANG']['tl_simplepoll_option']['votes']     = array('Number of votes', 'The total number of votes for this option.');
$GLOBALS['TL_LANG']['tl_simplepoll_option']['published'] = array('Publish option', 'Make the option publicly visible on the website.');


/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_simplepoll_option']['title_legend']   = 'Title and votes';
$GLOBALS['TL_LANG']['tl_simplepoll_option']['publish_legend'] = 'Publish settings';


/**
 * Buttons
 */
$GLOBALS['TL_LANG']['tl_simplepoll_option']['new']        = array('New option', 'Create a new option');
$GLOBALS['TL_LANG']['tl_simplepoll_option']['edit']       = array('Edit option', 'Edit option ID %s');
$GLOBALS['TL_LANG']['tl_simplepoll_option']['editheader'] = array('Edit poll settings', 'Edit the settings of poll ID %s');
$GLOBALS['TL_LANG']['tl_simplepoll_option']['copy']       = array('Duplicate option', 'Duplicate option ID %s');
$GLOBALS['TL_LANG']['tl_simplepoll_option']['delete']     = array('Delete option', 'Delete option ID %s');
$GLOBALS['TL_LANG']['tl_simplepoll_option']['show']       = array('Option details', 'Show the details of option ID %s');
$GLOBALS['TL_LANG']['tl_simplepoll_option']['toggle']     = array('Publish/unpublish option', 'Publish/unpublish option ID %s');

?>