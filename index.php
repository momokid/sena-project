<?php
require "Core/functions.php";
require "Core/utils.php";

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

if ($uri == "/") {

    require "controllers/index.php";

} else if ($uri == '/config') {

    require "controllers/config.php";

} else {
    echo "404";
}


// require "views/index.view.php";
