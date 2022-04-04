<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Psr\Log\LoggerInterface;
use Symfony\Component\Routing\Annotation\Route;

class CommentController extends AbstractController
{
    /**
     * @Route("/comments/{id}/vote/{direction<up|down>}", methods = "POST")
     */
    public function commentVote($id, $direction, LoggerInterface $logger)
    {
        if($direction =='up')
        {
            $currentVoteCount = rand(7,100);
            $logger->info("vote up!");
        } else {
            $logger->info("Vote down!");
            $currentVoteCount = rand(0, 5);
        }

        return new JsonResponse(['votes' => $currentVoteCount]);
    }
}