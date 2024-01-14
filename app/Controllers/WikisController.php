<?php

namespace App\Controllers;

use App\Model\CategorieModel;
use App\Model\UserModel;
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
        if (controller::islogdin()) {

            if (isset($_POST)) {
                $addwiki = new WikisModel();
                $addwiki->addWiki($_POST);
                header("location: /../../dashboard");

            }else{
                header("location: /../../dashboard");
            }
        }
    }

    public static function deletewiki()
    {
         $id = $_GET['id'];
            $deletewiki = new WikisModel();
            $deletewiki->deletewiki($id);
        header("location: /../../dashboard");

    }

    public static function formUpdateWiki()
    {
        $id = $_GET['id'];
        $categorie = new CategorieModel();
        $categories = $categorie->fetchAllCategories();
        $obj = new UserModel();
        $Authors = $obj->fetchAllAuthor();

        $wikiObj = new WikisModel();
        $wiki = $wikiObj->getWiki($id);
        require __DIR__ . "/../../View/Dashboard/updatewiki.php";

    }

    public static function updateWiki()
    {

            $updatewiki = new WikisModel();
            $updatewiki->wikiupdate($_POST);
            header("location: /../../dashboard");



    }

    public static function updatStatusPublished()
    {
        $id = $_GET['id'];
        $status = new WikisModel();
        $status->updateStatusPublished($id);
        header("location: /../../dashboard");
    }

    public static function updatStatusDraft()
    {
        $id = $_GET['id'];
        $statusdarft = new WikisModel();
        $statusdarft->updateStatusDraft($id);
        header("location: /../../dashboard");

    }

    public static function updatStatusArchived()
    {
        $id = $_GET['id'];
        $statusarchived = new WikisModel();
        $statusarchived->updateStatusArechived($id);
        header("location: /../../dashboard");
    }

}