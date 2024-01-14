<?php

namespace App\Model;

use PDO;
use PDOException;

class TagWikiModel
{


    public $data;
    public function __construct()
    {
        $this->data = Connection::getInstance()->getConnection();
    }
    public function addtagswikis($wiki_id, $tag_id)
    {
        try {
            $query = "insert into tagwiki (id_wiki, id_tag) values (:wiki_id, :tag_id)";
            $stmt = $this->data->prepare($query);
            $stmt->bindparam(":wiki_id", $wiki_id, \PDO::PARAM_INT);
            $stmt->bindparam(":tag_id", $tag_id, \PDO::PARAM_INT);
            $stmt->execute();
        }catch (PDOException $e){
            echo "tag wiki failed to add", $e->getMessage();
        }


    }

    public function fetchwikiTags($id)
    {
        try {
            $query="SELECT t.NAME FROM tagwiki tw
            INNER JOIN tag  t
            ON tw.id_tag=t.id
            WHERE tw.id_wiki = :id";
            $stmt = $this->data->prepare($query);
            $stmt->bindParam(':id',$id,PDO::PARAM_STR);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }catch(PDOException $e){
            echo "error update Tags" . $e->getMessage();
        }
    }
}