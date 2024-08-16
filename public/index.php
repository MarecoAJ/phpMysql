<?php

use App\Controladores\ControladorEntradas;
use App\Controladores\ControladorSalidas;
use Routers\RouterHandler;

require("../vendor/autoload.php");

$slug = $_GET["slug"] ?? "";
$slug = explode("/", $slug);

$recurso = $slug[0] == "" ? "/" : $slug[0];
$id = $slug[1] ?? null;

$router = new RouterHandler();

switch($recurso){
    case "/":
        echo "estas en el inicio";
        break;
    case "entradas":
        $metodoHTTP = $_POST["method"] ?? "get";
        $router->set_metodoHTTP($metodoHTTP);
        $router->set_datos($_POST);
        $router->ruta(ControladorEntradas::class, $id);
        break;
    case "salidas":
        $metodoHTTP = $_POST["method"] ?? "get";
        $router->set_metodoHTTP($metodoHTTP);
        $router->set_datos($_POST);
        $router->ruta(ControladorSalidas::class, $id);
        break;
    default:
        echo "404 no encontrado";
        break;
}

?>