<?php                                                                                                                                                                                            
/**                                                                                                                                                                                              
 * Utilisations de pipelines par logoqrcode
 *
 * @plugin     Logo-qrcode
 *
 * @copyright  2018-1019
 *
 * @author     Rémi Suinot
 * @licence    GNU/GPL
 *
 * @package    SPIP\logoqrcode\Pipelines
 *
 */                                                                                                                                                                                              

if (!defined('_ECRIRE_INC_VERSION')) return;                                                                                                                                                     

/**
 * création du qrcode en fonction des parametres de l'administrateur.
 * le nom de l'image reprend le formalisme de spip
 * et la copie de l'image sera au même endroit que spip place les logos
 *
 * @param adresse article/rubrique id_article/id_rubrique
 * @return adresse image
 */

function creation_qrcode(){
	// récupération de la configuration
	lire_config('logoqrcode', 
	//test => si on qrcode les article: ok, on fait 
	// On commence par récupérer l'id article ou rubrique :
	$uri_article = generer_url_article($GLOBALS['id_article']);
	// image_adresse($uri_article);
	// fin test
	//
	//test => si on qrcode les rubrique: ok, on fait 
	// On commence par récupérer l'id article ou rubrique :
	$uri_rubrique = generer_url_rubrique($GLOBALS['id_rubrique']);
	// logoqrcode_getpng ( $uri_rubrique, $taille, $ecc);
	// fin test
	//
	
	return;
}
?>
