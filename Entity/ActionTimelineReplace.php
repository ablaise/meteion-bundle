<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ActionTimelineReplace.
 *
 * @ORM\Table(name="action_timeline_replace", indexes={@ORM\Index(name="idx_f7b5e5fc3f5dd4e5", columns={"old"}), @ORM\Index(name="idx_f7b5e5fc6be34445", columns={"new"})})
 * @ORM\Entity
 */
class ActionTimelineReplace
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="action_timeline_replace_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var ActionTimeline
     *
     * @ORM\ManyToOne(targetEntity="ActionTimeline")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="new", referencedColumnName="pk")
     * })
     */
    private $new;

    /**
     * @var ActionTimeline
     *
     * @ORM\ManyToOne(targetEntity="ActionTimeline")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="old", referencedColumnName="pk")
     * })
     */
    private $old;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getNew(): ?ActionTimeline
    {
        return $this->new;
    }

    public function setNew(?ActionTimeline $new): self
    {
        $this->new = $new;

        return $this;
    }

    public function getOld(): ?ActionTimeline
    {
        return $this->old;
    }

    public function setOld(?ActionTimeline $old): self
    {
        $this->old = $old;

        return $this;
    }
}
