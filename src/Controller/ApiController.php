<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ApiController extends AbstractController
{
    /**
     * @Route("/listeregions", name="listeregions")
     */
    public function index(): Response
    {
       $regions = file_get_contents('https://geo.api.gouv.fr/regions');
       dump($regions).die();
        return $this->render('api/index.html.twig');
    }
}
