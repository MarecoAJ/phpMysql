<?php

namespace App\Enums;

enum TiposPagosEnum : int {

    case Tarjeta = 1;
    case Efectivo = 2;
    case Transferencia = 3;
}
?>