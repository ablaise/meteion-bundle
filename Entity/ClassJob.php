<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ClassJob.
 *
 * @ORM\Table(name="class_job", indexes={@ORM\Index(name="idx_8d519804ae8947ec", columns={"class_job_category"}), @ORM\Index(name="idx_8d5198044594a238", columns={"prerequisite"}), @ORM\Index(name="idx_8d519804b20e2a3a", columns={"item_starting_weapon"}), @ORM\Index(name="idx_8d519804379291af", columns={"starting_town"}), @ORM\Index(name="idx_8d51980422a72d51", columns={"unlock_quest"}), @ORM\Index(name="idx_8d5198049957a964", columns={"limit_break2"}), @ORM\Index(name="idx_8d519804db87bf6c", columns={"class_job_parent"}), @ORM\Index(name="idx_8d5198045ef8de", columns={"limit_break1"}), @ORM\Index(name="idx_8d519804ee5099f2", columns={"limit_break3"}), @ORM\Index(name="idx_8d51980418a01735", columns={"item_soul_crystal"}), @ORM\Index(name="idx_8d519804ebc02f54", columns={"monster_note"}), @ORM\Index(name="idx_8d5198044d47bf9a", columns={"relic_quest"})})
 * @ORM\Entity
 */
class ClassJob
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="class_job_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="abbreviation", type="string", length=255, nullable=true)
     */
    private $abbreviation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="column_3", type="string", length=255, nullable=true)
     */
    private $column3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="exp_array_index", type="integer", nullable=true)
     */
    private $expArrayIndex;

    /**
     * @var int|null
     *
     * @ORM\Column(name="battle_class_index", type="integer", nullable=true)
     */
    private $battleClassIndex;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_7", type="integer", nullable=true)
     */
    private $column7;

    /**
     * @var int|null
     *
     * @ORM\Column(name="job_index", type="integer", nullable=true)
     */
    private $jobIndex;

    /**
     * @var int|null
     *
     * @ORM\Column(name="doh_dol_job_index", type="integer", nullable=true)
     */
    private $dohDolJobIndex;

    /**
     * @var int|null
     *
     * @ORM\Column(name="modifier_hit_points", type="bigint", nullable=true)
     */
    private $modifierHitPoints;

    /**
     * @var int|null
     *
     * @ORM\Column(name="modifier_mana_points", type="bigint", nullable=true)
     */
    private $modifierManaPoints;

    /**
     * @var int|null
     *
     * @ORM\Column(name="modifier_strength", type="bigint", nullable=true)
     */
    private $modifierStrength;

    /**
     * @var int|null
     *
     * @ORM\Column(name="modifier_vitality", type="bigint", nullable=true)
     */
    private $modifierVitality;

    /**
     * @var int|null
     *
     * @ORM\Column(name="modifier_dexterity", type="bigint", nullable=true)
     */
    private $modifierDexterity;

    /**
     * @var int|null
     *
     * @ORM\Column(name="modifier_intelligence", type="bigint", nullable=true)
     */
    private $modifierIntelligence;

    /**
     * @var int|null
     *
     * @ORM\Column(name="modifier_mind", type="bigint", nullable=true)
     */
    private $modifierMind;

    /**
     * @var int|null
     *
     * @ORM\Column(name="modifier_piety", type="bigint", nullable=true)
     */
    private $modifierPiety;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_18", type="bigint", nullable=true)
     */
    private $column18;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_19", type="bigint", nullable=true)
     */
    private $column19;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_20", type="bigint", nullable=true)
     */
    private $column20;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_21", type="bigint", nullable=true)
     */
    private $column21;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_22", type="bigint", nullable=true)
     */
    private $column22;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_23", type="bigint", nullable=true)
     */
    private $column23;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_24", type="integer", nullable=true)
     */
    private $column24;

    /**
     * @var int|null
     *
     * @ORM\Column(name="pv_paction_sort_row", type="integer", nullable=true)
     */
    private $pvPactionSortRow;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_26", type="integer", nullable=true)
     */
    private $column26;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name_english", type="string", length=255, nullable=true)
     */
    private $nameEnglish;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_30", type="integer", nullable=true)
     */
    private $column30;

    /**
     * @var int|null
     *
     * @ORM\Column(name="role", type="integer", nullable=true)
     */
    private $role;

    /**
     * @var int|null
     *
     * @ORM\Column(name="primary_stat", type="integer", nullable=true)
     */
    private $primaryStat;

    /**
     * @var int|null
     *
     * @ORM\Column(name="uipriority", type="integer", nullable=true)
     */
    private $uipriority;

    /**
     * @var int|null
     *
     * @ORM\Column(name="starting_level", type="integer", nullable=true)
     */
    private $startingLevel;

    /**
     * @var int|null
     *
     * @ORM\Column(name="party_bonus", type="integer", nullable=true)
     */
    private $partyBonus;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_45", type="integer", nullable=true)
     */
    private $column45;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_limited_job", type="boolean", nullable=true)
     */
    private $isLimitedJob;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="can_queue_for_duty", type="boolean", nullable=true)
     */
    private $canQueueForDuty;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="prerequisite", referencedColumnName="pk")
     * })
     */
    private $prerequisite;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="relic_quest", referencedColumnName="pk")
     * })
     */
    private $relicQuest;

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
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_soul_crystal", referencedColumnName="pk")
     * })
     */
    private $itemSoulCrystal;

    /**
     * @var Action
     *
     * @ORM\ManyToOne(targetEntity="Action")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="limit_break3", referencedColumnName="pk")
     * })
     */
    private $limitBreak3;

    /**
     * @var Action
     *
     * @ORM\ManyToOne(targetEntity="Action")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="limit_break2", referencedColumnName="pk")
     * })
     */
    private $limitBreak2;

    /**
     * @var Action
     *
     * @ORM\ManyToOne(targetEntity="Action")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="limit_break1", referencedColumnName="pk")
     * })
     */
    private $limitBreak1;

    /**
     * @var MonsterNote
     *
     * @ORM\ManyToOne(targetEntity="MonsterNote")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="monster_note", referencedColumnName="pk")
     * })
     */
    private $monsterNote;

    /**
     * @var Town
     *
     * @ORM\ManyToOne(targetEntity="Town")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="starting_town", referencedColumnName="pk")
     * })
     */
    private $startingTown;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_starting_weapon", referencedColumnName="pk")
     * })
     */
    private $itemStartingWeapon;

    /**
     * @var ClassJob
     *
     * @ORM\ManyToOne(targetEntity="ClassJob")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="class_job_parent", referencedColumnName="pk")
     * })
     */
    private $classJobParent;

    /**
     * @var ClassJobCategory
     *
     * @ORM\ManyToOne(targetEntity="ClassJobCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="class_job_category", referencedColumnName="pk")
     * })
     */
    private $classJobCategory;

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

    public function getAbbreviation(): ?string
    {
        return $this->abbreviation;
    }

    public function setAbbreviation(?string $abbreviation): self
    {
        $this->abbreviation = $abbreviation;

        return $this;
    }

    public function getColumn3(): ?string
    {
        return $this->column3;
    }

    public function setColumn3(?string $column3): self
    {
        $this->column3 = $column3;

        return $this;
    }

    public function getExpArrayIndex(): ?int
    {
        return $this->expArrayIndex;
    }

    public function setExpArrayIndex(?int $expArrayIndex): self
    {
        $this->expArrayIndex = $expArrayIndex;

        return $this;
    }

    public function getBattleClassIndex(): ?int
    {
        return $this->battleClassIndex;
    }

    public function setBattleClassIndex(?int $battleClassIndex): self
    {
        $this->battleClassIndex = $battleClassIndex;

        return $this;
    }

    public function getColumn7(): ?int
    {
        return $this->column7;
    }

    public function setColumn7(?int $column7): self
    {
        $this->column7 = $column7;

        return $this;
    }

    public function getJobIndex(): ?int
    {
        return $this->jobIndex;
    }

    public function setJobIndex(?int $jobIndex): self
    {
        $this->jobIndex = $jobIndex;

        return $this;
    }

    public function getDohDolJobIndex(): ?int
    {
        return $this->dohDolJobIndex;
    }

    public function setDohDolJobIndex(?int $dohDolJobIndex): self
    {
        $this->dohDolJobIndex = $dohDolJobIndex;

        return $this;
    }

    public function getModifierHitPoints(): ?string
    {
        return $this->modifierHitPoints;
    }

    public function setModifierHitPoints(?string $modifierHitPoints): self
    {
        $this->modifierHitPoints = $modifierHitPoints;

        return $this;
    }

    public function getModifierManaPoints(): ?string
    {
        return $this->modifierManaPoints;
    }

    public function setModifierManaPoints(?string $modifierManaPoints): self
    {
        $this->modifierManaPoints = $modifierManaPoints;

        return $this;
    }

    public function getModifierStrength(): ?string
    {
        return $this->modifierStrength;
    }

    public function setModifierStrength(?string $modifierStrength): self
    {
        $this->modifierStrength = $modifierStrength;

        return $this;
    }

    public function getModifierVitality(): ?string
    {
        return $this->modifierVitality;
    }

    public function setModifierVitality(?string $modifierVitality): self
    {
        $this->modifierVitality = $modifierVitality;

        return $this;
    }

    public function getModifierDexterity(): ?string
    {
        return $this->modifierDexterity;
    }

    public function setModifierDexterity(?string $modifierDexterity): self
    {
        $this->modifierDexterity = $modifierDexterity;

        return $this;
    }

    public function getModifierIntelligence(): ?string
    {
        return $this->modifierIntelligence;
    }

    public function setModifierIntelligence(?string $modifierIntelligence): self
    {
        $this->modifierIntelligence = $modifierIntelligence;

        return $this;
    }

    public function getModifierMind(): ?string
    {
        return $this->modifierMind;
    }

    public function setModifierMind(?string $modifierMind): self
    {
        $this->modifierMind = $modifierMind;

        return $this;
    }

    public function getModifierPiety(): ?string
    {
        return $this->modifierPiety;
    }

    public function setModifierPiety(?string $modifierPiety): self
    {
        $this->modifierPiety = $modifierPiety;

        return $this;
    }

    public function getColumn18(): ?string
    {
        return $this->column18;
    }

    public function setColumn18(?string $column18): self
    {
        $this->column18 = $column18;

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

    public function getColumn22(): ?string
    {
        return $this->column22;
    }

    public function setColumn22(?string $column22): self
    {
        $this->column22 = $column22;

        return $this;
    }

    public function getColumn23(): ?string
    {
        return $this->column23;
    }

    public function setColumn23(?string $column23): self
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

    public function getPvPactionSortRow(): ?int
    {
        return $this->pvPactionSortRow;
    }

    public function setPvPactionSortRow(?int $pvPactionSortRow): self
    {
        $this->pvPactionSortRow = $pvPactionSortRow;

        return $this;
    }

    public function getColumn26(): ?int
    {
        return $this->column26;
    }

    public function setColumn26(?int $column26): self
    {
        $this->column26 = $column26;

        return $this;
    }

    public function getNameEnglish(): ?string
    {
        return $this->nameEnglish;
    }

    public function setNameEnglish(?string $nameEnglish): self
    {
        $this->nameEnglish = $nameEnglish;

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

    public function getRole(): ?int
    {
        return $this->role;
    }

    public function setRole(?int $role): self
    {
        $this->role = $role;

        return $this;
    }

    public function getPrimaryStat(): ?int
    {
        return $this->primaryStat;
    }

    public function setPrimaryStat(?int $primaryStat): self
    {
        $this->primaryStat = $primaryStat;

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

    public function getStartingLevel(): ?int
    {
        return $this->startingLevel;
    }

    public function setStartingLevel(?int $startingLevel): self
    {
        $this->startingLevel = $startingLevel;

        return $this;
    }

    public function getPartyBonus(): ?int
    {
        return $this->partyBonus;
    }

    public function setPartyBonus(?int $partyBonus): self
    {
        $this->partyBonus = $partyBonus;

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

    public function getIsLimitedJob(): ?bool
    {
        return $this->isLimitedJob;
    }

    public function setIsLimitedJob(?bool $isLimitedJob): self
    {
        $this->isLimitedJob = $isLimitedJob;

        return $this;
    }

    public function getCanQueueForDuty(): ?bool
    {
        return $this->canQueueForDuty;
    }

    public function setCanQueueForDuty(?bool $canQueueForDuty): self
    {
        $this->canQueueForDuty = $canQueueForDuty;

        return $this;
    }

    public function getPrerequisite(): ?Quest
    {
        return $this->prerequisite;
    }

    public function setPrerequisite(?Quest $prerequisite): self
    {
        $this->prerequisite = $prerequisite;

        return $this;
    }

    public function getRelicQuest(): ?Quest
    {
        return $this->relicQuest;
    }

    public function setRelicQuest(?Quest $relicQuest): self
    {
        $this->relicQuest = $relicQuest;

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

    public function getItemSoulCrystal(): ?Item
    {
        return $this->itemSoulCrystal;
    }

    public function setItemSoulCrystal(?Item $itemSoulCrystal): self
    {
        $this->itemSoulCrystal = $itemSoulCrystal;

        return $this;
    }

    public function getLimitBreak3(): ?Action
    {
        return $this->limitBreak3;
    }

    public function setLimitBreak3(?Action $limitBreak3): self
    {
        $this->limitBreak3 = $limitBreak3;

        return $this;
    }

    public function getLimitBreak2(): ?Action
    {
        return $this->limitBreak2;
    }

    public function setLimitBreak2(?Action $limitBreak2): self
    {
        $this->limitBreak2 = $limitBreak2;

        return $this;
    }

    public function getLimitBreak1(): ?Action
    {
        return $this->limitBreak1;
    }

    public function setLimitBreak1(?Action $limitBreak1): self
    {
        $this->limitBreak1 = $limitBreak1;

        return $this;
    }

    public function getMonsterNote(): ?MonsterNote
    {
        return $this->monsterNote;
    }

    public function setMonsterNote(?MonsterNote $monsterNote): self
    {
        $this->monsterNote = $monsterNote;

        return $this;
    }

    public function getStartingTown(): ?Town
    {
        return $this->startingTown;
    }

    public function setStartingTown(?Town $startingTown): self
    {
        $this->startingTown = $startingTown;

        return $this;
    }

    public function getItemStartingWeapon(): ?Item
    {
        return $this->itemStartingWeapon;
    }

    public function setItemStartingWeapon(?Item $itemStartingWeapon): self
    {
        $this->itemStartingWeapon = $itemStartingWeapon;

        return $this;
    }

    public function getClassJobParent(): ?self
    {
        return $this->classJobParent;
    }

    public function setClassJobParent(?self $classJobParent): self
    {
        $this->classJobParent = $classJobParent;

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
}
