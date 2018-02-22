<?php

namespace ProjetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Recette
 *
 * @ORM\Table(name="RECETTE", indexes={@ORM\Index(name="I_FK_RECETTE_UTILISATEUR", columns={"IDUTILISATEUR"})})
 * @ORM\Entity(repositoryClass="ProjetBundle\Entity\RecetteRepository")
 */
class Recette
{
    /**
     * @var string
     *
     * @ORM\Column(name="NOMRECETTE", type="text", length=255, nullable=true)
     */
    private $nomrecette;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDRECETTE", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idrecette;

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
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="ProjetBundle\Entity\Aliments", mappedBy="idrecette")
     */
    private $idaliment;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idaliment = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set nomrecette
     *
     * @param string $nomrecette
     *
     * @return Recette
     */
    public function setNomrecette($nomrecette)
    {
        $this->nomrecette = $nomrecette;

        return $this;
    }

    /**
     * Get nomrecette
     *
     * @return string
     */
    public function getNomrecette()
    {
        return $this->nomrecette;
    }

    /**
     * Get idrecette
     *
     * @return integer
     */
    public function getIdrecette()
    {
        return $this->idrecette;
    }

    /**
     * Set idutilisateur
     *
     * @param \ProjetBundle\Entity\Utilisateur $idutilisateur
     *
     * @return Recette
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

    /**
     * Add idaliment
     *
     * @param \ProjetBundle\Entity\Aliments $idaliment
     *
     * @return Recette
     */
    public function addIdaliment(\ProjetBundle\Entity\Aliments $idaliment)
    {
        $this->idaliment[] = $idaliment;

        return $this;
    }

    /**
     * Remove idaliment
     *
     * @param \ProjetBundle\Entity\Aliments $idaliment
     */
    public function removeIdaliment(\ProjetBundle\Entity\Aliments $idaliment)
    {
        $this->idaliment->removeElement($idaliment);
    }

    /**
     * Get idaliment
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdaliment()
    {
        return $this->idaliment;
    }
}
