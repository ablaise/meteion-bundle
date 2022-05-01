<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GatheringPointBase.
 *
 * @ORM\Table(name="gathering_point_base", indexes={@ORM\Index(name="idx_ca0cc82d90bd581", columns={"gathering_type"})})
 * @ORM\Entity
 */
class GatheringPointBase
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="gathering_point_base_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="gathering_level", type="integer", nullable=true)
     */
    private $gatheringLevel;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_0", type="integer", nullable=true)
     */
    private $item0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_1", type="integer", nullable=true)
     */
    private $item1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_2", type="integer", nullable=true)
     */
    private $item2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_3", type="integer", nullable=true)
     */
    private $item3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_4", type="integer", nullable=true)
     */
    private $item4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_5", type="integer", nullable=true)
     */
    private $item5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_6", type="integer", nullable=true)
     */
    private $item6;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_7", type="integer", nullable=true)
     */
    private $item7;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_limited", type="boolean", nullable=true)
     */
    private $isLimited;

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

    public function getGatheringLevel(): ?int
    {
        return $this->gatheringLevel;
    }

    public function setGatheringLevel(?int $gatheringLevel): self
    {
        $this->gatheringLevel = $gatheringLevel;

        return $this;
    }

    public function getItem0(): ?int
    {
        return $this->item0;
    }

    public function setItem0(?int $item0): self
    {
        $this->item0 = $item0;

        return $this;
    }

    public function getItem1(): ?int
    {
        return $this->item1;
    }

    public function setItem1(?int $item1): self
    {
        $this->item1 = $item1;

        return $this;
    }

    public function getItem2(): ?int
    {
        return $this->item2;
    }

    public function setItem2(?int $item2): self
    {
        $this->item2 = $item2;

        return $this;
    }

    public function getItem3(): ?int
    {
        return $this->item3;
    }

    public function setItem3(?int $item3): self
    {
        $this->item3 = $item3;

        return $this;
    }

    public function getItem4(): ?int
    {
        return $this->item4;
    }

    public function setItem4(?int $item4): self
    {
        $this->item4 = $item4;

        return $this;
    }

    public function getItem5(): ?int
    {
        return $this->item5;
    }

    public function setItem5(?int $item5): self
    {
        $this->item5 = $item5;

        return $this;
    }

    public function getItem6(): ?int
    {
        return $this->item6;
    }

    public function setItem6(?int $item6): self
    {
        $this->item6 = $item6;

        return $this;
    }

    public function getItem7(): ?int
    {
        return $this->item7;
    }

    public function setItem7(?int $item7): self
    {
        $this->item7 = $item7;

        return $this;
    }

    public function getIsLimited(): ?bool
    {
        return $this->isLimited;
    }

    public function setIsLimited(?bool $isLimited): self
    {
        $this->isLimited = $isLimited;

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
