<?php

include 'collector.php';

// include 'rexCollector.php';

/* 

=>  Must have to use every function defined on the interface inside class that implements that interface 
    neither this error will happenClass Agency contains 1 abstract method and must therefore be declared 
    abstract or implement the remaining methods (DebtCollector::collect) 

=>  multiple interface can be used


*/

class Agency implements DebtCollector {

    public const TAX_NUMBER = 347834;

    public function __construct() {

    }

    public function collect(float $amount): float {
       $gurunted = $amount * 0.5;
       return mt_rand($gurunted, $amount);
    }

    public function transaction(float $invoice): float {
        return $invoice * 5 / 10;
    }

    public function test() {
        return '45';
    }
}