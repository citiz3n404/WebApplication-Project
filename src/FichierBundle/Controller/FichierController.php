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

        if (false === $this->get('security.authorization_checker')->isGranted
            ('ROLE_GESTIONNAIRE')) {

            $bool = false;
            foreach( $this->getUser()->getRoles() as $roluser){
                foreach ($dossier->getRoles() as $roledir){
                    if($roledir == $roluser){
                        $bool = true;
                    }
                }
            }
            if(!$bool){
                $this->addFlash('danger', 'Vous n\'avez pas les permissions 
                d\'accès au dossier.');
                return $this->redirectToRoute('dossiers');
            }
        }
        
        return $this->render('FichierBundle:Fichiers:listFichiers.html.twig',
            array
        ('fichiers'=> $fichiers, 'dossier'=>$dossier));
    }

    /**
     * @Route("/remove/{id}", name="fichierremove")
     */
    public function removeAction($id)
    {
        $fichier = $this->getDoctrine()->getRepository('FichierBundle:Fichier')
            ->find($id);

        if (false === $this->get('security.authorization_checker')->isGranted
            ('ROLE_GESTIONNAIRE')) {

                $this->addFlash('danger', 'Vous n\'êtes pas Gestionnaire, 
                vous ne pouvez pas supprimer de fichier');
                return $this->redirectToRoute('fichiers', array
                ('id'=>$fichier->getDossier()->getId()));

        }
        $em=$this->getDoctrine()->getManager();
        $em->remove($fichier);
        $em->flush();
        $this->addFlash('danger', 'Fichier supprimé');
        //nom de la route!
        return $this->redirectToRoute('fichiers', array
        ('id'=>$fichier->getDossier()->getId()));
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
