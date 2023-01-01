<?php
CONST BR = '<br>';

include_once('./paymentTypeOne/invoice.php');
include_once('./paymentTypeTwo/invoice.php');

use Payment\Primary\Invoice;

$invoicePrimary = new Invoice();
print_r($invoicePrimary) . BR;

$invoiceSecondary = new Payment\Secondary\Invoice();
print_r($invoiceSecondary). BR;

echo Payment\Primary\Deposit() . BR;
echo Payment\Secondary\Deposit() . BR;

$getTime = new Payment\Secondary\getTime();
print_r($getTime) . BR;

$geteMail = new Payment\Secondary\getEmail();
print_r($geteMail) . BR;

