<?php

include 'autoload.php';

$coffeeMaker = new CoffeeMaker();
$coffeeMaker->coffeeMaker();

$latteeMaker = new LatteeMaker();
$latteeMaker->coffeeMaker();
$latteeMaker->latteeCoffeeMaker();

$cappuccinoMaker = new CappuccinoMaker();
$cappuccinoMaker->coffeeMaker();
$cappuccinoMaker->cappuccinoCoffeeMaker();

$allCoffeeMaker = new AllInOneCoffeeMaker();
$allCoffeeMaker->coffeeMaker();
$allCoffeeMaker->cappuccinoCoffeeMaker();
$allCoffeeMaker->latteeCoffeeMaker();

$test = new TestCode();
$test->sayHello();

