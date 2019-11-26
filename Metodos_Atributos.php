<?php
//Una clase es nuestro molde de trabajo
//para nuestros metodos y atributos

    class MiClase{
        //declarar atributos
        public $atributo1 = "Hola mundo";


        //declarar metodos
        public function MiMetodo(){
            //Como podemos mandar a llamar un atributo
            //utilizando la pseudo variable this.

            return $this->atributo;
        }

    }


?>