<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CollectablesShopRewardItem.
 *
 * @ORM\Table(name="collectables_shop_reward_item", indexes={@ORM\Index(name="idx_f2ed271b1f1b251e", columns={"item"})})
 * @ORM\Entity
 */
class CollectablesShopRewardItem
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="collectables_shop_reward_item_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_2", type="boolean", nullable=true)
     */
    private $column2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="reward_low", type="integer", nullable=true)
     */
    private $rewardLow;

    /**
     * @var int|null
     *
     * @ORM\Column(name="reward_mid", type="integer", nullable=true)
     */
    private $rewardMid;

    /**
     * @var int|null
     *
     * @ORM\Column(name="reward_high", type="integer", nullable=true)
     */
    private $rewardHigh;

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
     * @ORM\Column(name="column_8", type="integer", nullable=true)
     */
    private $column8;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_9", type="integer", nullable=true)
     */
    private $column9;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_10", type="integer", nullable=true)
     */
    private $column10;

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

    public function getColumn2(): ?bool
    {
        return $this->column2;
    }

    public function setColumn2(?bool $column2): self
    {
        $this->column2 = $column2;

        return $this;
    }

    public function getRewardLow(): ?int
    {
        return $this->rewardLow;
    }

    public function setRewardLow(?int $rewardLow): self
    {
        $this->rewardLow = $rewardLow;

        return $this;
    }

    public function getRewardMid(): ?int
    {
        return $this->rewardMid;
    }

    public function setRewardMid(?int $rewardMid): self
    {
        $this->rewardMid = $rewardMid;

        return $this;
    }

    public function getRewardHigh(): ?int
    {
        return $this->rewardHigh;
    }

    public function setRewardHigh(?int $rewardHigh): self
    {
        $this->rewardHigh = $rewardHigh;

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

    public function getColumn8(): ?int
    {
        return $this->column8;
    }

    public function setColumn8(?int $column8): self
    {
        $this->column8 = $column8;

        return $this;
    }

    public function getColumn9(): ?int
    {
        return $this->column9;
    }

    public function setColumn9(?int $column9): self
    {
        $this->column9 = $column9;

        return $this;
    }

    public function getColumn10(): ?int
    {
        return $this->column10;
    }

    public function setColumn10(?int $column10): self
    {
        $this->column10 = $column10;

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
