<?php

include 'classOne.php';

// $classOne = new ClassOne();
// $classTwo = new ClassTwo();

// echo $classOne->getName();      //if we use static instead of self on static getName() method then it can call non stacially
// echo $classTwo->getName();

// echo ClassOne::getName();
// echo ClassTwo::getName();

var_dump(ClassOne::make());