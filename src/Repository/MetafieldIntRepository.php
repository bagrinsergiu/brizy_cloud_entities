<?php

declare(strict_types=1);

namespace Brizy\Bundle\CloudEntitiesBundle\Repository;

use Brizy\Bundle\CloudEntitiesBundle\Entity\MetafieldInt;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method MetafieldInt|null find($id, $lockMode = null, $lockVersion = null)
 * @method MetafieldInt|null findOneBy(array $criteria, array $orderBy = null)
 * @method MetafieldInt[]    findAll()
 * @method MetafieldInt[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MetafieldIntRepository extends MetafieldValueRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MetafieldInt::class);
    }
}
