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

function formulaire_configurer_logoqrcode_charger_dist(){

	$config_rub=lire_config('logoqrcode/rub');

	$saisies = array(
		array(
			'saisie' => 'fieldset',
			'options' => array(
				'non' => "test",
				'label' => 'azerty',
				'pliable' => 'non'
			),
			'saisies' => array(
				array(
					'saisie' => 'hiddem',
					'options' => array(
						'nom' => 'test'
					)
				),
				array(
					'saisie' => 'case',
					'options' => array(
				 		'nom' => 'rub',
						'label' => _T('logoqrcode:label_rubriques'),
						'explication' => _T('logoqrcode:explication_rubriques'),
						'defaut' => $config_rub
					)
				),
			),
		),
	);


	return $saisies;
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
