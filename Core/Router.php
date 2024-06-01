<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$request_method = $_SERVER["REQUEST_METHOD"];

if ($uri == "/") {

    require "controllers/index.php";
} else if ($uri == '/config') {

    require "controllers/config.php";
} else if ($uri == "/student-registration") {

    require "controllers/student/new-registration.php";
} else if ($uri == "/signin") {

    require "controllers/signin.php";
} else if ($uri == '/new-institution') {

    require("controllers/institution/create.php");

} else if ($uri === '/map_admission_fee' && $request_method == 'POST') {

    require('controllers/config/map_school_fee/store.php');

} else if ($uri === '/map_aschool_fee' && $request_method == 'POST') {

    require('controllers/config/map_admission_fee/store.php');

} else {

    require "controllers/error/404.php";
}
