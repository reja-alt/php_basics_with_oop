<?php

include 'invoice.php';
include 'collection.php';

// foreach(new Invoice(45) as $key => $value) {
//     echo $key . '=' . $value . '<br>';
// }

$invoice = new App\CollectionArray([new Invoice(45), new Invoice(765), new Invoice(675)]);

// echo '<pre>';
// var_dump(($invoice));

foreach($invoice as $key => $value) {
    echo'Key is = '  . $value->id .  '<br>' . 'value is = ' . $value->amount . '<br>'; 
}