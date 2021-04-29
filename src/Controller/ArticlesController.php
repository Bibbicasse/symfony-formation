<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class ArticlesController extends AbstractController
{
 /**
 *  @Route("/articles/", name="articles_index")
 */
    public function index()
    { 
        $articles = []; //je déclare un tableau
        
        $articles [] = [ //remplir le tableau d'un premier élément
            "id" => 1,
            "auteur" => "Salvatore",
            "titre" => "Un titre",
            "description" => "Lorem",
            "date_de_publication" => "2021-05-01",
        ];

        $articles [] = [
            "id" => 2,
            "auteur" => "Regis",
            "titre" => "Un autre titre",
            "description" => "Lorem",
            "date_de_publication" => "2020-05-01",
        ];

        $articles [] = [
            "id" => 3,
            "auteur" => "Patrick",
            "titre" => "Un titre 3",
            "description" => "Lorem",
            "date_de_publication" => "2021-04-01",
        ];

        // dump($articles);
        return $this->render('articles/index.html.twig', [
            "posts" => $articles
        ]);
        
    }
}