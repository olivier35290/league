<?php


require 'vendor/autoload.php';

use App\Services\Router;

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$router = new App\Services\Router();
$router->handleRequest($_GET);
