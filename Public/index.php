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

    if(isset($_SESSION['role']))
    {
        if(['role'] == 'admin'){
            $route->get('/', function (){AuthenticationController::dashboard(); });
        }elseif ($_SESSION['role'] == 'author')
    {
    $route->get('/wikis', function (){HomeController::wikis(); });
    }else
        {
            echo "page Not Found";
        }
    }


$route->get('/logout', function (){AuthenticationController::logout(); });

$route->get('/loginview', function (){AuthenticationController::loginView(); });

$route->post('/login', function (){
    (new App\Controllers\AuthenticationController)->login(); });

$route->get('/register', function (){AuthenticationController::registerview(); });

$route->post('/signup', function (){AuthenticationController::register(); });


// using post



$route->dispatch($uri, $method);

