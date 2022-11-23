<?php

namespace App\Controller;

use App\Entity\Recette;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ConsulterRecetteController extends AbstractController
{
    #[Route('/consulter/recette/{id}', name: 'consulter_recette')]
    public function index(ManagerRegistry $managerRegistry, $id): Response
    {
        $user = $this->getUser();
        $recette= $managerRegistry->getRepository(Recette::class)->findOneBy(array('id' => $id));

        return $this->render('consulter_recette/index.html.twig',[
            'recette'=>$recette,
            'user'=>$user
        ]);
    }
}
