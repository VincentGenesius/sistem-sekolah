<?php
require_once './app/core/Router.php'; //memanggil file Router.php

use App\Core\Router; //artinya menggunakan class "Router" yang telah dibuat

$router = new Router(); //memanggil class Router

$router->run();

?>