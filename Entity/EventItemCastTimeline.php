<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EventItemCastTimeline.
 *
 * @ORM\Table(name="event_item_cast_timeline", indexes={@ORM\Index(name="idx_cf6336829129b600", columns={"action_timeline"})})
 * @ORM\Entity
 */
class EventItemCastTimeline
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="event_item_cast_timeline_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var ActionTimeline
     *
     * @ORM\ManyToOne(targetEntity="ActionTimeline")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="action_timeline", referencedColumnName="pk")
     * })
     */
    private $actionTimeline;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getActionTimeline(): ?ActionTimeline
    {
        return $this->actionTimeline;
    }

    public function setActionTimeline(?ActionTimeline $actionTimeline): self
    {
        $this->actionTimeline = $actionTimeline;

        return $this;
    }
}
