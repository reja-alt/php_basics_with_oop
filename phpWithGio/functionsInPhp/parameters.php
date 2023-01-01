<?php
const BR = '<br>';
// function refererences, named parameters
// function sum(...$numbers): int {
//     $sum = 0;
//     foreach($numbers as $number) {
//         $sum += $number;
//     }
//     return $sum;
// }

// echo sum(43,54,767,43,57,76);
// setcookie();

// Passing arrays to functions
function takes_many_args(
    $first_arg,
    $second_arg,
    $a_very_long_argument_name,
    $arg_with_default = 5,
    $again = 'a default string' // This trailing comma was not permitted before 8.0.0.
)
{
    echo $first_arg,
    $second_arg,
    $a_very_long_argument_name,
    $arg_with_default,
    $again . '<br>';
}

$data = ['january', 'winter', 'very long test'];
takes_many_args(...$data);

// Passing arguments by reference

function add_some_extra(&$string)
{
    $string .= 'and something extra.';
}

$str = 'This is a string, ';

add_some_extra($str);

// $test = 'value';
// $test1 = &$test;
echo $str;  

?>