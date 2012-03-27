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
$GLOBALS['TL_LANG']['tl_simplepoll']['title']            = array('Nosaukums', 'Lūdzu, ievadi aptaujas nosaukumu.');
$GLOBALS['TL_LANG']['tl_simplepoll']['voteInterval']     = array('Balsošanas intervāls', 'Šeit var iestatīt laiku sekundēs atkārtotai balsošanai. Izvēlies 0, lai atļautu balsosanu tikai vienreiz.');
$GLOBALS['TL_LANG']['tl_simplepoll']['protected']        = array('Aizsargātas aptaujas', 'Tikai ienākušie lietotāji varēs balsot.');
$GLOBALS['TL_LANG']['tl_simplepoll']['featured']         = array('Iezīmēt aptauju', 'Iezīmē aptauju, lai to izceltu.');
$GLOBALS['TL_LANG']['tl_simplepoll']['behaviorNotVoted'] = array('Lietotājs nav balsojis', 'Lūdzu pasaki, ko darīt, ja lietotājs nav balsojis.');
$GLOBALS['TL_LANG']['tl_simplepoll']['behaviorVoted']    = array('Lietotājs ir balsojis', 'Lūdzu pasaki, ko darīt, ja lietotājs jau ir balsojis.');
$GLOBALS['TL_LANG']['tl_simplepoll']['published']        = array('Publicēt aptauju', 'Padari aptauju publiski redzamu.');
$GLOBALS['TL_LANG']['tl_simplepoll']['closed']           = array('Slēgt aptauju', 'Slēdz aptauju un atspējo balsošanu.');
$GLOBALS['TL_LANG']['tl_simplepoll']['start']            = array('Rādīt no', 'Atspējo balsošanu pirms šīs dienas.');
$GLOBALS['TL_LANG']['tl_simplepoll']['stop']             = array('Rādīt līdz', 'Atspējo balsošanu šajā dienā un vēlāk.');
$GLOBALS['TL_LANG']['tl_simplepoll']['tstamp']           = array('Izmaiņu datums', 'Pēdējo izmaiņu datums un laiks.');


/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_simplepoll']['title_legend']    = 'Nosaukums un statuss';
$GLOBALS['TL_LANG']['tl_simplepoll']['redirect_legend'] = 'Novirzīšana';
$GLOBALS['TL_LANG']['tl_simplepoll']['publish_legend']  = 'Publicēšana';


/**
 * Reference
 */
$GLOBALS['TL_LANG']['tl_simplepoll']['behaviorNotVoted']['opt1'] = 'Parādīt "Rezultāti" saiti';
$GLOBALS['TL_LANG']['tl_simplepoll']['behaviorNotVoted']['opt2'] = 'Vispār nerādīt rezultātus';
$GLOBALS['TL_LANG']['tl_simplepoll']['behaviorVoted']['opt1']    = 'Rādīt rezultātus uzreiz';
$GLOBALS['TL_LANG']['tl_simplepoll']['behaviorVoted']['opt2']    = 'Parādīt "Rezultāti" saiti';
$GLOBALS['TL_LANG']['tl_simplepoll']['behaviorVoted']['opt3']    = 'Vispār nerādīt rezultātus';


/**
 * Miscellaneous
 */
$GLOBALS['TL_LANG']['tl_simplepoll']['closedPoll'] = 'Aizvērta';


/**
 * Buttons
 */
$GLOBALS['TL_LANG']['tl_simplepoll']['new']        = array('Jauna aptauja', 'Izveidot jaunu aptauju');
$GLOBALS['TL_LANG']['tl_simplepoll']['show']       = array('Aptaujas detaļas', 'Rādīt aptaujas ID %s detaļas');
$GLOBALS['TL_LANG']['tl_simplepoll']['edit']       = array('Rediģēt aptauju', 'Rediģēt aptauju ID %s');
$GLOBALS['TL_LANG']['tl_simplepoll']['editheader'] = array('Rediģēt aptaujas iestatījumus', 'Rediģēt aptaujas ID %s iestatījumus');
$GLOBALS['TL_LANG']['tl_simplepoll']['copy']       = array('Dublicēt aptauju', 'Dublicēt aptauju ID %s');
$GLOBALS['TL_LANG']['tl_simplepoll']['delete']     = array('Dzēst aptauju', 'Dzēst aptauju ID %s');
$GLOBALS['TL_LANG']['tl_simplepoll']['toggle']     = array('Publicēt/nepublicēt aptauju', 'Publicēt/nepublicēt aptauju ID %s');
$GLOBALS['TL_LANG']['tl_simplepoll']['feature']    = array('Iezīmēt/neiezīmēt aptauju', 'Iezīmēt/neiezīmēt aptauju ID %s');

?>