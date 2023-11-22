<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Recipe4Controller extends AbstractController
{
    #[Route('/recipe4', name: 'app_recipe4')]
    public function index(): Response
    {
        return $this->render('recipe4/index.html.twig', [
            'controller_name' => 'Recipe4Controller',
        ]);
    }
}
