<?php

namespace core\lib;

class Router
{
    // 请求类型
    private static $request = '';

    // 路由映射控制器
    private static $controller = '';

    // 路由映射方法
    private static $method = '';

    // 路由映射参数
    private static $param = [];

    // 预定义路由映射控制器方法关系
    private static $routerMapping = [];

    /**
     * Notes: 加载路由 -> 自定义路由映射到控制器&方法
     * @throws \Exception
     */
    public static function loadRoutes()
    {
        self::$routerMapping = require JQANT . '/routes/routes.php';

        self::checkRouterMappingExist();

        self::checkRequestType();

        return new self::$controller;
    }

    /**
     * Notes: 检查路由映射是否存在
     * @throws \Exception
     */
    private static function checkRouterMappingExist()
    {
        if (array_key_exists(trim($_SERVER['REQUEST_URI'], '/'), self::$routerMapping) === false) {
            throw new \Exception('路由不存在！');
        } else {
            $temp = self::$routerMapping[trim($_SERVER['REQUEST_URI'], '/')];

            self::$request = $temp['request'];
            self::$controller = $temp['controller'];
            self::$method = $temp['method'];
        }
    }

    /**
     * Notes: 检查请求类型
     * @throws \Exception
     */
    private static function checkRequestType()
    {
        if ($_SERVER['REQUEST_METHOD'] !== self::$request) {
            throw new \Exception('请求类型错误！');
        }
    }
}
