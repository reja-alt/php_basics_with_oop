<?php
/**
 * Creating our own functions
 **/
 const BR = '<br>';
// Our First Function
function firstFunction(){
    return 'Hello buddy, how is it going?';
}

echo firstFunction() . BR; // Hello buddy, how is it going?
// Functions with Arguments
function functionWithArgs($name, $website){
    return 'Hello ' . $name . '<br />Your website is: ' . $website;
}

echo functionWithArgs('Marcus','http://ureddit.com') . BR;
// Hello Marcus
// Your website is: http://ureddit.com

// Functions with Default Arguments
function functionDefault($name, $website = 'http://ureddit.com'){
    return 'Hello ' . $name . '<br />Your website is: ' . $website;
}

echo functionDefault('Marcus') . BR;
// Hello Marcus
// Your website is: http://ureddit.com
echo functionDefault('Marcus', 'http://recck.com') . BR;
// Hello Marcus
// Your website is: http://recck.com

// Using an unknown amount of arguments
function functionUnknown() {
    $args = func_get_args();
    
    if(func_num_args() != 2){
        return 'Only two arguments allowed!';
    }else {
        return 'Arg 1: ' . $args[0] . ' and Arg 2: ' . $args[1];
    }
}

echo functionUnknown('lemonade','rocks') . BR; // Arg 1: lemonade and Arg 2: rocks
echo functionUnknown('lemonade') . BR; // Only two arguments allowed!

// Passing a variable by reference
function refFunction(&$name){
    $name = strtolower($name) . ' is awesome';
}

$me = 'MaRcUS';
refFunction($me);
echo $me . BR; // marcus is awesome

// Using a user defined function in an array_map call
function funWithMath($x){
    return pow($x/2, 3); // returns (x/2)^3
}

$numbers = array(1, 2, 3, 4, 5);
$newNumbers = array_map('funWithMath', $numbers);
print_r($newNumbers); // Array ( [0] => 0.125 [1] => 1 [2] => 3.375 [3] => 8 [4] => 15.625 ) 