<?php 

    class Metodos{
        public function MandarColor($valor){
            
            if ($valor == 1) {
                return "rojo";
            }else if($valor == 2){
                return "negro";
            }else if($valor == 3){
                return "azul";
            }
        }

        public function DarDeAltaColor($tipocolor){
            return self::MandarColor($tipocolor);
        }
    }

    $objeto = new Metodos();
    echo $objeto->DarDeAltaColor(2);


?>