<?php

namespace core\lib;

class Helper
{
    public static function globalFunction()
    {
        require JQANT_CORE . '/helper/Global.php';
        require JQANT_CORE . '/helper/Request.php';
        require JQANT_CORE . '/helper/Session.php';
        require JQANT_CORE . '/helper/Cookie.php';
    }
}
