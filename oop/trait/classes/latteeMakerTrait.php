<?php

trait LatteeMakerTrait {
    public function latteeCoffeeMaker() {          //these function also contain on cappuccino trait
        echo static::class . ' making latte (latte trait)' . BR;
    }

    public function coffeeMaker() {
        echo static::class . ' making updated' . BR;
    }
}