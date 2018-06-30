<?php

// 路由相关配置
$router = require CONFIG . './router.php';

// 数据库相关配置
$db = require CONFIG . '/database.php';

return [
    'isDebug' => true,

    'defaultController' => 'index',
    'defaultAction' => 'index',

    'sessionAutoStart' => true,

    'router' => $router,

    'db' => $db,
];
