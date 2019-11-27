<?php

    require_once '../conexion.php';
    require_once '../metodosCRUD.php';

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];

    //enviar los datos mediante un arreglo
    $datos = array(
                  $nombre,
                  $apellido  
                );
                //se realiza instancia de la clase metodos y el metodo insertarDatos
                //pasando como parametos los datos capturado del formulario
    if(metodos::insertarDatos($datos)==1){
        header('location:../index.php');
    }else{
        echo "Fallo al agregar";
    }

?>