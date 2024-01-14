<?php

namespace App\Controllers;

use App\Model\CategorieModel;
use App\Model\TagsModel;

class TagsController
{

    public static function tags()
    {
        if(controller::isAdmin()){
            $tag = new TagsModel();
            $tags = $tag->fetchAllTags();

            $nbrtags = $tag->countTags();
            require __DIR__ . "/../../View/Dashboard/Tags.php";
        }else{
            header('location: /home');
        }
    }

    public static function addTag()
    {
        if(controller::isAdmin()){
            require __DIR__ . "/../../View/Dashboard/AddTags.php";
        }else{
            header('location: /home');
        }
    }

    public static function deletetag()
    {
        if(controller::isAdmin()){
            $id = $_GET['id'];
            $deletetag = new TagsModel();
            $deletetag->deleteTag($id);
            header("location: /../../tags");
        }else{
            header('location: /home');
        }
    }

    public static function  saveTags()
    {
        if(controller::isAdmin()){
            if(isset($_POST))
            {
                $addtags = new TagsModel();
                $addtags->addTags($_POST);
                header('location: /../../Addtags');
            }
        }else{
            header('location: /home');
        }
    }

    public static function formUpdateTags()
    {
        if(controller::isAdmin()){
            $id = $_GET['id'];
            $tagObj = new TagsModel();
            $tag = $tagObj->getTag($id);
            require __DIR__ . "/../../View/Dashboard/updateTags.php";
        }else{
            header('location: /home');
        }
    }

    public static function submitUpdateTags()
    {
        if(controller::isAdmin()){
            $objTags = new TagsModel();
            $objTags->submitTags($_POST);
            header("location: /../../tags");
        }else{
            header('location: /home');
        }
    }
}