<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Yeti;
use App\Form\YetiFormType;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;




class AddController extends AbstractController
{
    #[Route('/pridat', name: 'pridat')]
    public function index(Request $request, EntityManagerInterface $entityManager): Response
    {
        $yeti = new Yeti();
        $form = $this->createForm(YetiFormType::class, $yeti);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($yeti);
            $entityManager->flush();
            return $this->redirectToRoute('pridat');
        }
        
        return $this->render('user/pridat.html.twig', [
            'yeti_form' => $form,
        ]);
            
    }
}