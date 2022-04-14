<?php
namespace controllers;
use models\User;
use app\View;
class UserController {
    
    public function index(){
        echo"<a href='user/create'>Create Users</a>";
    }
    
    public function get(){
        $user = new User;
        $users = $user -> getAll();
        return View::render('users/index',['users'=>$users]);
    }

    public function create(){
       if(empty($_POST['name'])){
           echo 'заполнайте имя';
       }elseif (empty($_POST['email'])) {
           echo 'заполнайте email'; 
       }elseif (empty($_POST['password'])) {
           echo 'заполнайте password';
       }else{
           $inserts = new User;
           $inserts->insert($_POST['name'], $_POST['email'], $_POST['password']);
           echo "Ползоботел добавлен !!!";
           header( "refresh:1 ;url=/auth/login" );
       }
       return View::render('users/create');
    }
    
    public function change(){
        if(empty($_POST['name'])){
            echo 'заполнайте имя';
       }elseif (empty($_POST['email'])) {
            echo 'заполнайте email'; 
       }else{
           $ubdates = new User;
           $ubdate = $ubdates->ubdate( $_POST['name'],$_POST['email']);
           echo 'ubdate is ok !!!';
           header( "refresh:3 ;url=/user/get" );
       }
       return View::render('users/ubdate');
    }
    public function delete(){
        if(!empty($_POST['email'])) {
            $deletes = new User;
            $deletes->delete($_POST['email']);
            echo 'delete is ok !!!';
            header( "refresh:3 ;url=/user/get" );
       }else{
           echo 'zapolni email';
       }
       return View::render('users/delete');
    }
    
}
