<?php

namespace ProjetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Abonnement
 *
 * @ORM\Table(name="abonnement", indexes={@ORM\Index(name="fk_abonnement_dieteticien", columns={"iddieteticien"})})
 * @ORM\Entity(repositoryClass="ProjetBundle\Entity\AbonnementRepository")
 */
class Abonnement
{
    /**
     * @var int
     *
     * @ORM\Column(name="idutilisateur", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idutilisateur;

    /**
     * @var int
     *
     * @ORM\Column(name="iddieteticien", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $iddieteticien;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dateabonnement", type="date", nullable=true)
     */
    private $dateabonnement;



    /**
     * Set idutilisateur.
     *
     * @param int $idutilisateur
     *
     * @return Abonnement
     */
    public function setIdutilisateur($idutilisateur)
    {
        $this->idutilisateur = $idutilisateur;

        return $this;
    }

    /**
     * Get idutilisateur.
     *
     * @return int
     */
    public function getIdutilisateur()
    {
        return $this->idutilisateur;
    }

    /**
     * Set iddieteticien.
     *
     * @param int $iddieteticien
     *
     * @return Abonnement
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
     * Set dateabonnement.
     *
     * @param \DateTime|null $dateabonnement
     *
     * @return Abonnement
     */
    public function setDateabonnement($dateabonnement = null)
    {
        $this->dateabonnement = $dateabonnement;

        return $this;
    }

    /**
     * Get dateabonnement.
     *
     * @return \DateTime|null
     */
    public function getDateabonnement()
    {
        return $this->dateabonnement;
    }
}
