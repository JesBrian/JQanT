<?php

/**
 * Notes: 获取 post 参数
 * @param string $name
 * @return mixed
 */
function post(string $name = '')
{
    if ($name === '') {
        return $_POST;
    }
    return $_POST[$name];
}

/**
 * Notes: 获取 get 参数
 * @param string $name
 * @return mixed
 */
function get(string $name = '')
{
    if ($name === '') {
        return $_GET;
    }
    return $_GET[$name];
}
