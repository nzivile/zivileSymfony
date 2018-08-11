<?php

namespace App\Controller;

use App\Entity\Article;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class ArticleController extends Controller
{
    /**
     * @Route("/")
     * @Method({"GET"})
     */
    public function index()
    {
        // return new Response
        // ('<html><body>testing</body></html>');

        $articles = ['Articles 1', 'Article2'];

        return $this->render('articles/index.html.twig', array('articles' => $articles));
    }

//    /**
//     * @Route("/article/save")
//     */
//    public function save(){
//        $entityManager = $this->getDoctrine()->getManager();
//
//        $article = new Article();
//        $article->setTitle('Article Two');
//        $article->setBody('This is the body for article Two');
//
//        $entityManager->persist($article);
//
//        $entityManager->flush();
//
//        return new Response('Saved an article with the id of'.$article->getId());
//    }
}

