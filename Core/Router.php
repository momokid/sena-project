<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

if ($uri == "/") {

    require "controllers/index.php";

} else if ($uri == '/config') {

    require "controllers/config.php";

} else if ($uri == "/student-registration") {

    require "controllers/student/new-registration.php";

} else if($uri == "/signin"){

    require "controllers/signin.php";

}else {

    require "controllers/error/404.php";

}
