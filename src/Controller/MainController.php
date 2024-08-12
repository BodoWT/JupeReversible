<?php

namespace App\Controller;

use App\Repository\CategorieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{
    #[Route([
        'fr' => '/',
        'en' => '/en',
        'es' => '/es',
    ], name: 'app_main')]
    public function index(Request $request, CategorieRepository $categorie): Response
    {
       $lang = $request->getLocale();
       $article = $categorie->findOneBy(['slug' => '/', 'langue' => $lang]);
        return $this->render('main/index.html.twig', [
            'article' => $article,
        ]);
        
    }
}
