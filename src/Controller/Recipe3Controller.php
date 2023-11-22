<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Recipe3Controller extends AbstractController
{
    #[Route('/recipe3', name: 'app_recipe3')]
    public function index(): Response
    {
        return $this->render('recipe3/index.html.twig', [
            'controller_name' => 'Recipe3Controller',
        ]);
    }
}
