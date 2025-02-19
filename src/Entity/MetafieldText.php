<?php

declare(strict_types=1);

namespace Brizy\Bundle\CloudEntitiesBundle\Entity;

use Brizy\Bundle\CloudEntitiesBundle\Entity\Common\MetafieldBase;
use Brizy\Bundle\CloudEntitiesBundle\Repository\MetafieldTextRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\UniqueConstraint;

#[ORM\Table(name: 'metafield__text')]
#[ORM\Entity(repositoryClass: MetafieldTextRepository::class, readOnly: true)]
class MetafieldText extends MetafieldBase
{
    /**
     * @var string
     */
    #[ORM\Column(name: 'value', type: 'text')]
    protected $value;

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param $value
     *
     * @return $this
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }
}
