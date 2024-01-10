<?php

namespace App\Model;
use PDO;
class UserModel
{
    public $data;
    public function __construct()
    {
        $this->data = \Connection::getInstance()->getConnection();
    }
    public function findUserByEmail($email)
    {
        $query = "select * from user where '$email' = email";
        $executquery = $this->data->query($query)->fetchAll(PDO::FETCH_ASSOC);
        return $executquery;
    }
}