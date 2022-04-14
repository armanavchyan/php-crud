<?php
namespace app;
abstract class Db {
    protected $dbh;
    public function __construct(){
        $dsn = 'mysql:dbname=module1;host=127.0.0.1';
        $user = 'root';
        $password = '';
        try {
            $this->dbh = new \PDO($dsn, $user, $password);
        } catch (\PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }
    }
}