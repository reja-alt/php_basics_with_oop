<?php
CONST BR = '<br>';

class Students {
    public $firstname, $age, $address;

    public function __construct($firstname, $age, $address) {
        $this->firstname = $firstname;
        $this->age = $age;
        $this->address = $address;
    }

    public function identify($id){
        return"Student's id is : " . $id . BR . 'Name : ' .  $this->firstname;
    }
}

$obj = new Students('reja', 28, 'matuail');
echo  $obj->identify('0323676');

// Static properties and methods

