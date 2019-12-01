<?php

namespace App\Controller;

use App\Repository\PersonneRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PersonneController extends AbstractController
{
    /**
     * @Route("/personnes", name="personnes")
     */
    public function index(PersonneRepository $repository)
    {
        $personnes = $repository->findAll();
        
        return $this->render('personne/personnes.html.twig', [
            'personnes' => $personnes,
        ]);
    }
}
