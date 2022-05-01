<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GatheringPointBonus.
 *
 * @ORM\Table(name="gathering_point_bonus", indexes={@ORM\Index(name="idx_a657d88abdd68843", columns={"condition"}), @ORM\Index(name="idx_a657d88a541c100b", columns={"bonus_type"})})
 * @ORM\Entity
 */
class GatheringPointBonus
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="gathering_point_bonus_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="condition_value", type="bigint", nullable=true)
     */
    private $conditionValue;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_3", type="bigint", nullable=true)
     */
    private $column3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="bonus_value", type="bigint", nullable=true)
     */
    private $bonusValue;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_6", type="bigint", nullable=true)
     */
    private $column6;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_7", type="boolean", nullable=true)
     */
    private $column7;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_8", type="bigint", nullable=true)
     */
    private $column8;

    /**
     * @var GatheringPointBonusType
     *
     * @ORM\ManyToOne(targetEntity="GatheringPointBonusType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="bonus_type", referencedColumnName="pk")
     * })
     */
    private $bonusType;

    /**
     * @var GatheringCondition
     *
     * @ORM\ManyToOne(targetEntity="GatheringCondition")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="condition", referencedColumnName="pk")
     * })
     */
    private $condition;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getConditionValue(): ?string
    {
        return $this->conditionValue;
    }

    public function setConditionValue(?string $conditionValue): self
    {
        $this->conditionValue = $conditionValue;

        return $this;
    }

    public function getColumn3(): ?string
    {
        return $this->column3;
    }

    public function setColumn3(?string $column3): self
    {
        $this->column3 = $column3;

        return $this;
    }

    public function getBonusValue(): ?string
    {
        return $this->bonusValue;
    }

    public function setBonusValue(?string $bonusValue): self
    {
        $this->bonusValue = $bonusValue;

        return $this;
    }

    public function getColumn6(): ?string
    {
        return $this->column6;
    }

    public function setColumn6(?string $column6): self
    {
        $this->column6 = $column6;

        return $this;
    }

    public function getColumn7(): ?bool
    {
        return $this->column7;
    }

    public function setColumn7(?bool $column7): self
    {
        $this->column7 = $column7;

        return $this;
    }

    public function getColumn8(): ?string
    {
        return $this->column8;
    }

    public function setColumn8(?string $column8): self
    {
        $this->column8 = $column8;

        return $this;
    }

    public function getBonusType(): ?GatheringPointBonusType
    {
        return $this->bonusType;
    }

    public function setBonusType(?GatheringPointBonusType $bonusType): self
    {
        $this->bonusType = $bonusType;

        return $this;
    }

    public function getCondition(): ?GatheringCondition
    {
        return $this->condition;
    }

    public function setCondition(?GatheringCondition $condition): self
    {
        $this->condition = $condition;

        return $this;
    }
}
