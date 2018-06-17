<?php

namespace core\lib;

class Config
{
    /**
     * Notes: 根据配置加载框架
     */
    public static function loadConfig()
    {
        if (config('isDebug') === true) {
            ini_set('display_errors', 'ON');

            $whoops = new \Whoops\Run();
            $errorTitle = '框架运行错误';
            $option = new \Whoops\Handler\PrettyPageHandler();
            $option->setPageTitle($errorTitle);
            $whoops->pushHandler($option);
            $whoops->register();
        } else {
            ini_set('display_errors', 'OFF');
        }
        if ((config('sessionAutoStart') === true) && (PHP_SESSION_ACTIVE !== session_status())) {
            session_start();
        }
    }
}
