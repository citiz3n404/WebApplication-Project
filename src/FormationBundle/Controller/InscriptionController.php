<?php

namespace FormationBundle\Controller;

use FormationBundle\Entity\Inscription;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use FormationBundle\Entity\Formation;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;

class InscriptionController extends Controller
{

    /**
     * @Route("/inscription/{id}", name="formationinscription")
     */
    public function inscriptionAction($id)
    {
        $inscription = new Inscription();
        $formation = $this->getDoctrine()->getRepository
        ('FormationBundle:Formation')->find($id);
        $user = $this->getUser();
        if(is_null($user)){
            $this->addFlash('danger', 'Vous devez vous logger pour vous 
            inscrire à une formation');
            return $this->redirectToRoute('formationdetails', array('id'=>
                $id));
        }

        if($formation->isLocked()){
            $this->addFlash('danger', 'Nous sommes désolés la formation est 
            vérouillée, vous ne pouvez plus vous y inscrire.');
            return $this->redirectToRoute('formationdetails', array('id'=>
                $id));
        }
        
        $inscr = $this->getDoctrine()->getRepository('FormationBundle:Inscription')
            ->findBy(array('user'=>$user->getId(),'formation'=>
                $formation->getId()));

        // ICI vérifier que dans la formation choisi l'utilisateur n'est pas
        // inscrit

        if( !empty($inscr) ){
            $this->addFlash('danger', 'Vous êtes déjà inscrit dans la 
            formation');
            return $this->redirectToRoute('formationdetails', array('id'=>
                $id));
        }
        else{
            $inscription->setUser($user);
            $inscription->setFormation($formation);
            $inscription->setValidated(false);

            $em = $this->getDoctrine()->getManager();
            $em->persist($inscription);
            $em->flush();

            $this->addFlash('success', 'Vous êtes bien inscrit dans la formation 
        : vous serez prochainement validé par un supérieur ou un 
        administrateur');
        }


        $inscriptions = $this->getDoctrine()->getRepository
        ('FormationBundle:Inscription')->findByFormation($formation);

        return $this->render('FormationBundle:Default:details.html.twig', array
            ('formation' => $formation, 'inscriptions'=> $inscriptions)
        );
    }

    /**
     * @Route("/inscription/validate/{id}", name="formationvalidateinscription")
     */
    public function validateAction($id)
    {
        if (false === $this->get('security.authorization_checker')->isGranted
            ('ROLE_FORMATEUR')) {
            $this->addFlash('danger', 'Vous n\'êtes pas formateur.');
            return $this->redirectToRoute('formation');
        }
        $inscription = $this->getDoctrine()->getRepository
        ('FormationBundle:Inscription')->find($id);
        $inscription->setValidated(True);

        $em = $this->getDoctrine()->getManager();
        $em->persist($inscription);
        $em->flush();

        $this->addFlash('success', 'Utilisateur validé');

        $inscriptions = $this->getDoctrine()->getRepository
        ('FormationBundle:Inscription')->findByFormation($inscription->getFormation());

        return $this->render('FormationBundle:Default:details.html.twig', array
            ('formation' => $inscription->getFormation(),
                'inscriptions'=> $inscriptions)
        );
    }

    /**
     * @Route("/inscription/remove/{id}", name="formationremoveinscription")
     */
    public function removeAction($id)
    {
        if (false === $this->get('security.authorization_checker')->isGranted
            ('ROLE_FORMATEUR')) {
            $this->addFlash('danger', 'Vous n\'êtes pas formateur.');
            return $this->redirectToRoute('formation');
        }
        $em=$this->getDoctrine()->getManager();
        $inscription = $em->getRepository('FormationBundle:Inscription')->find($id);

        $formation = $inscription->getFormation();
        $inscriptions = $this->getDoctrine()->getRepository
        ('FormationBundle:Inscription')->findByFormation($formation);

        $em->remove($inscription);
        $em->flush();
        $this->addFlash('danger', 'Inscription supprimmée');

        return $this->redirectToRoute('formationdetails', array('id'=>
            $formation->getId()));
    }

}