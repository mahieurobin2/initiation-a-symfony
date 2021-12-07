<?php

namespace App\Controller;

use App\Entity\Article;
use App\Form\ArticleType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ArticleController extends AbstractController
{
    #[Route('/article/new', name: 'article_new')]
    public function new(Request $request): Response
    {   
        $article = new Article();
        $form = $this->createForm(ArticleType::class, $article); 
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) { 
            $article->setCreatedArt(new \DateTime());
        $entityManager = $this->getDoctrine()->getManager(); 
        $entityManager->persist($article); 
        $entityManager->flush(); 
        return $this->redirectToRoute( 'homepage'); 
        }
        return $this->render( 'article/add.html.twig', [ 
         'form' => $form->createView(),
        ]);
    }

    #[Route('/article', name: 'article')]
    public function index(): Response
    {
        return $this->render('article/index.html.twig', [
            'controller_name' => 'ArticleController',
        ]);
    }

   /*  public function add()
    {
        $article = new Article();
        $article -> setTitle('Mon titre')
         -> setContext('le contenu')
         -> setCreateArt(new DateTime());
         dd($article);
    }

    public function delete()
    {
        $Repository = new  ArticleRepository;
        $article = $articleRepository -> find($id);
        $em = $this -> getDoctrine -> getManager();
        $em -> remove($article);
        $em -> flash();
    } */

}
