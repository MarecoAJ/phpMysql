<?php

namespace App\Controladores;

use Database\MySQLi\Connection;

class ControladorEntradas {
    public function obtenerEntradas(){}

    public function obtenerEntrada(){}

    public function crearEntrada($datos){
        $connection = Connection::getIntancia()->get_db_instancia();
        $connection->query(
            "INSERT INTO entradas (tipos_pagos, tipos, fecha_pago, monto, descripcion) 
            VALUES(
            {$datos['tipos_pagos']},
            {$datos['tipos']},
            '{$datos['fecha_pago']}',
            {$datos['monto']},
            '{$datos['descripcion']}');
            ");
    }

    public function mostrarCrearEntrada(){}

    public function editarEntrada(){}

    public function mostrarEditarEntrada(){}

    public function borrarEntrada(){}
}

?>