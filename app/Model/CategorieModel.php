<?php

namespace App\Model;

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


}