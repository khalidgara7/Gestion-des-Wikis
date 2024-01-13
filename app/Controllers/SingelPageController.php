<?php

namespace App\Controllers;

use app\Model\SinglePageModel;
use App\Model\WikisModel;

class SingelPageController
{
    public static function singlePage()
    {
        $id = $_GET['id'];
        $sendwiki = new WikisModel();
        $wiki = $sendwiki->fetchWiki($id);
        require __DIR__."/../../View/singleWiki.php";
    }
}