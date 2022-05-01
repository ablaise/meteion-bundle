<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AnimaWeaponItem.
 *
 * @ORM\Table(name="anima_weapon_item", indexes={@ORM\Index(name="idx_7a0d0189c566974b", columns={"item_0"}), @ORM\Index(name="idx_7a0d01892c05327e", columns={"item_6"}), @ORM\Index(name="idx_7a0d018995024155", columns={"item_13"}), @ORM\Index(name="idx_7a0d0189c20b5352", columns={"item_4"}), @ORM\Index(name="idx_7a0d01897b0c2079", columns={"item_11"}), @ORM\Index(name="idx_7a0d0189b261a7dd", columns={"item_1"}), @ORM\Index(name="idx_7a0d0189cbbd1f79", columns={"item_8"}), @ORM\Index(name="idx_7a0d0189bcba2fef", columns={"item_9"}), @ORM\Index(name="idx_7a0d0189c0b10ef", columns={"item_10"}), @ORM\Index(name="idx_7a0d01895c6fc6f1", columns={"item_3"}), @ORM\Index(name="idx_7a0d01895b0202e8", columns={"item_7"}), @ORM\Index(name="idx_7a0d0189b50c63c4", columns={"item_5"}), @ORM\Index(name="idx_7a0d01892b68f667", columns={"item_2"}), @ORM\Index(name="idx_7a0d0189e20571c3", columns={"item_12"})})
 * @ORM\Entity
 */
class AnimaWeaponItem
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="anima_weapon_item_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_13", referencedColumnName="pk")
     * })
     */
    private $item13;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_12", referencedColumnName="pk")
     * })
     */
    private $item12;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_11", referencedColumnName="pk")
     * })
     */
    private $item11;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_10", referencedColumnName="pk")
     * })
     */
    private $item10;

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

    public function getItem13(): ?Item
    {
        return $this->item13;
    }

    public function setItem13(?Item $item13): self
    {
        $this->item13 = $item13;

        return $this;
    }

    public function getItem12(): ?Item
    {
        return $this->item12;
    }

    public function setItem12(?Item $item12): self
    {
        $this->item12 = $item12;

        return $this;
    }

    public function getItem11(): ?Item
    {
        return $this->item11;
    }

    public function setItem11(?Item $item11): self
    {
        $this->item11 = $item11;

        return $this;
    }

    public function getItem10(): ?Item
    {
        return $this->item10;
    }

    public function setItem10(?Item $item10): self
    {
        $this->item10 = $item10;

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
