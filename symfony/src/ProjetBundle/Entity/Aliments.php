<?php

namespace ProjetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Aliments
 *
 * @ORM\Table(name="aliments")
 * @ORM\Entity(repositoryClass="ProjetBundle\Entity\AlimentRepository")
 */
class Aliments
{
    /**
     * @var int
     *
     * @ORM\Column(name="idaliment", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idaliment;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nomaliment", type="string", length=32, nullable=true, options={"fixed"=true})
     */
    private $nomaliment;

    /**
     * @var int|null
     *
     * @ORM\Column(name="caloriealiment", type="bigint", nullable=true)
     */
    private $caloriealiment;



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
     * Set nomaliment.
     *
     * @param string|null $nomaliment
     *
     * @return Aliments
     */
    public function setNomaliment($nomaliment = null)
    {
        $this->nomaliment = $nomaliment;

        return $this;
    }

    /**
     * Get nomaliment.
     *
     * @return string|null
     */
    public function getNomaliment()
    {
        return $this->nomaliment;
    }

    /**
     * Set caloriealiment.
     *
     * @param int|null $caloriealiment
     *
     * @return Aliments
     */
    public function setCaloriealiment($caloriealiment = null)
    {
        $this->caloriealiment = $caloriealiment;

        return $this;
    }

    /**
     * Get caloriealiment.
     *
     * @return int|null
     */
    public function getCaloriealiment()
    {
        return $this->caloriealiment;
    }
}
