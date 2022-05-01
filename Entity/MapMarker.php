<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MapMarker.
 *
 * @ORM\Table(name="map_marker", indexes={@ORM\Index(name="idx_c64bfbc23be0024b", columns={"place_name_subtext"}), @ORM\Index(name="idx_c64bfbc2ae83a90f", columns={"map_marker_region"})})
 * @ORM\Entity
 */
class MapMarker
{
    /**
     * @var string
     *
     * @ORM\Column(name="pk", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="map_marker_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="x", type="integer", nullable=true)
     */
    private $x;

    /**
     * @var int|null
     *
     * @ORM\Column(name="y", type="integer", nullable=true)
     */
    private $y;

    /**
     * @var int|null
     *
     * @ORM\Column(name="icon", type="integer", nullable=true)
     */
    private $icon;

    /**
     * @var int|null
     *
     * @ORM\Column(name="subtext_orientation", type="integer", nullable=true)
     */
    private $subtextOrientation;

    /**
     * @var int|null
     *
     * @ORM\Column(name="type", type="integer", nullable=true)
     */
    private $type;

    /**
     * @var int|null
     *
     * @ORM\Column(name="data_type", type="integer", nullable=true)
     */
    private $dataType;

    /**
     * @var int|null
     *
     * @ORM\Column(name="data_key", type="integer", nullable=true)
     */
    private $dataKey;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_10", type="integer", nullable=true)
     */
    private $column10;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_11", type="integer", nullable=true)
     */
    private $column11;

    /**
     * @var MapMarkerRegion
     *
     * @ORM\ManyToOne(targetEntity="MapMarkerRegion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="map_marker_region", referencedColumnName="pk")
     * })
     */
    private $mapMarkerRegion;

    /**
     * @var PlaceName
     *
     * @ORM\ManyToOne(targetEntity="PlaceName")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="place_name_subtext", referencedColumnName="pk")
     * })
     */
    private $placeNameSubtext;

    public function getPk(): ?string
    {
        return $this->pk;
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

    public function getY(): ?int
    {
        return $this->y;
    }

    public function setY(?int $y): self
    {
        $this->y = $y;

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

    public function getSubtextOrientation(): ?int
    {
        return $this->subtextOrientation;
    }

    public function setSubtextOrientation(?int $subtextOrientation): self
    {
        $this->subtextOrientation = $subtextOrientation;

        return $this;
    }

    public function getType(): ?int
    {
        return $this->type;
    }

    public function setType(?int $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getDataType(): ?int
    {
        return $this->dataType;
    }

    public function setDataType(?int $dataType): self
    {
        $this->dataType = $dataType;

        return $this;
    }

    public function getDataKey(): ?int
    {
        return $this->dataKey;
    }

    public function setDataKey(?int $dataKey): self
    {
        $this->dataKey = $dataKey;

        return $this;
    }

    public function getColumn10(): ?int
    {
        return $this->column10;
    }

    public function setColumn10(?int $column10): self
    {
        $this->column10 = $column10;

        return $this;
    }

    public function getColumn11(): ?int
    {
        return $this->column11;
    }

    public function setColumn11(?int $column11): self
    {
        $this->column11 = $column11;

        return $this;
    }

    public function getMapMarkerRegion(): ?MapMarkerRegion
    {
        return $this->mapMarkerRegion;
    }

    public function setMapMarkerRegion(?MapMarkerRegion $mapMarkerRegion): self
    {
        $this->mapMarkerRegion = $mapMarkerRegion;

        return $this;
    }

    public function getPlaceNameSubtext(): ?PlaceName
    {
        return $this->placeNameSubtext;
    }

    public function setPlaceNameSubtext(?PlaceName $placeNameSubtext): self
    {
        $this->placeNameSubtext = $placeNameSubtext;

        return $this;
    }
}
