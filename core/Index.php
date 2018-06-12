<?php

namespace core;

use core\lib\Router;

class Index
{
    public static function run()
    {
        $router = new Router();
        $controller = ucfirst($router::$controller);
        $action = $router::$action;
        $controllerFilePath = APP . '/controllers/' . $controller . 'Controller.php';
        if (file_exists($controllerFilePath)) {
            require_once ($controllerFilePath);
            $controllerClass = '\app\controllers\\' . $controller . 'Controller';
            $controllerObj = new $controllerClass();
            $controllerObj->$action();
        } else {
            echo '888';
        }
    }

    /**
     * Notes: 自动加载类
     * @param $class
     * @return bool
     */
    public static function load($class)
    {
        $classPath = JQANT . '/' . str_replace('\\', '/', $class) . '.php';

        if (file_exists($classPath)) {
            require_once ($classPath);
            return true;
        } else {
            return false;
        }
    }
}