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
$GLOBALS['TL_LANG']['tl_simplepoll']['title']            = array('Tytuł', 'Wprowadź tytuł sondy.');
$GLOBALS['TL_LANG']['tl_simplepoll']['voteInterval']     = array('Odstęp między głosowaniem', 'Tutaj możesz wprowadzić czas w sekundach, po którym użytkownik będzie mógł ponownie zagłosować. Ustaw 0 jeśli można zagłosować tylko raz.');
$GLOBALS['TL_LANG']['tl_simplepoll']['protected']        = array('Sonda chroniona', 'Tylko zalogowani użytkownicy będą mogli głosować.');
$GLOBALS['TL_LANG']['tl_simplepoll']['featured']         = array('Wyróźnij sondę', 'Oznacz tę sondę jako wyróżnioną.');
$GLOBALS['TL_LANG']['tl_simplepoll']['behaviorNotVoted'] = array('Użytkownik nie zagłosował', 'Określ zachowanie sondy jeśli użytkownik nie zagłosował.');
$GLOBALS['TL_LANG']['tl_simplepoll']['behaviorVoted']    = array('Użytkownik zagłosował', 'Określ zachowanie sondy jeśli użytkownik zagłosował.');
$GLOBALS['TL_LANG']['tl_simplepoll']['published']        = array('Publikuj sondę', 'Publikując tę sondę będzie ona widoczna na stronie.');
$GLOBALS['TL_LANG']['tl_simplepoll']['closed']           = array('Zamknij sondę', 'Zamknij sondę i wyłącz możliwość głosowania!');
$GLOBALS['TL_LANG']['tl_simplepoll']['start']            = array('Pokaż od', 'Wyłącz możliwość głosowania przed tym dniem.');
$GLOBALS['TL_LANG']['tl_simplepoll']['stop']             = array('Pokaż do', 'Wyłącz możliwość głosowania w tym i po tym dniu.');
$GLOBALS['TL_LANG']['tl_simplepoll']['tstamp']           = array('Data modyfikacji', 'Data i czas ostatniej modyfikacji.');


/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_simplepoll']['title_legend']    = 'Tytuł i wyróżnienie';
$GLOBALS['TL_LANG']['tl_simplepoll']['redirect_legend'] = 'Opcje przekierowania';
$GLOBALS['TL_LANG']['tl_simplepoll']['publish_legend']  = 'Ustawienia publikacji';


/**
 * Reference
 */
$GLOBALS['TL_LANG']['tl_simplepoll']['behaviorNotVoted']['opt1'] = 'Wyświetl link "pokaż wyniki"';
$GLOBALS['TL_LANG']['tl_simplepoll']['behaviorNotVoted']['opt2'] = 'Nie pokazuj wyników wcale';
$GLOBALS['TL_LANG']['tl_simplepoll']['behaviorVoted']['opt1']    = 'Pokaż wyniki natychmiastowo';
$GLOBALS['TL_LANG']['tl_simplepoll']['behaviorVoted']['opt2']    = 'Wyświetli link "pokaż wyniki"';
$GLOBALS['TL_LANG']['tl_simplepoll']['behaviorVoted']['opt3']    = 'Nie pokazuj wyników wcale';


/**
 * Miscellaneous
 */
$GLOBALS['TL_LANG']['tl_simplepoll']['closedPoll'] = 'Zamknięta';


/**
 * Buttons
 */
$GLOBALS['TL_LANG']['tl_simplepoll']['new']        = array('Nowa sonda', 'Utwórz nową sondę');
$GLOBALS['TL_LANG']['tl_simplepoll']['show']       = array('Szczegóły sondy', 'Pokaż szczegóły sondy ID %s');
$GLOBALS['TL_LANG']['tl_simplepoll']['edit']       = array('Edytuj sondę', 'Edytuj sondę ID %s');
$GLOBALS['TL_LANG']['tl_simplepoll']['editheader'] = array('Edytuj ustawienia sondy', 'Edytuj ustawienia sondy ID %s');
$GLOBALS['TL_LANG']['tl_simplepoll']['copy']       = array('Duplikuj sondę', 'Duplikuj sondę ID %s');
$GLOBALS['TL_LANG']['tl_simplepoll']['delete']     = array('Usuń sondę', 'Usuń sondę ID %s');
$GLOBALS['TL_LANG']['tl_simplepoll']['toggle']     = array('Publikuj/ukryj sondę', 'Publikuj/ukryj sondę ID %s');
$GLOBALS['TL_LANG']['tl_simplepoll']['feature']    = array('Wyróżnij sondę', 'Wyróżnij sondę ID %s');

?>