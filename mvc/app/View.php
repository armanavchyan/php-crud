<?php
namespace app;
class View {
    public static function render($viewPath,$vars=[]){
        $viewPath = ROOT.'/views/'.$viewPath.'.php';
        extract($vars);
        ob_start();
        include $viewPath;
        ob_end_flush();
    }
}
