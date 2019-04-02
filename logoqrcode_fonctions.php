<?php
   /**
    * @copyright  2018
    * @author     rsuinux Remi Suinot <remi@suinot.org>
    * @licence    GNU/GPL
    */
   
// Sécurité
f (!defined('_ECRIRE_INC_VERSION')) { return; }                                                                                                                                                                                                
if ( !is_dir( _DIR_VAR."logoqrcode_cache/" ) ) {
	if ( !mkdir ( _DIR_VAR."logoqrcode/", 0777 ) ) {
		spip_log( "impossible decreer le repertoire", qrcode" );
	}
}

function inclure_qrcode ( $adresse, $image="") {
      # forumi un qrcode pur tous les article, automatiquement, comme logo d'article
      # Version 0.1 - 31 dec 2018
      # auteur: R. Suinot <remi@suinot.org>
      #
      # Parametre à l'entrée: 
      #   - $adresse = l'adresse complete de l'article (ex: http://exemple.com/spip.php?article32)
      #   - $image = l'adresse et le nom de l'image en retour: si non vide, alors pas de traitement de qrcode,et on met l'image passéee en parametre à la place.
      #   les tailles  $x et $y devront se récupérer depuis les parametres du plugin
}

function qrcode_getpng($texte, $taille, $ecc) {                                                                                                                                     

        $filename = _DIR_VAR."cache-qrcode/qrcode-".qrcode_hash($texte, $taille, $ecc).".png";                                                                                      

        if (! file_exists($filename)) {                                                                                                                                             

                require_once(find_in_path('lib/phpqrcode.php')) ;                                                                                                                   

                $errorCorrectionLevel = 'L' ;                                                                                                                                       

                if (isset($ecc) && in_array($ecc, array('L','M','Q','H')))                                                                                                          

                        $errorCorrectionLevel = $ecc;                                                                                                                               

                $matrixPointSize = 4;                                                                                                                                               

                if (isset($taille))                                                                                                                                                 

                        $matrixPointSize = min(max((int)$taille, 1), 10);                                                                                                           

                $data = 'https://www.spip.net' ;                                                                                                                                    

                if (isset($texte))                                                                                                                                                  

                        $data = $texte ;



                QRcode::png($data , $filename , $errorCorrectionLevel, $matrixPointSize ) ;

        }                                                                                                                                                                           

        return $filename ;                                                                                                                                                          

}                                                                                                                                                                                   

function filtre_qrcode($texte,$taille=false,$ecc=false,$link=false) {                                                                                                               
	$taille || ( $taille = lire_config('qrcode/taille') ) || ( $taille = 1 ) ;                                                                                                  
        $ecc || ( $ecc = lire_config('qrcode/ecc') ) || ( $ecc = 'L' ) ;                                                                                                            
        if ($class = lire_config('qrcode/css')) { $class = ' class="'.$class.'"' ; }                                                                                                
        if ($style = lire_config('qrcode/style')) { $style = ' style="'.$style.'"' ; }                                                                                              
        $filename = qrcode_getpng($texte, $taille, $ecc) ;                                                                                                                          
        $width = ' width="'.largeur($filename).'"';                                                                                                                                 
        $height = ' height="'.hauteur($filename).'"';                                                                                                                               
        if ($link) {                                                                                                                                                                
                return "<a href=\"$texte\" title=\""._T('qrcode:aide')."\"><img$class$style src=\"$filename\"$width$height alt=\"qrcode:$texte\"/></a>" ;                           
        } else {                                                                                                                                                                    
                return "<img$class$style src=\"$filename\"$width$height alt=\"qrcode:$texte\" title=\""._T('qrcode:aide')."\"/>" ;                                                  

	}
}

?>
