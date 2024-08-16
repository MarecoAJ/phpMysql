<?php

namespace Routers;

use App\Controladores\ControladorSalidas;

class RouterHandler {

    protected $metodoHTTP;
    protected $datos;

    public function set_metodoHTTP($metodoHTTP){
        $this->metodoHTTP = $metodoHTTP;
    }

    public function set_datos($datos){
        $this->datos = $datos;
    }

    public function ruta($controlador, $id){

        $recurso = new $controlador;
        switch($this->metodoHTTP){
            case "get":
                if ($id && $id == "mostrarcrear"){
                    $recurso->mostrarCrear();
                }
                else if($id){
                    $recurso->obtener($id);
                }
                else{
                    $recurso->obtenerTodo();
                }
                break;
            
            case "post":
                $recurso->crear($this->datos);
                break;
            
            case "delete":
                $recurso->borrar($id);
                break;

        }
    }
}

?>