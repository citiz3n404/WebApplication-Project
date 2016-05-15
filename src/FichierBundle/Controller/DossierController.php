<?php

namespace FichierBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use FichierBundle\Entity\Dossier;
use Symfony\Component\HttpFoundation\Request;

class DossierController extends Controller
{
    /**
     * @Route("/", name="dossiers")
     */
    public function dossierAction()
    {
        $dossiers = $this->getDoctrine()->getRepository
        ('FichierBundle:Dossier')->findAll();
        return $this->render('FichierBundle:Default:index.html.twig', array
        ('dossiers'=> $dossiers));
    }

    /**
     * @Route("/create", name="createdir")
     */
    public function createAction(Request $request)
    {
        $dossier = new Dossier;
        $form = $this->createFormBuilder($dossier)
            ->add('name', TextType::class, array('attr' => array
            ('class' => 'form-control', 'style' => '')))
            ->add('Save', SubmitType::class, array('label' => 'Create formation',
                'attr' => array('class' => 'btn btn-primary', 'style' => '')))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $dossier->setName      ($form['name']       ->getData());
            $dossier->setRoles(array('ROLE_USER'));
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($dossier);
            $em->flush();

            $this->addFlash('success', 'Nouveau dossier ajouté');

            return $this->redirectToRoute('dossiers');
        }

        return $this->render('FichierBundle:Dossier:create.html.twig', array
        ('form' => $form->createView()));
    }
}
