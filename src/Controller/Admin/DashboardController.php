<?php

namespace App\Controller\Admin;

use App\Entity\Nous;
use App\Entity\Tissus;
use App\Entity\Contact;
use App\Entity\Catalogue;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;

class DashboardController extends AbstractDashboardController
{
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        return $this->render('admin/dashboard.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Project');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Catalogue', 'fas fa-list', Catalogue::class);
        yield MenuItem::linkToCrud('Contact', 'fas fa-list', Contact::class);
        yield MenuItem::linkToCrud('Nous', 'fas fa-list', Nous::class);
        yield MenuItem::linkToCrud('Tissus', 'fas fa-list', Tissus::class);
    }
}
