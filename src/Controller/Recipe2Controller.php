<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Recipe2Controller extends AbstractController
{
    #[Route('/recipe2', name: 'app_recipe2')]
    public function index(): Response
    {
        return $this->render('recipe2/index.html.twig', [
            'controller_name' => 'Recipe2Controller',
        ]);
    }
}
