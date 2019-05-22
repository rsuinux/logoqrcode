<?php

/** 
 * Plugin Logoqrcode
 * (c) 2019 R. Suinot <remi@suinot.org>
 * Distribue sous licence GPL
 *
 */ 

if (!defined('_ECRIRE_INC_VERSION')) { return; }

/** 
 * Upgrade des tables 
 *
 * @param string $nom_meta_base_version 
 * @param string $version_cible
 */ 

function logoqrcode_upgrade($nom_meta_base_version,$version_cible){ 
	$maj=array();
	        // Première installation
        // Options de configuration
        $maj['create'] = array(
                array('ecrire_config', 'logoqrcode',
                        array(
				'taille' => '10',
				'ecc' =>    'L',
				'rub' =>    'off',
				'art' =>    'on',
				'marge' =>  '4',
				'arriere_plan' =>  '#9EEEEE',
				'avant_plan' =>  '#522525'
                        )
                )
        );

	$maj['1.0.0']=array(
		array( 'logoqrcode_upgrade_metas')
	);
	include_spip('base/upgrade');
	maj_plugin($nom_meta_base_version, $version_cible, $maj);
}

function logoqrcode_upgrade_metas(){ 
	include_spip('inc/config');
	$clefs = array	(
		'taille' =>  lire_config('logoqrcode/taille'),
		'ecc' =>  lire_config('logoqrcode/ecc'),
		'rub' =>  lire_config('logoqrcode/rub'),
		'art' =>  lire_config('logoqrcode/art'),
		'marge' =>  '4',
		'arriere_plan' =>  '#9EEEEE',
		'avant_plan' =>  '#522525'
	);
	effacer_config('logoqrcode/article');
	effacer_config('logoqrcode/taille');
	effacer_config('logoqrcode/ecc');
	effacer_config('logoqrcode/rub');
	effacer_config('logoqrcode/art');
	effacer_config('logoqrcode/marge');
	effacer_config('logoqrcode/arriere_plan');
	effacer_config('logoqrcode/avant_plan');
	effacer_config('logoqrcode');

	ecrire_config ('logoqrcode/taille' , $clefs['taille'] );
	ecrire_config ('logoqrcode/ecc', $clefs['ecc'] );
	ecrire_config ('logoqrcode/rub', $clefs['rub'] );
	ecrire_config ('logoqrcode/art', $clefs['art'] );
	ecrire_config ('logoqrcode/marge', $clefs['marge'] );
	ecrire_config ('logoqrcode/arriere_plan', $clefs['arriere_plan'] );
	ecrire_config ('logoqrcode/avant_plan', $clefs['avant_plan'] );
	spip_log("nouvelle config",_LOG_DEBUG);
}

/**
 *
 * @param string $nom_meta_base_version
 * Nom de la meta à supprimer
 * @return void
**/

function logoqrcode_vider_tables($nom_meta_base_version) {
	// effacer les données du plugin (à utiliser plutot que effacer_meta() )
	include_spip('inc/config');
        if (defined('_LOG_CS'))
		cs_log("logoqrcode vider table : $nom_meta_base_version => $version_cible");

	effacer_meta($nom_meta_base_version);
	effacer_meta('logoqrcode');
}
