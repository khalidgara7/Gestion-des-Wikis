<?php

namespace App\Controllers;

use App\Model\WikisModel;

class HomeController
{
    public static function index(){

        $wiki = new WikisModel();
        $wikis = $wiki->fetchRecentWikis();
        require __DIR__."/../../View/Home.php";
    }




}