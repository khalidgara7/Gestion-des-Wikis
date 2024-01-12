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
        $query = "insert into wiki (user_id, categorie_id, title, description, content) 
                    values (:user_id, :categorie, :title, :description, :content) ";
        $excutequery = $this->data->prepare($query);
        $excutequery->execute($data);
    }
    public function deletewiki($id)
    {

        $query = " delete from wiki where id = $id ";
        $excutquery = $this->data->prepare($query);
        $excutquery->execute();
    }

}