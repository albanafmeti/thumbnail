<?php

if (!function_exists("thumbnail")) {
    function thumbnail()
    {

    }
}

function nth_format($msg, $vars)
{
    $vars = (array)$vars;
    return str_replace(
        array_map(function ($k) {
            return '{' . $k . '}';
        }, array_keys($vars)),

        array_values($vars),

        $msg
    );
}