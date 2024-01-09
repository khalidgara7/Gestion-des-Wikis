<?php

require '../vendor/autoload.php';

use App\Controllers\HomeController;
use App\Core\Router;

session_start();

$path = $_SERVER['REQUEST_URI'];

$uri = parse_url($path)["path"];

$method = strtolower($_SERVER["REQUEST_METHOD"]);

$route = new Router();

$route->get('/home', function () { HomeController::index(); });

$route->get('/article', function (){HomeController::Arcticle();});

$route->dispatch($uri, $method);

