<?php
/**
 * Created by PhpStorm.
 * User: wargl
 * Date: 27/02/2018
 * Time: 19:18
 */

namespace ProjetBundle\Entity;


use Doctrine\ORM\EntityRepository;

class SuiviRepository extends EntityRepository
{
    public function suivreDieteticien($id){
        return $this->getEntityManager()
            ->createQuery( // pas d'insert possibles
            )
            ->setParameter('id',$id)
            ->getResult();
    }
}