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

	include_spip('base/upgrade');

	# Premiere installation  creation des tables
	$maj['create'] = array
		array(<ici, mes champs de base de données>
		array('<autre champs?>'),
		);

	maj_plugin($nom_meta_base_version, $version_cible, $maj);
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

	effacer_meta($nom_meta_base_version);
}
