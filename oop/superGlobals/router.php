<?php

declare(strict_types = 1);
namespace App;
include 'routeException.php';
use App\Exception\RouteNewException;


// echo $_SERVER;
// $_SERVER['HTTPS'] = '676';
// var_dump($_SERVER['HTTPS']);
// $count = 0;
// foreach ($_SERVER as $parm => $value)  print_r('Value ' . $count++ . ' :' . "$parm = '$value' . '<br>");
class Router {
    private array $routes;

    public function register(string $route, callable|array $action): self {
        $this->routes[$route] = $action;
        return $this;
    }

    public function resolve(string $requestUri) {
        // var_dump($requestUri);
        // $route = explode('/', $requestUri);
        $route = explode('?', $requestUri)[0];
        // $route = ['/', '/invoices'];
        // $action = $this->routes[$route];
        
        // var_dump($action);
        
        $action = $this->routes[$route] ?? null;
        // echo '<pre>';
        // var_dump($action);
        if($action == null) {
            throw new RouteNewException();
        }
        
        if(is_callable($action)) {
            return call_user_func($action);
        }

        if(is_array($action)) {
            [$class, $method] = $action;

            if(class_exists($class)) {
                return new $class();
            }

            if(method_exists($class, $method)) {
                return call_user_func_array([$class, $method], []);
            }
        }
        
    }
}