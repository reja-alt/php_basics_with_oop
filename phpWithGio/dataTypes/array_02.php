<?php
$colors = [
    0 => 'red',
    1 => 'green',
    2 => 'blue',
    3 => 'black',
    4 => 'white',
];

echo '<pre>';
var_dump($colors);
echo '<pre>';

// echo (array_pop($colors));
// unset($colors[1], $colors[3], $colors[2]);

echo '<pre>';
var_dump($colors);
echo '<pre>';

$colors['check'] = $colors['1'] ;  //reinitialize array key

echo '<pre>';
var_dump($colors);
echo '<pre>';

$array = array(
    "a",
    "b",
56 => "c",
    "d",
);
var_dump($array);

// array destructuring 
$array_item = ['item12', 'item2', 'item3'];

[$item1, $item2, $item3] = $array_item;

echo $item1;

$a = array(1 => 'one', 2 => 'two', 3 => 'three');
unset($a[2]);

echo '<pre>';
var_dump($a);
echo '<pre>';
$b = array_values($a);        //reindex array
echo '<pre>';
var_dump($b);
echo '<pre>';

$arr1 = [1, 2, 3];
$arr2 = [...$arr1];
var_dump($arr1);
var_dump($arr2);

// $arr1.push(34);
?>

<script>
var cars = ["Saab", "Volvo", "BMW"];
[item1, item2, item3] = cars;
console.log(item1);
console.log(item2);
console.log(item3);

cars.push('Maruti');
</script>