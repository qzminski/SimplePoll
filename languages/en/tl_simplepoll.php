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
 * Fields
 */
$GLOBALS['TL_LANG']['tl_simplepoll']['title']        = array('Title', 'Please enter the poll title.');
$GLOBALS['TL_LANG']['tl_simplepoll']['voteInterval'] = array('Vote interval', 'Here you can set the time value in seconds before a user can vote again. Set to 0 if vote can be made only once.');
$GLOBALS['TL_LANG']['tl_simplepoll']['protected']    = array('Protected poll', 'Only the logged in users will be able to vote.');
$GLOBALS['TL_LANG']['tl_simplepoll']['featured']     = array('Feature poll', 'Mark the poll as featured.');
$GLOBALS['TL_LANG']['tl_simplepoll']['showResults']  = array('Add a "show results" link', 'Adds a "show results" link to the template.');
$GLOBALS['TL_LANG']['tl_simplepoll']['published']    = array('Publish poll', 'Make the poll publicly visible on the website.');
$GLOBALS['TL_LANG']['tl_simplepoll']['closed']       = array('Close poll', 'Close the poll and display results. Voting will not be possible anymore!');
$GLOBALS['TL_LANG']['tl_simplepoll']['start']        = array('Show from', 'Disable voting the poll on the website before this day.');
$GLOBALS['TL_LANG']['tl_simplepoll']['stop']         = array('Show until', 'Disable voting the poll on the website on and after this day.');
$GLOBALS['TL_LANG']['tl_simplepoll']['tstamp']       = array('Revision date', 'Date and time of the latest revision');


/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_simplepoll']['title_legend']    = 'Title and featured';
$GLOBALS['TL_LANG']['tl_simplepoll']['redirect_legend'] = 'Redirect settings';
$GLOBALS['TL_LANG']['tl_simplepoll']['publish_legend']  = 'Publish settings';


/**
 * Buttons
 */
$GLOBALS['TL_LANG']['tl_simplepoll']['new']        = array('New poll', 'Create a new poll');
$GLOBALS['TL_LANG']['tl_simplepoll']['show']       = array('Poll details', 'Show the details of poll ID %s');
$GLOBALS['TL_LANG']['tl_simplepoll']['edit']       = array('Edit poll', 'Edit poll ID %s');
$GLOBALS['TL_LANG']['tl_simplepoll']['editheader'] = array('Edit poll settings', 'Edit the settings of poll ID %s');
$GLOBALS['TL_LANG']['tl_simplepoll']['copy']       = array('Duplicate poll', 'Duplicate poll ID %s');
$GLOBALS['TL_LANG']['tl_simplepoll']['delete']     = array('Delete poll', 'Delete poll ID %s');
$GLOBALS['TL_LANG']['tl_simplepoll']['toggle']     = array('Publish/unpublish poll', 'Publish/unpublish poll ID %s');
$GLOBALS['TL_LANG']['tl_simplepoll']['feature']    = array('Feature/unfeature poll', 'Feature/unfeature poll ID %s');

?>