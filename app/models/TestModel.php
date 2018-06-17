<?php

namespace app\models;

use core\lib\Model;

class TestModel extends Model
{
    public static function test()
    {
        echo 888;
    }

    public function index()
    {
        echo "Model - index";
    }
}
