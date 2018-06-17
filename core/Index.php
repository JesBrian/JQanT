<?php

namespace core;

use core\lib\Config;
use core\lib\Model;
use core\lib\Router;

class Index
{
    /**
     * Notes: 框架初始执行函数
     */
    public static function bootstrap()
    {
        /**
         * 配置框架
         */
        Config::loadConfig();

        /**
         * 加载路由
         */
        Router::loadRoutes();

        /**
         * 连接数据库
         */
        Model::connectDataBase();
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
        } else {
            throw new \Exception('PHP 文件不存在');
        }
    }
}