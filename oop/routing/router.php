<?php

declare(strict_types = 1);
namespace App;
use App\Exception\RouteException;

class Router {
    public array $routes;

    public function register(string $routeMethod, string $route, callable|array $action): self {
        $this->routes[$routeMethod][$route] = $action;
        return $this;
    }

    public function get(string $route, callable|array $action): self {
        return $this->register('get', $route, $action);
    }

    public function post(string $route, callable|array $action): self {
        return $this->register('post', $route, $action);
    }

    public function resolve(string $requestUri, string $routeMethod) {
        // var_dump($requestUri);
        $route = explode('?', $requestUri)[0];
        // var_dump($route);
        $action = $this->routes[$routeMethod][$route] ?? null;
        // var_dump($action);

        if($action == null) {
            throw new RouteException();
        }

        if(is_callable($action)) {
            call_user_func($action);
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