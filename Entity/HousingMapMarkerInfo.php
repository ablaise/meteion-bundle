<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HousingMapMarkerInfo.
 *
 * @ORM\Table(name="housing_map_marker_info", indexes={@ORM\Index(name="idx_12b713e093adaabb", columns={"map"})})
 * @ORM\Entity
 */
class HousingMapMarkerInfo
{
    /**
     * @var string
     *
     * @ORM\Column(name="pk", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="housing_map_marker_info_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var string|null
     *
     * @ORM\Column(name="x", type="string", length=255, nullable=true)
     */
    private $x;

    /**
     * @var string|null
     *
     * @ORM\Column(name="y", type="string", length=255, nullable=true)
     */
    private $y;

    /**
     * @var string|null
     *
     * @ORM\Column(name="z", type="string", length=255, nullable=true)
     */
    private $z;

    /**
     * @var string|null
     *
     * @ORM\Column(name="column_4", type="string", length=255, nullable=true)
     */
    private $column4;

    /**
     * @var Map
     *
     * @ORM\ManyToOne(targetEntity="Map")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="map", referencedColumnName="pk")
     * })
     */
    private $map;

    public function getPk(): ?string
    {
        return $this->pk;
    }

    public function getX(): ?string
    {
        return $this->x;
    }

    public function setX(?string $x): self
    {
        $this->x = $x;

        return $this;
    }

    public function getY(): ?string
    {
        return $this->y;
    }

    public function setY(?string $y): self
    {
        $this->y = $y;

        return $this;
    }

    public function getZ(): ?string
    {
        return $this->z;
    }

    public function setZ(?string $z): self
    {
        $this->z = $z;

        return $this;
    }

    public function getColumn4(): ?string
    {
        return $this->column4;
    }

    public function setColumn4(?string $column4): self
    {
        $this->column4 = $column4;

        return $this;
    }

    public function getMap(): ?Map
    {
        return $this->map;
    }

    public function setMap(?Map $map): self
    {
        $this->map = $map;

        return $this;
    }
}
