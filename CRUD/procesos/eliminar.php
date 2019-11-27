<?php

    require_once '../conexion.php';
    require_once '../metodosCRUD.php';

    $id = $_GET['id'];
    
    //se realiza instancia de la clase metodos y el metodo eliminarDatos
    //pasando como parametoel id del registro
                
    if(metodos::eliminarDatos($id)==1){
        header('location:../index.php');
    }else{
        echo "Fallo al eliminar";
    }

?>