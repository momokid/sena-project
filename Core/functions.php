<?php
//start the session
session_start();

require('Database.php');

$_SESSION['username'] = "sena";

const BASE_PATH = __DIR__ . '/../';

// function string($value, $min=1, $max=INF){
//     return strlen(trim($value)) >=$min && strlen($value) < $max;
// }

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

function base_path($path)
{
    return BASE_PATH . $path;
}

function view($path, $attributes = [])
{
    extract($attributes);
    require base_path('views/' . $path);
}

function filterInput($input)
{
    global $dbc;
    return mysqli_real_escape_string($dbc, trim(htmlspecialchars($input)));
}

function formatDateYMD($data, $format){
    return strftime($format,strtotime($data));
}