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
 * @author     Andreas Schempp <andreas@schempp.ch>
 * @package    SimplePoll 
 * @license    LGPL 
 * @filesource
 */


/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_simplepoll']['title']        = array('Titel', 'Geben Sie einen Titel für die Umfrage ein.');
$GLOBALS['TL_LANG']['tl_simplepoll']['voteInterval'] = array('Teilnahme-Abstand', 'Geben Sie ein für wieviele Sekunden ein Person gesperrt ist, bevor er ein zweites Mal teilnehmen kann. Geben Sie 0 wenn nur eine Teilnahme erlaubt ist.');
$GLOBALS['TL_LANG']['tl_simplepoll']['protected']    = array('Umfrage schützen', 'Nur angemeldete Mitglieder können teilnehmen.');
$GLOBALS['TL_LANG']['tl_simplepoll']['featured']     = array('Umfrage hervorheben', 'Die Umfrage als "hervorgehoben" markieren.');
$GLOBALS['TL_LANG']['tl_simplepoll']['showResults']  = array('"Resultate" Button hinzufügen', 'Fügt einen Button hinzu, mit dem die Resultate angezeigt werden können.');
$GLOBALS['TL_LANG']['tl_simplepoll']['published']    = array('Umfrage veröffentlichen', 'Die Umfrage auf der Webseite anzeigen.');
$GLOBALS['TL_LANG']['tl_simplepoll']['closed']       = array('Umfrage schließen', 'Umfrage schließen und die Resultate anzeigen.');
$GLOBALS['TL_LANG']['tl_simplepoll']['start']        = array('Anzeigen von', 'Teilnahmen sind erst ab diesem Tag möglich.');
$GLOBALS['TL_LANG']['tl_simplepoll']['stop']         = array('Anzeigen bis', 'Teilnahmen sind nur bis zu diesem Tag möglich.');


/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_simplepoll']['title_legend']   = 'Titel und Status';
$GLOBALS['TL_LANG']['tl_simplepoll']['publish_legend'] = 'Veröffentlichung';


/**
 * Buttons
 */
$GLOBALS['TL_LANG']['tl_simplepoll']['new']        = array('Neue Umfrage', 'Eine neue Umfrage anlegen');
$GLOBALS['TL_LANG']['tl_simplepoll']['edit']       = array('Umfrage bearbeiten', 'Umfrage ID %s bearbeiten');
$GLOBALS['TL_LANG']['tl_simplepoll']['editheader'] = array('Umfrage-Einstellungen bearbeiten', 'Einstellunge der Umfrage ID %s bearbeiten');
$GLOBALS['TL_LANG']['tl_simplepoll']['copy']       = array('Umfrage duplizieren', 'Umfrage ID %s duplizieren');
$GLOBALS['TL_LANG']['tl_simplepoll']['delete']     = array('Umfrage löschen', 'Umfrage ID %s löschen');
$GLOBALS['TL_LANG']['tl_simplepoll']['show']       = array('Umfragedetails', 'Details der Umfrage ID %s anzeigen');
$GLOBALS['TL_LANG']['tl_simplepoll']['toggle']     = array('Umfrage veröffentlichen/unveröffentlichen', 'Umfrage ID %s veröffentlichen/unveröffentlichen');
$GLOBALS['TL_LANG']['tl_simplepoll']['feature']    = array('Umfrage hervorheben/zurücksetzen', 'Umfrage ID %s hervorheben/zurücksetzen');

