<?php

namespace core\lib;

class Router
{
    public function __construct()
    {
        require JQANT . '/routes/routes.php';
    }
}
