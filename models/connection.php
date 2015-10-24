<?php
	require_once "config.php";
	class Conexion{

	    private static $instancia;
	    private $dbh;
	 
	    private function __construct(){
	        try{
	        	$this->dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASS);
	            $this->dbh->exec("SET CHARACTER SET utf8");
	            $this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$this->dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
	        } catch(PDOException $e){
	            print "Error!: " . $e->getMessage();
	            die();
	        }
	    }

	    public function prepare($sql){
	        return $this->dbh->prepare($sql);
	    }
	 
	    public static function singleton_conexion(){

	        if(!isset(self::$instancia)){
	            $miclase = __CLASS__;
	            self::$instancia = new $miclase;
	        }
	        return self::$instancia;  
	    }

	     // Evita que el objeto se pueda clonar
	    public function __clone()
	    {
	        trigger_error('La clonación de este objeto no está permitida', E_USER_ERROR);
	    }
	}
?>