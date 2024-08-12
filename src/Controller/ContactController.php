<?php

namespace App\Controller;

use App\Repository\CategorieRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ContactController extends AbstractController
{
    #[Route('/contact', name: 'app_contact')]
    public function index(Request $request, CategorieRepository $categorie): Response
    {
       $lang = $request->getLocale();
       $article = $categorie->findOneBy(['slug' => '/contact', 'langue' => $lang]);
        return $this->render('main/index.html.twig', [
            'article' => $article,
        ]);
        
    }
}
