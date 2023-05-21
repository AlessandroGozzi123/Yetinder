<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Yeti;
use Symfony\Component\HttpFoundation\Session\Session;

class HomeController extends AbstractController
{
    #[Route('/', name: 'homepage')]
    public function index(EntityManagerInterface $entityManager)
    {
        $session = new Session();
        $session->clear();
        
        $repository = $entityManager->getRepository(Yeti::class);
        $yetipole = $repository->findAll();

        


        return $this->render('user/index.html.twig', [
            'yetipole' => $yetipole,
        ]);
    }
}