<?php



function dd($value)
{
    echo '<pre>';
    var_dump($value);
    echo '</pre>';

    die();
}

function urlIs($value)
{
    $url = parse_url($_SERVER['REQUEST_URI'])['path'];
    return $url === $value;
}
