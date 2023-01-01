<?php

spl_autoload_register('Autoloader');

function Autoloader($className) {
    $path = 'classes/';
    $extension = '.php';
    $fullPath = $path . $className . $extension;

    include_once($fullPath);
}