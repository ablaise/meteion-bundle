<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Level.
 *
 * @ORM\Table(name="level", indexes={@ORM\Index(name="idx_9aeacc13e9743966", columns={"territory"}), @ORM\Index(name="idx_9aeacc1393adaabb", columns={"map"})})
 * @ORM\Entity
 */
class Level
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="level_pk_seq", allocationSize=1, initialValue=1)
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
     * @ORM\Column(name="yaw", type="string", length=255, nullable=true)
     */
    private $yaw;

    /**
     * @var string|null
     *
     * @ORM\Column(name="radius", type="string", length=255, nullable=true)
     */
    private $radius;

    /**
     * @var int|null
     *
     * @ORM\Column(name="type", type="integer", nullable=true)
     */
    private $type;

    /**
     * @var int|null
     *
     * @ORM\Column(name="object", type="integer", nullable=true)
     */
    private $object;

    /**
     * @var int|null
     *
     * @ORM\Column(name="event_id", type="integer", nullable=true)
     */
    private $eventId;

    /**
     * @var TerritoryType
     *
     * @ORM\ManyToOne(targetEntity="TerritoryType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="territory", referencedColumnName="pk")
     * })
     */
    private $territory;

    /**
     * @var Map
     *
     * @ORM\ManyToOne(targetEntity="Map")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="map", referencedColumnName="pk")
     * })
     */
    private $map;

    public function getPk(): ?int
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

    public function getYaw(): ?string
    {
        return $this->yaw;
    }

    public function setYaw(?string $yaw): self
    {
        $this->yaw = $yaw;

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

    public function getType(): ?int
    {
        return $this->type;
    }

    public function setType(?int $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getObject(): ?int
    {
        return $this->object;
    }

    public function setObject(?int $object): self
    {
        $this->object = $object;

        return $this;
    }

    public function getEventId(): ?int
    {
        return $this->eventId;
    }

    public function setEventId(?int $eventId): self
    {
        $this->eventId = $eventId;

        return $this;
    }

    public function getTerritory(): ?TerritoryType
    {
        return $this->territory;
    }

    public function setTerritory(?TerritoryType $territory): self
    {
        $this->territory = $territory;

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
