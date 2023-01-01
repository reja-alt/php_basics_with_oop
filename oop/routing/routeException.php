<?php

namespace App\Exception;

class RouteException extends \Exception {
    protected $message = '404 not found';
    
    public function Message() {
        echo '<h1 style="text-align: center; margin-top: 270px; color: #B2BEB5;">' . $this->message . '</h1>';
    }
}