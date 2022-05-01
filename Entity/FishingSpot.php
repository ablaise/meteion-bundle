<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FishingSpot.
 *
 * @ORM\Table(name="fishing_spot", indexes={@ORM\Index(name="idx_4e0ff4a2b261a7dd", columns={"item_1"}), @ORM\Index(name="idx_4e0ff4a2bcba2fef", columns={"item_9"}), @ORM\Index(name="idx_4e0ff4a22b68f667", columns={"item_2"}), @ORM\Index(name="idx_4e0ff4a22c05327e", columns={"item_6"}), @ORM\Index(name="idx_4e0ff4a25c6fc6f1", columns={"item_3"}), @ORM\Index(name="idx_4e0ff4a296ee9add", columns={"territory_type"}), @ORM\Index(name="idx_4e0ff4a2b50c63c4", columns={"item_5"}), @ORM\Index(name="idx_4e0ff4a28c059e6e", columns={"place_name_main"}), @ORM\Index(name="idx_4e0ff4a2cbbd1f79", columns={"item_8"}), @ORM\Index(name="idx_4e0ff4a2764c6db1", columns={"place_name_sub"}), @ORM\Index(name="idx_4e0ff4a294960eea", columns={"place_name"}), @ORM\Index(name="idx_4e0ff4a25b0202e8", columns={"item_7"}), @ORM\Index(name="idx_4e0ff4a2c20b5352", columns={"item_4"}), @ORM\Index(name="idx_4e0ff4a2c566974b", columns={"item_0"})})
 * @ORM\Entity
 */
class FishingSpot
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="fishing_spot_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="gathering_level", type="integer", nullable=true)
     */
    private $gatheringLevel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="big_fish_on_reach", type="string", length=255, nullable=true)
     */
    private $bigFishOnReach;

    /**
     * @var string|null
     *
     * @ORM\Column(name="big_fish_on_end", type="string", length=255, nullable=true)
     */
    private $bigFishOnEnd;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fishing_spot_category", type="integer", nullable=true)
     */
    private $fishingSpotCategory;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="rare", type="boolean", nullable=true)
     */
    private $rare;

    /**
     * @var int|null
     *
     * @ORM\Column(name="x", type="integer", nullable=true)
     */
    private $x;

    /**
     * @var int|null
     *
     * @ORM\Column(name="z", type="integer", nullable=true)
     */
    private $z;

    /**
     * @var int|null
     *
     * @ORM\Column(name="radius", type="bigint", nullable=true)
     */
    private $radius;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_12", type="integer", nullable=true)
     */
    private $column12;

    /**
     * @var int|null
     *
     * @ORM\Column(name="order", type="bigint", nullable=true)
     */
    private $order;

    /**
     * @var PlaceName
     *
     * @ORM\ManyToOne(targetEntity="PlaceName")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="place_name", referencedColumnName="pk")
     * })
     */
    private $placeName;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_9", referencedColumnName="pk")
     * })
     */
    private $item9;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_8", referencedColumnName="pk")
     * })
     */
    private $item8;

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

    /**
     * @var PlaceName
     *
     * @ORM\ManyToOne(targetEntity="PlaceName")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="place_name_sub", referencedColumnName="pk")
     * })
     */
    private $placeNameSub;

    /**
     * @var PlaceName
     *
     * @ORM\ManyToOne(targetEntity="PlaceName")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="place_name_main", referencedColumnName="pk")
     * })
     */
    private $placeNameMain;

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

    public function getGatheringLevel(): ?int
    {
        return $this->gatheringLevel;
    }

    public function setGatheringLevel(?int $gatheringLevel): self
    {
        $this->gatheringLevel = $gatheringLevel;

        return $this;
    }

    public function getBigFishOnReach(): ?string
    {
        return $this->bigFishOnReach;
    }

    public function setBigFishOnReach(?string $bigFishOnReach): self
    {
        $this->bigFishOnReach = $bigFishOnReach;

        return $this;
    }

    public function getBigFishOnEnd(): ?string
    {
        return $this->bigFishOnEnd;
    }

    public function setBigFishOnEnd(?string $bigFishOnEnd): self
    {
        $this->bigFishOnEnd = $bigFishOnEnd;

        return $this;
    }

    public function getFishingSpotCategory(): ?int
    {
        return $this->fishingSpotCategory;
    }

    public function setFishingSpotCategory(?int $fishingSpotCategory): self
    {
        $this->fishingSpotCategory = $fishingSpotCategory;

        return $this;
    }

    public function getRare(): ?bool
    {
        return $this->rare;
    }

    public function setRare(?bool $rare): self
    {
        $this->rare = $rare;

        return $this;
    }

    public function getX(): ?int
    {
        return $this->x;
    }

    public function setX(?int $x): self
    {
        $this->x = $x;

        return $this;
    }

    public function getZ(): ?int
    {
        return $this->z;
    }

    public function setZ(?int $z): self
    {
        $this->z = $z;

        return $this;
    }

    public function getRadius(): ?string
    {
        return $this->radius;
    }

    public function setRadius(?string $radius): self
    {
        $this->radius = $radius;

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

    public function getOrder(): ?string
    {
        return $this->order;
    }

    public function setOrder(?string $order): self
    {
        $this->order = $order;

        return $this;
    }

    public function getPlaceName(): ?PlaceName
    {
        return $this->placeName;
    }

    public function setPlaceName(?PlaceName $placeName): self
    {
        $this->placeName = $placeName;

        return $this;
    }

    public function getItem9(): ?Item
    {
        return $this->item9;
    }

    public function setItem9(?Item $item9): self
    {
        $this->item9 = $item9;

        return $this;
    }

    public function getItem8(): ?Item
    {
        return $this->item8;
    }

    public function setItem8(?Item $item8): self
    {
        $this->item8 = $item8;

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

    public function getPlaceNameSub(): ?PlaceName
    {
        return $this->placeNameSub;
    }

    public function setPlaceNameSub(?PlaceName $placeNameSub): self
    {
        $this->placeNameSub = $placeNameSub;

        return $this;
    }

    public function getPlaceNameMain(): ?PlaceName
    {
        return $this->placeNameMain;
    }

    public function setPlaceNameMain(?PlaceName $placeNameMain): self
    {
        $this->placeNameMain = $placeNameMain;

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
