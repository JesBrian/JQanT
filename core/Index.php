<?php

namespace core;

use core\lib\Router;

class Index
{
    /**
     * Notes: 框架初始执行函数
     * @throws \Exception
     */
    public static function bootstrap()
    {
        new Router();
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