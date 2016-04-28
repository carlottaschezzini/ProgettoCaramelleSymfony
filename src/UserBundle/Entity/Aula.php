<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Aula
 *
 * @ORM\Table(name="aula")
 * @ORM\Entity(repositoryClass="UserBundle\Repository\AulaRepository")
 */
class Aula
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
     * @var string
     */
    private $nome;

    /**
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="Sede", inversedBy="aule")
     */
    private $sede;
    // Add getter e setter di sede

    /**
     * @var string
     *
     * @ORM\Column(name="citta", type="string", length=255)
     */
    private $citta;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_creazione", type="datetime")
     */
    private $dataCreazione;

    /**
     * @var int
     *
     * @ORM\Column(name="posti", type="integer")
     */
    private $posti;

    /**
     * @ORM\OneToMany(targetEntity="Eventi", mappedBy="sala")
     */
    private $eventi;
    // ...

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
     * Set sede
     *
     * @param integer $sede
     *
     * @return Sede
     */
    public function setSede($sede)
    {
        $this->sede = $sede;

        return $this;
    }

    /**
     * Get sede
     *
     * @return int
     */
    public function getSede()
    {
        return $this->sede;
    }

    /**
     * Set nome
     *
     * @param integer $nome
     *
     * @return Aula
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get nome
     *
     * @return int
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
     * @return Aula
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

    /**
     * Set dataCreazione
     *
     * @param \DateTime $dataCreazione
     *
     * @return Aula
     */
    public function setDataCreazione($dataCreazione)
    {
        $this->dataCreazione = $dataCreazione;

        return $this;
    }

    /**
     * Get dataCreazione
     *
     * @return \DateTime
     */
    public function getDataCreazione()
    {
        return $this->dataCreazione;
    }

    /**
     * Set posti
     *
     * @param integer $posti
     *
     * @return Aula
     */
    public function setPosti($posti)
    {
        $this->posti = $posti;

        return $this;
    }

    /**
     * Get posti
     *
     * @return int
     */
    public function getPosti()
    {
        return $this->posti;
    }

    
        /**
     * Set eventiadd
     *
     * @param string $eventi
     *
     * @return Aula
     */
    public function setEventi($eventi)
    {
        $this->eventi = $eventi;

        return $this;
    }

    /**
     * Get eventi
     *
     * @return string
     */
    public function getEventi()
    {
        return $this->eventi;
    }
}

