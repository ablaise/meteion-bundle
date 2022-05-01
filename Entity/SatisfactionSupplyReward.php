<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SatisfactionSupplyReward.
 *
 * @ORM\Table(name="satisfaction_supply_reward")
 * @ORM\Entity
 */
class SatisfactionSupplyReward
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="satisfaction_supply_reward_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1", type="integer", nullable=true)
     */
    private $column1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="reward_currency_0", type="bigint", nullable=true)
     */
    private $rewardCurrency0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quantity_low_0", type="bigint", nullable=true)
     */
    private $quantityLow0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quantity_mid_0", type="bigint", nullable=true)
     */
    private $quantityMid0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quantity_high_0", type="bigint", nullable=true)
     */
    private $quantityHigh0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="reward_currency_1", type="bigint", nullable=true)
     */
    private $rewardCurrency1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quantity_low_1", type="bigint", nullable=true)
     */
    private $quantityLow1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quantity_mid_1", type="bigint", nullable=true)
     */
    private $quantityMid1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quantity_high_1", type="bigint", nullable=true)
     */
    private $quantityHigh1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_10", type="integer", nullable=true)
     */
    private $column10;

    /**
     * @var int|null
     *
     * @ORM\Column(name="satisfaction_low", type="bigint", nullable=true)
     */
    private $satisfactionLow;

    /**
     * @var int|null
     *
     * @ORM\Column(name="satisfaction_mid", type="bigint", nullable=true)
     */
    private $satisfactionMid;

    /**
     * @var int|null
     *
     * @ORM\Column(name="satisfaction_high", type="bigint", nullable=true)
     */
    private $satisfactionHigh;

    /**
     * @var int|null
     *
     * @ORM\Column(name="gil_low", type="bigint", nullable=true)
     */
    private $gilLow;

    /**
     * @var int|null
     *
     * @ORM\Column(name="gil_mid", type="bigint", nullable=true)
     */
    private $gilMid;

    /**
     * @var int|null
     *
     * @ORM\Column(name="gil_high", type="bigint", nullable=true)
     */
    private $gilHigh;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getColumn1(): ?int
    {
        return $this->column1;
    }

    public function setColumn1(?int $column1): self
    {
        $this->column1 = $column1;

        return $this;
    }

    public function getRewardCurrency0(): ?string
    {
        return $this->rewardCurrency0;
    }

    public function setRewardCurrency0(?string $rewardCurrency0): self
    {
        $this->rewardCurrency0 = $rewardCurrency0;

        return $this;
    }

    public function getQuantityLow0(): ?string
    {
        return $this->quantityLow0;
    }

    public function setQuantityLow0(?string $quantityLow0): self
    {
        $this->quantityLow0 = $quantityLow0;

        return $this;
    }

    public function getQuantityMid0(): ?string
    {
        return $this->quantityMid0;
    }

    public function setQuantityMid0(?string $quantityMid0): self
    {
        $this->quantityMid0 = $quantityMid0;

        return $this;
    }

    public function getQuantityHigh0(): ?string
    {
        return $this->quantityHigh0;
    }

    public function setQuantityHigh0(?string $quantityHigh0): self
    {
        $this->quantityHigh0 = $quantityHigh0;

        return $this;
    }

    public function getRewardCurrency1(): ?string
    {
        return $this->rewardCurrency1;
    }

    public function setRewardCurrency1(?string $rewardCurrency1): self
    {
        $this->rewardCurrency1 = $rewardCurrency1;

        return $this;
    }

    public function getQuantityLow1(): ?string
    {
        return $this->quantityLow1;
    }

    public function setQuantityLow1(?string $quantityLow1): self
    {
        $this->quantityLow1 = $quantityLow1;

        return $this;
    }

    public function getQuantityMid1(): ?string
    {
        return $this->quantityMid1;
    }

    public function setQuantityMid1(?string $quantityMid1): self
    {
        $this->quantityMid1 = $quantityMid1;

        return $this;
    }

    public function getQuantityHigh1(): ?string
    {
        return $this->quantityHigh1;
    }

    public function setQuantityHigh1(?string $quantityHigh1): self
    {
        $this->quantityHigh1 = $quantityHigh1;

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

    public function getSatisfactionLow(): ?string
    {
        return $this->satisfactionLow;
    }

    public function setSatisfactionLow(?string $satisfactionLow): self
    {
        $this->satisfactionLow = $satisfactionLow;

        return $this;
    }

    public function getSatisfactionMid(): ?string
    {
        return $this->satisfactionMid;
    }

    public function setSatisfactionMid(?string $satisfactionMid): self
    {
        $this->satisfactionMid = $satisfactionMid;

        return $this;
    }

    public function getSatisfactionHigh(): ?string
    {
        return $this->satisfactionHigh;
    }

    public function setSatisfactionHigh(?string $satisfactionHigh): self
    {
        $this->satisfactionHigh = $satisfactionHigh;

        return $this;
    }

    public function getGilLow(): ?string
    {
        return $this->gilLow;
    }

    public function setGilLow(?string $gilLow): self
    {
        $this->gilLow = $gilLow;

        return $this;
    }

    public function getGilMid(): ?string
    {
        return $this->gilMid;
    }

    public function setGilMid(?string $gilMid): self
    {
        $this->gilMid = $gilMid;

        return $this;
    }

    public function getGilHigh(): ?string
    {
        return $this->gilHigh;
    }

    public function setGilHigh(?string $gilHigh): self
    {
        $this->gilHigh = $gilHigh;

        return $this;
    }
}
