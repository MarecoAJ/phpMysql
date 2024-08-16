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
                if ($id && $id == "mostrarcrearsalida"){
                    $recurso->mostrarCrearSalida();
                }
                else if($id){
                    $recurso->obtenerSalida($id);
                }
                else{
                    $recurso->obtenerSalidas();
                }
                break;
            
            case "post":
                $recurso->crearSalida($this->datos);
                break;
            
            case "delete":
                $recurso->borrarSalida($id);
                break;

        }
    }
}

?>