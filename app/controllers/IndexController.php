<?php

namespace app\controllers;

use app\models\TestModel;
use core\lib\Controller;

class IndexController extends Controller
{
    public function index()
    {
//        dump($GLOBALS['config']);
//        echo 'Index - index<br/>';
//
//        $model = new TestModel();
//        $model->index();

        dump(config('isDebug'));
        config('isDebug', false);
        dump(config('isDebug'));
    }
}
