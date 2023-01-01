<?php
// boolean data type 
const BR = '<br>';
$isTask = (bool) 0;

# integer 0 -0  = false
# float 0.0 -0.0 = false
# '' = false
# [] = false
# null = false
# '0'  = false

echo is_bool($isTask) . BR;
var_dump($isTask) . BR;
if($isTask) {
    echo 'success' . BR;
} else {
    echo 'fail'. BR;
}

// integer datatypes 
// An integer data type is a non-decimal number between -2,147,483,648 and 2,147,483,647. 

$x = PHP_INT_MAX + 1;
var_dump($x);

$number = 432423;
$float = (float) $number;
$floatToInt = (int) $float;

var_dump($number) . BR;
var_dump($float) . BR;
var_dump($floatToInt) . BR;

echo PHP_INT_SIZE;

$c = 0x1A; // hexadecimal number
var_dump($c);
echo "<br>";
 
$d = 0123; // octal number
var_dump($d);