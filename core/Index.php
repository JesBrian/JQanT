<?php

namespace core;

use core\lib\Config;
use core\lib\Helper;
use core\lib\Model;
use core\lib\Router;

class Index
{
    /**
     * Notes: 框架初始执行函数
     * @throws \Exception
     */
    public static function bootstrap()
    {
        // 全局函数
        Helper::globalFunction();

        // 配置框架
        Config::loadConfig();

        // 连接数据库
        Model::connectDataBase();

        // 加载路由
        Router::loadRoutes();

        // 实例化控制器并调用路由映射方法
        $controller = config('router')['controller'];
        $method = config('router')['method'];
        $controller = new $controller;
        $controller->$method();
    }

    /**
     * Notes: 自动加载类
     * @param $class
     * @throws \Exception
     */
    public static function autoloadClass($class)
    {
        $classPath = JQANT . '/' . str_replace('\\', '/', $class) . '.php';

        if (file_exists($classPath)) {
            require ($classPath);
        }
    }
}