<?php
    class calculadora{
        
        public function CalcularDatos($val1, $val2, $opcion){
            switch($opcion){
                case 'sum':
                    return $val1 + $val2;
                    break;
                case 'res':
                    return $val1 - $val2;
                    break;
                case 'multi':
                    return $val1 * $val2;
                    break;
                case 'div':
                    return $val1/$val2;
                    break;
                default:
                    # code...
                    break;
            }
        }
    }


?>