<?php

class Invoice {
    private string $id;

    public function __construct() {
        $this->id = uniqid('Invoice- ');
        var_dump('con');
    }

    public function __clone() {
        $this->id = uniqid('Invoice- ');
        var_dump('clone');
    }
    
    public static function create(): static {
        return new static();
    }
}

$invoice2 = new Invoice();
// var_dump($invoice2);
$invoice3 = clone $invoice2;
// var_dump($invoice3);
// $invoice3 = clone $invoice2;
// // var_dump($invoice, $invoice2, Invoice::create());
var_dump($invoice2);
var_dump($invoice3);
var_dump($invoice2 === $invoice3);
