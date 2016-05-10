<?php

namespace ForumBundle\Controller;

use ForumBundle\Entity\Topics;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;

class TopicController extends Controller
{

    /**
     * @Route("/topic/{id}", name="topicdisplay")
     */
    public function displayAction($id)
    {
        $topic = $this->getDoctrine()->getRepository('ForumBundle:Topics')->find($id);

        return $this->render('ForumBundle:Topic:topic.html.twig', array
        ("topic" => $topic));
    }

    /**
     * @Route("/categorie/{id}", name="listTopics")
     */
    public function listAction($id)
    {
        $topics = $this->getDoctrine()->getRepository('ForumBundle:Topics')
            ->findByCategorie($id);

        $categorie = $this->getDoctrine()->getRepository
        ('ForumBundle:Categories')->find($id);

        return $this->render('ForumBundle:Topic:listTopics.html.twig', array
        ("topics" => $topics, "categorie" => $categorie));
    }

    /**
     * @Route("/topic/create/{id}", name="createtopic")
     */
    public function createAction($id, Request $request)
    {
        $topic = new Topics();
        $form = $this->createFormBuilder($topic)->add('subject',
            TextType::class, array('attr' => array('class' => 'form-control')))
            ->add('Save', SubmitType::class, array('label' => 'Add topic',
                'attr' => array('class' => 'btn btn-primary', 'style' =>
                    'margin-top: 10px;')))
            ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $topic->setSubject($form['subject']->getData());
            $topic->setDate(new \DateTime('now'));
            $categorie = $this->getDoctrine()->getRepository
            ('ForumBundle:Categories')->find($id);
            $topic->setCategorie($categorie);

            $em = $this->getDoctrine()->getManager();
            $em->persist($topic);
            $em->flush();

            $this->addFlash('success', 'Le topic est à présent disponible');
            return $this->redirectToRoute('listTopics', array('id'=>$id));
        }

        return $this->render('ForumBundle:Topic:create.html.twig', array
        ('form' => $form->createView()));
    }

    /**
     * @Route("/topic/edit/{id}", name="edittopic")
     */
    public function editAction($id, Request $request)
    {
        $topic = $this->getDoctrine()->getRepository('ForumBundle:Topics')->find($id);
        $form = $this->createFormBuilder($topic)->add('subject',
            TextType::class, array('attr' => array('class' => 'form-control')))
            ->add('Save', SubmitType::class, array('label' => 'Edit topic',
                'attr' => array('class' => 'btn btn-primary', 'style' =>
                    'margin-top: 10px;')))
            ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $topic->setSubject($form['subject']->getData());
            $topic->setDate(new \DateTime('now'));

            $em = $this->getDoctrine()->getManager();
            $em->persist($topic);
            $em->flush();

            $this->addFlash('success', 'Le topic est à été mis à jour');
            return $this->redirectToRoute('listTopics', array
            ('id'=>$topic->getCategorie()->getId()));
        }

        return $this->render('ForumBundle:Topic:create.html.twig', array
        ('form' => $form->createView()));
    }

    /**
     * @Route("/topic/remove/{id}", name="removetopic")
     */
    public function removeAction($id)
    {
        $em=$this->getDoctrine()->getManager();
        $topic = $em->getRepository('ForumBundle:Topics')->find($id);
        $categorie = $topic->getCategorie();
        $em->remove($topic);
        $em->flush();
        $this->addFlash('danger', 'Topic has been removed');
        //nom de la route!
        return $this->redirectToRoute('listTopics', array
        ('id'=>$categorie->getId()));
    }
}
