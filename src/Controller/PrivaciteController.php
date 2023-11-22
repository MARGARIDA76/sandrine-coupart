<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PrivaciteController extends AbstractController
{
    #[Route('/privacite', name: 'app_privacite')]
    public function index(): Response
    {
        return $this->render('privacite/index.html.twig', [
            'controller_name' => 'PrivaciteController',
        ]);
    }
}
