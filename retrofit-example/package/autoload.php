<?php
    spl_autoload_register(function ($class) {
        //$handle = fopen('data.txt', 'w');

        $paths = array(
            '../ctrl/',
            '../domain/',
            '../util/class/'
        );

        for($i = 0, $tamI = count($paths); $i < $tamI; $i++){
            if(  file_exists( $paths[$i] . $class . '.php' ) ){
                require_once( $paths[$i] . $class . '.php');
            }
        }
    });