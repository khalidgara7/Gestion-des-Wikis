<?php

require '../vendor/autoload.php';

use App\Controllers\AuthenticationController;
use App\Controllers\HomeController;
use App\Core\Router;

session_start();

$path = $_SERVER['REQUEST_URI'];

$uri = parse_url($path)["path"];

$method = strtolower($_SERVER["REQUEST_METHOD"]);

$route = new Router();
// display pages
$route->get('/home', function () { HomeController::index(); });

$route->get('/wikis', function (){HomeController::wikis(); });

// Display Authentication pages.
$route->get('/logout', function (){AuthenticationController::logout(); });

$route->get('/login', function (){AuthenticationController::loginView(); });

$route->get('/login', function (){AuthenticationController::login(); });

$route->get('/register', function (){AuthenticationController::register(); });


// using post



$route->dispatch($uri, $method);

