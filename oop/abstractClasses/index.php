<?php

include 'autoload.php';

$text = new Text('text');
// var_dump($text);
$radio = new Radio('radio');
$checkbox = new Checkbox('checkbox');

echo $text->render() . '<br>';
$text->age = 67 . '<br>';
echo $text->age;
echo $radio->render() . '<br>';
echo $checkbox->render() . '<br>';