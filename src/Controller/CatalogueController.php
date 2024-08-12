<?php

namespace App\Controller;

use App\Repository\CategorieRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CatalogueController extends AbstractController
{
    #[Route('/catalogue', name: 'app_catalogue')]
    public function index(Request $request, CategorieRepository $categorie): Response
    {
       $lang = $request->getLocale();
       $article = $categorie->findOneBy(['slug' => '/catalogue', 'langue' => $lang]);
        return $this->render('main/index.html.twig', [
            'article' => $article,
        ]);
        
    }

    #[Route('/catalogue/homme', name: 'app_homme')]
    public function homme(Request $request, CategorieRepository $categorie): Response
    {
        $lang = $request->getLocale();
       $article = $categorie->findOneBy(['slug' => '/catalogue/homme', 'langue' => $lang]);
        return $this->render('main/index.html.twig', [
            'article' => $article,
        ]);
    }

    #[Route('/catalogue/femme', name: 'app_femme')]
    public function femme(Request $request, CategorieRepository $categorie): Response
    {
        $lang = $request->getLocale();
       $article = $categorie->findOneBy(['slug' => '/catalogue/femme', 'langue' => $lang]);
        return $this->render('main/index.html.twig', [
            'article' => $article,
        ]);
    }

    #[Route('/catalogue/enfant', name: 'app_enfant')]
    public function enfant(Request $request, CategorieRepository $categorie): Response
    {
        $lang = $request->getLocale();
       $article = $categorie->findOneBy(['slug' => '/catalogue/enfant', 'langue' => $lang]);
        return $this->render('main/index.html.twig', [
            'article' => $article,
        ]);
    }

    #[Route('/catalogue/grandeTaille', name: 'app_grandeTaille')]
    public function grandeTaille(Request $request, CategorieRepository $categorie): Response
    {
        $lang = $request->getLocale();
       $article = $categorie->findOneBy(['slug' => '/catalogue/grandeTaille', 'langue' => $lang]);
        return $this->render('main/index.html.twig', [
            'article' => $article,
        ]);
    }

    #[Route('/catalogue/bijoux', name: 'app_bijoux')]
    public function bijoux(Request $request, CategorieRepository $categorie): Response
    {
        $lang = $request->getLocale();
       $article = $categorie->findOneBy(['slug' => '/catalogue/bijoux', 'langue' => $lang]);
        return $this->render('main/index.html.twig', [
            'article' => $article,
        ]);
    }

    #[Route('/catalogue/accessoires', name: 'app_accessoires')]
    public function accessoires(Request $request, CategorieRepository $categorie): Response
    {
        $lang = $request->getLocale();
       $article = $categorie->findOneBy(['slug' => '/catalogue/accessoires', 'langue' => $lang]);
        return $this->render('main/index.html.twig', [
            'article' => $article,
        ]);
    }
}
