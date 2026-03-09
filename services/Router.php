<?php

namespace App\Services;

class Router
{
    public function handleRequest(array $get) : void
    {
        $bc = new \App\Controllers\BlogController();

        if(!isset($get["route"]))
        {
            $bc->home();
        }
    }
}
