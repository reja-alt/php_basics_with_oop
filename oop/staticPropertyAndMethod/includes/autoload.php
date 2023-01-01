<?php
spl_autoload_register('AutoLodear');

function AutoLodear($className) {
    $path = 'classes/';
    $extension = '.class.php';
    $namespace = 'App\Payment';
    $fullPath = $path. $className.$extension;

    // var_dump($fullPath);

    if(!file_exists( $fullPath)) {
        return false;
    }

    include_once($fullPath);

}