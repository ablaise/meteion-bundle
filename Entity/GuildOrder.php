<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GuildOrder.
 *
 * @ORM\Table(name="guild_order", indexes={@ORM\Index(name="idx_c4a648d192b03613", columns={"enpc_name"})})
 * @ORM\Entity
 */
class GuildOrder
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="guild_order_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var string|null
     *
     * @ORM\Column(name="objective", type="string", length=717, nullable=true)
     */
    private $objective;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description_1", type="string", length=717, nullable=true)
     */
    private $description1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description_2", type="string", length=717, nullable=true)
     */
    private $description2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description_3", type="string", length=717, nullable=true)
     */
    private $description3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="completion_bonus_exp", type="bigint", nullable=true)
     */
    private $completionBonusExp;

    /**
     * @var int|null
     *
     * @ORM\Column(name="reward_exp", type="bigint", nullable=true)
     */
    private $rewardExp;

    /**
     * @var int|null
     *
     * @ORM\Column(name="completion_bonus_gil", type="bigint", nullable=true)
     */
    private $completionBonusGil;

    /**
     * @var int|null
     *
     * @ORM\Column(name="reward_gil", type="bigint", nullable=true)
     */
    private $rewardGil;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_10", type="bigint", nullable=true)
     */
    private $column10;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_11", type="bigint", nullable=true)
     */
    private $column11;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_12", type="bigint", nullable=true)
     */
    private $column12;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_13", type="bigint", nullable=true)
     */
    private $column13;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_14", type="bigint", nullable=true)
     */
    private $column14;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_15", type="bigint", nullable=true)
     */
    private $column15;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_16", type="boolean", nullable=true)
     */
    private $column16;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_17", type="boolean", nullable=true)
     */
    private $column17;

    /**
     * @var EnpcResident
     *
     * @ORM\ManyToOne(targetEntity="EnpcResident")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="enpc_name", referencedColumnName="pk")
     * })
     */
    private $enpcName;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getObjective(): ?string
    {
        return $this->objective;
    }

    public function setObjective(?string $objective): self
    {
        $this->objective = $objective;

        return $this;
    }

    public function getDescription1(): ?string
    {
        return $this->description1;
    }

    public function setDescription1(?string $description1): self
    {
        $this->description1 = $description1;

        return $this;
    }

    public function getDescription2(): ?string
    {
        return $this->description2;
    }

    public function setDescription2(?string $description2): self
    {
        $this->description2 = $description2;

        return $this;
    }

    public function getDescription3(): ?string
    {
        return $this->description3;
    }

    public function setDescription3(?string $description3): self
    {
        $this->description3 = $description3;

        return $this;
    }

    public function getCompletionBonusExp(): ?string
    {
        return $this->completionBonusExp;
    }

    public function setCompletionBonusExp(?string $completionBonusExp): self
    {
        $this->completionBonusExp = $completionBonusExp;

        return $this;
    }

    public function getRewardExp(): ?string
    {
        return $this->rewardExp;
    }

    public function setRewardExp(?string $rewardExp): self
    {
        $this->rewardExp = $rewardExp;

        return $this;
    }

    public function getCompletionBonusGil(): ?string
    {
        return $this->completionBonusGil;
    }

    public function setCompletionBonusGil(?string $completionBonusGil): self
    {
        $this->completionBonusGil = $completionBonusGil;

        return $this;
    }

    public function getRewardGil(): ?string
    {
        return $this->rewardGil;
    }

    public function setRewardGil(?string $rewardGil): self
    {
        $this->rewardGil = $rewardGil;

        return $this;
    }

    public function getColumn10(): ?string
    {
        return $this->column10;
    }

    public function setColumn10(?string $column10): self
    {
        $this->column10 = $column10;

        return $this;
    }

    public function getColumn11(): ?string
    {
        return $this->column11;
    }

    public function setColumn11(?string $column11): self
    {
        $this->column11 = $column11;

        return $this;
    }

    public function getColumn12(): ?string
    {
        return $this->column12;
    }

    public function setColumn12(?string $column12): self
    {
        $this->column12 = $column12;

        return $this;
    }

    public function getColumn13(): ?string
    {
        return $this->column13;
    }

    public function setColumn13(?string $column13): self
    {
        $this->column13 = $column13;

        return $this;
    }

    public function getColumn14(): ?string
    {
        return $this->column14;
    }

    public function setColumn14(?string $column14): self
    {
        $this->column14 = $column14;

        return $this;
    }

    public function getColumn15(): ?string
    {
        return $this->column15;
    }

    public function setColumn15(?string $column15): self
    {
        $this->column15 = $column15;

        return $this;
    }

    public function getColumn16(): ?bool
    {
        return $this->column16;
    }

    public function setColumn16(?bool $column16): self
    {
        $this->column16 = $column16;

        return $this;
    }

    public function getColumn17(): ?bool
    {
        return $this->column17;
    }

    public function setColumn17(?bool $column17): self
    {
        $this->column17 = $column17;

        return $this;
    }

    public function getEnpcName(): ?EnpcResident
    {
        return $this->enpcName;
    }

    public function setEnpcName(?EnpcResident $enpcName): self
    {
        $this->enpcName = $enpcName;

        return $this;
    }
}
