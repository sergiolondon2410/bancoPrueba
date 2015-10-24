<?php
	require_once "models/Transaccion.php";
	require_once "models/Cuenta.php";

	class TransaccionController
	{
		private $model;
		private $cuenta;

		public function __construct()
		{
			$this->model = Transaccion::singletonTransaccion();
			$this->cuenta = Cuenta::singletonCuenta();

		}

		public function propiasAction($id)
		{
			$lista = $this->cuenta->getCuentasUsuario($id);
			return $view = new View('transaccion','propias', ["lista" => $lista]);
		}
	}

	