<?php
include 'includes\autoload.php'; 

$transaction = new Transaction(456.80, 'first payment');
// var_dump(Transaction::$invoice);
$transaction = new Transaction(456.80, 'first payment');

// var_dump(Transaction::$invoice);
// $transaction = new Transaction(456.80, 'first payment');
// echo $transaction;
// $transaction->getMoney();
// echo Transaction::$invoice;         //dont't need to create object for static property 
// echo $transaction::$invoice;       //dont't need to create object for static property

echo Transaction::getCount();         //to access private valiable use method


//for db class

// $db = new DB();       //will not work Uncaught Error: Call to private DB::__construct() from global scope
$db = DB::getInstances([]);
$db = DB::getInstances([]);
$db = DB::getInstances([]);
$db = DB::getInstances([]);
$db = DB::getInstances([]);
$db = DB::getInstances([]);
// $db = DB::getValue();
