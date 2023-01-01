<?php
class Person {
    public $name;
    public $age;
    public $address;

    public static $govtJovAge = 30;   //we use static when it is common and can be used for all objects feature,
                                    // here $govtJovAge limit can be usable for all objects from this class.

    public function setValue($height, $weight, $phone) {
        $this->height = $height;
        $this->weight = $weight;
        $this->phone = $phone;
    }
    
    public function getValue() {
        return ['height' => $this->height, 'weight' => $this->weight, 'phone' => $this->phone];
    }


    public static function setUniAge($age) {
        // return $age;
        return self::$govtJovAge = $age;   // for static have to use self instead of this
    }
}