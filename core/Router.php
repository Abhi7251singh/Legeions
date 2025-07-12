<?php
namespace Core;

class Router {
    protected $routes = [];

    public function get($uri, $callback) {
        $this->routes['GET'][$uri] = $callback;
    }

    public function dispatch() {
        $method = $_SERVER['REQUEST_METHOD'];
        $uri = $_SERVER['REQUEST_URI'];

        if (isset($this->routes[$method][$uri])) {
            [$class, $method] = $this->routes[$method][$uri];
            call_user_func([new $class, $method]);
        } else {
            http_response_code(404);
            echo "404 - Route Not Found";
        }
    }
}
