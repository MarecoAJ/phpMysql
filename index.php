<?php

use App\Controladores\ControladorEntradas;
use App\Controladores\ControladorSalidas;
use App\Enums\TiposEntradasEnum;
use App\Enums\TiposPagosEnum;
use App\Enums\TiposSalidasEnum;

require("vendor/autoload.php");
/*
$datos = [
    "tipos_pagos"=> TiposPagosEnum::Transferencia->value,
    "tipos"=> TiposEntradasEnum::Sueldo->value,
    "fecha_pago"=> date("Y-m-d H:i:s"),
    "monto" => 1000,
    "descripcion"=> "horas trabajaqdas",
];

$entradas_controlador = new ControladorEntradas();
$entradas_controlador -> crearEntrada($datos);
*/
$datos = [
    "tipos_pagos"=> TiposPagosEnum::Transferencia->value,
    "tipos"=> TiposSalidasEnum::compra->value,
    "fecha_pago"=> date("Y-m-d H:i:s"),
    "monto" => 999,
    "descripcion"=> "remeras",
];
   
$salidas_controlador = new ControladorSalidas();
$salidas_controlador -> crearSalida($datos);
?>