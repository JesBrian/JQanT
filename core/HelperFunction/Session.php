<?php

/**
 * Notes: 设置/获取 $_SESSION 全局函数
 * @param null $key
 * @param null $value
 * @return string
 */
function session($key = null, $value = null)
{
    if (is_null($value)) {
        if (is_null($key)) {
            return $_SESSION;
        }
        try {
            return $_SESSION[$key];
        } catch (Exception $exception) {
            return '';
        }
    }
    $_SESSION[$key] = $value;
}

/**
 * Notes: 删除 $_SESSION 全局函数
 * @param null $key
 */
function delSession($key = null)
{
    if (is_null($key)) {
        $_SESSION = [];
        session_destroy();
    } else {
        unset($_SESSION[$key]);
    }
}
