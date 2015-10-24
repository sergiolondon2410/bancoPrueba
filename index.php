<?php
	/*
	El frontend controller se encarga de 
	configurar la aplicación
	*/

	require 'config.php';
	// require 'helpers.php';

	session_start();
	
	//Library
	require 'library/Request.php';
	require 'library/Inflector.php';
	require 'library/View.php';

	define("DIR_RAIZ", Inflector::routeAdapter(__DIR__));
	

	// llamar a los controlador indicado

	if (empty($_GET["url"]))
	{
		$url = "";
	}
	else
	{
		$url = $_GET["url"];
	}
	
	$request = new Request($url);
	$request->execute();