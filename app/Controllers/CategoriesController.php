<?php

namespace App\Controllers;

use App\Model\CategorieModel;
use App\Model\Model;
use App\Model\UserModel;
use App\Model\WikisModel;

class CategoriesController
{

    public static function categories()
    {
        if (controller::isAdmin()) {
            $categorie = new CategorieModel();
            $categories = $categorie->fetchAllCategories();

            $nbrCategories = $categorie->countCategories();
            require __DIR__ . "/../../View/Dashboard/Categories.php";
        } else {
            header('location: /home');

        }

    }

    public static function Addcategories()
    {
        if (controller::isAdmin()) {

            require __DIR__ . "/../../View/Dashboard/Addcategories.php";
        } else {
            header('location: /home');

        }
    }

    public static function saveCategorie()
    {
        if (controller::isAdmin()) {

            if (isset($_POST)) {
                $addcategorie = new CategorieModel();
                $addcategorie->addCategories($_POST);
                header('location: /../../Addcategories');
            }
        } else {
            header('location: /home');

        }
    }

    public static function deleteCategorie()
    {
        if (controller::isAdmin()) {

            $id = $_GET['id'];
            $deletecategorie = new CategorieModel();
            $deletecategorie->deleteCatego($id);
            header("location: /../../categories");
        } else {
            header('location: /home');

        }
    }


    public static function formUpdateCategorie()
    {
        if (controller::isAdmin()) {
            $id = $_GET['id'];
            $categorieObj = new CategorieModel();
            $categorie = $categorieObj->getCatgorie($id);
            require __DIR__ . "/../../View/Dashboard/updateCategories.php";
        } else {
            header('location: /home');

        }
    }

    public static function submitupdateCategorie()
    {
        if (controller::isAdmin()) {
            $objCatgorie = new CategorieModel();
            $objCatgorie->submitUpdateCatgorie($_POST);
            header("location: /../../categories");
        } else {
            header('location: /home');

        }
    }


}