<?php

require '../vendor/autoload.php';

use App\Controllers\AuthenticationController;
use App\Controllers\CategoriesController;
use App\Controllers\DashboardController;
use App\Controllers\HomeController;
use App\Controllers\TagsController;
use App\Controllers\WikisController;
use App\Core\Router;

session_start();

$path = $_SERVER['REQUEST_URI'];

$uri = parse_url($path)["path"];

$method = strtolower($_SERVER["REQUEST_METHOD"]);

$route = new Router();
// display pages
$route->get('/home', function () { HomeController::index(); });

$route->get('/wikis', function (){WikisController::wikis(); });

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


// partier admin

$route->get('/dashboard', function (){DashboardController::dashboard(); });
$route->get('/formwiki', function (){DashboardController::formAddwiki(); });
$route->post('/addwiki', function (){WikisController::Addwiki(); });
$route->get('/deleteWiki', function (){WikisController::deletewiki(); });

$route->get('/categories', function (){CategoriesController::categories(); });

$route->get('/tags', function (){TagsController::tags(); });



$route->dispatch($uri, $method);

