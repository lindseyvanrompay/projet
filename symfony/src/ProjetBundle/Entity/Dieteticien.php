<?php

namespace ProjetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dieteticien
 *
 * @ORM\Table(name="dieteticien")
 * @ORM\Entity
 */
class Dieteticien
{
    /**
     * @var int
     *
     * @ORM\Column(name="iddieteticien", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iddieteticien;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nomdieteticien", type="string", length=32, nullable=true, options={"fixed"=true})
     */
    private $nomdieteticien;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prenomdieteticien", type="string", length=32, nullable=true, options={"fixed"=true})
     */
    private $prenomdieteticien;

    /**
     * @var string|null
     *
     * @ORM\Column(name="adressemaildieteticien", type="string", length=128, nullable=true, options={"fixed"=true})
     */
    private $adressemaildieteticien;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pseudodieteticien", type="string", length=16, nullable=true, options={"fixed"=true})
     */
    private $pseudodieteticien;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mdpdieteticien", type="string", length=16, nullable=true, options={"fixed"=true})
     */
    private $mdpdieteticien;



    /**
     * Get iddieteticien.
     *
     * @return int
     */
    public function getIddieteticien()
    {
        return $this->iddieteticien;
    }

    /**
     * Set nomdieteticien.
     *
     * @param string|null $nomdieteticien
     *
     * @return Dieteticien
     */
    public function setNomdieteticien($nomdieteticien = null)
    {
        $this->nomdieteticien = $nomdieteticien;

        return $this;
    }

    /**
     * Get nomdieteticien.
     *
     * @return string|null
     */
    public function getNomdieteticien()
    {
        return $this->nomdieteticien;
    }

    /**
     * Set prenomdieteticien.
     *
     * @param string|null $prenomdieteticien
     *
     * @return Dieteticien
     */
    public function setPrenomdieteticien($prenomdieteticien = null)
    {
        $this->prenomdieteticien = $prenomdieteticien;

        return $this;
    }

    /**
     * Get prenomdieteticien.
     *
     * @return string|null
     */
    public function getPrenomdieteticien()
    {
        return $this->prenomdieteticien;
    }

    /**
     * Set adressemaildieteticien.
     *
     * @param string|null $adressemaildieteticien
     *
     * @return Dieteticien
     */
    public function setAdressemaildieteticien($adressemaildieteticien = null)
    {
        $this->adressemaildieteticien = $adressemaildieteticien;

        return $this;
    }

    /**
     * Get adressemaildieteticien.
     *
     * @return string|null
     */
    public function getAdressemaildieteticien()
    {
        return $this->adressemaildieteticien;
    }

    /**
     * Set pseudodieteticien.
     *
     * @param string|null $pseudodieteticien
     *
     * @return Dieteticien
     */
    public function setPseudodieteticien($pseudodieteticien = null)
    {
        $this->pseudodieteticien = $pseudodieteticien;

        return $this;
    }

    /**
     * Get pseudodieteticien.
     *
     * @return string|null
     */
    public function getPseudodieteticien()
    {
        return $this->pseudodieteticien;
    }

    /**
     * Set mdpdieteticien.
     *
     * @param string|null $mdpdieteticien
     *
     * @return Dieteticien
     */
    public function setMdpdieteticien($mdpdieteticien = null)
    {
        $this->mdpdieteticien = $mdpdieteticien;

        return $this;
    }

    /**
     * Get mdpdieteticien.
     *
     * @return string|null
     */
    public function getMdpdieteticien()
    {
        return $this->mdpdieteticien;
    }
}
