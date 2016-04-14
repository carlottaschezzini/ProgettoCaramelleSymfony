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

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=255)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="cognome", type="string", length=255)
     */
    private $cognome;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="string", length=20)
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="social", type="string", length=255)
     */
    private $social;

        /**
     * @ORM\OneToMany(targetEntity="Eventi", mappedBy="user")
     */
    private $eventoUser;


    /**
     * Set nome
     *
     * @param string $nome
     *
     * @return Utenti
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
     * Set cognome
     *
     * @param string $cognome
     *
     * @return Utenti
     */
    public function setCognome($cognome)
    {
        $this->cognome = $cognome;

        return $this;
    }

    /**
     * Get cognome
     *
     * @return string
     */
    public function getCognome()
    {
        return $this->cognome;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     *
     * @return Utenti
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set social
     *
     * @param string $social
     *
     * @return Utenti
     */
    public function setSocial($social)
    {
        $this->social = $social;

        return $this;
    }

    /**
     * Get social
     *
     * @return string
     */
    public function getSocial()
    {
        return $this->social;
    }

    public function setEventoUser($eventoUser)
    {
        $this->eventoUser = $eventoUser;

        return $this;
    }

    public function getEventoUser()
    {
        return $this->eventoUser;
    }
}

