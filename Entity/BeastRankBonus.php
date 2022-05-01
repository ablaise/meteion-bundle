<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BeastRankBonus.
 *
 * @ORM\Table(name="beast_rank_bonus", indexes={@ORM\Index(name="idx_a813ad341f1b251e", columns={"item"})})
 * @ORM\Entity
 */
class BeastRankBonus
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="beast_rank_bonus_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="neutral", type="bigint", nullable=true)
     */
    private $neutral;

    /**
     * @var int|null
     *
     * @ORM\Column(name="recognized", type="bigint", nullable=true)
     */
    private $recognized;

    /**
     * @var int|null
     *
     * @ORM\Column(name="friendly", type="bigint", nullable=true)
     */
    private $friendly;

    /**
     * @var int|null
     *
     * @ORM\Column(name="trusted", type="bigint", nullable=true)
     */
    private $trusted;

    /**
     * @var int|null
     *
     * @ORM\Column(name="respected", type="bigint", nullable=true)
     */
    private $respected;

    /**
     * @var int|null
     *
     * @ORM\Column(name="honored", type="bigint", nullable=true)
     */
    private $honored;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sworn", type="bigint", nullable=true)
     */
    private $sworn;

    /**
     * @var int|null
     *
     * @ORM\Column(name="allied_bloodsworn", type="bigint", nullable=true)
     */
    private $alliedBloodsworn;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_quantity_0", type="integer", nullable=true)
     */
    private $itemQuantity0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_quantity_1", type="integer", nullable=true)
     */
    private $itemQuantity1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_quantity_2", type="integer", nullable=true)
     */
    private $itemQuantity2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_quantity_3", type="integer", nullable=true)
     */
    private $itemQuantity3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_quantity_4", type="integer", nullable=true)
     */
    private $itemQuantity4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_quantity_5", type="integer", nullable=true)
     */
    private $itemQuantity5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_quantity_6", type="integer", nullable=true)
     */
    private $itemQuantity6;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_quantity_7", type="integer", nullable=true)
     */
    private $itemQuantity7;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item", referencedColumnName="pk")
     * })
     */
    private $item;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getNeutral(): ?string
    {
        return $this->neutral;
    }

    public function setNeutral(?string $neutral): self
    {
        $this->neutral = $neutral;

        return $this;
    }

    public function getRecognized(): ?string
    {
        return $this->recognized;
    }

    public function setRecognized(?string $recognized): self
    {
        $this->recognized = $recognized;

        return $this;
    }

    public function getFriendly(): ?string
    {
        return $this->friendly;
    }

    public function setFriendly(?string $friendly): self
    {
        $this->friendly = $friendly;

        return $this;
    }

    public function getTrusted(): ?string
    {
        return $this->trusted;
    }

    public function setTrusted(?string $trusted): self
    {
        $this->trusted = $trusted;

        return $this;
    }

    public function getRespected(): ?string
    {
        return $this->respected;
    }

    public function setRespected(?string $respected): self
    {
        $this->respected = $respected;

        return $this;
    }

    public function getHonored(): ?string
    {
        return $this->honored;
    }

    public function setHonored(?string $honored): self
    {
        $this->honored = $honored;

        return $this;
    }

    public function getSworn(): ?string
    {
        return $this->sworn;
    }

    public function setSworn(?string $sworn): self
    {
        $this->sworn = $sworn;

        return $this;
    }

    public function getAlliedBloodsworn(): ?string
    {
        return $this->alliedBloodsworn;
    }

    public function setAlliedBloodsworn(?string $alliedBloodsworn): self
    {
        $this->alliedBloodsworn = $alliedBloodsworn;

        return $this;
    }

    public function getItemQuantity0(): ?int
    {
        return $this->itemQuantity0;
    }

    public function setItemQuantity0(?int $itemQuantity0): self
    {
        $this->itemQuantity0 = $itemQuantity0;

        return $this;
    }

    public function getItemQuantity1(): ?int
    {
        return $this->itemQuantity1;
    }

    public function setItemQuantity1(?int $itemQuantity1): self
    {
        $this->itemQuantity1 = $itemQuantity1;

        return $this;
    }

    public function getItemQuantity2(): ?int
    {
        return $this->itemQuantity2;
    }

    public function setItemQuantity2(?int $itemQuantity2): self
    {
        $this->itemQuantity2 = $itemQuantity2;

        return $this;
    }

    public function getItemQuantity3(): ?int
    {
        return $this->itemQuantity3;
    }

    public function setItemQuantity3(?int $itemQuantity3): self
    {
        $this->itemQuantity3 = $itemQuantity3;

        return $this;
    }

    public function getItemQuantity4(): ?int
    {
        return $this->itemQuantity4;
    }

    public function setItemQuantity4(?int $itemQuantity4): self
    {
        $this->itemQuantity4 = $itemQuantity4;

        return $this;
    }

    public function getItemQuantity5(): ?int
    {
        return $this->itemQuantity5;
    }

    public function setItemQuantity5(?int $itemQuantity5): self
    {
        $this->itemQuantity5 = $itemQuantity5;

        return $this;
    }

    public function getItemQuantity6(): ?int
    {
        return $this->itemQuantity6;
    }

    public function setItemQuantity6(?int $itemQuantity6): self
    {
        $this->itemQuantity6 = $itemQuantity6;

        return $this;
    }

    public function getItemQuantity7(): ?int
    {
        return $this->itemQuantity7;
    }

    public function setItemQuantity7(?int $itemQuantity7): self
    {
        $this->itemQuantity7 = $itemQuantity7;

        return $this;
    }

    public function getItem(): ?Item
    {
        return $this->item;
    }

    public function setItem(?Item $item): self
    {
        $this->item = $item;

        return $this;
    }
}
