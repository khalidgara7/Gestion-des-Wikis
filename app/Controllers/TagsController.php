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
        header("location: /../../Addtags");
    }

    public function saveTags()
    {
        if(isset($_POST))
        {
            $addtags = new TagsModel();
            $addtags->addTags($_POST);
            header('location: /../../AddTags');
        }
    }

}