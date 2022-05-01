<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CraftLeve.
 *
 * @ORM\Table(name="craft_leve", indexes={@ORM\Index(name="idx_a289f8b65a15d5cb", columns={"leve"}), @ORM\Index(name="idx_a289f8b66c819838", columns={"craft_leve_talk"}), @ORM\Index(name="idx_a289f8b6c566974b", columns={"item_0"}), @ORM\Index(name="idx_a289f8b6b261a7dd", columns={"item_1"}), @ORM\Index(name="idx_a289f8b62b68f667", columns={"item_2"}), @ORM\Index(name="idx_a289f8b65c6fc6f1", columns={"item_3"})})
 * @ORM\Entity
 */
class CraftLeve
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="craft_leve_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="repeats", type="integer", nullable=true)
     */
    private $repeats;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_count_0", type="bigint", nullable=true)
     */
    private $itemCount0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_count_1", type="bigint", nullable=true)
     */
    private $itemCount1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_count_2", type="bigint", nullable=true)
     */
    private $itemCount2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_count_3", type="bigint", nullable=true)
     */
    private $itemCount3;

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

    /**
     * @var CraftLeveTalk
     *
     * @ORM\ManyToOne(targetEntity="CraftLeveTalk")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="craft_leve_talk", referencedColumnName="pk")
     * })
     */
    private $craftLeveTalk;

    /**
     * @var Leve
     *
     * @ORM\ManyToOne(targetEntity="Leve")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="leve", referencedColumnName="pk")
     * })
     */
    private $leve;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getRepeats(): ?int
    {
        return $this->repeats;
    }

    public function setRepeats(?int $repeats): self
    {
        $this->repeats = $repeats;

        return $this;
    }

    public function getItemCount0(): ?string
    {
        return $this->itemCount0;
    }

    public function setItemCount0(?string $itemCount0): self
    {
        $this->itemCount0 = $itemCount0;

        return $this;
    }

    public function getItemCount1(): ?string
    {
        return $this->itemCount1;
    }

    public function setItemCount1(?string $itemCount1): self
    {
        $this->itemCount1 = $itemCount1;

        return $this;
    }

    public function getItemCount2(): ?string
    {
        return $this->itemCount2;
    }

    public function setItemCount2(?string $itemCount2): self
    {
        $this->itemCount2 = $itemCount2;

        return $this;
    }

    public function getItemCount3(): ?string
    {
        return $this->itemCount3;
    }

    public function setItemCount3(?string $itemCount3): self
    {
        $this->itemCount3 = $itemCount3;

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

    public function getCraftLeveTalk(): ?CraftLeveTalk
    {
        return $this->craftLeveTalk;
    }

    public function setCraftLeveTalk(?CraftLeveTalk $craftLeveTalk): self
    {
        $this->craftLeveTalk = $craftLeveTalk;

        return $this;
    }

    public function getLeve(): ?Leve
    {
        return $this->leve;
    }

    public function setLeve(?Leve $leve): self
    {
        $this->leve = $leve;

        return $this;
    }
}
