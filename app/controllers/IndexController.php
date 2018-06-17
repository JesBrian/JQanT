<?php

namespace app\controllers;

use app\models\TestModel;
use core\lib\Controller;

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

        $model = new TestModel();
        $model->index();
        TestModel::test();

        dump(TestModel::all());
    }
}
