<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Leve.
 *
 * @ORM\Table(name="leve", indexes={@ORM\Index(name="idx_5a15d5cbf5a05086", columns={"level_start"}), @ORM\Index(name="idx_5a15d5cbcb33b5de", columns={"level_levemete"}), @ORM\Index(name="idx_5a15d5cb7f9f91c2", columns={"place_name_start"}), @ORM\Index(name="idx_5a15d5cbbe2e520f", columns={"leve_client"}), @ORM\Index(name="idx_5a15d5cb21c31f8", columns={"leve_vfx_frame"}), @ORM\Index(name="idx_5a15d5cbadad26d9", columns={"bgm"}), @ORM\Index(name="idx_5a15d5cb4ce6c7a4", columns={"town"}), @ORM\Index(name="idx_5a15d5cb192a2107", columns={"leve_vfx"}), @ORM\Index(name="idx_5a15d5cb3972bed8", columns={"leve_reward_item"}), @ORM\Index(name="idx_5a15d5cba006e4be", columns={"leve_assignment_type"}), @ORM\Index(name="idx_5a15d5cb512321ad", columns={"place_name_issued"}), @ORM\Index(name="idx_5a15d5cb608b00d2", columns={"journal_genre"}), @ORM\Index(name="idx_5a15d5cb350f1792", columns={"place_name_start_zone"}), @ORM\Index(name="idx_5a15d5cbae8947ec", columns={"class_job_category"})})
 * @ORM\Entity
 */
