<?php

namespace App;
class CollectionArray implements \Iterator {

    public function __construct(public array $collectData)
    {
       
    }

    public function current() {
        return current($this->collectData);
    }

    public function next() {
        next($this->collectData);
    }

    public function key() {
        return key($this->collectData);
    }

    public function valid() {
        return key($this->collectData) !== false;
    }

    public function rewind() {
        reset($this->collectData);
    }
}