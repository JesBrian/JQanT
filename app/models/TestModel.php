<?php

namespace app\models;

use core\lib\Model;

class TestModel extends Model
{
    /**
     * 与模型关联的数据表
     * @var string
     */
    protected $table = 'test_table';

    public $timestamps = false;

    public static function test()
    {
        echo 888;
    }

    public function index()
    {
        echo "Model - index";
    }
}
