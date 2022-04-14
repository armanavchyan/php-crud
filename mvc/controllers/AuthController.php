<?php
namespace controllers;
use models\User;
use app\View;
class AuthController{
    public function  login(){
       return View::render('auth/login');
    }
    public function  user(){
       return View::render('users/user');
    }
    public function postLogin(){
        if(isset($_POST['email']) && isset($_POST['password'])){ 
            $userName =$_POST['email'];
            $password =$_POST['password'];
            $login = new User();
            $logins = $login->login($userName);
            if($logins){
                $_SESSION['userName']=$userName;
                header("refresh:1 ;url=/auth/user");
            }else{
                 header("refresh:1 ;url=/auth/login"); 
            }
        }   
    }

}
?>