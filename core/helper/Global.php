<?php

/**
 * Notes: 设置获取配置参数
 * @param null $key
 * @param null $value
 * @return mixed|null
 */
function config($key = null, $value = null)
{
    if (is_null($value)) {
        return $GLOBALS['config'][$key];
    }

    if (is_null($key)) {
        return $GLOBALS['config'];
    }

    return $GLOBALS['config'][$key] = $value;
}
