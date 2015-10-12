<?php
/**
 * Created by PhpStorm.
 * User: viniciusthiengo
 * Date: 10/11/15
 * Time: 10:29 PM
 */

class Obj {
    public $name;
    public $pathImg;


    public function __construct( $name, $pathImg ){
        $this->name = $name;
        $this->pathImg = $pathImg;
    }
}