<?php
/**
 * Fichier gérant l'installation et désinstallation du plugin Logo-qrcode
 *
 * @plugin     Logo-qrcode
 * @copyright  2018
 * @author     Rémi Suinot
 * @licence    GNU/GPL v3
 * @package    SPIP\Logo-qrcode\Installation
 */

if (!defined('_ECRIRE_INC_VERSION')) {
	return;
}


/**
 * Fonction d'installation et de mise à jour du plugin Logo-qrcode.
 *
 * - créer la structure SQL,
 * - insérer du pre-contenu,
 * - installer des valeurs de configuration,
 * - mettre à jour la structure SQL 
 *
 * @param string $nom_meta_base_version
 *     Nom de la meta informant de la version du schéma de données du plugin installé dans SPIP
 * @param string $version_cible
 *     Version du schéma de données dans ce plugin (déclaré dans paquet.xml)
 * @return void
**/
function logoqrcode_upgrade($nom_meta_base_version, $version_cible) {
	$maj = array();

	# Premiere installation  creation des tables
	$maj['create'] = array(
		array('maj_tables', array('spip_logoqrcode')),
		);

	// Mise à jour si besoin dans le futur: (voir plugin GIS pour plus de détail si besoin)
	// $maj['1.0.5'] = array(
	// 	// ajout de la nouvelle table
	// 	array('maj_tables', array('spip_logoqrcode')),
	// 	// on renomme <chanp_a_modifier> en <nouveau>
	// 	array('sql_alter', 'TABLE spip_logoqrcode CHANGE <champ_à_modifier> <nouveau> <type(long/float/...>(x) NULL NULL'),
	//	);

	include_spip('base/upgrade');
	maj_plugin($nom_meta_base_version, $version_cible, $maj);
}

function logoqrcode_upgrade_1_0_5() {
	// ici, toutes les modification de la base de données nécessaire en cas d'upgrade 
	// le numéro de la fonction ce retrouve dans le numero d'upgrade!

}

/**
 * Fonction de désinstallation du plugin Logo-qrcode.
 * 
 * - nettoyer toutes les données ajoutées par le plugin et son utilisation
 * - supprimer les tables et les champs créés par le plugin. 
 *
 * @param string $nom_meta_base_version
 *     Nom de la meta informant de la version du schéma de données du plugin installé dans SPIP
 * @return void
**/
function logoqrcode_vider_tables($nom_meta_base_version) {

	sql_drop_table('spip_logoqrcode');
	effacer_meta($nom_meta_base_version);
	// effacer configuration?
	effacer_meta('logoqrcode');
}
