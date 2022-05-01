<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FccShop.
 *
 * @ORM\Table(name="fcc_shop", indexes={@ORM\Index(name="idx_70f5967d2b68f667", columns={"item_2"}), @ORM\Index(name="idx_70f5967d4a91e922", columns={"fcrank_required_5"}), @ORM\Index(name="idx_70f5967d3420959f", columns={"fcrank_required_8"}), @ORM\Index(name="idx_70f5967dbcba2fef", columns={"item_9"}), @ORM\Index(name="idx_70f5967d3d96d9b4", columns={"fcrank_required_4"}), @ORM\Index(name="idx_70f5967dc566974b", columns={"item_0"}), @ORM\Index(name="idx_70f5967d5b0202e8", columns={"item_7"}), @ORM\Index(name="idx_70f5967d2c05327e", columns={"item_6"}), @ORM\Index(name="idx_70f5967d5c6fc6f1", columns={"item_3"}), @ORM\Index(name="idx_70f5967dcbbd1f79", columns={"item_8"}), @ORM\Index(name="idx_70f5967d4327a509", columns={"fcrank_required_9"}), @ORM\Index(name="idx_70f5967d4dfc2d3b", columns={"fcrank_required_1"}), @ORM\Index(name="idx_70f5967dd398b898", columns={"fcrank_required_6"}), @ORM\Index(name="idx_70f5967dc20b5352", columns={"item_4"}), @ORM\Index(name="idx_70f5967d3afb1dad", columns={"fcrank_required_0"}), @ORM\Index(name="idx_70f5967dd4f57c81", columns={"fcrank_required_2"}), @ORM\Index(name="idx_70f5967da49f880e", columns={"fcrank_required_7"}), @ORM\Index(name="idx_70f5967db261a7dd", columns={"item_1"}), @ORM\Index(name="idx_70f5967db50c63c4", columns={"item_5"}), @ORM\Index(name="idx_70f5967da3f24c17", columns={"fcrank_required_3"})})
 * @ORM\Entity
 */
