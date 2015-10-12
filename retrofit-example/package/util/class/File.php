<?php
/**
 * Created by PhpStorm.
 * User: viniciusthiengo
 * Date: 10/12/15
 * Time: 11:07 AM
 */

class File {
    static public function writeInFile($data, $typeToOpen='w', $fileName='../../debug/data.txt'){
        $handle = fopen( $fileName, $typeToOpen);
        fwrite($handle, $data."\n\n");
        fclose($handle);
    }
}