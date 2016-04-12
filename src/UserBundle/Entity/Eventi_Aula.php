<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Eventi_Aula
 *
 * @ORM\Table(name="eventi__aula")
 * @ORM\Entity(repositoryClass="UserBundle\Repository\Eventi_AulaRepository")
 */
class Eventi_Aula
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
     * @ORM\Column(name="evento_id", type="integer")
     */
    private $eventoId;


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
     * Set eventoId
     *
     * @param integer $eventoId
     *
     * @return Eventi_Utente
     */
    public function setEventoId($eventoId)
    {
        $this->eventoId = $eventoId;

        return $this;
    }

    /**
     * Get eventoId
     *
     * @return int
     */
    public function getEventoId()
    {
        return $this->eventoId;
    }
}

