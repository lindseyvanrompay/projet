<?php

namespace ProjetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Statistiques
 *
 * @ORM\Table(name="STATISTIQUES")
 * @ORM\Entity
 */
class Statistiques
{
    /**
     * @var string
     *
     * @ORM\Column(name="AVISSANTEGROUPE", type="text", length=65535, nullable=true)
     */
    private $avissantegroupe;

    /**
     * @var string
     *
     * @ORM\Column(name="AVISAPPORTCALORIQUEGROUPE", type="text", length=65535, nullable=true)
     */
    private $avisapportcaloriquegroupe;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDSTATISTIQUE", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idstatistique;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="ProjetBundle\Entity\Dieteticien", mappedBy="idstatistique")
     */
    private $iddieteticien;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->iddieteticien = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set avissantegroupe
     *
     * @param string $avissantegroupe
     *
     * @return Statistiques
     */
    public function setAvissantegroupe($avissantegroupe)
    {
        $this->avissantegroupe = $avissantegroupe;

        return $this;
    }

    /**
     * Get avissantegroupe
     *
     * @return string
     */
    public function getAvissantegroupe()
    {
        return $this->avissantegroupe;
    }

    /**
     * Set avisapportcaloriquegroupe
     *
     * @param string $avisapportcaloriquegroupe
     *
     * @return Statistiques
     */
    public function setAvisapportcaloriquegroupe($avisapportcaloriquegroupe)
    {
        $this->avisapportcaloriquegroupe = $avisapportcaloriquegroupe;

        return $this;
    }

    /**
     * Get avisapportcaloriquegroupe
     *
     * @return string
     */
    public function getAvisapportcaloriquegroupe()
    {
        return $this->avisapportcaloriquegroupe;
    }

    /**
     * Get idstatistique
     *
     * @return integer
     */
    public function getIdstatistique()
    {
        return $this->idstatistique;
    }

    /**
     * Add iddieteticien
     *
     * @param \ProjetBundle\Entity\Dieteticien $iddieteticien
     *
     * @return Statistiques
     */
    public function addIddieteticien(\ProjetBundle\Entity\Dieteticien $iddieteticien)
    {
        $this->iddieteticien[] = $iddieteticien;

        return $this;
    }

    /**
     * Remove iddieteticien
     *
     * @param \ProjetBundle\Entity\Dieteticien $iddieteticien
     */
    public function removeIddieteticien(\ProjetBundle\Entity\Dieteticien $iddieteticien)
    {
        $this->iddieteticien->removeElement($iddieteticien);
    }

    /**
     * Get iddieteticien
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIddieteticien()
    {
        return $this->iddieteticien;
    }
}
