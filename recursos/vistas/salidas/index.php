<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista egresos</title>
</head>
<body>
    <h1>Lista egresos</h1>
    <ul>
        <?php foreach($resultado as $item): ?>
        <li>
            <?=
            $item["tipos_pagos"] . " - " . $item["tipos"] . " - " .$item["fecha_pago"] . " - " .$item["monto"] . " - " .$item["descripcion"]
            ?>
        </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>