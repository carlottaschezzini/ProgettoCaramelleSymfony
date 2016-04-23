<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Sede
 *
 * @ORM\Table(name="sede")
 * @ORM\Entity(repositoryClass="UserBundle\Repository\SedeRepository")
 */
class Sede
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(name="nome", type="string", length=255)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="citta", type="string", length=255)
     */
    private $citta;

    /**
     * @ORM\OneToMany(targetEntity="Aula", mappedBy="sede")
     */
    private $aule;

    public function __construct()
    {
        $this->aule = new ArrayCollection();
    }

    // Add getter e setter di aula

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set aule
     *
     * @param string $aule
     *
     * @return Sede
     */
    public function setAule($aule)
    {
        $this->aule = $aule;

        return $this;
    }

    /**
     * Get aule
     *
     * @return string
     */
    public function getAule()
    {
        return $this->aule;
    }

    /**
     * Set nome
     *
     * @param string $nome
     *
     * @return Sede
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get nome
     *
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set citta
     *
     * @param string $citta
     *
     * @return Sede
     */
    public function setCitta($citta)
    {
        $this->citta = $citta;

        return $this;
    }

    /**
     * Get citta
     *
     * @return string
     */
    public function getCitta()
    {
        return $this->citta;
    }
}

