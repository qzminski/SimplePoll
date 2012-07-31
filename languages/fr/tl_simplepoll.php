<?php
/**
 * TL_ROOT/system/modules/simplepoll/languages/fr/tl_simplepoll.php 
 * 
 * Contao extension: simplepoll 1.3.0 stable 
 * French translation file 
 * 
 * Copyright : &copy; 2011-2012 Kamil Kuzminski 
 * License   : LGPL 
 * Author    : Kamil Kuzminski (qzminski), http://qzminski.com 
 * Translator: Lionel Maccaud (lionel)
 */


/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_simplepoll']['title']['0']            = "Titre";
$GLOBALS['TL_LANG']['tl_simplepoll']['title']['1']            = "Veuillez, s'il vous plaît, insérer le titre du sondage.";
$GLOBALS['TL_LANG']['tl_simplepoll']['voteInterval']['0']     = "Intervalle entre chaque vote";
$GLOBALS['TL_LANG']['tl_simplepoll']['voteInterval']['1']     = "Ici vous pouvez définir la valeur du temps en seconde avant qu'un utilisateur puisse voter à nouveau. Mettre à 0 si le vote peut être effectué qu'une seule fois.";
$GLOBALS['TL_LANG']['tl_simplepoll']['protected']['0']        = "Sondage protégé";
$GLOBALS['TL_LANG']['tl_simplepoll']['protected']['1']        = "Seul les utilisateurs connectés pourront voter.";
$GLOBALS['TL_LANG']['tl_simplepoll']['featured']['0']         = "Sondage vedette";
$GLOBALS['TL_LANG']['tl_simplepoll']['featured']['1']         = "Définir le sondage en tant que vedette.";
$GLOBALS['TL_LANG']['tl_simplepoll']['behaviorNotVoted']['0'] = "L'utilisateur n'a pas voté";
$GLOBALS['TL_LANG']['tl_simplepoll']['behaviorNotVoted']['1'] = "Veuillez, s'il vous plaît, spécifier le comportement à appliquer si l'utilisateur n'a pas voté.";
$GLOBALS['TL_LANG']['tl_simplepoll']['behaviorVoted']['0']    = "L'utilisateur a voté";
$GLOBALS['TL_LANG']['tl_simplepoll']['behaviorVoted']['1']    = "Veuillez, s'il vous plaît, spécifier le comportement à appliquer si l'utilisateur a voté.";
$GLOBALS['TL_LANG']['tl_simplepoll']['published']['0']        = "Publier le sondage";
$GLOBALS['TL_LANG']['tl_simplepoll']['published']['1']        = "Rendre le sondage publiquement visible sur le site Internet.";
$GLOBALS['TL_LANG']['tl_simplepoll']['closed']['0']           = "Clore le sondage";
$GLOBALS['TL_LANG']['tl_simplepoll']['closed']['1']           = "Clore le sondage et désactiver le vote.";
$GLOBALS['TL_LANG']['tl_simplepoll']['start']['0']            = "Afficher à partir du";
$GLOBALS['TL_LANG']['tl_simplepoll']['start']['1']            = "Ne pas activer le vote du sondage sur le site avant ce jour.";
$GLOBALS['TL_LANG']['tl_simplepoll']['stop']['0']             = "Afficher jusqu'au";
$GLOBALS['TL_LANG']['tl_simplepoll']['stop']['1']             = "Désactiver le vote du sondage sur le site à compter de ce jour.";
$GLOBALS['TL_LANG']['tl_simplepoll']['tstamp']['0']           = "Date de révision";
$GLOBALS['TL_LANG']['tl_simplepoll']['tstamp']['1']           = "Date et heure de la dernière révision";


/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_simplepoll']['title_legend']    = "Titre et vedette";
$GLOBALS['TL_LANG']['tl_simplepoll']['redirect_legend'] = "Paramètres de redirection";
$GLOBALS['TL_LANG']['tl_simplepoll']['publish_legend']  = "Paramètres de publication";


/**
 * Reference
 */
$GLOBALS['TL_LANG']['tl_simplepoll']['behaviorNotVoted']['opt1'] = "Afficher un lien \"Afficher les résultats\"";
$GLOBALS['TL_LANG']['tl_simplepoll']['behaviorNotVoted']['opt2'] = "Ne pas afficher les résultats";
$GLOBALS['TL_LANG']['tl_simplepoll']['behaviorVoted']['opt1']    = "Afficher les résultats immédiatement";
$GLOBALS['TL_LANG']['tl_simplepoll']['behaviorVoted']['opt2']    = "Afficher un lien \"Afficher les résultats\"";
$GLOBALS['TL_LANG']['tl_simplepoll']['behaviorVoted']['opt3']    = "Ne pas afficher les résultats";


/**
 * Miscellaneous
 */
$GLOBALS['TL_LANG']['tl_simplepoll']['closedPoll'] = 'Clos';


/**
 * Buttons
 */
$GLOBALS['TL_LANG']['tl_simplepoll']['new']['0']        = "Nouveau sondage";
$GLOBALS['TL_LANG']['tl_simplepoll']['new']['1']        = "Créer un nouveau sondage";
$GLOBALS['TL_LANG']['tl_simplepoll']['show']['0']       = "Afficher les détails d'un sondage";
$GLOBALS['TL_LANG']['tl_simplepoll']['show']['1']       = "Afficher les détails du sondage avec l'ID %s";
$GLOBALS['TL_LANG']['tl_simplepoll']['edit']['0']       = "Éditer un sondage";
$GLOBALS['TL_LANG']['tl_simplepoll']['edit']['1']       = "Éditer le sondage avec l'ID %s";
$GLOBALS['TL_LANG']['tl_simplepoll']['editheader']['0'] = "Éditer les paramètres d'un sondage";
$GLOBALS['TL_LANG']['tl_simplepoll']['editheader']['1'] = "Éditer les paramètres du sondage avec l'ID %s";
$GLOBALS['TL_LANG']['tl_simplepoll']['copy']['0']       = "Dupliquer un sondage";
$GLOBALS['TL_LANG']['tl_simplepoll']['copy']['1']       = "Dupliquer le sondage avec l'ID %s";
$GLOBALS['TL_LANG']['tl_simplepoll']['delete']['0']     = "Supprimer un sondage";
$GLOBALS['TL_LANG']['tl_simplepoll']['delete']['1']     = "Supprimer le sondage avec l'ID %s";
$GLOBALS['TL_LANG']['tl_simplepoll']['toggle']['0']     = "Publier/Dépublier un sondage";
$GLOBALS['TL_LANG']['tl_simplepoll']['toggle']['1']     = "Publier/Dépublier le sondage avec l'ID %s";
$GLOBALS['TL_LANG']['tl_simplepoll']['feature']['0']    = "Définir un sondage ID %s en tant que vedette ou standard";
$GLOBALS['TL_LANG']['tl_simplepoll']['feature']['1']    = "Définir le sondage ID %s en tant que vedette ou standard";

?>
