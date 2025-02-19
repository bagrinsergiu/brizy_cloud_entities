<?php

declare(strict_types=1);

namespace Brizy\Bundle\CloudEntitiesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Loggable\Entity\LogEntry;

#[ORM\Table(name: 'revision')]
#[ORM\Entity(repositoryClass: \Brizy\Bundle\CloudEntitiesBundle\Repository\RevisionRepository::class, readOnly: true)]
class Revision extends LogEntry
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'object_id', type: 'integer', nullable: true)]
    protected $objectId;
}
