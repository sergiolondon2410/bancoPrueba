<?php
	require_once "models/Usuario.php";

	class HomeController
	{
		private $model;

		public function __construct()
		{
			$this->model = Usuario::singletonUsuario();
		}

		public function indexAction()
		{
			return $view = new View('home','index');
		}

		public function loginAction()
		{
			return $view = new View('home','login');
		}

		public function logearAction($data)
		{
			extract($data);
			$result = $this->model->getUsuario($username, $pass);
			$mensaje = "Nombre de usuario y/o contraseña equivocadas";
			if($result)
			{
				$mensaje = "Usuario <strong>".$username."</strong> ingresó correctamente";
				extract($result[0]);
				$_SESSION["userid"] = $id;
				$_SESSION["username"] = $username;
				$_SESSION["nombre"] = $nombre;
			}
			return new View('home', 'index', ["mensaje" => $mensaje, "resultado" => $result]);
		}

		public function logoutAction()
		{
			$mensaje = "Ha cerrado sesión correctamente";
			session_unset();
			session_destroy();
			return $view = new View('home','index', ["mensaje" => $mensaje]);
		}
	}

	