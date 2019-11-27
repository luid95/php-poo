<?php

    class metodos{

        public function mostrarDatos($sql){
            $v = new Conectar();
            $c = $v->conexion();

            $result = mysqli_query($c, $sql);

            return mysqli_fetch_all($result, MYSQLI_ASSOC);
        }

        public function insertarDatos($datos){
            $v = new Conectar();
            $c = $v->conexion();

            $sql = "INSERT INTO t_persona(nombre, apellido) VALUES('$datos[0]', '$datos[1]')";
            
            return $result = mysqli_query($c, $sql);
        }

        public function actualizarDatos($datos){
            $v = new Conectar();
            $c = $v->conexion();

            $sql = "UPDATE t_persona SET nombre='$datos[1]', apellido='$datos[2]' WHERE id='$datos[0]'";

            return $result = mysqli_query($c, $sql);
        }

        public function eliminarDatos($id){
            $v = new Conectar();
            $c = $v->conexion();

            $sql = "DELETE FROM t_persona WHERE id='$id'";

            return $result = mysqli_query($c, $sql);
        }
    }

?>