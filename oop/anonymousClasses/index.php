<?php

$obj = new class(34,4,54,54) {         //ananymous class combined with new keyword
   public function __construct(public string $b, public string $x, public string $y, public string $z) {

   }
};

var_dump($obj);