<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DailySupplyItem.
 *
 * @ORM\Table(name="daily_supply_item", indexes={@ORM\Index(name="idx_70b59218c566974b", columns={"item_0"}), @ORM\Index(name="idx_70b592182c05327e", columns={"item_6"}), @ORM\Index(name="idx_70b592185b0202e8", columns={"item_7"}), @ORM\Index(name="idx_70b59218b261a7dd", columns={"item_1"}), @ORM\Index(name="idx_70b59218c20b5352", columns={"item_4"}), @ORM\Index(name="idx_70b592182b68f667", columns={"item_2"}), @ORM\Index(name="idx_70b592185c6fc6f1", columns={"item_3"}), @ORM\Index(name="idx_70b59218b50c63c4", columns={"item_5"})})
 * @ORM\Entity
 */
class DailySupplyItem
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="daily_supply_item_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quantity_0", type="integer", nullable=true)
     */
    private $quantity0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="recipe_level_0", type="integer", nullable=true)
     */
    private $recipeLevel0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quantity_1", type="integer", nullable=true)
     */
    private $quantity1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="recipe_level_1", type="integer", nullable=true)
     */
    private $recipeLevel1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quantity_2", type="integer", nullable=true)
     */
    private $quantity2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="recipe_level_2", type="integer", nullable=true)
     */
    private $recipeLevel2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quantity_3", type="integer", nullable=true)
     */
    private $quantity3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="recipe_level_3", type="integer", nullable=true)
     */
    private $recipeLevel3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quantity_4", type="integer", nullable=true)
     */
    private $quantity4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="recipe_level_4", type="integer", nullable=true)
     */
    private $recipeLevel4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quantity_5", type="integer", nullable=true)
     */
    private $quantity5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="recipe_level_5", type="integer", nullable=true)
     */
    private $recipeLevel5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quantity_6", type="integer", nullable=true)
     */
    private $quantity6;

    /**
     * @var int|null
     *
     * @ORM\Column(name="recipe_level_6", type="integer", nullable=true)
     */
    private $recipeLevel6;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quantity_7", type="integer", nullable=true)
     */
    private $quantity7;

    /**
     * @var int|null
     *
     * @ORM\Column(name="recipe_level_7", type="integer", nullable=true)
     */
    private $recipeLevel7;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_7", referencedColumnName="pk")
     * })
     */
    private $item7;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_6", referencedColumnName="pk")
     * })
     */
    private $item6;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_5", referencedColumnName="pk")
     * })
     */
    private $item5;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_4", referencedColumnName="pk")
     * })
     */
    private $item4;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_3", referencedColumnName="pk")
     * })
     */
    private $item3;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_2", referencedColumnName="pk")
     * })
     */
    private $item2;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_1", referencedColumnName="pk")
     * })
     */
    private $item1;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_0", referencedColumnName="pk")
     * })
     */
    private $item0;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getQuantity0(): ?int
    {
        return $this->quantity0;
    }

    public function setQuantity0(?int $quantity0): self
    {
        $this->quantity0 = $quantity0;

        return $this;
    }

    public function getRecipeLevel0(): ?int
    {
        return $this->recipeLevel0;
    }

    public function setRecipeLevel0(?int $recipeLevel0): self
    {
        $this->recipeLevel0 = $recipeLevel0;

        return $this;
    }

    public function getQuantity1(): ?int
    {
        return $this->quantity1;
    }

    public function setQuantity1(?int $quantity1): self
    {
        $this->quantity1 = $quantity1;

        return $this;
    }

    public function getRecipeLevel1(): ?int
    {
        return $this->recipeLevel1;
    }

    public function setRecipeLevel1(?int $recipeLevel1): self
    {
        $this->recipeLevel1 = $recipeLevel1;

        return $this;
    }

    public function getQuantity2(): ?int
    {
        return $this->quantity2;
    }

    public function setQuantity2(?int $quantity2): self
    {
        $this->quantity2 = $quantity2;

        return $this;
    }

    public function getRecipeLevel2(): ?int
    {
        return $this->recipeLevel2;
    }

    public function setRecipeLevel2(?int $recipeLevel2): self
    {
        $this->recipeLevel2 = $recipeLevel2;

        return $this;
    }

    public function getQuantity3(): ?int
    {
        return $this->quantity3;
    }

    public function setQuantity3(?int $quantity3): self
    {
        $this->quantity3 = $quantity3;

        return $this;
    }

    public function getRecipeLevel3(): ?int
    {
        return $this->recipeLevel3;
    }

    public function setRecipeLevel3(?int $recipeLevel3): self
    {
        $this->recipeLevel3 = $recipeLevel3;

        return $this;
    }

    public function getQuantity4(): ?int
    {
        return $this->quantity4;
    }

    public function setQuantity4(?int $quantity4): self
    {
        $this->quantity4 = $quantity4;

        return $this;
    }

    public function getRecipeLevel4(): ?int
    {
        return $this->recipeLevel4;
    }

    public function setRecipeLevel4(?int $recipeLevel4): self
    {
        $this->recipeLevel4 = $recipeLevel4;

        return $this;
    }

    public function getQuantity5(): ?int
    {
        return $this->quantity5;
    }

    public function setQuantity5(?int $quantity5): self
    {
        $this->quantity5 = $quantity5;

        return $this;
    }

    public function getRecipeLevel5(): ?int
    {
        return $this->recipeLevel5;
    }

    public function setRecipeLevel5(?int $recipeLevel5): self
    {
        $this->recipeLevel5 = $recipeLevel5;

        return $this;
    }

    public function getQuantity6(): ?int
    {
        return $this->quantity6;
    }

    public function setQuantity6(?int $quantity6): self
    {
        $this->quantity6 = $quantity6;

        return $this;
    }

    public function getRecipeLevel6(): ?int
    {
        return $this->recipeLevel6;
    }

    public function setRecipeLevel6(?int $recipeLevel6): self
    {
        $this->recipeLevel6 = $recipeLevel6;

        return $this;
    }

    public function getQuantity7(): ?int
    {
        return $this->quantity7;
    }

    public function setQuantity7(?int $quantity7): self
    {
        $this->quantity7 = $quantity7;

        return $this;
    }

    public function getRecipeLevel7(): ?int
    {
        return $this->recipeLevel7;
    }

    public function setRecipeLevel7(?int $recipeLevel7): self
    {
        $this->recipeLevel7 = $recipeLevel7;

        return $this;
    }

    public function getItem7(): ?Item
    {
        return $this->item7;
    }

    public function setItem7(?Item $item7): self
    {
        $this->item7 = $item7;

        return $this;
    }

    public function getItem6(): ?Item
    {
        return $this->item6;
    }

    public function setItem6(?Item $item6): self
    {
        $this->item6 = $item6;

        return $this;
    }

    public function getItem5(): ?Item
    {
        return $this->item5;
    }

    public function setItem5(?Item $item5): self
    {
        $this->item5 = $item5;

        return $this;
    }

    public function getItem4(): ?Item
    {
        return $this->item4;
    }

    public function setItem4(?Item $item4): self
    {
        $this->item4 = $item4;

        return $this;
    }

    public function getItem3(): ?Item
    {
        return $this->item3;
    }

    public function setItem3(?Item $item3): self
    {
        $this->item3 = $item3;

        return $this;
    }

    public function getItem2(): ?Item
    {
        return $this->item2;
    }

    public function setItem2(?Item $item2): self
    {
        $this->item2 = $item2;

        return $this;
    }

    public function getItem1(): ?Item
    {
        return $this->item1;
    }

    public function setItem1(?Item $item1): self
    {
        $this->item1 = $item1;

        return $this;
    }

    public function getItem0(): ?Item
    {
        return $this->item0;
    }

    public function setItem0(?Item $item0): self
    {
        $this->item0 = $item0;

        return $this;
    }
}
