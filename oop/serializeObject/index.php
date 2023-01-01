<?php

include 'class.php';

$transaction = new Transaction(43,654, 4374328);

$str = serialize($transaction);

echo '<pre>';
echo $str . '<br>';

echo '<pre>';
$transaction2 = unserialize($str);
var_dump($transaction2);
// echo $str;
// $transaction2 = unserialize($str);
// var_dump(serialize(true));
// var_dump(serialize(23));
// var_dump(serialize(43.54));
// var_dump(serialize($transaction->getValue()));
// var_dump($transaction, $transaction2, $transaction === $transaction2 );

