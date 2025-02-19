<?php

declare(strict_types=1);

namespace Brizy\Bundle\CloudEntitiesBundle\Entity\Common\Traits;

use Brizy\Bundle\CloudEntitiesBundle\Entity\Node;
use Doctrine\ORM\Mapping as ORM;

trait NodeableEntity
{
    /**
     * @var Node
     */
    #[ORM\ManyToOne(targetEntity: \Brizy\Bundle\CloudEntitiesBundle\Entity\Node::class, fetch: 'EAGER')]
    #[ORM\JoinColumn(name: 'node_id', referencedColumnName: 'id', onDelete: 'CASCADE', nullable: false)]
    protected $node;

    /**
     * @return Node
     */
    public function getNode()
    {
        return $this->node;
    }

    /**
     * @return $this
     */
    public function setNode(Node $node)
    {
        $this->node = $node;

        return $this;
    }
}
