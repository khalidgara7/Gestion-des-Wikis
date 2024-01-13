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
        $categorie = new CategorieModel();
        $categories = $categorie->fetchAllCategories();

        $nbrCategories = $categorie->countCategories();
        require __DIR__ . "/../../View/Dashboard/Categories.php";
    }

    public static function Addcategories()
    {
            require __DIR__ . "/../../View/Dashboard/Addcategories.php";
    }

    public static function saveCategorie()
    {
        if(isset($_POST))
        {
            $addcategorie = new CategorieModel();
            $addcategorie->addCategories($_POST);
            header('location: /../../Addcategories');
        }
    }

    public static function deleteCategorie()
    {
        $id = $_GET['id'];
        $deletecategorie = new CategorieModel();
        $deletecategorie->deleteCatego($id);
        header("location: /../../categories");
    }


    public static function formUpdateCategorie()
    {
        $id = $_GET['id'];
        $categorieObj = new CategorieModel();
        $categorie = $categorieObj->getCatgorie($id);
        require __DIR__ . "/../../View/Dashboard/updateCategories.php";

    }

    public static function submitupdateCategorie()
    {
        $objCatgorie = new CategorieModel();
        $objCatgorie->submitUpdateCatgorie($_POST);
        header("location: /../../categories");

    }



}