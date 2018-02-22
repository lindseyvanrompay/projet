<?php

namespace ProjetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categorie
 *
 * @ORM\Table(name="CATEGORIE")
 * @ORM\Entity
 */
class Categorie
{
    /**
     * @var string
     *
     * @ORM\Column(name="NOMCATEGORIE", type="text", length=255, nullable=true)
     */
    private $nomcategorie;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDCATEGORIE", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcategorie;



    /**
     * Set nomcategorie
     *
     * @param string $nomcategorie
     *
     * @return Categorie
     */
    public function setNomcategorie($nomcategorie)
    {
        $this->nomcategorie = $nomcategorie;

        return $this;
    }

    /**
     * Get nomcategorie
     *
     * @return string
     */
    public function getNomcategorie()
    {
        return $this->nomcategorie;
    }

    /**
     * Get idcategorie
     *
     * @return integer
     */
    public function getIdcategorie()
    {
        return $this->idcategorie;
    }
}
