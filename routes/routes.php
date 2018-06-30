<?php

//use NoahBuscher\Macaw\Macaw;
//
//Macaw::get('', '\app\controllers\IndexController@index');
//
//Macaw::get('/index', '\app\controllers\IndexController@index');
//
//Macaw::get('/index/(:num)/(:any)', function ($id, $name) {
//    dump($id, $name);
//});
//
//Macaw::error(function () {
//    throw new Exception('404 - Not Found !');
//});
//
//Macaw::dispatch();

return $routerMapping = [
    '' => [
        'request' => 'GET',
        'controller' => '\app\controllers\IndexController',
        'method' => 'index'
    ],

    'index' => [
        'request' => 'GET',
        'controller' => '\app\controllers\IndexController',
        'method' => 'index'
    ],

    'user' => [
        'request' => 'POST',
        'controller' => '\app\controllers\UserController',
        'method' => 'index'
    ]
];
