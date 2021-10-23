<?php

class Route 
{
    public static function buildRoute () {
        $action = "index";
        $controllerName = "IndexController";
        $modelName = "IndexModel";
        
        $route = explode('/', $_SERVER["REQUEST_URI"]);

        if($route[1] != '') {
            $controllerName = ucfirst($route[1].'Controller');
            $modelName = ucfirst($route[1].'Мodel');
            echo '<pre>';
            var_dump($modelName);
            echo '</pre>';
        }
        require_once CONTROLLER_PATH . $controllerName . '.php';
        require_once MODEL_PATH . $modelName. '.php';
        if(isset($route[2]) && $route[2] != '') {
            $action = $route[2];
        }
        $controller = new $controllerName();
        $controller -> $action();// контроллер
    }

    public function errorPage () {

    }
}