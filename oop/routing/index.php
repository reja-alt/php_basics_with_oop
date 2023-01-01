<?php

// include 'classes/view.php';
include_once('autoload.php');
include 'router.php';
include 'routeException.php';

use App\Exception\RouteException;
// use App\View\View;

define('STORAGE_PATH', __DIR__ . '/storage');
define('VIEW_PATH', __DIR__ . '/' . 'view');

try {
    $router = new App\Router();

    $router
        ->get('/home', [HomeController::class, 'home'])
        ->get('/upload', [App\Router::class, 'upload'])
        ->get('/index', [HomeController::class, 'index'])
        ->get('/index/create', [HomeController::class, 'create'])
        ->post('/index/create', [HomeController::class, 'store'])
        ->get('/upload/create', [UploadController::class, 'index'])
        ->get('/download', [UploadController::class, 'download'])
        ->post('/upload/create', [UploadController::class, 'upload'])
        ->get('/database/create', [DBController::class, 'index']);

    $router->resolve($_SERVER['PATH_INFO'], strtolower($_SERVER['REQUEST_METHOD']));

} catch (RouteException $e) {
    $e->Message();
    // header('HTTP/1.1 404 Not Found'); //or
    http_response_code(404);   //param must be integer  header must be set before any output like session and cookie
    // echo View::make('error/404');
}

