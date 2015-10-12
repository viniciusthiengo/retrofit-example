<?php

    require_once('../autoload.php');
    /*if (!ini_get('display_errors')) {
        ini_set('display_errors', 1);
    }*/

    // HACK CODE
        $_SG = empty($_POST) ? $_GET : $_POST;
        $_SG = empty($HTTP_RAW_POST_DATA) ? $_SG : $HTTP_RAW_POST_DATA;
        $_SG['method'] = trim($_SG['method'], '"');
        if( !is_array( $_SG ) ){
            $_SG = json_decode($_SG, true);
        }




    if( strcasecmp( $_SG['method'], 'one-car' ) == 0 ){

        $engine = new Engine( 325, 2005, '4.9' );
        $brand = new Brand('Cadillac', null);
        $car = new Car('ZT06', null, $brand, $engine);

        header('Content-Type: application/json; charset=utf-8');
        echo json_encode( array('car'=>$car) );
    }


    else if( strcasecmp( $_SG['method'], 'many-cars' ) == 0 ){

        /*$engine = new Engine( 325, 2005, '4.9' );
        $brand = new Brand('Cadillac', null);
        $car = new Car('ZT06', null, $brand, $engine);*/

        $arrayCars = [];
        for( $i = 0; $i < 10; $i++ ){
            $engine = new Engine( rand(100, 450), rand(1989, 2015), sprintf('%.1f', rand(10, 80) / 10) );
            $brand = new Brand('Brand '.($i+1), null);
            $car = new Car('Model '.($i+1), null, $brand, $engine);
            $arrayCars[] = $car;
        }

        header('Content-Type: application/json; charset=utf-8');
        echo json_encode( $arrayCars );
    }


    else if( strcasecmp( $_SG['method'], 'save-car' ) == 0 ){
        $data = var_export($_SG['car'], true);
        File::writeInFile($data, 'w', '../../debug/save-car.txt');
    }


    else if( strcasecmp( $_SG['method'], 'send-img' ) == 0 ){
        $_SG['name_image'] = trim($_SG['name_image'], '"');

        File::writeInFile($_SG['binary_image'], 'w', '../../img/'.$_SG['name_image'].'.png' );
    }


    else if( strcasecmp( $_SG['method'], 'send-header' ) == 0 ){
        File::writeInFile('', 'w', '../../debug/header.txt');

        foreach (getallheaders() as $key => $value) {
            File::writeInFile($key.'=>'.$value, 'a', '../../debug/header.txt');
        }
    }


    else if( strcasecmp( $_SG['method'], 'save-cars' ) == 0 ){
        $data = json_decode($_SG['cars'], true);
        $data = var_export($data, true);
        File::writeInFile($data, 'w', '../../debug/cars.txt');
    }