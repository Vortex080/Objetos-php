<?php
    include_once 'clases/tv.php';
    include_once 'clases/smartTv.php';
    include_once 'clases/listador.php';
    

    $television = new Tv('Sony', '40');

    $smartTV = new SmartTv('Samsung', '15', 'android');

    $producto = new Product('Patatas');

    $PRODUCTOS = [$television, $smartTV, $producto];

    Listador::lista($PRODUCTOS);

?>
  
