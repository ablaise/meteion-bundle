<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AozActionTransient.
 *
 * @ORM\Table(name="aoz_action_transient", indexes={@ORM\Index(name="idx_d23a7b47ad516979", columns={"required_for_quest"}), @ORM\Index(name="idx_d23a7b47a8ef0140", columns={"previous_quest"})})
 * @ORM\Entity
 */
class AozActionTransient
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="aoz_action_transient_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="number", type="integer", nullable=true)
     */
    private $number;

    /**
     * @var int|null
     *
     * @ORM\Column(name="icon", type="integer", nullable=true)
     */
    private $icon;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stats", type="string", length=422, nullable=true)
     */
    private $stats;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="string", length=422, nullable=true)
     */
    private $description;

    /**
     * @var int|null
     *
     * @ORM\Column(name="location_key", type="integer", nullable=true)
     */
    private $locationKey;

    /**
     * @var int|null
     *
     * @ORM\Column(name="location", type="integer", nullable=true)
     */
    private $location;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="targets_enemy", type="boolean", nullable=true)
     */
    private $targetsEnemy;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="targets_self_or_ally", type="boolean", nullable=true)
     */
    private $targetsSelfOrAlly;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="cause_slow", type="boolean", nullable=true)
     */
    private $causeSlow;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="cause_petrify", type="boolean", nullable=true)
     */
    private $causePetrify;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="cause_paralysis", type="boolean", nullable=true)
     */
    private $causeParalysis;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="cause_interrupt", type="boolean", nullable=true)
     */
    private $causeInterrupt;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="cause_blind", type="boolean", nullable=true)
     */
    private $causeBlind;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="cause_stun", type="boolean", nullable=true)
     */
    private $causeStun;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="cause_sleep", type="boolean", nullable=true)
     */
    private $causeSleep;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="cause_bind", type="boolean", nullable=true)
     */
    private $causeBind;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="cause_heavy", type="boolean", nullable=true)
     */
    private $causeHeavy;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="cause_death", type="boolean", nullable=true)
     */
    private $causeDeath;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="previous_quest", referencedColumnName="pk")
     * })
     */
    private $previousQuest;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="required_for_quest", referencedColumnName="pk")
     * })
     */
    private $requiredForQuest;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getNumber(): ?int
    {
        return $this->number;
    }

    public function setNumber(?int $number): self
    {
        $this->number = $number;

        return $this;
    }

    public function getIcon(): ?int
    {
        return $this->icon;
    }

    public function setIcon(?int $icon): self
    {
        $this->icon = $icon;

        return $this;
    }

    public function getStats(): ?string
    {
        return $this->stats;
    }

    public function setStats(?string $stats): self
    {
        $this->stats = $stats;

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

    public function getLocationKey(): ?int
    {
        return $this->locationKey;
    }

    public function setLocationKey(?int $locationKey): self
    {
        $this->locationKey = $locationKey;

        return $this;
    }

    public function getLocation(): ?int
    {
        return $this->location;
    }

    public function setLocation(?int $location): self
    {
        $this->location = $location;

        return $this;
    }

    public function getTargetsEnemy(): ?bool
    {
        return $this->targetsEnemy;
    }

    public function setTargetsEnemy(?bool $targetsEnemy): self
    {
        $this->targetsEnemy = $targetsEnemy;

        return $this;
    }

    public function getTargetsSelfOrAlly(): ?bool
    {
        return $this->targetsSelfOrAlly;
    }

    public function setTargetsSelfOrAlly(?bool $targetsSelfOrAlly): self
    {
        $this->targetsSelfOrAlly = $targetsSelfOrAlly;

        return $this;
    }

    public function getCauseSlow(): ?bool
    {
        return $this->causeSlow;
    }

    public function setCauseSlow(?bool $causeSlow): self
    {
        $this->causeSlow = $causeSlow;

        return $this;
    }

    public function getCausePetrify(): ?bool
    {
        return $this->causePetrify;
    }

    public function setCausePetrify(?bool $causePetrify): self
    {
        $this->causePetrify = $causePetrify;

        return $this;
    }

    public function getCauseParalysis(): ?bool
    {
        return $this->causeParalysis;
    }

    public function setCauseParalysis(?bool $causeParalysis): self
    {
        $this->causeParalysis = $causeParalysis;

        return $this;
    }

    public function getCauseInterrupt(): ?bool
    {
        return $this->causeInterrupt;
    }

    public function setCauseInterrupt(?bool $causeInterrupt): self
    {
        $this->causeInterrupt = $causeInterrupt;

        return $this;
    }

    public function getCauseBlind(): ?bool
    {
        return $this->causeBlind;
    }

    public function setCauseBlind(?bool $causeBlind): self
    {
        $this->causeBlind = $causeBlind;

        return $this;
    }

    public function getCauseStun(): ?bool
    {
        return $this->causeStun;
    }

    public function setCauseStun(?bool $causeStun): self
    {
        $this->causeStun = $causeStun;

        return $this;
    }

    public function getCauseSleep(): ?bool
    {
        return $this->causeSleep;
    }

    public function setCauseSleep(?bool $causeSleep): self
    {
        $this->causeSleep = $causeSleep;

        return $this;
    }

    public function getCauseBind(): ?bool
    {
        return $this->causeBind;
    }

    public function setCauseBind(?bool $causeBind): self
    {
        $this->causeBind = $causeBind;

        return $this;
    }

    public function getCauseHeavy(): ?bool
    {
        return $this->causeHeavy;
    }

    public function setCauseHeavy(?bool $causeHeavy): self
    {
        $this->causeHeavy = $causeHeavy;

        return $this;
    }

    public function getCauseDeath(): ?bool
    {
        return $this->causeDeath;
    }

    public function setCauseDeath(?bool $causeDeath): self
    {
        $this->causeDeath = $causeDeath;

        return $this;
    }

    public function getPreviousQuest(): ?Quest
    {
        return $this->previousQuest;
    }

    public function setPreviousQuest(?Quest $previousQuest): self
    {
        $this->previousQuest = $previousQuest;

        return $this;
    }

    public function getRequiredForQuest(): ?Quest
    {
        return $this->requiredForQuest;
    }

    public function setRequiredForQuest(?Quest $requiredForQuest): self
    {
        $this->requiredForQuest = $requiredForQuest;

        return $this;
    }
}
