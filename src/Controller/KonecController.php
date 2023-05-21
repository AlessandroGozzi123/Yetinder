<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Yeti;

class KonecController extends AbstractController
{
    #[Route('/konecyetinder', name: 'konecyetinder')]
    public function index(Request $request, EntityManagerInterface $entityManager)
    {
        
        

        return $this->render('user/konec.html.twig', [

        ]);
    }
}