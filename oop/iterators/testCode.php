<?php

class Season {
    public $first = 'Summer';
    public $second = 'Rainy';
    public $third = 'Autumn';
    public $fourth = 'Late Autumn';
    public $fifth = 'Winter';
    public $six = 'Spring';

    public function testCode() {
        echo 'Name Of the Season' . '<br>';
        foreach($this as $key => $value) {
            echo $key . '=>' . $value . '<br>';
        }
    }
}

$data = new Season();

echo '<pre>';
var_dump($data);
$data->testCode();