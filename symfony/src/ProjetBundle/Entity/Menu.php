<?php

namespace ProjetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Menu
 *
 * @ORM\Table(name="menu", indexes={@ORM\Index(name="fk_menu_utilisateur", columns={"idutilisateur"})})
 * @ORM\Entity
 */
class Menu
{
    /**
     * @var int
     *
     * @ORM\Column(name="idmenu", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idmenu;

    /**
     * @var int
     *
     * @ORM\Column(name="idutilisateur", type="bigint", nullable=false)
     */
    private $idutilisateur;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nommenu", type="string", length=32, nullable=true, options={"fixed"=true})
     */
    private $nommenu;



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
     * Set idutilisateur.
     *
     * @param int $idutilisateur
     *
     * @return Menu
     */
    public function setIdutilisateur($idutilisateur)
    {
        $this->idutilisateur = $idutilisateur;

        return $this;
    }

    /**
     * Get idutilisateur.
     *
     * @return int
     */
    public function getIdutilisateur()
    {
        return $this->idutilisateur;
    }

    /**
     * Set nommenu.
     *
     * @param string|null $nommenu
     *
     * @return Menu
     */
    public function setNommenu($nommenu = null)
    {
        $this->nommenu = $nommenu;

        return $this;
    }

    /**
     * Get nommenu.
     *
     * @return string|null
     */
    public function getNommenu()
    {
        return $this->nommenu;
    }
}
