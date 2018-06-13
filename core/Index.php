<?php

namespace core;

use core\lib\Router;

class Index
{
    /**
     * Notes: 框架初始执行函数
     * @throws \Exception
     */
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
            throw new \Exception('控制器不存在');
        }
    }

    /**
     * Notes: 自动加载类
     * @param $class
     * @throws \Exception
     */
    public static function load($class)
    {
        $classPath = JQANT . '/' . str_replace('\\', '/', $class) . '.php';

        if (file_exists($classPath)) {
            require_once ($classPath);
        } else {
            throw new \Exception('PHP 文件不存在');
        }
    }
}