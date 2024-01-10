<?php

namespace App\Core;

class Router
{
    public $router = [];

    public function get($uri, $callback)
    {
       $this->router["get"][$uri] = $callback;
    }

    public function post($uri, $callback)
    {
       $this->router["post"][$uri] = $callback;
    }

    public function dispatch($uri, $method)
    {
        if (array_key_exists($uri, $this->router[$method] ?? array())) {

            $this->router[$method][$uri]();

        }else {
            echo "NOT FOUND";
        }
    }

}