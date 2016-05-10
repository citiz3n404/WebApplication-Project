<?php

namespace ForumBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="forum")
     */
    public function indexAction()
    {
        $categories = $this->getDoctrine()->getRepository('ForumBundle:Categories')
            ->findAll();
        //affiche le forum (categories)
        return $this->render('ForumBundle:Forum:forum.html.twig', array
        ('categories' => $categories));
    }
}
