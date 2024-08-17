<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar un egreso</title>
</head>
<body>
    <h1>Agregar un egreso</h1>
    <form action="/salidas" method="post">
        <label for="tipos_pagos">Metodos de pago</label>
        <select name="tipos_pagos" id="tipos_pagos">
            <option value="1" selected>Efectivo</option>
            <option value="2">Tarjeta</option>
        </select>
        <label for="tipos">Tipo de egreso</label>
        <select name="tipos_pagos" id="tipos_pagos">
            <option value="1" selected>Retiro</option>
            <option value="2">Compra</option>
        </select>
        <label for="fecha_pago">Fecha</label>
        <input type="text" name="fecha_pago" id="fecha_pago">
        <label for="monto">Monto</label>
        <input type="text" name="monto" id="monto">
        <label for="descripcion">Descripcion</label>
        <textarea name="descripcion" id="descripcion"></textarea>
        <input type="hidden" name="metodoHTTP" value="post">
        <button type="submit">Guardar</button>
    </form>
</body>
</html>