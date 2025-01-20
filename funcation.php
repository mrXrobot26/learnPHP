<?php

function dumpAndDie($value) {
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

function urlIs($value)
{
    $currentPath = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
    return $currentPath === $value;
}
