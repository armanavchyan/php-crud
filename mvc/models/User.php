<?php
namespace models;
use app\Db;
class User extends Db{
    
   public  function getAll(){ 
      $sql = 'SELECT * FROM `users1`';
      $stmt= $this->dbh->query($sql);
      $results = [];
            while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)){
                $results[]=$row;
            }
            return $results;
   }
   
   public  function insert($name,$email,$password){
       $this->dbh->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
       $sql = "INSERT INTO `users1`(`name`,`email`,`password`)
                VALUES (?,?,?)";
       $stmt= $this->dbh->prepare($sql);
       $stmt->execute([$name,$email,$password]);  
} 

   public  function ubdate($name,$email){
       $this->dbh->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
       $sql = "UPDATE `users1` SET `name`= ? WHERE `email`= ?";
       $stmt= $this->dbh->prepare($sql);
       $stmt->execute([$name,$email]);
   }
   
   public  function delete($email){
       $this->dbh->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
       $sql = "DELETE FROM `users1` WHERE `email`=?";
       $stmt= $this->dbh->prepare($sql);
       $stmt->execute([$email]);
   }
   
   public  function login($userName){
       $sql = "SELECT `name` FROM `users1` WHERE `email`='".$userName."'" ;
       $stmt= $this->dbh->query($sql);
       return $stmt;
   } 
}
