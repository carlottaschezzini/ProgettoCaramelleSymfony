<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

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
     * @var int
     *
     * @ORM\Column(name="nome", type="integer")
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="sede", type="string", length=255)
     */
    private $sede;

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
     * @var string
     *
     * @ORM\Column(name="descrizione", type="text")
     */
    private $descrizione;

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
     * Set sede
     *
     * @param string $sede
     *
     * @return Aula
     */
    public function setSede($sede)
    {
        $this->sede = $sede;

        return $this;
    }

    /**
     * Get sede
     *
     * @return string
     */
    public function getSede()
    {
        return $this->sede;
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
     * Set descrizione
     *
     * @param string $descrizione
     *
     * @return Aula
     */
    public function setDescrizione($descrizione)
    {
        $this->descrizione = $descrizione;

        return $this;
    }

    /**
     * Get descrizione
     *
     * @return string
     */
    public function getDescrizione()
    {
        return $this->descrizione;
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

