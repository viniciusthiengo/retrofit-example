<?php
/**
 * Created by PhpStorm.
 * User: viniciusthiengo
 * Date: 10/11/15
 * Time: 10:28 PM
 */

class Car extends Obj {
    public $brand;
    public $engine;


    public function __construct( $name, $pathImg, Brand $brand, Engine $engine ){
        parent::__construct($name, $pathImg);
        $this->brand = $brand;
        $this->engine = $engine;
    }
}