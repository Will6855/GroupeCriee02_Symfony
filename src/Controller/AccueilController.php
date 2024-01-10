<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Espece;

// Charts
use Symfony\UX\Chartjs\Builder\ChartBuilderInterface;
use Symfony\UX\Chartjs\Model\Chart;

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

    #[Route('/lots/graph', name: 'graph_lots')]
    public function graph_lots(ChartBuilderInterface $chartBuilder, EntityManagerInterface $entityManager): Response
    {
        $especeRepo = $entityManager->getRepository(Espece::class);
        $listEspece = $especeRepo->findAll();

        return $this->render('lots/graph.html.twig', [
            'controller_name' => 'AccueilController',
            'especes' => $listEspece,
        ]);
    }
}
