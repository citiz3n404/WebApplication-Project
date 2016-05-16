<?php
namespace ForumBundle\Controller;

use DateTime;
use ForumBundle\Entity\Replies;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;

class RepliesController extends Controller
{
    /**
     * @Route("/topic/{id}/reply", name="topicreply")
     */
    public function replyAction($id, Request $request)
    {
        $reply = new Replies();
        $form = $this->createFormBuilder($reply)
            ->add('content', TextareaType::class, array('attr' => array
            ('class' => 'form-control')))
            ->add('Save', SubmitType::class, array('label' => 'Reply',
                'attr' => array('class' => 'btn btn-primary', 'style' =>
                    'margin-top: 10px;')))
            ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $topic = $this->getDoctrine()->getRepository
            ('ForumBundle:Topics')->find($id);

            $reply->setContent($form['content']->getData());
            $reply->setDate(new DateTime('now'));
            $reply->setTopic($topic);
            $reply->setUser($this->getUser());

            $em = $this->getDoctrine()->getManager();
            $em->persist($reply);
            $em->flush();
            $this->addFlash('success', 'Votre réponse est en ligne !');
            return $this->redirectToRoute('topicdisplay', array('id'=>
                $reply->getTopic()->getId()));
        }

        return $this->render('ForumBundle:Reply:reply.html.twig', array
        ('form' => $form->createView()));
    }

    /**
     * @Route("/topic/reply/edit/{id}", name="replyedit")
     */
    public function editAction($id, Request $request)
    {
        $reply = $this->getDoctrine()->getRepository
        ('ForumBundle:Replies')->find($id);

        $topic = $reply->getTopic();

        if (false === $this->get('security.authorization_checker')->isGranted
            ('ROLE_MODERATEUR')) {

            if($reply->getUser()->getUsername()!=$this->getUser()
                    ->getUsername()){
                $this->addFlash('danger', 'Vous n\'êtes pas modérateur du 
                forum. Vous ne pouvez pas editer les messages des autres 
                membres.');
                return $this->redirectToRoute('topicdisplay', array('id'=>$topic->getId()));
            }

        }


        $form = $this->createFormBuilder($reply)
            ->add('content', TextareaType::class, array('attr' => array
            ('class' => 'form-control')))
            ->add('Save', SubmitType::class, array('label' => 'Reply',
                'attr' => array('class' => 'btn btn-primary', 'style' =>
                    'margin-top: 10px;')))
            ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $reply->setContent($form['content']->getData());
            $reply->setDate(new DateTime('now'));

            $em = $this->getDoctrine()->getManager();
            $em->persist($reply);
            $em->flush();
            $this->addFlash('success', 'Votre réponse à bien été éditée');

            return $this->redirectToRoute('topicdisplay', array('id'=>
                $reply->getTopic()->getId()));
        }

        return $this->render('ForumBundle:Reply:edit.html.twig', array
        ('form' => $form->createView()));
    }

    /**
     * @Route("/topic/remove/{id}", name="replyremove")
     */
    public function removeAction($id)
    {
        $reply = $this->getDoctrine()->getRepository('ForumBundle:Replies')->find($id);

        $topic = $reply->getTopic();
        if (false === $this->get('security.authorization_checker')->isGranted
            ('ROLE_MODERATEUR')) {

            if($reply->getUser()->getUsername()!=$this->getUser()
                    ->getUsername()){
                $this->addFlash('danger', 'Vous n\'êtes pas modérateur du 
                forum. Vous ne pouvez pas supprimer les messages des autres 
                membres.');
                return $this->redirectToRoute('topicdisplay', array('id'=>$topic->getId()));
            }

        }
        $em=$this->getDoctrine()->getManager();
        $reply = $em->getRepository('ForumBundle:Replies')->find($id);
        $em->remove($reply);
        $em->flush();
        $this->addFlash('danger', 'Reply removed');
        //nom de la route!
        return $this->redirectToRoute('topicdisplay', array('id'=>
            $reply->getTopic()->getId()));
    }

}
