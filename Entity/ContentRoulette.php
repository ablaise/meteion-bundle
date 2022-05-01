<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ContentRoulette.
 *
 * @ORM\Table(name="content_roulette", indexes={@ORM\Index(name="idx_8ab877c1237cd1f3", columns={"content_member_type"}), @ORM\Index(name="idx_8ab877c14efaf1eb", columns={"content_roulette_role_bonus"}), @ORM\Index(name="idx_8ab877c13951fd6a", columns={"instance_content"}), @ORM\Index(name="idx_8ab877c1ff2cede9", columns={"open_rule"})})
 * @ORM\Entity
 */
class ContentRoulette
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="content_roulette_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=929, nullable=true)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="category", type="string", length=929, nullable=true)
     */
    private $category;

    /**
     * @var string|null
     *
     * @ORM\Column(name="column_3", type="string", length=929, nullable=true)
     */
    private $column3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="string", length=929, nullable=true)
     */
    private $description;

    /**
     * @var string|null
     *
     * @ORM\Column(name="duty_type", type="string", length=929, nullable=true)
     */
    private $dutyType;

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
     * @var bool|null
     *
     * @ORM\Column(name="is_gold_saucer", type="boolean", nullable=true)
     */
    private $isGoldSaucer;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_in_duty_finder", type="boolean", nullable=true)
     */
    private $isInDutyFinder;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_pv_p", type="boolean", nullable=true)
     */
    private $isPvP;

    /**
     * @var int|null
     *
     * @ORM\Column(name="required_level", type="integer", nullable=true)
     */
    private $requiredLevel;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_13", type="integer", nullable=true)
     */
    private $column13;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_level_required", type="bigint", nullable=true)
     */
    private $itemLevelRequired;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_15", type="bigint", nullable=true)
     */
    private $column15;

    /**
     * @var int|null
     *
     * @ORM\Column(name="icon", type="integer", nullable=true)
     */
    private $icon;

    /**
     * @var int|null
     *
     * @ORM\Column(name="reward_tome_a", type="bigint", nullable=true)
     */
    private $rewardTomeA;

    /**
     * @var int|null
     *
     * @ORM\Column(name="reward_tome_b", type="bigint", nullable=true)
     */
    private $rewardTomeB;

    /**
     * @var int|null
     *
     * @ORM\Column(name="reward_tome_c", type="bigint", nullable=true)
     */
    private $rewardTomeC;

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
     * @ORM\Column(name="sort_key", type="integer", nullable=true)
     */
    private $sortKey;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_24", type="integer", nullable=true)
     */
    private $column24;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_26", type="integer", nullable=true)
     */
    private $column26;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_27", type="integer", nullable=true)
     */
    private $column27;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_28", type="integer", nullable=true)
     */
    private $column28;

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
     * @var int|null
     *
     * @ORM\Column(name="column_32", type="integer", nullable=true)
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
     * @ORM\Column(name="column_34", type="boolean", nullable=true)
     */
    private $column34;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="require_all_duties", type="boolean", nullable=true)
     */
    private $requireAllDuties;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_36", type="boolean", nullable=true)
     */
    private $column36;

    /**
     * @var int|null
     *
     * @ORM\Column(name="content_roulette_open_rule", type="integer", nullable=true)
     */
    private $contentRouletteOpenRule;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_39", type="boolean", nullable=true)
     */
    private $column39;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_40", type="integer", nullable=true)
     */
    private $column40;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_41", type="boolean", nullable=true)
     */
    private $column41;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_42", type="boolean", nullable=true)
     */
    private $column42;

    /**
     * @var InstanceContent
     *
     * @ORM\ManyToOne(targetEntity="InstanceContent")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="instance_content", referencedColumnName="pk")
     * })
     */
    private $instanceContent;

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
     * @var ContentRouletteRoleBonus
     *
     * @ORM\ManyToOne(targetEntity="ContentRouletteRoleBonus")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="content_roulette_role_bonus", referencedColumnName="pk")
     * })
     */
    private $contentRouletteRoleBonus;

    /**
     * @var ContentRouletteOpenRule
     *
     * @ORM\ManyToOne(targetEntity="ContentRouletteOpenRule")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="open_rule", referencedColumnName="pk")
     * })
     */
    private $openRule;

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

    public function getCategory(): ?string
    {
        return $this->category;
    }

    public function setCategory(?string $category): self
    {
        $this->category = $category;

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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getDutyType(): ?string
    {
        return $this->dutyType;
    }

    public function setDutyType(?string $dutyType): self
    {
        $this->dutyType = $dutyType;

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

    public function getIsGoldSaucer(): ?bool
    {
        return $this->isGoldSaucer;
    }

    public function setIsGoldSaucer(?bool $isGoldSaucer): self
    {
        $this->isGoldSaucer = $isGoldSaucer;

        return $this;
    }

    public function getIsInDutyFinder(): ?bool
    {
        return $this->isInDutyFinder;
    }

    public function setIsInDutyFinder(?bool $isInDutyFinder): self
    {
        $this->isInDutyFinder = $isInDutyFinder;

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

    public function getRequiredLevel(): ?int
    {
        return $this->requiredLevel;
    }

    public function setRequiredLevel(?int $requiredLevel): self
    {
        $this->requiredLevel = $requiredLevel;

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

    public function getItemLevelRequired(): ?string
    {
        return $this->itemLevelRequired;
    }

    public function setItemLevelRequired(?string $itemLevelRequired): self
    {
        $this->itemLevelRequired = $itemLevelRequired;

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

    public function getIcon(): ?int
    {
        return $this->icon;
    }

    public function setIcon(?int $icon): self
    {
        $this->icon = $icon;

        return $this;
    }

    public function getRewardTomeA(): ?string
    {
        return $this->rewardTomeA;
    }

    public function setRewardTomeA(?string $rewardTomeA): self
    {
        $this->rewardTomeA = $rewardTomeA;

        return $this;
    }

    public function getRewardTomeB(): ?string
    {
        return $this->rewardTomeB;
    }

    public function setRewardTomeB(?string $rewardTomeB): self
    {
        $this->rewardTomeB = $rewardTomeB;

        return $this;
    }

    public function getRewardTomeC(): ?string
    {
        return $this->rewardTomeC;
    }

    public function setRewardTomeC(?string $rewardTomeC): self
    {
        $this->rewardTomeC = $rewardTomeC;

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

    public function getSortKey(): ?int
    {
        return $this->sortKey;
    }

    public function setSortKey(?int $sortKey): self
    {
        $this->sortKey = $sortKey;

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

    public function getColumn26(): ?int
    {
        return $this->column26;
    }

    public function setColumn26(?int $column26): self
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

    public function getColumn28(): ?int
    {
        return $this->column28;
    }

    public function setColumn28(?int $column28): self
    {
        $this->column28 = $column28;

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

    public function getColumn32(): ?int
    {
        return $this->column32;
    }

    public function setColumn32(?int $column32): self
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

    public function getColumn34(): ?bool
    {
        return $this->column34;
    }

    public function setColumn34(?bool $column34): self
    {
        $this->column34 = $column34;

        return $this;
    }

    public function getRequireAllDuties(): ?bool
    {
        return $this->requireAllDuties;
    }

    public function setRequireAllDuties(?bool $requireAllDuties): self
    {
        $this->requireAllDuties = $requireAllDuties;

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

    public function getContentRouletteOpenRule(): ?int
    {
        return $this->contentRouletteOpenRule;
    }

    public function setContentRouletteOpenRule(?int $contentRouletteOpenRule): self
    {
        $this->contentRouletteOpenRule = $contentRouletteOpenRule;

        return $this;
    }

    public function getColumn39(): ?bool
    {
        return $this->column39;
    }

    public function setColumn39(?bool $column39): self
    {
        $this->column39 = $column39;

        return $this;
    }

    public function getColumn40(): ?int
    {
        return $this->column40;
    }

    public function setColumn40(?int $column40): self
    {
        $this->column40 = $column40;

        return $this;
    }

    public function getColumn41(): ?bool
    {
        return $this->column41;
    }

    public function setColumn41(?bool $column41): self
    {
        $this->column41 = $column41;

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

    public function getInstanceContent(): ?InstanceContent
    {
        return $this->instanceContent;
    }

    public function setInstanceContent(?InstanceContent $instanceContent): self
    {
        $this->instanceContent = $instanceContent;

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

    public function getContentRouletteRoleBonus(): ?ContentRouletteRoleBonus
    {
        return $this->contentRouletteRoleBonus;
    }

    public function setContentRouletteRoleBonus(?ContentRouletteRoleBonus $contentRouletteRoleBonus): self
    {
        $this->contentRouletteRoleBonus = $contentRouletteRoleBonus;

        return $this;
    }

    public function getOpenRule(): ?ContentRouletteOpenRule
    {
        return $this->openRule;
    }

    public function setOpenRule(?ContentRouletteOpenRule $openRule): self
    {
        $this->openRule = $openRule;

        return $this;
    }
}
