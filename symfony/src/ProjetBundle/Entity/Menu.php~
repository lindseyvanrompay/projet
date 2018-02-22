<?php

namespace ProjetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Menu
 *
 * @ORM\Table(name="MENU", indexes={@ORM\Index(name="I_FK_MENU_UTILISATEUR", columns={"IDUTILISATEUR"})})
 * @ORM\Entity
 */
class Menu
{
    /**
     * @var string
     *
     * @ORM\Column(name="NOMMENU", type="text", length=255, nullable=true)
     */
    private $nommenu;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDMENU", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idmenu;

    /**
     * @var \ProjetBundle\Entity\Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="ProjetBundle\Entity\Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDUTILISATEUR", referencedColumnName="IDUTILISATEUR")
     * })
     */
    private $idutilisateur;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="ProjetBundle\Entity\Mets", mappedBy="idmenu")
     */
    private $idmets;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idmets = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set nommenu
     *
     * @param string $nommenu
     *
     * @return Menu
     */
    public function setNommenu($nommenu)
    {
        $this->nommenu = $nommenu;

        return $this;
    }

    /**
     * Get nommenu
     *
     * @return string
     */
    public function getNommenu()
    {
        return $this->nommenu;
    }

    /**
     * Get idmenu
     *
     * @return integer
     */
    public function getIdmenu()
    {
        return $this->idmenu;
    }

    /**
     * Set idutilisateur
     *
     * @param \ProjetBundle\Entity\Utilisateur $idutilisateur
     *
     * @return Menu
     */
    public function setIdutilisateur(\ProjetBundle\Entity\Utilisateur $idutilisateur = null)
    {
        $this->idutilisateur = $idutilisateur;

        return $this;
    }

    /**
     * Get idutilisateur
     *
     * @return \ProjetBundle\Entity\Utilisateur
     */
    public function getIdutilisateur()
    {
        return $this->idutilisateur;
    }

    /**
     * Add idmet
     *
     * @param \ProjetBundle\Entity\Mets $idmet
     *
     * @return Menu
     */
    public function addIdmet(\ProjetBundle\Entity\Mets $idmet)
    {
        $this->idmets[] = $idmet;

        return $this;
    }

    /**
     * Remove idmet
     *
     * @param \ProjetBundle\Entity\Mets $idmet
     */
    public function removeIdmet(\ProjetBundle\Entity\Mets $idmet)
    {
        $this->idmets->removeElement($idmet);
    }

    /**
     * Get idmets
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdmets()
    {
        return $this->idmets;
    }
}
