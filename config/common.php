<?php

$db = require CONFIG . '/database.php';

return [
    'isDebug' => true,

    'defaultController' => 'index',
    'defaultAction' => 'index',

    'sessionAutoStart' => true,

    'db' => $db,
];
