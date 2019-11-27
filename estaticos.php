<?php

    class MiClase{

        public $mensaje="Hola";

        public function hola(){
            return "holaaa";
        }

        public static function metodo(){
            return $this->$mensaje;
        }

        public static function metodo2(){
            return self::hola();
        }
    }

    //no puede accedar a varibles fuera de la funcion
    //echo MiClase::metodo();

    //si logra accerder al contenido del otra funcion
    echo MiClase::metodo2();

?>