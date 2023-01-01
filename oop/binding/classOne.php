<?php

include 'classTwo.php';

class ClassOne {
    public static string $name = 'Reja';        //late binding without static, when static its early binding 

    public static function getName() {
        // var_dump(get_class($this));       //get different class while late binding
        // return self::$name;

        // var_dump(get_called_class());     //get different class name
        
        // var_dump(self::class);       //get same class while early binding here using static property and method
        //                                 // to prevent get same class using  static property and method use static inplace of self
        // return self::$name;

        
        var_dump(static::class);                 // to prevent get same class using  static property and method use static inplace of self
        return static::$name;
    }

    // public static function make() {              //get same class object while calling these function
    //     return new self;
    // }

    
    public static function make() {              //but if we use static inplace of self or new ClassOne(), then will get specific class object while calling these function
        return new static;
    }
}