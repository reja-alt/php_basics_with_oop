<?php
const BR = '<br>';
// http://phpmaster.com/defining-and-using-functions-in-php/
function calcAverage() {
    // initialize value to be used in calculation
    $total = 0;							

    // find out how many arguments were given
    $arguments = func_num_args();     	

    // loop to process each argument separately
    for ($i = 0; $i < $arguments; $i++) {
        // add the value in the current argument to the total
        $total += func_get_arg($i);
    }

    // after adding all arguments, calculate the average
    $average = $total / $arguments;		

    // return the average
    return $average;
}

// invoke the function with 5 arguments
echo calcAverage(44, 55, 66, 77, 88) . BR;			

// invoke the function with 8 arguments
echo calcAverage(12, 34, 56, 78, 90, 9, 8, 7) . BR;
?>