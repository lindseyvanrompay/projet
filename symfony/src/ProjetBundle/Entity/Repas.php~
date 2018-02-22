<?php

namespace ProjetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Repas
 *
 * @ORM\Table(name="REPAS", indexes={@ORM\Index(name="I_FK_REPAS_UTILISATEUR", columns={"IDUTILISATEUR"}), @ORM\Index(name="I_FK_REPAS_QUALITE", columns={"IDQUALITE"})})
 * @ORM\Entity
 */
class Repas
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDQUALITE", type="bigint", nullable=false)
     */
    private $idqualite;

    /**
     * @var string
     *
     * @ORM\Column(name="NOMREPAS", type="text", length=255, nullable=true)
     */
    private $nomrepas;

    /**
     * @var string
     *
     * @ORM\Column(name="INTITULEREPAS", type="text", length=65535, nullable=true)
     */
    private $intitulerepas;

    /**
     * @var integer
     *
     * @ORM\Column(name="CALORIE", type="bigint", nullable=true)
     */
    private $calorie;

    /**
     * @var \ProjetBundle\Entity\Qualite
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="ProjetBundle\Entity\Qualite")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDREPAS", referencedColumnName="IDQUALITE")
     * })
     */
    private $idrepas;

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
     * Set idqualite
     *
     * @param integer $idqualite
     *
     * @return Repas
     */
    public function setIdqualite($idqualite)
    {
        $this->idqualite = $idqualite;

        return $this;
    }

    /**
     * Get idqualite
     *
     * @return integer
     */
    public function getIdqualite()
    {
        return $this->idqualite;
    }

    /**
     * Set nomrepas
     *
     * @param string $nomrepas
     *
     * @return Repas
     */
    public function setNomrepas($nomrepas)
    {
        $this->nomrepas = $nomrepas;

        return $this;
    }

    /**
     * Get nomrepas
     *
     * @return string
     */
    public function getNomrepas()
    {
        return $this->nomrepas;
    }

    /**
     * Set intitulerepas
     *
     * @param string $intitulerepas
     *
     * @return Repas
     */
    public function setIntitulerepas($intitulerepas)
    {
        $this->intitulerepas = $intitulerepas;

        return $this;
    }

    /**
     * Get intitulerepas
     *
     * @return string
     */
    public function getIntitulerepas()
    {
        return $this->intitulerepas;
    }

    /**
     * Set calorie
     *
     * @param integer $calorie
     *
     * @return Repas
     */
    public function setCalorie($calorie)
    {
        $this->calorie = $calorie;

        return $this;
    }

    /**
     * Get calorie
     *
     * @return integer
     */
    public function getCalorie()
    {
        return $this->calorie;
    }

    /**
     * Set idrepas
     *
     * @param \ProjetBundle\Entity\Qualite $idrepas
     *
     * @return Repas
     */
    public function setIdrepas(\ProjetBundle\Entity\Qualite $idrepas)
    {
        $this->idrepas = $idrepas;

        return $this;
    }

    /**
     * Get idrepas
     *
     * @return \ProjetBundle\Entity\Qualite
     */
    public function getIdrepas()
    {
        return $this->idrepas;
    }

    /**
     * Set idutilisateur
     *
     * @param \ProjetBundle\Entity\Utilisateur $idutilisateur
     *
     * @return Repas
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
