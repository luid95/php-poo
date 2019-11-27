<?php 
    require_once "conexion.php";
    require_once "metodosCRUD.php";

    $obj = new Conectar();
    $conexion = $obj->conexion();
    $id = $_GET['id'];
    $sql= "SELECT * FROM t_persona Where id='$id'";

    $result = mysqli_query($conexion, $sql);
    $ver = mysqli_fetch_row($result);
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
    <h1>Edtidar Datos</h1>
    <form action="procesos/actualizar.php" method="POST">
        <input type="text" hidden='' name="id" value="<?php echo $ver[0] ?>">
        <label>Nombre:</label>
        <p></p>
        <input type="text" name="nombre" value="<?php echo $ver[1] ?>">
        <p></p>
        <label>apellido:</label>
        <p></p>
        <input type="text" name="apellido" value="<?php echo $ver[2] ?>">
        <p></p>
        <button >Actualizar datos</button>
    </form>
    <br>
    <br>
    
</body>
</html>