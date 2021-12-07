<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController extends AbstractController
{
    #[Route('/hello', name: 'hello')]
    public function index(): Response
    {
        return $this->render('hello/index.html.twig', [
            'controller_name' => 'HelloController',
        ]);
    }

    #[Route('/hello/{prenom}/{age}', name: 'hello')]
    public function hello($prenom="Robin",$age=19){
        return $this->render('hello/index.html.twig', [
            'age' => $age,
            'prenom' => $prenom,
            'week' => ['lundi','mardi','mercredi','jeudi','vendredi','samedi','dimanche'],
            'time' => time()
        ]);
    }
}
