<?php

require '../vendor/autoload.php';

use App\Controllers\AuthenticationController;
use App\Controllers\CategoriesController;
use App\Controllers\DashboardController;
use App\Controllers\HomeController;
use App\Controllers\SingelPageController;
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

// Parte Authentication pages.


$route->get('/logout', function (){AuthenticationController::logout(); });

$route->get('/loginview', function (){AuthenticationController::loginView(); });

$route->post('/login', function (){
    (new App\Controllers\AuthenticationController)->login(); });

$route->get('/register', function (){AuthenticationController::registerview(); });

$route->post('/signup', function (){AuthenticationController::register(); });


// partier admin
$route->get('/dashboard', function (){DashboardController::dashboard(); });

// wikis
$route->get('/formwiki', function (){DashboardController::formAddwiki(); });
$route->post('/addwiki', function (){WikisController::Addwiki(); });
$route->get('/deleteWiki', function (){WikisController::deletewiki(); });
$route->get('/updatewiki', function (){WikisController::formUpdateWiki(); });
$route->post('/submitupdatewiki', function (){WikisController::updateWiki(); });
$route->get('/updateStatus', function (){WikisController::updatStatusPublished(); });
$route->get('/updateStatusdarft', function (){WikisController::updatStatusDraft(); });
$route->get('/updateStatusArchived', function (){WikisController::updatStatusArchived(); });

// categories
$route->get('/categories', function (){CategoriesController::categories(); });
$route->get('/Addcategories', function (){CategoriesController::Addcategories(); });
$route->post('/formcategorie', function (){CategoriesController::saveCategorie(); });
$route->get('/deleteCategorie', function (){CategoriesController::deleteCategorie(); });
$route->get('/updatecategoriesForm', function (){CategoriesController::formUpdateCategorie(); });
$route->post('/submitupdateCategorie', function (){CategoriesController::submitupdateCategorie(); });


// tags
$route->get('/tags', function (){TagsController::tags(); });
$route->get('/Addtags', function (){TagsController::addTag(); });
$route->post('/formtag', function (){TagsController::saveTags(); });
$route->get('/deleteTag', function (){TagsController::deletetag(); });
$route->get('/Updatetagsform', function (){TagsController::formUpdateTags(); });
$route->post('/submitUpdatetags', function (){TagsController::submitUpdateTags(); });

// Author-guest

$route->get('/singlwiki', function () {SingelPageController::singlePage();});

// tagwikis

$route->post('/addtagswikis', function (){SingelPageController::addtagwikis();});
$route->dispatch($uri, $method);

