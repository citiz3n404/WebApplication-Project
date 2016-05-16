<?php

namespace AnnuaireBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;

class ProfilController extends Controller
{
    /**
     * @Route("/profile/edit/{id}", name="editprofil")
     */
    public function editAction($id, Request $request)
    {
        $user = $this->getDoctrine()->getRepository
        ('UserBundle:User')->find($id);

        if (false === $this->get('security.authorization_checker')->isGranted('ROLE_RH')) {
            if($user->getUsername()!=$this->getUser()
                    ->getUsername()) {
                $this->addFlash('danger', 'Vous n\'êtes pas RH. Vous ne 
                pouvez pas modifier le profil d\'une personne tiers.');
                return $this->redirectToRoute('profiluser', array('id' => $id));
            }
        }


        $salarie = $user->getSalarie();

        $form = $this->createFormBuilder($salarie)
            ->add('nom', TextType::class, array('attr' => array
            ('class' => 'form-control', 'style' => '')))
            ->add('prenom', TextType::class, array('attr' => array
            ('class' => 'form-control', 'style' => '')))
            ->add('sexe', TextType::class, array('attr' => array
            ('class' => 'form-control', 'style' => '')))
            ->add('dateNaissance', DateTimeType::class, array('attr' => array
            ('class' => 'form-control', 'style' => '')))
            ->add('img', FileType::class, array('attr' => array
            ('class' => 'form-control', 'style' => ''), 'data_class'=> null))

            ->add('Save', SubmitType::class, array('label' => 'Sauvegarder 
            les changements',
                'attr' => array('class' => 'btn btn-primary', 'style' => '')))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $salarie->setNom      ($form['nom']       ->getData());
            $salarie->setPrenom        ($form['prenom']         ->getData());
            $salarie->setSexe        ($form['sexe']         ->getData());
            $salarie->setDateNaissance  ($form['dateNaissance']   ->getData());

            $file = $salarie->getImg();
            $fileName =  md5(uniqid()).'.'.$file->guessExtension();
            $fileDir = $this->container->getParameter('kernel.root_dir').'/../web/img/users/';
            $file->move($fileDir, $fileName);
            $salarie->setImg($fileName);

            $em = $this->getDoctrine()->getManager();
            $em->persist($salarie);
            $em->flush();

            $this->addFlash('success', 'Profil mis à jour');

            return $this->redirectToRoute('profiluser', array('id'=>
                $user->getId()));
        }

        return $this->render('FormationBundle:Default:edit.html.twig', array
        ('form' => $form->createView(), 'user'=>$user));

    }


}
