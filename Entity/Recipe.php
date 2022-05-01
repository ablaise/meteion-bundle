<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Recipe.
 *
 * @ORM\Table(name="recipe", indexes={@ORM\Index(name="idx_da88b1379d44cdfa", columns={"item_ingredient_9"}), @ORM\Index(name="idx_da88b1378c966dc2", columns={"item_required"}), @ORM\Index(name="idx_da88b1377d4102d1", columns={"status_required"}), @ORM\Index(name="idx_da88b1374317f817", columns={"quest"}), @ORM\Index(name="idx_da88b1379e481584", columns={"secret_recipe_book"}), @ORM\Index(name="idx_da88b137f33b3c28", columns={"recipe_notebook_list"}), @ORM\Index(name="idx_da88b13774427a54", columns={"craft_type"}), @ORM\Index(name="idx_da88b137939f45c8", columns={"item_ingredient_1"}), @ORM\Index(name="idx_da88b13794f281d1", columns={"item_ingredient_5"}), @ORM\Index(name="idx_da88b1374802c42b", columns={"recipe_level_table"}), @ORM\Index(name="idx_da88b137e3f5b147", columns={"item_ingredient_4"}), @ORM\Index(name="idx_da88b137dfbd06b", columns={"item_ingredient_6"}), @ORM\Index(name="idx_da88b137a961472", columns={"item_ingredient_2"}), @ORM\Index(name="idx_da88b1377d9124e4", columns={"item_ingredient_3"}), @ORM\Index(name="idx_da88b1379593b4dc", columns={"item_result"}), @ORM\Index(name="idx_da88b1377afce0fd", columns={"item_ingredient_7"}), @ORM\Index(name="idx_da88b137e498755e", columns={"item_ingredient_0"}), @ORM\Index(name="idx_da88b137ea43fd6c", columns={"item_ingredient_8"})})
 * @ORM\Entity
 */
