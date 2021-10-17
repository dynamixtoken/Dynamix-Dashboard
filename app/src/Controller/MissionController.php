<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MissionController extends AbstractController{
    #[Route('/mission/accepte', name: 'mission_accepte')]
    public function accpete(): Response{
        return $this->render('mission/accepte.html.twig', [
            'email' => $this->getUser()->getUsername(),
            'pseudo' => $this->getUser()->getPseudo(),
            'telegram' => $this->getUser()->getTelegram(),
            'nom' => $this->getUser()->getNom(),
            'prenom' => $this->getUser()->getPrenom()
        ]);
    }

    #[Route('/mission/finance', name: 'mission_finance')]
    public function finance(): Response{
        return $this->render('mission/finance.html.twig', [
            'email' => $this->getUser()->getUsername(),
            'pseudo' => $this->getUser()->getPseudo(),
            'telegram' => $this->getUser()->getTelegram(),
            'nom' => $this->getUser()->getNom(),
            'prenom' => $this->getUser()->getPrenom()
        ]);
    }

    #[Route('/mission/create', name: 'mission_create')]
    public function create(): Response{
        return $this->render('mission/create.html.twig', [
            'email' => $this->getUser()->getUsername(),
            'pseudo' => $this->getUser()->getPseudo(),
            'telegram' => $this->getUser()->getTelegram(),
            'nom' => $this->getUser()->getNom(),
            'prenom' => $this->getUser()->getPrenom()
        ]);
    }
}
