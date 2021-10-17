<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccueilController extends AbstractController{
    #[Route('/dashboard', name: 'dashboard')]
    public function index(): Response{

        return $this->render('accueil/index.html.twig', [
            'email' => $this->getUser()->getUsername(),
            'pseudo' => $this->getUser()->getPseudo(),
            'telegram' => $this->getUser()->getTelegram(),
            'nom' => $this->getUser()->getNom(),
            'prenom' => $this->getUser()->getPrenom()
        ]);
    }
}
