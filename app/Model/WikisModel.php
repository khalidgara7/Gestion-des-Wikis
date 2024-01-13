<?php
namespace App\Model;
use PDO;
use PDOException;

class WikisModel
{
    public $data;
    public function __construct()
    {
        $this->data = Connection::getInstance()->getConnection();
    }

    public function fetchAllWikis()
    {
        try{ $query = "SELECT w.*,u.full_Name,c.NAME FROM wiki w
            INNER JOIN user u
            ON w.user_id=u.id
            INNER JOIN categorie c 
            ON w.categorie_id=c.id 
            where status ='published' ";
            $executquery = $this->data->prepare($query);

            $executquery->execute();
            return $executquery->fetchAll(PDO::FETCH_ASSOC);
        }catch (PDOException  $e){
            echo "error fetching data" . $e->getMessage();
        }

    }

    public function getAllWikis(){
        try {
            $query = "SELECT w.*,u.full_Name,c.NAME FROM wiki w
            INNER JOIN user u
            ON w.user_id=u.id
            INNER JOIN categorie c 
            ON w.categorie_id=c.id ";
            $stmt = $this->data->prepare($query);
            $stmt->execute();
            $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $records;
        }catch (PDOException  $e){
            echo "error fetching wikis " . $e->getMessage();
        }

}

    public function addWiki($data)
    {
        extract($data);
        try {
            $query = "insert into wiki (user_id, categorie_id, title, description, content) 
                    values (:user_id, :categorie, :title, :description, :content) ";
            $excutequery = $this->data->prepare($query);
            $excutequery->execute($data);
        }catch (PDOException  $e){
            echo "error insert wikis " . $e->getMessage();
        }
    }

    public function deletewiki($id)
    {

        $query = " delete from wiki where id = $id ";
        $excutquery = $this->data->prepare($query);
        $excutquery->execute();
    }

    public function  getWiki($id){
        try {
            $query = "select * from wiki where id =$id";
            $stmt = $this->data->query($query);
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            return $result;
        }catch(PDOException $e){
            echo "error fetching wikis data :" + $e->getMessage();
        }

    }

    public function wikiupdate($data)
    {
        extract($data);
        $query = "update wiki set categorie_id=:categorie_id,title=:title,description=:description,content=:content
        where id=:id";
        $stmt = $this->data->prepare($query);
        $stmt->bindParam(":categorie_id",$categorie,PDO::PARAM_INT);
        $stmt->bindParam(":title",$title,PDO::PARAM_STR);
        $stmt->bindParam(":description",$description,PDO::PARAM_STR);
        $stmt->bindParam(":content",$content,PDO::PARAM_STR);
        $stmt->bindParam(":id",$id,PDO::PARAM_INT );
        $stmt->execute();
    }

}