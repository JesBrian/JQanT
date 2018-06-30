<?php

namespace app\controllers;

use core\lib\Controller;

class UserController extends Controller
{
    public function index()
    {
        dump($GLOBALS['config']);
    }
}

