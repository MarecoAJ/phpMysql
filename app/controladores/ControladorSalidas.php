<?php

namespace App\Controladores;

use Database\PDO\Connection;

class ControladorSalidas {

    private $db_connection;

    public function __construct(){
        $this->db_connection = Connection::getInstacia()->get_db_instancia();
    }

    public function obtenerSalidas(): array{
        $resultado = [];

        $statement = $this->db_connection->prepare(
            "SELECT * FROM salidas;"
        );

        $statement->execute();
        foreach($statement->fetchAll() as $item){
            array_push($resultado, 
                [
                    "id" => $item[0],
                    "tipos_pagos" => $item[1],
                    "tipos" => $item[2],
                    "fecha_pago" => $item[3],
                    "monto" => $item[4],
                    "descripcion" => $item[5]
                ]
            ); 
        }
        
       return $resultado;
    }

    public function obtenerSalida($id){
        $resultado = "";

        $statement = $this->db_connection->prepare(
            "SELECT * FROM salidas WHERE id=:id;"
        );

        $statement->execute([
            ":id" => $id
        ]);

        $resultado = $statement->fetch();
        $resultado = [
            "id" => $resultado[0],
            "tipos_pagos" => $resultado[1],
            "tipos" => $resultado[2],
            "fecha_pago" => $resultado[3],
            "monto" => $resultado[4],
            "descripcion" => $resultado[5]
        ];
        
       return $resultado;
    }

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