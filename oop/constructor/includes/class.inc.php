<?php
class Car {
    public $model;

    public function setValue($model) {
        $this->model = $model;
    }

    public function getValue() {
        return $this->model;
    }
}