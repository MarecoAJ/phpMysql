<?php

namespace App\Controladores;

use Database\PDO\Connection;

class ControladorSalidas {
    public function obtenerSalidas(){}

    public function obtenerSalida(){}

    public function crearSalida($datos){

        $connection = Connection::getInstacia()->get_db_instancia();
        $statement = $connection->prepare(
            "INSERT INTO salidas (tipos_pagos, tipos, fecha_pago, monto, descripcion) 
            VALUES(:tipos_pagos, :tipos, :fecha_pago, :monto, :descripcion);"
        );
        $statement->execute($datos);
        
    }

    public function mostrarCrearSalida(){}

    public function editarSalida(){}

    public function mostrarEditarSalida(){}

    public function borrarSalida(){}
}

?>