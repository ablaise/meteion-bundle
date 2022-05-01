<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ContentFinderCondition.
 *
 * @ORM\Table(name="content_finder_condition", indexes={@ORM\Index(name="idx_8668572b41bcbaec", columns={"content_type"}), @ORM\Index(name="idx_8668572bc2648ffb", columns={"accept_class_job_category"}), @ORM\Index(name="idx_8668572b22a72d51", columns={"unlock_quest"}), @ORM\Index(name="idx_8668572b237cd1f3", columns={"content_member_type"}), @ORM\Index(name="idx_8668572b96ee9add", columns={"territory_type"})})
 * @ORM\Entity
 */
class ContentFinderCondition
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="content_finder_condition_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var string|null
     *
     * @ORM\Column(name="short_code", type="string", length=255, nullable=true)
     */
    private $shortCode;

    /**
     * @var int|null
     *
     * @ORM\Column(name="content_link_type", type="integer", nullable=true)
     */
    private $contentLinkType;

    /**
     * @var int|null
     *
     * @ORM\Column(name="content", type="integer", nullable=true)
     */
    private $content;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="pv_p", type="boolean", nullable=true)
     */
    private $pvP;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_6", type="integer", nullable=true)
     */
    private $column6;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_7", type="bigint", nullable=true)
     */
    private $column7;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_8", type="bigint", nullable=true)
     */
    private $column8;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_11", type="integer", nullable=true)
     */
    private $column11;

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
     * @ORM\Column(name="column_15", type="bigint", nullable=true)
     */
    private $column15;

    /**
     * @var int|null
     *
     * @ORM\Column(name="class_job_level_required", type="integer", nullable=true)
     */
    private $classJobLevelRequired;

    /**
     * @var int|null
     *
     * @ORM\Column(name="class_job_level_sync", type="integer", nullable=true)
     */
    private $classJobLevelSync;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_level_required", type="bigint", nullable=true)
     */
    private $itemLevelRequired;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_level_sync", type="bigint", nullable=true)
     */
    private $itemLevelSync;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_20", type="boolean", nullable=true)
     */
    private $column20;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="allow_undersized", type="boolean", nullable=true)
     */
    private $allowUndersized;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="allow_replacement", type="boolean", nullable=true)
     */
    private $allowReplacement;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_23", type="boolean", nullable=true)
     */
    private $column23;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="allow_explorer_mode", type="boolean", nullable=true)
     */
    private $allowExplorerMode;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_25", type="boolean", nullable=true)
     */
    private $column25;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_26", type="boolean", nullable=true)
     */
    private $column26;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_27", type="integer", nullable=true)
     */
    private $column27;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_28", type="boolean", nullable=true)
     */
    private $column28;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="high_end_duty", type="boolean", nullable=true)
     */
    private $highEndDuty;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_30", type="boolean", nullable=true)
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
     * @var bool|null
     *
     * @ORM\Column(name="column_33", type="boolean", nullable=true)
     */
    private $column33;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="duty_recorder_allowed", type="boolean", nullable=true)
     */
    private $dutyRecorderAllowed;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_35", type="boolean", nullable=true)
     */
    private $column35;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_36", type="boolean", nullable=true)
     */
    private $column36;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_37", type="boolean", nullable=true)
     */
    private $column37;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_38", type="boolean", nullable=true)
     */
    private $column38;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name_short", type="string", length=255, nullable=true)
     */
    private $nameShort;

    /**
     * @var int|null
     *
     * @ORM\Column(name="transient_key", type="integer", nullable=true)
     */
    private $transientKey;

    /**
     * @var int|null
     *
     * @ORM\Column(name="transient", type="integer", nullable=true)
     */
    private $transient;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sort_key", type="bigint", nullable=true)
     */
    private $sortKey;

    /**
     * @var int|null
     *
     * @ORM\Column(name="image", type="integer", nullable=true)
     */
    private $image;

    /**
     * @var int|null
     *
     * @ORM\Column(name="icon", type="integer", nullable=true)
     */
    private $icon;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_47", type="integer", nullable=true)
     */
    private $column47;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_48", type="integer", nullable=true)
     */
    private $column48;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_49", type="boolean", nullable=true)
     */
    private $column49;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="level50_60_70roulette", type="boolean", nullable=true)
     */
    private $level506070roulette;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="leveling_roulette", type="boolean", nullable=true)
     */
    private $levelingRoulette;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="msqroulette", type="boolean", nullable=true)
     */
    private $msqroulette;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="guild_hest_roulette", type="boolean", nullable=true)
     */
    private $guildHestRoulette;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="expert_roulette", type="boolean", nullable=true)
     */
    private $expertRoulette;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="trial_roulette", type="boolean", nullable=true)
     */
    private $trialRoulette;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="daily_frontline_challenge", type="boolean", nullable=true)
     */
    private $dailyFrontlineChallenge;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="level80roulette", type="boolean", nullable=true)
     */
    private $level80roulette;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="mentor_roulette", type="boolean", nullable=true)
     */
    private $mentorRoulette;

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
     * @ORM\Column(name="alliance_roulette", type="boolean", nullable=true)
     */
    private $allianceRoulette;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="feast_team_roulette", type="boolean", nullable=true)
     */
    private $feastTeamRoulette;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="normal_raid_roulette", type="boolean", nullable=true)
     */
    private $normalRaidRoulette;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_67", type="boolean", nullable=true)
     */
    private $column67;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_68", type="boolean", nullable=true)
     */
    private $column68;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_69", type="boolean", nullable=true)
     */
    private $column69;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_70", type="boolean", nullable=true)
     */
    private $column70;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_71", type="boolean", nullable=true)
     */
    private $column71;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_72", type="boolean", nullable=true)
     */
    private $column72;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_73", type="boolean", nullable=true)
     */
    private $column73;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_74", type="boolean", nullable=true)
     */
    private $column74;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_75", type="boolean", nullable=true)
     */
    private $column75;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_76", type="boolean", nullable=true)
     */
    private $column76;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_77", type="boolean", nullable=true)
     */
    private $column77;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_78", type="boolean", nullable=true)
     */
    private $column78;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_79", type="boolean", nullable=true)
     */
    private $column79;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_80", type="boolean", nullable=true)
     */
    private $column80;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_81", type="boolean", nullable=true)
     */
    private $column81;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_82", type="boolean", nullable=true)
     */
    private $column82;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_83", type="boolean", nullable=true)
     */
    private $column83;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_84", type="boolean", nullable=true)
     */
    private $column84;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_85", type="boolean", nullable=true)
     */
    private $column85;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_86", type="boolean", nullable=true)
     */
    private $column86;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_87", type="boolean", nullable=true)
     */
    private $column87;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_88", type="boolean", nullable=true)
     */
    private $column88;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_89", type="boolean", nullable=true)
     */
    private $column89;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_90", type="boolean", nullable=true)
     */
    private $column90;

    /**
     * @var ContentType
     *
     * @ORM\ManyToOne(targetEntity="ContentType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="content_type", referencedColumnName="pk")
     * })
     */
    private $contentType;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="unlock_quest", referencedColumnName="pk")
     * })
     */
    private $unlockQuest;

    /**
     * @var ContentMemberType
     *
     * @ORM\ManyToOne(targetEntity="ContentMemberType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="content_member_type", referencedColumnName="pk")
     * })
     */
    private $contentMemberType;

    /**
     * @var ClassJobCategory
     *
     * @ORM\ManyToOne(targetEntity="ClassJobCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="accept_class_job_category", referencedColumnName="pk")
     * })
     */
    private $acceptClassJobCategory;

    /**
     * @var TerritoryType
     *
     * @ORM\ManyToOne(targetEntity="TerritoryType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="territory_type", referencedColumnName="pk")
     * })
     */
    private $territoryType;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getShortCode(): ?string
    {
        return $this->shortCode;
    }

    public function setShortCode(?string $shortCode): self
    {
        $this->shortCode = $shortCode;

        return $this;
    }

    public function getContentLinkType(): ?int
    {
        return $this->contentLinkType;
    }

    public function setContentLinkType(?int $contentLinkType): self
    {
        $this->contentLinkType = $contentLinkType;

        return $this;
    }

    public function getContent(): ?int
    {
        return $this->content;
    }

    public function setContent(?int $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getPvP(): ?bool
    {
        return $this->pvP;
    }

    public function setPvP(?bool $pvP): self
    {
        $this->pvP = $pvP;

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

    public function getColumn7(): ?string
    {
        return $this->column7;
    }

    public function setColumn7(?string $column7): self
    {
        $this->column7 = $column7;

        return $this;
    }

    public function getColumn8(): ?string
    {
        return $this->column8;
    }

    public function setColumn8(?string $column8): self
    {
        $this->column8 = $column8;

        return $this;
    }

    public function getColumn11(): ?int
    {
        return $this->column11;
    }

    public function setColumn11(?int $column11): self
    {
        $this->column11 = $column11;

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

    public function getColumn15(): ?string
    {
        return $this->column15;
    }

    public function setColumn15(?string $column15): self
    {
        $this->column15 = $column15;

        return $this;
    }

    public function getClassJobLevelRequired(): ?int
    {
        return $this->classJobLevelRequired;
    }

    public function setClassJobLevelRequired(?int $classJobLevelRequired): self
    {
        $this->classJobLevelRequired = $classJobLevelRequired;

        return $this;
    }

    public function getClassJobLevelSync(): ?int
    {
        return $this->classJobLevelSync;
    }

    public function setClassJobLevelSync(?int $classJobLevelSync): self
    {
        $this->classJobLevelSync = $classJobLevelSync;

        return $this;
    }

    public function getItemLevelRequired(): ?string
    {
        return $this->itemLevelRequired;
    }

    public function setItemLevelRequired(?string $itemLevelRequired): self
    {
        $this->itemLevelRequired = $itemLevelRequired;

        return $this;
    }

    public function getItemLevelSync(): ?string
    {
        return $this->itemLevelSync;
    }

    public function setItemLevelSync(?string $itemLevelSync): self
    {
        $this->itemLevelSync = $itemLevelSync;

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

    public function getAllowUndersized(): ?bool
    {
        return $this->allowUndersized;
    }

    public function setAllowUndersized(?bool $allowUndersized): self
    {
        $this->allowUndersized = $allowUndersized;

        return $this;
    }

    public function getAllowReplacement(): ?bool
    {
        return $this->allowReplacement;
    }

    public function setAllowReplacement(?bool $allowReplacement): self
    {
        $this->allowReplacement = $allowReplacement;

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

    public function getAllowExplorerMode(): ?bool
    {
        return $this->allowExplorerMode;
    }

    public function setAllowExplorerMode(?bool $allowExplorerMode): self
    {
        $this->allowExplorerMode = $allowExplorerMode;

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

    public function getColumn26(): ?bool
    {
        return $this->column26;
    }

    public function setColumn26(?bool $column26): self
    {
        $this->column26 = $column26;

        return $this;
    }

    public function getColumn27(): ?int
    {
        return $this->column27;
    }

    public function setColumn27(?int $column27): self
    {
        $this->column27 = $column27;

        return $this;
    }

    public function getColumn28(): ?bool
    {
        return $this->column28;
    }

    public function setColumn28(?bool $column28): self
    {
        $this->column28 = $column28;

        return $this;
    }

    public function getHighEndDuty(): ?bool
    {
        return $this->highEndDuty;
    }

    public function setHighEndDuty(?bool $highEndDuty): self
    {
        $this->highEndDuty = $highEndDuty;

        return $this;
    }

    public function getColumn30(): ?bool
    {
        return $this->column30;
    }

    public function setColumn30(?bool $column30): self
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

    public function getColumn33(): ?bool
    {
        return $this->column33;
    }

    public function setColumn33(?bool $column33): self
    {
        $this->column33 = $column33;

        return $this;
    }

    public function getDutyRecorderAllowed(): ?bool
    {
        return $this->dutyRecorderAllowed;
    }

    public function setDutyRecorderAllowed(?bool $dutyRecorderAllowed): self
    {
        $this->dutyRecorderAllowed = $dutyRecorderAllowed;

        return $this;
    }

    public function getColumn35(): ?bool
    {
        return $this->column35;
    }

    public function setColumn35(?bool $column35): self
    {
        $this->column35 = $column35;

        return $this;
    }

    public function getColumn36(): ?bool
    {
        return $this->column36;
    }

    public function setColumn36(?bool $column36): self
    {
        $this->column36 = $column36;

        return $this;
    }

    public function getColumn37(): ?bool
    {
        return $this->column37;
    }

    public function setColumn37(?bool $column37): self
    {
        $this->column37 = $column37;

        return $this;
    }

    public function getColumn38(): ?bool
    {
        return $this->column38;
    }

    public function setColumn38(?bool $column38): self
    {
        $this->column38 = $column38;

        return $this;
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

    public function getNameShort(): ?string
    {
        return $this->nameShort;
    }

    public function setNameShort(?string $nameShort): self
    {
        $this->nameShort = $nameShort;

        return $this;
    }

    public function getTransientKey(): ?int
    {
        return $this->transientKey;
    }

    public function setTransientKey(?int $transientKey): self
    {
        $this->transientKey = $transientKey;

        return $this;
    }

    public function getTransient(): ?int
    {
        return $this->transient;
    }

    public function setTransient(?int $transient): self
    {
        $this->transient = $transient;

        return $this;
    }

    public function getSortKey(): ?string
    {
        return $this->sortKey;
    }

    public function setSortKey(?string $sortKey): self
    {
        $this->sortKey = $sortKey;

        return $this;
    }

    public function getImage(): ?int
    {
        return $this->image;
    }

    public function setImage(?int $image): self
    {
        $this->image = $image;

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

    public function getColumn47(): ?int
    {
        return $this->column47;
    }

    public function setColumn47(?int $column47): self
    {
        $this->column47 = $column47;

        return $this;
    }

    public function getColumn48(): ?int
    {
        return $this->column48;
    }

    public function setColumn48(?int $column48): self
    {
        $this->column48 = $column48;

        return $this;
    }

    public function getColumn49(): ?bool
    {
        return $this->column49;
    }

    public function setColumn49(?bool $column49): self
    {
        $this->column49 = $column49;

        return $this;
    }

    public function getLevel506070roulette(): ?bool
    {
        return $this->level506070roulette;
    }

    public function setLevel506070roulette(?bool $level506070roulette): self
    {
        $this->level506070roulette = $level506070roulette;

        return $this;
    }

    public function getLevelingRoulette(): ?bool
    {
        return $this->levelingRoulette;
    }

    public function setLevelingRoulette(?bool $levelingRoulette): self
    {
        $this->levelingRoulette = $levelingRoulette;

        return $this;
    }

    public function getMsqroulette(): ?bool
    {
        return $this->msqroulette;
    }

    public function setMsqroulette(?bool $msqroulette): self
    {
        $this->msqroulette = $msqroulette;

        return $this;
    }

    public function getGuildHestRoulette(): ?bool
    {
        return $this->guildHestRoulette;
    }

    public function setGuildHestRoulette(?bool $guildHestRoulette): self
    {
        $this->guildHestRoulette = $guildHestRoulette;

        return $this;
    }

    public function getExpertRoulette(): ?bool
    {
        return $this->expertRoulette;
    }

    public function setExpertRoulette(?bool $expertRoulette): self
    {
        $this->expertRoulette = $expertRoulette;

        return $this;
    }

    public function getTrialRoulette(): ?bool
    {
        return $this->trialRoulette;
    }

    public function setTrialRoulette(?bool $trialRoulette): self
    {
        $this->trialRoulette = $trialRoulette;

        return $this;
    }

    public function getDailyFrontlineChallenge(): ?bool
    {
        return $this->dailyFrontlineChallenge;
    }

    public function setDailyFrontlineChallenge(?bool $dailyFrontlineChallenge): self
    {
        $this->dailyFrontlineChallenge = $dailyFrontlineChallenge;

        return $this;
    }

    public function getLevel80roulette(): ?bool
    {
        return $this->level80roulette;
    }

    public function setLevel80roulette(?bool $level80roulette): self
    {
        $this->level80roulette = $level80roulette;

        return $this;
    }

    public function getMentorRoulette(): ?bool
    {
        return $this->mentorRoulette;
    }

    public function setMentorRoulette(?bool $mentorRoulette): self
    {
        $this->mentorRoulette = $mentorRoulette;

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

    public function getAllianceRoulette(): ?bool
    {
        return $this->allianceRoulette;
    }

    public function setAllianceRoulette(?bool $allianceRoulette): self
    {
        $this->allianceRoulette = $allianceRoulette;

        return $this;
    }

    public function getFeastTeamRoulette(): ?bool
    {
        return $this->feastTeamRoulette;
    }

    public function setFeastTeamRoulette(?bool $feastTeamRoulette): self
    {
        $this->feastTeamRoulette = $feastTeamRoulette;

        return $this;
    }

    public function getNormalRaidRoulette(): ?bool
    {
        return $this->normalRaidRoulette;
    }

    public function setNormalRaidRoulette(?bool $normalRaidRoulette): self
    {
        $this->normalRaidRoulette = $normalRaidRoulette;

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

    public function getColumn68(): ?bool
    {
        return $this->column68;
    }

    public function setColumn68(?bool $column68): self
    {
        $this->column68 = $column68;

        return $this;
    }

    public function getColumn69(): ?bool
    {
        return $this->column69;
    }

    public function setColumn69(?bool $column69): self
    {
        $this->column69 = $column69;

        return $this;
    }

    public function getColumn70(): ?bool
    {
        return $this->column70;
    }

    public function setColumn70(?bool $column70): self
    {
        $this->column70 = $column70;

        return $this;
    }

    public function getColumn71(): ?bool
    {
        return $this->column71;
    }

    public function setColumn71(?bool $column71): self
    {
        $this->column71 = $column71;

        return $this;
    }

    public function getColumn72(): ?bool
    {
        return $this->column72;
    }

    public function setColumn72(?bool $column72): self
    {
        $this->column72 = $column72;

        return $this;
    }

    public function getColumn73(): ?bool
    {
        return $this->column73;
    }

    public function setColumn73(?bool $column73): self
    {
        $this->column73 = $column73;

        return $this;
    }

    public function getColumn74(): ?bool
    {
        return $this->column74;
    }

    public function setColumn74(?bool $column74): self
    {
        $this->column74 = $column74;

        return $this;
    }

    public function getColumn75(): ?bool
    {
        return $this->column75;
    }

    public function setColumn75(?bool $column75): self
    {
        $this->column75 = $column75;

        return $this;
    }

    public function getColumn76(): ?bool
    {
        return $this->column76;
    }

    public function setColumn76(?bool $column76): self
    {
        $this->column76 = $column76;

        return $this;
    }

    public function getColumn77(): ?bool
    {
        return $this->column77;
    }

    public function setColumn77(?bool $column77): self
    {
        $this->column77 = $column77;

        return $this;
    }

    public function getColumn78(): ?bool
    {
        return $this->column78;
    }

    public function setColumn78(?bool $column78): self
    {
        $this->column78 = $column78;

        return $this;
    }

    public function getColumn79(): ?bool
    {
        return $this->column79;
    }

    public function setColumn79(?bool $column79): self
    {
        $this->column79 = $column79;

        return $this;
    }

    public function getColumn80(): ?bool
    {
        return $this->column80;
    }

    public function setColumn80(?bool $column80): self
    {
        $this->column80 = $column80;

        return $this;
    }

    public function getColumn81(): ?bool
    {
        return $this->column81;
    }

    public function setColumn81(?bool $column81): self
    {
        $this->column81 = $column81;

        return $this;
    }

    public function getColumn82(): ?bool
    {
        return $this->column82;
    }

    public function setColumn82(?bool $column82): self
    {
        $this->column82 = $column82;

        return $this;
    }

    public function getColumn83(): ?bool
    {
        return $this->column83;
    }

    public function setColumn83(?bool $column83): self
    {
        $this->column83 = $column83;

        return $this;
    }

    public function getColumn84(): ?bool
    {
        return $this->column84;
    }

    public function setColumn84(?bool $column84): self
    {
        $this->column84 = $column84;

        return $this;
    }

    public function getColumn85(): ?bool
    {
        return $this->column85;
    }

    public function setColumn85(?bool $column85): self
    {
        $this->column85 = $column85;

        return $this;
    }

    public function getColumn86(): ?bool
    {
        return $this->column86;
    }

    public function setColumn86(?bool $column86): self
    {
        $this->column86 = $column86;

        return $this;
    }

    public function getColumn87(): ?bool
    {
        return $this->column87;
    }

    public function setColumn87(?bool $column87): self
    {
        $this->column87 = $column87;

        return $this;
    }

    public function getColumn88(): ?bool
    {
        return $this->column88;
    }

    public function setColumn88(?bool $column88): self
    {
        $this->column88 = $column88;

        return $this;
    }

    public function getColumn89(): ?bool
    {
        return $this->column89;
    }

    public function setColumn89(?bool $column89): self
    {
        $this->column89 = $column89;

        return $this;
    }

    public function getColumn90(): ?bool
    {
        return $this->column90;
    }

    public function setColumn90(?bool $column90): self
    {
        $this->column90 = $column90;

        return $this;
    }

    public function getContentType(): ?ContentType
    {
        return $this->contentType;
    }

    public function setContentType(?ContentType $contentType): self
    {
        $this->contentType = $contentType;

        return $this;
    }

    public function getUnlockQuest(): ?Quest
    {
        return $this->unlockQuest;
    }

    public function setUnlockQuest(?Quest $unlockQuest): self
    {
        $this->unlockQuest = $unlockQuest;

        return $this;
    }

    public function getContentMemberType(): ?ContentMemberType
    {
        return $this->contentMemberType;
    }

    public function setContentMemberType(?ContentMemberType $contentMemberType): self
    {
        $this->contentMemberType = $contentMemberType;

        return $this;
    }

    public function getAcceptClassJobCategory(): ?ClassJobCategory
    {
        return $this->acceptClassJobCategory;
    }

    public function setAcceptClassJobCategory(?ClassJobCategory $acceptClassJobCategory): self
    {
        $this->acceptClassJobCategory = $acceptClassJobCategory;

        return $this;
    }

    public function getTerritoryType(): ?TerritoryType
    {
        return $this->territoryType;
    }

    public function setTerritoryType(?TerritoryType $territoryType): self
    {
        $this->territoryType = $territoryType;

        return $this;
    }
}
