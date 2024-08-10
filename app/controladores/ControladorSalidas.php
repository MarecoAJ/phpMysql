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