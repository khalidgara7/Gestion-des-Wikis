<?php

namespace App\Model;
use PDO;
use PDOException;

class CategorieModel extends Model
{
    public function fetchAllCategories(){

       return  $this->read("categorie");
    }

    public function addCategories($data)
    {

        extract($data);

        try {
            $query = "insert into categorie(NAME) values (:name)";
            $excutequery = $this->data->prepare($query);
            $excutequery->execute($data);
        } catch (PDOException  $e){
            echo "error insert categories " . $e->getMessage();
        }
    }

    public  function deleteCatego($id)
    {
        $query = " delete from categorie where id = $id ";
        $excutquery = $this->data->prepare($query);
        $excutquery->execute();
    }

    public function getCatgorie($id)
    {
        try {
            $query = "select * from categorie where id =:id";
            $stmt = $this->data->prepare($query);
            $stmt->bindParam(":id",$id,PDO::PARAM_INT);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_OBJ);
            return $result;
        }catch (PDOException $e){
            echo "error fetching categorie" . $e->getMessage();
        }

    }

    public function submitUpdateCatgorie($data)
    {
        try {
            $id = $data['id'];
            $name = $data['name'];
            $query="update categorie set NAME=:name where id=:id";
            $stmt = $this->data->prepare($query);
            $stmt->bindParam(':name',$name,PDO::PARAM_STR);
            $stmt->bindParam(':id',$id,PDO::PARAM_STR);
            $stmt->execute();
        }catch(PDOException $e){
            echo "error update categorie" . $e->getMessage();

        }


    }


}