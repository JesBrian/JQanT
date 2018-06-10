<?php

namespace core\lib;

class Router
{
    public static $controller = 'index';
    public static $action = 'index';

    /**
     * Router constructor.
     *  1 - 隐藏 index.php
     *  2 - 获取 url 参数部分
     *  3 - 返回对应控制器(controller)和方法(action)
     *  ps：目前只支持纯 / 分割的路由，不支持 / ？ & 混用路由
     */
    public function __construct()
    {
        // 获取路由 path
        $path = $_SERVER['REQUEST_URI'];

        // 判断路由参数
        if ($path !== '/') {

            // 删除 $_GET 数组中的路由元素
            array_shift($_GET);

            // 拆分路由
            $pathParam = explode('/', trim($path, '/'));
            $paramLen = count($pathParam);

            // 将路由参数转为 控制器 & 方法 & get 请求参数
            if ($paramLen > 1) {
                self::$action = $pathParam[1];
                for ($i = 2; $i < $paramLen; $i = $i + 2) {
                    $_GET[$pathParam[$i]] = $pathParam[$i + 1];
                }
            }
            self::$controller = $pathParam[0];
        }
    }
}
