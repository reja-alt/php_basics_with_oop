<?php

 class Boolean extends Field {
    public function render(): string {
        return  <<<HTML
        <input type="text" name="{$this->name}" value="{$this->name}" />
        HTML;
    }
}