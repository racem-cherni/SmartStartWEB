<?php

namespace OffreBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * ClubRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class SkillRepository extends \Doctrine\ORM\EntityRepository
{

    public function getSkillname($id) {
        $q = $this->getEntityManager()
            ->createQuery("select o from OffreBundle:Skills o where o.id= :id")
            ->setParameter('id', $id);

        return $query = $q->getResult();
    }



}
