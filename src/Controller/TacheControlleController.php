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
     /**
     * @Route("/ListeTache", name="liste")
     */
    public function ListeTaches(): Response
    {
        return $this->render('tache_controlle/index.html.twig', [
            'controller_name' => 'TacheControlleController',
        ]);
    }
    /**
     * @Route("/add_tache", name="add_tache")
     */
    public function taches(): Response
    {
        return $this->render('tache_controlle/index.html.twig', [
            'controller_name' => 'TacheControlleController',
        ]);
    }
    /**
     * @Route("/tache/controlle", name="suprimer")
     */
    public function suprTaches(): Response
    {
        return $this->render('tache_controlle/index.html.twig', [
            'controller_name' => 'TacheControlleController',
        ]);
    }
    /**
     * @Route("/creer", name="creer")
     */
    public function creerTaches(): Response
    {
        return $this->render('tache_controlle/index.html.twig', [
            'controller_name' => 'TacheControlleController',
        ]);
    }
    /**
     * @Route("/insert", name="insert")
     */
    public function inserTaches(): Response
    {
        return $this->render('tache_controlle/index.html.twig', [
            'controller_name' => 'TacheControlleController',
        ]);
    }
}
