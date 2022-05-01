<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FishParameter.
 *
 * @ORM\Table(name="fish_parameter", indexes={@ORM\Index(name="idx_118011ec96ee9add", columns={"territory_type"}), @ORM\Index(name="idx_118011ecf5d90242", columns={"gathering_item_level"}), @ORM\Index(name="idx_118011ec267e98d", columns={"fishing_record_type"}), @ORM\Index(name="idx_118011ec68c23d5d", columns={"gathering_sub_category"})})
 * @ORM\Entity
 */
class FishParameter
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="fish_parameter_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var string|null
     *
     * @ORM\Column(name="text", type="string", length=453, nullable=true)
     */
    private $text;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item", type="integer", nullable=true)
     */
    private $item;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_4", type="integer", nullable=true)
     */
    private $column4;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_hidden", type="boolean", nullable=true)
     */
    private $isHidden;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_6", type="boolean", nullable=true)
     */
    private $column6;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_in_log", type="boolean", nullable=true)
     */
    private $isInLog;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="time_restricted", type="boolean", nullable=true)
     */
    private $timeRestricted;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="weather_restricted", type="boolean", nullable=true)
     */
    private $weatherRestricted;

    /**
     * @var GatheringSubCategory
     *
     * @ORM\ManyToOne(targetEntity="GatheringSubCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_sub_category", referencedColumnName="pk")
     * })
     */
    private $gatheringSubCategory;

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

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(?string $text): self
    {
        $this->text = $text;

        return $this;
    }

    public function getItem(): ?int
    {
        return $this->item;
    }

    public function setItem(?int $item): self
    {
        $this->item = $item;

        return $this;
    }

    public function getColumn4(): ?int
    {
        return $this->column4;
    }

    public function setColumn4(?int $column4): self
    {
        $this->column4 = $column4;

        return $this;
    }

    public function getIsHidden(): ?bool
    {
        return $this->isHidden;
    }

    public function setIsHidden(?bool $isHidden): self
    {
        $this->isHidden = $isHidden;

        return $this;
    }

    public function getColumn6(): ?bool
    {
        return $this->column6;
    }

    public function setColumn6(?bool $column6): self
    {
        $this->column6 = $column6;

        return $this;
    }

    public function getIsInLog(): ?bool
    {
        return $this->isInLog;
    }

    public function setIsInLog(?bool $isInLog): self
    {
        $this->isInLog = $isInLog;

        return $this;
    }

    public function getTimeRestricted(): ?bool
    {
        return $this->timeRestricted;
    }

    public function setTimeRestricted(?bool $timeRestricted): self
    {
        $this->timeRestricted = $timeRestricted;

        return $this;
    }

    public function getWeatherRestricted(): ?bool
    {
        return $this->weatherRestricted;
    }

    public function setWeatherRestricted(?bool $weatherRestricted): self
    {
        $this->weatherRestricted = $weatherRestricted;

        return $this;
    }

    public function getGatheringSubCategory(): ?GatheringSubCategory
    {
        return $this->gatheringSubCategory;
    }

    public function setGatheringSubCategory(?GatheringSubCategory $gatheringSubCategory): self
    {
        $this->gatheringSubCategory = $gatheringSubCategory;

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
}
