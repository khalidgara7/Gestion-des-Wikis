<?php

namespace App\Model;
use PDO;
class UserModel extends Model {
    public $data;
    public function __construct()
    {
        $this->data = Connection::getInstance()->getConnection();
    }
    public function findUserByEmail($email)
    {
        $query = "select * from user where email = ?";
        $executquery = $this->data->prepare($query);
        $executquery->bindParam(1,$email);
        $executquery->execute();
        return $executquery->fetch(PDO::FETCH_ASSOC);
    }

    public function signup($full_name, $birthday, $email, $password)
    {
        $query = "INSERT INTO user (full_Name, password, email, birthday, role) 
          VALUES (:full_name, :password, :email, :birthday, :role)";
        $hachpassword = password_hash($password, PASSWORD_DEFAULT);
        $role ="author";
        $excutequery = $this->data->prepare($query);
        $excutequery->bindParam(':full_name', $full_name, PDO::PARAM_STR);
        $excutequery->bindParam(':password', $hachpassword, PDO::PARAM_STR);
        $excutequery->bindParam(':email', $email, PDO::PARAM_STR);
        $excutequery->bindParam(':birthday', $birthday, PDO::PARAM_STR);
        $excutequery->bindParam(':role', $role, PDO::PARAM_STR);
        $excutequery->execute();
    }

    ///////////////////////////////////////////////////

    public function fetchAllAuthor(){
        return  $this->read("user");
    }



}