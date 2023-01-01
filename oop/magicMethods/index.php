<?php

class MagicMethods {
    public function __construct() {
        echo 'automatically creted';
    }

    function __destruct() {
        print "Destroying " . __CLASS__ . "\n";
    }

    public function __call($name, $arguments)
    {
        // Note: value of $name is case sensitive.
        echo "Calling object method '$name' "
             . implode(', ', $arguments). "\n";
    }
}

$obj = new MagicMethods;
var_dump($obj);


class Transaction {
    private float $amount;
    private string $description;

    public function __construct(float $amount,  string $description) {
        $this->amount = $amount;
        $this->description = $description;
    }
}

$transaction1 = new Transaction(423.43, 'text line over');
var_dump($transaction1);
