<?php

namespace ProjetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Statistiques
 *
 * @ORM\Table(name="statistiques")
 * @ORM\Entity
 */
class Statistiques
{
    /**
     * @var int
     *
     * @ORM\Column(name="idstatistique", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idstatistique;

    /**
     * @var string|null
     *
     * @ORM\Column(name="avissantegroupe", type="string", length=255, nullable=true, options={"fixed"=true})
     */
    private $avissantegroupe;

    /**
     * @var string|null
     *
     * @ORM\Column(name="avisapportcaloriquegroupe", type="string", length=255, nullable=true, options={"fixed"=true})
     */
    private $avisapportcaloriquegroupe;



    /**
     * Get idstatistique.
     *
     * @return int
     */
    public function getIdstatistique()
    {
        return $this->idstatistique;
    }

    /**
     * Set avissantegroupe.
     *
     * @param string|null $avissantegroupe
     *
     * @return Statistiques
     */
    public function setAvissantegroupe($avissantegroupe = null)
    {
        $this->avissantegroupe = $avissantegroupe;

        return $this;
    }

    /**
     * Get avissantegroupe.
     *
     * @return string|null
     */
    public function getAvissantegroupe()
    {
        return $this->avissantegroupe;
    }

    /**
     * Set avisapportcaloriquegroupe.
     *
     * @param string|null $avisapportcaloriquegroupe
     *
     * @return Statistiques
     */
    public function setAvisapportcaloriquegroupe($avisapportcaloriquegroupe = null)
    {
        $this->avisapportcaloriquegroupe = $avisapportcaloriquegroupe;

        return $this;
    }

    /**
     * Get avisapportcaloriquegroupe.
     *
     * @return string|null
     */
    public function getAvisapportcaloriquegroupe()
    {
        return $this->avisapportcaloriquegroupe;
    }
}
