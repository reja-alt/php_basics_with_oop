<?php
const BR = '</br>';
$first = array(10, "Apple", 20, -18, "Monkey");
echo '<pre>';
var_dump($first) . BR;
echo '<pre>';

// array_combine
// combine one array as key and other as value 
$keys = ['sky', 'grass', 'orange'];
$values = ['blue', 'green', 'orange'];
$dummy = ['value', 'key', 'item'];
$combineValues = array_combine($keys, $values);

// You should know that the array_values() function returns an indexed array of values, 
// array_keys() returns an array of keys of a given array, and


echo '<pre>';
var_dump($combineValues);
echo '<pre>' . BR;

//  array_flip() exchanges keys with values:
print_r(array_flip($keys));

// You can check if an array contains a specific value and get its first corresponding key using the array_search() function. You can also use in_array() if you just want to know whether an array contains a specific element and are not interested in its position. Consider using the array_key_exists() function when you want to check if the array uses a given key.

$values = ["Apples", "Bananas", "Mangoes", "100", "200"];
 
if(in_array(100, $values)) {
    echo '100 is one of the values' . BR;
}
// 100 is one of the values
 
if(in_array(200, $values) !== false) {
    echo '200 is not one of the values' .BR;
}
// 200 is not one of the values
 
$values = ["Apples", "Bananas", "Mangoes", "100", "200", 100];
 
echo array_search(100, $values) .BR;
// 3
 
echo array_search(100, $values, true). BR;
// 5
 
$values = ["Apples" => 100, "Bananas" => 10, "Mangoes" => 45];
 
if(array_key_exists("Apples", $values)) {
    echo 'We have apples.' . BR;
}
// We have apples.

// define array
$array = ['a', 'b', 'c'];
 
// without list()
$a = $array[0];
$b = $array[1];
$c = $array[2];
 
// with list()
list($a, $b, $c) = $array;
[$a1, $b1, $c1] = $array;

echo $a .BR;
echo $b .BR;
echo $c .BR;
echo $a1 .BR;
echo $b1 .BR;
echo $c1 .BR;

$string = 'hello|wild|world';
list($hello, , $world) = explode('|', $string);
echo("$hello, $world"); // hello, world

// With the extract() function, you can export an associative array to variables.
// For every element of an array, a variable will be created with the name of a key and value as a value of the element:

$array = [
    'clothes' => 't-shirt',
    'size'    => 'medium',
    'color'   => 'blue',
];

extract($array);
echo("$color , $size");

$clothes = 't-shirt';
$size = 'medium';
$color = 'blue';

$arrayGenerate = compact('clothes', 'size', 'color');
print_r($arrayGenerate);

// Filtering Functions

$colors = array("red", "black", "blue", "green", "white", "yellow");
echo 'Color is : ' . $colors[array_rand($colors)];

// append arrays 
$arr = [1,2,3,4,5];
$prependArray = [...$arr, ...[10,11,12]];
print_r($arr);