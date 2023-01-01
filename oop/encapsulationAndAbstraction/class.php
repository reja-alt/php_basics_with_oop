<?php

// namespace App\Base\Payment;

class Transaction {
    private float $amount;

    public function __construct($amount) {
        echo 'Invoice : ' . $this->amount = $amount;
    }

    public function copyObject(Transaction $transaction) {
        var_dump($transaction->amount, $transaction->sendEmail());
    }

    private function sendEmail() {
        return 'access';
    }
}