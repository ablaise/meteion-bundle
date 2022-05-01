<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Status.
 *
 * @ORM\Table(name="status", indexes={@ORM\Index(name="idx_7b00651c2b5f2d68", columns={"hit_effect"}), @ORM\Index(name="idx_7b00651cc244f8df", columns={"vfx"})})
 * @ORM\Entity
 */
class Status
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="status_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=818, nullable=true)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="string", length=818, nullable=true)
     */
    private $description;

    /**
     * @var int|null
     *
     * @ORM\Column(name="icon", type="integer", nullable=true)
     */
    private $icon;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_4", type="integer", nullable=true)
     */
    private $column4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="max_stacks", type="integer", nullable=true)
     */
    private $maxStacks;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_6", type="integer", nullable=true)
     */
    private $column6;

    /**
     * @var int|null
     *
     * @ORM\Column(name="category", type="integer", nullable=true)
     */
    private $category;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="lock_movement", type="boolean", nullable=true)
     */
    private $lockMovement;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_11", type="boolean", nullable=true)
     */
    private $column11;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="lock_actions", type="boolean", nullable=true)
     */
    private $lockActions;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="lock_control", type="boolean", nullable=true)
     */
    private $lockControl;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="transfiguration", type="boolean", nullable=true)
     */
    private $transfiguration;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_15", type="boolean", nullable=true)
     */
    private $column15;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="can_dispel", type="boolean", nullable=true)
     */
    private $canDispel;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="inflicted_by_actor", type="boolean", nullable=true)
     */
    private $inflictedByActor;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_permanent", type="boolean", nullable=true)
     */
    private $isPermanent;

    /**
     * @var int|null
     *
     * @ORM\Column(name="party_list_priority", type="integer", nullable=true)
     */
    private $partyListPriority;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_20", type="integer", nullable=true)
     */
    private $column20;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_21", type="boolean", nullable=true)
     */
    private $column21;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_22", type="boolean", nullable=true)
     */
    private $column22;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_23", type="integer", nullable=true)
     */
    private $column23;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_24", type="integer", nullable=true)
     */
    private $column24;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_25", type="boolean", nullable=true)
     */
    private $column25;

    /**
     * @var int|null
     *
     * @ORM\Column(name="log", type="bigint", nullable=true)
     */
    private $log;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_fc_buff", type="boolean", nullable=true)
     */
    private $isFcBuff;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="invisibility", type="boolean", nullable=true)
     */
    private $invisibility;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_29", type="integer", nullable=true)
     */
    private $column29;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_30", type="integer", nullable=true)
     */
    private $column30;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_31", type="integer", nullable=true)
     */
    private $column31;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_32", type="boolean", nullable=true)
     */
    private $column32;

    /**
     * @var StatusLoopVfx
     *
     * @ORM\ManyToOne(targetEntity="StatusLoopVfx")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="vfx", referencedColumnName="pk")
     * })
     */
    private $vfx;

    /**
     * @var StatusHitEffect
     *
     * @ORM\ManyToOne(targetEntity="StatusHitEffect")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="hit_effect", referencedColumnName="pk")
     * })
     */
    private $hitEffect;

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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

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

    public function getColumn4(): ?int
    {
        return $this->column4;
    }

    public function setColumn4(?int $column4): self
    {
        $this->column4 = $column4;

        return $this;
    }

    public function getMaxStacks(): ?int
    {
        return $this->maxStacks;
    }

    public function setMaxStacks(?int $maxStacks): self
    {
        $this->maxStacks = $maxStacks;

        return $this;
    }

    public function getColumn6(): ?int
    {
        return $this->column6;
    }

    public function setColumn6(?int $column6): self
    {
        $this->column6 = $column6;

        return $this;
    }

    public function getCategory(): ?int
    {
        return $this->category;
    }

    public function setCategory(?int $category): self
    {
        $this->category = $category;

        return $this;
    }

    public function getLockMovement(): ?bool
    {
        return $this->lockMovement;
    }

    public function setLockMovement(?bool $lockMovement): self
    {
        $this->lockMovement = $lockMovement;

        return $this;
    }

    public function getColumn11(): ?bool
    {
        return $this->column11;
    }

    public function setColumn11(?bool $column11): self
    {
        $this->column11 = $column11;

        return $this;
    }

    public function getLockActions(): ?bool
    {
        return $this->lockActions;
    }

    public function setLockActions(?bool $lockActions): self
    {
        $this->lockActions = $lockActions;

        return $this;
    }

    public function getLockControl(): ?bool
    {
        return $this->lockControl;
    }

    public function setLockControl(?bool $lockControl): self
    {
        $this->lockControl = $lockControl;

        return $this;
    }

    public function getTransfiguration(): ?bool
    {
        return $this->transfiguration;
    }

    public function setTransfiguration(?bool $transfiguration): self
    {
        $this->transfiguration = $transfiguration;

        return $this;
    }

    public function getColumn15(): ?bool
    {
        return $this->column15;
    }

    public function setColumn15(?bool $column15): self
    {
        $this->column15 = $column15;

        return $this;
    }

    public function getCanDispel(): ?bool
    {
        return $this->canDispel;
    }

    public function setCanDispel(?bool $canDispel): self
    {
        $this->canDispel = $canDispel;

        return $this;
    }

    public function getInflictedByActor(): ?bool
    {
        return $this->inflictedByActor;
    }

    public function setInflictedByActor(?bool $inflictedByActor): self
    {
        $this->inflictedByActor = $inflictedByActor;

        return $this;
    }

    public function getIsPermanent(): ?bool
    {
        return $this->isPermanent;
    }

    public function setIsPermanent(?bool $isPermanent): self
    {
        $this->isPermanent = $isPermanent;

        return $this;
    }

    public function getPartyListPriority(): ?int
    {
        return $this->partyListPriority;
    }

    public function setPartyListPriority(?int $partyListPriority): self
    {
        $this->partyListPriority = $partyListPriority;

        return $this;
    }

    public function getColumn20(): ?int
    {
        return $this->column20;
    }

    public function setColumn20(?int $column20): self
    {
        $this->column20 = $column20;

        return $this;
    }

    public function getColumn21(): ?bool
    {
        return $this->column21;
    }

    public function setColumn21(?bool $column21): self
    {
        $this->column21 = $column21;

        return $this;
    }

    public function getColumn22(): ?bool
    {
        return $this->column22;
    }

    public function setColumn22(?bool $column22): self
    {
        $this->column22 = $column22;

        return $this;
    }

    public function getColumn23(): ?int
    {
        return $this->column23;
    }

    public function setColumn23(?int $column23): self
    {
        $this->column23 = $column23;

        return $this;
    }

    public function getColumn24(): ?int
    {
        return $this->column24;
    }

    public function setColumn24(?int $column24): self
    {
        $this->column24 = $column24;

        return $this;
    }

    public function getColumn25(): ?bool
    {
        return $this->column25;
    }

    public function setColumn25(?bool $column25): self
    {
        $this->column25 = $column25;

        return $this;
    }

    public function getLog(): ?string
    {
        return $this->log;
    }

    public function setLog(?string $log): self
    {
        $this->log = $log;

        return $this;
    }

    public function getIsFcBuff(): ?bool
    {
        return $this->isFcBuff;
    }

    public function setIsFcBuff(?bool $isFcBuff): self
    {
        $this->isFcBuff = $isFcBuff;

        return $this;
    }

    public function getInvisibility(): ?bool
    {
        return $this->invisibility;
    }

    public function setInvisibility(?bool $invisibility): self
    {
        $this->invisibility = $invisibility;

        return $this;
    }

    public function getColumn29(): ?int
    {
        return $this->column29;
    }

    public function setColumn29(?int $column29): self
    {
        $this->column29 = $column29;

        return $this;
    }

    public function getColumn30(): ?int
    {
        return $this->column30;
    }

    public function setColumn30(?int $column30): self
    {
        $this->column30 = $column30;

        return $this;
    }

    public function getColumn31(): ?int
    {
        return $this->column31;
    }

    public function setColumn31(?int $column31): self
    {
        $this->column31 = $column31;

        return $this;
    }

    public function getColumn32(): ?bool
    {
        return $this->column32;
    }

    public function setColumn32(?bool $column32): self
    {
        $this->column32 = $column32;

        return $this;
    }

    public function getVfx(): ?StatusLoopVfx
    {
        return $this->vfx;
    }

    public function setVfx(?StatusLoopVfx $vfx): self
    {
        $this->vfx = $vfx;

        return $this;
    }

    public function getHitEffect(): ?StatusHitEffect
    {
        return $this->hitEffect;
    }

    public function setHitEffect(?StatusHitEffect $hitEffect): self
    {
        $this->hitEffect = $hitEffect;

        return $this;
    }
}
