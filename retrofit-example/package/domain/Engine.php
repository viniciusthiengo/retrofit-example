<?php
/**
 * Created by PhpStorm.
 * User: viniciusthiengo
 * Date: 10/11/15
 * Time: 10:28 PM
 */

class Engine {
    public $horses;
    public $year;
    public $strength;

    public function __construct( $horses, $year, $strength ){
        $this->horses = $horses;
        $this->year = $year;
        $this->strength = $strength;
    }
}