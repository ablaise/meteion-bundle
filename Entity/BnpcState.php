<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BnpcState.
 *
 * @ORM\Table(name="bnpc_state")
 * @ORM\Entity
 */
class BnpcState
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="bnpc_state_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="slot", type="integer", nullable=true)
     */
    private $slot;

    /**
     * @var int|null
     *
     * @ORM\Column(name="over_ray", type="integer", nullable=true)
     */
    private $overRay;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_3", type="integer", nullable=true)
     */
    private $column3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_4", type="integer", nullable=true)
     */
    private $column4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idle", type="bigint", nullable=true)
     */
    private $idle;

    /**
     * @var int|null
     *
     * @ORM\Column(name="attribute_0", type="integer", nullable=true)
     */
    private $attribute0;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="attribute_flag_0", type="boolean", nullable=true)
     */
    private $attributeFlag0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="attribute_1", type="integer", nullable=true)
     */
    private $attribute1;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="attribute_flag_1", type="boolean", nullable=true)
     */
    private $attributeFlag1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="attribute_2", type="integer", nullable=true)
     */
    private $attribute2;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="attribute_flag_2", type="boolean", nullable=true)
     */
    private $attributeFlag2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="scale", type="string", length=255, nullable=true)
     */
    private $scale;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_13", type="integer", nullable=true)
     */
    private $column13;

    /**
     * @var int|null
     *
     * @ORM\Column(name="loop_timeline", type="integer", nullable=true)
     */
    private $loopTimeline;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_15", type="boolean", nullable=true)
     */
    private $column15;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getSlot(): ?int
    {
        return $this->slot;
    }

    public function setSlot(?int $slot): self
    {
        $this->slot = $slot;

        return $this;
    }

    public function getOverRay(): ?int
    {
        return $this->overRay;
    }

    public function setOverRay(?int $overRay): self
    {
        $this->overRay = $overRay;

        return $this;
    }

    public function getColumn3(): ?int
    {
        return $this->column3;
    }

    public function setColumn3(?int $column3): self
    {
        $this->column3 = $column3;

        return $this;
    }

    public function getColumn4(): ?int
    {
        return $this->column4;
    }

    public function setColumn4(?int $column4): self
    {
        $this->column4 = $column4;

        return $this;
    }

    public function getIdle(): ?string
    {
        return $this->idle;
    }

    public function setIdle(?string $idle): self
    {
        $this->idle = $idle;

        return $this;
    }

    public function getAttribute0(): ?int
    {
        return $this->attribute0;
    }

    public function setAttribute0(?int $attribute0): self
    {
        $this->attribute0 = $attribute0;

        return $this;
    }

    public function getAttributeFlag0(): ?bool
    {
        return $this->attributeFlag0;
    }

    public function setAttributeFlag0(?bool $attributeFlag0): self
    {
        $this->attributeFlag0 = $attributeFlag0;

        return $this;
    }

    public function getAttribute1(): ?int
    {
        return $this->attribute1;
    }

    public function setAttribute1(?int $attribute1): self
    {
        $this->attribute1 = $attribute1;

        return $this;
    }

    public function getAttributeFlag1(): ?bool
    {
        return $this->attributeFlag1;
    }

    public function setAttributeFlag1(?bool $attributeFlag1): self
    {
        $this->attributeFlag1 = $attributeFlag1;

        return $this;
    }

    public function getAttribute2(): ?int
    {
        return $this->attribute2;
    }

    public function setAttribute2(?int $attribute2): self
    {
        $this->attribute2 = $attribute2;

        return $this;
    }

    public function getAttributeFlag2(): ?bool
    {
        return $this->attributeFlag2;
    }

    public function setAttributeFlag2(?bool $attributeFlag2): self
    {
        $this->attributeFlag2 = $attributeFlag2;

        return $this;
    }

    public function getScale(): ?string
    {
        return $this->scale;
    }

    public function setScale(?string $scale): self
    {
        $this->scale = $scale;

        return $this;
    }

    public function getColumn13(): ?int
    {
        return $this->column13;
    }

    public function setColumn13(?int $column13): self
    {
        $this->column13 = $column13;

        return $this;
    }

    public function getLoopTimeline(): ?int
    {
        return $this->loopTimeline;
    }

    public function setLoopTimeline(?int $loopTimeline): self
    {
        $this->loopTimeline = $loopTimeline;

        return $this;
    }

    public function getColumn15(): ?bool
    {
        return $this->column15;
    }

    public function setColumn15(?bool $column15): self
    {
        $this->column15 = $column15;

        return $this;
    }
}
