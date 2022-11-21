<?php

namespace App\Controller;

use App\Entity\Recette;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RecetteController extends AbstractController
{
    #[Route('/recette', name: 'recette')]
    public function index(ManagerRegistry $doctrine, Request $request): Response
    {
        $user = $this->getUser();
        $recettes = $doctrine->getRepository(Recette::class)->findAll();
        dump($recettes);



        return $this->render('recette/index.html.twig',[
            'recettes'=>$recettes,
                'user'=>$user
            ]

        );
    }





}



