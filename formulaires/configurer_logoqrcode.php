<?php

/*
 * Création du tableau pour le formulaire de configuration du plugin
 * logoqrcode
 * R. Suinot <remi@suinot.org>
 * 20/05/2019 
 * 
 * En sortie de fonction: array complètée avec toutes les données de configuration
 *
 */
// Sécurité
if (!defined('_ECRIRE_INC_VERSION')) { return; }

include_spip('inc/config');

function formulaires_configurer_logoqrcode_charger_dist(){

	$config_rub=lire_config('logoqrcode/rub');
	$config_art=lire_config('logoqrcode/art');

	$rubrique = array(
		'saisie' => 'case',
		'options' => array(
			'nom' => 'rub',
			'label' => _T('logoqrcode:label_rubriques'),
			'explication' => _T('logoqrcode:explication_rubriques'),
		),
		'defaut' => $config_rub
	);
	$article = array(
		'saisie' => 'case',
		'options' => array(
			'nom' => 'art',
			'label' => _T('logoqrcode:label_articles'),
			'explication' => _T('logoqrcode:explication_articles'), 
		),
		'defaut' => $config_art
	);

	$valeurs = array(
		'rub' => $rubrique,
		'art' => $article
	);

		return $valeurs;
}

function formulaire_configurer_logoqrcode_verifier_dist(){
		return array();
}

function logoqrcode_traiter_dist() {
	include_spip('logoqrcode_fonctions');
	include_spip('formulaire/configurer_logoqrcode');
	$res=array(
		'editable' => 'non',
		'message_ok' => _T('fin des traitements sans retour d\'erreur!'),
	);
	return $res;
}

?>
