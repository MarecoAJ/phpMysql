<?php


class Connection {
    private static $instancia;
    private $connection;

    private function __construct(){
        $this->crear_conexion();
    }

    public static function getIntancia(){
        if(!self::$instancia instanceof self){
            self::$instancia = new self();
        }
        
        return self::$instancia;
    }

    public function get_db_instancia(){
        return $this->connection;
    }

    private function crear_conexion(){
        
        $server ="localhost";
        $database = "finanzas_php";
        $username = "root";
        $password = "";
        //$mysqli = mysqli_connect($server, $username, $password, $database);
        //POO
        $mysqli = new mysqli($server, $username, $password, $database);
        /*
        if(!$mysqli){
            die("Fallo de conexion". mysqli_connect_error());  
        }
        */
        if($mysqli->connect_errno){
            die("Fallo de conexion: {$mysqli->connect_error}"); 
        }

        $setnames = $mysqli->prepare("SET NAMES 'utf8'");
        $setnames->execute();

        $this->connection = $mysqli;
    }

}
?>