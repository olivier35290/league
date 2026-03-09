<?php


namespace App\Controllers;

use App\Managers\CategoryManager;
use App\Managers\PostManager;

class BlogController extends AbstractController
{
    public function home(): void
    {
        $pm = new PostManager();
        $cm = new CategoryManager();

        $posts = $pm->findAll();
        $categories = $cm->findAll();

        $this->render('home.html.twig', [
            'posts' => $posts,
            'categories' => $categories,
        ]);
    }
}
