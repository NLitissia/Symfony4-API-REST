<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

class ApiController extends AbstractController
{
    /**
     * @Route("/listeregions", name="listeregions")
     */
    public function index(SerializerInterface $serializer)
    {
       $regions = file_get_contents('https://geo.api.gouv.fr/regions');
       //dump($regions).die();
       $regionTab = $serializer->decode($regions,'json');
       //dump($regionTab).die();
       return $this->render('api/index.html.twig',[
          'regions' => $regionTab
       ]);
    }
}
