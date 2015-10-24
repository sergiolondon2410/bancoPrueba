<?php
	require_once "models/Cuenta.php";

	class CuentaController
	{
		private $model;

		public function __construct()
		{
			$this->model = Cuenta::singletonCuenta();
		}

		public function listarAction($id)
		{
			$lista = $this->model->getCuentasUsuario($id);
			return new View('cuenta', 'lista', ["lista" => $lista]);
		}
		
	}

?>