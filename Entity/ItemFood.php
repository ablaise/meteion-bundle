<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ItemFood.
 *
 * @ORM\Table(name="item_food", indexes={@ORM\Index(name="idx_1c086d0cddd76043", columns={"base_param_0"}), @ORM\Index(name="idx_1c086d0caad050d5", columns={"base_param_1"}), @ORM\Index(name="idx_1c086d0c33d9016f", columns={"base_param_2"})})
 * @ORM\Entity
 */
class ItemFood
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="item_food_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="expbonus", type="integer", nullable=true)
     */
    private $expbonus;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_relative_0", type="boolean", nullable=true)
     */
    private $isRelative0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="value_0", type="integer", nullable=true)
     */
    private $value0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="max_0", type="integer", nullable=true)
     */
    private $max0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="value_hq_0", type="integer", nullable=true)
     */
    private $valueHq0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="max_hq_0", type="integer", nullable=true)
     */
    private $maxHq0;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_relative_1", type="boolean", nullable=true)
     */
    private $isRelative1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="value_1", type="integer", nullable=true)
     */
    private $value1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="max_1", type="integer", nullable=true)
     */
    private $max1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="value_hq_1", type="integer", nullable=true)
     */
    private $valueHq1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="max_hq_1", type="integer", nullable=true)
     */
    private $maxHq1;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_relative_2", type="boolean", nullable=true)
     */
    private $isRelative2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="value_2", type="integer", nullable=true)
     */
    private $value2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="max_2", type="integer", nullable=true)
     */
    private $max2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="value_hq_2", type="integer", nullable=true)
     */
    private $valueHq2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="max_hq_2", type="integer", nullable=true)
     */
    private $maxHq2;

    /**
     * @var BaseParam
     *
     * @ORM\ManyToOne(targetEntity="BaseParam")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="base_param_2", referencedColumnName="pk")
     * })
     */
    private $baseParam2;

    /**
     * @var BaseParam
     *
     * @ORM\ManyToOne(targetEntity="BaseParam")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="base_param_1", referencedColumnName="pk")
     * })
     */
    private $baseParam1;

    /**
     * @var BaseParam
     *
     * @ORM\ManyToOne(targetEntity="BaseParam")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="base_param_0", referencedColumnName="pk")
     * })
     */
    private $baseParam0;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getExpbonus(): ?int
    {
        return $this->expbonus;
    }

    public function setExpbonus(?int $expbonus): self
    {
        $this->expbonus = $expbonus;

        return $this;
    }

    public function getIsRelative0(): ?bool
    {
        return $this->isRelative0;
    }

    public function setIsRelative0(?bool $isRelative0): self
    {
        $this->isRelative0 = $isRelative0;

        return $this;
    }

    public function getValue0(): ?int
    {
        return $this->value0;
    }

    public function setValue0(?int $value0): self
    {
        $this->value0 = $value0;

        return $this;
    }

    public function getMax0(): ?int
    {
        return $this->max0;
    }

    public function setMax0(?int $max0): self
    {
        $this->max0 = $max0;

        return $this;
    }

    public function getValueHq0(): ?int
    {
        return $this->valueHq0;
    }

    public function setValueHq0(?int $valueHq0): self
    {
        $this->valueHq0 = $valueHq0;

        return $this;
    }

    public function getMaxHq0(): ?int
    {
        return $this->maxHq0;
    }

    public function setMaxHq0(?int $maxHq0): self
    {
        $this->maxHq0 = $maxHq0;

        return $this;
    }

    public function getIsRelative1(): ?bool
    {
        return $this->isRelative1;
    }

    public function setIsRelative1(?bool $isRelative1): self
    {
        $this->isRelative1 = $isRelative1;

        return $this;
    }

    public function getValue1(): ?int
    {
        return $this->value1;
    }

    public function setValue1(?int $value1): self
    {
        $this->value1 = $value1;

        return $this;
    }

    public function getMax1(): ?int
    {
        return $this->max1;
    }

    public function setMax1(?int $max1): self
    {
        $this->max1 = $max1;

        return $this;
    }

    public function getValueHq1(): ?int
    {
        return $this->valueHq1;
    }

    public function setValueHq1(?int $valueHq1): self
    {
        $this->valueHq1 = $valueHq1;

        return $this;
    }

    public function getMaxHq1(): ?int
    {
        return $this->maxHq1;
    }

    public function setMaxHq1(?int $maxHq1): self
    {
        $this->maxHq1 = $maxHq1;

        return $this;
    }

    public function getIsRelative2(): ?bool
    {
        return $this->isRelative2;
    }

    public function setIsRelative2(?bool $isRelative2): self
    {
        $this->isRelative2 = $isRelative2;

        return $this;
    }

    public function getValue2(): ?int
    {
        return $this->value2;
    }

    public function setValue2(?int $value2): self
    {
        $this->value2 = $value2;

        return $this;
    }

    public function getMax2(): ?int
    {
        return $this->max2;
    }

    public function setMax2(?int $max2): self
    {
        $this->max2 = $max2;

        return $this;
    }

    public function getValueHq2(): ?int
    {
        return $this->valueHq2;
    }

    public function setValueHq2(?int $valueHq2): self
    {
        $this->valueHq2 = $valueHq2;

        return $this;
    }

    public function getMaxHq2(): ?int
    {
        return $this->maxHq2;
    }

    public function setMaxHq2(?int $maxHq2): self
    {
        $this->maxHq2 = $maxHq2;

        return $this;
    }

    public function getBaseParam2(): ?BaseParam
    {
        return $this->baseParam2;
    }

    public function setBaseParam2(?BaseParam $baseParam2): self
    {
        $this->baseParam2 = $baseParam2;

        return $this;
    }

    public function getBaseParam1(): ?BaseParam
    {
        return $this->baseParam1;
    }

    public function setBaseParam1(?BaseParam $baseParam1): self
    {
        $this->baseParam1 = $baseParam1;

        return $this;
    }

    public function getBaseParam0(): ?BaseParam
    {
        return $this->baseParam0;
    }

    public function setBaseParam0(?BaseParam $baseParam0): self
    {
        $this->baseParam0 = $baseParam0;

        return $this;
    }
}
