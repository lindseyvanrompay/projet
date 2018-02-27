<?php

namespace ProjetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Utilisateur
 *
 * @ORM\Table(name="utilisateur")
 * @ORM\Entity(repositoryClass="ProjetBundle\Entity\UtilisateurRepository")
 */
class Utilisateur
{
    /**
     * @var int
     *
     * @ORM\Column(name="idutilisateur", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idutilisateur;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nomutilisateur", type="string", length=32, nullable=true, options={"fixed"=true})
     */
    private $nomutilisateur;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prenomutilisateur", type="string", length=32, nullable=true, options={"fixed"=true})
     */
    private $prenomutilisateur;

    /**
     * @var string|null
     *
     * @ORM\Column(name="adressemailutilisateur", type="string", length=128, nullable=true, options={"fixed"=true})
     */
    private $adressemailutilisateur;

    /**
     * @var int|null
     *
     * @ORM\Column(name="age", type="bigint", nullable=true)
     */
    private $age;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pseudoutilisateur", type="string", length=16, nullable=true, options={"fixed"=true})
     */
    private $pseudoutilisateur;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mdputilisateur", type="string", length=16, nullable=true, options={"fixed"=true})
     */
    private $mdputilisateur;



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
     * Set nomutilisateur.
     *
     * @param string|null $nomutilisateur
     *
     * @return Utilisateur
     */
    public function setNomutilisateur($nomutilisateur = null)
    {
        $this->nomutilisateur = $nomutilisateur;

        return $this;
    }

    /**
     * Get nomutilisateur.
     *
     * @return string|null
     */
    public function getNomutilisateur()
    {
        return $this->nomutilisateur;
    }

    /**
     * Set prenomutilisateur.
     *
     * @param string|null $prenomutilisateur
     *
     * @return Utilisateur
     */
    public function setPrenomutilisateur($prenomutilisateur = null)
    {
        $this->prenomutilisateur = $prenomutilisateur;

        return $this;
    }

    /**
     * Get prenomutilisateur.
     *
     * @return string|null
     */
    public function getPrenomutilisateur()
    {
        return $this->prenomutilisateur;
    }

    /**
     * Set adressemailutilisateur.
     *
     * @param string|null $adressemailutilisateur
     *
     * @return Utilisateur
     */
    public function setAdressemailutilisateur($adressemailutilisateur = null)
    {
        $this->adressemailutilisateur = $adressemailutilisateur;

        return $this;
    }

    /**
     * Get adressemailutilisateur.
     *
     * @return string|null
     */
    public function getAdressemailutilisateur()
    {
        return $this->adressemailutilisateur;
    }

    /**
     * Set age.
     *
     * @param int|null $age
     *
     * @return Utilisateur
     */
    public function setAge($age = null)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age.
     *
     * @return int|null
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set pseudoutilisateur.
     *
     * @param string|null $pseudoutilisateur
     *
     * @return Utilisateur
     */
    public function setPseudoutilisateur($pseudoutilisateur = null)
    {
        $this->pseudoutilisateur = $pseudoutilisateur;

        return $this;
    }

    /**
     * Get pseudoutilisateur.
     *
     * @return string|null
     */
    public function getPseudoutilisateur()
    {
        return $this->pseudoutilisateur;
    }

    /**
     * Set mdputilisateur.
     *
     * @param string|null $mdputilisateur
     *
     * @return Utilisateur
     */
    public function setMdputilisateur($mdputilisateur = null)
    {
        $this->mdputilisateur = $mdputilisateur;

        return $this;
    }

    /**
     * Get mdputilisateur.
     *
     * @return string|null
     */
    public function getMdputilisateur()
    {
        return $this->mdputilisateur;
    }
}
