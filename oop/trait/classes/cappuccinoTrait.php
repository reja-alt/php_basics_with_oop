<?php

trait CappuccinoTrait{
    public function cappuccinoCoffeeMaker() {
        echo static::class . ' making cappuccnio' . BR;
    }

    public function latteeCoffeeMaker() {       //these function also contain on latteemaker trait
        echo static::class . ' making latte (cappucino trait)' . BR;
    }
}