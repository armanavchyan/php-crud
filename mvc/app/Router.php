<?php
namespace app;


class Router {
    public function run(){
        $segments = explode('/',(trim($_SERVER["REQUEST_URI"],"/")));
        $segments=  array_filter($segments);
        $controllerName = "DefaultController";
        $action = 'index';
        $params=[];
        foreach ($segments as $key => $segment) {
            if($key==0){
                $controllerName = ucfirst($segment).'Controller';
            }elseif ($key==1) {
                $action = $segment;
            }else{
                $params[] = $segment;
            }           
        }
//        if ($controllerName !== 'AuthController')
//        {
//            if (!$_SESSION['userName']){
//                header('Location:/auth/login');
//                //redirect
//            }else{
//                 header('Location:'. View::render('auth/login'));
//            }
//        }
        $controllerName = "controllers\\$controllerName";
        $obj = new $controllerName;
        call_user_func_array([$obj,$action], $params);
    }
}