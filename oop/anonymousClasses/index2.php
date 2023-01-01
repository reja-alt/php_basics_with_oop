<?php

class ClassA {
    public function __construct(public int $x, public int $y) {
        echo 'parent' . '<br>';
    }

    public function test() {
        return 'test';
    }

    public function demo() {
        return new class($this->x, $this->y) extends ClassA {
            public function __construct(public int $x, public int $y) {
                echo parent::__construct($x, $y) . '<br>';
                echo $this->test();
            }
        };
    }
}


$data = new ClassA(45,65);
var_dump($data->demo());