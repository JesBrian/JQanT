<?php

namespace core\lib;

class Model
{
    public function index()
    {
        echo 'Model TestModel Function<br/>';
        $arr = [
            'php' => 'php',
            'java' => 'java',
            'c#' => 'c#'
        ];
        dump($arr);
    }
}
