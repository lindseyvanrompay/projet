<?php

namespace ProjetBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Symfony\Component\Validator\Tests\Fixtures\Entity;

class AbonnementRepository extends EntityRepository
{
    public function chercherAbonnement($id){
        return $this->getEntityManager()
            ->createQuery(
                'SELECT dateabonnement, nomdieteticien, prenomdieteticien
                FROM (ProjetBundle:Abonnement ab NATURAL JOIN ProjetBundle:Dieteticien)
                WHERE ab.idutilisateur = :id'
        )
            ->setParameter('id',$id)
            ->getResult();
        {

        }
    }
}
