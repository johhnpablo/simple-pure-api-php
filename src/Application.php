<?php

namespace SimpleApi;
use SimpleApi\Router;
class Application
{
    protected Router $router;
    public function start()
    {
        $this->router = new Router();

        $this->router->create("GET", "/", function () {
           http_response_code(200);
           return;
        });

        $this->router->create("GET", "/hello", function () {
            http_response_code(200);
            echo json_encode(['hello' => 'world']);
            return;
        });

        $this->router->init();
    }
}