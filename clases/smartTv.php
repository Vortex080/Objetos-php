<?php

    include_once 'clases/producto.php';
    include_once 'clases/IMuestra.php';

    class SmartTv extends Product implements IMuestra{
        
        public $pulgadas;
        public $os;

        public function __construct($num, $pulg, $os){
            parent::__construct($num);

            $this -> os = $os;
            $this->pulgadas=$pulg;
        }

        public function muestra(){
            return 'Nombre del producto: '. 'Pulgadas: '. $this->pulgadas . 'Sistema operativo: '. $this->os . '<br>';
        }
    }
?>
