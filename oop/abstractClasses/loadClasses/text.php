<?php

class Text extends Field {

    public string $age;
    
    public function render($x = 1): string {
        return  <<<HTML
        <input type="text" name="{$this->name}" value="{$this->name}" />
        HTML;
    }
}