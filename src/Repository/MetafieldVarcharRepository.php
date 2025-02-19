<?php

declare(strict_types=1);

namespace Brizy\Bundle\CloudEntitiesBundle\Repository;

use Brizy\Bundle\CloudEntitiesBundle\Entity\MetafieldVarchar;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method MetafieldVarchar|null find($id, $lockMode = null, $lockVersion = null)
 * @method MetafieldVarchar|null findOneBy(array $criteria, array $orderBy = null)
 * @method MetafieldVarchar[]    findAll()
 * @method MetafieldVarchar[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MetafieldVarcharRepository extends MetafieldValueRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MetafieldVarchar::class);
    }
}
