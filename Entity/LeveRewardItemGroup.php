<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LeveRewardItemGroup.
 *
 * @ORM\Table(name="leve_reward_item_group", indexes={@ORM\Index(name="idx_5cee3666c20b5352", columns={"item_4"}), @ORM\Index(name="idx_5cee36662c05327e", columns={"item_6"}), @ORM\Index(name="idx_5cee36665c6fc6f1", columns={"item_3"}), @ORM\Index(name="idx_5cee3666b50c63c4", columns={"item_5"}), @ORM\Index(name="idx_5cee36665b0202e8", columns={"item_7"}), @ORM\Index(name="idx_5cee3666c566974b", columns={"item_0"}), @ORM\Index(name="idx_5cee3666b261a7dd", columns={"item_1"}), @ORM\Index(name="idx_5cee36662b68f667", columns={"item_2"}), @ORM\Index(name="idx_5cee3666cbbd1f79", columns={"item_8"})})
 * @ORM\Entity
 */
class LeveRewardItemGroup
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="leve_reward_item_group_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_0", type="integer", nullable=true)
     */
    private $count0;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_0", type="boolean", nullable=true)
     */
    private $hq0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_1", type="integer", nullable=true)
     */
    private $count1;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_1", type="boolean", nullable=true)
     */
    private $hq1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_2", type="integer", nullable=true)
     */
    private $count2;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_2", type="boolean", nullable=true)
     */
    private $hq2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_3", type="integer", nullable=true)
     */
    private $count3;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_3", type="boolean", nullable=true)
     */
    private $hq3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_4", type="integer", nullable=true)
     */
    private $count4;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_4", type="boolean", nullable=true)
     */
    private $hq4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_5", type="integer", nullable=true)
     */
    private $count5;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_5", type="boolean", nullable=true)
     */
    private $hq5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_6", type="integer", nullable=true)
     */
    private $count6;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_6", type="boolean", nullable=true)
     */
    private $hq6;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_7", type="integer", nullable=true)
     */
    private $count7;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_7", type="boolean", nullable=true)
     */
    private $hq7;

    /**
     * @var int|null
     *
     * @ORM\Column(name="count_8", type="integer", nullable=true)
     */
    private $count8;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hq_8", type="boolean", nullable=true)
     */
    private $hq8;

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

    public function getCount0(): ?int
    {
        return $this->count0;
    }

    public function setCount0(?int $count0): self
    {
        $this->count0 = $count0;

        return $this;
    }

    public function getHq0(): ?bool
    {
        return $this->hq0;
    }

    public function setHq0(?bool $hq0): self
    {
        $this->hq0 = $hq0;

        return $this;
    }

    public function getCount1(): ?int
    {
        return $this->count1;
    }

    public function setCount1(?int $count1): self
    {
        $this->count1 = $count1;

        return $this;
    }

    public function getHq1(): ?bool
    {
        return $this->hq1;
    }

    public function setHq1(?bool $hq1): self
    {
        $this->hq1 = $hq1;

        return $this;
    }

    public function getCount2(): ?int
    {
        return $this->count2;
    }

    public function setCount2(?int $count2): self
    {
        $this->count2 = $count2;

        return $this;
    }

    public function getHq2(): ?bool
    {
        return $this->hq2;
    }

    public function setHq2(?bool $hq2): self
    {
        $this->hq2 = $hq2;

        return $this;
    }

    public function getCount3(): ?int
    {
        return $this->count3;
    }

    public function setCount3(?int $count3): self
    {
        $this->count3 = $count3;

        return $this;
    }

    public function getHq3(): ?bool
    {
        return $this->hq3;
    }

    public function setHq3(?bool $hq3): self
    {
        $this->hq3 = $hq3;

        return $this;
    }

    public function getCount4(): ?int
    {
        return $this->count4;
    }

    public function setCount4(?int $count4): self
    {
        $this->count4 = $count4;

        return $this;
    }

    public function getHq4(): ?bool
    {
        return $this->hq4;
    }

    public function setHq4(?bool $hq4): self
    {
        $this->hq4 = $hq4;

        return $this;
    }

    public function getCount5(): ?int
    {
        return $this->count5;
    }

    public function setCount5(?int $count5): self
    {
        $this->count5 = $count5;

        return $this;
    }

    public function getHq5(): ?bool
    {
        return $this->hq5;
    }

    public function setHq5(?bool $hq5): self
    {
        $this->hq5 = $hq5;

        return $this;
    }

    public function getCount6(): ?int
    {
        return $this->count6;
    }

    public function setCount6(?int $count6): self
    {
        $this->count6 = $count6;

        return $this;
    }

    public function getHq6(): ?bool
    {
        return $this->hq6;
    }

    public function setHq6(?bool $hq6): self
    {
        $this->hq6 = $hq6;

        return $this;
    }

    public function getCount7(): ?int
    {
        return $this->count7;
    }

    public function setCount7(?int $count7): self
    {
        $this->count7 = $count7;

        return $this;
    }

    public function getHq7(): ?bool
    {
        return $this->hq7;
    }

    public function setHq7(?bool $hq7): self
    {
        $this->hq7 = $hq7;

        return $this;
    }

    public function getCount8(): ?int
    {
        return $this->count8;
    }

    public function setCount8(?int $count8): self
    {
        $this->count8 = $count8;

        return $this;
    }

    public function getHq8(): ?bool
    {
        return $this->hq8;
    }

    public function setHq8(?bool $hq8): self
    {
        $this->hq8 = $hq8;

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
