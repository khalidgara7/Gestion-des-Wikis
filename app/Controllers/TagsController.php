<?php

namespace App\Controllers;

use App\Model\CategorieModel;
use App\Model\TagsModel;

class TagsController
{

    public static function tags()
    {
        $tag = new TagsModel();
        $tags = $tag->fetchAllCategories();
        require __DIR__ . "/../../View/Dashboard/Tags.php";
    }

    public static function addTag()
    {
        require __DIR__ . "/../../View/Dashboard/AddTags.php";
    }

    public static function deletetag()
    {
        $id = $_GET['id'];
        $deletetag = new TagsModel();
        $deletetag->deleteTag($id);
        header("location: /../../tags");
    }

    public static function  saveTags()
    {
        if(isset($_POST))
        {
            $addtags = new TagsModel();
            $addtags->addTags($_POST);
            header('location: /../../Addtags');
        }
    }

    public static function formUpdateTags()
    {
        $id = $_GET['id'];
        $tagObj = new TagsModel();
        $tag = $tagObj->getTag($id);
        require __DIR__ . "/../../View/Dashboard/updateTags.php";
    }

    public static function submitUpdateTags()
    {
        $objTags = new TagsModel();
        $objTags->submitTags($_POST);
        header("location: /../../tags");
    }

}