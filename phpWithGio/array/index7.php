<?php
    $array_one = ['red', 'green', 'blue'];
    $array_two = ['#FF0000', '#00FF00', '#0000FF'];

    $array_combine = array_combine($array_two, $array_one);
    echo '<pre>';
    print_r($array_combine);

    // Changing a multidimensional array to associative
    // array

    $multiArray = [
        [
            'day1' => 'writing',
            'day2' => 'reading',
            'day3' => 'telling',
            'day5' => 'speaking',
        ],
        [
            'reading' => '9.5 hours',
            'writing' => '6.5 hours',
            'telling' => '3.5 hours',
            'speaking' => '12.5 hours',
        ],
        [
            'reading score' => 6.5,
            'writing score' => 8.5,
            'telling score' => 7.5,
            'speaking score' => 8.5,
        ],
    ];

    echo '<pre>';
    print_r($multiArray);

    $demoArray = [
        ['foo', 'bar'],
        ['fizz', 'buzz']
    ];

    $array_01 = array_column($demoArray, 0);
    $array_02 = array_column($demoArray, 1);

    print_r($array_01);
    print_r($array_02);

    $array_combine = array_combine($array_01, $array_02);
    print_r($array_combine);
       
    // Merge or concatenate arrays
    $fruit1 = ['apples', 'pears'];
    $fruit2 = ['bananas', 'oranges'];
    
    $all_of_fruits = array_merge($fruit1, $fruit2);
    // now value of $all_of_fruits is [0 => 'apples', 1 => 'pears', 2 => 'bananas', 3 => 'oranges']
    // Note that array_merge will change numeric indexes, but overwrite string indexes
    $fruit1 = ['one' => 'apples', 'two' => 'pears'];
    $fruit2 = ['one' => 'bananas', 'two' => 'oranges'];
    $all_of_fruits = array_merge($fruit1, $fruit2);
    // now value of $all_of_fruits is ['one' => 'bananas', 'two' => 'oranges']

    // Section 16.1: Array intersection
    // The array_intersect function will return an array of values that exist in all arrays that were passed to this function.
    $array_one = ['one', 'two', 'three'];
    $array_two = ['two', 'three', 'four'];
    $array_three = ['two', 'three'];
    $intersect = array_intersect($array_one,$array_two, $array_three);


    // Array keys are preserved. Indexes from the original arrays are not.
    // array_intersect only check the values of the arrays. array_intersect_assoc function will return intersection of
    // arrays with keys.
    $array_one = [1 => 'one',2 => 'two',3 => 'three'];
    $array_two = [1 => 'one', 2 => 'two', 3 => 'two', 4 => 'three'];
    $array_three = [1 => 'one', 2 => 'two'];
    $intersect = array_intersect_assoc($array_one, $array_two, $array_three);
    // $intersect contains [1 =>'one',2 => 'two']
    // array_intersect_key function only check the intersection of keys. It will returns keys exist in all arrays.
    $array_one = [1 => 'one',2 => 'two',3 => 'three'];
    $array_two = [1 => 'one', 2 => 'two', 3 => 'four'];
    $array_three = [1 => 'one', 3 => 'five'];
    $intersect = array_intersect_key($array_one, $array_two, $array_three);
    // $intersect contains [1 =>'one',3 => 'three']
    
    
?>