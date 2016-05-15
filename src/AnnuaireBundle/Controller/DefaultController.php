<?php

namespace AnnuaireBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/{page}", name="annuaire")
     */
    public function listAction($page, Request $request)
    {

        $listusers = $this->getDoctrine()->getRepository
        ('UserBundle:User')->findAll();

        $form = $this->createFormBuilder()
            ->add('recherche', TextType::class, array('attr' => array
            ('class' => 'form-control', 'style' => '')))
            ->add('Search', SubmitType::class, array('label' => 'Search',
                'attr' => array('class' => 'btn btn-warning', 'style' =>
                    'margin-top: 5px; width: 100%;')))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $usr = $this->getDoctrine()->getRepository
            ('UserBundle:User')->findOneByUsername($form['recherche']->getData
            ());

            if(!empty($usr)){
                var_dump($usr->getId());
                return $this->redirectToRoute('profiluser', array('id'=> $usr->getId()));
            }
            else{
                $this->addFlash('danger', 'Aucun profil trouvé, veuillez 
                reessayer.');
            }

        }



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
        ('users'=> $users, 'page' => $page, 'maxpage'=> $maxpage, 'form' =>
                $form->createView(), 'listusers'=>$listusers));
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
