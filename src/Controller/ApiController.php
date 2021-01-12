<?php

namespace App\Controller;

use App\Entity\Region;
use Doctrine\ORM\Mapping\Entity;
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
       //$regionTab = $serializer->decode($regions,'json');
       //dump($regionTab).die();
       //$regionObj = $serializer->denormalize($regionTab,'App\Entity\Region[]');
       //dump($regionObj).die();
       $regionObj = $serializer->deserialize($regions,'App\Entity\Region[]','json');
       return $this->render('api/index.html.twig',[
          'regions' => $regionObj
       ]);
    }
}
