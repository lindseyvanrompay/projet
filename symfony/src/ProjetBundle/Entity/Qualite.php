<?php

namespace ProjetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Qualite
 *
 * @ORM\Table(name="qualite", indexes={@ORM\Index(name="fk_qualite_statistiques", columns={"idstatistique"}), @ORM\Index(name="fk_qualite_utilisateur", columns={"idutilisateur"})})
 * @ORM\Entity
 */
class Qualite
{
    /**
     * @var int
     *
     * @ORM\Column(name="idqualite", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idqualite;

    /**
     * @var int
     *
     * @ORM\Column(name="idstatistique", type="bigint", nullable=false)
     */
    private $idstatistique;

    /**
     * @var int
     *
     * @ORM\Column(name="idutilisateur", type="bigint", nullable=false)
     */
    private $idutilisateur;

    /**
     * @var string|null
     *
     * @ORM\Column(name="avissante", type="string", length=255, nullable=true, options={"fixed"=true})
     */
    private $avissante;

    /**
     * @var string|null
     *
     * @ORM\Column(name="avisapportcalorique", type="string", length=255, nullable=true, options={"fixed"=true})
     */
    private $avisapportcalorique;

    /**
     * @var string|null
     *
     * @ORM\Column(name="carence", type="string", length=255, nullable=true, options={"fixed"=true})
     */
    private $carence;



    /**
     * Get idqualite.
     *
     * @return int
     */
    public function getIdqualite()
    {
        return $this->idqualite;
    }

    /**
     * Set idstatistique.
     *
     * @param int $idstatistique
     *
     * @return Qualite
     */
    public function setIdstatistique($idstatistique)
    {
        $this->idstatistique = $idstatistique;

        return $this;
    }

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
     * Set idutilisateur.
     *
     * @param int $idutilisateur
     *
     * @return Qualite
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
     * Set avissante.
     *
     * @param string|null $avissante
     *
     * @return Qualite
     */
    public function setAvissante($avissante = null)
    {
        $this->avissante = $avissante;

        return $this;
    }

    /**
     * Get avissante.
     *
     * @return string|null
     */
    public function getAvissante()
    {
        return $this->avissante;
    }

    /**
     * Set avisapportcalorique.
     *
     * @param string|null $avisapportcalorique
     *
     * @return Qualite
     */
    public function setAvisapportcalorique($avisapportcalorique = null)
    {
        $this->avisapportcalorique = $avisapportcalorique;

        return $this;
    }

    /**
     * Get avisapportcalorique.
     *
     * @return string|null
     */
    public function getAvisapportcalorique()
    {
        return $this->avisapportcalorique;
    }

    /**
     * Set carence.
     *
     * @param string|null $carence
     *
     * @return Qualite
     */
    public function setCarence($carence = null)
    {
        $this->carence = $carence;

        return $this;
    }

    /**
     * Get carence.
     *
     * @return string|null
     */
    public function getCarence()
    {
        return $this->carence;
    }
}
