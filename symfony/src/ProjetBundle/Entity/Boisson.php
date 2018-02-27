<?php

namespace ProjetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Boisson
 *
 * @ORM\Table(name="boisson", indexes={@ORM\Index(name="fk_boisson_recette", columns={"idrecette"})})
 * @ORM\Entity
 */
class Boisson
{
    /**
     * @var int
     *
     * @ORM\Column(name="idboisson", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idboisson;

    /**
     * @var int
     *
     * @ORM\Column(name="idrecette", type="bigint", nullable=false)
     */
    private $idrecette;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nomboisson", type="string", length=32, nullable=true, options={"fixed"=true})
     */
    private $nomboisson;

    /**
     * @var int|null
     *
     * @ORM\Column(name="calorieboisson", type="bigint", nullable=true)
     */
    private $calorieboisson;



    /**
     * Get idboisson.
     *
     * @return int
     */
    public function getIdboisson()
    {
        return $this->idboisson;
    }

    /**
     * Set idrecette.
     *
     * @param int $idrecette
     *
     * @return Boisson
     */
    public function setIdrecette($idrecette)
    {
        $this->idrecette = $idrecette;

        return $this;
    }

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
     * Set nomboisson.
     *
     * @param string|null $nomboisson
     *
     * @return Boisson
     */
    public function setNomboisson($nomboisson = null)
    {
        $this->nomboisson = $nomboisson;

        return $this;
    }

    /**
     * Get nomboisson.
     *
     * @return string|null
     */
    public function getNomboisson()
    {
        return $this->nomboisson;
    }

    /**
     * Set calorieboisson.
     *
     * @param int|null $calorieboisson
     *
     * @return Boisson
     */
    public function setCalorieboisson($calorieboisson = null)
    {
        $this->calorieboisson = $calorieboisson;

        return $this;
    }

    /**
     * Get calorieboisson.
     *
     * @return int|null
     */
    public function getCalorieboisson()
    {
        return $this->calorieboisson;
    }
}
