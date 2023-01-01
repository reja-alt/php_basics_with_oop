<?php

include 'router.php';
include 'home.php';
// List of super globals 
// echo '<pre>';
// print_r($_SERVER);

$router = new App\Router();

echo '<pre>';
var_dump($router->register('/', [App\Home::class, 'index']));
$router->register('/invoices', [App\Home::class, 'invoice']);

// var_dump($router);

// $router->register('/invoices', function() {
//     echo 'index page access';
// });
echo $router->resolve($_SERVER['REQUEST_URI']);