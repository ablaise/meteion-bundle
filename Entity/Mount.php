<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mount.
 *
 * @ORM\Table(name="mount", indexes={@ORM\Index(name="idx_3ae9fa03b6c8ee36", columns={"model_chara"}), @ORM\Index(name="idx_3ae9fa03814cf698", columns={"mount_action"}), @ORM\Index(name="idx_3ae9fa03e7b3a207", columns={"flying_condition"}), @ORM\Index(name="idx_3ae9fa0362bb1f50", columns={"mount_customize"}), @ORM\Index(name="idx_3ae9fa03964c15fc", columns={"ride_bgm"})})
 * @ORM\Entity
 */
class Mount
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="mount_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var string|null
     *
     * @ORM\Column(name="singular", type="string", length=255, nullable=true)
     */
    private $singular;

    /**
     * @var int|null
     *
     * @ORM\Column(name="adjective", type="integer", nullable=true)
     */
    private $adjective;

    /**
     * @var string|null
     *
     * @ORM\Column(name="plural", type="string", length=255, nullable=true)
     */
    private $plural;

    /**
     * @var int|null
     *
     * @ORM\Column(name="possessive_pronoun", type="integer", nullable=true)
     */
    private $possessivePronoun;

    /**
     * @var int|null
     *
     * @ORM\Column(name="starts_with_vowel", type="integer", nullable=true)
     */
    private $startsWithVowel;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_6", type="integer", nullable=true)
     */
    private $column6;

    /**
     * @var int|null
     *
     * @ORM\Column(name="pronoun", type="integer", nullable=true)
     */
    private $pronoun;

    /**
     * @var int|null
     *
     * @ORM\Column(name="article", type="integer", nullable=true)
     */
    private $article;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_10", type="bigint", nullable=true)
     */
    private $column10;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_12", type="integer", nullable=true)
     */
    private $column12;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_13", type="integer", nullable=true)
     */
    private $column13;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_14", type="integer", nullable=true)
     */
    private $column14;

    /**
     * @var int|null
     *
     * @ORM\Column(name="is_flying", type="integer", nullable=true)
     */
    private $isFlying;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_16", type="integer", nullable=true)
     */
    private $column16;

    /**
     * @var string|null
     *
     * @ORM\Column(name="column_19", type="string", length=255, nullable=true)
     */
    private $column19;

    /**
     * @var string|null
     *
     * @ORM\Column(name="column_20", type="string", length=255, nullable=true)
     */
    private $column20;

    /**
     * @var string|null
     *
     * @ORM\Column(name="column_21", type="string", length=255, nullable=true)
     */
    private $column21;

    /**
     * @var int|null
     *
     * @ORM\Column(name="exit_move_dist", type="integer", nullable=true)
     */
    private $exitMoveDist;

    /**
     * @var int|null
     *
     * @ORM\Column(name="exit_move_speed", type="integer", nullable=true)
     */
    private $exitMoveSpeed;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_24", type="boolean", nullable=true)
     */
    private $column24;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_emote", type="boolean", nullable=true)
     */
    private $isEmote;

    /**
     * @var int|null
     *
     * @ORM\Column(name="equip_head", type="integer", nullable=true)
     */
    private $equipHead;

    /**
     * @var int|null
     *
     * @ORM\Column(name="equip_body", type="integer", nullable=true)
     */
    private $equipBody;

    /**
     * @var int|null
     *
     * @ORM\Column(name="equip_leg", type="integer", nullable=true)
     */
    private $equipLeg;

    /**
     * @var int|null
     *
     * @ORM\Column(name="equip_foot", type="integer", nullable=true)
     */
    private $equipFoot;

    /**
     * @var int|null
     *
     * @ORM\Column(name="order", type="integer", nullable=true)
     */
    private $order;

    /**
     * @var int|null
     *
     * @ORM\Column(name="icon", type="integer", nullable=true)
     */
    private $icon;

    /**
     * @var int|null
     *
     * @ORM\Column(name="uipriority", type="integer", nullable=true)
     */
    private $uipriority;

    /**
     * @var int|null
     *
     * @ORM\Column(name="radius_rate", type="integer", nullable=true)
     */
    private $radiusRate;

    /**
     * @var int|null
     *
     * @ORM\Column(name="base_motion_speed_run", type="integer", nullable=true)
     */
    private $baseMotionSpeedRun;

    /**
     * @var int|null
     *
     * @ORM\Column(name="base_motion_speed_walk", type="integer", nullable=true)
     */
    private $baseMotionSpeedWalk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_36", type="integer", nullable=true)
     */
    private $column36;

    /**
     * @var int|null
     *
     * @ORM\Column(name="extra_seats", type="integer", nullable=true)
     */
    private $extraSeats;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_airborne", type="boolean", nullable=true)
     */
    private $isAirborne;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="ex_hotbar_enable_config", type="boolean", nullable=true)
     */
    private $exHotbarEnableConfig;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="use_ep", type="boolean", nullable=true)
     */
    private $useEp;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_42", type="boolean", nullable=true)
     */
    private $column42;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_immobile", type="boolean", nullable=true)
     */
    private $isImmobile;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_44", type="integer", nullable=true)
     */
    private $column44;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_45", type="integer", nullable=true)
     */
    private $column45;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_46", type="boolean", nullable=true)
     */
    private $column46;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_47", type="boolean", nullable=true)
     */
    private $column47;

    /**
     * @var MountAction
     *
     * @ORM\ManyToOne(targetEntity="MountAction")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mount_action", referencedColumnName="pk")
     * })
     */
    private $mountAction;

    /**
     * @var Bgm
     *
     * @ORM\ManyToOne(targetEntity="Bgm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ride_bgm", referencedColumnName="pk")
     * })
     */
    private $rideBgm;

    /**
     * @var MountCustomize
     *
     * @ORM\ManyToOne(targetEntity="MountCustomize")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mount_customize", referencedColumnName="pk")
     * })
     */
    private $mountCustomize;

    /**
     * @var MountFlyingCondition
     *
     * @ORM\ManyToOne(targetEntity="MountFlyingCondition")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="flying_condition", referencedColumnName="pk")
     * })
     */
    private $flyingCondition;

    /**
     * @var ModelChara
     *
     * @ORM\ManyToOne(targetEntity="ModelChara")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="model_chara", referencedColumnName="pk")
     * })
     */
    private $modelChara;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getSingular(): ?string
    {
        return $this->singular;
    }

    public function setSingular(?string $singular): self
    {
        $this->singular = $singular;

        return $this;
    }

    public function getAdjective(): ?int
    {
        return $this->adjective;
    }

    public function setAdjective(?int $adjective): self
    {
        $this->adjective = $adjective;

        return $this;
    }

    public function getPlural(): ?string
    {
        return $this->plural;
    }

    public function setPlural(?string $plural): self
    {
        $this->plural = $plural;

        return $this;
    }

    public function getPossessivePronoun(): ?int
    {
        return $this->possessivePronoun;
    }

    public function setPossessivePronoun(?int $possessivePronoun): self
    {
        $this->possessivePronoun = $possessivePronoun;

        return $this;
    }

    public function getStartsWithVowel(): ?int
    {
        return $this->startsWithVowel;
    }

    public function setStartsWithVowel(?int $startsWithVowel): self
    {
        $this->startsWithVowel = $startsWithVowel;

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

    public function getPronoun(): ?int
    {
        return $this->pronoun;
    }

    public function setPronoun(?int $pronoun): self
    {
        $this->pronoun = $pronoun;

        return $this;
    }

    public function getArticle(): ?int
    {
        return $this->article;
    }

    public function setArticle(?int $article): self
    {
        $this->article = $article;

        return $this;
    }

    public function getColumn10(): ?string
    {
        return $this->column10;
    }

    public function setColumn10(?string $column10): self
    {
        $this->column10 = $column10;

        return $this;
    }

    public function getColumn12(): ?int
    {
        return $this->column12;
    }

    public function setColumn12(?int $column12): self
    {
        $this->column12 = $column12;

        return $this;
    }

    public function getColumn13(): ?int
    {
        return $this->column13;
    }

    public function setColumn13(?int $column13): self
    {
        $this->column13 = $column13;

        return $this;
    }

    public function getColumn14(): ?int
    {
        return $this->column14;
    }

    public function setColumn14(?int $column14): self
    {
        $this->column14 = $column14;

        return $this;
    }

    public function getIsFlying(): ?int
    {
        return $this->isFlying;
    }

    public function setIsFlying(?int $isFlying): self
    {
        $this->isFlying = $isFlying;

        return $this;
    }

    public function getColumn16(): ?int
    {
        return $this->column16;
    }

    public function setColumn16(?int $column16): self
    {
        $this->column16 = $column16;

        return $this;
    }

    public function getColumn19(): ?string
    {
        return $this->column19;
    }

    public function setColumn19(?string $column19): self
    {
        $this->column19 = $column19;

        return $this;
    }

    public function getColumn20(): ?string
    {
        return $this->column20;
    }

    public function setColumn20(?string $column20): self
    {
        $this->column20 = $column20;

        return $this;
    }

    public function getColumn21(): ?string
    {
        return $this->column21;
    }

    public function setColumn21(?string $column21): self
    {
        $this->column21 = $column21;

        return $this;
    }

    public function getExitMoveDist(): ?int
    {
        return $this->exitMoveDist;
    }

    public function setExitMoveDist(?int $exitMoveDist): self
    {
        $this->exitMoveDist = $exitMoveDist;

        return $this;
    }

    public function getExitMoveSpeed(): ?int
    {
        return $this->exitMoveSpeed;
    }

    public function setExitMoveSpeed(?int $exitMoveSpeed): self
    {
        $this->exitMoveSpeed = $exitMoveSpeed;

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

    public function getIsEmote(): ?bool
    {
        return $this->isEmote;
    }

    public function setIsEmote(?bool $isEmote): self
    {
        $this->isEmote = $isEmote;

        return $this;
    }

    public function getEquipHead(): ?int
    {
        return $this->equipHead;
    }

    public function setEquipHead(?int $equipHead): self
    {
        $this->equipHead = $equipHead;

        return $this;
    }

    public function getEquipBody(): ?int
    {
        return $this->equipBody;
    }

    public function setEquipBody(?int $equipBody): self
    {
        $this->equipBody = $equipBody;

        return $this;
    }

    public function getEquipLeg(): ?int
    {
        return $this->equipLeg;
    }

    public function setEquipLeg(?int $equipLeg): self
    {
        $this->equipLeg = $equipLeg;

        return $this;
    }

    public function getEquipFoot(): ?int
    {
        return $this->equipFoot;
    }

    public function setEquipFoot(?int $equipFoot): self
    {
        $this->equipFoot = $equipFoot;

        return $this;
    }

    public function getOrder(): ?int
    {
        return $this->order;
    }

    public function setOrder(?int $order): self
    {
        $this->order = $order;

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

    public function getUipriority(): ?int
    {
        return $this->uipriority;
    }

    public function setUipriority(?int $uipriority): self
    {
        $this->uipriority = $uipriority;

        return $this;
    }

    public function getRadiusRate(): ?int
    {
        return $this->radiusRate;
    }

    public function setRadiusRate(?int $radiusRate): self
    {
        $this->radiusRate = $radiusRate;

        return $this;
    }

    public function getBaseMotionSpeedRun(): ?int
    {
        return $this->baseMotionSpeedRun;
    }

    public function setBaseMotionSpeedRun(?int $baseMotionSpeedRun): self
    {
        $this->baseMotionSpeedRun = $baseMotionSpeedRun;

        return $this;
    }

    public function getBaseMotionSpeedWalk(): ?int
    {
        return $this->baseMotionSpeedWalk;
    }

    public function setBaseMotionSpeedWalk(?int $baseMotionSpeedWalk): self
    {
        $this->baseMotionSpeedWalk = $baseMotionSpeedWalk;

        return $this;
    }

    public function getColumn36(): ?int
    {
        return $this->column36;
    }

    public function setColumn36(?int $column36): self
    {
        $this->column36 = $column36;

        return $this;
    }

    public function getExtraSeats(): ?int
    {
        return $this->extraSeats;
    }

    public function setExtraSeats(?int $extraSeats): self
    {
        $this->extraSeats = $extraSeats;

        return $this;
    }

    public function getIsAirborne(): ?bool
    {
        return $this->isAirborne;
    }

    public function setIsAirborne(?bool $isAirborne): self
    {
        $this->isAirborne = $isAirborne;

        return $this;
    }

    public function getExHotbarEnableConfig(): ?bool
    {
        return $this->exHotbarEnableConfig;
    }

    public function setExHotbarEnableConfig(?bool $exHotbarEnableConfig): self
    {
        $this->exHotbarEnableConfig = $exHotbarEnableConfig;

        return $this;
    }

    public function getUseEp(): ?bool
    {
        return $this->useEp;
    }

    public function setUseEp(?bool $useEp): self
    {
        $this->useEp = $useEp;

        return $this;
    }

    public function getColumn42(): ?bool
    {
        return $this->column42;
    }

    public function setColumn42(?bool $column42): self
    {
        $this->column42 = $column42;

        return $this;
    }

    public function getIsImmobile(): ?bool
    {
        return $this->isImmobile;
    }

    public function setIsImmobile(?bool $isImmobile): self
    {
        $this->isImmobile = $isImmobile;

        return $this;
    }

    public function getColumn44(): ?int
    {
        return $this->column44;
    }

    public function setColumn44(?int $column44): self
    {
        $this->column44 = $column44;

        return $this;
    }

    public function getColumn45(): ?int
    {
        return $this->column45;
    }

    public function setColumn45(?int $column45): self
    {
        $this->column45 = $column45;

        return $this;
    }

    public function getColumn46(): ?bool
    {
        return $this->column46;
    }

    public function setColumn46(?bool $column46): self
    {
        $this->column46 = $column46;

        return $this;
    }

    public function getColumn47(): ?bool
    {
        return $this->column47;
    }

    public function setColumn47(?bool $column47): self
    {
        $this->column47 = $column47;

        return $this;
    }

    public function getMountAction(): ?MountAction
    {
        return $this->mountAction;
    }

    public function setMountAction(?MountAction $mountAction): self
    {
        $this->mountAction = $mountAction;

        return $this;
    }

    public function getRideBgm(): ?Bgm
    {
        return $this->rideBgm;
    }

    public function setRideBgm(?Bgm $rideBgm): self
    {
        $this->rideBgm = $rideBgm;

        return $this;
    }

    public function getMountCustomize(): ?MountCustomize
    {
        return $this->mountCustomize;
    }

    public function setMountCustomize(?MountCustomize $mountCustomize): self
    {
        $this->mountCustomize = $mountCustomize;

        return $this;
    }

    public function getFlyingCondition(): ?MountFlyingCondition
    {
        return $this->flyingCondition;
    }

    public function setFlyingCondition(?MountFlyingCondition $flyingCondition): self
    {
        $this->flyingCondition = $flyingCondition;

        return $this;
    }

    public function getModelChara(): ?ModelChara
    {
        return $this->modelChara;
    }

    public function setModelChara(?ModelChara $modelChara): self
    {
        $this->modelChara = $modelChara;

        return $this;
    }
}
