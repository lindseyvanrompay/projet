<?php

namespace ProjetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Conseil
 *
 * @ORM\Table(name="CONSEIL", indexes={@ORM\Index(name="I_FK_CONSEIL_SUIVI", columns={"IDSUIVI"}), @ORM\Index(name="I_FK_CONSEIL_DIETETICIEN", columns={"IDDIETETICIEN"})})
 * @ORM\Entity
 */
class Conseil
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDCONSEIL", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idconseil;

    /**
     * @var string
     *
     * @ORM\Column(name="INTITULE", type="text", length=65535, nullable=true)
     */
    private $intitule;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATECONSEIL", type="date", nullable=true)
     */
    private $dateconseil;

    /**
     * @var \Suivi
     *
     * @ORM\ManyToOne(targetEntity="Suivi")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDSUIVI", referencedColumnName="IDSUIVI")
     * })
     */
    private $idsuivi;

    /**
     * @var \Dieteticien
     *
     * @ORM\ManyToOne(targetEntity="Dieteticien")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDDIETETICIEN", referencedColumnName="IDDIETETICIEN")
     * })
     */
    private $iddieteticien;



    /**
     * Set intitule
     *
     * @param string $intitule
     *
     * @return Conseil
     */
    public function setIntitule($intitule)
    {
        $this->intitule = $intitule;

        return $this;
    }

    /**
     * Get intitule
     *
     * @return string
     */
    public function getIntitule()
    {
        return $this->intitule;
    }

    /**
     * Set dateconseil
     *
     * @param \DateTime $dateconseil
     *
     * @return Conseil
     */
    public function setDateconseil($dateconseil)
    {
        $this->dateconseil = $dateconseil;

        return $this;
    }

    /**
     * Get dateconseil
     *
     * @return \DateTime
     */
    public function getDateconseil()
    {
        return $this->dateconseil;
    }

    /**
     * Get idconseil
     *
     * @return integer
     */
    public function getIdconseil()
    {
        return $this->idconseil;
    }

    /**
     * Set idsuivi
     *
     * @param \ProjetBundle\Entity\Suivi $idsuivi
     *
     * @return Conseil
     */
    public function setIdsuivi(\ProjetBundle\Entity\Suivi $idsuivi = null)
    {
        $this->idsuivi = $idsuivi;

        return $this;
    }

    /**
     * Get idsuivi
     *
     * @return \ProjetBundle\Entity\Suivi
     */
    public function getIdsuivi()
    {
        return $this->idsuivi;
    }

    /**
     * Set iddieteticien
     *
     * @param \ProjetBundle\Entity\Dieteticien $iddieteticien
     *
     * @return Conseil
     */
    public function setIddieteticien(\ProjetBundle\Entity\Dieteticien $iddieteticien = null)
    {
        $this->iddieteticien = $iddieteticien;

        return $this;
    }

    /**
     * Get iddieteticien
     *
     * @return \ProjetBundle\Entity\Dieteticien
     */
    public function getIddieteticien()
    {
        return $this->iddieteticien;
    }
}
