<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class CatalogueController extends AbstractController
{
    #[Route('/catalogue', name: 'app_catalogue')]
    public function index(): Response
    {
        return $this->render('catalogue/index.html.twig');
    }

    #[Route('/catalogue/homme', name: 'app_homme')]
    public function homme(): Response
    {
        return $this->render('homme/index.html.twig');
    }

    #[Route('/catalogue/femme', name: 'app_femme')]
    public function femme(): Response
    {
        return $this->render('femme/index.html.twig');
    }

    #[Route('/catalogue/enfant', name: 'app_enfant')]
    public function enfant(): Response
    {
        return $this->render('enfant/index.html.twig');
    }

    #[Route('/catalogue/grandeTaille', name: 'app_grandeTaille')]
    public function grandeTaille(): Response
    {
        return $this->render('grande_taille/index.html.twig');
    }

    #[Route('/catalogue/bijoux', name: 'app_bijoux')]
    public function bijoux(): Response
    {
        return $this->render('bijoux/index.html.twig');
    }

    #[Route('/catalogue/accessoires', name: 'app_accessoires')]
    public function accessoires(): Response
    {
        return $this->render('accessoires/index.html.twig');
    }
}
