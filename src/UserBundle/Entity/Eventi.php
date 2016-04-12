<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

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
     * Set dataEvento
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
}

