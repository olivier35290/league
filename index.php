<?php


require "vendor/autoload.php";

use App\Services\Router;
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

$router = new Router();
$router->handleRequest($_GET);
