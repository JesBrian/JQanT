<?php

namespace app\controllers;

use core\lib\Model;

class IndexController
{
    public function index()
    {
        echo 'Index - index<br/>';

        $model = new Model();
        $model->index();
    }
}
