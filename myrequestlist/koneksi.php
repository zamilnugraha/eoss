<?php

define('DB_NAMA', 'servicedesk'); 
define('DB_USER', 'usrservicedesk'); 
define('DB_PASSWORD', 'kfc14022');
define('DB_HOST', 'localhost'); 

function koneksi_buka() {
	mysql_select_db(DB_NAMA,mysql_connect(DB_HOST,DB_USER,DB_PASSWORD));
}

function koneksi_tutup() {
	mysql_close(mysql_connect(DB_HOST,DB_USER,DB_PASSWORD));
}
?>
