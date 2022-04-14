<?php
namespace controllers;
use models\News;
use app\View;

class NewsController {
    public function index(){
         echo"<a href='/news/get'>Create News</a>";
    }
    public function get(){
       $select = new News();
       $selects = $select-> getAll();
       return View::render('news/index',['selects' => $selects]);
    }
    public function create(){
         if(empty($_POST['title'])){
         echo 'заполнайте имя';
       }elseif (empty($_POST['autor'])) {
           echo 'заполнайте autor'; 
       }elseif (empty($_POST['text'])) {
           echo 'заполнайте text';
       }else{
       $select = new News();
       $select-> insert($_POST['title'],$_POST['autor'],$_POST['text'] );
       echo "Информация добавлен !!!";
       header( "refresh:3 ;url=/news/get" );
       }
       return View::render('news/create');
    }
}
