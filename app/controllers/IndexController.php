<?php

namespace app\controllers;

use core\lib\Controller;
use app\logics\IndexLogics;

class IndexController extends Controller
{
    public function index()
    {
        dump($GLOBALS['config']);
        echo 'Index - index<br/>';

        session('name', 'Jesbrian');
        echo session('name');

        dump(config('isDebug'));
        config('isDebug', false);
        dump(config('isDebug'));

        dump(get());

        $indexLogic = new IndexLogics();
        $indexLogic->testLogics();
    }
}
