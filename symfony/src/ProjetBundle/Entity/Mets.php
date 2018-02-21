<?php

namespace ProjetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mets
 *
 * @ORM\Table(name="METS", uniqueConstraints={@ORM\UniqueConstraint(name="I_FK_METS_RECETTE", columns={"IDRECETTE"})}, indexes={@ORM\Index(name="I_FK_METS_CATEGORIE", columns={"IDCATEGORIE"})})
 * @ORM\Entity
 */
class Mets
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDMETS", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idmets;

    /**
     * @var string
     *
     * @ORM\Column(name="NOMMETS", type="text", length=255, nullable=true)
     */
    private $nommets;

    /**
     * @var integer
     *
     * @ORM\Column(name="CALORIEMETS", type="bigint", nullable=true)
     */
    private $caloriemets;

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
     * @var \Categorie
     *
     * @ORM\ManyToOne(targetEntity="Categorie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDCATEGORIE", referencedColumnName="IDCATEGORIE")
     * })
     */
    private $idcategorie;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Menu", inversedBy="idmets")
     * @ORM\JoinTable(name="composemenu",
     *   joinColumns={
     *     @ORM\JoinColumn(name="IDMETS", referencedColumnName="IDMETS")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="IDMENU", referencedColumnName="IDMENU")
     *   }
     * )
     */
    private $idmenu;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idmenu = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set nommets
     *
     * @param string $nommets
     *
     * @return Mets
     */
    public function setNommets($nommets)
    {
        $this->nommets = $nommets;

        return $this;
    }

    /**
     * Get nommets
     *
     * @return string
     */
    public function getNommets()
    {
        return $this->nommets;
    }

    /**
     * Set caloriemets
     *
     * @param integer $caloriemets
     *
     * @return Mets
     */
    public function setCaloriemets($caloriemets)
    {
        $this->caloriemets = $caloriemets;

        return $this;
    }

    /**
     * Get caloriemets
     *
     * @return integer
     */
    public function getCaloriemets()
    {
        return $this->caloriemets;
    }

    /**
     * Get idmets
     *
     * @return integer
     */
    public function getIdmets()
    {
        return $this->idmets;
    }

    /**
     * Set idrecette
     *
     * @param \ProjetBundle\Entity\Recette $idrecette
     *
     * @return Mets
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

    /**
     * Set idcategorie
     *
     * @param \ProjetBundle\Entity\Categorie $idcategorie
     *
     * @return Mets
     */
    public function setIdcategorie(\ProjetBundle\Entity\Categorie $idcategorie = null)
    {
        $this->idcategorie = $idcategorie;

        return $this;
    }

    /**
     * Get idcategorie
     *
     * @return \ProjetBundle\Entity\Categorie
     */
    public function getIdcategorie()
    {
        return $this->idcategorie;
    }

    /**
     * Add idmenu
     *
     * @param \ProjetBundle\Entity\Menu $idmenu
     *
     * @return Mets
     */
    public function addIdmenu(\ProjetBundle\Entity\Menu $idmenu)
    {
        $this->idmenu[] = $idmenu;

        return $this;
    }

    /**
     * Remove idmenu
     *
     * @param \ProjetBundle\Entity\Menu $idmenu
     */
    public function removeIdmenu(\ProjetBundle\Entity\Menu $idmenu)
    {
        $this->idmenu->removeElement($idmenu);
    }

    /**
     * Get idmenu
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdmenu()
    {
        return $this->idmenu;
    }
}
