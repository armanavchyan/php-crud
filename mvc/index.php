<?php
session_start();
const ROOT = __DIR__.'/';

function __autoload($className){
    
    $className = str_replace('\\', DIRECTORY_SEPARATOR, $className);
    include ROOT."$className.php";
}
use app\Router;

$router = new Router();
$router -> run();
session_destroy();
?>