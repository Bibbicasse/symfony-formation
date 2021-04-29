<?php

namespace App\Controller;

use App\Repository\ArticlesRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class ArticlesController extends AbstractController
{
 /**
 *  @Route("/articles/", name="articles_index")
 */
    public function index(ArticlesRepository $articlesRepository, Request $truc)
    { 
        $articles = $articlesRepository->findAll();
        // $articles = $articlesRepository->findby(array(), array('id => 'DESC'), 2);
        dump($truc);
        // dump($articles);
        return $this->render('articles/index.html.twig', [
            "posts" => $articles
        ]);
    }
}/* fin de la classe ArrticlesController */