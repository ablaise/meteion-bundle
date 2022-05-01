<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AnimaWeapon5tradeItem.
 *
 * @ORM\Table(name="anima_weapon5trade_item", indexes={@ORM\Index(name="idx_c0d732ee64c19c1", columns={"category"}), @ORM\Index(name="idx_c0d732ee3d3db399", columns={"item_name_0"}), @ORM\Index(name="idx_c0d732eed333d2b5", columns={"item_name_2"}), @ORM\Index(name="idx_c0d732eea359263a", columns={"item_name_7"}), @ORM\Index(name="idx_c0d732ee3a507780", columns={"item_name_4"}), @ORM\Index(name="idx_c0d732eed45e16ac", columns={"item_name_6"}), @ORM\Index(name="idx_c0d732ee4a3a830f", columns={"item_name_1"}), @ORM\Index(name="idx_c0d732eea434e223", columns={"item_name_3"}), @ORM\Index(name="idx_c0d732ee4d574716", columns={"item_name_5"}), @ORM\Index(name="idx_c0d732eeb5c0ea", columns={"crystal_sand"})})
 * @ORM\Entity
 */
class AnimaWeapon5tradeItem
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="anima_weapon5trade_item_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1", type="integer", nullable=true)
     */
    private $column1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="qty", type="integer", nullable=true)
     */
    private $qty;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_hq_0", type="boolean", nullable=true)
     */
    private $isHq0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quantity_0", type="integer", nullable=true)
     */
    private $quantity0;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_hq_1", type="boolean", nullable=true)
     */
    private $isHq1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quantity_1", type="integer", nullable=true)
     */
    private $quantity1;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_hq_2", type="boolean", nullable=true)
     */
    private $isHq2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quantity_2", type="integer", nullable=true)
     */
    private $quantity2;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_hq_3", type="boolean", nullable=true)
     */
    private $isHq3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quantity_3", type="integer", nullable=true)
     */
    private $quantity3;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_hq_4", type="boolean", nullable=true)
     */
    private $isHq4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quantity_4", type="integer", nullable=true)
     */
    private $quantity4;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_hq_5", type="boolean", nullable=true)
     */
    private $isHq5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quantity_5", type="integer", nullable=true)
     */
    private $quantity5;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_hq_6", type="boolean", nullable=true)
     */
    private $isHq6;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quantity_6", type="integer", nullable=true)
     */
    private $quantity6;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_hq_7", type="boolean", nullable=true)
     */
    private $isHq7;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quantity_7", type="integer", nullable=true)
     */
    private $quantity7;

    /**
     * @var AnimaWeapon5patternGroup
     *
     * @ORM\ManyToOne(targetEntity="AnimaWeapon5patternGroup")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="category", referencedColumnName="pk")
     * })
     */
    private $category;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_name_7", referencedColumnName="pk")
     * })
     */
    private $itemName7;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_name_6", referencedColumnName="pk")
     * })
     */
    private $itemName6;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_name_5", referencedColumnName="pk")
     * })
     */
    private $itemName5;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_name_4", referencedColumnName="pk")
     * })
     */
    private $itemName4;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_name_3", referencedColumnName="pk")
     * })
     */
    private $itemName3;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_name_2", referencedColumnName="pk")
     * })
     */
    private $itemName2;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_name_1", referencedColumnName="pk")
     * })
     */
    private $itemName1;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_name_0", referencedColumnName="pk")
     * })
     */
    private $itemName0;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="crystal_sand", referencedColumnName="pk")
     * })
     */
    private $crystalSand;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getColumn1(): ?int
    {
        return $this->column1;
    }

    public function setColumn1(?int $column1): self
    {
        $this->column1 = $column1;

        return $this;
    }

    public function getQty(): ?int
    {
        return $this->qty;
    }

    public function setQty(?int $qty): self
    {
        $this->qty = $qty;

        return $this;
    }

    public function getIsHq0(): ?bool
    {
        return $this->isHq0;
    }

    public function setIsHq0(?bool $isHq0): self
    {
        $this->isHq0 = $isHq0;

        return $this;
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

    public function getIsHq1(): ?bool
    {
        return $this->isHq1;
    }

    public function setIsHq1(?bool $isHq1): self
    {
        $this->isHq1 = $isHq1;

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

    public function getIsHq2(): ?bool
    {
        return $this->isHq2;
    }

    public function setIsHq2(?bool $isHq2): self
    {
        $this->isHq2 = $isHq2;

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

    public function getIsHq3(): ?bool
    {
        return $this->isHq3;
    }

    public function setIsHq3(?bool $isHq3): self
    {
        $this->isHq3 = $isHq3;

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

    public function getIsHq4(): ?bool
    {
        return $this->isHq4;
    }

    public function setIsHq4(?bool $isHq4): self
    {
        $this->isHq4 = $isHq4;

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

    public function getIsHq5(): ?bool
    {
        return $this->isHq5;
    }

    public function setIsHq5(?bool $isHq5): self
    {
        $this->isHq5 = $isHq5;

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

    public function getIsHq6(): ?bool
    {
        return $this->isHq6;
    }

    public function setIsHq6(?bool $isHq6): self
    {
        $this->isHq6 = $isHq6;

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

    public function getIsHq7(): ?bool
    {
        return $this->isHq7;
    }

    public function setIsHq7(?bool $isHq7): self
    {
        $this->isHq7 = $isHq7;

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

    public function getCategory(): ?AnimaWeapon5patternGroup
    {
        return $this->category;
    }

    public function setCategory(?AnimaWeapon5patternGroup $category): self
    {
        $this->category = $category;

        return $this;
    }

    public function getItemName7(): ?Item
    {
        return $this->itemName7;
    }

    public function setItemName7(?Item $itemName7): self
    {
        $this->itemName7 = $itemName7;

        return $this;
    }

    public function getItemName6(): ?Item
    {
        return $this->itemName6;
    }

    public function setItemName6(?Item $itemName6): self
    {
        $this->itemName6 = $itemName6;

        return $this;
    }

    public function getItemName5(): ?Item
    {
        return $this->itemName5;
    }

    public function setItemName5(?Item $itemName5): self
    {
        $this->itemName5 = $itemName5;

        return $this;
    }

    public function getItemName4(): ?Item
    {
        return $this->itemName4;
    }

    public function setItemName4(?Item $itemName4): self
    {
        $this->itemName4 = $itemName4;

        return $this;
    }

    public function getItemName3(): ?Item
    {
        return $this->itemName3;
    }

    public function setItemName3(?Item $itemName3): self
    {
        $this->itemName3 = $itemName3;

        return $this;
    }

    public function getItemName2(): ?Item
    {
        return $this->itemName2;
    }

    public function setItemName2(?Item $itemName2): self
    {
        $this->itemName2 = $itemName2;

        return $this;
    }

    public function getItemName1(): ?Item
    {
        return $this->itemName1;
    }

    public function setItemName1(?Item $itemName1): self
    {
        $this->itemName1 = $itemName1;

        return $this;
    }

    public function getItemName0(): ?Item
    {
        return $this->itemName0;
    }

    public function setItemName0(?Item $itemName0): self
    {
        $this->itemName0 = $itemName0;

        return $this;
    }

    public function getCrystalSand(): ?Item
    {
        return $this->crystalSand;
    }

    public function setCrystalSand(?Item $crystalSand): self
    {
        $this->crystalSand = $crystalSand;

        return $this;
    }
}
