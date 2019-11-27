<?php
    //los metodos protegidos solo pueden ser accedidos
    //desde herencia de clases o solo desde clases hijas.
    
    class ClasePadre{
        protected function Metodo1(){
            return "Metodo protegido";
        }
    }

    class ClaseHija extends ClasePadre{
        public function mostrar(){
            return parent::Metodo1();
        }
    }

    //no puede acceder a una funcion protegida 
    //echo ClasePadre::Metodo1();
    
    //si se puede llamar una funcion publica donde instanciamos un metodo privado de la misma clase.
    echo ClaseHija::mostrar();
    //o tambien, pero con mas lineas de codigo
    $var1= new ClaseHija;
    echo $var1->mostrar();

?>