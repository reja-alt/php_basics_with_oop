<?php
include 'paymentProfile.php';
class Customer {
    public ?PaymentProfile $paymentProfile = null;

}

$customer = new Customer();
var_dump($customer->paymentProfile);