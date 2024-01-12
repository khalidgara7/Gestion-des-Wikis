<?php

namespace App\Controllers;

class CategoriesController
{

    public static function categories()
    {
        require __DIR__ . "/../../View/Dashboard/Categories.php";
    }
}