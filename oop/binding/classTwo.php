<?php

class ClassTwo extends ClassOne {
    public static string $name = 'Zillur';

    // public static function getName() {
    //     // var_dump(get_class($this));       //get different class while late binding
    //     // return self::$name;

    //     var_dump(self::class);       //get same class while early binding here using static property and method
    //     return self::$name;
    // }
}
