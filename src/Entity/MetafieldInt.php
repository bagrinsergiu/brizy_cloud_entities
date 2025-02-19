<?php

declare(strict_types=1);

namespace Brizy\Bundle\CloudEntitiesBundle\Entity;

use Brizy\Bundle\CloudEntitiesBundle\Entity\Common\MetafieldBase;
use Brizy\Bundle\CloudEntitiesBundle\Repository\MetafieldIntRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\UniqueConstraint;

#[ORM\Table(name: 'metafield__int')]
#[ORM\Entity(repositoryClass: MetafieldIntRepository::class, readOnly: true)]
class MetafieldInt extends MetafieldBase
{
    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param $value
     */
    public function setValue($value): MetafieldInt
    {
        $this->value = $value;

        return $this;
    }
}
