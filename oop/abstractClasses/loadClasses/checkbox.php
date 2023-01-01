<?php

class Checkbox extends Boolean {

    public function render(): string {     //rendering different function from abstract class
        return  <<<HTML
        <input type="checkbox" name="{$this->name}" />
        HTML;
    }
}