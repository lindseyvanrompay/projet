<?php

namespace ProjetBundle\Entity;

use Doctrine\ORM\EntityRepository;

class UtilisateurRepository extends EntityRepository
{
    public function connexion($login, $password)
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT user
                FROM ProjetBundle:Utilisateur user
                WHERE user.pseudoutilisateur = :login
                AND user.mdputilisateur = :password'
            )
            ->setParameter('login', $login)
            ->setParameter('password', $password)
            ->getResult();
    }
}
