<?php
class Person {
    private $name = 'reja';
    private $age = 28;
    protected $address;

    private function identity() {
        $name = $this->name;
        $age = $this->age;
        echo 'User name : ' . $name . '<br>';
        echo 'User age : ' . $age;
    }

    public function getIdentity(){
        return $this->identity();
    }

    public function getIdentity2(){
        return [$this->name = 'nehal', $this->age = 30];
    }
}

class Location extends Person {
    public function accessAddress() {
        $this->address = 'dhaka';
        return $this->address;
    }
}