<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class GrandeTailleController extends AbstractController
{
    #[Route('/grandeTaille', name: 'app_grandeTaille')]
    public function index(): Response
    {
        return $this->render('grande_taille/index.html.twig', [
            'controller_name' => 'GrandeTailleController',
        ]);
    }
}
