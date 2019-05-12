<?php
if (!defined('_ECRIRE_INC_VERSION')) return;  // Sécurité
    
function formulaires_logoqrcode_saisies() {
$saisies_logoqrcode = array(
	array( 
		'saisie' => 'fieldset',
		'options' => array(
			'nom' => 'pixel',
			'label' => 'Pixel(s) ',
			'datas' => array( 
				'1 ' => '1 ',
				'2 ' => '2 ',
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
		'saisie' => 'oui_non',
		'options' => array(
			'nom' => 'rubrique',
			'label' => _T('<:logoqrcode:logoqrcode_rubriques:>'),
			'obligatoire' => 'oui'
		)
	),
	array( // champ genre : oui/non
		'saisie' => 'oui_non',
		'options' => array(
			'nom' => 'article',
			'label' => _T('<:logoqrcode:logoqrcode_articles:>'),
			'obligatoire' => 'oui'
		)
	)
);
return $saisies_logoqrcode;
}
?>
