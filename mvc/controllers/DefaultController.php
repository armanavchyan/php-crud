<?php
namespace controllers;

class DefaultController {
    public function index(){
        header('Location:/user/create'); 
    }
}
