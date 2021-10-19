<?php

class Route 
{
    public static function buildRoute () {
        $action = "index";
        $controllerName = "IndexController";
        $modelName = "IndexModel";
        
        $route = explode('/',$_SERVER['REQUEST_URL']);
        if($route[1] != '') {
            $controllerName = ucfirst($route[1],'Controller');
            $modelName = ucfirst($route[1],'Мodel');
        }
        include CONTROLLER_PATH . $controllerName . '.php';
        include MODEL_PATH . $modelName . '.php';
        if(isset($route[2]) && $route[2] != '') {
            $action = $route[2];
        }
        $controller = new $controllerName();
        $controller -> $action();// контроллер
    }

    public function errorPage () {

    }
}