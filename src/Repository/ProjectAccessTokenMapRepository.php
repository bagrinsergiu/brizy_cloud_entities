<?php

declare(strict_types=1);

namespace Brizy\Bundle\CloudEntitiesBundle\Repository;

use Brizy\Bundle\CloudEntitiesBundle\Entity\ProjectAccessTokenMap;
use Doctrine\Persistence\ManagerRegistry;

class ProjectAccessTokenMapRepository extends EntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProjectAccessTokenMap::class);
    }
}
