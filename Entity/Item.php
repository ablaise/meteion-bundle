<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Item.
 *
 * @ORM\Table(name="item", indexes={@ORM\Index(name="idx_1f1b251eae8947ec", columns={"class_job_category"}), @ORM\Index(name="idx_1f1b251e29498bb5", columns={"item_sort_category"}), @ORM\Index(name="idx_1f1b251e72bac6f1", columns={"equip_slot_category"}), @ORM\Index(name="idx_1f1b251e11f187a6", columns={"base_param_special_1"}), @ORM\Index(name="idx_1f1b251e81d41ee", columns={"item_repair"}), @ORM\Index(name="idx_1f1b251e66f6b730", columns={"base_param_special_0"}), @ORM\Index(name="idx_1f1b251e88f8d61c", columns={"base_param_special_2"}), @ORM\Index(name="idx_1f1b251e33d9016f", columns={"base_param_2"}), @ORM\Index(name="idx_1f1b251e763ede0f", columns={"level_item"}), @ORM\Index(name="idx_1f1b251e619b7329", columns={"base_param_special_4"}), @ORM\Index(name="idx_1f1b251edabaa45a", columns={"base_param_4"}), @ORM\Index(name="idx_1f1b251e68edeb02", columns={"class_job_repair"}), @ORM\Index(name="idx_1f1b251eddd76043", columns={"base_param_0"}), @ORM\Index(name="idx_1f1b251eddf5fff7", columns={"item_uicategory"}), @ORM\Index(name="idx_1f1b251e95113826", columns={"class_job_use"}), @ORM\Index(name="idx_1f1b251eaad050d5", columns={"base_param_1"}), @ORM\Index(name="idx_1f1b251e44de31f9", columns={"base_param_3"}), @ORM\Index(name="idx_1f1b251eadbd94cc", columns={"base_param_5"}), @ORM\Index(name="idx_1f1b251ec135f95d", columns={"item_action"}), @ORM\Index(name="idx_1f1b251edf0a79e0", columns={"item_special_bonus"}), @ORM\Index(name="idx_1f1b251ebce974e2", columns={"item_series"}), @ORM\Index(name="idx_1f1b251effffe68a", columns={"base_param_special_3"}), @ORM\Index(name="idx_1f1b251eacda69d6", columns={"item_search_category"}), @ORM\Index(name="idx_1f1b251e65c024fd", columns={"item_glamour"}), @ORM\Index(name="idx_1f1b251e169c43bf", columns={"base_param_special_5"}), @ORM\Index(name="idx_1f1b251eb5ab1f27", columns={"grand_company"})})
 * @ORM\Entity
 */
