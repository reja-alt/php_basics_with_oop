<?php
const BR = '<br>';
$values = ["Apples", "Bananas", "Mangoes", "100", "200"];

if(in_array(100, $values)) {
    echo '100 is one of the values' . BR;
}

echo array_search('Mangoes', $values) . BR;

$cities = ['Berlin', 'KYIV', 'Amsterdam', 'Riga'];
$test = array_map('strlen', $cities);
print_r($test);

// Combining Array Functions Like a Boss 

$values = ['say  ', '  bye', 'acc', ' ', ' to', ' spaces ', '   '];
$words = array_filter(array_map('trim', $values));
echo '<pre>';
print_r($words);
echo '<pre>';

$meal = array('breakfast' => 'Walnut Bun',
              'lunch' => 'Cashew Nuts and White Mushrooms',
              'snack' => 'Dried Mulberries',
              'dinner' => 'Eggplant with Chili Sauce');
print "<table>\n";
foreach ($meal as $key => $value) {
    print "<tr><td>$key</td><td>$value</td></tr>\n";
}
print '</table>';

$numbers = [43,54,65,765,76566];
function check($a, $b) {
    if ($a==$b) return 0;
    return ($a<$b)?-1:1;
}
echo usort($numbers, 'check');


$cities = [
    'name' => 'dhaka',
    'country' => 'bangladesh',
    'country' => 'bangladesh',
    'population' => 3782372,
    'food' => 'fish',
    'food' => 'fish',
];

// array keys 
$keys = array_keys($cities);
var_dump($keys);

// array values 
$values = array_values($cities);
var_dump($values);

//in_array
$item = in_array('bangladesh', $cities);
var_dump('in array' . $item);

//array_key_exists
$keyItem = array_key_exists('food', $cities);
var_dump($keyItem);

//array_count_values
$numbers = [43,3,54,54,43,5,434,54];
$itemCount = array_count_values($numbers);
echo 'value count';
var_dump($itemCount);

//array_search
$searchItem = array_search('fish', $cities);
var_dump('array search' . $searchItem);

// array_unique 
$uniqueValue = array_unique($numbers);
var_dump($uniqueValue);

// array_column
$citiesMulti = [
    [
        'name' => 'dhaka',
        'country' => 'bangladesh',
        'country' => 'bangladesh',
        'population' => 3782372,
        'food' => 'fish',
        'food' => 'fish',
    ],
    [
        'name' => 'comilla',
        'country' => 'bangladesh',
        'country' => 'bangladesh',
        'population' => 3782372,
        'food' => 'fish',
        'food' => 'fish',
    ]
];

var_dump($citiesMulti);
$itemColumn = array_column($citiesMulti, 'name');
var_dump($itemColumn);

// array_slice 
$itemSlice = array_slice($numbers, 3,4);
var_dump($itemSlice);

// range 
$random = range(3,45);
// var_dump($random);

// array_map  
$mapitem = array_map(function ($item) {
    return $item * $item;
}, $numbers);

var_dump($mapitem);

// array_filter 
$filterArray = array_filter($numbers, function ($a){
    return $a > 10;
});

var_dump($filterArray);

// array_merge 
$mergeArray = array_merge($cities, ['singapore', 534534]);
var_dump($mergeArray);

// array_replace
$a1=array("red","green", 'white');
$a2=array("blue","yellow", 'black');
print_r(array_replace($a1, $a2));

//array_sum
$numberList = [34,54,65,54,56,5,54];
print_r('array sum is : ' . array_sum($numberList));

//array_product
// The array_product() function calculates and returns the product of an array.\
$a=array(5,5,2,10);
print_r(array_product($a));

//array_reduce
$a=array("Dog","Cat","Horse");
function myfunc($a, $b) {
    return $a . "-" . $b;
}
print_r(array_reduce($a, 'myfunc', 5));

//list
$my_array = array("Dog","Cat","Horse");

list($a, $b, $c) = $my_array;
var_dump($a, $b, $c);

//explode
//implode