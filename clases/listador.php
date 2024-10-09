<?php

    /**
     * Listador de objetos
     * @class
     * @name Listador
    */

    class Listador{
        /**
         * Function coge el array y lo lista
         * @aray Array de objetos
        */

        public static function lista(array $obj){
            // For each recorre el array y mete valor a valor en $temp
            foreach($obj as $temp){
                // Instancia IMuestra con la variable $temp
                if($temp instanceof IMuestra){
                    echo $temp -> muestra() ;
                }
            }
        }
    }

