<?php

class Invoice {
    public function __construct(public Customer $customer)
    {
        
    }

    public function process(float $amount): void {
        // if($amount < 0) {
        //     throw new \Exception('Invalid');
        // }

        // if(empty($this->customer->getBillInfo())) {
        //     throw new \ErrorException('Error');
        // }

         if(empty($this->customer->getBillInfo() || $amount < 0)) {          //custom exception creation
            throw new \MissingBillingException(); 
        }

        echo 'Processing $' . $amount . 'Invoice' . '<br>';
    }
}
