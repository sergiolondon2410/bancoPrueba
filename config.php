<?php
	ini_set('display_errors', true);
	error_reporting(E_ALL);

	// Definir las variables de conexión
	$host = 'localhost';
	$dbuser = 'active';
	$dbpass = 'r3c0rd';
	$dbname = 'cognox_banco';

	define('DB_HOST', $host);
	define('DB_USER', $dbuser);
	define('DB_PASS', $dbpass);
	define('DB_NAME', $dbname);

?>