<?php
// Type Casting and Overwriting example
const BR = '<br>';
$array = array(
    1    => "a",
    "1"  => "b",
    1.5  => "c",
    1.8  => "c",
    2.5  => "c",
    true => "d",
);

var_dump($array);
echo BR;
// Mixed int and string keys
$array = array(
    "foo" => "bar",
    "bar" => "foo",
    100   => -100,
    -100  => 100,
);

echo '<pre>';
print_r($array);
echo '<pre>';

$array1 = array(
    1    => 'a',
    '1'  => 'b', // the value "a" will be overwritten by "b"
    1.5  => 'c', // the value "b" will be overwritten by "c"
    -1 => 'd',
    '01'  => 'e', // as this is not an integer string it will NOT override the key for 1
    '1.5' => 'f', // as this is not an integer string it will NOT override the key for 1
    true => 'g', // the value "c" will be overwritten by "g"
    false => 'h',
    '' => 'i',
    null => 'j', // the value "i" will be overwritten by "j"
    'k', // value "k" is assigned the key 2. This is because the largest integer key before that was 1
    2 => 'l', // the value "k" will be overwritten by "l"
);

var_dump($array1);

// Array dereferencing
function getData() {
    return [2,3, 9 => 43,40];
}

$list = getData()[10];
print_r($list);
echo BR;
// Array destructuring ¶

$arrayItem = array('brazil', 'argentina', 'germany', 'ghana', 'suadia arabia');
[$item1, $item2, $item3, $item4, $item5] = $arrayItem;

echo $item1 . BR;
echo $item2 . BR;
echo $item3 . BR;
echo $item4 . BR;
echo $item5 . BR;

$source_array = ['foo' => 1, 'bar' => 2, 'baz' => 3];
['foo' => $value] = $source_array;
echo $value;
// echo $source_array[foo];

// Array do's and don'ts ¶

// Simple array unpacking
$arr1 = [1, 2, 3];
$unpackData = [...$arr1];
print_r($unpackData);

?>