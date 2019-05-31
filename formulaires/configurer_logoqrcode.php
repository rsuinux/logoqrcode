<?php

// Sécurité
if (!defined('_ECRIRE_INC_VERSION')) { return; }

function formulaire_logoqrcode_charger_dist(){
	include_spip('inc/config');

	$saisies = array();
	$taille = array(
		'saisie' => 'radio',
		'options' => array(
			'nom' => 'taille',
			'label' => _T('logoqrcode:label_taille'),
			'explication' => _T('logoqrcode:explication_taille_aide'),
			'datas' => array(
				'1' => ' 1 pixel',
				'2' => ' 2 pixels ',
				'3' => ' 3 pixels ',
				'4' => ' 4 pixels ',
				'5' => ' 5 pixels ',
				'6' => ' 6 pixels ',
				'7' => ' 7 pixels ',
				'8' => ' 8 pixels ',
				'9' => ' 9 pixels ',
				'10' => '10 pixels'
			),
			'defaut' => '4',
		)
	);
	$saisies['taille'] = $taille;
	
	$ecc = array(
		'saisie' => 'radio',
		'options' => array(
			'nom' => 'ecc',
			'label' => -T('logoqrcode:label_ecc'),
			'explication' => _T('logoqrcode:explication_ecc_aide'),
			'datas' => array(
				'L' => _T('logoqrcode:ecc_restauration_l'),
				'M' => _T('logoqrcode:ecc_restauration_m'),
				'Q' => _T('logoqrcode:ecc_restauration_q'),
				'H' => _T('logoqrcode:ecc_restauration_h') 
			),
			'defaut' => 'L',
		)
	);
	$saisies['ecc'] = $ecc;

	$config_rub=lire_config('logoqrcode/rub');
	$rub = array(
		'saisie' => 'case',
		'options' => array(
	 		'nom' => 'rub',
			'label' => _T('logoqrcode:label_rubriques'),
			'explication' => _T('logoqrcode:explication_rubriques'),
			'defaut' => $config_rub
		)
	);
	$saisies['rub'] = $rub;

	$config_art=lire_config('logoqrcode/art');
	$art = array(
		'saisie' => 'case',
		'options' => array(
	 		'nom' => 'art',
			'label' => _T('logoqrcode:label_articles'),
			'explication' => _T('logoqrcode:explication_articles'),
			'defaut' => $config_art
		)
	);
	$saisies['art'] = $art;

	$reprise = array(
		'saisie' => 'case',
		'otions' => array(
			'nom' => 'reprise',
			'label' => _T('logoqrcode:label_reprise'),
			'explication' => _T('logoqrcode:explication_reprise'),
			'defaut' => 'off'
		)
	);
	$saisies['reprise'] = $reprise;

	return $saisies;

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
