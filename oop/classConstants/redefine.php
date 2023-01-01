<?php

include 'class2.php';

// $value = parentClass::MENTION_VAR;
// echo $value;

$valueRedefine = childClass::MENTION_VAR;
echo $valueRedefine;

echo MyClass::CONSTANT;

$className = 'MyClass';
echo $className::CONSTANT;

$class = new MyClass();
$class->showConstant();

$class::CONSTANT;