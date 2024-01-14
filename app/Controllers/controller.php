<?php

namespace App\Controllers;

class controller
{

    public static function isAdmin(){
        if(isset($_SESSION['id']) && $_SESSION['role'] == "admin"){
            return true;
        }else{
            return false;
        }
    }

    public static function islogdin(){
        if(isset($_SESSION['id'])){
            return true;
        }else{
            return false;
        }
    }
}