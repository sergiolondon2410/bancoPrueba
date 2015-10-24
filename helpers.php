<?php
	function view($template, $vars = array())
	{
		extract($vars);//convierte los indices asociativos en variables

		require "views/".$template.".tpl.php";
	}

	function controller($name)
	{
		if(empty($name))
		{
			$name = "home";
		}
		$file = "controllers/$name.php";
		if(file_exists($file))
		{
			require $file;
		}
		else
		{
			header("HTTP/1.0 404 Not Found");
			exit("Pagina no encontrada");
		}
	}
?>