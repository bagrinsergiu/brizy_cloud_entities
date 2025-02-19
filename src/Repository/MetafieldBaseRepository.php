<?php

declare(strict_types=1);

namespace Brizy\Bundle\CloudEntitiesBundle\Repository;

use Brizy\Bundle\CloudEntitiesBundle\Entity\Common\MetafieldBase;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method MetafieldBase|null find($id, $lockMode = null, $lockVersion = null)
 * @method MetafieldBase|null findOneBy(array $criteria, array $orderBy = null)
 * @method MetafieldBase[]    findAll()
 * @method MetafieldBase[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MetafieldBaseRepository extends EntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MetafieldBase::class);
    }
}
