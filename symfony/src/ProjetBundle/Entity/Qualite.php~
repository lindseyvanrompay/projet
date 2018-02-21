<?php

namespace ProjetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Qualite
 *
 * @ORM\Table(name="QUALITE", indexes={@ORM\Index(name="d", columns={"IDSTATISTIQUE"}), @ORM\Index(name="I_FK_QUALITE_UTILISATEUR", columns={"IDUTILISATEUR"})})
 * @ORM\Entity
 */
class Qualite
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDQUALITE", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idqualite;

    /**
     * @var string
     *
     * @ORM\Column(name="AVISSANTE", type="text", length=65535, nullable=true)
     */
    private $avissante;

    /**
     * @var string
     *
     * @ORM\Column(name="AVISAPPORTCALORIQUE", type="text", length=65535, nullable=true)
     */
    private $avisapportcalorique;

    /**
     * @var string
     *
     * @ORM\Column(name="CARENCE", type="text", length=65535, nullable=true)
     */
    private $carence;

    /**
     * @var \Statistiques
     *
     * @ORM\ManyToOne(targetEntity="Statistiques")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDSTATISTIQUE", referencedColumnName="IDSTATISTIQUE")
     * })
     */
    private $idstatistique;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDUTILISATEUR", referencedColumnName="IDUTILISATEUR")
     * })
     */
    private $idutilisateur;



    /**
     * Set avissante
     *
     * @param string $avissante
     *
     * @return Qualite
     */
    public function setAvissante($avissante)
    {
        $this->avissante = $avissante;

        return $this;
    }

    /**
     * Get avissante
     *
     * @return string
     */
    public function getAvissante()
    {
        return $this->avissante;
    }

    /**
     * Set avisapportcalorique
     *
     * @param string $avisapportcalorique
     *
     * @return Qualite
     */
    public function setAvisapportcalorique($avisapportcalorique)
    {
        $this->avisapportcalorique = $avisapportcalorique;

        return $this;
    }

    /**
     * Get avisapportcalorique
     *
     * @return string
     */
    public function getAvisapportcalorique()
    {
        return $this->avisapportcalorique;
    }

    /**
     * Set carence
     *
     * @param string $carence
     *
     * @return Qualite
     */
    public function setCarence($carence)
    {
        $this->carence = $carence;

        return $this;
    }

    /**
     * Get carence
     *
     * @return string
     */
    public function getCarence()
    {
        return $this->carence;
    }

    /**
     * Get idqualite
     *
     * @return integer
     */
    public function getIdqualite()
    {
        return $this->idqualite;
    }

    /**
     * Set idstatistique
     *
     * @param \ProjetBundle\Entity\Statistiques $idstatistique
     *
     * @return Qualite
     */
    public function setIdstatistique(\ProjetBundle\Entity\Statistiques $idstatistique = null)
    {
        $this->idstatistique = $idstatistique;

        return $this;
    }

    /**
     * Get idstatistique
     *
     * @return \ProjetBundle\Entity\Statistiques
     */
    public function getIdstatistique()
    {
        return $this->idstatistique;
    }

    /**
     * Set idutilisateur
     *
     * @param \ProjetBundle\Entity\Utilisateur $idutilisateur
     *
     * @return Qualite
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
}
