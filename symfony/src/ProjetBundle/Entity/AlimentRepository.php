<?php

namespace ProjetBundle\Entity;

use Doctrine\ORM\EntityRepository;


class AlimentRepository extends EntityRepository
{
    public function chercherIngredient()
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT aliment.nomaliment
                FROM ProjetBundle:Aliments aliment'
            )
            ->getResult();
    }
}
