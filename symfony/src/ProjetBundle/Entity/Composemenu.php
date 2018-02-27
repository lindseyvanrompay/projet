<?php

namespace ProjetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Composemenu
 *
 * @ORM\Table(name="composemenu", indexes={@ORM\Index(name="fk_composemenu_menu", columns={"idmenu"})})
 * @ORM\Entity
 */
class Composemenu
{
    /**
     * @var int
     *
     * @ORM\Column(name="idmets", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idmets;

    /**
     * @var int
     *
     * @ORM\Column(name="idmenu", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idmenu;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quantitemets", type="bigint", nullable=true)
     */
    private $quantitemets;



    /**
     * Set idmets.
     *
     * @param int $idmets
     *
     * @return Composemenu
     */
    public function setIdmets($idmets)
    {
        $this->idmets = $idmets;

        return $this;
    }

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
     * Set idmenu.
     *
     * @param int $idmenu
     *
     * @return Composemenu
     */
    public function setIdmenu($idmenu)
    {
        $this->idmenu = $idmenu;

        return $this;
    }

    /**
     * Get idmenu.
     *
     * @return int
     */
    public function getIdmenu()
    {
        return $this->idmenu;
    }

    /**
     * Set quantitemets.
     *
     * @param int|null $quantitemets
     *
     * @return Composemenu
     */
    public function setQuantitemets($quantitemets = null)
    {
        $this->quantitemets = $quantitemets;

        return $this;
    }

    /**
     * Get quantitemets.
     *
     * @return int|null
     */
    public function getQuantitemets()
    {
        return $this->quantitemets;
    }
}
