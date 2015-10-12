<?php


    require_once('../autoload.php');


    //sleep(5);

    $engine = new Engine( 325, 2005, '4.9' );
    $brand = new Brand('Cadillac', null);
    $car = new Car('ZT06', null, $brand, $engine);

    header('Content-Type: application/json; charset=utf-8');
    echo json_encode( array('car'=>$car) );

