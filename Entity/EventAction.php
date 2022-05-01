<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EventAction.
 *
 * @ORM\Table(name="event_action", indexes={@ORM\Index(name="idx_7555fbc09d7b23b0", columns={"animation_0"}), @ORM\Index(name="idx_7555fbc0ea7c1326", columns={"animation_1"}), @ORM\Index(name="idx_7555fbc07375429c", columns={"animation_2"})})
 * @ORM\Entity
 */
class EventAction
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="event_action_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var int|null
     *
     * @ORM\Column(name="icon", type="integer", nullable=true)
     */
    private $icon;

    /**
     * @var int|null
     *
     * @ORM\Column(name="cast_time", type="integer", nullable=true)
     */
    private $castTime;

    /**
     * @var ActionTimeline
     *
     * @ORM\ManyToOne(targetEntity="ActionTimeline")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="animation_2", referencedColumnName="pk")
     * })
     */
    private $animation2;

    /**
     * @var ActionTimeline
     *
     * @ORM\ManyToOne(targetEntity="ActionTimeline")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="animation_1", referencedColumnName="pk")
     * })
     */
    private $animation1;

    /**
     * @var ActionTimeline
     *
     * @ORM\ManyToOne(targetEntity="ActionTimeline")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="animation_0", referencedColumnName="pk")
     * })
     */
    private $animation0;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getIcon(): ?int
    {
        return $this->icon;
    }

    public function setIcon(?int $icon): self
    {
        $this->icon = $icon;

        return $this;
    }

    public function getCastTime(): ?int
    {
        return $this->castTime;
    }

    public function setCastTime(?int $castTime): self
    {
        $this->castTime = $castTime;

        return $this;
    }

    public function getAnimation2(): ?ActionTimeline
    {
        return $this->animation2;
    }

    public function setAnimation2(?ActionTimeline $animation2): self
    {
        $this->animation2 = $animation2;

        return $this;
    }

    public function getAnimation1(): ?ActionTimeline
    {
        return $this->animation1;
    }

    public function setAnimation1(?ActionTimeline $animation1): self
    {
        $this->animation1 = $animation1;

        return $this;
    }

    public function getAnimation0(): ?ActionTimeline
    {
        return $this->animation0;
    }

    public function setAnimation0(?ActionTimeline $animation0): self
    {
        $this->animation0 = $animation0;

        return $this;
    }
}
