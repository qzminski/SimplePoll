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
$GLOBALS['TL_LANG']['tl_simplepoll_option']['title']     = array('Tytuł', 'Wprowadź tytuł opcji.');
$GLOBALS['TL_LANG']['tl_simplepoll_option']['votes']     = array('Liczba głosów', 'Całkowita liczba głosów dla tej opcji.');
$GLOBALS['TL_LANG']['tl_simplepoll_option']['published'] = array('Publikuj opcję', 'Publikując tę opcję będzie ona widoczna na stronie.');


/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_simplepoll_option']['title_legend']   = 'Tytuł i głosy';
$GLOBALS['TL_LANG']['tl_simplepoll_option']['publish_legend'] = 'Ustawienia publikacji';


/**
 * Miscellaneous
 */
$GLOBALS['TL_LANG']['tl_simplepoll_option']['voteSingle'] = 'głosów: %s';
$GLOBALS['TL_LANG']['tl_simplepoll_option']['votePlural'] = 'głosów: %s';


/**
 * Buttons
 */
$GLOBALS['TL_LANG']['tl_simplepoll_option']['new']        = array('Nowa opcja', 'Dodaj nową opcję');
$GLOBALS['TL_LANG']['tl_simplepoll_option']['edit']       = array('Edytuj opcję', 'Edytuj opcję ID %s');
$GLOBALS['TL_LANG']['tl_simplepoll_option']['editheader'] = array('Edytuj ustawienia sondy', 'Edytuj ustawienia sondy ID %s');
$GLOBALS['TL_LANG']['tl_simplepoll_option']['copy']       = array('Duplikuj opcję', 'Duplikuj opcję ID %s');
$GLOBALS['TL_LANG']['tl_simplepoll_option']['delete']     = array('Usuń opcję', 'Usuń opcję ID %s');
$GLOBALS['TL_LANG']['tl_simplepoll_option']['show']       = array('Szczegóły opcji', 'Pokaż szczegóły opcji ID %s');
$GLOBALS['TL_LANG']['tl_simplepoll_option']['toggle']     = array('Publikuj/ukryj opcję', 'Publikuj/ukryh opcję ID %s');

?>