<?php

namespace GanemosMadridFirmasApoyoBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * FirmaRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class FirmaRepository extends EntityRepository {

    public function findAll() {
        return $this->createQueryBuilder("f");
    }

}
