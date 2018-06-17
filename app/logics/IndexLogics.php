<?php

namespace app\logics;

use app\models\TestModel;

class IndexLogics
{
    public function testLogics()
    {
        echo 'Index - logics';

        $model = new TestModel();
        $model->index();
        TestModel::test();

        dump(TestModel::all());
    }
}
