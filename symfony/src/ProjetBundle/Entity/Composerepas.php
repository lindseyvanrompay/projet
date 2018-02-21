<?php

namespace ProjetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Composerepas
 *
 * @ORM\Table(name="COMPOSEREPAS", indexes={@ORM\Index(name="I_FK_COMPOSEREPAS_REPAS", columns={"IDREPAS"}), @ORM\Index(name="I_FK_COMPOSEREPAS_BOISSON", columns={"IDBOISSON"}), @ORM\Index(name="I_FK_COMPOSEREPAS_MENU", columns={"IDMENU"})})
 * @ORM\Entity
 */
class Composerepas
{
    /**
     * @var integer
     *
     * @ORM\Column(name="QUANTITEBOISSON", type="bigint", nullable=true)
     */
    private $quantiteboisson;

    /**
     * @var integer
     *
     * @ORM\Column(name="QUANTITEMENU", type="bigint", nullable=true)
     */
    private $quantitemenu;

    /**
     * @var \Repas
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Repas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDREPAS", referencedColumnName="IDREPAS")
     * })
     */
    private $idrepas;

    /**
     * @var \Boisson
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Boisson")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDBOISSON", referencedColumnName="IDBOISSON")
     * })
     */
    private $idboisson;

    /**
     * @var \Menu
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Menu")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDMENU", referencedColumnName="IDMENU")
     * })
     */
    private $idmenu;



    /**
     * Set quantiteboisson
     *
     * @param integer $quantiteboisson
     *
     * @return Composerepas
     */
    public function setQuantiteboisson($quantiteboisson)
    {
        $this->quantiteboisson = $quantiteboisson;

        return $this;
    }

    /**
     * Get quantiteboisson
     *
     * @return integer
     */
    public function getQuantiteboisson()
    {
        return $this->quantiteboisson;
    }

    /**
     * Set quantitemenu
     *
     * @param integer $quantitemenu
     *
     * @return Composerepas
     */
    public function setQuantitemenu($quantitemenu)
    {
        $this->quantitemenu = $quantitemenu;

        return $this;
    }

    /**
     * Get quantitemenu
     *
     * @return integer
     */
    public function getQuantitemenu()
    {
        return $this->quantitemenu;
    }

    /**
     * Set idrepas
     *
     * @param \ProjetBundle\Entity\Repas $idrepas
     *
     * @return Composerepas
     */
    public function setIdrepas(\ProjetBundle\Entity\Repas $idrepas)
    {
        $this->idrepas = $idrepas;

        return $this;
    }

    /**
     * Get idrepas
     *
     * @return \ProjetBundle\Entity\Repas
     */
    public function getIdrepas()
    {
        return $this->idrepas;
    }

    /**
     * Set idboisson
     *
     * @param \ProjetBundle\Entity\Boisson $idboisson
     *
     * @return Composerepas
     */
    public function setIdboisson(\ProjetBundle\Entity\Boisson $idboisson)
    {
        $this->idboisson = $idboisson;

        return $this;
    }

    /**
     * Get idboisson
     *
     * @return \ProjetBundle\Entity\Boisson
     */
    public function getIdboisson()
    {
        return $this->idboisson;
    }

    /**
     * Set idmenu
     *
     * @param \ProjetBundle\Entity\Menu $idmenu
     *
     * @return Composerepas
     */
    public function setIdmenu(\ProjetBundle\Entity\Menu $idmenu)
    {
        $this->idmenu = $idmenu;

        return $this;
    }

    /**
     * Get idmenu
     *
     * @return \ProjetBundle\Entity\Menu
     */
    public function getIdmenu()
    {
        return $this->idmenu;
    }
}
