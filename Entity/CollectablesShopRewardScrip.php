<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CollectablesShopRewardScrip.
 *
 * @ORM\Table(name="collectables_shop_reward_scrip")
 * @ORM\Entity
 */
class CollectablesShopRewardScrip
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="collectables_shop_reward_scrip_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="currency", type="bigint", nullable=true)
     */
    private $currency;

    /**
     * @var int|null
     *
     * @ORM\Column(name="low_reward", type="bigint", nullable=true)
     */
    private $lowReward;

    /**
     * @var int|null
     *
     * @ORM\Column(name="mid_reward", type="bigint", nullable=true)
     */
    private $midReward;

    /**
     * @var int|null
     *
     * @ORM\Column(name="high_reward", type="bigint", nullable=true)
     */
    private $highReward;

    /**
     * @var int|null
     *
     * @ORM\Column(name="exp_ratio_low", type="bigint", nullable=true)
     */
    private $expRatioLow;

    /**
     * @var int|null
     *
     * @ORM\Column(name="exp_ratio_mid", type="bigint", nullable=true)
     */
    private $expRatioMid;

    /**
     * @var int|null
     *
     * @ORM\Column(name="exp_ratio_high", type="bigint", nullable=true)
     */
    private $expRatioHigh;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    public function setCurrency(?string $currency): self
    {
        $this->currency = $currency;

        return $this;
    }

    public function getLowReward(): ?string
    {
        return $this->lowReward;
    }

    public function setLowReward(?string $lowReward): self
    {
        $this->lowReward = $lowReward;

        return $this;
    }

    public function getMidReward(): ?string
    {
        return $this->midReward;
    }

    public function setMidReward(?string $midReward): self
    {
        $this->midReward = $midReward;

        return $this;
    }

    public function getHighReward(): ?string
    {
        return $this->highReward;
    }

    public function setHighReward(?string $highReward): self
    {
        $this->highReward = $highReward;

        return $this;
    }

    public function getExpRatioLow(): ?string
    {
        return $this->expRatioLow;
    }

    public function setExpRatioLow(?string $expRatioLow): self
    {
        $this->expRatioLow = $expRatioLow;

        return $this;
    }

    public function getExpRatioMid(): ?string
    {
        return $this->expRatioMid;
    }

    public function setExpRatioMid(?string $expRatioMid): self
    {
        $this->expRatioMid = $expRatioMid;

        return $this;
    }

    public function getExpRatioHigh(): ?string
    {
        return $this->expRatioHigh;
    }

    public function setExpRatioHigh(?string $expRatioHigh): self
    {
        $this->expRatioHigh = $expRatioHigh;

        return $this;
    }
}
