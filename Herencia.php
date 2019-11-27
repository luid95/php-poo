<?php

    //La herencia: Obtener todas las propiedades de una clase a otra
    //mediante la palabra reservada extends
    class ClasePadre{
        //metodos
        public function MetodoPadre(){
            return "Hola desde el Padre";
        }

        public function Metodo1(){
            return "Este es metodo padre";
        }
    }

    class ClaseHijo extends ClasePadre{
        //metodo
        public function MetodoHijo(){
            return self::MetodoPadre();
        }
        public function MetodoHijo2(){
            return self::Metodo1();;
        }
        public function MetodoHijo3(){
            return parent::Metodo1();
        }

        public function Metodo1(){
            return "Este es metodo hijo";
        }
    }

    $objeto = new ClaseHijo();
    echo $objeto->MetodoPadre();
    echo "<br>";
    // o instancia rapida o de doble puntuacion
    echo ClaseHijo::MetodoPadre();
    echo "<br>";
    echo "<br>";
    echo "<br>";
    //propiedad self para llamar metodos dento de la misma clase
    //propiedad parent para llamar metodo de la clase a la que extiende y tenga metodos con el mismo nombre
    echo ClaseHijo::MetodoHijo2();
    echo "<br>";
    echo ClaseHijo::MetodoHijo3();
?>