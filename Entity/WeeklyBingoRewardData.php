<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WeeklyBingoRewardData.
 *
 * @ORM\Table(name="weekly_bingo_reward_data", indexes={@ORM\Index(name="idx_7c20d2d6a5a25", columns={"reward_option_0"}), @ORM\Index(name="idx_7c20d27a6d6ab3", columns={"reward_option_1"}), @ORM\Index(name="idx_7c20d249d237e3", columns={"reward_item_2"})})
 * @ORM\Entity
 */
class WeeklyBingoRewardData
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="weekly_bingo_reward_data_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="reward_type_0", type="integer", nullable=true)
     */
    private $rewardType0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="reward_item_0", type="integer", nullable=true)
     */
    private $rewardItem0;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="reward_hq_0", type="boolean", nullable=true)
     */
    private $rewardHq0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="reward_quantity_0", type="bigint", nullable=true)
     */
    private $rewardQuantity0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="reward_type_1", type="integer", nullable=true)
     */
    private $rewardType1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="reward_item_1", type="integer", nullable=true)
     */
    private $rewardItem1;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="reward_hq_1", type="boolean", nullable=true)
     */
    private $rewardHq1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="reward_quantity_1", type="bigint", nullable=true)
     */
    private $rewardQuantity1;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="reward_hq_2", type="boolean", nullable=true)
     */
    private $rewardHq2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="reward_quantity_2", type="bigint", nullable=true)
     */
    private $rewardQuantity2;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_item_2", referencedColumnName="pk")
     * })
     */
    private $rewardItem2;

    /**
     * @var WeeklyBingoRewardData
     *
     * @ORM\ManyToOne(targetEntity="WeeklyBingoRewardData")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_option_1", referencedColumnName="pk")
     * })
     */
    private $rewardOption1;

    /**
     * @var WeeklyBingoRewardData
     *
     * @ORM\ManyToOne(targetEntity="WeeklyBingoRewardData")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_option_0", referencedColumnName="pk")
     * })
     */
    private $rewardOption0;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getRewardType0(): ?int
    {
        return $this->rewardType0;
    }

    public function setRewardType0(?int $rewardType0): self
    {
        $this->rewardType0 = $rewardType0;

        return $this;
    }

    public function getRewardItem0(): ?int
    {
        return $this->rewardItem0;
    }

    public function setRewardItem0(?int $rewardItem0): self
    {
        $this->rewardItem0 = $rewardItem0;

        return $this;
    }

    public function getRewardHq0(): ?bool
    {
        return $this->rewardHq0;
    }

    public function setRewardHq0(?bool $rewardHq0): self
    {
        $this->rewardHq0 = $rewardHq0;

        return $this;
    }

    public function getRewardQuantity0(): ?string
    {
        return $this->rewardQuantity0;
    }

    public function setRewardQuantity0(?string $rewardQuantity0): self
    {
        $this->rewardQuantity0 = $rewardQuantity0;

        return $this;
    }

    public function getRewardType1(): ?int
    {
        return $this->rewardType1;
    }

    public function setRewardType1(?int $rewardType1): self
    {
        $this->rewardType1 = $rewardType1;

        return $this;
    }

    public function getRewardItem1(): ?int
    {
        return $this->rewardItem1;
    }

    public function setRewardItem1(?int $rewardItem1): self
    {
        $this->rewardItem1 = $rewardItem1;

        return $this;
    }

    public function getRewardHq1(): ?bool
    {
        return $this->rewardHq1;
    }

    public function setRewardHq1(?bool $rewardHq1): self
    {
        $this->rewardHq1 = $rewardHq1;

        return $this;
    }

    public function getRewardQuantity1(): ?string
    {
        return $this->rewardQuantity1;
    }

    public function setRewardQuantity1(?string $rewardQuantity1): self
    {
        $this->rewardQuantity1 = $rewardQuantity1;

        return $this;
    }

    public function getRewardHq2(): ?bool
    {
        return $this->rewardHq2;
    }

    public function setRewardHq2(?bool $rewardHq2): self
    {
        $this->rewardHq2 = $rewardHq2;

        return $this;
    }

    public function getRewardQuantity2(): ?string
    {
        return $this->rewardQuantity2;
    }

    public function setRewardQuantity2(?string $rewardQuantity2): self
    {
        $this->rewardQuantity2 = $rewardQuantity2;

        return $this;
    }

    public function getRewardItem2(): ?Item
    {
        return $this->rewardItem2;
    }

    public function setRewardItem2(?Item $rewardItem2): self
    {
        $this->rewardItem2 = $rewardItem2;

        return $this;
    }

    public function getRewardOption1(): ?self
    {
        return $this->rewardOption1;
    }

    public function setRewardOption1(?self $rewardOption1): self
    {
        $this->rewardOption1 = $rewardOption1;

        return $this;
    }

    public function getRewardOption0(): ?self
    {
        return $this->rewardOption0;
    }

    public function setRewardOption0(?self $rewardOption0): self
    {
        $this->rewardOption0 = $rewardOption0;

        return $this;
    }
}
