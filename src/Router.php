<?php

namespace SimpleApi;

class Router
{
    protected array $routes = [];

    public function create(
        string $method,
        string $path,
        callable $callback
    ): void
    {
        $this->routes[$method][$path] = $callback;
    }

    public function init()
    {
        header('Content-Type: application/json; charset=utf-8');

        $http_method = $_SERVER['REQUEST_METHOD'];

        if(isset($this->routes[$http_method])) {

            foreach (
                $this->routes[$http_method] as $path => $callback
            ) {
                if($path === $_SERVER['REQUEST_URI']) {
                    return $callback();
                }
            }
        }
        http_response_code(404);
        return;
    }
}
