<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Service\nactiUzivatele;
use App\Entity\Yeti;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;

class YetinderController extends AbstractController
{
    #[Route('/yetinder', name: 'yetinder')]
    public function index(nactiUzivatele $nactiUzivatele, EntityManagerInterface $entityManager, Request $request): Response
    {
        $repository = $entityManager->getRepository(Yeti::class);
        $yeti = $repository->findAll();
        $session = $request->getSession();
        if ( $session->has('pole')){
            $yeti = $session->get('pole');
        }
        if (empty($yeti)) {
            return $this->redirectToRoute('konecyetinder');
        }
        $nahodnyCislo = array_rand($yeti);
        $nahodnyYeti = $yeti[$nahodnyCislo];
        
        unset($yeti[$nahodnyCislo]);
        $session->set('pole', $yeti);

        return $this->render('user/yetinder.html.twig', [
            'nahodnyYeti' => $nahodnyYeti,
            
        ]);
    }

    #[Route('/yetinder/hodnoceni', name: 'hodnoceni')]
    public function hodnoceni(Request $request, EntityManagerInterface $entityManager): Response
    {
        $akce = $request->request->get('akce');
        $id = $request->request->get('id');
        if ($akce == 1) {
            $Hodnoceni = $entityManager->getRepository(Yeti::class)->find($id);
            $Hodnoceni->setHodnoceni($Hodnoceni->getHodnoceni() + 1);
            $entityManager->flush();
        } elseif ($akce == 0) {
            $Hodnoceni = $entityManager->getRepository(Yeti::class)->find($id);
            $Hodnoceni->setHodnoceni($Hodnoceni->getHodnoceni() - 1);
            $entityManager->flush();   
        }

        return $this->redirectToRoute('yetinder');
    }
}