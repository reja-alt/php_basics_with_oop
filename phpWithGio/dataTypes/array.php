<?php
const BR = '<br>';
$languages = ['php', 'java', 'c', 'oop'];

echo $languages[0] . BR;
echo $languages[1] . BR;
echo $languages[2] . BR;
echo $languages[3] . BR;
// echo $languages[-3] . BR;  //error not work
// echo $languages[6] . BR;   //error

echo isset($languages[3]) . BR;
echo count($languages);

$languages[] = 'react';
echo '<pre>';
var_dump($languages);
echo '<pre>';

array_push($languages,'sql');

$languages[] = 'react';
echo '<pre>';
var_dump($languages);
echo '<pre>';
$languages = ['php', 'java', 'c', 'oop'];

$languagesUpdate = [
    'php' => '8.0', 
    'react' => '4.56', 
    'c++' => '9.02', 
];

echo '<pre>';
var_dump($languagesUpdate);
echo '<pre>';

$language = 'sql';
$languagesUpdate[$language] = '43.56';

echo '<pre>';
var_dump($languagesUpdate);
echo '<pre>';

$item['food'] = 'food select';
$item['desert'] = 'desert select';
$item['drinks'] = 'drinks select';
$item['salad'] = 'salad select';

echo '<pre>';
var_dump($item);
echo '<pre>';