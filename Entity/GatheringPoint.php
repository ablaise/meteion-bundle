<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GatheringPoint.
 *
 * @ORM\Table(name="gathering_point", indexes={@ORM\Index(name="idx_6ffd0d7c1347efb8", columns={"gathering_point_bonus_0"}), @ORM\Index(name="idx_6ffd0d7c96ee9add", columns={"territory_type"}), @ORM\Index(name="idx_6ffd0d7c6440df2e", columns={"gathering_point_bonus_1"}), @ORM\Index(name="idx_6ffd0d7c94960eea", columns={"place_name"}), @ORM\Index(name="idx_6ffd0d7cca0cc82", columns={"gathering_point_base"}), @ORM\Index(name="idx_6ffd0d7c68c23d5d", columns={"gathering_sub_category"})})
 * @ORM\Entity
 */
class GatheringPoint
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="gathering_point_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="type", type="integer", nullable=true)
     */
    private $type;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_2", type="integer", nullable=true)
     */
    private $column2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count", type="integer", nullable=true)
     */
    private $count;

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

    /**
     * @var GatheringPointBonus
     *
     * @ORM\ManyToOne(targetEntity="GatheringPointBonus")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_point_bonus_1", referencedColumnName="pk")
     * })
     */
    private $gatheringPointBonus1;

    /**
     * @var GatheringPointBonus
     *
     * @ORM\ManyToOne(targetEntity="GatheringPointBonus")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_point_bonus_0", referencedColumnName="pk")
     * })
     */
    private $gatheringPointBonus0;

    /**
     * @var GatheringPointBase
     *
     * @ORM\ManyToOne(targetEntity="GatheringPointBase")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_point_base", referencedColumnName="pk")
     * })
     */
    private $gatheringPointBase;

    public function getPk(): ?int
    {
        return $this->pk;
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

    public function getColumn2(): ?int
    {
        return $this->column2;
    }

    public function setColumn2(?int $column2): self
    {
        $this->column2 = $column2;

        return $this;
    }

    public function getCount(): ?int
    {
        return $this->count;
    }

    public function setCount(?int $count): self
    {
        $this->count = $count;

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

    public function getGatheringPointBonus1(): ?GatheringPointBonus
    {
        return $this->gatheringPointBonus1;
    }

    public function setGatheringPointBonus1(?GatheringPointBonus $gatheringPointBonus1): self
    {
        $this->gatheringPointBonus1 = $gatheringPointBonus1;

        return $this;
    }

    public function getGatheringPointBonus0(): ?GatheringPointBonus
    {
        return $this->gatheringPointBonus0;
    }

    public function setGatheringPointBonus0(?GatheringPointBonus $gatheringPointBonus0): self
    {
        $this->gatheringPointBonus0 = $gatheringPointBonus0;

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
}