class Item
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="item_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var string|null
     *
     * @ORM\Column(name="singular", type="string", length=766, nullable=true)
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
     * @ORM\Column(name="plural", type="string", length=766, nullable=true)
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
     * @var string|null
     *
     * @ORM\Column(name="description", type="string", length=766, nullable=true)
     */
    private $description;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=766, nullable=true)
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
     * @ORM\Column(name="rarity", type="integer", nullable=true)
     */
    private $rarity;

    /**
     * @var int|null
     *
     * @ORM\Column(name="filter_group", type="integer", nullable=true)
     */
    private $filterGroup;

    /**
     * @var int|null
     *
     * @ORM\Column(name="additional_data", type="integer", nullable=true)
     */
    private $additionalData;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_20", type="bigint", nullable=true)
     */
    private $column20;

    /**
     * @var int|null
     *
     * @ORM\Column(name="stack_size", type="bigint", nullable=true)
     */
    private $stackSize;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_unique", type="boolean", nullable=true)
     */
    private $isUnique;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_untradable", type="boolean", nullable=true)
     */
    private $isUntradable;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_indisposable", type="boolean", nullable=true)
     */
    private $isIndisposable;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="lot", type="boolean", nullable=true)
     */
    private $lot;

    /**
     * @var int|null
     *
     * @ORM\Column(name="price_mid", type="bigint", nullable=true)
     */
    private $priceMid;

    /**
     * @var int|null
     *
     * @ORM\Column(name="price_low", type="bigint", nullable=true)
     */
    private $priceLow;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="can_be_hq", type="boolean", nullable=true)
     */
    private $canBeHq;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_dyeable", type="boolean", nullable=true)
     */
    private $isDyeable;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_crest_worthy", type="boolean", nullable=true)
     */
    private $isCrestWorthy;

    /**
     * @var int|null
     *
     * @ORM\Column(name="cast_time_s", type="integer", nullable=true)
     */
    private $castTimeS;

    /**
     * @var int|null
     *
     * @ORM\Column(name="cooldown_s", type="bigint", nullable=true)
     */
    private $cooldownS;

    /**
     * @var int|null
     *
     * @ORM\Column(name="desynth", type="bigint", nullable=true)
     */
    private $desynth;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_collectable", type="boolean", nullable=true)
     */
    private $isCollectable;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="always_collectable", type="boolean", nullable=true)
     */
    private $alwaysCollectable;

    /**
     * @var int|null
     *
     * @ORM\Column(name="aetherial_reduce", type="bigint", nullable=true)
     */
    private $aetherialReduce;

    /**
     * @var int|null
     *
     * @ORM\Column(name="level_equip", type="integer", nullable=true)
     */
    private $levelEquip;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_42", type="integer", nullable=true)
     */
    private $column42;

    /**
     * @var int|null
     *
     * @ORM\Column(name="equip_restriction", type="integer", nullable=true)
     */
    private $equipRestriction;

    /**
     * @var int|null
     *
     * @ORM\Column(name="base_param_modifier", type="integer", nullable=true)
     */
    private $baseParamModifier;

    /**
     * @var string|null
     *
     * @ORM\Column(name="model_main", type="string", length=766, nullable=true)
     */
    private $modelMain;

    /**
     * @var string|null
     *
     * @ORM\Column(name="model_sub", type="string", length=766, nullable=true)
     */
    private $modelSub;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_51", type="integer", nullable=true)
     */
    private $column51;

    /**
     * @var int|null
     *
     * @ORM\Column(name="damage_phys", type="bigint", nullable=true)
     */
    private $damagePhys;

    /**
     * @var int|null
     *
     * @ORM\Column(name="damage_mag", type="bigint", nullable=true)
     */
    private $damageMag;

    /**
     * @var int|null
     *
     * @ORM\Column(name="delay_ms", type="bigint", nullable=true)
     */
    private $delayMs;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_55", type="integer", nullable=true)
     */
    private $column55;

    /**
     * @var int|null
     *
     * @ORM\Column(name="block_rate", type="bigint", nullable=true)
     */
    private $blockRate;

    /**
     * @var int|null
     *
     * @ORM\Column(name="block", type="bigint", nullable=true)
     */
    private $block;

    /**
     * @var int|null
     *
     * @ORM\Column(name="defense_phys", type="bigint", nullable=true)
     */
    private $defensePhys;

    /**
     * @var int|null
     *
     * @ORM\Column(name="defense_mag", type="bigint", nullable=true)
     */
    private $defenseMag;

    /**
     * @var int|null
     *
     * @ORM\Column(name="base_param_value_0", type="integer", nullable=true)
     */
    private $baseParamValue0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="base_param_value_1", type="integer", nullable=true)
     */
    private $baseParamValue1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="base_param_value_2", type="integer", nullable=true)
     */
    private $baseParamValue2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="base_param_value_3", type="integer", nullable=true)
     */
    private $baseParamValue3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="base_param_value_4", type="integer", nullable=true)
     */
    private $baseParamValue4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="base_param_value_5", type="integer", nullable=true)
     */
    private $baseParamValue5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_special_bonus_param", type="integer", nullable=true)
     */
    private $itemSpecialBonusParam;

    /**
     * @var int|null
     *
     * @ORM\Column(name="base_param_value_special_0", type="integer", nullable=true)
     */
    private $baseParamValueSpecial0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="base_param_value_special_1", type="integer", nullable=true)
     */
    private $baseParamValueSpecial1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="base_param_value_special_2", type="integer", nullable=true)
     */
    private $baseParamValueSpecial2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="base_param_value_special_3", type="integer", nullable=true)
     */
    private $baseParamValueSpecial3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="base_param_value_special_4", type="integer", nullable=true)
     */
    private $baseParamValueSpecial4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="base_param_value_special_5", type="integer", nullable=true)
     */
    private $baseParamValueSpecial5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="materialize_type", type="integer", nullable=true)
     */
    private $materializeType;

    /**
     * @var int|null
     *
     * @ORM\Column(name="materia_slot_count", type="integer", nullable=true)
     */
    private $materiaSlotCount;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_advanced_melding_permitted", type="boolean", nullable=true)
     */
    private $isAdvancedMeldingPermitted;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_pv_p", type="boolean", nullable=true)
     */
    private $isPvP;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sub_stat_category", type="integer", nullable=true)
     */
    private $subStatCategory;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_glamourous", type="boolean", nullable=true)
     */
    private $isGlamourous;

    /**
     * @var BaseParam
     *
     * @ORM\ManyToOne(targetEntity="BaseParam")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="base_param_special_5", referencedColumnName="pk")
     * })
     */
    private $baseParamSpecial5;

    /**
     * @var BaseParam
     *
     * @ORM\ManyToOne(targetEntity="BaseParam")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="base_param_special_4", referencedColumnName="pk")
     * })
     */
    private $baseParamSpecial4;

    /**
     * @var BaseParam
     *
     * @ORM\ManyToOne(targetEntity="BaseParam")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="base_param_special_3", referencedColumnName="pk")
     * })
     */
    private $baseParamSpecial3;

    /**
     * @var BaseParam
     *
     * @ORM\ManyToOne(targetEntity="BaseParam")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="base_param_special_2", referencedColumnName="pk")
     * })
     */
    private $baseParamSpecial2;

    /**
     * @var BaseParam
     *
     * @ORM\ManyToOne(targetEntity="BaseParam")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="base_param_special_1", referencedColumnName="pk")
     * })
     */
    private $baseParamSpecial1;

    /**
     * @var BaseParam
     *
     * @ORM\ManyToOne(targetEntity="BaseParam")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="base_param_special_0", referencedColumnName="pk")
     * })
     */
    private $baseParamSpecial0;

    /**
     * @var ItemSpecialBonus
     *
     * @ORM\ManyToOne(targetEntity="ItemSpecialBonus")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_special_bonus", referencedColumnName="pk")
     * })
     */
    private $itemSpecialBonus;

    /**
     * @var BaseParam
     *
     * @ORM\ManyToOne(targetEntity="BaseParam")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="base_param_5", referencedColumnName="pk")
     * })
     */
    private $baseParam5;

    /**
     * @var BaseParam
     *
     * @ORM\ManyToOne(targetEntity="BaseParam")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="base_param_4", referencedColumnName="pk")
     * })
     */
    private $baseParam4;

    /**
     * @var BaseParam
     *
     * @ORM\ManyToOne(targetEntity="BaseParam")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="base_param_3", referencedColumnName="pk")
     * })
     */
    private $baseParam3;

    /**
     * @var BaseParam
     *
     * @ORM\ManyToOne(targetEntity="BaseParam")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="base_param_2", referencedColumnName="pk")
     * })
     */
    private $baseParam2;

    /**
     * @var BaseParam
     *
     * @ORM\ManyToOne(targetEntity="BaseParam")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="base_param_1", referencedColumnName="pk")
     * })
     */
    private $baseParam1;

    /**
     * @var BaseParam
     *
     * @ORM\ManyToOne(targetEntity="BaseParam")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="base_param_0", referencedColumnName="pk")
     * })
     */
    private $baseParam0;

    /**
     * @var ClassJob
     *
     * @ORM\ManyToOne(targetEntity="ClassJob")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="class_job_use", referencedColumnName="pk")
     * })
     */
    private $classJobUse;

    /**
     * @var ItemSeries
     *
     * @ORM\ManyToOne(targetEntity="ItemSeries")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_series", referencedColumnName="pk")
     * })
     */
    private $itemSeries;

    /**
     * @var GrandCompany
     *
     * @ORM\ManyToOne(targetEntity="GrandCompany")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="grand_company", referencedColumnName="pk")
     * })
     */
    private $grandCompany;

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
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_glamour", referencedColumnName="pk")
     * })
     */
    private $itemGlamour;

    /**
     * @var ItemRepairResource
     *
     * @ORM\ManyToOne(targetEntity="ItemRepairResource")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_repair", referencedColumnName="pk")
     * })
     */
    private $itemRepair;

    /**
     * @var ClassJob
     *
     * @ORM\ManyToOne(targetEntity="ClassJob")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="class_job_repair", referencedColumnName="pk")
     * })
     */
    private $classJobRepair;

    /**
     * @var ItemAction
     *
     * @ORM\ManyToOne(targetEntity="ItemAction")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_action", referencedColumnName="pk")
     * })
     */
    private $itemAction;

    /**
     * @var ItemSortCategory
     *
     * @ORM\ManyToOne(targetEntity="ItemSortCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_sort_category", referencedColumnName="pk")
     * })
     */
    private $itemSortCategory;

    /**
     * @var EquipSlotCategory
     *
     * @ORM\ManyToOne(targetEntity="EquipSlotCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="equip_slot_category", referencedColumnName="pk")
     * })
     */
    private $equipSlotCategory;

    /**
     * @var ItemSearchCategory
     *
     * @ORM\ManyToOne(targetEntity="ItemSearchCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_search_category", referencedColumnName="pk")
     * })
     */
    private $itemSearchCategory;

    /**
     * @var ItemUicategory
     *
     * @ORM\ManyToOne(targetEntity="ItemUicategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_uicategory", referencedColumnName="pk")
     * })
     */
    private $itemUicategory;

    /**
     * @var ItemLevel
     *
     * @ORM\ManyToOne(targetEntity="ItemLevel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="level_item", referencedColumnName="pk")
     * })
     */
    private $levelItem;

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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

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

    public function getIcon(): ?int
    {
        return $this->icon;
    }

    public function setIcon(?int $icon): self
    {
        $this->icon = $icon;

        return $this;
    }

    public function getRarity(): ?int
    {
        return $this->rarity;
    }

    public function setRarity(?int $rarity): self
    {
        $this->rarity = $rarity;

        return $this;
    }

    public function getFilterGroup(): ?int
    {
        return $this->filterGroup;
    }

    public function setFilterGroup(?int $filterGroup): self
    {
        $this->filterGroup = $filterGroup;

        return $this;
    }

    public function getAdditionalData(): ?int
    {
        return $this->additionalData;
    }

    public function setAdditionalData(?int $additionalData): self
    {
        $this->additionalData = $additionalData;

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

    public function getStackSize(): ?string
    {
        return $this->stackSize;
    }

    public function setStackSize(?string $stackSize): self
    {
        $this->stackSize = $stackSize;

        return $this;
    }

    public function getIsUnique(): ?bool
    {
        return $this->isUnique;
    }

    public function setIsUnique(?bool $isUnique): self
    {
        $this->isUnique = $isUnique;

        return $this;
    }

    public function getIsUntradable(): ?bool
    {
        return $this->isUntradable;
    }

    public function setIsUntradable(?bool $isUntradable): self
    {
        $this->isUntradable = $isUntradable;

        return $this;
    }

    public function getIsIndisposable(): ?bool
    {
        return $this->isIndisposable;
    }

    public function setIsIndisposable(?bool $isIndisposable): self
    {
        $this->isIndisposable = $isIndisposable;

        return $this;
    }

    public function getLot(): ?bool
    {
        return $this->lot;
    }

    public function setLot(?bool $lot): self
    {
        $this->lot = $lot;

        return $this;
    }

    public function getPriceMid(): ?string
    {
        return $this->priceMid;
    }

    public function setPriceMid(?string $priceMid): self
    {
        $this->priceMid = $priceMid;

        return $this;
    }

    public function getPriceLow(): ?string
    {
        return $this->priceLow;
    }

    public function setPriceLow(?string $priceLow): self
    {
        $this->priceLow = $priceLow;

        return $this;
    }

    public function getCanBeHq(): ?bool
    {
        return $this->canBeHq;
    }

    public function setCanBeHq(?bool $canBeHq): self
    {
        $this->canBeHq = $canBeHq;

        return $this;
    }

    public function getIsDyeable(): ?bool
    {
        return $this->isDyeable;
    }

    public function setIsDyeable(?bool $isDyeable): self
    {
        $this->isDyeable = $isDyeable;

        return $this;
    }

    public function getIsCrestWorthy(): ?bool
    {
        return $this->isCrestWorthy;
    }

    public function setIsCrestWorthy(?bool $isCrestWorthy): self
    {
        $this->isCrestWorthy = $isCrestWorthy;

        return $this;
    }

    public function getCastTimeS(): ?int
    {
        return $this->castTimeS;
    }

    public function setCastTimeS(?int $castTimeS): self
    {
        $this->castTimeS = $castTimeS;

        return $this;
    }

    public function getCooldownS(): ?string
    {
        return $this->cooldownS;
    }

    public function setCooldownS(?string $cooldownS): self
    {
        $this->cooldownS = $cooldownS;

        return $this;
    }

    public function getDesynth(): ?string
    {
        return $this->desynth;
    }

    public function setDesynth(?string $desynth): self
    {
        $this->desynth = $desynth;

        return $this;
    }

    public function getIsCollectable(): ?bool
    {
        return $this->isCollectable;
    }

    public function setIsCollectable(?bool $isCollectable): self
    {
        $this->isCollectable = $isCollectable;

        return $this;
    }

    public function getAlwaysCollectable(): ?bool
    {
        return $this->alwaysCollectable;
    }

    public function setAlwaysCollectable(?bool $alwaysCollectable): self
    {
        $this->alwaysCollectable = $alwaysCollectable;

        return $this;
    }

    public function getAetherialReduce(): ?string
    {
        return $this->aetherialReduce;
    }

    public function setAetherialReduce(?string $aetherialReduce): self
    {
        $this->aetherialReduce = $aetherialReduce;

        return $this;
    }

    public function getLevelEquip(): ?int
    {
        return $this->levelEquip;
    }

    public function setLevelEquip(?int $levelEquip): self
    {
        $this->levelEquip = $levelEquip;

        return $this;
    }

    public function getColumn42(): ?int
    {
        return $this->column42;
    }

    public function setColumn42(?int $column42): self
    {
        $this->column42 = $column42;

        return $this;
    }

    public function getEquipRestriction(): ?int
    {
        return $this->equipRestriction;
    }

    public function setEquipRestriction(?int $equipRestriction): self
    {
        $this->equipRestriction = $equipRestriction;

        return $this;
    }

    public function getBaseParamModifier(): ?int
    {
        return $this->baseParamModifier;
    }

    public function setBaseParamModifier(?int $baseParamModifier): self
    {
        $this->baseParamModifier = $baseParamModifier;

        return $this;
    }

    public function getModelMain(): ?string
    {
        return $this->modelMain;
    }

    public function setModelMain(?string $modelMain): self
    {
        $this->modelMain = $modelMain;

        return $this;
    }

    public function getModelSub(): ?string
    {
        return $this->modelSub;
    }

    public function setModelSub(?string $modelSub): self
    {
        $this->modelSub = $modelSub;

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

    public function getDamagePhys(): ?string
    {
        return $this->damagePhys;
    }

    public function setDamagePhys(?string $damagePhys): self
    {
        $this->damagePhys = $damagePhys;

        return $this;
    }

    public function getDamageMag(): ?string
    {
        return $this->damageMag;
    }

    public function setDamageMag(?string $damageMag): self
    {
        $this->damageMag = $damageMag;

        return $this;
    }

    public function getDelayMs(): ?string
    {
        return $this->delayMs;
    }

    public function setDelayMs(?string $delayMs): self
    {
        $this->delayMs = $delayMs;

        return $this;
    }

    public function getColumn55(): ?int
    {
        return $this->column55;
    }

    public function setColumn55(?int $column55): self
    {
        $this->column55 = $column55;

        return $this;
    }

    public function getBlockRate(): ?string
    {
        return $this->blockRate;
    }

    public function setBlockRate(?string $blockRate): self
    {
        $this->blockRate = $blockRate;

        return $this;
    }

    public function getBlock(): ?string
    {
        return $this->block;
    }

    public function setBlock(?string $block): self
    {
        $this->block = $block;

        return $this;
    }

    public function getDefensePhys(): ?string
    {
        return $this->defensePhys;
    }

    public function setDefensePhys(?string $defensePhys): self
    {
        $this->defensePhys = $defensePhys;

        return $this;
    }

    public function getDefenseMag(): ?string
    {
        return $this->defenseMag;
    }

    public function setDefenseMag(?string $defenseMag): self
    {
        $this->defenseMag = $defenseMag;

        return $this;
    }

    public function getBaseParamValue0(): ?int
    {
        return $this->baseParamValue0;
    }

    public function setBaseParamValue0(?int $baseParamValue0): self
    {
        $this->baseParamValue0 = $baseParamValue0;

        return $this;
    }

    public function getBaseParamValue1(): ?int
    {
        return $this->baseParamValue1;
    }

    public function setBaseParamValue1(?int $baseParamValue1): self
    {
        $this->baseParamValue1 = $baseParamValue1;

        return $this;
    }

    public function getBaseParamValue2(): ?int
    {
        return $this->baseParamValue2;
    }

    public function setBaseParamValue2(?int $baseParamValue2): self
    {
        $this->baseParamValue2 = $baseParamValue2;

        return $this;
    }

    public function getBaseParamValue3(): ?int
    {
        return $this->baseParamValue3;
    }

    public function setBaseParamValue3(?int $baseParamValue3): self
    {
        $this->baseParamValue3 = $baseParamValue3;

        return $this;
    }

    public function getBaseParamValue4(): ?int
    {
        return $this->baseParamValue4;
    }

    public function setBaseParamValue4(?int $baseParamValue4): self
    {
        $this->baseParamValue4 = $baseParamValue4;

        return $this;
    }

    public function getBaseParamValue5(): ?int
    {
        return $this->baseParamValue5;
    }

    public function setBaseParamValue5(?int $baseParamValue5): self
    {
        $this->baseParamValue5 = $baseParamValue5;

        return $this;
    }

    public function getItemSpecialBonusParam(): ?int
    {
        return $this->itemSpecialBonusParam;
    }

    public function setItemSpecialBonusParam(?int $itemSpecialBonusParam): self
    {
        $this->itemSpecialBonusParam = $itemSpecialBonusParam;

        return $this;
    }

    public function getBaseParamValueSpecial0(): ?int
    {
        return $this->baseParamValueSpecial0;
    }

    public function setBaseParamValueSpecial0(?int $baseParamValueSpecial0): self
    {
        $this->baseParamValueSpecial0 = $baseParamValueSpecial0;

        return $this;
    }

    public function getBaseParamValueSpecial1(): ?int
    {
        return $this->baseParamValueSpecial1;
    }

    public function setBaseParamValueSpecial1(?int $baseParamValueSpecial1): self
    {
        $this->baseParamValueSpecial1 = $baseParamValueSpecial1;

        return $this;
    }

    public function getBaseParamValueSpecial2(): ?int
    {
        return $this->baseParamValueSpecial2;
    }

    public function setBaseParamValueSpecial2(?int $baseParamValueSpecial2): self
    {
        $this->baseParamValueSpecial2 = $baseParamValueSpecial2;

        return $this;
    }

    public function getBaseParamValueSpecial3(): ?int
    {
        return $this->baseParamValueSpecial3;
    }

    public function setBaseParamValueSpecial3(?int $baseParamValueSpecial3): self
    {
        $this->baseParamValueSpecial3 = $baseParamValueSpecial3;

        return $this;
    }

    public function getBaseParamValueSpecial4(): ?int
    {
        return $this->baseParamValueSpecial4;
    }

    public function setBaseParamValueSpecial4(?int $baseParamValueSpecial4): self
    {
        $this->baseParamValueSpecial4 = $baseParamValueSpecial4;

        return $this;
    }

    public function getBaseParamValueSpecial5(): ?int
    {
        return $this->baseParamValueSpecial5;
    }

    public function setBaseParamValueSpecial5(?int $baseParamValueSpecial5): self
    {
        $this->baseParamValueSpecial5 = $baseParamValueSpecial5;

        return $this;
    }

    public function getMaterializeType(): ?int
    {
        return $this->materializeType;
    }

    public function setMaterializeType(?int $materializeType): self
    {
        $this->materializeType = $materializeType;

        return $this;
    }

    public function getMateriaSlotCount(): ?int
    {
        return $this->materiaSlotCount;
    }

    public function setMateriaSlotCount(?int $materiaSlotCount): self
    {
        $this->materiaSlotCount = $materiaSlotCount;

        return $this;
    }

    public function getIsAdvancedMeldingPermitted(): ?bool
    {
        return $this->isAdvancedMeldingPermitted;
    }

    public function setIsAdvancedMeldingPermitted(?bool $isAdvancedMeldingPermitted): self
    {
        $this->isAdvancedMeldingPermitted = $isAdvancedMeldingPermitted;

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

    public function getSubStatCategory(): ?int
    {
        return $this->subStatCategory;
    }

    public function setSubStatCategory(?int $subStatCategory): self
    {
        $this->subStatCategory = $subStatCategory;

        return $this;
    }

    public function getIsGlamourous(): ?bool
    {
        return $this->isGlamourous;
    }

    public function setIsGlamourous(?bool $isGlamourous): self
    {
        $this->isGlamourous = $isGlamourous;

        return $this;
    }

    public function getBaseParamSpecial5(): ?BaseParam
    {
        return $this->baseParamSpecial5;
    }

    public function setBaseParamSpecial5(?BaseParam $baseParamSpecial5): self
    {
        $this->baseParamSpecial5 = $baseParamSpecial5;

        return $this;
    }

    public function getBaseParamSpecial4(): ?BaseParam
    {
        return $this->baseParamSpecial4;
    }

    public function setBaseParamSpecial4(?BaseParam $baseParamSpecial4): self
    {
        $this->baseParamSpecial4 = $baseParamSpecial4;

        return $this;
    }

    public function getBaseParamSpecial3(): ?BaseParam
    {
        return $this->baseParamSpecial3;
    }

    public function setBaseParamSpecial3(?BaseParam $baseParamSpecial3): self
    {
        $this->baseParamSpecial3 = $baseParamSpecial3;

        return $this;
    }

    public function getBaseParamSpecial2(): ?BaseParam
    {
        return $this->baseParamSpecial2;
    }

    public function setBaseParamSpecial2(?BaseParam $baseParamSpecial2): self
    {
        $this->baseParamSpecial2 = $baseParamSpecial2;

        return $this;
    }

    public function getBaseParamSpecial1(): ?BaseParam
    {
        return $this->baseParamSpecial1;
    }

    public function setBaseParamSpecial1(?BaseParam $baseParamSpecial1): self
    {
        $this->baseParamSpecial1 = $baseParamSpecial1;

        return $this;
    }

    public function getBaseParamSpecial0(): ?BaseParam
    {
        return $this->baseParamSpecial0;
    }

    public function setBaseParamSpecial0(?BaseParam $baseParamSpecial0): self
    {
        $this->baseParamSpecial0 = $baseParamSpecial0;

        return $this;
    }

    public function getItemSpecialBonus(): ?ItemSpecialBonus
    {
        return $this->itemSpecialBonus;
    }

    public function setItemSpecialBonus(?ItemSpecialBonus $itemSpecialBonus): self
    {
        $this->itemSpecialBonus = $itemSpecialBonus;

        return $this;
    }

    public function getBaseParam5(): ?BaseParam
    {
        return $this->baseParam5;
    }

    public function setBaseParam5(?BaseParam $baseParam5): self
    {
        $this->baseParam5 = $baseParam5;

        return $this;
    }

    public function getBaseParam4(): ?BaseParam
    {
        return $this->baseParam4;
    }

    public function setBaseParam4(?BaseParam $baseParam4): self
    {
        $this->baseParam4 = $baseParam4;

        return $this;
    }

    public function getBaseParam3(): ?BaseParam
    {
        return $this->baseParam3;
    }

    public function setBaseParam3(?BaseParam $baseParam3): self
    {
        $this->baseParam3 = $baseParam3;

        return $this;
    }

    public function getBaseParam2(): ?BaseParam
    {
        return $this->baseParam2;
    }

    public function setBaseParam2(?BaseParam $baseParam2): self
    {
        $this->baseParam2 = $baseParam2;

        return $this;
    }

    public function getBaseParam1(): ?BaseParam
    {
        return $this->baseParam1;
    }

    public function setBaseParam1(?BaseParam $baseParam1): self
    {
        $this->baseParam1 = $baseParam1;

        return $this;
    }

    public function getBaseParam0(): ?BaseParam
    {
        return $this->baseParam0;
    }

    public function setBaseParam0(?BaseParam $baseParam0): self
    {
        $this->baseParam0 = $baseParam0;

        return $this;
    }

    public function getClassJobUse(): ?ClassJob
    {
        return $this->classJobUse;
    }

    public function setClassJobUse(?ClassJob $classJobUse): self
    {
        $this->classJobUse = $classJobUse;

        return $this;
    }

    public function getItemSeries(): ?ItemSeries
    {
        return $this->itemSeries;
    }

    public function setItemSeries(?ItemSeries $itemSeries): self
    {
        $this->itemSeries = $itemSeries;

        return $this;
    }

    public function getGrandCompany(): ?GrandCompany
    {
        return $this->grandCompany;
    }

    public function setGrandCompany(?GrandCompany $grandCompany): self
    {
        $this->grandCompany = $grandCompany;

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

    public function getItemGlamour(): ?self
    {
        return $this->itemGlamour;
    }

    public function setItemGlamour(?self $itemGlamour): self
    {
        $this->itemGlamour = $itemGlamour;

        return $this;
    }

    public function getItemRepair(): ?ItemRepairResource
    {
        return $this->itemRepair;
    }

    public function setItemRepair(?ItemRepairResource $itemRepair): self
    {
        $this->itemRepair = $itemRepair;

        return $this;
    }

    public function getClassJobRepair(): ?ClassJob
    {
        return $this->classJobRepair;
    }

    public function setClassJobRepair(?ClassJob $classJobRepair): self
    {
        $this->classJobRepair = $classJobRepair;

        return $this;
    }

    public function getItemAction(): ?ItemAction
    {
        return $this->itemAction;
    }

    public function setItemAction(?ItemAction $itemAction): self
    {
        $this->itemAction = $itemAction;

        return $this;
    }

    public function getItemSortCategory(): ?ItemSortCategory
    {
        return $this->itemSortCategory;
    }

    public function setItemSortCategory(?ItemSortCategory $itemSortCategory): self
    {
        $this->itemSortCategory = $itemSortCategory;

        return $this;
    }

    public function getEquipSlotCategory(): ?EquipSlotCategory
    {
        return $this->equipSlotCategory;
    }

    public function setEquipSlotCategory(?EquipSlotCategory $equipSlotCategory): self
    {
        $this->equipSlotCategory = $equipSlotCategory;

        return $this;
    }

    public function getItemSearchCategory(): ?ItemSearchCategory
    {
        return $this->itemSearchCategory;
    }

    public function setItemSearchCategory(?ItemSearchCategory $itemSearchCategory): self
    {
        $this->itemSearchCategory = $itemSearchCategory;

        return $this;
    }

    public function getItemUicategory(): ?ItemUicategory
    {
        return $this->itemUicategory;
    }

    public function setItemUicategory(?ItemUicategory $itemUicategory): self
    {
        $this->itemUicategory = $itemUicategory;

        return $this;
    }

    public function getLevelItem(): ?ItemLevel
    {
        return $this->levelItem;
    }

    public function setLevelItem(?ItemLevel $levelItem): self
    {
        $this->levelItem = $levelItem;

        return $this;
    }
}
