<?php

abstract class Field {

    public function __construct(public string $name) {
        
    }

    abstract protected function render(): string;
}