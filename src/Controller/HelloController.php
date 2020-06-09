<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HelloController extends AbstractController
{
    /**
     * @Route("/hello/{slug}", name="hello")
     */
    public function index($slug)
    {
        return $this->render('hello/index.html.twig', [
            'name' => $slug,
        ]);
    }
}
