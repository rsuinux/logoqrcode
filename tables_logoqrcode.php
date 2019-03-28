<?php
if (!defined('_ECRIRE_INC_VERSION')) return;


function declarer_tables_logoqrcodes_sql($tables){
	$tables['spip_logoqrcode'] = array(
	
		'principale' => "oui",
		'field'=> array(
			"id_logoqrcode"	=> "bigint(21) NOT NULL",
			"taille"	=> "int  NOT NULL",
			"ecc"	=> "tinytext DEFAULT '' NOT NULL",
			"rubrique" => "bigint(21) NOT NULL DEFAULT 0",
			"article" => "bigint(21) NOT NULL DEFAULT 0",
			"maj"	=> "TIMESTAMP"
		),
	);
	
	return $tables;
}



function declarer_tables_interfaces($interfaces) {
	$interfaces['table_des_tables']['logoqrcode'] = 'logoqrcode';
	return $interfaces;
}



?>