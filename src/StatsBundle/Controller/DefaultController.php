<?php

namespace StatsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="stats")
     */
    public function indexAction()
    {
        $em=$this->getDoctrine()->getManager();

        $qb = $em->createQueryBuilder();
        $qb->select('count(salarie.id)');
        $qb->from('UserBundle:Salarie','salarie');
        $qb->where('salarie.sexe = \'F\'');
        $nbFemmes = (int) $qb->getQuery()->getSingleScalarResult();

        $qb = $em->createQueryBuilder();
        $qb->select('count(salarie.id)');
        $qb->from('UserBundle:Salarie','salarie');
        $qb->where('salarie.sexe = \'M\'');
        $nbH = (int)  $qb->getQuery()->getSingleScalarResult();

        $qb = $em->createQueryBuilder();
        $qb->select('count(salarie.id)');
        $qb->from('UserBundle:Salarie','salarie');
        $qb->where('salarie.sexe = \'M\'');
        $qb->andWhere('salarie.typeContrat = \'CDI\'');
        $CDIHommes = (int)  $qb->getQuery()->getSingleScalarResult();

        $qb = $em->createQueryBuilder();
        $qb->select('count(salarie.id)');
        $qb->from('UserBundle:Salarie','salarie');
        $qb->where('salarie.sexe = \'M\'');
        $qb->andWhere('salarie.typeContrat = \'sta\'');
        $STAHommes = (int)  $qb->getQuery()->getSingleScalarResult();

        $qb = $em->createQueryBuilder();
        $qb->select('count(salarie.id)');
        $qb->from('UserBundle:Salarie','salarie');
        $qb->where('salarie.sexe = \'M\'');
        $qb->andWhere('salarie.typeContrat = \'CDD\'');
        $CDDHommes = (int)  $qb->getQuery()->getSingleScalarResult();

        $qb = $em->createQueryBuilder();
        $qb->select('count(salarie.id)');
        $qb->from('UserBundle:Salarie','salarie');
        $qb->where('salarie.sexe = \'M\'');
        $qb->andWhere('salarie.typeContrat = \'vol\'');
        $VOLHommes = (int)  $qb->getQuery()->getSingleScalarResult();

        $qb = $em->createQueryBuilder();
        $qb->select('count(salarie.id)');
        $qb->from('UserBundle:Salarie','salarie');
        $qb->where('salarie.sexe = \'F\'');
        $qb->andWhere('salarie.typeContrat = \'CDI\'');
        $CDIFemmes = (int)  $qb->getQuery()->getSingleScalarResult();

        $qb = $em->createQueryBuilder();
        $qb->select('count(salarie.id)');
        $qb->from('UserBundle:Salarie','salarie');
        $qb->where('salarie.sexe = \'F\'');
        $qb->andWhere('salarie.typeContrat = \'sta\'');
        $STAFemmes = (int)  $qb->getQuery()->getSingleScalarResult();

        $qb = $em->createQueryBuilder();
        $qb->select('count(salarie.id)');
        $qb->from('UserBundle:Salarie','salarie');
        $qb->where('salarie.sexe = \'F\'');
        $qb->andWhere('salarie.typeContrat = \'vol\'');
        $VOLFemmes = (int)  $qb->getQuery()->getSingleScalarResult();

        $qb = $em->createQueryBuilder();
        $qb->select('count(salarie.id)');
        $qb->from('UserBundle:Salarie','salarie');
        $qb->where('salarie.sexe = \'F\'');
        $qb->andWhere('salarie.typeContrat = \'CDD\'');
        $CDDFemmes = (int)  $qb->getQuery()->getSingleScalarResult();

        $qb = $em->createQueryBuilder();
        $qb->select('avg(salarie.salaire)');
        $qb->from('UserBundle:Salarie','salarie');
        $qb->where('salarie.sexe = \'F\'');
        $salaireAvgFemmes = (float) $qb->getQuery()->getSingleScalarResult();

        $qb = $em->createQueryBuilder();
        $qb->select('avg(salarie.salaire)');
        $qb->from('UserBundle:Salarie','salarie');
        $qb->where('salarie.sexe = \'M\'');
        $salaireAvgHommes = (float) $qb->getQuery()->getSingleScalarResult();

        $qb = $em->createQueryBuilder();
        $qb->select('avg(formation.cost)');
        $qb->from('FormationBundle:Formation','formation');
        $coutMoyenFormation = (float) $qb->getQuery()->getSingleScalarResult();

        $qb = $em->createQueryBuilder();
        $qb->select('count(formation.id)');
        $qb->from('FormationBundle:Formation','formation');
        $nbFormation = (int) $qb->getQuery()->getSingleScalarResult();

        $qb = $em->createQueryBuilder();
        $qb->select('count(categories.id)');
        $qb->from('ForumBundle:Categories','categories');
        $nbCategories = (int) $qb->getQuery()->getSingleScalarResult();

        $qb = $em->createQueryBuilder();
        $qb->select('count(topics.id)');
        $qb->from('ForumBundle:Topics','topics');
        $nbTopics = (int) $qb->getQuery()->getSingleScalarResult();

        $qb = $em->createQueryBuilder();
        $qb->select('count(replies.id)');
        $qb->from('ForumBundle:Replies','replies');
        $nbReplies = (int) $qb->getQuery()->getSingleScalarResult();

        $qb = $em->createQueryBuilder();
        $qb->select('avg(formation.duration)');
        $qb->from('FormationBundle:Formation','formation');
        $dureeMoyenneFormation = (float) $qb->getQuery()
            ->getSingleScalarResult();

        $stats = array(
            'Users' => array(
                'NBHommes' => $nbH,
                'NBFemmes'=> $nbFemmes,
                'TotalUsers' =>  $nbFemmes+$nbH,
                'SalaireAVGF' => $salaireAvgFemmes,
                'SalaireAVGH' => $salaireAvgHommes,
                'SalaireAVG'  => (($salaireAvgFemmes+$salaireAvgHommes)/2)
            ),
            'Formations' => array(
                'Total' => $nbFormation,
                'CoutMoyen' => $coutMoyenFormation,
                'Duree' => $dureeMoyenneFormation,
            ),
            'Forum' => array(
                'NBCategories' => $nbCategories,
                'NBTopics'     => $nbTopics,
                'NBReplies'    => $nbReplies,
            ),
            'Contrats' => array(
                'CDIHommes' => $CDIHommes,
                'CDIFemmes' => $CDIFemmes,
                'CDDHommes' => $CDDHommes,
                'CDDFemmes' => $CDDFemmes,
                'STAHommes' => $STAHommes,
                'STAFemmes' => $STAFemmes,
                'VOLHommes' => $VOLHommes,
                'VOLFemmes' => $VOLFemmes,
                'TotalCDI'  => $CDIFemmes + $CDIHommes,
                'TotalCDD'  => $CDDFemmes + $CDDHommes,
                'TotalSTA'  => $STAFemmes + $STAHommes,
                'TotalVOL'  => $VOLFemmes + $VOLHommes,
            ),
        );
        return $this->render('StatsBundle:Default:index.html.twig', array
        ('stats' => $stats));
    }
}
