<?php

class Transaction {
    public string $id;

    public function __construct(
        public float $amount,
        public int $description, 
        public int $creditCardNumber
    ) {
        $this->id = uniqid('Invoice- ');
    }

    public function __sleep() {                 // As already described, __sleep() is called when you serialize() an object and __wakeup() after you unserialize() it
        return ['description', 'id' , 'amount', 'creditCardNumber'];
    }

    public function __wakeup() {                 // As already described, __sleep() is called when you serialize() an object and __wakeup() after you unserialize() it
        return ['description', 'id'];
    }

    public function __serialize(): array {              //when use __serialize magic method it will run over __sleep method, stop sleer method means get priority over sleep method
        return [
            'id' => $this->id, 
            'amount' => $this->amount, 
            'description' => $this->description, 
            'creditCardNumber' => base64_encode($this->creditCardNumber),
            'test' => 'demo' 
        ];
    }

    public function __unserialize(array $data): void {              //when use __serialize magic method it will run over __sleep method, stop sleer method means get priority over sleep method
       $this->id = $data['id'];
       $this->amount = $data['amount'];
       $this->description = $data['description'];
       $this->creditCardNumber = base64_decode($data['creditCardNumber']);
       $this->test = $data['test'];
        // var_dump($data);
    }
}