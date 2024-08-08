<?php

namespace App\Controladores;

use Database\MySQLi\Connection;

class ControladorEntradas {
    public function obtenerEntradas(){}

    public function obtenerEntrada(){}

    public function crearEntrada($datos){
        $connection = Connection::getIntancia()->get_db_instancia();
        $statement = $connection->prepare(
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

    public function mostrarCrearEntrada(){}

    public function editarEntrada(){}

    public function mostrarEditarEntrada(){}

    public function borrarEntrada(){}
}

?>