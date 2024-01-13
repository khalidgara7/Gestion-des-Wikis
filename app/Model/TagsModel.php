<?php

namespace App\Model;

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

}