<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculadora POO-PHP</title>
</head>
<body>
    <form action="procesar.php" method="post">
        <label>Valor 1</label>
        <p></p>
        <input type="text" name="val1">
        <p></p>
        <label>Valor 2</label>
        <p></p>
        <input type="text" name="val2">
        <p></p>
        <select name="opcion">
            <option value="sum">Suma</option>
            <option value="res">Resta</option>
            <option value="multi">Multiplicacion</option>
            <option value="div">Division</option>
        </select>
        <p></p>
        <button>Calcular</button>
    </form>
</body>
</html>