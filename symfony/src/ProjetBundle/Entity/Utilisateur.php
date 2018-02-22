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
     * @var string
     *
     * @ORM\Column(name="ADRESSEMAILUTILISATEUR", type="text", length=255, nullable=true)
     */
    private $adressemailutilisateur;

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
     * @var string
     *
     * @ORM\Column(name="sexe", type="string", length=1, nullable=false)
     */
    private $sexe;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDUTILISATEUR", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idutilisateur;



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
     * Set sexe
     *
     * @param string $sexe
     *
     * @return Utilisateur
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }

    /**
     * Get sexe
     *
     * @return string
     */
    public function getSexe()
    {
        return $this->sexe;
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
}
