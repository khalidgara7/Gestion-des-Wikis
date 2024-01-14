<?php

namespace App\Controllers;

use App\Model\TagsModel;
use App\Model\TagWikiModel;
use App\Model\WikisModel;

class SingelPageController
{
    public static function singlePage()
    {
        $id = $_GET['id'];

        $sendwiki = new WikisModel();
        $wiki = $sendwiki->fetchWiki($id);

        $tag = new TagsModel();
        $tags = $tag->fetchAllTags();

        $tag_wiki = new TagWikiModel();

        $wikitags = $tag_wiki->fetchwikiTags($id);

        require __DIR__."/../../View/singleWiki.php";
    }

    public static function addtagwikis()
    {

        $wiki_id = $_POST['wiki_id'];
        $tag_id = $_POST['tag_id'];

        $addtagwiki = new TagWikiModel();
        $addtagwiki->addtagswikis($wiki_id, $tag_id);
        header("location: singlwiki?id=$wiki_id");
    }
}