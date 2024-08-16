<?php

namespace App\Controladores;

use Database\MySQLi\Connection;

class ControladorEntradas {

    private $db_connection;

    public function __construct(){
        $this->db_connection = Connection::getInstancia()->get_db_instancia();
    }

    public function obterTodo(){}

    public function obtener(){}

    public function crear($datos){
    
        $statement = $this->db_connection->prepare(
            "INSERT INTO entradas (tipos_pagos, tipos, fecha_pago, monto, descripcion) 
            VALUES(?, ?, ?, ?, ?)");

            $tipos_pagos = $datos['tipos_pagos'];
            $tipos = $datos['tipos'];
            $fecha_pago = $datos['fecha_pago'];
            $monto = $datos['monto'];
            $descripcion = $datos['descripcion'];

        $statement->bind_param("iisds", $tipos_pagos, $tipos, $fecha_pago, $monto, $descripcion);
        $statement->exec();
    }

    public function mostrarCrear(){}

    public function editar(){}

    public function mostrarEditar(){}

    public function borrar(){}
}

?>