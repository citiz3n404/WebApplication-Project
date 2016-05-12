<?php

namespace AnnuaireBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="annuaire")
     */
    public function listAction()
    {
        $users = $this->getDoctrine()->getRepository
        ('UserBundle:User')->findAll();
        return $this->render('AnnuaireBundle:Default:index.html.twig', array
        ('users'=> $users));
    }

    /**
     * @Route("/profile/{id}", name="profiluser")
     */
    public function profilAction($id)
    {
        $user = $this->getDoctrine()->getRepository
        ('UserBundle:User')->find($id);
        return $this->render('AnnuaireBundle:Default:profil.html.twig', array
        ('user'=> $user));
    }
}
