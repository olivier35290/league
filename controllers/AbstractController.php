<?php

namespace App\Controllers;

use Twig\Environment;
use Twig\Extension\DebugExtension;
use Twig\Loader\FilesystemLoader;

abstract class AbstractController
{
    private Environment $twig;

    public function __construct()
    {
        $loader = new FilesystemLoader('templates');
        $twig = new Environment($loader, [
            'debug' => true,
        ]);

        $twig->addExtension(new DebugExtension());

        $this->twig = $twig;
    }

    protected function render(string $template, array $data): void
    {
        echo $this->twig->render($template, $data);
    }
}
