<?php

namespace App\Controladores;

use Database\PDO\Connection;

class ControladorSalidas {

    private $db_connection;

    public function __construct(){
        $this->db_connection = Connection::getInstacia()->get_db_instancia();
    }
    public function obtenerSalidas(){}

    public function obtenerSalida(){}

    public function crearSalida($datos){

        $statement = $this->db_connection->prepare(
            "INSERT INTO salidas (tipos_pagos, tipos, fecha_pago, monto, descripcion) 
            VALUES(:tipos_pagos, :tipos, :fecha_pago, :monto, :descripcion);"
        );

        $statement->bindValue(":tipos_pagos", $datos["tipos_pagos"]);
        $statement->bindValue(":tipos", $datos["tipos"]);
        $statement->bindValue(":fecha_pago", $datos["fecha_pago"]);
        $statement->bindValue(":monto", $datos["monto"]);
        $statement->bindValue(":descripcion", $datos["descripcion"]);
        $statement->execute();
         
    }

    public function mostrarCrearSalida(){}

    public function editarSalida(){}

    public function mostrarEditarSalida(){}

    public function borrarSalida(){}
}

?>