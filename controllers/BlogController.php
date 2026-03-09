<?php
/**
 * @author : Gaellan
 * @link : https://github.com/Gaellan
 */


class BlogController extends AbstractController
{
    public function home() : void
    {
        $pm = new PostManager();
        $cm = new CategoryManager();

        $posts = $pm->findAll();
        $categories = $cm->findAll();

        $this->render("home.html.twig", [
            "posts" => $posts,
            "categories" => $categories
        ]);
    }
}