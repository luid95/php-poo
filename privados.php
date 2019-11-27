<?php
    //un metodo privado solo puede ser accedido en la misma clase donde fue creado,
    //al mismo tiempo no puede mostrarse en instancia.
    //Debe manejarse en un metodo de la misma clase.
    class Clase1{
        private function Saludar(){
            return "Saludando";
        }

        public function MandaSaludo(){
            return self::Saludar();
        }
    }

    //no puede acceder a una funcion privada fuera de la clase
    //echo Clase1::Saludar();
    
    //si se puede llamar una funcion publica donde instanciamos un metodo privado de la misma clase.
    echo Clase1::MandaSaludo();
    //o tambien, pero con mas lineas de codigo
    $var1= new Clase1;
    echo $var1->MandaSaludo();



?>