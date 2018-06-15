<?php

/**
 * Notes: 获取 $_POST 参数
 * @param string $key
 * @return mixed
 */
function post(string $key = '')
{
    if ($key === '') {
        return $_POST;
    }
    try {
        return $_POST[$key];
    } catch (Exception $exception) {
        return '';
    }
}

/**
 * Notes: 获取 $_GET 参数
 * @param string $key
 * @return mixed
 */
function get(string $key = '')
{
    if ($key === '') {
        return $_GET;
    }
    try {
        return $_GET[$key];
    } catch (Exception $exception) {
        return '';
    }
}

/**
 * Notes: 设置/获取 $_SESSION 全局函数
 * @param string $key
 * @param string $value
 * @return string
 */
function session(string $key = '', string $value = '')
{
    if (!isset($_SESSION)) {
        session_start();
    }

    if ($value === '') {
        try {
            return $_SESSION[$key];
        } catch (Exception $exception) {
            return '';
        }
    }
    return $_SESSION[$key] = $value;
}

/**
 * Notes: 删除 $_SESSION 全局函数
 * @param string $key
 */
function delSession(string $key = '')
{
    if (!isset($_SESSION)) {
        session_start();
    }
    if ($key === '') {
        $_SESSION = [];
        session_destroy();
    } else {
        unset($_SESSION[$key]);
    }
}

/**
 * Notes: 设置/获取 $_COOKIE 全局函数
 * @param string $key
 * @param string $value
 * @param int $expire
 * @return bool|string
 */
function cookie(string $key = '', string $value = '', int $expire)
{
    if ($value === '') {
        try {
            return $_COOKIE[$key];
        } catch (Exception $exception) {
            return '';
        }
    }
    return setcookie($key, $value, $expire);
}

/**
 * Notes: 删除 $_COOKIE 全局函数
 * @param string $key
 */
function delCookie(string $key = '')
{
    $timestamp = time() - 1;
    if ($key === '') {
        foreach ($_COOKIE as $key => $value) {
            setcookie($key, '', $timestamp);
        }
    } else {
        setcookie($key, '', $timestamp);
    }
}
