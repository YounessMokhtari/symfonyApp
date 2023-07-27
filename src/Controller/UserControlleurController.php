<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\UtilisateurRepository;
use App\Entity\Utilisateur;
class UserControlleurController extends AbstractController
{
   //#[Route('/user/controlleur', name: 'app_user_controlleur')]
    #[Route('/user/controlleur', name: 'app_user_controlleur', methods: ['GET'])]
    public function index(UtilisateurRepository $userRep ): Response
    {   
        $utilisateurs=$userRep->findAll();
        dd($utilisateurs);
        return $this->render('user_controlleur/index.html.twig', [
           
        ]);
    }
}
