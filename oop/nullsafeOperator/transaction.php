<?php
declare(strict_types = 1);

class Transation {
    // public float $amount;
    // public string $description;
    public ?Customer $customer = null;
    public function __construct(public float $amount, public ?string $description = null) {  //$description = null will not work if i dont use ? before string i mean type hint 
        echo $this->amount = $amount;
        echo $this->description = $description;
    }
}

$transaction = new Transation(34.90, 'reja');
var_dump($transaction->customer->paymentProfile->id ?? 'test');  //?? operator will not work while method called like $transaction->customer->setName()->id ?? 'test' but if i use ? like these than it will work $transaction->customer->setName()?->id ?? 'test'