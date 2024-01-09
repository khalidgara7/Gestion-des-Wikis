<?php

namespace App\Controllers;

class HomeController
{
    public static function index(){
        require __DIR__."/../../View/Home.php";
    }

    public static function Arcticle()
    {
        require __DIR__."/../../View/Articles.php";
    }


}