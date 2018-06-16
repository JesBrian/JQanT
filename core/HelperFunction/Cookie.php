<?php

/**
 * Notes: 设置/获取 $_COOKIE 全局函数
 * @param null $key
 * @param null $value
 * @param null $expire
 * @return string
 */
function cookie($key = null, $value = null, $expire = null)
{
    if (is_null($value)) {
        if (is_null($key)) {
            return $_COOKIE;
        }
        try {
            return $_COOKIE[$key];
        } catch (Exception $exception) {
            return '';
        }
    }

    if (is_null($expire)) {
        setcookie($key, $value);
    }
    setcookie($key, $value, $expire);
}

/**
 * Notes: 删除 $_COOKIE 全局函数
 * @param null $key
 */
function delCookie($key = null)
{
    $timestamp = time() - 1;
    if (is_null($key)) {
        foreach ($_COOKIE as $key => $value) {
            setcookie($key, null, $timestamp);
        }
    } else {
        setcookie($key, null, $timestamp);
    }
}
