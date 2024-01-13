<?php

namespace App\Model;

use PDO;
use PDOException;

class TagsModel extends Model
{

    public function fetchAllCategories()
    {
        return $this->read('tag');
    }

    public function addTags($data)
    {
        extract($data);

        try {
            $query = "insert into tag(NAME) values (:name)";
            $excutequery = $this->data->prepare($query);
            $excutequery->execute($data);
        } catch (PDOException  $e){
            echo "error insert a tag " . $e->getMessage();
        }
    }

    public  function deleteTag($id)
    {
        $query = " delete from tag where id = $id ";
        $excutquery = $this->data->prepare($query);
        $excutquery->execute();
    }

    public function getTag($id)
    {
        try {
            $query = "select * from tag where id =:id";
            $stmt = $this->data->prepare($query);
            $stmt->bindParam(":id",$id,PDO::PARAM_INT);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_OBJ);
            return $result;
        }catch (PDOException $e){
            echo "error fetching tags" . $e->getMessage();
        }
    }

    public function submitTags($data)
    {
        try {
            $id = $data['id'];
            $name = $data['name'];
            $query="update tag set NAME=:name where id=:id";
            $stmt = $this->data->prepare($query);
            $stmt->bindParam(':name',$name,PDO::PARAM_STR);
            $stmt->bindParam(':id',$id,PDO::PARAM_STR);
            $stmt->execute();
        }catch(PDOException $e){
            echo "error update Tags" . $e->getMessage();

        }
    }

}