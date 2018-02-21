<?php

namespace ProjetBundle\Entity;

use Doctrine\ORM\EntityRepository;

class UtilisateurRepository extends EntityRepository
{
    public function findMyUser()
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT u FROM ProjetBundle:Utilisateur u'
            )
            ->getResult();
    }
}
