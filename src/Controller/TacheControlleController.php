<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TacheControlleController extends AbstractController
{
    /**
     * @Route("/tache/controlle", name="app_tache_controlle")
     */
    public function index(): Response
    {
        return $this->render('tache_controlle/index.html.twig', [
            'controller_name' => 'TacheControlleController',
        ]);
    }
}
