<?php

namespace StatsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="stats")
     */
    public function indexAction()
    {
        return $this->render('StatsBundle:Default:index.html.twig');
    }
}
