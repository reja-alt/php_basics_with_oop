<?php

class AllInOneCoffeeMaker extends coffeeMaker {           //file name should be class name while autoload, but here case insensitive
    use LatteeMakerTrait;

    use CappuccinoTrait {
        CappuccinoTrait::latteeCoffeeMaker insteadOf LatteeMakerTrait;    //if same function contain in both trait then error occured, to solve these use instance like these
    }
}