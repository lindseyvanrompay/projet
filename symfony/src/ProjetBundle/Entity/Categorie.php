<?php

namespace ProjetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categorie
 *
 * @ORM\Table(name="categorie")
 * @ORM\Entity
 */
class Categorie
{
    /**
     * @var int
     *
     * @ORM\Column(name="idcategorie", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcategorie;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nomcategorie", type="string", length=32, nullable=true, options={"fixed"=true})
     */
    private $nomcategorie;



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
     * Set nomcategorie.
     *
     * @param string|null $nomcategorie
     *
     * @return Categorie
     */
    public function setNomcategorie($nomcategorie = null)
    {
        $this->nomcategorie = $nomcategorie;

        return $this;
    }

    /**
     * Get nomcategorie.
     *
     * @return string|null
     */
    public function getNomcategorie()
    {
        return $this->nomcategorie;
    }
}
