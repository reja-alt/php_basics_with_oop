<?php
include 'class.php';
CONST BR = '<br>';

$transaction = new Transaction();

// echo Transaction::STATUS_PAID . BR;        //TO ACCESS CLASS CONSTANTS WE USE CLASS_NAME::CONSTANTS_NAME LIKE SO 
// echo Transaction::STATUS_PENDING . BR;
// echo Transaction::STATUS_DECLINED . BR;

// echo Transaction::class;
echo $transaction->setStatus('paid');