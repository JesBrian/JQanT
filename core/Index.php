<?php

namespace core;

class Index
{
//    private static $classMap = [];

    public static function run()
    {
        $router = new Router();
    }

    /**
     * Notes: 自动加载类
     * @param $class
     * @return bool
     */
    public static function load($class)
    {
        $classPath = JQANT . '/' . str_replace('\\', '/', $class) . '.php';

//        if (in_array($class, self::$classMap)) {
//            echo 888;
//            return true;
//        }
        if (file_exists($classPath)) {
            echo 666;
            require_once ($classPath);
//            array_push(self::$classMap, $class);
            return true;
        } else {
            return false;
        }
    }
}