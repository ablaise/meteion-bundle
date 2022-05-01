<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpearfishingItem.
 *
 * @ORM\Table(name="spearfishing_item", indexes={@ORM\Index(name="idx_897e60bf5d90242", columns={"gathering_item_level"}), @ORM\Index(name="idx_897e60b267e98d", columns={"fishing_record_type"}), @ORM\Index(name="idx_897e60b96ee9add", columns={"territory_type"}), @ORM\Index(name="idx_897e60b1f1b251e", columns={"item"})})
 * @ORM\Entity
 */
class SpearfishingItem
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="spearfishing_item_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="string", length=426, nullable=true)
     */
    private $description;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_4", type="boolean", nullable=true)
     */
    private $column4;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_5", type="boolean", nullable=true)
     */
    private $column5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="is_visible", type="bigint", nullable=true)
     */
    private $isVisible;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_9", type="boolean", nullable=true)
     */
    private $column9;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_10", type="boolean", nullable=true)
     */
    private $column10;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_11", type="boolean", nullable=true)
     */
    private $column11;

    /**
     * @var TerritoryType
     *
     * @ORM\ManyToOne(targetEntity="TerritoryType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="territory_type", referencedColumnName="pk")
     * })
     */
    private $territoryType;

    /**
     * @var FishingRecordType
     *
     * @ORM\ManyToOne(targetEntity="FishingRecordType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fishing_record_type", referencedColumnName="pk")
     * })
     */
    private $fishingRecordType;

    /**
     * @var GatheringItemLevelConvertTable
     *
     * @ORM\ManyToOne(targetEntity="GatheringItemLevelConvertTable")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_item_level", referencedColumnName="pk")
     * })
     */
    private $gatheringItemLevel;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item", referencedColumnName="pk")
     * })
     */
    private $item;

    public function getPk(): ?int
    {
        return $this->pk;
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

    public function getColumn4(): ?bool
    {
        return $this->column4;
    }

    public function setColumn4(?bool $column4): self
    {
        $this->column4 = $column4;

        return $this;
    }

    public function getColumn5(): ?bool
    {
        return $this->column5;
    }

    public function setColumn5(?bool $column5): self
    {
        $this->column5 = $column5;

        return $this;
    }

    public function getIsVisible(): ?string
    {
        return $this->isVisible;
    }

    public function setIsVisible(?string $isVisible): self
    {
        $this->isVisible = $isVisible;

        return $this;
    }

    public function getColumn9(): ?bool
    {
        return $this->column9;
    }

    public function setColumn9(?bool $column9): self
    {
        $this->column9 = $column9;

        return $this;
    }

    public function getColumn10(): ?bool
    {
        return $this->column10;
    }

    public function setColumn10(?bool $column10): self
    {
        $this->column10 = $column10;

        return $this;
    }

    public function getColumn11(): ?bool
    {
        return $this->column11;
    }

    public function setColumn11(?bool $column11): self
    {
        $this->column11 = $column11;

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

    public function getFishingRecordType(): ?FishingRecordType
    {
        return $this->fishingRecordType;
    }

    public function setFishingRecordType(?FishingRecordType $fishingRecordType): self
    {
        $this->fishingRecordType = $fishingRecordType;

        return $this;
    }

    public function getGatheringItemLevel(): ?GatheringItemLevelConvertTable
    {
        return $this->gatheringItemLevel;
    }

    public function setGatheringItemLevel(?GatheringItemLevelConvertTable $gatheringItemLevel): self
    {
        $this->gatheringItemLevel = $gatheringItemLevel;

        return $this;
    }

    public function getItem(): ?Item
    {
        return $this->item;
    }

    public function setItem(?Item $item): self
    {
        $this->item = $item;

        return $this;
    }
}
