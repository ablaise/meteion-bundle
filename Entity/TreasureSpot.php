<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TreasureSpot.
 *
 * @ORM\Table(name="treasure_spot", indexes={@ORM\Index(name="idx_8e8bd8b55e9e89cb", columns={"location"})})
 * @ORM\Entity
 */
class TreasureSpot
{
    /**
     * @var string
     *
     * @ORM\Column(name="pk", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="treasure_spot_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var string|null
     *
     * @ORM\Column(name="map_offset_x", type="string", length=255, nullable=true)
     */
    private $mapOffsetX;

    /**
     * @var string|null
     *
     * @ORM\Column(name="map_offset_y", type="string", length=255, nullable=true)
     */
    private $mapOffsetY;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="location", referencedColumnName="pk")
     * })
     */
    private $location;

    public function getPk(): ?string
    {
        return $this->pk;
    }

    public function getMapOffsetX(): ?string
    {
        return $this->mapOffsetX;
    }

    public function setMapOffsetX(?string $mapOffsetX): self
    {
        $this->mapOffsetX = $mapOffsetX;

        return $this;
    }

    public function getMapOffsetY(): ?string
    {
        return $this->mapOffsetY;
    }

    public function setMapOffsetY(?string $mapOffsetY): self
    {
        $this->mapOffsetY = $mapOffsetY;

        return $this;
    }

    public function getLocation(): ?Level
    {
        return $this->location;
    }

    public function setLocation(?Level $location): self
    {
        $this->location = $location;

        return $this;
    }
}
