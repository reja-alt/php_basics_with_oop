<?php

// Multiple Traits 

trait Hello {
    public function sayHello() {
        echo 'Hello ';
    }
}

trait World {
    public function sayWorld() {
        echo 'World';
    }
}

class MultipleTraits {
    use Hello, World;
    public function sayExclamationMark() {
        echo '!';
    }
}

// Conflict Resolution

trait A {
    public function smallTalk() {
        echo 'a';
    }
    public function bigTalk() {
        echo 'A';
    }
}

trait B {
    public function smallTalk() {
        echo 'b';
    }
    public function bigTalk() {
        echo 'B';
    }
}

class Talker {
    use A, B {
        B::smallTalk insteadof A;
        A::bigTalk insteadof B;
    }
}

class Aliased_Talker {
    use A, B {
        B::smallTalk insteadof A;
        A::bigTalk insteadof B;
        B::bigTalk as talk;
        A::smallTalk as talkA;
    }
}

$traits = new MultipleTraits();
$traits->sayHello();
$traits->sayWorld();
$traits->sayExclamationMark();

$traits = new Aliased_Talker();
$traits->smallTalk();
$traits->bigTalk();
$traits->talk();
$traits->talkA();

// Changing Method Visibility 
// Using the as syntax, one can also adjust the visibility of the method in the exhibiting class.

trait HelloWorld {
    public function sayHello() {
        echo 'Hello World!';
    }
}

// Change visibility of sayHello
class MyClass1 {
    use HelloWorld { sayHello as protected; }
}

// Alias method with changed visibility
// sayHello visibility not changed
class MyClass2 {
    use HelloWorld { sayHello as private myPrivateHello; }
}


// Traits Composed from Traits 

trait Hello1 {
    public function sayHello() {
        echo 'Hello ';
    }
}

trait World1 {
    public function sayWorld() {
        echo 'World!';
    }
}

trait HelloWorld1 {
    use Hello, World;
}

class MyHelloWorld {
    use HelloWorld1;
}

$o = new MyHelloWorld();
$o->sayHello();
$o->sayWorld();

// Abstract Trait Members

trait Hello2 {
    public function sayHelloWorld() {
        echo 'Hello'.$this->getWorld();
    }
    abstract public function getWorld();       //no need to make classes abstract in time of trait
}

class MyHelloWorld1 {
    private $world;
    use Hello2;
    public function getWorld() {
        return $this->world;
    }
    public function setWorld($val) {
        $this->world = $val;
    }
}

// Static Trait Members 

