<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tutorial.
 *
 * @ORM\Table(name="tutorial", indexes={@ORM\Index(name="idx_c66bffe9f5f4f526", columns={"reward_ranged"}), @ORM\Index(name="idx_c66bffe9ac0327a2", columns={"reward_tank"}), @ORM\Index(name="idx_c66bffe9a83b20fd", columns={"reward_melee"}), @ORM\Index(name="idx_c66bffe9b996f101", columns={"objective"})})
 * @ORM\Entity
 */
class Tutorial
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="tutorial_pk_seq", allocationSize=1, initialValue=1)
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
     * @ORM\Column(name="column_2", type="integer", nullable=true)
     */
    private $column2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_3", type="integer", nullable=true)
     */
    private $column3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_4", type="integer", nullable=true)
     */
    private $column4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="exp", type="bigint", nullable=true)
     */
    private $exp;

    /**
     * @var int|null
     *
     * @ORM\Column(name="gil", type="bigint", nullable=true)
     */
    private $gil;

    /**
     * @var InstanceContentTextData
     *
     * @ORM\ManyToOne(targetEntity="InstanceContentTextData")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="objective", referencedColumnName="pk")
     * })
     */
    private $objective;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_ranged", referencedColumnName="pk")
     * })
     */
    private $rewardRanged;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_melee", referencedColumnName="pk")
     * })
     */
    private $rewardMelee;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_tank", referencedColumnName="pk")
     * })
     */
    private $rewardTank;

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

    public function getColumn2(): ?int
    {
        return $this->column2;
    }

    public function setColumn2(?int $column2): self
    {
        $this->column2 = $column2;

        return $this;
    }

    public function getColumn3(): ?int
    {
        return $this->column3;
    }

    public function setColumn3(?int $column3): self
    {
        $this->column3 = $column3;

        return $this;
    }

    public function getColumn4(): ?int
    {
        return $this->column4;
    }

    public function setColumn4(?int $column4): self
    {
        $this->column4 = $column4;

        return $this;
    }

    public function getExp(): ?string
    {
        return $this->exp;
    }

    public function setExp(?string $exp): self
    {
        $this->exp = $exp;

        return $this;
    }

    public function getGil(): ?string
    {
        return $this->gil;
    }

    public function setGil(?string $gil): self
    {
        $this->gil = $gil;

        return $this;
    }

    public function getObjective(): ?InstanceContentTextData
    {
        return $this->objective;
    }

    public function setObjective(?InstanceContentTextData $objective): self
    {
        $this->objective = $objective;

        return $this;
    }

    public function getRewardRanged(): ?Item
    {
        return $this->rewardRanged;
    }

    public function setRewardRanged(?Item $rewardRanged): self
    {
        $this->rewardRanged = $rewardRanged;

        return $this;
    }

    public function getRewardMelee(): ?Item
    {
        return $this->rewardMelee;
    }

    public function setRewardMelee(?Item $rewardMelee): self
    {
        $this->rewardMelee = $rewardMelee;

        return $this;
    }

    public function getRewardTank(): ?Item
    {
        return $this->rewardTank;
    }

    public function setRewardTank(?Item $rewardTank): self
    {
        $this->rewardTank = $rewardTank;

        return $this;
    }
}
