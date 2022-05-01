<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * QuestClassJobReward.
 *
 * @ORM\Table(name="quest_class_job_reward", indexes={@ORM\Index(name="idx_24e9be2f90b5e27f", columns={"required_item_0"}), @ORM\Index(name="idx_24e9be2f7ebb8353", columns={"required_item_2"}), @ORM\Index(name="idx_24e9be2fd0db6659", columns={"reward_item_1"}), @ORM\Index(name="idx_24e9be2f49d237e3", columns={"reward_item_2"}), @ORM\Index(name="idx_24e9be2f9bcb3c5", columns={"required_item_3"}), @ORM\Index(name="idx_24e9be2fe7b2d2e9", columns={"required_item_1"}), @ORM\Index(name="idx_24e9be2f3ed50775", columns={"reward_item_3"}), @ORM\Index(name="idx_24e9be2fae8947ec", columns={"class_job_category"}), @ORM\Index(name="idx_24e9be2fa7dc56cf", columns={"reward_item_0"})})
 * @ORM\Entity
 */
class QuestClassJobReward
{
    /**
     * @var string
     *
     * @ORM\Column(name="pk", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="quest_class_job_reward_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="reward_amount_0", type="integer", nullable=true)
     */
    private $rewardAmount0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="reward_amount_1", type="integer", nullable=true)
     */
    private $rewardAmount1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="reward_amount_2", type="integer", nullable=true)
     */
    private $rewardAmount2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="reward_amount_3", type="integer", nullable=true)
     */
    private $rewardAmount3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="required_amount_0", type="integer", nullable=true)
     */
    private $requiredAmount0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="required_amount_1", type="integer", nullable=true)
     */
    private $requiredAmount1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="required_amount_2", type="integer", nullable=true)
     */
    private $requiredAmount2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="required_amount_3", type="integer", nullable=true)
     */
    private $requiredAmount3;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_18", type="boolean", nullable=true)
     */
    private $column18;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_19", type="boolean", nullable=true)
     */
    private $column19;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_20", type="boolean", nullable=true)
     */
    private $column20;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_21", type="boolean", nullable=true)
     */
    private $column21;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_22", type="boolean", nullable=true)
     */
    private $column22;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_23", type="boolean", nullable=true)
     */
    private $column23;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_24", type="boolean", nullable=true)
     */
    private $column24;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_25", type="boolean", nullable=true)
     */
    private $column25;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="required_item_3", referencedColumnName="pk")
     * })
     */
    private $requiredItem3;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="required_item_2", referencedColumnName="pk")
     * })
     */
    private $requiredItem2;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="required_item_1", referencedColumnName="pk")
     * })
     */
    private $requiredItem1;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="required_item_0", referencedColumnName="pk")
     * })
     */
    private $requiredItem0;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_item_3", referencedColumnName="pk")
     * })
     */
    private $rewardItem3;

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
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_item_1", referencedColumnName="pk")
     * })
     */
    private $rewardItem1;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_item_0", referencedColumnName="pk")
     * })
     */
    private $rewardItem0;

    /**
     * @var ClassJobCategory
     *
     * @ORM\ManyToOne(targetEntity="ClassJobCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="class_job_category", referencedColumnName="pk")
     * })
     */
    private $classJobCategory;

    public function getPk(): ?string
    {
        return $this->pk;
    }

    public function getRewardAmount0(): ?int
    {
        return $this->rewardAmount0;
    }

    public function setRewardAmount0(?int $rewardAmount0): self
    {
        $this->rewardAmount0 = $rewardAmount0;

        return $this;
    }

    public function getRewardAmount1(): ?int
    {
        return $this->rewardAmount1;
    }

    public function setRewardAmount1(?int $rewardAmount1): self
    {
        $this->rewardAmount1 = $rewardAmount1;

        return $this;
    }

    public function getRewardAmount2(): ?int
    {
        return $this->rewardAmount2;
    }

    public function setRewardAmount2(?int $rewardAmount2): self
    {
        $this->rewardAmount2 = $rewardAmount2;

        return $this;
    }

    public function getRewardAmount3(): ?int
    {
        return $this->rewardAmount3;
    }

    public function setRewardAmount3(?int $rewardAmount3): self
    {
        $this->rewardAmount3 = $rewardAmount3;

        return $this;
    }

    public function getRequiredAmount0(): ?int
    {
        return $this->requiredAmount0;
    }

    public function setRequiredAmount0(?int $requiredAmount0): self
    {
        $this->requiredAmount0 = $requiredAmount0;

        return $this;
    }

    public function getRequiredAmount1(): ?int
    {
        return $this->requiredAmount1;
    }

    public function setRequiredAmount1(?int $requiredAmount1): self
    {
        $this->requiredAmount1 = $requiredAmount1;

        return $this;
    }

    public function getRequiredAmount2(): ?int
    {
        return $this->requiredAmount2;
    }

    public function setRequiredAmount2(?int $requiredAmount2): self
    {
        $this->requiredAmount2 = $requiredAmount2;

        return $this;
    }

    public function getRequiredAmount3(): ?int
    {
        return $this->requiredAmount3;
    }

    public function setRequiredAmount3(?int $requiredAmount3): self
    {
        $this->requiredAmount3 = $requiredAmount3;

        return $this;
    }

    public function getColumn18(): ?bool
    {
        return $this->column18;
    }

    public function setColumn18(?bool $column18): self
    {
        $this->column18 = $column18;

        return $this;
    }

    public function getColumn19(): ?bool
    {
        return $this->column19;
    }

    public function setColumn19(?bool $column19): self
    {
        $this->column19 = $column19;

        return $this;
    }

    public function getColumn20(): ?bool
    {
        return $this->column20;
    }

    public function setColumn20(?bool $column20): self
    {
        $this->column20 = $column20;

        return $this;
    }

    public function getColumn21(): ?bool
    {
        return $this->column21;
    }

    public function setColumn21(?bool $column21): self
    {
        $this->column21 = $column21;

        return $this;
    }

    public function getColumn22(): ?bool
    {
        return $this->column22;
    }

    public function setColumn22(?bool $column22): self
    {
        $this->column22 = $column22;

        return $this;
    }

    public function getColumn23(): ?bool
    {
        return $this->column23;
    }

    public function setColumn23(?bool $column23): self
    {
        $this->column23 = $column23;

        return $this;
    }

    public function getColumn24(): ?bool
    {
        return $this->column24;
    }

    public function setColumn24(?bool $column24): self
    {
        $this->column24 = $column24;

        return $this;
    }

    public function getColumn25(): ?bool
    {
        return $this->column25;
    }

    public function setColumn25(?bool $column25): self
    {
        $this->column25 = $column25;

        return $this;
    }

    public function getRequiredItem3(): ?Item
    {
        return $this->requiredItem3;
    }

    public function setRequiredItem3(?Item $requiredItem3): self
    {
        $this->requiredItem3 = $requiredItem3;

        return $this;
    }

    public function getRequiredItem2(): ?Item
    {
        return $this->requiredItem2;
    }

    public function setRequiredItem2(?Item $requiredItem2): self
    {
        $this->requiredItem2 = $requiredItem2;

        return $this;
    }

    public function getRequiredItem1(): ?Item
    {
        return $this->requiredItem1;
    }

    public function setRequiredItem1(?Item $requiredItem1): self
    {
        $this->requiredItem1 = $requiredItem1;

        return $this;
    }

    public function getRequiredItem0(): ?Item
    {
        return $this->requiredItem0;
    }

    public function setRequiredItem0(?Item $requiredItem0): self
    {
        $this->requiredItem0 = $requiredItem0;

        return $this;
    }

    public function getRewardItem3(): ?Item
    {
        return $this->rewardItem3;
    }

    public function setRewardItem3(?Item $rewardItem3): self
    {
        $this->rewardItem3 = $rewardItem3;

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

    public function getRewardItem1(): ?Item
    {
        return $this->rewardItem1;
    }

    public function setRewardItem1(?Item $rewardItem1): self
    {
        $this->rewardItem1 = $rewardItem1;

        return $this;
    }

    public function getRewardItem0(): ?Item
    {
        return $this->rewardItem0;
    }

    public function setRewardItem0(?Item $rewardItem0): self
    {
        $this->rewardItem0 = $rewardItem0;

        return $this;
    }

    public function getClassJobCategory(): ?ClassJobCategory
    {
        return $this->classJobCategory;
    }

    public function setClassJobCategory(?ClassJobCategory $classJobCategory): self
    {
        $this->classJobCategory = $classJobCategory;

        return $this;
    }
}
