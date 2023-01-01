<?php
class Person {
    public $name;
    public $age;
    public $address;

    private $height;
    private $weight;
    private $phone;

    // public function getValue($name, $age = 'default', $address = 'default') {
    //     $this->name = $name;
    //     $this->age = $age;
    //     $this->address = $address;

    //     return $this;
    // }

    public function __construct($height, $weight, $phone) {
        $this->height = $height;
        $this->weight = $weight;
        $this->phone = $phone;
    }

    public function __destruct() {
        echo 'destructor';
    }

    public function setValue($height, $weight, $phone) {
        $this->height = $height;
        $this->weight = $weight;
        $this->phone = $phone;
    }
    
    public function getValue() {
        return ['height' => $this->height, 'weight' => $this->weight, 'phone' => $this->phone];
    }

   
}