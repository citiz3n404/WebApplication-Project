<?php
// src/AppBundle/Entity/User.php

namespace UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="users")
 */
class User extends BaseUser
{

    /**
     * @ORM\OneToMany(targetEntity="ForumBundle\Entity\Replies",
     *     mappedBy="user")
     */
    private $replies;

    /**
     * @ORM\OneToMany(targetEntity="ForumBundle\Entity\Topics", mappedBy="user")
     */
    private $topics;

    public function __construct() {
        parent::__construct();
        $this->replies  = new ArrayCollection();
        $this->topics   = new ArrayCollection();
    }

    /**
     * @ORM\OneToOne(targetEntity="Salarie", inversedBy="user")
     * @ORM\JoinColumn(name="salarie_id", referencedColumnName="id",
     *     nullable=false)
     */
    private $salarie;

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getSalarie()
    {
        return $this->salarie;
    }

    /**
     * @param mixed $salarie
     */
    public function setSalarie($salarie)
    {
        $this->salarie = $salarie;
    }
}