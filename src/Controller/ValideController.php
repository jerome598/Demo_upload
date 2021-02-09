<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ValideController extends AbstractController
{
    /**
     * @Route("/valide", name="valide")
     */
    public function index(): Response
    {
        return $this->render('valide/index.html.twig', [
            'controller_name' => 'ValideController',
        ]);
    }
}
