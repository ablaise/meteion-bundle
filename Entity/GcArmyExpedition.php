<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcArmyExpedition.
 *
 * @ORM\Table(name="gc_army_expedition", indexes={@ORM\Index(name="idx_99497e1cf00bb25", columns={"gc_army_expedition_type"}), @ORM\Index(name="idx_99497e1d0db6659", columns={"reward_item_1"}), @ORM\Index(name="idx_99497e1a7dc56cf", columns={"reward_item_0"}), @ORM\Index(name="idx_99497e1a0b192d6", columns={"reward_item_4"}), @ORM\Index(name="idx_99497e1d7b6a240", columns={"reward_item_5"}), @ORM\Index(name="idx_99497e13ed50775", columns={"reward_item_3"}), @ORM\Index(name="idx_99497e149d237e3", columns={"reward_item_2"})})
 * @ORM\Entity
 */
class GcArmyExpedition
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="gc_army_expedition_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="required_flag", type="integer", nullable=true)
     */
    private $requiredFlag;

    /**
     * @var int|null
     *
     * @ORM\Column(name="unlock_flag", type="integer", nullable=true)
     */
    private $unlockFlag;

    /**
     * @var int|null
     *
     * @ORM\Column(name="required_level", type="integer", nullable=true)
     */
    private $requiredLevel;

    /**
     * @var int|null
     *
     * @ORM\Column(name="required_seals", type="bigint", nullable=true)
     */
    private $requiredSeals;

    /**
     * @var int|null
     *
     * @ORM\Column(name="reward_experience", type="bigint", nullable=true)
     */
    private $rewardExperience;

    /**
     * @var int|null
     *
     * @ORM\Column(name="percent_base", type="integer", nullable=true)
     */
    private $percentBase;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_7", type="integer", nullable=true)
     */
    private $column7;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=524, nullable=true)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="string", length=524, nullable=true)
     */
    private $description;

    /**
     * @var int|null
     *
     * @ORM\Column(name="reward_quantity_0", type="integer", nullable=true)
     */
    private $rewardQuantity0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="reward_quantity_1", type="integer", nullable=true)
     */
    private $rewardQuantity1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="reward_quantity_2", type="integer", nullable=true)
     */
    private $rewardQuantity2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="reward_quantity_3", type="integer", nullable=true)
     */
    private $rewardQuantity3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="reward_quantity_4", type="integer", nullable=true)
     */
    private $rewardQuantity4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="reward_quantity_5", type="integer", nullable=true)
     */
    private $rewardQuantity5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="required_physical_0", type="bigint", nullable=true)
     */
    private $requiredPhysical0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="required_physical_1", type="bigint", nullable=true)
     */
    private $requiredPhysical1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="required_physical_2", type="bigint", nullable=true)
     */
    private $requiredPhysical2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="required_physical_3", type="bigint", nullable=true)
     */
    private $requiredPhysical3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="required_physical_4", type="bigint", nullable=true)
     */
    private $requiredPhysical4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="required_physical_5", type="bigint", nullable=true)
     */
    private $requiredPhysical5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="percent_physical_met_0", type="integer", nullable=true)
     */
    private $percentPhysicalMet0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="percent_physical_met_1", type="integer", nullable=true)
     */
    private $percentPhysicalMet1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="percent_physical_met_2", type="integer", nullable=true)
     */
    private $percentPhysicalMet2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="percent_physical_met_3", type="integer", nullable=true)
     */
    private $percentPhysicalMet3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="percent_physical_met_4", type="integer", nullable=true)
     */
    private $percentPhysicalMet4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="percent_physical_met_5", type="integer", nullable=true)
     */
    private $percentPhysicalMet5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="required_mental_0", type="bigint", nullable=true)
     */
    private $requiredMental0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="required_mental_1", type="bigint", nullable=true)
     */
    private $requiredMental1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="required_mental_2", type="bigint", nullable=true)
     */
    private $requiredMental2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="required_mental_3", type="bigint", nullable=true)
     */
    private $requiredMental3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="required_mental_4", type="bigint", nullable=true)
     */
    private $requiredMental4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="required_mental_5", type="bigint", nullable=true)
     */
    private $requiredMental5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="percent_mental_met_0", type="integer", nullable=true)
     */
    private $percentMentalMet0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="percent_mental_met_1", type="integer", nullable=true)
     */
    private $percentMentalMet1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="percent_mental_met_2", type="integer", nullable=true)
     */
    private $percentMentalMet2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="percent_mental_met_3", type="integer", nullable=true)
     */
    private $percentMentalMet3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="percent_mental_met_4", type="integer", nullable=true)
     */
    private $percentMentalMet4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="percent_mental_met_5", type="integer", nullable=true)
     */
    private $percentMentalMet5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="required_tactical_0", type="bigint", nullable=true)
     */
    private $requiredTactical0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="required_tactical_1", type="bigint", nullable=true)
     */
    private $requiredTactical1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="required_tactical_2", type="bigint", nullable=true)
     */
    private $requiredTactical2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="required_tactical_3", type="bigint", nullable=true)
     */
    private $requiredTactical3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="required_tactical_4", type="bigint", nullable=true)
     */
    private $requiredTactical4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="required_tactical_5", type="bigint", nullable=true)
     */
    private $requiredTactical5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="percent_tactical_met_0", type="integer", nullable=true)
     */
    private $percentTacticalMet0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="percent_tactical_met_1", type="integer", nullable=true)
     */
    private $percentTacticalMet1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="percent_tactical_met_2", type="integer", nullable=true)
     */
    private $percentTacticalMet2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="percent_tactical_met_3", type="integer", nullable=true)
     */
    private $percentTacticalMet3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="percent_tactical_met_4", type="integer", nullable=true)
     */
    private $percentTacticalMet4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="percent_tactical_met_5", type="integer", nullable=true)
     */
    private $percentTacticalMet5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="percent_all_met_0", type="integer", nullable=true)
     */
    private $percentAllMet0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="percent_all_met_1", type="integer", nullable=true)
     */
    private $percentAllMet1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="percent_all_met_2", type="integer", nullable=true)
     */
    private $percentAllMet2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="percent_all_met_3", type="integer", nullable=true)
     */
    private $percentAllMet3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="percent_all_met_4", type="integer", nullable=true)
     */
    private $percentAllMet4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="percent_all_met_5", type="integer", nullable=true)
     */
    private $percentAllMet5;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_item_5", referencedColumnName="pk")
     * })
     */
    private $rewardItem5;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward_item_4", referencedColumnName="pk")
     * })
     */
    private $rewardItem4;

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
     * @var GcArmyExpeditionType
     *
     * @ORM\ManyToOne(targetEntity="GcArmyExpeditionType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gc_army_expedition_type", referencedColumnName="pk")
     * })
     */
    private $gcArmyExpeditionType;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getRequiredFlag(): ?int
    {
        return $this->requiredFlag;
    }

    public function setRequiredFlag(?int $requiredFlag): self
    {
        $this->requiredFlag = $requiredFlag;

        return $this;
    }

    public function getUnlockFlag(): ?int
    {
        return $this->unlockFlag;
    }

    public function setUnlockFlag(?int $unlockFlag): self
    {
        $this->unlockFlag = $unlockFlag;

        return $this;
    }

    public function getRequiredLevel(): ?int
    {
        return $this->requiredLevel;
    }

    public function setRequiredLevel(?int $requiredLevel): self
    {
        $this->requiredLevel = $requiredLevel;

        return $this;
    }

    public function getRequiredSeals(): ?string
    {
        return $this->requiredSeals;
    }

    public function setRequiredSeals(?string $requiredSeals): self
    {
        $this->requiredSeals = $requiredSeals;

        return $this;
    }

    public function getRewardExperience(): ?string
    {
        return $this->rewardExperience;
    }

    public function setRewardExperience(?string $rewardExperience): self
    {
        $this->rewardExperience = $rewardExperience;

        return $this;
    }

    public function getPercentBase(): ?int
    {
        return $this->percentBase;
    }

    public function setPercentBase(?int $percentBase): self
    {
        $this->percentBase = $percentBase;

        return $this;
    }

    public function getColumn7(): ?int
    {
        return $this->column7;
    }

    public function setColumn7(?int $column7): self
    {
        $this->column7 = $column7;

        return $this;
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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getRewardQuantity0(): ?int
    {
        return $this->rewardQuantity0;
    }

    public function setRewardQuantity0(?int $rewardQuantity0): self
    {
        $this->rewardQuantity0 = $rewardQuantity0;

        return $this;
    }

    public function getRewardQuantity1(): ?int
    {
        return $this->rewardQuantity1;
    }

    public function setRewardQuantity1(?int $rewardQuantity1): self
    {
        $this->rewardQuantity1 = $rewardQuantity1;

        return $this;
    }

    public function getRewardQuantity2(): ?int
    {
        return $this->rewardQuantity2;
    }

    public function setRewardQuantity2(?int $rewardQuantity2): self
    {
        $this->rewardQuantity2 = $rewardQuantity2;

        return $this;
    }

    public function getRewardQuantity3(): ?int
    {
        return $this->rewardQuantity3;
    }

    public function setRewardQuantity3(?int $rewardQuantity3): self
    {
        $this->rewardQuantity3 = $rewardQuantity3;

        return $this;
    }

    public function getRewardQuantity4(): ?int
    {
        return $this->rewardQuantity4;
    }

    public function setRewardQuantity4(?int $rewardQuantity4): self
    {
        $this->rewardQuantity4 = $rewardQuantity4;

        return $this;
    }

    public function getRewardQuantity5(): ?int
    {
        return $this->rewardQuantity5;
    }

    public function setRewardQuantity5(?int $rewardQuantity5): self
    {
        $this->rewardQuantity5 = $rewardQuantity5;

        return $this;
    }

    public function getRequiredPhysical0(): ?string
    {
        return $this->requiredPhysical0;
    }

    public function setRequiredPhysical0(?string $requiredPhysical0): self
    {
        $this->requiredPhysical0 = $requiredPhysical0;

        return $this;
    }

    public function getRequiredPhysical1(): ?string
    {
        return $this->requiredPhysical1;
    }

    public function setRequiredPhysical1(?string $requiredPhysical1): self
    {
        $this->requiredPhysical1 = $requiredPhysical1;

        return $this;
    }

    public function getRequiredPhysical2(): ?string
    {
        return $this->requiredPhysical2;
    }

    public function setRequiredPhysical2(?string $requiredPhysical2): self
    {
        $this->requiredPhysical2 = $requiredPhysical2;

        return $this;
    }

    public function getRequiredPhysical3(): ?string
    {
        return $this->requiredPhysical3;
    }

    public function setRequiredPhysical3(?string $requiredPhysical3): self
    {
        $this->requiredPhysical3 = $requiredPhysical3;

        return $this;
    }

    public function getRequiredPhysical4(): ?string
    {
        return $this->requiredPhysical4;
    }

    public function setRequiredPhysical4(?string $requiredPhysical4): self
    {
        $this->requiredPhysical4 = $requiredPhysical4;

        return $this;
    }

    public function getRequiredPhysical5(): ?string
    {
        return $this->requiredPhysical5;
    }

    public function setRequiredPhysical5(?string $requiredPhysical5): self
    {
        $this->requiredPhysical5 = $requiredPhysical5;

        return $this;
    }

    public function getPercentPhysicalMet0(): ?int
    {
        return $this->percentPhysicalMet0;
    }

    public function setPercentPhysicalMet0(?int $percentPhysicalMet0): self
    {
        $this->percentPhysicalMet0 = $percentPhysicalMet0;

        return $this;
    }

    public function getPercentPhysicalMet1(): ?int
    {
        return $this->percentPhysicalMet1;
    }

    public function setPercentPhysicalMet1(?int $percentPhysicalMet1): self
    {
        $this->percentPhysicalMet1 = $percentPhysicalMet1;

        return $this;
    }

    public function getPercentPhysicalMet2(): ?int
    {
        return $this->percentPhysicalMet2;
    }

    public function setPercentPhysicalMet2(?int $percentPhysicalMet2): self
    {
        $this->percentPhysicalMet2 = $percentPhysicalMet2;

        return $this;
    }

    public function getPercentPhysicalMet3(): ?int
    {
        return $this->percentPhysicalMet3;
    }

    public function setPercentPhysicalMet3(?int $percentPhysicalMet3): self
    {
        $this->percentPhysicalMet3 = $percentPhysicalMet3;

        return $this;
    }

    public function getPercentPhysicalMet4(): ?int
    {
        return $this->percentPhysicalMet4;
    }

    public function setPercentPhysicalMet4(?int $percentPhysicalMet4): self
    {
        $this->percentPhysicalMet4 = $percentPhysicalMet4;

        return $this;
    }

    public function getPercentPhysicalMet5(): ?int
    {
        return $this->percentPhysicalMet5;
    }

    public function setPercentPhysicalMet5(?int $percentPhysicalMet5): self
    {
        $this->percentPhysicalMet5 = $percentPhysicalMet5;

        return $this;
    }

    public function getRequiredMental0(): ?string
    {
        return $this->requiredMental0;
    }

    public function setRequiredMental0(?string $requiredMental0): self
    {
        $this->requiredMental0 = $requiredMental0;

        return $this;
    }

    public function getRequiredMental1(): ?string
    {
        return $this->requiredMental1;
    }

    public function setRequiredMental1(?string $requiredMental1): self
    {
        $this->requiredMental1 = $requiredMental1;

        return $this;
    }

    public function getRequiredMental2(): ?string
    {
        return $this->requiredMental2;
    }

    public function setRequiredMental2(?string $requiredMental2): self
    {
        $this->requiredMental2 = $requiredMental2;

        return $this;
    }

    public function getRequiredMental3(): ?string
    {
        return $this->requiredMental3;
    }

    public function setRequiredMental3(?string $requiredMental3): self
    {
        $this->requiredMental3 = $requiredMental3;

        return $this;
    }

    public function getRequiredMental4(): ?string
    {
        return $this->requiredMental4;
    }

    public function setRequiredMental4(?string $requiredMental4): self
    {
        $this->requiredMental4 = $requiredMental4;

        return $this;
    }

    public function getRequiredMental5(): ?string
    {
        return $this->requiredMental5;
    }

    public function setRequiredMental5(?string $requiredMental5): self
    {
        $this->requiredMental5 = $requiredMental5;

        return $this;
    }

    public function getPercentMentalMet0(): ?int
    {
        return $this->percentMentalMet0;
    }

    public function setPercentMentalMet0(?int $percentMentalMet0): self
    {
        $this->percentMentalMet0 = $percentMentalMet0;

        return $this;
    }

    public function getPercentMentalMet1(): ?int
    {
        return $this->percentMentalMet1;
    }

    public function setPercentMentalMet1(?int $percentMentalMet1): self
    {
        $this->percentMentalMet1 = $percentMentalMet1;

        return $this;
    }

    public function getPercentMentalMet2(): ?int
    {
        return $this->percentMentalMet2;
    }

    public function setPercentMentalMet2(?int $percentMentalMet2): self
    {
        $this->percentMentalMet2 = $percentMentalMet2;

        return $this;
    }

    public function getPercentMentalMet3(): ?int
    {
        return $this->percentMentalMet3;
    }

    public function setPercentMentalMet3(?int $percentMentalMet3): self
    {
        $this->percentMentalMet3 = $percentMentalMet3;

        return $this;
    }

    public function getPercentMentalMet4(): ?int
    {
        return $this->percentMentalMet4;
    }

    public function setPercentMentalMet4(?int $percentMentalMet4): self
    {
        $this->percentMentalMet4 = $percentMentalMet4;

        return $this;
    }

    public function getPercentMentalMet5(): ?int
    {
        return $this->percentMentalMet5;
    }

    public function setPercentMentalMet5(?int $percentMentalMet5): self
    {
        $this->percentMentalMet5 = $percentMentalMet5;

        return $this;
    }

    public function getRequiredTactical0(): ?string
    {
        return $this->requiredTactical0;
    }

    public function setRequiredTactical0(?string $requiredTactical0): self
    {
        $this->requiredTactical0 = $requiredTactical0;

        return $this;
    }

    public function getRequiredTactical1(): ?string
    {
        return $this->requiredTactical1;
    }

    public function setRequiredTactical1(?string $requiredTactical1): self
    {
        $this->requiredTactical1 = $requiredTactical1;

        return $this;
    }

    public function getRequiredTactical2(): ?string
    {
        return $this->requiredTactical2;
    }

    public function setRequiredTactical2(?string $requiredTactical2): self
    {
        $this->requiredTactical2 = $requiredTactical2;

        return $this;
    }

    public function getRequiredTactical3(): ?string
    {
        return $this->requiredTactical3;
    }

    public function setRequiredTactical3(?string $requiredTactical3): self
    {
        $this->requiredTactical3 = $requiredTactical3;

        return $this;
    }

    public function getRequiredTactical4(): ?string
    {
        return $this->requiredTactical4;
    }

    public function setRequiredTactical4(?string $requiredTactical4): self
    {
        $this->requiredTactical4 = $requiredTactical4;

        return $this;
    }

    public function getRequiredTactical5(): ?string
    {
        return $this->requiredTactical5;
    }

    public function setRequiredTactical5(?string $requiredTactical5): self
    {
        $this->requiredTactical5 = $requiredTactical5;

        return $this;
    }

    public function getPercentTacticalMet0(): ?int
    {
        return $this->percentTacticalMet0;
    }

    public function setPercentTacticalMet0(?int $percentTacticalMet0): self
    {
        $this->percentTacticalMet0 = $percentTacticalMet0;

        return $this;
    }

    public function getPercentTacticalMet1(): ?int
    {
        return $this->percentTacticalMet1;
    }

    public function setPercentTacticalMet1(?int $percentTacticalMet1): self
    {
        $this->percentTacticalMet1 = $percentTacticalMet1;

        return $this;
    }

    public function getPercentTacticalMet2(): ?int
    {
        return $this->percentTacticalMet2;
    }

    public function setPercentTacticalMet2(?int $percentTacticalMet2): self
    {
        $this->percentTacticalMet2 = $percentTacticalMet2;

        return $this;
    }

    public function getPercentTacticalMet3(): ?int
    {
        return $this->percentTacticalMet3;
    }

    public function setPercentTacticalMet3(?int $percentTacticalMet3): self
    {
        $this->percentTacticalMet3 = $percentTacticalMet3;

        return $this;
    }

    public function getPercentTacticalMet4(): ?int
    {
        return $this->percentTacticalMet4;
    }

    public function setPercentTacticalMet4(?int $percentTacticalMet4): self
    {
        $this->percentTacticalMet4 = $percentTacticalMet4;

        return $this;
    }

    public function getPercentTacticalMet5(): ?int
    {
        return $this->percentTacticalMet5;
    }

    public function setPercentTacticalMet5(?int $percentTacticalMet5): self
    {
        $this->percentTacticalMet5 = $percentTacticalMet5;

        return $this;
    }

    public function getPercentAllMet0(): ?int
    {
        return $this->percentAllMet0;
    }

    public function setPercentAllMet0(?int $percentAllMet0): self
    {
        $this->percentAllMet0 = $percentAllMet0;

        return $this;
    }

    public function getPercentAllMet1(): ?int
    {
        return $this->percentAllMet1;
    }

    public function setPercentAllMet1(?int $percentAllMet1): self
    {
        $this->percentAllMet1 = $percentAllMet1;

        return $this;
    }

    public function getPercentAllMet2(): ?int
    {
        return $this->percentAllMet2;
    }

    public function setPercentAllMet2(?int $percentAllMet2): self
    {
        $this->percentAllMet2 = $percentAllMet2;

        return $this;
    }

    public function getPercentAllMet3(): ?int
    {
        return $this->percentAllMet3;
    }

    public function setPercentAllMet3(?int $percentAllMet3): self
    {
        $this->percentAllMet3 = $percentAllMet3;

        return $this;
    }

    public function getPercentAllMet4(): ?int
    {
        return $this->percentAllMet4;
    }

    public function setPercentAllMet4(?int $percentAllMet4): self
    {
        $this->percentAllMet4 = $percentAllMet4;

        return $this;
    }

    public function getPercentAllMet5(): ?int
    {
        return $this->percentAllMet5;
    }

    public function setPercentAllMet5(?int $percentAllMet5): self
    {
        $this->percentAllMet5 = $percentAllMet5;

        return $this;
    }

    public function getRewardItem5(): ?Item
    {
        return $this->rewardItem5;
    }

    public function setRewardItem5(?Item $rewardItem5): self
    {
        $this->rewardItem5 = $rewardItem5;

        return $this;
    }

    public function getRewardItem4(): ?Item
    {
        return $this->rewardItem4;
    }

    public function setRewardItem4(?Item $rewardItem4): self
    {
        $this->rewardItem4 = $rewardItem4;

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

    public function getGcArmyExpeditionType(): ?GcArmyExpeditionType
    {
        return $this->gcArmyExpeditionType;
    }

    public function setGcArmyExpeditionType(?GcArmyExpeditionType $gcArmyExpeditionType): self
    {
        $this->gcArmyExpeditionType = $gcArmyExpeditionType;

        return $this;
    }
}
