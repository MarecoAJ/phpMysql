<?php

namespace Database\PDO;

class Connection {

    private static $instancia;
    private $connection;

    private function __construct(){
        $this->crear_conexion();
    }

    public static function getInstacia(){
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
        $database = "php_finanzas";
        $username = "root";
        $password = "";

        $connection = new \PDO("mysql:host=$server;dbname=$database", $username, $password);
        $setnames = $connection->prepare("SET NAMES 'utf8'");
        $setnames->execute();
        var_dump($setnames);

    }

}

?>
