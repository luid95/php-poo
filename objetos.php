<?php
//Una clase es nuestro molde de trabajo
//para nuestros metodos y atributos

    class MiClase{
        //declarar atributos
        public $resultado =0;


        //declarar metodos
        public function MiMetodo($v1, $v2){
            //Como podemos mandar a llamar un atributo
            //utilizando la pseudo variable this.

            $this->resultado = $v1 + $v2;

            return $this->resultado;
        }

    }

    //termina la clase
    //podemos instanciar o declarar objeto
    $MiObjeto = new MiClase();

    echo $MiObjeto->MiMetodo(5,10);


?>