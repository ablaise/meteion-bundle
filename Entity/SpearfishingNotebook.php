<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpearfishingNotebook.
 *
 * @ORM\Table(name="spearfishing_notebook", indexes={@ORM\Index(name="idx_16b6471f94960eea", columns={"place_name"}), @ORM\Index(name="idx_16b6471fca0cc82", columns={"gathering_point_base"}), @ORM\Index(name="idx_16b6471f96ee9add", columns={"territory_type"})})
 * @ORM\Entity
 */
class SpearfishingNotebook
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="spearfishing_notebook_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="gathering_level", type="integer", nullable=true)
     */
    private $gatheringLevel;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_shadow_node", type="boolean", nullable=true)
     */
    private $isShadowNode;

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
     * @ORM\Column(name="radius", type="bigint", nullable=true)
     */
    private $radius;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_7", type="integer", nullable=true)
     */
    private $column7;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_9", type="integer", nullable=true)
     */
    private $column9;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_11", type="bigint", nullable=true)
     */
    private $column11;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_12", type="bigint", nullable=true)
     */
    private $column12;

    /**
     * @var GatheringPointBase
     *
     * @ORM\ManyToOne(targetEntity="GatheringPointBase")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_point_base", referencedColumnName="pk")
     * })
     */
    private $gatheringPointBase;

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

    public function getIsShadowNode(): ?bool
    {
        return $this->isShadowNode;
    }

    public function setIsShadowNode(?bool $isShadowNode): self
    {
        $this->isShadowNode = $isShadowNode;

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

    public function getY(): ?int
    {
        return $this->y;
    }

    public function setY(?int $y): self
    {
        $this->y = $y;

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

    public function getColumn7(): ?int
    {
        return $this->column7;
    }

    public function setColumn7(?int $column7): self
    {
        $this->column7 = $column7;

        return $this;
    }

    public function getColumn9(): ?int
    {
        return $this->column9;
    }

    public function setColumn9(?int $column9): self
    {
        $this->column9 = $column9;

        return $this;
    }

    public function getColumn11(): ?string
    {
        return $this->column11;
    }

    public function setColumn11(?string $column11): self
    {
        $this->column11 = $column11;

        return $this;
    }

    public function getColumn12(): ?string
    {
        return $this->column12;
    }

    public function setColumn12(?string $column12): self
    {
        $this->column12 = $column12;

        return $this;
    }

    public function getGatheringPointBase(): ?GatheringPointBase
    {
        return $this->gatheringPointBase;
    }

    public function setGatheringPointBase(?GatheringPointBase $gatheringPointBase): self
    {
        $this->gatheringPointBase = $gatheringPointBase;

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
