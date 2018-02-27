<?php

namespace ProjetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Composerepas
 *
 * @ORM\Table(name="composerepas", indexes={@ORM\Index(name="fk_composerepas_boisson", columns={"idboisson"}), @ORM\Index(name="fk_composerepas_menu", columns={"idmenu"})})
 * @ORM\Entity
 */
class Composerepas
{
    /**
     * @var int
     *
     * @ORM\Column(name="idrepas", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idrepas;

    /**
     * @var int
     *
     * @ORM\Column(name="idboisson", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idboisson;

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
     * @ORM\Column(name="quantiteboisson", type="bigint", nullable=true)
     */
    private $quantiteboisson;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quantitemenu", type="bigint", nullable=true)
     */
    private $quantitemenu;



    /**
     * Set idrepas.
     *
     * @param int $idrepas
     *
     * @return Composerepas
     */
    public function setIdrepas($idrepas)
    {
        $this->idrepas = $idrepas;

        return $this;
    }

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
     * Set idboisson.
     *
     * @param int $idboisson
     *
     * @return Composerepas
     */
    public function setIdboisson($idboisson)
    {
        $this->idboisson = $idboisson;

        return $this;
    }

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
     * Set idmenu.
     *
     * @param int $idmenu
     *
     * @return Composerepas
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
     * Set quantiteboisson.
     *
     * @param int|null $quantiteboisson
     *
     * @return Composerepas
     */
    public function setQuantiteboisson($quantiteboisson = null)
    {
        $this->quantiteboisson = $quantiteboisson;

        return $this;
    }

    /**
     * Get quantiteboisson.
     *
     * @return int|null
     */
    public function getQuantiteboisson()
    {
        return $this->quantiteboisson;
    }

    /**
     * Set quantitemenu.
     *
     * @param int|null $quantitemenu
     *
     * @return Composerepas
     */
    public function setQuantitemenu($quantitemenu = null)
    {
        $this->quantitemenu = $quantitemenu;

        return $this;
    }

    /**
     * Get quantitemenu.
     *
     * @return int|null
     */
    public function getQuantitemenu()
    {
        return $this->quantitemenu;
    }
}
