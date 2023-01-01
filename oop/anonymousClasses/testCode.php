<?php

// using constructor and extends in anonymous class 

class A
{
    private $name;   

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
}

$b = new class('anonymous') extends A
{
    public function getName()
    {
        return parent::getName() . ' class';
    }
};

echo $b->getName(), PHP_EOL;

// result: anonimous class

// eval() is workaround for generating multiple anonymous classes with static properties in loop
class Test {
    public function generateClassMap()
    {
        foreach ($this->classMap as $tableName => $class)
        {
            $c = null;
            eval('$c = new class extends \common\MyStaticClass {
                public static $tableName;
                public static function tableName()
                {
                    return static::$tableName;
                }
            };');
            $c::$tableName = $this->replicationPrefix.$tableName;
            $this->classMap[$tableName] = $c;

        }
    }
}


// <!-- thus every class will have its own $tableName instead of common ancestor. -->