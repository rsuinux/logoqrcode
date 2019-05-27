<?php

// Sécurité
if (!defined('_ECRIRE_INC_VERSION')) { return; }               

function formulaire_logoqrcode_charger(){
	$valeurs = array();
	$pixels = array(
		'saisie' => 'radio',
		'options' => array(
		'nom' => 'taille',
		'label' => '<:logoqrcode:label_taille:>',
		'explication' => '<:logoqrcode:explication_taille_aide:>')
	);
	$valeurs['pixels'] = $pixels;

	return $valeurs;

}

function logoqrcode_traitement() {
		return;
}

?>
