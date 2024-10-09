<?php

    include_once 'clases/producto.php';
    include_once 'clases/IMuestra.php';

    class Tv extends Product implements IMuestra{
        
        public $pulgadas;

        public function __construct($name, $pulg){
            parent::__construct($name);

            $this->pulgadas=$pulg;
        }

        public function muestra(){
            return 'Nombre del producto: '. 'Pulgadas: '. $this->pulgadas .'<br>';
        }
    }
?>
