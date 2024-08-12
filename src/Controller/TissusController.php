<?php

namespace App\Controller;

use App\Repository\CategorieRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class TissusController extends AbstractController
{
    #[Route('/tissus', name: 'app_tissus')]
    public function index(Request $request, CategorieRepository $categorie): Response
    {
       $lang = $request->getLocale();
       $article = $categorie->findOneBy(['slug' => '/tissus', 'langue' => $lang]);
        return $this->render('main/index.html.twig', [
            'article' => $article,
        ]);
        
    }
}
