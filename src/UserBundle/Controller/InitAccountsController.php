<?php

namespace UserBundle\Controller;

use Doctrine\DBAL\Driver\PDOException;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use UserBundle\Entity\User;

class InitAccountsController extends Controller
{

    public function rm_specials($chaine){
        //  les accents
        $chaine=trim($chaine);
        $chaine= strtr($chaine,
            "ÀÁÂÃÄÅàáâãäåÒÓÔÕÖØòóôõöøÈÉÊËèéêëÇçÌÍÎÏìíîïÙÚÛÜùúûüÿÑñ",
            "aaaaaaaaaaaaooooooooooooeeeeeeeecciiiiiiiiuuuuuuuuynn");
        $chaine = preg_replace('/([^.a-z0-9]+)/i', '-', $chaine);
        $chaine = strtolower($chaine);
        return $chaine;
    }

    /**
     * @Route("/initAccounts")
     */
    public function indexAction()
    {
        set_time_limit(1200);
        $salaries = $this->getDoctrine()->getRepository('UserBundle:Salarie')
            ->findAll();
        foreach ($salaries as $salarie){
            $user = new User();
            $nom = $this->rm_specials($salarie->getNom());
            $prenom = $this->rm_specials($salarie->getPrenom());
            $username = strtolower($prenom[0].$nom);

            $user->setUsername($username);
            $user->setUsernameCanonical($username);
            $user->setEmailCanonical($prenom.".".$nom."@nsz.com");
            $user->setEmail($prenom.".".$nom."@nsz.com");
            $user->setEnabled(true);
            $user->setPlainPassword(strtolower($nom));
            $user->setRoles(array('ROLE_USER'));
            $user->setSalarie($salarie);

            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
        }

        return $this->render('UserBundle:Default:index.html.twig');
    }
}