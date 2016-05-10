<?php

namespace ForumBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class TopicController extends Controller
{
    /**
     * @Route("/topic/{id}", name="topicdisplay")
     */
    public function displayAction($id)
    {
        $topic = $this->getDoctrine()->getRepository('ForumBundle:Topics')->find($id);
        
        return $this->render('ForumBundle:Topic:topic.html.twig', array
        ("topic" => $topic));
    }
}
