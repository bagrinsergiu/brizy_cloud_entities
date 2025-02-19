<?php

declare(strict_types=1);

namespace Brizy\Bundle\CloudEntitiesBundle\Repository;

use Brizy\Bundle\CloudEntitiesBundle\Entity\Common\MetafieldBase;
use Brizy\Bundle\CloudEntitiesBundle\Entity\Metafield;
use Doctrine\Persistence\ManagerRegistry;

abstract class MetafieldValueRepository extends EntityRepository
{
    public function __construct(ManagerRegistry $registry, string $entityClass)
    {
        parent::__construct($registry, $entityClass);
    }

    public function getMetafieldValue(Metafield $metafield): ?MetafieldBase
    {
        return $this->findOneBy(['metafield' => $metafield]);
    }

    public function findAndRemoveByMetafield($metafield): void
    {
        $metafieldValue = $this->findOneBy(['metafield' => $metafield]);
        if ($metafieldValue) {
            $this->remove($metafieldValue);
        }
    }
}
