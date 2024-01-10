<?php

namespace App\Controllers;

class HomeController
{
    public static function index(){
        require __DIR__."/../../View/Home.php";
    }

    public static function wikis()
    {
        require __DIR__."/../../View/Wikis.php";
    }



}