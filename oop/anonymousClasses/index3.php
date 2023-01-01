<?php

class ClassA {
    public function __construct(public int $x, public int $y) {

    }
    
    public function A(): string {
        return 'A';
    }
}

interface InterfaceB {
    public const AGE = 28;
    public function B(): string;
}

trait TraitC {
    public static string $name = "reja";
    public function C(): string {
        return 'C';
    }
}

$anonymous = new class(546,547) extends ClassA implements InterfaceB {
    use TraitC;

    public function B(): string {
        return 'B';
    }
};

// Nested anonymous class



var_dump($anonymous);
var_dump($anonymous->A());
var_dump($anonymous->C());
var_dump($anonymous->C());
var_dump($anonymous->B());
var_dump($anonymous::AGE);
var_dump($anonymous::$name);