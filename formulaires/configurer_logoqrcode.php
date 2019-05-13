<?php
if (!defined('_ECRIRE_INC_VERSION')) return;  // Sécurité
   //  https://zone.spip.net/trac/spip-zone/browser/spip-zone/_squelettes_/soyezcreateurs_net/trunk/plugins/soyezcreateurs/formulaires/configurer_soyezcreateurs.html?rev=114670
function formulaires_logoqrcode_saisies() {

	$saisies = array(
		array( 
			'saisie' => 'fieldset',
			'options' => array(
				'nom' => 'pixel',
				'label' => 'Pixel(s) ',
				'datas' => array( 
					'1 ' => '1 ',
					'2 ' => '3 ',
					'3 ' => '3 ',
					'4 ' => '4 ',
					'5 ' => '5 ',
					'6 ' => '6 ',
					'7 ' => '7 ',
					'8 ' => '8 ',
					'9 ' => '9 ',
					'10' => '10'
				)
			)
		),
		array(
			'saisie' => 'fieldset',
			'options' => array(
				'nom' => 'ecc',
				'label' => 'Pixel(s) ',
				'datas' => array( 
					'L ' => 'L',
					'M ' => 'M',
					'Q ' => 'Q',
					'H ' => 'H'
				)
			)
		),
		array( // champ genre : oui/non
			'saisie' => 'radio',
			'options' => array(
				'nom' => 'rubrique',
				'label' => _T('<:logoqrcode:logoqrcode_rubriques:>'),
				'obligatoire' => 'oui'
			)
		),
		array( // champ genre : oui/non
			'saisie' => 'radio',
			'options' => array(
				'nom' => 'article',
				'label' => _T('<:logoqrcode:logoqrcode_articles:>'),
				'obligatoire' => 'oui'
			)
		)
	);
 
	include_spip('inc/saisies');
	$erreurs = saisies_verifier($saisies);
	return $saisies;
}
?>
