<?php
const BR = '<br>';
// Default argument values
function makecoffee($type = "cappuccino")
{
    return "Making a cup of $type.\n";
}
echo makecoffee() . BR;
echo makecoffee(null) . BR;
echo makecoffee("espresso");

// Using non-scalar types as default values
function makecoffee1($types = array("cappuccino"), $coffeeMaker = NULL)
{
    $device = is_null($coffeeMaker) ? "hands" : $coffeeMaker;
    return "Making a cup of ".join(", ", $types)." with $device.\n";
}
echo makecoffee1() . BR;
echo makecoffee1(array("cappuccino", "lavazza"), "teapot");

// function defaultCheck($item = 'banana', $quantity) {
//     echo $item . $quantity;
// }
// defaultCheck('mango');     //error Uncaught ArgumentCountError: Too few arguments to function defaultCheck(), 1 passed

// Note that when using default arguments, any defaults should be on the right side of any non-default arguments; otherwise, things will not work as expected. 
function defaultCheck($quantity, $item = 'banana') {
        echo $quantity . ' ' . $item . 's';
}
defaultCheck(6);

// Variable-length argument lists 
// Argument lists may include the ... token to denote that the function accepts a variable number of arguments. The arguments will be passed into the given variable as an array
function sum(...$numbers) {
    $acc = 0;
    foreach ($numbers as $n) {
        $acc += $n;
    }
    return $acc;
}

echo sum(1, 2, 3, 4) . BR;

// Using ... to provide arguments

function add($a, $b) {
    return $a + $b;
}

echo (add(...[34,56])) . BR;

$a = [34, 56];
echo add(...$a);

// Accessing variable arguments in old PHP versions

function sum1() {
    $acc = 0;
    foreach (func_get_args() as $n) {
        $acc += $n;
    }
    return $acc;
}

echo sum1(1, 2, 3, 4);

// Named Arguments
// Named argument syntax

// myFunction(paramName: $value);
// array_foobar(array: $value);

// // NOT supported.
// function_name($variableStoringParamName: $value);

// function namedArg($x, $y) {
//     return $x * $y;
// }
// namedArg(x: 5, y: 8);
?>