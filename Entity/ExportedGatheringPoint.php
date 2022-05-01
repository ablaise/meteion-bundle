<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ExportedGatheringPoint.
 *
 * @ORM\Table(name="exported_gathering_point", indexes={@ORM\Index(name="idx_38fd00c4d90bd581", columns={"gathering_type"})})
 * @ORM\Entity
 */
class ExportedGatheringPoint
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="exported_gathering_point_pk_seq", allocationSize=1, initialValue=1)
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
     * @var int|null
     *
     * @ORM\Column(name="gathering_point_type", type="integer", nullable=true)
     */
    private $gatheringPointType;

    /**
     * @var int|null
     *
     * @ORM\Column(name="radius", type="bigint", nullable=true)
     */
    private $radius;

    /**
     * @var GatheringType
     *
     * @ORM\ManyToOne(targetEntity="GatheringType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_type", referencedColumnName="pk")
     * })
     */
    private $gatheringType;

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

    public function getGatheringPointType(): ?int
    {
        return $this->gatheringPointType;
    }

    public function setGatheringPointType(?int $gatheringPointType): self
    {
        $this->gatheringPointType = $gatheringPointType;

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

    public function getGatheringType(): ?GatheringType
    {
        return $this->gatheringType;
    }

    public function setGatheringType(?GatheringType $gatheringType): self
    {
        $this->gatheringType = $gatheringType;

        return $this;
    }
}
