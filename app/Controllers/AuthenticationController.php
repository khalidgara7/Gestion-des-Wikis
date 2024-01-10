<?php

namespace App\Controllers;

use App\Model\UserModel;

class AuthenticationController
{
    // logout function
    public static function logout(): void
    {
        session_destroy();
        self::loginView();
    } 

    // function login for display page login.
    public static function loginView(): void
    {
        require __DIR__."/../../View/Login.php";
    }
    // function login for save data

    public function Login()
    {
        $savelogin = new UserModel();
        $email = $_POST['email'];
        $password = $_POST['password'];
        $userByEmail = $savelogin->findUserByEmail($email);

        if(password_verify($password, $userByEmail['MotDePasse']))
        {
            session_start();
            $_SESSION['UserID'] = $userByEmail['UserID'];
            $_SESSION['Role'] = $userByEmail['Role'];
            $_SESSION['name'] = $userByEmail['NomUtilisateur'];
            $_SESSION['email'] = $userByEmail['Email'];
            if($userByEmail['Role'] == "admin"){
                require __DIR__."/../../View/dashboard.php";
            }elseif ($userByEmail['Role'] == "author"){
                require __DIR__."/../../View/Wikis.php";
            }else{
                echo " doesn't find u";
            }
        }else
        {
            require __DIR__."/../../View/Home.php";
        }
    }

    public static function register()
    {
        require __DIR__."/../../View/Register.php";
    }


}