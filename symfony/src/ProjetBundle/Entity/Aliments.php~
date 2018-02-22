<?php

namespace ProjetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Aliments
 *
 * @ORM\Table(name="ALIMENTS")
 * @ORM\Entity
 */
class Aliments
{
    /**
     * @var string
     *
     * @ORM\Column(name="NOMALIMENT", type="text", length=255, nullable=true)
     */
    private $nomaliment;

    /**
     * @var integer
     *
     * @ORM\Column(name="CALORIEALIMENT", type="bigint", nullable=true)
     */
    private $caloriealiment;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDALIMENT", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idaliment;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="ProjetBundle\Entity\Recette", inversedBy="idaliment")
     * @ORM\JoinTable(name="composerecette",
     *   joinColumns={
     *     @ORM\JoinColumn(name="IDALIMENT", referencedColumnName="IDALIMENT")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="IDRECETTE", referencedColumnName="IDRECETTE")
     *   }
     * )
     */
    private $idrecette;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idrecette = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set nomaliment
     *
     * @param string $nomaliment
     *
     * @return Aliments
     */
    public function setNomaliment($nomaliment)
    {
        $this->nomaliment = $nomaliment;

        return $this;
    }

    /**
     * Get nomaliment
     *
     * @return string
     */
    public function getNomaliment()
    {
        return $this->nomaliment;
    }

    /**
     * Set caloriealiment
     *
     * @param integer $caloriealiment
     *
     * @return Aliments
     */
    public function setCaloriealiment($caloriealiment)
    {
        $this->caloriealiment = $caloriealiment;

        return $this;
    }

    /**
     * Get caloriealiment
     *
     * @return integer
     */
    public function getCaloriealiment()
    {
        return $this->caloriealiment;
    }

    /**
     * Get idaliment
     *
     * @return integer
     */
    public function getIdaliment()
    {
        return $this->idaliment;
    }

    /**
     * Add idrecette
     *
     * @param \ProjetBundle\Entity\Recette $idrecette
     *
     * @return Aliments
     */
    public function addIdrecette(\ProjetBundle\Entity\Recette $idrecette)
    {
        $this->idrecette[] = $idrecette;

        return $this;
    }

    /**
     * Remove idrecette
     *
     * @param \ProjetBundle\Entity\Recette $idrecette
     */
    public function removeIdrecette(\ProjetBundle\Entity\Recette $idrecette)
    {
        $this->idrecette->removeElement($idrecette);
    }

    /**
     * Get idrecette
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdrecette()
    {
        return $this->idrecette;
    }
}
