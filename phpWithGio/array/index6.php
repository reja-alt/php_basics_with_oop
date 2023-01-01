<?php
    // declare(strict_types = 1);
    const BR = '<br>'; 
    $foo = [2 => 'apple', 'this is index 3 temporarily', '3' => 'melon'];
    echo '<pre>';
    print_r($foo);
    echo '<pre>';

    $countries = array();
    $range = 5;
    $value = 'Bangladesh';

    for($i = 0; $i < 5; $i++) {
        $countries = $value;
        print_r($countries);
        echo BR;
    }

    $cities = array_fill(2,1 , 'Saudia Arabia');
    $cities = array_fill(-3,5 , 'Saudia Arabia');

    $rangeArray = range(4,12,3);
    print_r($cities);
    print_r($rangeArray);

    // Check if key exists
    $map = [
        'foo' => 1,
        'bar' => null,
        'foobar' => '',
    ];
    
    var_dump(array_key_exists('foobar',$map));
    var_dump(isset($map['foo']));
    var_dump(isset($map['foobar']));  //true in isset cause value treated as string while on !empty it is false treated as value
    var_dump(!empty($map['foobar'])); //false !empty it is false treated as null value

    // Note also that isset() and !empty() will work (and return false) if $map is not defined at all. This makes them
    // somewhat error-prone to use:
    // Note "long" vs "lang", a tiny typo in the variable name.
    // $my_array_with_a_long_name = ['foo' => true];
    // array_key_exists('foo', $my_array_with_a_lang_name); // shows
    
    // Validating the array type
    $integer = 3;
    $integerList = [43,54,65,54];
    var_dump(is_array($integer));
    var_dump(is_array($integerList));
    // Validating the array type

    function foo(array $data) {
        return $data;
    }

    $list = ['item1', 'item2', 'item3'];
    $result = foo($list);
    // $resultInt = foo($integer);
    var_dump($result);
    //  var_dump($resultInt);     //Fatal error:  Uncaught TypeError: Argument 1 passed to foo() must be of the type array, int given

    //  Creating an array of variables

    $var1 = 'demo test';
    $var2 = 'programming test';

    $compact = compact('var1', 'var2');
    print_r($compact);

    // Checking if a value exists in array
    $food = ['item1' => 'soup', 'tanduri', 'fried rice'];
    $valueCheck = in_array('fried rice', $food);
    echo $valueCheck . BR;

    $checkValue = array_search('soup', $food);  //get the key
    echo $checkValue;

    $userdb = [
        [
        "uid" => '100',
        "name" => 'Sandra Shush',
        "url" => 'urlof100',
        ],
        [
        "uid" => '5465',
        "name" => 'Stefanie Mcmohn',
        "pic_square" => 'urlof100',
        ],
        [
        "uid" => '40489',
        "name" => 'Michael',
        "pic_square" => 'urlof40489',
        ]
       ];
    
    $getColumn = array_column($userdb, 'name');
    print_r($getColumn[2]);

    // Array iteration
    $people = ['Tim', 'Tony', 'Turanga'];
    $foods = ['chicken', 'beef', 'slurm'];
    $review = [4,5,3];

    $result = array_map(function ($person, $food, $review){
        return $person . ' likes ' . $food . ' Reviews : ' . $review;
    }, $people, $foods, $review);
    var_dump($result);
?>