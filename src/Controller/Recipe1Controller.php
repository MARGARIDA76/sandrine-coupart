<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Recipe1Controller extends AbstractController
{
    #[Route('/recipe1', name: 'app_recipe1')]
    public function index(): Response
    {
        return $this->render('recipe1/index.html.twig', [
            'controller_name' => 'Recipe1Controller',
        ]);
    }
}
