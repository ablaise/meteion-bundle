<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Map.
 *
 * @ORM\Table(name="map", indexes={@ORM\Index(name="idx_93adaabb94960eea", columns={"place_name"}), @ORM\Index(name="idx_93adaabb764c6db1", columns={"place_name_sub"}), @ORM\Index(name="idx_93adaabb7ef2a9f", columns={"place_name_region"}), @ORM\Index(name="idx_93adaabb96ee9add", columns={"territory_type"}), @ORM\Index(name="idx_93adaabb18becf1e", columns={"map_condition"})})
 * @ORM\Entity
 */
class Map
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="map_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="priority_category_ui", type="integer", nullable=true)
     */
    private $priorityCategoryUi;

    /**
     * @var int|null
     *
     * @ORM\Column(name="priority_ui", type="integer", nullable=true)
     */
    private $priorityUi;

    /**
     * @var int|null
     *
     * @ORM\Column(name="map_index", type="integer", nullable=true)
     */
    private $mapIndex;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hierarchy", type="integer", nullable=true)
     */
    private $hierarchy;

    /**
     * @var int|null
     *
     * @ORM\Column(name="map_marker_range", type="bigint", nullable=true)
     */
    private $mapMarkerRange;

    /**
     * @var string|null
     *
     * @ORM\Column(name="id", type="string", length=255, nullable=true)
     */
    private $id;

    /**
     * @var int|null
     *
     * @ORM\Column(name="size_factor", type="bigint", nullable=true)
     */
    private $sizeFactor;

    /**
     * @var int|null
     *
     * @ORM\Column(name="offset_x", type="integer", nullable=true)
     */
    private $offsetX;

    /**
     * @var int|null
     *
     * @ORM\Column(name="offset_y", type="integer", nullable=true)
     */
    private $offsetY;

    /**
     * @var int|null
     *
     * @ORM\Column(name="discovery_index", type="integer", nullable=true)
     */
    private $discoveryIndex;

    /**
     * @var int|null
     *
     * @ORM\Column(name="discovery_flag", type="bigint", nullable=true)
     */
    private $discoveryFlag;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="discovery_array_byte", type="boolean", nullable=true)
     */
    private $discoveryArrayByte;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_event", type="boolean", nullable=true)
     */
    private $isEvent;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_19", type="boolean", nullable=true)
     */
    private $column19;

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
     *   @ORM\JoinColumn(name="place_name", referencedColumnName="pk")
     * })
     */
    private $placeName;

    /**
     * @var PlaceName
     *
     * @ORM\ManyToOne(targetEntity="PlaceName")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="place_name_region", referencedColumnName="pk")
     * })
     */
    private $placeNameRegion;

    /**
     * @var MapCondition
     *
     * @ORM\ManyToOne(targetEntity="MapCondition")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="map_condition", referencedColumnName="pk")
     * })
     */
    private $mapCondition;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getPriorityCategoryUi(): ?int
    {
        return $this->priorityCategoryUi;
    }

    public function setPriorityCategoryUi(?int $priorityCategoryUi): self
    {
        $this->priorityCategoryUi = $priorityCategoryUi;

        return $this;
    }

    public function getPriorityUi(): ?int
    {
        return $this->priorityUi;
    }

    public function setPriorityUi(?int $priorityUi): self
    {
        $this->priorityUi = $priorityUi;

        return $this;
    }

    public function getMapIndex(): ?int
    {
        return $this->mapIndex;
    }

    public function setMapIndex(?int $mapIndex): self
    {
        $this->mapIndex = $mapIndex;

        return $this;
    }

    public function getHierarchy(): ?int
    {
        return $this->hierarchy;
    }

    public function setHierarchy(?int $hierarchy): self
    {
        $this->hierarchy = $hierarchy;

        return $this;
    }

    public function getMapMarkerRange(): ?string
    {
        return $this->mapMarkerRange;
    }

    public function setMapMarkerRange(?string $mapMarkerRange): self
    {
        $this->mapMarkerRange = $mapMarkerRange;

        return $this;
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getSizeFactor(): ?string
    {
        return $this->sizeFactor;
    }

    public function setSizeFactor(?string $sizeFactor): self
    {
        $this->sizeFactor = $sizeFactor;

        return $this;
    }

    public function getOffsetX(): ?int
    {
        return $this->offsetX;
    }

    public function setOffsetX(?int $offsetX): self
    {
        $this->offsetX = $offsetX;

        return $this;
    }

    public function getOffsetY(): ?int
    {
        return $this->offsetY;
    }

    public function setOffsetY(?int $offsetY): self
    {
        $this->offsetY = $offsetY;

        return $this;
    }

    public function getDiscoveryIndex(): ?int
    {
        return $this->discoveryIndex;
    }

    public function setDiscoveryIndex(?int $discoveryIndex): self
    {
        $this->discoveryIndex = $discoveryIndex;

        return $this;
    }

    public function getDiscoveryFlag(): ?string
    {
        return $this->discoveryFlag;
    }

    public function setDiscoveryFlag(?string $discoveryFlag): self
    {
        $this->discoveryFlag = $discoveryFlag;

        return $this;
    }

    public function getDiscoveryArrayByte(): ?bool
    {
        return $this->discoveryArrayByte;
    }

    public function setDiscoveryArrayByte(?bool $discoveryArrayByte): self
    {
        $this->discoveryArrayByte = $discoveryArrayByte;

        return $this;
    }

    public function getIsEvent(): ?bool
    {
        return $this->isEvent;
    }

    public function setIsEvent(?bool $isEvent): self
    {
        $this->isEvent = $isEvent;

        return $this;
    }

    public function getColumn19(): ?bool
    {
        return $this->column19;
    }

    public function setColumn19(?bool $column19): self
    {
        $this->column19 = $column19;

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

    public function getPlaceNameSub(): ?PlaceName
    {
        return $this->placeNameSub;
    }

    public function setPlaceNameSub(?PlaceName $placeNameSub): self
    {
        $this->placeNameSub = $placeNameSub;

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

    public function getPlaceNameRegion(): ?PlaceName
    {
        return $this->placeNameRegion;
    }

    public function setPlaceNameRegion(?PlaceName $placeNameRegion): self
    {
        $this->placeNameRegion = $placeNameRegion;

        return $this;
    }

    public function getMapCondition(): ?MapCondition
    {
        return $this->mapCondition;
    }

    public function setMapCondition(?MapCondition $mapCondition): self
    {
        $this->mapCondition = $mapCondition;

        return $this;
    }
}
