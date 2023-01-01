<?php
    // data types and type casting 
    declare(strict_types = 1);
    const BR = '<br>';
    # 1 scalar types
    # bool - true / false
    $task = true;
    # integer - 1, 4,54,65 
    $number = 43;
    #float - 43.54, 65.54, 54.65
    $price = 432.00;
    #string - "reja khan", "dhaka"
    $name = 'reja khan';

    echo $task . BR;
    echo $number . BR;
    echo $price . BR;
    echo $name . BR;

    echo '<h2>Get Data type</h2>';
    echo gettype($task) . BR;
    echo gettype($number) . BR;
    echo gettype($price) . BR;
    echo gettype($name) . BR;

    var_dump($name) . BR;

    // type hinting 

    function addNumber(int $x, int $y) {
        var_dump($x, $y);
        return $x + $y;
    }

    addNumber(32, 45);
    // strict type 

    // type casting 
    $x = '45';
    echo gettype($x) . BR;
    $y = (int)$x;
    echo gettype($y) . BR;
    echo $y;
    

?>