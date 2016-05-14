<?php

namespace AnnuaireBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/{page}", name="annuaire")
     */
    public function listAction($page)
    {
        /*$users = $this->getDoctrine()->getRepository
        ('UserBundle:User')->findAll();
*/
        $em=$this->getDoctrine()->getManager();
        $qb = $em->createQueryBuilder();
        $qb->select('count(user.id)');
        $qb->from('UserBundle:User','user');
        $totalUsers = (int)  $qb->getQuery()->getSingleScalarResult();
        $nbUserPerPage = 15;

        $qb = $em->createQueryBuilder();
        $qb->select('user');
        $qb->from('UserBundle:User','user');
        $qb->setMaxResults($nbUserPerPage);
        $qb->setFirstResult(($page-1)*$nbUserPerPage);
        $users = $qb->getQuery()->getResult();

        $maxpage = (int) ($totalUsers/$nbUserPerPage +1);

        return $this->render('AnnuaireBundle:Default:index.html.twig', array
        ('users'=> $users, 'page' => $page, 'maxpage'=> $maxpage));
    }


    /**
     * @Route("/", name="annuaireempty")
     */
    public function redirAction()
    {
        return $this->redirectToRoute('annuaire', array('page'=>1));
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
