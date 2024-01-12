<?php

namespace App\Controllers;

use App\Model\WikisModel;

class WikisController
{
    public static function wikis()
    {
        $wiki = new WikisModel();
        $wikis = $wiki->fetchAllWikis();

        require __DIR__."/../../View/AllWikis.php";
    }

    public static function Addwiki()
    {
        if(isset($_POST))
        {
            $addwiki = new WikisModel();
            $addwiki->addWiki($_POST);
            header("location: /../../dashboard");

        }
    }

    public static function deletewiki()
    {
         $id = $_GET['id'];
            $deletewiki = new WikisModel();
            $deletewiki->deletewiki($id);
        header("location: /../../dashboard");



    }

}