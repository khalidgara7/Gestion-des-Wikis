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

    public function login()
    {
        $savelogin = new UserModel();
        $email = $_POST['email'];
        $password = $_POST['password'];
        $userByEmail = $savelogin->findUserByEmail($email);

        if(password_verify($password, $userByEmail['password']))
        {
            $_SESSION['id'] = $userByEmail['id'];
            $_SESSION['name'] = $userByEmail['full_Name'];
            $_SESSION['email'] = $userByEmail['email'];
            $_SESSION['role'] = $userByEmail['role'];
            if($userByEmail['role'] == "admin"){
                header('location: /dashboard');
            }elseif ($userByEmail['role'] == "author"){
                header('location: /home');
            }else{
                echo " doesn't find u";
            }
        }else
        {
            header('location: /home');
        }
    }

    public static function registerview()
    {
        require __DIR__."/../../View/Register.php";
    }

    public static function register()
    {
        extract($_POST);
        if ($c_password == $password)
        {
            $check_mail = new UserModel();
            $userByEmail = $check_mail->findUserByEmail($email);
            if ($userByEmail == 0)
            {
                $insert = new UserModel();
                $insert->signup($full_name, $birthday, $email, $password);
                header('location: /loginview');
            }
            else
            {

                header('location: /register');
            }
        }else
        {

            header('location: /register');
        }

    }


}