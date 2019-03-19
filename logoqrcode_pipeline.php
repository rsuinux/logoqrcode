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
 * le nom dépend du numero de l'article/rubrique
 * @param adresse article/rubrique
 * @return adresse image
 */

function creation_qrcode(){
	return;
}

/*
 * on surcharde logo_article
 * (ou on essai)
 * $id adresse de l'article
 * @return adresse de l'image
 */
function LOGO_ARTICLE($id){

	return;
}
?>
