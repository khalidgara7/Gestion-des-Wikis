<?php

namespace App\Model;
use PDO;
use PDOException;
class Model
{
    public $data;
    public function __construct()
    {
        $this->data = Connection::getInstance()->getConnection();
    }

    public function read($tableName){
        try {
            $query="select * from `$tableName`";
            $stmt  = $this->data->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }catch (PDOException $e){
            echo "error fetching data" . $e->getMessage();
            return [];
        }


    }


    public  function count($tableName){
        try {
            $query="select count(id) as nbr from `$tableName`";
        $stmt = $this->data->prepare($query);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
        }catch (PDOException $e){
            echo "error fetching data" . $e->getMessage();
            return $result=0;
        }
    }
}