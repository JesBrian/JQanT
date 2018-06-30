<?php

namespace core\lib;

class Router
{
    // 路由映射参数
    private static $param = [];

    // 预定义路由映射控制器方法关系
    private static $routerMapping = [];

    /**
     * Notes: 加载路由 -> 自定义路由映射到控制器和方法
     * @throws \Exception
     */
    public static function loadRoutes()
    {
        self::$routerMapping = require JQANT . '/routes/routes.php';

        self::checkRouterMappingExist();

        self::checkRequestType();
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
            config('router', self::$routerMapping[trim($_SERVER['REQUEST_URI'], '/')]);
        }
    }

    /**
     * Notes: 检查请求类型
     * @throws \Exception
     */
    private static function checkRequestType()
    {
        if ($_SERVER['REQUEST_METHOD'] !== config('router')['request']) {
            throw new \Exception('请求类型错误！');
        }
    }
}
