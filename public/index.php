<?php

require '../vendor/autoload.php';

use Core\Router;
use App\Controllers\HomeController;

$router = new Router(); 
$router->get('/', [HomeController::class, 'index']); 
$router->dispatch();
