<?php
namespace ForumBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class RepliesController extends Controller
{
    /**
     * @Route("/topic/{id}/reply", name="topicreply")
     */
    public function replyAction($id)
    {
        return $this->render('ForumBundle:Default:index.html.twig');
    }
}
