<?php

namespace core\lib;

use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Database\Eloquent\Model as EloquentModel;

class Model extends EloquentModel
{
    /**
     * Notes: 配置 Eloquent PHP ORM 操作数据库
     */
    public static function connectDataBase()
    {
        $capsule = new Capsule;
        $capsule->addConnection(config('db'));
        $capsule->bootEloquent();
    }
}
