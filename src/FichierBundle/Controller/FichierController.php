<?php

namespace FichierBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Finder\SplFileInfo;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use FichierBundle\Entity\Fichier;
use FichierBundle\Entity\Dossier;
use Symfony\Component\HttpFoundation\Request;

class FichierController extends Controller
{
    /**
     * @Route("/{id}", name="fichiers")
     */
    public function listAction($id)
    {
        $fichiers = $this->getDoctrine()->getRepository
        ('FichierBundle:Fichier')->findByDossier($id);
        $dossier = $this->getDoctrine()->getRepository
        ('FichierBundle:Dossier')->find($id);
        return $this->render('FichierBundle:Fichiers:listFichiers.html.twig',
            array
        ('fichiers'=> $fichiers, 'dossier'=>$dossier));
    }


    /**
     * @Route("/{id}/upload", name="fichierupload")
     */
    public function uploadAction($id, Request $request)
    {
        $dossier = $this->getDoctrine()->getRepository
        ('FichierBundle:Dossier')->find($id);

        if( empty($dossier)){
            return $this->redirectToRoute('dossiers');
        }

        $fichier = new Fichier;
        $form = $this->createFormBuilder($fichier)
            ->add('name', TextType::class, array('attr' => array
            ('class' => 'form-control', 'style' => '')))
            ->add('fichier', FileType::class, array('attr' => array
            ('class' => 'form-control', 'style' => '')))
            ->add('Save', SubmitType::class, array('label' => 'Upload',
                'attr' => array('class' => 'btn btn-warning', 'style' => '')))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $fichier->setName      ($form['name']       ->getData());
            $fichier->setDossier($dossier);
            $fichier->setSize(filesize($form['fichier']->getData()));
            $fichier->setType($form['fichier']->getData()->guessExtension());

            $file = $fichier->getFichier();
            $fileName =  md5(uniqid()).'.'.$file->guessExtension();
            $fileDir = $this->container->getParameter('kernel.root_dir').'/../web/uploads/';
            $file->move($fileDir, $fileName);
            $fichier->setFichier($fileName);

            $em = $this->getDoctrine()->getManager();
            $em->persist($fichier);
            $em->flush();

            $this->addFlash('success', 'Fichier ajouté');

            return $this->redirectToRoute('fichiers', array('id'=> $id));
        }

        return $this->render('FichierBundle:Fichiers:upload.html.twig', array
        ('form' => $form->createView()));
    }

}
