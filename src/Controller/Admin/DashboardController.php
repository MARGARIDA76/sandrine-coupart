<?php

namespace App\Controller\Admin;

use App\Entity\Recipe;
use App\Entity\Admin;
use App\Entity\Patient;
use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {

        $adminUrlGenerator = $this->container->get(AdminUrlGenerator::class);
        return $this->redirect($adminUrlGenerator->setController(RecipeCrudController::class)->generateUrl());
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle(' CMS - Sandrine Coupart');
    }

    public function configureMenuItems(): iterable
    {

        yield MenuItem::linkToCrud('Recipes', 'fas fa-pepper-hot', Recipe::class);
        yield MenuItem::linkToCrud('Admin', 'fas fa-user-pen', Admin::class);
        yield MenuItem::linkToCrud('Patients', 'fa-solid fa-hospital-user', Patient::class);
        yield MenuItem::linkToCrud('Users', 'fas fa-user', User::class);
    }
}
