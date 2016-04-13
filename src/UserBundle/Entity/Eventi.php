<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Eventi
 *
 * @ORM\Table(name="eventi")
 * @ORM\Entity(repositoryClass="UserBundle\Repository\EventiRepository")
 */
class Eventi
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
     * @var \DateTime
     *
     * @ORM\Column(name="data_creazione", type="datetime")
     */
    private $dataCreazione;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_evento", type="datetime")
     */
    private $dataEvento;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_evento_fine", type="datetime")
     */
    private $dataEventoFine;

    /**
     * @var string
     *
     * @ORM\Column(name="descrizione", type="text")
     */
    private $descrizione;


        /**
     * @var Utenti
     *
     * @ORM\OneToOne(targetEntity="Utenti")
     */
    private $Utenti;


    /**
     * @var Aula
     *
     * @ORM\OneToOne(targetEntity="Aula")
     */
    private $AulaNew;



    /**
     * @ORM\ManyToMany(targetEntity="Invitati")
     * @ORM\JoinTable(name="eventi_invitati",
     *      joinColumns={@ORM\JoinColumn(name="evento_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="invitato_id", referencedColumnName="id", unique=true)}
     *      )
     */
    private $listaInvitati;


    public function __construct()
    {
        $this->listaInvitati = new ArrayCollection();

    }
    
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
     * Set dataCreazione
     *
     * @param \DateTime $dataCreazione
     *
     * @return Eventi
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
     * Set dataEventi
     *
     * @param \DateTime $dataEvento
     *
     * @return Eventi
     */
    public function setDataEvento($dataEvento)
    {
        $this->dataEvento = $dataEvento;

        return $this;
    }

    /**
     * Get dataEvento
     *
     * @return \DateTime
     */
    public function getDataEvento()
    {
        return $this->dataEvento;
    }

    /**
     * Set dataEventoFine
     *
     * @param \DateTime $dataEventoFine
     *
     * @return Eventi
     */
    public function setDataEventoFine($dataEventoFine)
    {
        $this->dataEventoFine = $dataEventoFine;

        return $this;
    }

    /**
     * Get dataEventoFine
     *
     * @return \DateTime
     */
    public function getDataEventoFine()
    {
        return $this->dataEventoFine;
    }

    /**
     * Set descrizione
     *
     * @param string $descrizione
     *
     * @return Eventi
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

    public function setlistaInvitati($listaInvitati)
    {
        $this->listaInvitati = $listaInvitati;

        return $this;
    }

    public function getListaInvitati()
    {
        return $this->listaInvitati;
    }


    public function setUtenti($Utenti)
    {
        $this->Utenti = $Utenti;

        return $this;
    }

    public function getUtenti()
    {
        return $this->Utenti;
    }


        public function setAulaNew($AulaNew)
    {
        $this->AulaNew = $AulaNew;

        return $this;
    }

    public function getAulaNew()
    {
        return $this->AulaNew;
    }
}

