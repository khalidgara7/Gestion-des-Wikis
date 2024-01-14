<?php
namespace App\Model;
use mysql_xdevapi\Exception;
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
    public function fetchRecentWikis()
    {
        try{ $query = "SELECT w.*,u.full_Name,c.NAME FROM wiki w
            INNER JOIN user u
            ON w.user_id=u.id
            INNER JOIN categorie c 
            ON w.categorie_id=c.id 
            where status ='published' 
            order by created_at
            LIMIT 5";
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
        $query = "update wiki set categorie_id = :categorie_id, title = :title, description = :description, content = :content
        where id=:id";
        $stmt = $this->data->prepare($query);
        $stmt->bindParam(":categorie_id",$categorie,PDO::PARAM_INT);
        $stmt->bindParam(":title",$title,PDO::PARAM_STR);
        $stmt->bindParam(":description",$description,PDO::PARAM_STR);
        $stmt->bindParam(":content",$content,PDO::PARAM_STR);
        $stmt->bindParam(":id",$id,PDO::PARAM_INT );
        $stmt->execute();
    }

    public function updateStatusPublished($data)
    {
        try {
            $query = "update wiki set status = 'published'
        where id = :id";
            $stmt = $this->data->prepare($query);
            $stmt->bindParam(":id", $data, PDO::PARAM_INT);
            $stmt->execute();
        }catch (PDOException $e){
            echo "Failed !";
        }
    }

    public function updateStatusDraft($data)
    {
        try {
            $query = "update wiki set status = 'draft'
                where id = :id";
            $stmt = $this->data->prepare($query);
            $stmt->bindParam(":id", $data, PDO::PARAM_INT);
            $stmt->execute();
        }catch (PDOException $e){
            echo " Failed ! ";
        }
    }

    public function updateStatusArechived($data)
    {
        try {
            $query = "update wiki set status = 'archived'
                        where id = :id";
            $stmt = $this->data->prepare($query);
            $stmt->bindParam(":id", $data, PDO::PARAM_INT);
            $stmt->execute();
        }catch (PDOException $e){
            echo " Failed ! ";
        }
    }

    public function fetchWiki($id)
    {
        try{ $query = "SELECT w.*,u.full_Name,c.NAME FROM wiki w
            INNER JOIN user u
            ON w.user_id=u.id
            INNER JOIN categorie c 
            ON w.categorie_id=c.id 
            where status ='published' 
            and w.id = $id";
            $executquery = $this->data->prepare($query);

            $executquery->execute();
            return $executquery->fetch(PDO::FETCH_ASSOC);
        }catch (PDOException  $e){
            echo "error fetching data" . $e->getMessage();
        }
    }


    //statistic for wikis
    public function countWikis(){
        $obj = new Model();
        $nbrwikis = $obj->count("wiki");
        return $nbrwikis;
    }

    public function countPublishedWikis()
    {
        try {
            $query="select count(id) as nbr from `wiki` where status = 'published'";
            $stmt = $this->data->prepare($query);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            return $result;
        }catch (PDOException $e){
            echo "error fetching users" . $e->getMessage();
            return $result=0;
        }
    }

    public function searchWikis($data)
    {
        $query = "SELECT * FROM wiki w WHERE w.title like :search ";
        $stmt = $this->data->prepare($query);
        $searchTerm = '%' . $data . '%';
        $stmt->bindParam(":search", $searchTerm, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


}