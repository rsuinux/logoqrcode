<?php
//Pour voir les spip_log, il faut dans mes_options.php (voir inc/utils)

if (!defined('_ECRIRE_INC_VERSION'))
        return;

// Pour forcer les logs du plugin, outil actif ou non :
define('_LOG_CS_FORCE', 'oui');
if (defined('_LOG_CS')) {
        cs_log(str_repeat('-', 80), '', sprintf('LOGOQRCODE . [#%04X]. ', rand()));
        cs_log('INIT : logoqrcode_options, ' . $_SERVER['REQUEST_URI']);
}

// Logs de tmp/spip.log -> deja créé dans le plugin bonux
// function cs_log($variable, $prefixe = '', $stat = '') {

cs_log("  -- test de log ?");

?>

