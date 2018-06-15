<?php

namespace app\controllers;

use app\models\TestModel;
use core\lib\Controller;

class IndexController extends Controller
{
    public function index()
    {
        echo 'Index - index<br/>';

        $model = new TestModel();
        $model->index();
    }
}
