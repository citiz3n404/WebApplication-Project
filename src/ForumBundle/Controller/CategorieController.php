<?php

namespace ForumBundle\Controller;

use ForumBundle\Entity\Categories;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;

class CategorieController extends Controller
{
    /**
     * @Route("/categorie/create", name="createcategorie")
     */
    public function createAction(Request $request)
    {
        $categorie = new Categories();
        $form = $this->createFormBuilder($categorie)->add('name',
            TextType::class, array('attr' => array('class' => 'form-control')))
            ->add('description', TextareaType::class, array('attr' => array
            ('class' => 'form-control')))
            ->add('Save', SubmitType::class, array('label' => 'Add categorie',
                'attr' => array('class' => 'btn btn-primary', 'style' =>
                    'margin-top: 10px;')))
            ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $categorie->setName($form['name']->getData());
            $categorie->setDescription(($form['description']->getData()));

            $em = $this->getDoctrine()->getManager();
            $em->persist($categorie);
            $em->flush();

            $this->addFlash('success', 'La catégorie à été ajoutée avec succes');
            return $this->redirectToRoute('forum');
        }

        return $this->render('ForumBundle:Categorie:create.html.twig', array
        ('form' => $form->createView()));
    }

    /**
     * @Route("/categorie/edit/{id}", name="editcategorie")
     */
    public function editAction($id, Request $request)
    {
        $categorie = $this->getDoctrine()->getRepository
        ('ForumBundle:Categories')->find($id);

        $form = $this->createFormBuilder($categorie)->add('name',
            TextType::class, array('attr' => array('class' => 'form-control')))
            ->add('description', TextareaType::class, array('attr' => array
            ('class' => 'form-control')))
            ->add('Save', SubmitType::class, array('label' => 'Edit categorie',
                'attr' => array('class' => 'btn btn-primary', 'style' =>
                    'margin-top: 10px;')))
            ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $categorie->setName($form['name']->getData());
            $categorie->setDescription(($form['description']->getData()));

            $em = $this->getDoctrine()->getManager();
            $em->persist($categorie);
            $em->flush();

            $this->addFlash('success', 'La catégorie à été mise à jour avec 
            succes');
            return $this->redirectToRoute('forum');
        }

        return $this->render('ForumBundle:Categorie:edit.html.twig', array
        ('form' => $form->createView()));
    }

    /**
     * @Route("/categorie/remove/{id}", name="removecategorie")
     */
    public function removeAction($id)
    {
        $em=$this->getDoctrine()->getManager();
        $categorie = $em->getRepository('ForumBundle:Categories')->find($id);
        $em->remove($categorie);
        $em->flush();
        $this->addFlash('danger', 'Categorie removed');
        //nom de la route!
        return $this->redirectToRoute('forum');
    }

    /**
     * @Route("/categorie/detail/{id}", name="detailcategorie")
     */
    public function detailAction($id)
    {
        $categorie = $this->getDoctrine()->getRepository('ForumBundle:Categories')
            ->find($id);
        return $this->render('ForumBundle:Categorie:detail.html.twig', array
        ('categorie'=> $categorie));
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
}