class FccShop
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="fcc_shop_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var int|null
     *
     * @ORM\Column(name="cost_0", type="bigint", nullable=true)
     */
    private $cost0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="cost_1", type="bigint", nullable=true)
     */
    private $cost1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="cost_2", type="bigint", nullable=true)
     */
    private $cost2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="cost_3", type="bigint", nullable=true)
     */
    private $cost3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="cost_4", type="bigint", nullable=true)
     */
    private $cost4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="cost_5", type="bigint", nullable=true)
     */
    private $cost5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="cost_6", type="bigint", nullable=true)
     */
    private $cost6;

    /**
     * @var int|null
     *
     * @ORM\Column(name="cost_7", type="bigint", nullable=true)
     */
    private $cost7;

    /**
     * @var int|null
     *
     * @ORM\Column(name="cost_8", type="bigint", nullable=true)
     */
    private $cost8;

    /**
     * @var int|null
     *
     * @ORM\Column(name="cost_9", type="bigint", nullable=true)
     */
    private $cost9;

    /**
     * @var Fcrank
     *
     * @ORM\ManyToOne(targetEntity="Fcrank")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fcrank_required_9", referencedColumnName="pk")
     * })
     */
    private $fcrankRequired9;

    /**
     * @var Fcrank
     *
     * @ORM\ManyToOne(targetEntity="Fcrank")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fcrank_required_8", referencedColumnName="pk")
     * })
     */
    private $fcrankRequired8;

    /**
     * @var Fcrank
     *
     * @ORM\ManyToOne(targetEntity="Fcrank")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fcrank_required_7", referencedColumnName="pk")
     * })
     */
    private $fcrankRequired7;

    /**
     * @var Fcrank
     *
     * @ORM\ManyToOne(targetEntity="Fcrank")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fcrank_required_6", referencedColumnName="pk")
     * })
     */
    private $fcrankRequired6;

    /**
     * @var Fcrank
     *
     * @ORM\ManyToOne(targetEntity="Fcrank")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fcrank_required_5", referencedColumnName="pk")
     * })
     */
    private $fcrankRequired5;

    /**
     * @var Fcrank
     *
     * @ORM\ManyToOne(targetEntity="Fcrank")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fcrank_required_4", referencedColumnName="pk")
     * })
     */
    private $fcrankRequired4;

    /**
     * @var Fcrank
     *
     * @ORM\ManyToOne(targetEntity="Fcrank")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fcrank_required_3", referencedColumnName="pk")
     * })
     */
    private $fcrankRequired3;

    /**
     * @var Fcrank
     *
     * @ORM\ManyToOne(targetEntity="Fcrank")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fcrank_required_2", referencedColumnName="pk")
     * })
     */
    private $fcrankRequired2;

    /**
     * @var Fcrank
     *
     * @ORM\ManyToOne(targetEntity="Fcrank")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fcrank_required_1", referencedColumnName="pk")
     * })
     */
    private $fcrankRequired1;

    /**
     * @var Fcrank
     *
     * @ORM\ManyToOne(targetEntity="Fcrank")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fcrank_required_0", referencedColumnName="pk")
     * })
     */
    private $fcrankRequired0;

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

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getCost0(): ?string
    {
        return $this->cost0;
    }

    public function setCost0(?string $cost0): self
    {
        $this->cost0 = $cost0;

        return $this;
    }

    public function getCost1(): ?string
    {
        return $this->cost1;
    }

    public function setCost1(?string $cost1): self
    {
        $this->cost1 = $cost1;

        return $this;
    }

    public function getCost2(): ?string
    {
        return $this->cost2;
    }

    public function setCost2(?string $cost2): self
    {
        $this->cost2 = $cost2;

        return $this;
    }

    public function getCost3(): ?string
    {
        return $this->cost3;
    }

    public function setCost3(?string $cost3): self
    {
        $this->cost3 = $cost3;

        return $this;
    }

    public function getCost4(): ?string
    {
        return $this->cost4;
    }

    public function setCost4(?string $cost4): self
    {
        $this->cost4 = $cost4;

        return $this;
    }

    public function getCost5(): ?string
    {
        return $this->cost5;
    }

    public function setCost5(?string $cost5): self
    {
        $this->cost5 = $cost5;

        return $this;
    }

    public function getCost6(): ?string
    {
        return $this->cost6;
    }

    public function setCost6(?string $cost6): self
    {
        $this->cost6 = $cost6;

        return $this;
    }

    public function getCost7(): ?string
    {
        return $this->cost7;
    }

    public function setCost7(?string $cost7): self
    {
        $this->cost7 = $cost7;

        return $this;
    }

    public function getCost8(): ?string
    {
        return $this->cost8;
    }

    public function setCost8(?string $cost8): self
    {
        $this->cost8 = $cost8;

        return $this;
    }

    public function getCost9(): ?string
    {
        return $this->cost9;
    }

    public function setCost9(?string $cost9): self
    {
        $this->cost9 = $cost9;

        return $this;
    }

    public function getFcrankRequired9(): ?Fcrank
    {
        return $this->fcrankRequired9;
    }

    public function setFcrankRequired9(?Fcrank $fcrankRequired9): self
    {
        $this->fcrankRequired9 = $fcrankRequired9;

        return $this;
    }

    public function getFcrankRequired8(): ?Fcrank
    {
        return $this->fcrankRequired8;
    }

    public function setFcrankRequired8(?Fcrank $fcrankRequired8): self
    {
        $this->fcrankRequired8 = $fcrankRequired8;

        return $this;
    }

    public function getFcrankRequired7(): ?Fcrank
    {
        return $this->fcrankRequired7;
    }

    public function setFcrankRequired7(?Fcrank $fcrankRequired7): self
    {
        $this->fcrankRequired7 = $fcrankRequired7;

        return $this;
    }

    public function getFcrankRequired6(): ?Fcrank
    {
        return $this->fcrankRequired6;
    }

    public function setFcrankRequired6(?Fcrank $fcrankRequired6): self
    {
        $this->fcrankRequired6 = $fcrankRequired6;

        return $this;
    }

    public function getFcrankRequired5(): ?Fcrank
    {
        return $this->fcrankRequired5;
    }

    public function setFcrankRequired5(?Fcrank $fcrankRequired5): self
    {
        $this->fcrankRequired5 = $fcrankRequired5;

        return $this;
    }

    public function getFcrankRequired4(): ?Fcrank
    {
        return $this->fcrankRequired4;
    }

    public function setFcrankRequired4(?Fcrank $fcrankRequired4): self
    {
        $this->fcrankRequired4 = $fcrankRequired4;

        return $this;
    }

    public function getFcrankRequired3(): ?Fcrank
    {
        return $this->fcrankRequired3;
    }

    public function setFcrankRequired3(?Fcrank $fcrankRequired3): self
    {
        $this->fcrankRequired3 = $fcrankRequired3;

        return $this;
    }

    public function getFcrankRequired2(): ?Fcrank
    {
        return $this->fcrankRequired2;
    }

    public function setFcrankRequired2(?Fcrank $fcrankRequired2): self
    {
        $this->fcrankRequired2 = $fcrankRequired2;

        return $this;
    }

    public function getFcrankRequired1(): ?Fcrank
    {
        return $this->fcrankRequired1;
    }

    public function setFcrankRequired1(?Fcrank $fcrankRequired1): self
    {
        $this->fcrankRequired1 = $fcrankRequired1;

        return $this;
    }

    public function getFcrankRequired0(): ?Fcrank
    {
        return $this->fcrankRequired0;
    }

    public function setFcrankRequired0(?Fcrank $fcrankRequired0): self
    {
        $this->fcrankRequired0 = $fcrankRequired0;

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
