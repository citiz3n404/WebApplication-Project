<?php

namespace Acme\GlobalBundle\DBinfo;

class DBinfos
{

    protected $em;

    public function __construct(\Doctrine\ORM\EntityManager $em)
    {
        $this->em = $em;
    }

    public function getNbUsers(){
        $qb = $this->em->createQueryBuilder();
        $qb->select('count(user.id)');
        $qb->from('UserBundle:User','user');
        return (int) $qb->getQuery()->getSingleScalarResult();
    }
    public function getNbFiles(){
        $qb = $this->em->createQueryBuilder();
        $qb->select('count(fichier.id)');
        $qb->from('FichierBundle:Fichier','fichier');
        return (int) $qb->getQuery()->getSingleScalarResult();
    }

    public function getNbFormations(){
        $qb = $this->em->createQueryBuilder();
        $qb->select('count(formation.id)');
        $qb->from('FormationBundle:Formation','formation');
        return (int) $qb->getQuery()->getSingleScalarResult();
    }

    public function getNbReplies(){
        $qb = $this->em->createQueryBuilder();
        $qb->select('count(replies.id)');
        $qb->from('ForumBundle:Replies','replies');
        return (int) $qb->getQuery()->getSingleScalarResult();
    }

    public function getTop5(){
        $qb = $this->em->createQueryBuilder();
        $qb->select('user');
        $qb->from('UserBundle:User','user');
        $qb->setMaxResults(5);
        return $qb->getQuery()->getResult();
    }
}