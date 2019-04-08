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
 * le nom de l'image dépend du numero de l'article/rubrique
 * => composition du nom "article_<id article>.png
 * => composition du nom "rubrique_<id rubrique>.png
 *
 * @param adresse article/rubrique id_article/id_rubrique
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

?>
