<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * Utenti
 *
 * @ORM\Table(name="utenti")
 * @ORM\Entity(repositoryClass="UserBundle\Repository\UtentiRepository")
 */
class Utenti extends BaseUser
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

   
}

