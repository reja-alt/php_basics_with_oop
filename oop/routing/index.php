<?php

// include 'classes/view.php';
require_once realpath(__DIR__ . '/vendor/autoload.php');
include_once('autoload.php');
include 'router.php';
include 'routeException.php';
include 'app.php';
include '.env.php';
include 'DotEnv.php';

use DevCoder\DotEnv;

use App\Exception\RouteException;
use App\App1;
// use App\View\View;

define('STORAGE_PATH', __DIR__ . '/storage');
define('VIEW_PATH', __DIR__ . '/' . 'view');

(new DotEnv(__DIR__ . '/.env.php'))->load();


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

(new App1($router, ['uri' => $_SERVER['PATH_INFO'], 'method' => $_SERVER['REQUEST_METHOD']]))->run();