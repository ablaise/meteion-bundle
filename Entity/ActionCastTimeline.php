<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ActionCastTimeline.
 *
 * @ORM\Table(name="action_cast_timeline", indexes={@ORM\Index(name="idx_221d04d15e237e06", columns={"name"}), @ORM\Index(name="idx_221d04d1c244f8df", columns={"vfx"})})
 * @ORM\Entity
 */
class ActionCastTimeline
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="action_cast_timeline_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var Vfx
     *
     * @ORM\ManyToOne(targetEntity="Vfx")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="vfx", referencedColumnName="pk")
     * })
     */
    private $vfx;

    /**
     * @var ActionTimeline
     *
     * @ORM\ManyToOne(targetEntity="ActionTimeline")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="name", referencedColumnName="pk")
     * })
     */
    private $name;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getVfx(): ?Vfx
    {
        return $this->vfx;
    }

    public function setVfx(?Vfx $vfx): self
    {
        $this->vfx = $vfx;

        return $this;
    }

    public function getName(): ?ActionTimeline
    {
        return $this->name;
    }

    public function setName(?ActionTimeline $name): self
    {
        $this->name = $name;

        return $this;
    }
}
