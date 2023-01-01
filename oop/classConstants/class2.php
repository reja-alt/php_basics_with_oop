<?php

include 'class.php';

class parentClass {
    public string $val;
    // final public const MENTION_VAR = 'value defined';
}

class childClass extends parentClass {
    public const MENTION_VAR = 'value redefined';   // if we use final in parentclass then happen this error Fatal error: childClass::MENTION_VAR cannot override final constant Foo::X
}

class MyClass
{
    public const CONSTANT = 'constant value';

    function showConstant() {
        echo  self::CONSTANT . "\n";
    }
}