class Leve
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="leve_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=993, nullable=true)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="string", length=993, nullable=true)
     */
    private $description;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_5", type="integer", nullable=true)
     */
    private $column5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="class_job_level", type="bigint", nullable=true)
     */
    private $classJobLevel;

    /**
     * @var int|null
     *
     * @ORM\Column(name="time_limit", type="integer", nullable=true)
     */
    private $timeLimit;

    /**
     * @var int|null
     *
     * @ORM\Column(name="allowance_cost", type="integer", nullable=true)
     */
    private $allowanceCost;

    /**
     * @var int|null
     *
     * @ORM\Column(name="evaluation", type="integer", nullable=true)
     */
    private $evaluation;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_13", type="bigint", nullable=true)
     */
    private $column13;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_14", type="integer", nullable=true)
     */
    private $column14;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_15", type="boolean", nullable=true)
     */
    private $column15;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_18", type="integer", nullable=true)
     */
    private $column18;

    /**
     * @var int|null
     *
     * @ORM\Column(name="icon_city_state", type="integer", nullable=true)
     */
    private $iconCityState;

    /**
     * @var int|null
     *
     * @ORM\Column(name="data_id", type="integer", nullable=true)
     */
    private $dataId;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="can_cancel", type="boolean", nullable=true)
     */
    private $canCancel;

    /**
     * @var int|null
     *
     * @ORM\Column(name="max_difficulty", type="integer", nullable=true)
     */
    private $maxDifficulty;

    /**
     * @var string|null
     *
     * @ORM\Column(name="exp_factor", type="string", length=993, nullable=true)
     */
    private $expFactor;

    /**
     * @var int|null
     *
     * @ORM\Column(name="exp_reward", type="bigint", nullable=true)
     */
    private $expReward;

    /**
     * @var int|null
     *
     * @ORM\Column(name="gil_reward", type="bigint", nullable=true)
     */
    private $gilReward;

    /**
     * @var int|null
     *
     * @ORM\Column(name="icon_issuer", type="integer", nullable=true)
     */
    private $iconIssuer;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="locked_leve", type="boolean", nullable=true)
     */
    private $lockedLeve;

    /**
     * @var Bgm
     *
     * @ORM\ManyToOne(targetEntity="Bgm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="bgm", referencedColumnName="pk")
     * })
     */
    private $bgm;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="level_start", referencedColumnName="pk")
     * })
     */
    private $levelStart;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="level_levemete", referencedColumnName="pk")
     * })
     */
    private $levelLevemete;

    /**
     * @var LeveVfx
     *
     * @ORM\ManyToOne(targetEntity="LeveVfx")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="leve_vfx_frame", referencedColumnName="pk")
     * })
     */
    private $leveVfxFrame;

    /**
     * @var LeveVfx
     *
     * @ORM\ManyToOne(targetEntity="LeveVfx")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="leve_vfx", referencedColumnName="pk")
     * })
     */
    private $leveVfx;

    /**
     * @var LeveRewardItem
     *
     * @ORM\ManyToOne(targetEntity="LeveRewardItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="leve_reward_item", referencedColumnName="pk")
     * })
     */
    private $leveRewardItem;

    /**
     * @var PlaceName
     *
     * @ORM\ManyToOne(targetEntity="PlaceName")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="place_name_start_zone", referencedColumnName="pk")
     * })
     */
    private $placeNameStartZone;

    /**
     * @var JournalGenre
     *
     * @ORM\ManyToOne(targetEntity="JournalGenre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="journal_genre", referencedColumnName="pk")
     * })
     */
    private $journalGenre;

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
     * @var PlaceName
     *
     * @ORM\ManyToOne(targetEntity="PlaceName")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="place_name_issued", referencedColumnName="pk")
     * })
     */
    private $placeNameIssued;

    /**
     * @var PlaceName
     *
     * @ORM\ManyToOne(targetEntity="PlaceName")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="place_name_start", referencedColumnName="pk")
     * })
     */
    private $placeNameStart;

    /**
     * @var Town
     *
     * @ORM\ManyToOne(targetEntity="Town")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="town", referencedColumnName="pk")
     * })
     */
    private $town;

    /**
     * @var LeveAssignmentType
     *
     * @ORM\ManyToOne(targetEntity="LeveAssignmentType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="leve_assignment_type", referencedColumnName="pk")
     * })
     */
    private $leveAssignmentType;

    /**
     * @var LeveClient
     *
     * @ORM\ManyToOne(targetEntity="LeveClient")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="leve_client", referencedColumnName="pk")
     * })
     */
    private $leveClient;

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

    public function getColumn5(): ?int
    {
        return $this->column5;
    }

    public function setColumn5(?int $column5): self
    {
        $this->column5 = $column5;

        return $this;
    }

    public function getClassJobLevel(): ?string
    {
        return $this->classJobLevel;
    }

    public function setClassJobLevel(?string $classJobLevel): self
    {
        $this->classJobLevel = $classJobLevel;

        return $this;
    }

    public function getTimeLimit(): ?int
    {
        return $this->timeLimit;
    }

    public function setTimeLimit(?int $timeLimit): self
    {
        $this->timeLimit = $timeLimit;

        return $this;
    }

    public function getAllowanceCost(): ?int
    {
        return $this->allowanceCost;
    }

    public function setAllowanceCost(?int $allowanceCost): self
    {
        $this->allowanceCost = $allowanceCost;

        return $this;
    }

    public function getEvaluation(): ?int
    {
        return $this->evaluation;
    }

    public function setEvaluation(?int $evaluation): self
    {
        $this->evaluation = $evaluation;

        return $this;
    }

    public function getColumn13(): ?string
    {
        return $this->column13;
    }

    public function setColumn13(?string $column13): self
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

    public function getColumn15(): ?bool
    {
        return $this->column15;
    }

    public function setColumn15(?bool $column15): self
    {
        $this->column15 = $column15;

        return $this;
    }

    public function getColumn18(): ?int
    {
        return $this->column18;
    }

    public function setColumn18(?int $column18): self
    {
        $this->column18 = $column18;

        return $this;
    }

    public function getIconCityState(): ?int
    {
        return $this->iconCityState;
    }

    public function setIconCityState(?int $iconCityState): self
    {
        $this->iconCityState = $iconCityState;

        return $this;
    }

    public function getDataId(): ?int
    {
        return $this->dataId;
    }

    public function setDataId(?int $dataId): self
    {
        $this->dataId = $dataId;

        return $this;
    }

    public function getCanCancel(): ?bool
    {
        return $this->canCancel;
    }

    public function setCanCancel(?bool $canCancel): self
    {
        $this->canCancel = $canCancel;

        return $this;
    }

    public function getMaxDifficulty(): ?int
    {
        return $this->maxDifficulty;
    }

    public function setMaxDifficulty(?int $maxDifficulty): self
    {
        $this->maxDifficulty = $maxDifficulty;

        return $this;
    }

    public function getExpFactor(): ?string
    {
        return $this->expFactor;
    }

    public function setExpFactor(?string $expFactor): self
    {
        $this->expFactor = $expFactor;

        return $this;
    }

    public function getExpReward(): ?string
    {
        return $this->expReward;
    }

    public function setExpReward(?string $expReward): self
    {
        $this->expReward = $expReward;

        return $this;
    }

    public function getGilReward(): ?string
    {
        return $this->gilReward;
    }

    public function setGilReward(?string $gilReward): self
    {
        $this->gilReward = $gilReward;

        return $this;
    }

    public function getIconIssuer(): ?int
    {
        return $this->iconIssuer;
    }

    public function setIconIssuer(?int $iconIssuer): self
    {
        $this->iconIssuer = $iconIssuer;

        return $this;
    }

    public function getLockedLeve(): ?bool
    {
        return $this->lockedLeve;
    }

    public function setLockedLeve(?bool $lockedLeve): self
    {
        $this->lockedLeve = $lockedLeve;

        return $this;
    }

    public function getBgm(): ?Bgm
    {
        return $this->bgm;
    }

    public function setBgm(?Bgm $bgm): self
    {
        $this->bgm = $bgm;

        return $this;
    }

    public function getLevelStart(): ?Level
    {
        return $this->levelStart;
    }

    public function setLevelStart(?Level $levelStart): self
    {
        $this->levelStart = $levelStart;

        return $this;
    }

    public function getLevelLevemete(): ?Level
    {
        return $this->levelLevemete;
    }

    public function setLevelLevemete(?Level $levelLevemete): self
    {
        $this->levelLevemete = $levelLevemete;

        return $this;
    }

    public function getLeveVfxFrame(): ?LeveVfx
    {
        return $this->leveVfxFrame;
    }

    public function setLeveVfxFrame(?LeveVfx $leveVfxFrame): self
    {
        $this->leveVfxFrame = $leveVfxFrame;

        return $this;
    }

    public function getLeveVfx(): ?LeveVfx
    {
        return $this->leveVfx;
    }

    public function setLeveVfx(?LeveVfx $leveVfx): self
    {
        $this->leveVfx = $leveVfx;

        return $this;
    }

    public function getLeveRewardItem(): ?LeveRewardItem
    {
        return $this->leveRewardItem;
    }

    public function setLeveRewardItem(?LeveRewardItem $leveRewardItem): self
    {
        $this->leveRewardItem = $leveRewardItem;

        return $this;
    }

    public function getPlaceNameStartZone(): ?PlaceName
    {
        return $this->placeNameStartZone;
    }

    public function setPlaceNameStartZone(?PlaceName $placeNameStartZone): self
    {
        $this->placeNameStartZone = $placeNameStartZone;

        return $this;
    }

    public function getJournalGenre(): ?JournalGenre
    {
        return $this->journalGenre;
    }

    public function setJournalGenre(?JournalGenre $journalGenre): self
    {
        $this->journalGenre = $journalGenre;

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

    public function getPlaceNameIssued(): ?PlaceName
    {
        return $this->placeNameIssued;
    }

    public function setPlaceNameIssued(?PlaceName $placeNameIssued): self
    {
        $this->placeNameIssued = $placeNameIssued;

        return $this;
    }

    public function getPlaceNameStart(): ?PlaceName
    {
        return $this->placeNameStart;
    }

    public function setPlaceNameStart(?PlaceName $placeNameStart): self
    {
        $this->placeNameStart = $placeNameStart;

        return $this;
    }

    public function getTown(): ?Town
    {
        return $this->town;
    }

    public function setTown(?Town $town): self
    {
        $this->town = $town;

        return $this;
    }

    public function getLeveAssignmentType(): ?LeveAssignmentType
    {
        return $this->leveAssignmentType;
    }

    public function setLeveAssignmentType(?LeveAssignmentType $leveAssignmentType): self
    {
        $this->leveAssignmentType = $leveAssignmentType;

        return $this;
    }

    public function getLeveClient(): ?LeveClient
    {
        return $this->leveClient;
    }

    public function setLeveClient(?LeveClient $leveClient): self
    {
        $this->leveClient = $leveClient;

        return $this;
    }
}
