<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MonEspaceController extends AbstractController
{
    #[Route('/mon-espace', name: 'mon_espace')]
    public function index(): Response
    {
        $user = $this->getUser();
        if (!$this->getUser()) {
            return $this->redirectToRoute('home');
        }
        return $this->render('mon_espace/index.html.twig', [
           // 'name' => $this->getUser()->getName(),
            'user'=>$user
        ]);
    }
}
