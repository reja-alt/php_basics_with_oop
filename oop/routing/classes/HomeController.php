<?php

// namespace App;
include 'classes/view.php';
use App\View\View;

class HomeController {
    public static function home() {
        echo View::make('home/index', ['topics' => 'Welcome']);
    }

    public static function index() {
        echo 'index';
       echo (new View('index'))->render();
    }

    public static function create() {
        echo '<form method="post"><input type="text" name="amount"><label>Amount</label></form>';
    }

    public static function store() {
        $amount = $_POST['amount'];
        var_dump($amount);
    }
}