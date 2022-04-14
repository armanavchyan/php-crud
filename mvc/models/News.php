<?php
namespace models;
use app\Db;
class News extends Db {
    
     public  function getAll(){ 
      $sql = 'SELECT * FROM `news1`';
      $stmt= $this->dbh->query($sql);
      $results = [];
            while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)){
                $results[]=$row;
            } 
             return $results;
   }
   
    public  function insert($title,$autor,$text){
       $this->dbh->setAttribute(\PDO::ATTR_ERRMODE,\PDO::ERRMODE_EXCEPTION);
       $sql = "INSERT INTO `news1`(`title`,`autor`,`text`)
                VALUES (?,?,?)";
       $stmt= $this->dbh->prepare($sql);
       $stmt->execute([$title,$autor,$text]);  
    }
}
