<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccueilController extends AbstractController
{
    #[Route('/', name: 'app_accueil')]
    public function index(): Response
    {
        return $this->render('accueil/index.html.twig', [
            'controller_name' => 'AccueilController',
        ]);
    }
    #[Route('/factures', name: 'factures')]
    public function factures(): Response
    {
        return $this->render('accueil/factures.html.twig', [
            'controller_name' => 'AccueilController',
        ]);
    }
    #[Route('/lots', name: 'lots')]
    public function lots(): Response
    {
        return $this->render('accueil/lots.html.twig', [
            'controller_name' => 'AccueilController',
        ]);
    }
}
