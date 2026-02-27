<?php
require_once '../app/core/Router.php'; //memanggil file Router.php

use App\Core\Router; //artinya menggunakan class "Router" yang telah dibuat

$router = new Router(); //memanggil class Router

// Register Routes
$router->add('GET', '/students', 'StudentController', 'index');
$router->add('GET', '/students/create', 'StudentController', 'create');
$router->add('GET', '/students/{id}', 'StudentController', 'show');

$router->run();

?>