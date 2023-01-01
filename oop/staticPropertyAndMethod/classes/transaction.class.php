<?php
declare(strict_types = 1);


class Transaction {

    // public static int $invoice = 435301;
    private static int $invoice = 435301;

    public function __construct( 
        public float $amount, 
        public string $description
    ) {
        return self::$invoice++ . '<br>';
    }

    public function getMoney() {
        echo 'Money checked';
    }

    public static function getCount() {
        return self::$invoice++ . '<br>';
    }
}