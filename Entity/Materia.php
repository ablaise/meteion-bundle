<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Materia.
 *
 * @ORM\Table(name="materia", indexes={@ORM\Index(name="idx_6df05284cbbd1f79", columns={"item_8"}), @ORM\Index(name="idx_6df052845b0202e8", columns={"item_7"}), @ORM\Index(name="idx_6df05284b50c63c4", columns={"item_5"}), @ORM\Index(name="idx_6df05284bcba2fef", columns={"item_9"}), @ORM\Index(name="idx_6df0528419d1ed5b", columns={"base_param"}), @ORM\Index(name="idx_6df05284b261a7dd", columns={"item_1"}), @ORM\Index(name="idx_6df052845c6fc6f1", columns={"item_3"}), @ORM\Index(name="idx_6df052842b68f667", columns={"item_2"}), @ORM\Index(name="idx_6df05284c20b5352", columns={"item_4"}), @ORM\Index(name="idx_6df052842c05327e", columns={"item_6"}), @ORM\Index(name="idx_6df05284c566974b", columns={"item_0"})})
 * @ORM\Entity
 */
class Materia
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="materia_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="value_0", type="integer", nullable=true)
     */
    private $value0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="value_1", type="integer", nullable=true)
     */
    private $value1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="value_2", type="integer", nullable=true)
     */
    private $value2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="value_3", type="integer", nullable=true)
     */
    private $value3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="value_4", type="integer", nullable=true)
     */
    private $value4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="value_5", type="integer", nullable=true)
     */
    private $value5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="value_6", type="integer", nullable=true)
     */
    private $value6;

    /**
     * @var int|null
     *
     * @ORM\Column(name="value_7", type="integer", nullable=true)
     */
    private $value7;

    /**
     * @var int|null
     *
     * @ORM\Column(name="value_8", type="integer", nullable=true)
     */
    private $value8;

    /**
     * @var int|null
     *
     * @ORM\Column(name="value_9", type="integer", nullable=true)
     */
    private $value9;

    /**
     * @var BaseParam
     *
     * @ORM\ManyToOne(targetEntity="BaseParam")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="base_param", referencedColumnName="pk")
     * })
     */
    private $baseParam;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_9", referencedColumnName="pk")
     * })
     */
    private $item9;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_8", referencedColumnName="pk")
     * })
     */
    private $item8;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_7", referencedColumnName="pk")
     * })
     */
    private $item7;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_6", referencedColumnName="pk")
     * })
     */
    private $item6;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_5", referencedColumnName="pk")
     * })
     */
    private $item5;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_4", referencedColumnName="pk")
     * })
     */
    private $item4;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_3", referencedColumnName="pk")
     * })
     */
    private $item3;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_2", referencedColumnName="pk")
     * })
     */
    private $item2;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_1", referencedColumnName="pk")
     * })
     */
    private $item1;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_0", referencedColumnName="pk")
     * })
     */
    private $item0;

    public function getPk(): ?int
    {
        return $this->pk;
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

    public function getValue1(): ?int
    {
        return $this->value1;
    }

    public function setValue1(?int $value1): self
    {
        $this->value1 = $value1;

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

    public function getValue3(): ?int
    {
        return $this->value3;
    }

    public function setValue3(?int $value3): self
    {
        $this->value3 = $value3;

        return $this;
    }

    public function getValue4(): ?int
    {
        return $this->value4;
    }

    public function setValue4(?int $value4): self
    {
        $this->value4 = $value4;

        return $this;
    }

    public function getValue5(): ?int
    {
        return $this->value5;
    }

    public function setValue5(?int $value5): self
    {
        $this->value5 = $value5;

        return $this;
    }

    public function getValue6(): ?int
    {
        return $this->value6;
    }

    public function setValue6(?int $value6): self
    {
        $this->value6 = $value6;

        return $this;
    }

    public function getValue7(): ?int
    {
        return $this->value7;
    }

    public function setValue7(?int $value7): self
    {
        $this->value7 = $value7;

        return $this;
    }

    public function getValue8(): ?int
    {
        return $this->value8;
    }

    public function setValue8(?int $value8): self
    {
        $this->value8 = $value8;

        return $this;
    }

    public function getValue9(): ?int
    {
        return $this->value9;
    }

    public function setValue9(?int $value9): self
    {
        $this->value9 = $value9;

        return $this;
    }

    public function getBaseParam(): ?BaseParam
    {
        return $this->baseParam;
    }

    public function setBaseParam(?BaseParam $baseParam): self
    {
        $this->baseParam = $baseParam;

        return $this;
    }

    public function getItem9(): ?Item
    {
        return $this->item9;
    }

    public function setItem9(?Item $item9): self
    {
        $this->item9 = $item9;

        return $this;
    }

    public function getItem8(): ?Item
    {
        return $this->item8;
    }

    public function setItem8(?Item $item8): self
    {
        $this->item8 = $item8;

        return $this;
    }

    public function getItem7(): ?Item
    {
        return $this->item7;
    }

    public function setItem7(?Item $item7): self
    {
        $this->item7 = $item7;

        return $this;
    }

    public function getItem6(): ?Item
    {
        return $this->item6;
    }

    public function setItem6(?Item $item6): self
    {
        $this->item6 = $item6;

        return $this;
    }

    public function getItem5(): ?Item
    {
        return $this->item5;
    }

    public function setItem5(?Item $item5): self
    {
        $this->item5 = $item5;

        return $this;
    }

    public function getItem4(): ?Item
    {
        return $this->item4;
    }

    public function setItem4(?Item $item4): self
    {
        $this->item4 = $item4;

        return $this;
    }

    public function getItem3(): ?Item
    {
        return $this->item3;
    }

    public function setItem3(?Item $item3): self
    {
        $this->item3 = $item3;

        return $this;
    }

    public function getItem2(): ?Item
    {
        return $this->item2;
    }

    public function setItem2(?Item $item2): self
    {
        $this->item2 = $item2;

        return $this;
    }

    public function getItem1(): ?Item
    {
        return $this->item1;
    }

    public function setItem1(?Item $item1): self
    {
        $this->item1 = $item1;

        return $this;
    }

    public function getItem0(): ?Item
    {
        return $this->item0;
    }

    public function setItem0(?Item $item0): self
    {
        $this->item0 = $item0;

        return $this;
    }
}
