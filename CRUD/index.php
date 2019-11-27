<?php 
    require_once "conexion.php";
    require_once "metodosCRUD.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD POO</title>
    <script language="JavaScript" type="text/javascript" src="ajax.js"></script>
</head>
<body>

    <form action="procesos/insertar.php" method="POST">
        <label>Nombre:</label>
        <p></p>
        <input type="text" name="nombre">
        <p></p>
        <label>apellido:</label>
        <p></p>
        <input type="text" name="apellido">
        <p></p>
        <button >Guardar datos</button>
    </form>
    <br>
    <br>
    <table style="border-collapse: collapse;" border="1">
    <tr>
        <td>Nombre</td>
        <td>Apellido</td>
        <td>Actualizar</td>
        <td>Eliminar</td>
    </tr>
    <?php

    $sql = "SELECT * FROM t_persona";
    $obj = metodos::mostrarDatos($sql);

    foreach ($obj as $key ) {
        
    ?>
    <tr>
        <td><?php echo $key['nombre'] ?></td>
        <td><?php echo $key['apellido'] ?></td>
        <td>
            <a href="editar.php?id=<?php echo $key['id']; ?>">Editar</a>
        </td>
        <td>
            <a href="procesos/eliminar.php?id=<?php echo $key['id']; ?>">Quitar</a>
        </td>
    </tr>
    <?php
    }
    ?>
    </table>
</body>
</html>