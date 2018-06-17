<?php

/**
 * Notes: 获取 $_POST 参数
 * @param null $key
 * @return string
 */
function post($key = null)
{
    if (is_null($key)) {
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
 * @param null $key
 * @return string
 */
function get($key = null)
{
    if (is_null($key)) {
        return $_GET;
    }
    try {
        return $_GET[$key];
    } catch (Exception $exception) {
        return '';
    }
}
