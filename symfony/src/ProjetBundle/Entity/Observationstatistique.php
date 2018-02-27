<?php

namespace ProjetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Observationstatistique
 *
 * @ORM\Table(name="observationstatistique", indexes={@ORM\Index(name="fk_observationstatistique_statistiques", columns={"idstatistique"})})
 * @ORM\Entity
 */
class Observationstatistique
{
    /**
     * @var int
     *
     * @ORM\Column(name="iddieteticien", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $iddieteticien;

    /**
     * @var int
     *
     * @ORM\Column(name="idstatistique", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idstatistique;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dateobservation", type="date", nullable=true)
     */
    private $dateobservation;



    /**
     * Set iddieteticien.
     *
     * @param int $iddieteticien
     *
     * @return Observationstatistique
     */
    public function setIddieteticien($iddieteticien)
    {
        $this->iddieteticien = $iddieteticien;

        return $this;
    }

    /**
     * Get iddieteticien.
     *
     * @return int
     */
    public function getIddieteticien()
    {
        return $this->iddieteticien;
    }

    /**
     * Set idstatistique.
     *
     * @param int $idstatistique
     *
     * @return Observationstatistique
     */
    public function setIdstatistique($idstatistique)
    {
        $this->idstatistique = $idstatistique;

        return $this;
    }

    /**
     * Get idstatistique.
     *
     * @return int
     */
    public function getIdstatistique()
    {
        return $this->idstatistique;
    }

    /**
     * Set dateobservation.
     *
     * @param \DateTime|null $dateobservation
     *
     * @return Observationstatistique
     */
    public function setDateobservation($dateobservation = null)
    {
        $this->dateobservation = $dateobservation;

        return $this;
    }

    /**
     * Get dateobservation.
     *
     * @return \DateTime|null
     */
    public function getDateobservation()
    {
        return $this->dateobservation;
    }
}
