<?php

namespace App\Controladores;

use Database\PDO\Connection;

class ControladorSalidas {

    private $db_connection;

    public function __construct(){
        $this->db_connection = Connection::getInstacia()->get_db_instancia();
    }

    public function obtenerTodo(){

        $statement = $this->db_connection->prepare(
            "SELECT * FROM salidas;"
        );

        $statement->execute();
        $resultado = $statement->fetchAll();

        require("../recursos/vistas/salidas/index.php");
    }

    public function obtener($id){
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

    public function crear($datos){

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

        header("location: salidas");   
    }

    public function mostrarCrear(){
        require("../recursos/vistas/salidas/mostrarCrearSalida.php");
    }

    public function editar($datos, $id){

        $statement = $this->db_connection->prepare(
            "UPDATE salidas SET 
            tipos_pagos = :tipos_pagos,
            tipos = :tipos,
            fecha_pago = :fecha_pago,
            monto = :monto,
            descripcion = :descripcion
            WHERE id = :id;"
        );

        $statement->bindValue(":tipos_pagos", $datos["tipos_pagos"]);
        $statement->bindValue(":tipos", $datos["tipos"]);
        $statement->bindValue(":fecha_pago", $datos["fecha_pago"]);
        $statement->bindValue(":monto", $datos["monto"]);
        $statement->bindValue(":descripcion", $datos["descripcion"]);
        $statement->execute();
    }

    public function mostrarEditar(){}

    public function borrar($id){
        
        $this->db_connection->beginTransaction();

        $statement = $this->db_connection->prepare(
            "DELETE FROM salidas WHERE id = :id;"
        );
        $statement->execute([
            ":id" => $id
        ]);

        $this->db_connection->commit();


    }
}

?>