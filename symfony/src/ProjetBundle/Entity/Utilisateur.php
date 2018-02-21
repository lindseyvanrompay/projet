<?php

namespace ProjetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Utilisateur
 *
 * @ORM\Table(name="UTILISATEUR")
 * @ORM\Entity(repositoryClass="ProjetBundle\Entity\UtilisateurRepository")
 */
class Utilisateur
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDUTILISATEUR", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idutilisateur;

    /**
     * @var string
     *
     * @ORM\Column(name="NOMUTILISATEUR", type="text", length=255, nullable=true)
     */
    private $nomutilisateur;

    /**
     * @var string
     *
     * @ORM\Column(name="PRENOMUTILISATEUR", type="text", length=255, nullable=true)
     */
    private $prenomutilisateur;

    /**
     * @var string
     *
     * @ORM\Column(name="ADRESSEMAILUTILISATEUR", type="text", length=255, nullable=true)
     */
    private $adressemailutilisateur;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATEDENAISSANCE", type="date", nullable=true)
     */
    private $datedenaissance;

    /**
     * @var integer
     *
     * @ORM\Column(name="AGE", type="bigint", nullable=true)
     */
    private $age;

    /**
     * @var string
     *
     * @ORM\Column(name="PSEUDOUTILISATEUR", type="text", length=255, nullable=true)
     */
    private $pseudoutilisateur;

    /**
     * @var string
     *
     * @ORM\Column(name="MDPUTILISATEUR", type="text", length=255, nullable=true)
     */
    private $mdputilisateur;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Dieteticien", inversedBy="idutilisateur")
     * @ORM\JoinTable(name="abonnement",
     *   joinColumns={
     *     @ORM\JoinColumn(name="IDUTILISATEUR", referencedColumnName="IDUTILISATEUR")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="IDDIETETICIEN", referencedColumnName="IDDIETETICIEN")
     *   }
     * )
     */
    private $iddieteticien;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->iddieteticien = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set nomutilisateur
     *
     * @param string $nomutilisateur
     *
     * @return Utilisateur
     */
    public function setNomutilisateur($nomutilisateur)
    {
        $this->nomutilisateur = $nomutilisateur;

        return $this;
    }

    /**
     * Get nomutilisateur
     *
     * @return string
     */
    public function getNomutilisateur()
    {
        return $this->nomutilisateur;
    }

    /**
     * Set prenomutilisateur
     *
     * @param string $prenomutilisateur
     *
     * @return Utilisateur
     */
    public function setPrenomutilisateur($prenomutilisateur)
    {
        $this->prenomutilisateur = $prenomutilisateur;

        return $this;
    }

    /**
     * Get prenomutilisateur
     *
     * @return string
     */
    public function getPrenomutilisateur()
    {
        return $this->prenomutilisateur;
    }

    /**
     * Set adressemailutilisateur
     *
     * @param string $adressemailutilisateur
     *
     * @return Utilisateur
     */
    public function setAdressemailutilisateur($adressemailutilisateur)
    {
        $this->adressemailutilisateur = $adressemailutilisateur;

        return $this;
    }

    /**
     * Get adressemailutilisateur
     *
     * @return string
     */
    public function getAdressemailutilisateur()
    {
        return $this->adressemailutilisateur;
    }

    /**
     * Set datedenaissance
     *
     * @param \DateTime $datedenaissance
     *
     * @return Utilisateur
     */
    public function setDatedenaissance($datedenaissance)
    {
        $this->datedenaissance = $datedenaissance;

        return $this;
    }

    /**
     * Get datedenaissance
     *
     * @return \DateTime
     */
    public function getDatedenaissance()
    {
        return $this->datedenaissance;
    }

    /**
     * Set age
     *
     * @param integer $age
     *
     * @return Utilisateur
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age
     *
     * @return integer
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set pseudoutilisateur
     *
     * @param string $pseudoutilisateur
     *
     * @return Utilisateur
     */
    public function setPseudoutilisateur($pseudoutilisateur)
    {
        $this->pseudoutilisateur = $pseudoutilisateur;

        return $this;
    }

    /**
     * Get pseudoutilisateur
     *
     * @return string
     */
    public function getPseudoutilisateur()
    {
        return $this->pseudoutilisateur;
    }

    /**
     * Set mdputilisateur
     *
     * @param string $mdputilisateur
     *
     * @return Utilisateur
     */
    public function setMdputilisateur($mdputilisateur)
    {
        $this->mdputilisateur = $mdputilisateur;

        return $this;
    }

    /**
     * Get mdputilisateur
     *
     * @return string
     */
    public function getMdputilisateur()
    {
        return $this->mdputilisateur;
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
     * Add iddieteticien
     *
     * @param \ProjetBundle\Entity\Dieteticien $iddieteticien
     *
     * @return Utilisateur
     */
    public function addIddieteticien(\ProjetBundle\Entity\Dieteticien $iddieteticien)
    {
        $this->iddieteticien[] = $iddieteticien;

        return $this;
    }

    /**
     * Remove iddieteticien
     *
     * @param \ProjetBundle\Entity\Dieteticien $iddieteticien
     */
    public function removeIddieteticien(\ProjetBundle\Entity\Dieteticien $iddieteticien)
    {
        $this->iddieteticien->removeElement($iddieteticien);
    }

    /**
     * Get iddieteticien
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIddieteticien()
    {
        return $this->iddieteticien;
    }
}
