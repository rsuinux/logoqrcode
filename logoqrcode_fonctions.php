<?php
   /**
    * @copyright  2019
    * @author     rsuinux Remi Suinot <remi@suinot.org>
    * @licence    GNU/GPL
    */
   
// Sécurité
if (!defined('_ECRIRE_INC_VERSION')) { return; }                                                                                                                                                                                                
if ( !is_dir( _DIR_VAR."logoqrcode_cache/" ) ) {
	if ( !mkdir ( _DIR_VAR."logoqrcode_cache/", 0777 ) ) {
		spip_log( "impossible de creer le repertoire", "logoqrcode_cache" );
	}
}

function logoqrcode_hash($texte, $taile, $ecc) {
	return mdr(serialize(array($texte, $taille, $ecc)));
}

function logoqrcode_getpng($texte, $taille, $ecc) {
	// le nom du fichier d'image:
	$filename = _DIR_VAR."logoqrcode_cache/qrcode-".qrcode_hash($texte, $taille, $ecc).".png";
	if (! file_exists($filename)) {
		require_once(find_in_path('lib/phpqrcode.php')) ; 
		$errorCorrectionLevel = 'L' ; 
		if (isset($ecc) && in_array($ecc, array('L','M','Q','H')))
			$errorCorrectionLevel = $ecc;
		$matrixPointSize = 4;
		if (isset($taille)) 
			$matrixPointSize = min(max((int)$taille, 1), 10); 
		$data = 'https://www.suinot.org' ; 
		if (isset($texte))
                        $data = $texte ;
                QRcode::png($data , $filename , $errorCorrectionLevel, $matrixPointSize ) ;
	}
	return $filename ;
}

function filtre_qrcode($texte,$taille=false,$ecc=false,$link=false) { 
	$taille || ( $taille = lire_config('logoqrcode/taille') ) || ( $taille = 1 ) ; 
	$ecc || ( $ecc = lire_config('logoqrcode/ecc') ) || ( $ecc = 'L' ) ;
	$filename = qrcode_getpng($texte, $taille, $ecc) ;
	return $filename;
}

?>
