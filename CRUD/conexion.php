<?php

    class Conectar{
        private $server="localhost";
        private $user="root";
        private $pass="";
        private $db="crudpoo";


        public function conexion(){
            $conexion=mysqli_connect($this->server,
                                    $this->user,
                                    $this->pass,
                                    $this->db);

            return $conexion;
        }
    }

    /*
    $band = new Conectar();
    if($band->conexion()){
        echo "Conectado con exito";
    }else{
        echo "Fallo al conectar";
    }
    */
    
?>