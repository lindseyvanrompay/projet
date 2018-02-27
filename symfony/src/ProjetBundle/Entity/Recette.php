<?php

namespace ProjetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Recette
 *
 * @ORM\Table(name="recette", indexes={@ORM\Index(name="fk_recette_utilisateur", columns={"idutilisateur"})})
 * @ORM\Entity
 */
class Recette
{
    /**
     * @var int
     *
     * @ORM\Column(name="idrecette", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idrecette;

    /**
     * @var int
     *
     * @ORM\Column(name="idutilisateur", type="bigint", nullable=false)
     */
    private $idutilisateur;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nomrecette", type="string", length=32, nullable=true, options={"fixed"=true})
     */
    private $nomrecette;



    /**
     * Get idrecette.
     *
     * @return int
     */
    public function getIdrecette()
    {
        return $this->idrecette;
    }

    /**
     * Set idutilisateur.
     *
     * @param int $idutilisateur
     *
     * @return Recette
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
     * Set nomrecette.
     *
     * @param string|null $nomrecette
     *
     * @return Recette
     */
    public function setNomrecette($nomrecette = null)
    {
        $this->nomrecette = $nomrecette;

        return $this;
    }

    /**
     * Get nomrecette.
     *
     * @return string|null
     */
    public function getNomrecette()
    {
        return $this->nomrecette;
    }
}
