<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController extends AbstractController
{
    /**
     * @Route("/", name = "app_homepage")
     */
    public function homepage()
    {
        return $this->render('question/homepage.html.twig');
    }

    /**
     * @Route("/questions/{slug}", name = "app_showpage")
     */
    public function show($slug)
    {
        $answers = [
            'Im not sure dont ask me again',
            'Use more holy power or sth',
            'murururururururluulrullru',
        ];
        dump($this);
        return $this-> render('question/show.html.twig', [
            'question' => ucwords(str_replace('-', ' ',$slug)),
            'answers' => $answers,
        ]);

    }
}