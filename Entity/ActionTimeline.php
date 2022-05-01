<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ActionTimeline.
 *
 * @ORM\Table(name="action_timeline", indexes={@ORM\Index(name="idx_9129b60037ea74af", columns={"weapon_timeline"})})
 * @ORM\Entity
 */
class ActionTimeline
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="action_timeline_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="type", type="integer", nullable=true)
     */
    private $type;

    /**
     * @var int|null
     *
     * @ORM\Column(name="priority", type="integer", nullable=true)
     */
    private $priority;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="pause", type="boolean", nullable=true)
     */
    private $pause;

    /**
     * @var int|null
     *
     * @ORM\Column(name="stance", type="integer", nullable=true)
     */
    private $stance;

    /**
     * @var int|null
     *
     * @ORM\Column(name="slot", type="integer", nullable=true)
     */
    private $slot;

    /**
     * @var int|null
     *
     * @ORM\Column(name="look_at_mode", type="integer", nullable=true)
     */
    private $lookAtMode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="key", type="string", length=255, nullable=true)
     */
    private $key;

    /**
     * @var int|null
     *
     * @ORM\Column(name="action_timeline_idmode", type="integer", nullable=true)
     */
    private $actionTimelineIdmode;

    /**
     * @var int|null
     *
     * @ORM\Column(name="load_type", type="integer", nullable=true)
     */
    private $loadType;

    /**
     * @var int|null
     *
     * @ORM\Column(name="start_attach", type="integer", nullable=true)
     */
    private $startAttach;

    /**
     * @var int|null
     *
     * @ORM\Column(name="resident_pap", type="integer", nullable=true)
     */
    private $residentPap;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="resident", type="boolean", nullable=true)
     */
    private $resident;

    /**
     * @var int|null
     *
     * @ORM\Column(name="kill_upper", type="bigint", nullable=true)
     */
    private $killUpper;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_motion_canceled_by_moving", type="boolean", nullable=true)
     */
    private $isMotionCanceledByMoving;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_16", type="boolean", nullable=true)
     */
    private $column16;

    /**
     * @var int|null
     *
     * @ORM\Column(name="is_loop", type="integer", nullable=true)
     */
    private $isLoop;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_18", type="boolean", nullable=true)
     */
    private $column18;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_19", type="boolean", nullable=true)
     */
    private $column19;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_20", type="boolean", nullable=true)
     */
    private $column20;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_21", type="integer", nullable=true)
     */
    private $column21;

    /**
     * @var WeaponTimeline
     *
     * @ORM\ManyToOne(targetEntity="WeaponTimeline")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="weapon_timeline", referencedColumnName="pk")
     * })
     */
    private $weaponTimeline;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getType(): ?int
    {
        return $this->type;
    }

    public function setType(?int $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getPriority(): ?int
    {
        return $this->priority;
    }

    public function setPriority(?int $priority): self
    {
        $this->priority = $priority;

        return $this;
    }

    public function getPause(): ?bool
    {
        return $this->pause;
    }

    public function setPause(?bool $pause): self
    {
        $this->pause = $pause;

        return $this;
    }

    public function getStance(): ?int
    {
        return $this->stance;
    }

    public function setStance(?int $stance): self
    {
        $this->stance = $stance;

        return $this;
    }

    public function getSlot(): ?int
    {
        return $this->slot;
    }

    public function setSlot(?int $slot): self
    {
        $this->slot = $slot;

        return $this;
    }

    public function getLookAtMode(): ?int
    {
        return $this->lookAtMode;
    }

    public function setLookAtMode(?int $lookAtMode): self
    {
        $this->lookAtMode = $lookAtMode;

        return $this;
    }

    public function getKey(): ?string
    {
        return $this->key;
    }

    public function setKey(?string $key): self
    {
        $this->key = $key;

        return $this;
    }

    public function getActionTimelineIdmode(): ?int
    {
        return $this->actionTimelineIdmode;
    }

    public function setActionTimelineIdmode(?int $actionTimelineIdmode): self
    {
        $this->actionTimelineIdmode = $actionTimelineIdmode;

        return $this;
    }

    public function getLoadType(): ?int
    {
        return $this->loadType;
    }

    public function setLoadType(?int $loadType): self
    {
        $this->loadType = $loadType;

        return $this;
    }

    public function getStartAttach(): ?int
    {
        return $this->startAttach;
    }

    public function setStartAttach(?int $startAttach): self
    {
        $this->startAttach = $startAttach;

        return $this;
    }

    public function getResidentPap(): ?int
    {
        return $this->residentPap;
    }

    public function setResidentPap(?int $residentPap): self
    {
        $this->residentPap = $residentPap;

        return $this;
    }

    public function getResident(): ?bool
    {
        return $this->resident;
    }

    public function setResident(?bool $resident): self
    {
        $this->resident = $resident;

        return $this;
    }

    public function getKillUpper(): ?string
    {
        return $this->killUpper;
    }

    public function setKillUpper(?string $killUpper): self
    {
        $this->killUpper = $killUpper;

        return $this;
    }

    public function getIsMotionCanceledByMoving(): ?bool
    {
        return $this->isMotionCanceledByMoving;
    }

    public function setIsMotionCanceledByMoving(?bool $isMotionCanceledByMoving): self
    {
        $this->isMotionCanceledByMoving = $isMotionCanceledByMoving;

        return $this;
    }

    public function getColumn16(): ?bool
    {
        return $this->column16;
    }

    public function setColumn16(?bool $column16): self
    {
        $this->column16 = $column16;

        return $this;
    }

    public function getIsLoop(): ?int
    {
        return $this->isLoop;
    }

    public function setIsLoop(?int $isLoop): self
    {
        $this->isLoop = $isLoop;

        return $this;
    }

    public function getColumn18(): ?bool
    {
        return $this->column18;
    }

    public function setColumn18(?bool $column18): self
    {
        $this->column18 = $column18;

        return $this;
    }

    public function getColumn19(): ?bool
    {
        return $this->column19;
    }

    public function setColumn19(?bool $column19): self
    {
        $this->column19 = $column19;

        return $this;
    }

    public function getColumn20(): ?bool
    {
        return $this->column20;
    }

    public function setColumn20(?bool $column20): self
    {
        $this->column20 = $column20;

        return $this;
    }

    public function getColumn21(): ?int
    {
        return $this->column21;
    }

    public function setColumn21(?int $column21): self
    {
        $this->column21 = $column21;

        return $this;
    }

    public function getWeaponTimeline(): ?WeaponTimeline
    {
        return $this->weaponTimeline;
    }

    public function setWeaponTimeline(?WeaponTimeline $weaponTimeline): self
    {
        $this->weaponTimeline = $weaponTimeline;

        return $this;
    }
}
