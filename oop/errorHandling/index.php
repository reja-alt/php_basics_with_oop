<?php

include 'autoload.php';
CONST BR = '<br>';

$invoice = new Invoice(new Customer(['address' => 'Dhaka']));
echo '<pre>';
// var_dump($invoice);
try {
    $invoice->process(-45);
} catch (MissingBillingException $e) {
    echo $e->getMessage();
} finally {
    echo 'finally Block';
}
