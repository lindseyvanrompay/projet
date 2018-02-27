<?php

namespace ProjetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Conseil
 *
 * @ORM\Table(name="conseil", indexes={@ORM\Index(name="fk_conseil_suivi", columns={"idsuivi"}), @ORM\Index(name="fk_conseil_dieteticien", columns={"iddieteticien"})})
 * @ORM\Entity
 */
class Conseil
{
    /**
     * @var int
     *
     * @ORM\Column(name="idconseil", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idconseil;

    /**
     * @var int
     *
     * @ORM\Column(name="idsuivi", type="bigint", nullable=false)
     */
    private $idsuivi;

    /**
     * @var int
     *
     * @ORM\Column(name="iddieteticien", type="bigint", nullable=false)
     */
    private $iddieteticien;

    /**
     * @var string|null
     *
     * @ORM\Column(name="intitule", type="string", length=255, nullable=true, options={"fixed"=true})
     */
    private $intitule;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dateconseil", type="date", nullable=true)
     */
    private $dateconseil;



    /**
     * Get idconseil.
     *
     * @return int
     */
    public function getIdconseil()
    {
        return $this->idconseil;
    }

    /**
     * Set idsuivi.
     *
     * @param int $idsuivi
     *
     * @return Conseil
     */
    public function setIdsuivi($idsuivi)
    {
        $this->idsuivi = $idsuivi;

        return $this;
    }

    /**
     * Get idsuivi.
     *
     * @return int
     */
    public function getIdsuivi()
    {
        return $this->idsuivi;
    }

    /**
     * Set iddieteticien.
     *
     * @param int $iddieteticien
     *
     * @return Conseil
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
     * Set intitule.
     *
     * @param string|null $intitule
     *
     * @return Conseil
     */
    public function setIntitule($intitule = null)
    {
        $this->intitule = $intitule;

        return $this;
    }

    /**
     * Get intitule.
     *
     * @return string|null
     */
    public function getIntitule()
    {
        return $this->intitule;
    }

    /**
     * Set dateconseil.
     *
     * @param \DateTime|null $dateconseil
     *
     * @return Conseil
     */
    public function setDateconseil($dateconseil = null)
    {
        $this->dateconseil = $dateconseil;

        return $this;
    }

    /**
     * Get dateconseil.
     *
     * @return \DateTime|null
     */
    public function getDateconseil()
    {
        return $this->dateconseil;
    }
}
