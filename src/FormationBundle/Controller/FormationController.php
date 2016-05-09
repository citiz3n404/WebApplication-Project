<?php

namespace FormationBundle\Controller;

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

class FormationController extends Controller
{

    /**
     * @Route("/", name="formation")
     */
    public function listAction()
    {
        $formations = $this->getDoctrine()->getRepository
        ('FormationBundle:Formation')
            ->findAll();
        return $this->render('FormationBundle:Default:list.html.twig', array
            ('formations' => $formations)
        );
    }

    /**
     * @Route("/create", name="formationcreate")
     */
    public function createAction(Request $request)
    {
        $formation = new Formation;
        $form = $this->createFormBuilder($formation)
            ->add('title', TextType::class, array('attr' => array
            ('class' => 'form-control', 'style' => '')))
            ->add('teacher', TextType::class, array('attr' => array
            ('class' => 'form-control', 'style' => '')))
            ->add('description', TextareaType::class, array('attr' => array
            ('class' => 'form-control', 'style' => '')))
            ->add('begin', DateTimeType::class, array('attr' => array
            ('class' => 'form-control', 'style' => '')))
            ->add('cost', NumberType::class, array('attr' => array
            ('class' => 'form-control', 'style' => '')))
            ->add('img', TextType::class, array('attr' => array
            ('class' => 'form-control', 'style' => '')))
            ->add('duration', IntegerType::class, array('attr' => array
            ('class' => 'form-control', 'style' => '')))
            ->add('Save', SubmitType::class, array('label' => 'Create formation',
                'attr' => array('class' => 'btn btn-primary', 'style' => '')))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $formation->setTeacher      ($form['teacher']       ->getData());
            $formation->setTitle        ($form['title']         ->getData());
            $formation->setBegin        ($form['begin']         ->getData());
            $formation->setCost         ($form['cost']          ->getData());
            $formation->setImg          ($form['img']           ->getData());
            $formation->setDescription  ($form['description']   ->getData());
            $formation->setDuration     ($form['duration']      ->getData());

            $em = $this->getDoctrine()->getManager();
            $em->persist($formation);
            $em->flush();

            $this->addFlash('success', 'Nouvelle formation ajoutée');

            return $this->redirectToRoute('formationlist');
        }

        return $this->render('FormationBundle:Default:create.html.twig', array
        ('form' => $form->createView()));
    }


    /**
     * @Route("/details/{id}", name="formationdetails")
     */
    public function detailsAction($id)
    {
        $formation = $this->getDoctrine()->getRepository
        ('FormationBundle:Formation')->find($id);
        return $this->render('FormationBundle:Default:details.html.twig', array
            ('formation' => $formation)
        );
    }


    /**
     * @Route("/remove/{id}", name="formationremove")
     */
    public function removeAction($id)
    {
        $em=$this->getDoctrine()->getManager();
        $formation = $em->getRepository('FormationBundle:Formation')->find($id);
        $em->remove($formation);
        $em->flush();
        $this->addFlash('success', 'Formation removed');
        //nom de la route!
        return $this->redirectToRoute('formation');
    }

    /**
     * @Route("/edit/{id}", name="formationedit")
     */
    public function editAction($id, Request $request)
    {
        $formation = $this->getDoctrine()->getRepository
        ('FormationBundle:Formation')->find($id);

        $form = $this->createFormBuilder($formation)
            ->add('title', TextType::class, array('attr' => array
            ('class' => 'form-control', 'style' => '')))
            ->add('teacher', TextType::class, array('attr' => array
            ('class' => 'form-control', 'style' => '')))
            ->add('description', TextareaType::class, array('attr' => array
            ('class' => 'form-control', 'style' => '')))
            ->add('begin', DateTimeType::class, array('attr' => array
            ('class' => 'form-control', 'style' => '')))
            ->add('cost', NumberType::class, array('attr' => array
            ('class' => 'form-control', 'style' => '')))
            ->add('img', TextType::class, array('attr' => array
            ('class' => 'form-control', 'style' => '')))
            ->add('duration', IntegerType::class, array('attr' => array
            ('class' => 'form-control', 'style' => '')))
            ->add('Save', SubmitType::class, array('label' => 'Edit formation',
                'attr' => array('class' => 'btn btn-primary', 'style' => '')))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $formation->setTeacher      ($form['teacher']       ->getData());
            $formation->setTitle        ($form['title']         ->getData());
            $formation->setBegin        ($form['begin']         ->getData());
            $formation->setCost         ($form['cost']          ->getData());
            $formation->setImg          ($form['img']           ->getData());
            $formation->setDescription  ($form['description']   ->getData());
            $formation->setDuration     ($form['duration']      ->getData());

            $em = $this->getDoctrine()->getManager();
            $em->persist($formation);
            $em->flush();

            $this->addFlash('success', 'Formation correctement éditée.');

            return $this->redirectToRoute('formation');
        }

        return $this->render('FormationBundle:Default:edit.html.twig', array
        ('form' => $form->createView()));
    }
}