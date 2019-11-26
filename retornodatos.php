<?php
//Una clase es nuestro molde de trabajo
//para nuestros metodos y atributos

//veremos 4 retornos de datos
//1.- tipo string
//2.- tipo entero
//3.- tipo array
//4.- tipo json

    class RetornoDatos{

        //declarar atributos
        public $resultado =0;


        //declarar metodos
        public function RetornaString($edad){
            if($edad > 18){
                return "Es mayor de edad";
            }else{
                return "No es mayor de edad";
            }
        }

        public function RetornaEntero($valor){
            if($valor>0){
                return 1;
            }else{
                return 0;
            }
        }

        public function RetornaArreglo($ciclos){
            $datos=array();

            for ($i=0; $i < $ciclos; $i++) { 
                # asignacion de contenido al array
                $datos[$i]= $i;
            }

            return $datos;
        }

        public function RetornaJSON(){
            $arr = array(
                "hdd"=> 500,
                "pantalla"=>21,
                "ram"=>8
            );

            return json_encode($arr);
        }

    }

    //termina la clase
    //podemos instanciar o declarar objeto
    $Cadena = new RetornoDatos();
    var_dump($Cadena->RetornaString(20));

    echo "<br>";
    var_dump($Cadena->RetornaEntero(1));

    echo "<br>";
    var_dump($Cadena->RetornaArreglo(10));

    echo "<br>";
    var_dump($Cadena->RetornaJSON());

?>