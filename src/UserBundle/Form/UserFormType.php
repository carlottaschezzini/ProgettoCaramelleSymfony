<?php

namespace UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class Nome extends BaseUser
{
    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=255)
     */
    protected $nome;

     /**
     * @var string
     *
     * @ORM\Column(name="cognome", type="string", length=255)
     */
    protected $cognome;
    
     /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="string", length=20)
     */
    private $telefono;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }
}