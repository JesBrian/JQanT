<?php

namespace core\lib;

class Model
{
    public function index()
    {
        echo 'Model Index Function<br/>';
        $arr = [
            'php' => 'php',
            'java' => 'java',
            'c#' => 'c#'
        ];
        dump($arr);
    }
}
