<?php

class Customer {
    public function __construct(private array $billingInfo = [])
    {
        
    }

    public function getBillInfo(): array {
        return $this->billingInfo;
    }
}