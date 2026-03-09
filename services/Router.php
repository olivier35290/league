<?php


namespace App\Services;

use App\Controllers\BlogController;

class Router
{
    public function handleRequest(array $get): void
    {
        $bc = new BlogController();

        if (!isset($get["route"])) {
            $bc->home();
        }
    }
}
