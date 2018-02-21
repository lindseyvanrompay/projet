<?php

namespace ProjetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dieteticien
 *
 * @ORM\Table(name="DIETETICIEN")
 * @ORM\Entity
 */
class Dieteticien
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDDIETETICIEN", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iddieteticien;

    /**
     * @var string
     *
     * @ORM\Column(name="NOMDIETETICIEN", type="text", length=255, nullable=true)
     */
    private $nomdieteticien;

    /**
     * @var string
     *
     * @ORM\Column(name="PRENOMDIETETICIEN", type="text", length=255, nullable=true)
     */
    private $prenomdieteticien;

    /**
     * @var string
     *
     * @ORM\Column(name="ADRESSEMAILDIETETICIEN", type="text", length=255, nullable=true)
     */
    private $adressemaildieteticien;

    /**
     * @var string
     *
     * @ORM\Column(name="PSEUDODIETETICIEN", type="text", length=255, nullable=true)
     */
    private $pseudodieteticien;

    /**
     * @var string
     *
     * @ORM\Column(name="MDPDIETETICIEN", type="text", length=255, nullable=true)
     */
    private $mdpdieteticien;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Utilisateur", mappedBy="iddieteticien")
     */
    private $idutilisateur;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Statistiques", inversedBy="iddieteticien")
     * @ORM\JoinTable(name="observationstatistique",
     *   joinColumns={
     *     @ORM\JoinColumn(name="IDDIETETICIEN", referencedColumnName="IDDIETETICIEN")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="IDSTATISTIQUE", referencedColumnName="IDSTATISTIQUE")
     *   }
     * )
     */
    private $idstatistique;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idutilisateur = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idstatistique = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set nomdieteticien
     *
     * @param string $nomdieteticien
     *
     * @return Dieteticien
     */
    public function setNomdieteticien($nomdieteticien)
    {
        $this->nomdieteticien = $nomdieteticien;

        return $this;
    }

    /**
     * Get nomdieteticien
     *
     * @return string
     */
    public function getNomdieteticien()
    {
        return $this->nomdieteticien;
    }

    /**
     * Set prenomdieteticien
     *
     * @param string $prenomdieteticien
     *
     * @return Dieteticien
     */
    public function setPrenomdieteticien($prenomdieteticien)
    {
        $this->prenomdieteticien = $prenomdieteticien;

        return $this;
    }

    /**
     * Get prenomdieteticien
     *
     * @return string
     */
    public function getPrenomdieteticien()
    {
        return $this->prenomdieteticien;
    }

    /**
     * Set adressemaildieteticien
     *
     * @param string $adressemaildieteticien
     *
     * @return Dieteticien
     */
    public function setAdressemaildieteticien($adressemaildieteticien)
    {
        $this->adressemaildieteticien = $adressemaildieteticien;

        return $this;
    }

    /**
     * Get adressemaildieteticien
     *
     * @return string
     */
    public function getAdressemaildieteticien()
    {
        return $this->adressemaildieteticien;
    }

    /**
     * Set pseudodieteticien
     *
     * @param string $pseudodieteticien
     *
     * @return Dieteticien
     */
    public function setPseudodieteticien($pseudodieteticien)
    {
        $this->pseudodieteticien = $pseudodieteticien;

        return $this;
    }

    /**
     * Get pseudodieteticien
     *
     * @return string
     */
    public function getPseudodieteticien()
    {
        return $this->pseudodieteticien;
    }

    /**
     * Set mdpdieteticien
     *
     * @param string $mdpdieteticien
     *
     * @return Dieteticien
     */
    public function setMdpdieteticien($mdpdieteticien)
    {
        $this->mdpdieteticien = $mdpdieteticien;

        return $this;
    }

    /**
     * Get mdpdieteticien
     *
     * @return string
     */
    public function getMdpdieteticien()
    {
        return $this->mdpdieteticien;
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

    /**
     * Add idutilisateur
     *
     * @param \ProjetBundle\Entity\Utilisateur $idutilisateur
     *
     * @return Dieteticien
     */
    public function addIdutilisateur(\ProjetBundle\Entity\Utilisateur $idutilisateur)
    {
        $this->idutilisateur[] = $idutilisateur;

        return $this;
    }

    /**
     * Remove idutilisateur
     *
     * @param \ProjetBundle\Entity\Utilisateur $idutilisateur
     */
    public function removeIdutilisateur(\ProjetBundle\Entity\Utilisateur $idutilisateur)
    {
        $this->idutilisateur->removeElement($idutilisateur);
    }

    /**
     * Get idutilisateur
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdutilisateur()
    {
        return $this->idutilisateur;
    }

    /**
     * Add idstatistique
     *
     * @param \ProjetBundle\Entity\Statistiques $idstatistique
     *
     * @return Dieteticien
     */
    public function addIdstatistique(\ProjetBundle\Entity\Statistiques $idstatistique)
    {
        $this->idstatistique[] = $idstatistique;

        return $this;
    }

    /**
     * Remove idstatistique
     *
     * @param \ProjetBundle\Entity\Statistiques $idstatistique
     */
    public function removeIdstatistique(\ProjetBundle\Entity\Statistiques $idstatistique)
    {
        $this->idstatistique->removeElement($idstatistique);
    }

    /**
     * Get idstatistique
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdstatistique()
    {
        return $this->idstatistique;
    }
}
