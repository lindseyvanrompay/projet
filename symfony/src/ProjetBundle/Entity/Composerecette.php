<?php

namespace ProjetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Composerecette
 *
 * @ORM\Table(name="composerecette", indexes={@ORM\Index(name="fk_composerecette_recette", columns={"idrecette"})})
 * @ORM\Entity
 */
class Composerecette
{
    /**
     * @var int
     *
     * @ORM\Column(name="idaliment", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idaliment;

    /**
     * @var int
     *
     * @ORM\Column(name="idrecette", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idrecette;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quantitealiment", type="bigint", nullable=true)
     */
    private $quantitealiment;



    /**
     * Set idaliment.
     *
     * @param int $idaliment
     *
     * @return Composerecette
     */
    public function setIdaliment($idaliment)
    {
        $this->idaliment = $idaliment;

        return $this;
    }

    /**
     * Get idaliment.
     *
     * @return int
     */
    public function getIdaliment()
    {
        return $this->idaliment;
    }

    /**
     * Set idrecette.
     *
     * @param int $idrecette
     *
     * @return Composerecette
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
     * Set quantitealiment.
     *
     * @param int|null $quantitealiment
     *
     * @return Composerecette
     */
    public function setQuantitealiment($quantitealiment = null)
    {
        $this->quantitealiment = $quantitealiment;

        return $this;
    }

    /**
     * Get quantitealiment.
     *
     * @return int|null
     */
    public function getQuantitealiment()
    {
        return $this->quantitealiment;
    }
}
