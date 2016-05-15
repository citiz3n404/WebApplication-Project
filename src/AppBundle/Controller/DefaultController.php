<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        /*
        $em=$this->getDoctrine()->getManager();

        $qb = $em->createQueryBuilder();
        $qb->select('count(user.id)');
        $qb->from('UserBundle:User','user');
        $nbUser = (int) $qb->getQuery()->getSingleScalarResult();

        $qb = $em->createQueryBuilder();
        $qb->select('count(fichier.id)');
        $qb->from('FichierBundle:Fichier','fichier');
        $nbFile = (int) $qb->getQuery()->getSingleScalarResult();

        $qb = $em->createQueryBuilder();
        $qb->select('count(formation.id)');
        $qb->from('FormationBundle:Formation','formation');
        $nbFormation = (int) $qb->getQuery()->getSingleScalarResult();

        $qb = $em->createQueryBuilder();
        $qb->select('count(replies.id)');
        $qb->from('ForumBundle:Replies','replies');
        $nbReplies = (int) $qb->getQuery()->getSingleScalarResult();

        $qb = $em->createQueryBuilder();
        $qb->select('user');
        $qb->from('UserBundle:User','user');
        $qb->setMaxResults(5);
        $users = $qb->getQuery()->getResult();
        */
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
        ]);

    }
}