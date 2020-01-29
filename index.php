<?php

require_once 'app/core/Route.php';

$router=new Route;

require_once 'routes.php';

// $path=trim($_SERVER['REQUEST_URI'],'/');
$path=trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

require_once $router->direct($path);

?>
