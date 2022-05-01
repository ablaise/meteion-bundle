<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Action.
 *
 * @ORM\Table(name="action", indexes={@ORM\Index(name="idx_47cc8c9256f2fcf6", columns={"action_combo"}), @ORM\Index(name="idx_47cc8c92864301de", columns={"status_gain_self"}), @ORM\Index(name="idx_47cc8c92dcad5f7d", columns={"animation_end"}), @ORM\Index(name="idx_47cc8c92b08eb387", columns={"omen"}), @ORM\Index(name="idx_47cc8c92c244f8df", columns={"vfx"}), @ORM\Index(name="idx_47cc8c92de2a8bb2", columns={"action_proc_status"}), @ORM\Index(name="idx_47cc8c92ae8947ec", columns={"class_job_category"}), @ORM\Index(name="idx_47cc8c92bc323cef", columns={"animation_start"}), @ORM\Index(name="idx_47cc8c9215248120", columns={"action_timeline_hit"}), @ORM\Index(name="idx_47cc8c927bc596c4", columns={"attack_type"}), @ORM\Index(name="idx_47cc8c92d19b69a7", columns={"action_category"}), @ORM\Index(name="idx_47cc8c928d519804", columns={"class_job"})})
 * @ORM\Entity
 */
class Action
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="action_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_2", type="boolean", nullable=true)
     */
    private $column2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="icon", type="integer", nullable=true)
     */
    private $icon;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_5", type="integer", nullable=true)
     */
    private $column5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_10", type="integer", nullable=true)
     */
    private $column10;

    /**
     * @var int|null
     *
     * @ORM\Column(name="behaviour_type", type="integer", nullable=true)
     */
    private $behaviourType;

    /**
     * @var int|null
     *
     * @ORM\Column(name="class_job_level", type="integer", nullable=true)
     */
    private $classJobLevel;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_role_action", type="boolean", nullable=true)
     */
    private $isRoleAction;

    /**
     * @var int|null
     *
     * @ORM\Column(name="range", type="integer", nullable=true)
     */
    private $range;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="can_target_self", type="boolean", nullable=true)
     */
    private $canTargetSelf;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="can_target_party", type="boolean", nullable=true)
     */
    private $canTargetParty;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="can_target_friendly", type="boolean", nullable=true)
     */
    private $canTargetFriendly;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="can_target_hostile", type="boolean", nullable=true)
     */
    private $canTargetHostile;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_20", type="boolean", nullable=true)
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
     * @ORM\Column(name="target_area", type="boolean", nullable=true)
     */
    private $targetArea;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_23", type="boolean", nullable=true)
     */
    private $column23;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_24", type="boolean", nullable=true)
     */
    private $column24;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_25", type="integer", nullable=true)
     */
    private $column25;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="can_target_dead", type="boolean", nullable=true)
     */
    private $canTargetDead;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_27", type="boolean", nullable=true)
     */
    private $column27;

    /**
     * @var int|null
     *
     * @ORM\Column(name="cast_type", type="integer", nullable=true)
     */
    private $castType;

    /**
     * @var int|null
     *
     * @ORM\Column(name="effect_range", type="integer", nullable=true)
     */
    private $effectRange;

    /**
     * @var int|null
     *
     * @ORM\Column(name="xaxis_modifier", type="integer", nullable=true)
     */
    private $xaxisModifier;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_31", type="boolean", nullable=true)
     */
    private $column31;

    /**
     * @var int|null
     *
     * @ORM\Column(name="primary_cost_type", type="integer", nullable=true)
     */
    private $primaryCostType;

    /**
     * @var int|null
     *
     * @ORM\Column(name="primary_cost_value", type="bigint", nullable=true)
     */
    private $primaryCostValue;

    /**
     * @var int|null
     *
     * @ORM\Column(name="secondary_cost_type", type="integer", nullable=true)
     */
    private $secondaryCostType;

    /**
     * @var int|null
     *
     * @ORM\Column(name="secondary_cost_value", type="integer", nullable=true)
     */
    private $secondaryCostValue;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="preserves_combo", type="boolean", nullable=true)
     */
    private $preservesCombo;

    /**
     * @var int|null
     *
     * @ORM\Column(name="cast_100ms", type="bigint", nullable=true)
     */
    private $cast100ms;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_39", type="integer", nullable=true)
     */
    private $column39;

    /**
     * @var int|null
     *
     * @ORM\Column(name="recast_100ms", type="bigint", nullable=true)
     */
    private $recast100ms;

    /**
     * @var int|null
     *
     * @ORM\Column(name="cooldown_group", type="integer", nullable=true)
     */
    private $cooldownGroup;

    /**
     * @var int|null
     *
     * @ORM\Column(name="additional_cooldown_group", type="integer", nullable=true)
     */
    private $additionalCooldownGroup;

    /**
     * @var int|null
     *
     * @ORM\Column(name="max_charges", type="integer", nullable=true)
     */
    private $maxCharges;

    /**
     * @var int|null
     *
     * @ORM\Column(name="aspect", type="integer", nullable=true)
     */
    private $aspect;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_47", type="integer", nullable=true)
     */
    private $column47;

    /**
     * @var int|null
     *
     * @ORM\Column(name="unlock_link", type="integer", nullable=true)
     */
    private $unlockLink;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_51", type="integer", nullable=true)
     */
    private $column51;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_52", type="boolean", nullable=true)
     */
    private $column52;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="affects_position", type="boolean", nullable=true)
     */
    private $affectsPosition;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_55", type="bigint", nullable=true)
     */
    private $column55;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_pv_p", type="boolean", nullable=true)
     */
    private $isPvP;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_57", type="boolean", nullable=true)
     */
    private $column57;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_58", type="boolean", nullable=true)
     */
    private $column58;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_59", type="boolean", nullable=true)
     */
    private $column59;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_60", type="boolean", nullable=true)
     */
    private $column60;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_61", type="boolean", nullable=true)
     */
    private $column61;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_62", type="boolean", nullable=true)
     */
    private $column62;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_63", type="boolean", nullable=true)
     */
    private $column63;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_64", type="boolean", nullable=true)
     */
    private $column64;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_65", type="integer", nullable=true)
     */
    private $column65;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_66", type="boolean", nullable=true)
     */
    private $column66;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_67", type="boolean", nullable=true)
     */
    private $column67;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_player_action", type="boolean", nullable=true)
     */
    private $isPlayerAction;

    /**
     * @var Omen
     *
     * @ORM\ManyToOne(targetEntity="Omen")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="omen", referencedColumnName="pk")
     * })
     */
    private $omen;

    /**
     * @var ClassJobCategory
     *
     * @ORM\ManyToOne(targetEntity="ClassJobCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="class_job_category", referencedColumnName="pk")
     * })
     */
    private $classJobCategory;

    /**
     * @var Status
     *
     * @ORM\ManyToOne(targetEntity="Status")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="status_gain_self", referencedColumnName="pk")
     * })
     */
    private $statusGainSelf;

    /**
     * @var ActionProcStatus
     *
     * @ORM\ManyToOne(targetEntity="ActionProcStatus")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="action_proc_status", referencedColumnName="pk")
     * })
     */
    private $actionProcStatus;

    /**
     * @var AttackType
     *
     * @ORM\ManyToOne(targetEntity="AttackType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="attack_type", referencedColumnName="pk")
     * })
     */
    private $attackType;

    /**
     * @var Action
     *
     * @ORM\ManyToOne(targetEntity="Action")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="action_combo", referencedColumnName="pk")
     * })
     */
    private $actionCombo;

    /**
     * @var ClassJob
     *
     * @ORM\ManyToOne(targetEntity="ClassJob")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="class_job", referencedColumnName="pk")
     * })
     */
    private $classJob;

    /**
     * @var ActionTimeline
     *
     * @ORM\ManyToOne(targetEntity="ActionTimeline")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="action_timeline_hit", referencedColumnName="pk")
     * })
     */
    private $actionTimelineHit;

    /**
     * @var ActionTimeline
     *
     * @ORM\ManyToOne(targetEntity="ActionTimeline")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="animation_end", referencedColumnName="pk")
     * })
     */
    private $animationEnd;

    /**
     * @var ActionCastVfx
     *
     * @ORM\ManyToOne(targetEntity="ActionCastVfx")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="vfx", referencedColumnName="pk")
     * })
     */
    private $vfx;

    /**
     * @var ActionCastTimeline
     *
     * @ORM\ManyToOne(targetEntity="ActionCastTimeline")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="animation_start", referencedColumnName="pk")
     * })
     */
    private $animationStart;

    /**
     * @var ActionCategory
     *
     * @ORM\ManyToOne(targetEntity="ActionCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="action_category", referencedColumnName="pk")
     * })
     */
    private $actionCategory;

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

    public function getColumn2(): ?bool
    {
        return $this->column2;
    }

    public function setColumn2(?bool $column2): self
    {
        $this->column2 = $column2;

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

    public function getColumn5(): ?int
    {
        return $this->column5;
    }

    public function setColumn5(?int $column5): self
    {
        $this->column5 = $column5;

        return $this;
    }

    public function getColumn10(): ?int
    {
        return $this->column10;
    }

    public function setColumn10(?int $column10): self
    {
        $this->column10 = $column10;

        return $this;
    }

    public function getBehaviourType(): ?int
    {
        return $this->behaviourType;
    }

    public function setBehaviourType(?int $behaviourType): self
    {
        $this->behaviourType = $behaviourType;

        return $this;
    }

    public function getClassJobLevel(): ?int
    {
        return $this->classJobLevel;
    }

    public function setClassJobLevel(?int $classJobLevel): self
    {
        $this->classJobLevel = $classJobLevel;

        return $this;
    }

    public function getIsRoleAction(): ?bool
    {
        return $this->isRoleAction;
    }

    public function setIsRoleAction(?bool $isRoleAction): self
    {
        $this->isRoleAction = $isRoleAction;

        return $this;
    }

    public function getRange(): ?int
    {
        return $this->range;
    }

    public function setRange(?int $range): self
    {
        $this->range = $range;

        return $this;
    }

    public function getCanTargetSelf(): ?bool
    {
        return $this->canTargetSelf;
    }

    public function setCanTargetSelf(?bool $canTargetSelf): self
    {
        $this->canTargetSelf = $canTargetSelf;

        return $this;
    }

    public function getCanTargetParty(): ?bool
    {
        return $this->canTargetParty;
    }

    public function setCanTargetParty(?bool $canTargetParty): self
    {
        $this->canTargetParty = $canTargetParty;

        return $this;
    }

    public function getCanTargetFriendly(): ?bool
    {
        return $this->canTargetFriendly;
    }

    public function setCanTargetFriendly(?bool $canTargetFriendly): self
    {
        $this->canTargetFriendly = $canTargetFriendly;

        return $this;
    }

    public function getCanTargetHostile(): ?bool
    {
        return $this->canTargetHostile;
    }

    public function setCanTargetHostile(?bool $canTargetHostile): self
    {
        $this->canTargetHostile = $canTargetHostile;

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

    public function getColumn21(): ?bool
    {
        return $this->column21;
    }

    public function setColumn21(?bool $column21): self
    {
        $this->column21 = $column21;

        return $this;
    }

    public function getTargetArea(): ?bool
    {
        return $this->targetArea;
    }

    public function setTargetArea(?bool $targetArea): self
    {
        $this->targetArea = $targetArea;

        return $this;
    }

    public function getColumn23(): ?bool
    {
        return $this->column23;
    }

    public function setColumn23(?bool $column23): self
    {
        $this->column23 = $column23;

        return $this;
    }

    public function getColumn24(): ?bool
    {
        return $this->column24;
    }

    public function setColumn24(?bool $column24): self
    {
        $this->column24 = $column24;

        return $this;
    }

    public function getColumn25(): ?int
    {
        return $this->column25;
    }

    public function setColumn25(?int $column25): self
    {
        $this->column25 = $column25;

        return $this;
    }

    public function getCanTargetDead(): ?bool
    {
        return $this->canTargetDead;
    }

    public function setCanTargetDead(?bool $canTargetDead): self
    {
        $this->canTargetDead = $canTargetDead;

        return $this;
    }

    public function getColumn27(): ?bool
    {
        return $this->column27;
    }

    public function setColumn27(?bool $column27): self
    {
        $this->column27 = $column27;

        return $this;
    }

    public function getCastType(): ?int
    {
        return $this->castType;
    }

    public function setCastType(?int $castType): self
    {
        $this->castType = $castType;

        return $this;
    }

    public function getEffectRange(): ?int
    {
        return $this->effectRange;
    }

    public function setEffectRange(?int $effectRange): self
    {
        $this->effectRange = $effectRange;

        return $this;
    }

    public function getXaxisModifier(): ?int
    {
        return $this->xaxisModifier;
    }

    public function setXaxisModifier(?int $xaxisModifier): self
    {
        $this->xaxisModifier = $xaxisModifier;

        return $this;
    }

    public function getColumn31(): ?bool
    {
        return $this->column31;
    }

    public function setColumn31(?bool $column31): self
    {
        $this->column31 = $column31;

        return $this;
    }

    public function getPrimaryCostType(): ?int
    {
        return $this->primaryCostType;
    }

    public function setPrimaryCostType(?int $primaryCostType): self
    {
        $this->primaryCostType = $primaryCostType;

        return $this;
    }

    public function getPrimaryCostValue(): ?string
    {
        return $this->primaryCostValue;
    }

    public function setPrimaryCostValue(?string $primaryCostValue): self
    {
        $this->primaryCostValue = $primaryCostValue;

        return $this;
    }

    public function getSecondaryCostType(): ?int
    {
        return $this->secondaryCostType;
    }

    public function setSecondaryCostType(?int $secondaryCostType): self
    {
        $this->secondaryCostType = $secondaryCostType;

        return $this;
    }

    public function getSecondaryCostValue(): ?int
    {
        return $this->secondaryCostValue;
    }

    public function setSecondaryCostValue(?int $secondaryCostValue): self
    {
        $this->secondaryCostValue = $secondaryCostValue;

        return $this;
    }

    public function getPreservesCombo(): ?bool
    {
        return $this->preservesCombo;
    }

    public function setPreservesCombo(?bool $preservesCombo): self
    {
        $this->preservesCombo = $preservesCombo;

        return $this;
    }

    public function getCast100ms(): ?string
    {
        return $this->cast100ms;
    }

    public function setCast100ms(?string $cast100ms): self
    {
        $this->cast100ms = $cast100ms;

        return $this;
    }

    public function getColumn39(): ?int
    {
        return $this->column39;
    }

    public function setColumn39(?int $column39): self
    {
        $this->column39 = $column39;

        return $this;
    }

    public function getRecast100ms(): ?string
    {
        return $this->recast100ms;
    }

    public function setRecast100ms(?string $recast100ms): self
    {
        $this->recast100ms = $recast100ms;

        return $this;
    }

    public function getCooldownGroup(): ?int
    {
        return $this->cooldownGroup;
    }

    public function setCooldownGroup(?int $cooldownGroup): self
    {
        $this->cooldownGroup = $cooldownGroup;

        return $this;
    }

    public function getAdditionalCooldownGroup(): ?int
    {
        return $this->additionalCooldownGroup;
    }

    public function setAdditionalCooldownGroup(?int $additionalCooldownGroup): self
    {
        $this->additionalCooldownGroup = $additionalCooldownGroup;

        return $this;
    }

    public function getMaxCharges(): ?int
    {
        return $this->maxCharges;
    }

    public function setMaxCharges(?int $maxCharges): self
    {
        $this->maxCharges = $maxCharges;

        return $this;
    }

    public function getAspect(): ?int
    {
        return $this->aspect;
    }

    public function setAspect(?int $aspect): self
    {
        $this->aspect = $aspect;

        return $this;
    }

    public function getColumn47(): ?int
    {
        return $this->column47;
    }

    public function setColumn47(?int $column47): self
    {
        $this->column47 = $column47;

        return $this;
    }

    public function getUnlockLink(): ?int
    {
        return $this->unlockLink;
    }

    public function setUnlockLink(?int $unlockLink): self
    {
        $this->unlockLink = $unlockLink;

        return $this;
    }

    public function getColumn51(): ?int
    {
        return $this->column51;
    }

    public function setColumn51(?int $column51): self
    {
        $this->column51 = $column51;

        return $this;
    }

    public function getColumn52(): ?bool
    {
        return $this->column52;
    }

    public function setColumn52(?bool $column52): self
    {
        $this->column52 = $column52;

        return $this;
    }

    public function getAffectsPosition(): ?bool
    {
        return $this->affectsPosition;
    }

    public function setAffectsPosition(?bool $affectsPosition): self
    {
        $this->affectsPosition = $affectsPosition;

        return $this;
    }

    public function getColumn55(): ?string
    {
        return $this->column55;
    }

    public function setColumn55(?string $column55): self
    {
        $this->column55 = $column55;

        return $this;
    }

    public function getIsPvP(): ?bool
    {
        return $this->isPvP;
    }

    public function setIsPvP(?bool $isPvP): self
    {
        $this->isPvP = $isPvP;

        return $this;
    }

    public function getColumn57(): ?bool
    {
        return $this->column57;
    }

    public function setColumn57(?bool $column57): self
    {
        $this->column57 = $column57;

        return $this;
    }

    public function getColumn58(): ?bool
    {
        return $this->column58;
    }

    public function setColumn58(?bool $column58): self
    {
        $this->column58 = $column58;

        return $this;
    }

    public function getColumn59(): ?bool
    {
        return $this->column59;
    }

    public function setColumn59(?bool $column59): self
    {
        $this->column59 = $column59;

        return $this;
    }

    public function getColumn60(): ?bool
    {
        return $this->column60;
    }

    public function setColumn60(?bool $column60): self
    {
        $this->column60 = $column60;

        return $this;
    }

    public function getColumn61(): ?bool
    {
        return $this->column61;
    }

    public function setColumn61(?bool $column61): self
    {
        $this->column61 = $column61;

        return $this;
    }

    public function getColumn62(): ?bool
    {
        return $this->column62;
    }

    public function setColumn62(?bool $column62): self
    {
        $this->column62 = $column62;

        return $this;
    }

    public function getColumn63(): ?bool
    {
        return $this->column63;
    }

    public function setColumn63(?bool $column63): self
    {
        $this->column63 = $column63;

        return $this;
    }

    public function getColumn64(): ?bool
    {
        return $this->column64;
    }

    public function setColumn64(?bool $column64): self
    {
        $this->column64 = $column64;

        return $this;
    }

    public function getColumn65(): ?int
    {
        return $this->column65;
    }

    public function setColumn65(?int $column65): self
    {
        $this->column65 = $column65;

        return $this;
    }

    public function getColumn66(): ?bool
    {
        return $this->column66;
    }

    public function setColumn66(?bool $column66): self
    {
        $this->column66 = $column66;

        return $this;
    }

    public function getColumn67(): ?bool
    {
        return $this->column67;
    }

    public function setColumn67(?bool $column67): self
    {
        $this->column67 = $column67;

        return $this;
    }

    public function getIsPlayerAction(): ?bool
    {
        return $this->isPlayerAction;
    }

    public function setIsPlayerAction(?bool $isPlayerAction): self
    {
        $this->isPlayerAction = $isPlayerAction;

        return $this;
    }

    public function getOmen(): ?Omen
    {
        return $this->omen;
    }

    public function setOmen(?Omen $omen): self
    {
        $this->omen = $omen;

        return $this;
    }

    public function getClassJobCategory(): ?ClassJobCategory
    {
        return $this->classJobCategory;
    }

    public function setClassJobCategory(?ClassJobCategory $classJobCategory): self
    {
        $this->classJobCategory = $classJobCategory;

        return $this;
    }

    public function getStatusGainSelf(): ?Status
    {
        return $this->statusGainSelf;
    }

    public function setStatusGainSelf(?Status $statusGainSelf): self
    {
        $this->statusGainSelf = $statusGainSelf;

        return $this;
    }

    public function getActionProcStatus(): ?ActionProcStatus
    {
        return $this->actionProcStatus;
    }

    public function setActionProcStatus(?ActionProcStatus $actionProcStatus): self
    {
        $this->actionProcStatus = $actionProcStatus;

        return $this;
    }

    public function getAttackType(): ?AttackType
    {
        return $this->attackType;
    }

    public function setAttackType(?AttackType $attackType): self
    {
        $this->attackType = $attackType;

        return $this;
    }

    public function getActionCombo(): ?self
    {
        return $this->actionCombo;
    }

    public function setActionCombo(?self $actionCombo): self
    {
        $this->actionCombo = $actionCombo;

        return $this;
    }

    public function getClassJob(): ?ClassJob
    {
        return $this->classJob;
    }

    public function setClassJob(?ClassJob $classJob): self
    {
        $this->classJob = $classJob;

        return $this;
    }

    public function getActionTimelineHit(): ?ActionTimeline
    {
        return $this->actionTimelineHit;
    }

    public function setActionTimelineHit(?ActionTimeline $actionTimelineHit): self
    {
        $this->actionTimelineHit = $actionTimelineHit;

        return $this;
    }

    public function getAnimationEnd(): ?ActionTimeline
    {
        return $this->animationEnd;
    }

    public function setAnimationEnd(?ActionTimeline $animationEnd): self
    {
        $this->animationEnd = $animationEnd;

        return $this;
    }

    public function getVfx(): ?ActionCastVfx
    {
        return $this->vfx;
    }

    public function setVfx(?ActionCastVfx $vfx): self
    {
        $this->vfx = $vfx;

        return $this;
    }

    public function getAnimationStart(): ?ActionCastTimeline
    {
        return $this->animationStart;
    }

    public function setAnimationStart(?ActionCastTimeline $animationStart): self
    {
        $this->animationStart = $animationStart;

        return $this;
    }

    public function getActionCategory(): ?ActionCategory
    {
        return $this->actionCategory;
    }

    public function setActionCategory(?ActionCategory $actionCategory): self
    {
        $this->actionCategory = $actionCategory;

        return $this;
    }
}
