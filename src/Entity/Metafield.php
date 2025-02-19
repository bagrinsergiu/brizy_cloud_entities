<?php

declare(strict_types=1);

namespace Brizy\Bundle\CloudEntitiesBundle\Entity;

use Brizy\Bundle\CloudEntitiesBundle\Entity\Common\Traits\NodeableEntity;
use Brizy\Bundle\CloudEntitiesBundle\Repository\MetafieldRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\UniqueConstraint;
use Gedmo\Timestampable\Traits\TimestampableEntity;

#[ORM\Table(name: 'metafield')]
#[ORM\Entity(repositoryClass: MetafieldRepository::class, readOnly: true)]
class Metafield
{
    use TimestampableEntity;
    use NodeableEntity;

    final public const TYPE_VARCHAR = 'varchar';

    final public const TYPE_INT = 'int';

    final public const TYPE_TEXT = 'text';

    final public const TYPES = [
        self::TYPE_INT,
        self::TYPE_TEXT,
        self::TYPE_VARCHAR,
    ];

    /**
     * The unique numeric identifier for the Node
     */
    #[ORM\Column(name: 'id', type: 'integer')]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'AUTO')]
    private ?int $id = null;

    /**
     * @var string
     */
    #[ORM\Column(name: 'name', type: 'string')]
    protected $name;

    /**
     * @var string
     */
    #[ORM\Column(name: 'type', type: 'string', options: ['default' => 'int'])]
    protected $type = self::TYPE_INT;

    /**
     * @var string
     */
    protected $value;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param $name
     *
     * @return $this
     */
    public function setName($name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param $type
     *
     * @return $this
     */
    public function setType($type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param mixed $value
     */
    public function setValue($value): void
    {
        $this->value = $value;
    }
}
