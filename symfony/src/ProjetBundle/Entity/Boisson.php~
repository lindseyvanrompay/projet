<?php

namespace ProjetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Boisson
 *
 * @ORM\Table(name="BOISSON", uniqueConstraints={@ORM\UniqueConstraint(name="I_FK_BOISSON_RECETTE", columns={"IDRECETTE"})})
 * @ORM\Entity
 */
class Boisson
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDBOISSON", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idboisson;

    /**
     * @var string
     *
     * @ORM\Column(name="NOMBOISSON", type="text", length=255, nullable=true)
     */
    private $nomboisson;

    /**
     * @var integer
     *
     * @ORM\Column(name="CALORIEBOISSON", type="bigint", nullable=true)
     */
    private $calorieboisson;

    /**
     * @var \Recette
     *
     * @ORM\ManyToOne(targetEntity="Recette")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDRECETTE", referencedColumnName="IDRECETTE")
     * })
     */
    private $idrecette;



    /**
     * Set nomboisson
     *
     * @param string $nomboisson
     *
     * @return Boisson
     */
    public function setNomboisson($nomboisson)
    {
        $this->nomboisson = $nomboisson;

        return $this;
    }

    /**
     * Get nomboisson
     *
     * @return string
     */
    public function getNomboisson()
    {
        return $this->nomboisson;
    }

    /**
     * Set calorieboisson
     *
     * @param integer $calorieboisson
     *
     * @return Boisson
     */
    public function setCalorieboisson($calorieboisson)
    {
        $this->calorieboisson = $calorieboisson;

        return $this;
    }

    /**
     * Get calorieboisson
     *
     * @return integer
     */
    public function getCalorieboisson()
    {
        return $this->calorieboisson;
    }

    /**
     * Get idboisson
     *
     * @return integer
     */
    public function getIdboisson()
    {
        return $this->idboisson;
    }

    /**
     * Set idrecette
     *
     * @param \ProjetBundle\Entity\Recette $idrecette
     *
     * @return Boisson
     */
    public function setIdrecette(\ProjetBundle\Entity\Recette $idrecette = null)
    {
        $this->idrecette = $idrecette;

        return $this;
    }

    /**
     * Get idrecette
     *
     * @return \ProjetBundle\Entity\Recette
     */
    public function getIdrecette()
    {
        return $this->idrecette;
    }
}
