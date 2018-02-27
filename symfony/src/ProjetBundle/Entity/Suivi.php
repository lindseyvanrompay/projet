<?php

namespace ProjetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Suivi
 *
 * @ORM\Table(name="SUIVI", indexes={@ORM\Index(name="I_FK_SUIVI_DIETETICIEN", columns={"IDDIETETICIEN"}), @ORM\Index(name="I_FK_SUIVI_UTILISATEUR", columns={"IDUTILISATEUR"})})
 * @ORM\Entity(repositoryClass="ProjetBundle\Entity\SuiviRepository")
 */
class Suivi
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATESUIVI", type="date", nullable=true)
     */
    private $datesuivi;

    /**
     * @var string
     *
     * @ORM\Column(name="REMARQUE", type="text", length=255, nullable=true)
     */
    private $remarque;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDSUIVI", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idsuivi;

    /**
     * @var \ProjetBundle\Entity\Dieteticien
     *
     * @ORM\ManyToOne(targetEntity="ProjetBundle\Entity\Dieteticien")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDDIETETICIEN", referencedColumnName="IDDIETETICIEN")
     * })
     */
    private $iddieteticien;

    /**
     * @var \ProjetBundle\Entity\Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="ProjetBundle\Entity\Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDUTILISATEUR", referencedColumnName="IDUTILISATEUR")
     * })
     */
    private $idutilisateur;



    /**
     * Set datesuivi
     *
     * @param \DateTime $datesuivi
     *
     * @return Suivi
     */
    public function setDatesuivi($datesuivi)
    {
        $this->datesuivi = $datesuivi;

        return $this;
    }

    /**
     * Get datesuivi
     *
     * @return \DateTime
     */
    public function getDatesuivi()
    {
        return $this->datesuivi;
    }

    /**
     * Set remarque
     *
     * @param string $remarque
     *
     * @return Suivi
     */
    public function setRemarque($remarque)
    {
        $this->remarque = $remarque;

        return $this;
    }

    /**
     * Get remarque
     *
     * @return string
     */
    public function getRemarque()
    {
        return $this->remarque;
    }

    /**
     * Get idsuivi
     *
     * @return integer
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
     * @return Suivi
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

    /**
     * Set idutilisateur
     *
     * @param \ProjetBundle\Entity\Utilisateur $idutilisateur
     *
     * @return Suivi
     */
    public function setIdutilisateur(\ProjetBundle\Entity\Utilisateur $idutilisateur = null)
    {
        $this->idutilisateur = $idutilisateur;

        return $this;
    }

    /**
     * Get idutilisateur
     *
     * @return \ProjetBundle\Entity\Utilisateur
     */
    public function getIdutilisateur()
    {
        return $this->idutilisateur;
    }
}
