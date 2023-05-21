<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\UX\Chartjs\Builder\ChartBuilderInterface;
use Symfony\UX\Chartjs\Model\Chart;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Yeti;

class StatisticsController extends AbstractController
{
    #[Route('/statistika', name: 'statistika')]
    public function index(ChartBuilderInterface $chartBuilder, EntityManagerInterface $entityManager)
    {
        $repository = $entityManager->getRepository(Yeti::class);
        $yeti_pole = $repository->findAll();

        $chart = $chartBuilder->createChart(Chart::TYPE_BAR);

        $pole_labels[] = null;
        $pole_data[] = null;
        foreach ($yeti_pole as $yeti)
        {
            $pole_labels[] = $yeti->getName();
            $pole_data[] = $yeti->getHodnoceni();
        }

        $chart->setData([
            'labels' => $pole_labels,
            'datasets' => [
                [
                    'label' => 'Yeti',
                    'backgroundColor' => 'rgb(255, 99, 132)',
                    'borderColor' => 'rgb(255, 99, 132)',
                    'data' => $pole_data,
                ],
            ],
        ]);

        $chart->setOptions([
            'scales' => [
                'y' => [
                    'suggestedMin' => 0,
                    'suggestedMax' => 20,
                ],
            ],
        ]);


        return $this->render('user/statistika.html.twig', [
            'chart' => $chart,
        ]);
    }
}