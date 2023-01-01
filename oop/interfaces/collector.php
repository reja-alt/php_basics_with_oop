<?php

include 'rexCollector.php';
include 'otherCollector.php';

/* 

=>  Must have to use every function defined on the interface inside class that implements that interface 
    neither this error will happenClass Agency contains 1 abstract method and must therefore be declared 
    abstract or implement the remaining methods (DebtCollector::collect) 

=>  multiple interface can be used by extends other interface

=> interface can not have properties but can define only const and once defined can not override it

=> When one or more classes use the same interface, it is referred to as "polymorphism"

*/

interface DebtCollector extends OtherCollector {
    public const TAX_NUMBER = 347834;
    public function __construct();
    public function collect(float $amount): float;
}