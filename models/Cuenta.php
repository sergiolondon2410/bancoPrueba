<?php
	require_once ('connection.php');

	class Cuenta{

		private static $instancia;
	    private $dbh;
	 
	    private function __construct()
	    {
	        $this->dbh = Conexion::singleton_conexion();
	    }
		
	    public static function singletonCuenta()
	    {
	        if(!isset(self::$instancia)){
	            $miclase = __CLASS__;
	            self::$instancia = new $miclase;
	        }
	        return self::$instancia;
	    }

		public function getCuentasUsuario($id){
			try{
	            $query = $this->dbh->prepare('SELECT * FROM cuentas WHERE id_usuario = :id');
	            $query->bindParam(':id', $id, PDO::PARAM_INT);
	            $query->execute();
				return $query->fetchAll(PDO::FETCH_ASSOC);
				$this->dbh = null;
			}catch(PDOException $e){
				print "Error!: " . $e->getMessage();
			}
		}
	    
	     // Evita que el objeto se pueda clonar
	    public function __clone(){
	        trigger_error('La clonación de este objeto no está permitida', E_USER_ERROR);
	    }
	}
?>