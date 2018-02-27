<?php

namespace ProjetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Abonnement
 *
 * @ORM\Table(name="ABONNEMENT", indexes={@ORM\Index(name="I_FK_ABONNEMENT_UTILISATEUR", columns={"IDUTILISATEUR"}), @ORM\Index(name="I_FK_ABONNEMENT_DIETETICIEN", columns={"IDDIETETICIEN"})})
 * @ORM\Entity(repositoryClass="ProjetBundle\Entity\AbonnementRepository")
 */
class Abonnement
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATEABONNEMENT", type="date", nullable=true)
     */
    private $dateabonnement;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDUTILISATEUR", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idutilisateur;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDDIETETICIEN", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $iddieteticien;



    /**
     * Set dateabonnement
     *
     * @param \DateTime $dateabonnement
     *
     * @return Abonnement
     */
    public function setDateabonnement($dateabonnement)
    {
        $this->dateabonnement = $dateabonnement;

        return $this;
    }

    /**
     * Get dateabonnement
     *
     * @return \DateTime
     */
    public function getDateabonnement()
    {
        return $this->dateabonnement;
    }

    /**
     * Set idutilisateur
     *
     * @param integer $idutilisateur
     *
     * @return Abonnement
     */
    public function setIdutilisateur($idutilisateur)
    {
        $this->idutilisateur = $idutilisateur;

        return $this;
    }

    /**
     * Get idutilisateur
     *
     * @return integer
     */
    public function getIdutilisateur()
    {
        return $this->idutilisateur;
    }

    /**
     * Set iddieteticien
     *
     * @param integer $iddieteticien
     *
     * @return Abonnement
     */
    public function setIddieteticien($iddieteticien)
    {
        $this->iddieteticien = $iddieteticien;

        return $this;
    }

    /**
     * Get iddieteticien
     *
     * @return integer
     */
    public function getIddieteticien()
    {
        return $this->iddieteticien;
    }
}
