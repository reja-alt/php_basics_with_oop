<?php
spl_autoload_register('Autoloader');

function Autoloader($className) {
    $path = 'classes/';
    $extension = '.php';
    $fullPath = $path.$className.$extension;

    if(!file_exists( $fullPath)) {
        return false;
    }

    include_once($fullPath);

}