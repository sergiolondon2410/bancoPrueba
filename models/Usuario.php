<?php
	require_once ('connection.php');

	class Usuario{

		private static $instancia;
	    private $dbh;
	 
	    private function __construct()
	    {
	        $this->dbh = Conexion::singleton_conexion();
	    }
		
	    public static function singletonUsuario()
	    {
	        if(!isset(self::$instancia)){
	            $miclase = __CLASS__;
	            self::$instancia = new $miclase;
	        }
	        return self::$instancia;
	    }

		public function getUsuario($username, $pass){
			try{
	            $query = $this->dbh->prepare('SELECT * FROM usuarios WHERE username = :username AND pass = :pass');
	            $query->bindParam(':username', $username, PDO::PARAM_STR);
	            $query->bindParam(':pass', $pass, PDO::PARAM_INT);
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