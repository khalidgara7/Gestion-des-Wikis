<?php

namespace App\Controllers;

use App\Model\CategorieModel;
use App\Model\UserModel;
use App\Model\WikisModel;

class DashboardController
{

    public static function dashboard()
    {
        $objwiki = new WikisModel();
        $wikis = $objwiki->getAllWikis();

        $author = new UserModel();
        $nbrauthors = $author->countAuthors();

        $nbrwikis = $objwiki->countWikis();
        $nbrPublishedWikis = $objwiki->countPublishedWikis();
        require __DIR__ . "/../../View/Dashboard/dashboard.php";
    }
    public static function formAddwiki()
    {
        $obj = new CategorieModel();
        $categories = $obj->fetchAllCategories();

        $obj = new UserModel();
        $Authors = $obj->fetchAllAuthor();
        require __DIR__ . "/../../View/Dashboard/addwiki.php";
    }





}