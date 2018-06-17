<?php

namespace core\lib;

class Router
{
    /**
     * Notes: 加载路由
     */
    public static function loadRoutes()
    {
        require JQANT . '/routes/routes.php';
    }
}
