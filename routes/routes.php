<?php

use NoahBuscher\Macaw\Macaw;

Macaw::get('/index', '\app\controllers\IndexController@index');

Macaw::get('/index/(:num)', function ($test) {
    dump($test);
});

Macaw::error(function () {
    throw new Exception('404 - Not Found !');
});

Macaw::dispatch();
