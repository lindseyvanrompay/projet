<?php

namespace ProjetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Repas
 *
 * @ORM\Table(name="repas", indexes={@ORM\Index(name="fk_repas_utilisateur", columns={"idutilisateur"}), @ORM\Index(name="fk_repas_qualite", columns={"idqualite"})})
 * @ORM\Entity
 */
class Repas
{
    /**
     * @var int
     *
     * @ORM\Column(name="idrepas", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idrepas;

    /**
     * @var int
     *
     * @ORM\Column(name="idutilisateur", type="bigint", nullable=false)
     */
    private $idutilisateur;

    /**
     * @var int
     *
     * @ORM\Column(name="idqualite", type="bigint", nullable=false)
     */
    private $idqualite;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nomrepas", type="string", length=32, nullable=true, options={"fixed"=true})
     */
    private $nomrepas;

    /**
     * @var string|null
     *
     * @ORM\Column(name="intitulerepas", type="string", length=255, nullable=true, options={"fixed"=true})
     */
    private $intitulerepas;

    /**
     * @var int|null
     *
     * @ORM\Column(name="calorie", type="bigint", nullable=true)
     */
    private $calorie;



    /**
     * Get idrepas.
     *
     * @return int
     */
    public function getIdrepas()
    {
        return $this->idrepas;
    }

    /**
     * Set idutilisateur.
     *
     * @param int $idutilisateur
     *
     * @return Repas
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
     * Set idqualite.
     *
     * @param int $idqualite
     *
     * @return Repas
     */
    public function setIdqualite($idqualite)
    {
        $this->idqualite = $idqualite;

        return $this;
    }

    /**
     * Get idqualite.
     *
     * @return int
     */
    public function getIdqualite()
    {
        return $this->idqualite;
    }

    /**
     * Set nomrepas.
     *
     * @param string|null $nomrepas
     *
     * @return Repas
     */
    public function setNomrepas($nomrepas = null)
    {
        $this->nomrepas = $nomrepas;

        return $this;
    }

    /**
     * Get nomrepas.
     *
     * @return string|null
     */
    public function getNomrepas()
    {
        return $this->nomrepas;
    }

    /**
     * Set intitulerepas.
     *
     * @param string|null $intitulerepas
     *
     * @return Repas
     */
    public function setIntitulerepas($intitulerepas = null)
    {
        $this->intitulerepas = $intitulerepas;

        return $this;
    }

    /**
     * Get intitulerepas.
     *
     * @return string|null
     */
    public function getIntitulerepas()
    {
        return $this->intitulerepas;
    }

    /**
     * Set calorie.
     *
     * @param int|null $calorie
     *
     * @return Repas
     */
    public function setCalorie($calorie = null)
    {
        $this->calorie = $calorie;

        return $this;
    }

    /**
     * Get calorie.
     *
     * @return int|null
     */
    public function getCalorie()
    {
        return $this->calorie;
    }
}
