<?php

class DB {
    public static ?DB $instance = null;

    private function __construct() {
        echo 'instance';
    }

    // public static function getValue() {
    //     $db = new DB();
    // }

    public static function getInstances(array $config) {
        if(self::$instance === null) {
            self::$instance == new DB($config);
        }

        return self::$instance;
    }
}