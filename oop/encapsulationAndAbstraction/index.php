<?php

include 'class.php';
// use App\Base\Payment\Transaction;

$transaction = new Transaction(45);

// $reflectionProperty = new ReflectionProperty(Transaction::class, 'amount');
// $transaction->setAccessible(true);
// $transaction->setValue($transaction, 457);
// echo $transaction->getValue($transaction);

// echo $transaction->amount;
var_dump($transaction);
$transaction->copyObject(new Transaction(456));
