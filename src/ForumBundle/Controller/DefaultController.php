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
        return $this->render('ForumBundle:Default:index.html.twig');
    }
}