class Recipe
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="recipe_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="number", type="integer", nullable=true)
     */
    private $number;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_result", type="integer", nullable=true)
     */
    private $amountResult;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_ingredient_0", type="integer", nullable=true)
     */
    private $amountIngredient0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_ingredient_1", type="integer", nullable=true)
     */
    private $amountIngredient1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_ingredient_2", type="integer", nullable=true)
     */
    private $amountIngredient2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_ingredient_3", type="integer", nullable=true)
     */
    private $amountIngredient3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_ingredient_4", type="integer", nullable=true)
     */
    private $amountIngredient4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_ingredient_5", type="integer", nullable=true)
     */
    private $amountIngredient5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_ingredient_6", type="integer", nullable=true)
     */
    private $amountIngredient6;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_ingredient_7", type="integer", nullable=true)
     */
    private $amountIngredient7;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_ingredient_8", type="integer", nullable=true)
     */
    private $amountIngredient8;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_ingredient_9", type="integer", nullable=true)
     */
    private $amountIngredient9;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_secondary", type="boolean", nullable=true)
     */
    private $isSecondary;

    /**
     * @var int|null
     *
     * @ORM\Column(name="material_quality_factor", type="integer", nullable=true)
     */
    private $materialQualityFactor;

    /**
     * @var int|null
     *
     * @ORM\Column(name="difficulty_factor", type="bigint", nullable=true)
     */
    private $difficultyFactor;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quality_factor", type="bigint", nullable=true)
     */
    private $qualityFactor;

    /**
     * @var int|null
     *
     * @ORM\Column(name="durability_factor", type="bigint", nullable=true)
     */
    private $durabilityFactor;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_32", type="bigint", nullable=true)
     */
    private $column32;

    /**
     * @var int|null
     *
     * @ORM\Column(name="required_craftsmanship", type="bigint", nullable=true)
     */
    private $requiredCraftsmanship;

    /**
     * @var int|null
     *
     * @ORM\Column(name="required_control", type="bigint", nullable=true)
     */
    private $requiredControl;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quick_synth_craftsmanship", type="bigint", nullable=true)
     */
    private $quickSynthCraftsmanship;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quick_synth_control", type="bigint", nullable=true)
     */
    private $quickSynthControl;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="can_quick_synth", type="boolean", nullable=true)
     */
    private $canQuickSynth;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="can_hq", type="boolean", nullable=true)
     */
    private $canHq;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="exp_rewarded", type="boolean", nullable=true)
     */
    private $expRewarded;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_specialization_required", type="boolean", nullable=true)
     */
    private $isSpecializationRequired;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_expert", type="boolean", nullable=true)
     */
    private $isExpert;

    /**
     * @var int|null
     *
     * @ORM\Column(name="patch_number", type="integer", nullable=true)
     */
    private $patchNumber;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_47", type="bigint", nullable=true)
     */
    private $column47;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_48", type="bigint", nullable=true)
     */
    private $column48;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_required", referencedColumnName="pk")
     * })
     */
    private $itemRequired;

    /**
     * @var Status
     *
     * @ORM\ManyToOne(targetEntity="Status")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="status_required", referencedColumnName="pk")
     * })
     */
    private $statusRequired;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest", referencedColumnName="pk")
     * })
     */
    private $quest;

    /**
     * @var SecretRecipeBook
     *
     * @ORM\ManyToOne(targetEntity="SecretRecipeBook")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="secret_recipe_book", referencedColumnName="pk")
     * })
     */
    private $secretRecipeBook;

    /**
     * @var RecipeNotebookList
     *
     * @ORM\ManyToOne(targetEntity="RecipeNotebookList")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_notebook_list", referencedColumnName="pk")
     * })
     */
    private $recipeNotebookList;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_ingredient_9", referencedColumnName="pk")
     * })
     */
    private $itemIngredient9;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_ingredient_8", referencedColumnName="pk")
     * })
     */
    private $itemIngredient8;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_ingredient_7", referencedColumnName="pk")
     * })
     */
    private $itemIngredient7;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_ingredient_6", referencedColumnName="pk")
     * })
     */
    private $itemIngredient6;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_ingredient_5", referencedColumnName="pk")
     * })
     */
    private $itemIngredient5;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_ingredient_4", referencedColumnName="pk")
     * })
     */
    private $itemIngredient4;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_ingredient_3", referencedColumnName="pk")
     * })
     */
    private $itemIngredient3;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_ingredient_2", referencedColumnName="pk")
     * })
     */
    private $itemIngredient2;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_ingredient_1", referencedColumnName="pk")
     * })
     */
    private $itemIngredient1;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_ingredient_0", referencedColumnName="pk")
     * })
     */
    private $itemIngredient0;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_result", referencedColumnName="pk")
     * })
     */
    private $itemResult;

    /**
     * @var RecipeLevelTable
     *
     * @ORM\ManyToOne(targetEntity="RecipeLevelTable")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recipe_level_table", referencedColumnName="pk")
     * })
     */
    private $recipeLevelTable;

    /**
     * @var CraftType
     *
     * @ORM\ManyToOne(targetEntity="CraftType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="craft_type", referencedColumnName="pk")
     * })
     */
    private $craftType;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getNumber(): ?int
    {
        return $this->number;
    }

    public function setNumber(?int $number): self
    {
        $this->number = $number;

        return $this;
    }

    public function getAmountResult(): ?int
    {
        return $this->amountResult;
    }

    public function setAmountResult(?int $amountResult): self
    {
        $this->amountResult = $amountResult;

        return $this;
    }

    public function getAmountIngredient0(): ?int
    {
        return $this->amountIngredient0;
    }

    public function setAmountIngredient0(?int $amountIngredient0): self
    {
        $this->amountIngredient0 = $amountIngredient0;

        return $this;
    }

    public function getAmountIngredient1(): ?int
    {
        return $this->amountIngredient1;
    }

    public function setAmountIngredient1(?int $amountIngredient1): self
    {
        $this->amountIngredient1 = $amountIngredient1;

        return $this;
    }

    public function getAmountIngredient2(): ?int
    {
        return $this->amountIngredient2;
    }

    public function setAmountIngredient2(?int $amountIngredient2): self
    {
        $this->amountIngredient2 = $amountIngredient2;

        return $this;
    }

    public function getAmountIngredient3(): ?int
    {
        return $this->amountIngredient3;
    }

    public function setAmountIngredient3(?int $amountIngredient3): self
    {
        $this->amountIngredient3 = $amountIngredient3;

        return $this;
    }

    public function getAmountIngredient4(): ?int
    {
        return $this->amountIngredient4;
    }

    public function setAmountIngredient4(?int $amountIngredient4): self
    {
        $this->amountIngredient4 = $amountIngredient4;

        return $this;
    }

    public function getAmountIngredient5(): ?int
    {
        return $this->amountIngredient5;
    }

    public function setAmountIngredient5(?int $amountIngredient5): self
    {
        $this->amountIngredient5 = $amountIngredient5;

        return $this;
    }

    public function getAmountIngredient6(): ?int
    {
        return $this->amountIngredient6;
    }

    public function setAmountIngredient6(?int $amountIngredient6): self
    {
        $this->amountIngredient6 = $amountIngredient6;

        return $this;
    }

    public function getAmountIngredient7(): ?int
    {
        return $this->amountIngredient7;
    }

    public function setAmountIngredient7(?int $amountIngredient7): self
    {
        $this->amountIngredient7 = $amountIngredient7;

        return $this;
    }

    public function getAmountIngredient8(): ?int
    {
        return $this->amountIngredient8;
    }

    public function setAmountIngredient8(?int $amountIngredient8): self
    {
        $this->amountIngredient8 = $amountIngredient8;

        return $this;
    }

    public function getAmountIngredient9(): ?int
    {
        return $this->amountIngredient9;
    }

    public function setAmountIngredient9(?int $amountIngredient9): self
    {
        $this->amountIngredient9 = $amountIngredient9;

        return $this;
    }

    public function getIsSecondary(): ?bool
    {
        return $this->isSecondary;
    }

    public function setIsSecondary(?bool $isSecondary): self
    {
        $this->isSecondary = $isSecondary;

        return $this;
    }

    public function getMaterialQualityFactor(): ?int
    {
        return $this->materialQualityFactor;
    }

    public function setMaterialQualityFactor(?int $materialQualityFactor): self
    {
        $this->materialQualityFactor = $materialQualityFactor;

        return $this;
    }

    public function getDifficultyFactor(): ?string
    {
        return $this->difficultyFactor;
    }

    public function setDifficultyFactor(?string $difficultyFactor): self
    {
        $this->difficultyFactor = $difficultyFactor;

        return $this;
    }

    public function getQualityFactor(): ?string
    {
        return $this->qualityFactor;
    }

    public function setQualityFactor(?string $qualityFactor): self
    {
        $this->qualityFactor = $qualityFactor;

        return $this;
    }

    public function getDurabilityFactor(): ?string
    {
        return $this->durabilityFactor;
    }

    public function setDurabilityFactor(?string $durabilityFactor): self
    {
        $this->durabilityFactor = $durabilityFactor;

        return $this;
    }

    public function getColumn32(): ?string
    {
        return $this->column32;
    }

    public function setColumn32(?string $column32): self
    {
        $this->column32 = $column32;

        return $this;
    }

    public function getRequiredCraftsmanship(): ?string
    {
        return $this->requiredCraftsmanship;
    }

    public function setRequiredCraftsmanship(?string $requiredCraftsmanship): self
    {
        $this->requiredCraftsmanship = $requiredCraftsmanship;

        return $this;
    }

    public function getRequiredControl(): ?string
    {
        return $this->requiredControl;
    }

    public function setRequiredControl(?string $requiredControl): self
    {
        $this->requiredControl = $requiredControl;

        return $this;
    }

    public function getQuickSynthCraftsmanship(): ?string
    {
        return $this->quickSynthCraftsmanship;
    }

    public function setQuickSynthCraftsmanship(?string $quickSynthCraftsmanship): self
    {
        $this->quickSynthCraftsmanship = $quickSynthCraftsmanship;

        return $this;
    }

    public function getQuickSynthControl(): ?string
    {
        return $this->quickSynthControl;
    }

    public function setQuickSynthControl(?string $quickSynthControl): self
    {
        $this->quickSynthControl = $quickSynthControl;

        return $this;
    }

    public function getCanQuickSynth(): ?bool
    {
        return $this->canQuickSynth;
    }

    public function setCanQuickSynth(?bool $canQuickSynth): self
    {
        $this->canQuickSynth = $canQuickSynth;

        return $this;
    }

    public function getCanHq(): ?bool
    {
        return $this->canHq;
    }

    public function setCanHq(?bool $canHq): self
    {
        $this->canHq = $canHq;

        return $this;
    }

    public function getExpRewarded(): ?bool
    {
        return $this->expRewarded;
    }

    public function setExpRewarded(?bool $expRewarded): self
    {
        $this->expRewarded = $expRewarded;

        return $this;
    }

    public function getIsSpecializationRequired(): ?bool
    {
        return $this->isSpecializationRequired;
    }

    public function setIsSpecializationRequired(?bool $isSpecializationRequired): self
    {
        $this->isSpecializationRequired = $isSpecializationRequired;

        return $this;
    }

    public function getIsExpert(): ?bool
    {
        return $this->isExpert;
    }

    public function setIsExpert(?bool $isExpert): self
    {
        $this->isExpert = $isExpert;

        return $this;
    }

    public function getPatchNumber(): ?int
    {
        return $this->patchNumber;
    }

    public function setPatchNumber(?int $patchNumber): self
    {
        $this->patchNumber = $patchNumber;

        return $this;
    }

    public function getColumn47(): ?string
    {
        return $this->column47;
    }

    public function setColumn47(?string $column47): self
    {
        $this->column47 = $column47;

        return $this;
    }

    public function getColumn48(): ?string
    {
        return $this->column48;
    }

    public function setColumn48(?string $column48): self
    {
        $this->column48 = $column48;

        return $this;
    }

    public function getItemRequired(): ?Item
    {
        return $this->itemRequired;
    }

    public function setItemRequired(?Item $itemRequired): self
    {
        $this->itemRequired = $itemRequired;

        return $this;
    }

    public function getStatusRequired(): ?Status
    {
        return $this->statusRequired;
    }

    public function setStatusRequired(?Status $statusRequired): self
    {
        $this->statusRequired = $statusRequired;

        return $this;
    }

    public function getQuest(): ?Quest
    {
        return $this->quest;
    }

    public function setQuest(?Quest $quest): self
    {
        $this->quest = $quest;

        return $this;
    }

    public function getSecretRecipeBook(): ?SecretRecipeBook
    {
        return $this->secretRecipeBook;
    }

    public function setSecretRecipeBook(?SecretRecipeBook $secretRecipeBook): self
    {
        $this->secretRecipeBook = $secretRecipeBook;

        return $this;
    }

    public function getRecipeNotebookList(): ?RecipeNotebookList
    {
        return $this->recipeNotebookList;
    }

    public function setRecipeNotebookList(?RecipeNotebookList $recipeNotebookList): self
    {
        $this->recipeNotebookList = $recipeNotebookList;

        return $this;
    }

    public function getItemIngredient9(): ?Item
    {
        return $this->itemIngredient9;
    }

    public function setItemIngredient9(?Item $itemIngredient9): self
    {
        $this->itemIngredient9 = $itemIngredient9;

        return $this;
    }

    public function getItemIngredient8(): ?Item
    {
        return $this->itemIngredient8;
    }

    public function setItemIngredient8(?Item $itemIngredient8): self
    {
        $this->itemIngredient8 = $itemIngredient8;

        return $this;
    }

    public function getItemIngredient7(): ?Item
    {
        return $this->itemIngredient7;
    }

    public function setItemIngredient7(?Item $itemIngredient7): self
    {
        $this->itemIngredient7 = $itemIngredient7;

        return $this;
    }

    public function getItemIngredient6(): ?Item
    {
        return $this->itemIngredient6;
    }

    public function setItemIngredient6(?Item $itemIngredient6): self
    {
        $this->itemIngredient6 = $itemIngredient6;

        return $this;
    }

    public function getItemIngredient5(): ?Item
    {
        return $this->itemIngredient5;
    }

    public function setItemIngredient5(?Item $itemIngredient5): self
    {
        $this->itemIngredient5 = $itemIngredient5;

        return $this;
    }

    public function getItemIngredient4(): ?Item
    {
        return $this->itemIngredient4;
    }

    public function setItemIngredient4(?Item $itemIngredient4): self
    {
        $this->itemIngredient4 = $itemIngredient4;

        return $this;
    }

    public function getItemIngredient3(): ?Item
    {
        return $this->itemIngredient3;
    }

    public function setItemIngredient3(?Item $itemIngredient3): self
    {
        $this->itemIngredient3 = $itemIngredient3;

        return $this;
    }

    public function getItemIngredient2(): ?Item
    {
        return $this->itemIngredient2;
    }

    public function setItemIngredient2(?Item $itemIngredient2): self
    {
        $this->itemIngredient2 = $itemIngredient2;

        return $this;
    }

    public function getItemIngredient1(): ?Item
    {
        return $this->itemIngredient1;
    }

    public function setItemIngredient1(?Item $itemIngredient1): self
    {
        $this->itemIngredient1 = $itemIngredient1;

        return $this;
    }

    public function getItemIngredient0(): ?Item
    {
        return $this->itemIngredient0;
    }

    public function setItemIngredient0(?Item $itemIngredient0): self
    {
        $this->itemIngredient0 = $itemIngredient0;

        return $this;
    }

    public function getItemResult(): ?Item
    {
        return $this->itemResult;
    }

    public function setItemResult(?Item $itemResult): self
    {
        $this->itemResult = $itemResult;

        return $this;
    }

    public function getRecipeLevelTable(): ?RecipeLevelTable
    {
        return $this->recipeLevelTable;
    }

    public function setRecipeLevelTable(?RecipeLevelTable $recipeLevelTable): self
    {
        $this->recipeLevelTable = $recipeLevelTable;

        return $this;
    }

    public function getCraftType(): ?CraftType
    {
        return $this->craftType;
    }

    public function setCraftType(?CraftType $craftType): self
    {
        $this->craftType = $craftType;

        return $this;
    }
}
