<?php

namespace ProjetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mets
 *
 * @ORM\Table(name="mets", indexes={@ORM\Index(name="fk_mets_recette", columns={"idrecette"}), @ORM\Index(name="fk_mets_categorie", columns={"idcategorie"})})
 * @ORM\Entity
 */
class Mets
{
    /**
     * @var int
     *
     * @ORM\Column(name="idmets", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idmets;

    /**
     * @var int
     *
     * @ORM\Column(name="idrecette", type="bigint", nullable=false)
     */
    private $idrecette;

    /**
     * @var int
     *
     * @ORM\Column(name="idcategorie", type="bigint", nullable=false)
     */
    private $idcategorie;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nommets", type="string", length=32, nullable=true, options={"fixed"=true})
     */
    private $nommets;

    /**
     * @var int|null
     *
     * @ORM\Column(name="caloriemets", type="bigint", nullable=true)
     */
    private $caloriemets;



    /**
     * Get idmets.
     *
     * @return int
     */
    public function getIdmets()
    {
        return $this->idmets;
    }

    /**
     * Set idrecette.
     *
     * @param int $idrecette
     *
     * @return Mets
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
     * Set idcategorie.
     *
     * @param int $idcategorie
     *
     * @return Mets
     */
    public function setIdcategorie($idcategorie)
    {
        $this->idcategorie = $idcategorie;

        return $this;
    }

    /**
     * Get idcategorie.
     *
     * @return int
     */
    public function getIdcategorie()
    {
        return $this->idcategorie;
    }

    /**
     * Set nommets.
     *
     * @param string|null $nommets
     *
     * @return Mets
     */
    public function setNommets($nommets = null)
    {
        $this->nommets = $nommets;

        return $this;
    }

    /**
     * Get nommets.
     *
     * @return string|null
     */
    public function getNommets()
    {
        return $this->nommets;
    }

    /**
     * Set caloriemets.
     *
     * @param int|null $caloriemets
     *
     * @return Mets
     */
    public function setCaloriemets($caloriemets = null)
    {
        $this->caloriemets = $caloriemets;

        return $this;
    }

    /**
     * Get caloriemets.
     *
     * @return int|null
     */
    public function getCaloriemets()
    {
        return $this->caloriemets;
    }
}
