<?php
    // variable, anonymous & arrow functions 
    const BR = '<br>';
    // $test = 'write some inside function';
    $sum = function (callable $callback, ...$numbers) use(&$test) {                       //anonymous function no name along with ; at the end
        echo $test . BR;  
        $test = 54;  
        echo $test . BR;                                         //we can use() keyword to access global variable inside function                   
        return $callback(array_sum($numbers));
    };

    // $x = 'sum';
    echo $sum('foo',43,43,5543,43,4);

    // if(is_callable($x)) {
        // echo $sum(43,43,5543,43,4). BR;
        // echo $test . BR;
    // } else {
    //     echo 'not callable';
    // }

    // $m = 34;
    // $y = &$m;
    // $m = 56;
    // echo $m . BR;
    // echo $y . BR;

    // $array = [12,34,45,64,43];

    // $array1 = array_map(function($element) {
    //     return $element * 2;
    // }, $array);

    function foo($element) {
        return $element * 2;
    };
    
    // $array2 = array_map('foo', $array);

    // print_r($array1);
    // print_r($array2);


?>