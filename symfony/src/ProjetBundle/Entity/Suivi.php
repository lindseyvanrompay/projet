<?php

namespace ProjetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Suivi
 *
 * @ORM\Table(name="suivi", indexes={@ORM\Index(name="fk_suivi_dieteticien", columns={"iddieteticien"}), @ORM\Index(name="fk_suivi_utilisateur", columns={"idutilisateur"})})
 * @ORM\Entity
 */
class Suivi
{
    /**
     * @var int
     *
     * @ORM\Column(name="idsuivi", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idsuivi;

    /**
     * @var int
     *
     * @ORM\Column(name="iddieteticien", type="bigint", nullable=false)
     */
    private $iddieteticien;

    /**
     * @var int
     *
     * @ORM\Column(name="idutilisateur", type="bigint", nullable=false)
     */
    private $idutilisateur;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="datesuivi", type="date", nullable=true)
     */
    private $datesuivi;

    /**
     * @var string|null
     *
     * @ORM\Column(name="remarque", type="string", length=255, nullable=true, options={"fixed"=true})
     */
    private $remarque;



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
     * @return Suivi
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
     * Set idutilisateur.
     *
     * @param int $idutilisateur
     *
     * @return Suivi
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
     * Set datesuivi.
     *
     * @param \DateTime|null $datesuivi
     *
     * @return Suivi
     */
    public function setDatesuivi($datesuivi = null)
    {
        $this->datesuivi = $datesuivi;

        return $this;
    }

    /**
     * Get datesuivi.
     *
     * @return \DateTime|null
     */
    public function getDatesuivi()
    {
        return $this->datesuivi;
    }

    /**
     * Set remarque.
     *
     * @param string|null $remarque
     *
     * @return Suivi
     */
    public function setRemarque($remarque = null)
    {
        $this->remarque = $remarque;

        return $this;
    }

    /**
     * Get remarque.
     *
     * @return string|null
     */
    public function getRemarque()
    {
        return $this->remarque;
    }
}
