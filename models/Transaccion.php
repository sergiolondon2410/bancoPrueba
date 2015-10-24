<?php
	require_once ('connection.php');

	class Transaccion{

		private static $instancia;
	    private $dbh;
	 
	    private function __construct()
	    {
	        $this->dbh = Conexion::singleton_conexion();
	    }
		
	    public static function singletonTransaccion()
	    {
	        if(!isset(self::$instancia)){
	            $miclase = __CLASS__;
	            self::$instancia = new $miclase;
	        }
	        return self::$instancia;
	    }

		
	    
	     // Evita que el objeto se pueda clonar
	    public function __clone(){
	        trigger_error('La clonación de este objeto no está permitida', E_USER_ERROR);
	    }
	}
?>