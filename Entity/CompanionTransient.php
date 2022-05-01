<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CompanionTransient.
 *
 * @ORM\Table(name="companion_transient", indexes={@ORM\Index(name="idx_de960c4feafb9175", columns={"minion_skill_type"})})
 * @ORM\Entity
 */
class CompanionTransient
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="companion_transient_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="string", length=391, nullable=true)
     */
    private $description;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description_enhanced", type="string", length=391, nullable=true)
     */
    private $descriptionEnhanced;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tooltip", type="string", length=391, nullable=true)
     */
    private $tooltip;

    /**
     * @var string|null
     *
     * @ORM\Column(name="special_action_name", type="string", length=391, nullable=true)
     */
    private $specialActionName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="special_action_description", type="string", length=391, nullable=true)
     */
    private $specialActionDescription;

    /**
     * @var int|null
     *
     * @ORM\Column(name="attack", type="integer", nullable=true)
     */
    private $attack;

    /**
     * @var int|null
     *
     * @ORM\Column(name="defense", type="integer", nullable=true)
     */
    private $defense;

    /**
     * @var int|null
     *
     * @ORM\Column(name="speed", type="integer", nullable=true)
     */
    private $speed;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="has_area_attack", type="boolean", nullable=true)
     */
    private $hasAreaAttack;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="strength_gate", type="boolean", nullable=true)
     */
    private $strengthGate;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="strength_eye", type="boolean", nullable=true)
     */
    private $strengthEye;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="strength_shield", type="boolean", nullable=true)
     */
    private $strengthShield;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="strength_arcana", type="boolean", nullable=true)
     */
    private $strengthArcana;

    /**
     * @var MinionSkillType
     *
     * @ORM\ManyToOne(targetEntity="MinionSkillType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="minion_skill_type", referencedColumnName="pk")
     * })
     */
    private $minionSkillType;

    public function getPk(): ?int
    {
        return $this->pk;
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

    public function getDescriptionEnhanced(): ?string
    {
        return $this->descriptionEnhanced;
    }

    public function setDescriptionEnhanced(?string $descriptionEnhanced): self
    {
        $this->descriptionEnhanced = $descriptionEnhanced;

        return $this;
    }

    public function getTooltip(): ?string
    {
        return $this->tooltip;
    }

    public function setTooltip(?string $tooltip): self
    {
        $this->tooltip = $tooltip;

        return $this;
    }

    public function getSpecialActionName(): ?string
    {
        return $this->specialActionName;
    }

    public function setSpecialActionName(?string $specialActionName): self
    {
        $this->specialActionName = $specialActionName;

        return $this;
    }

    public function getSpecialActionDescription(): ?string
    {
        return $this->specialActionDescription;
    }

    public function setSpecialActionDescription(?string $specialActionDescription): self
    {
        $this->specialActionDescription = $specialActionDescription;

        return $this;
    }

    public function getAttack(): ?int
    {
        return $this->attack;
    }

    public function setAttack(?int $attack): self
    {
        $this->attack = $attack;

        return $this;
    }

    public function getDefense(): ?int
    {
        return $this->defense;
    }

    public function setDefense(?int $defense): self
    {
        $this->defense = $defense;

        return $this;
    }

    public function getSpeed(): ?int
    {
        return $this->speed;
    }

    public function setSpeed(?int $speed): self
    {
        $this->speed = $speed;

        return $this;
    }

    public function getHasAreaAttack(): ?bool
    {
        return $this->hasAreaAttack;
    }

    public function setHasAreaAttack(?bool $hasAreaAttack): self
    {
        $this->hasAreaAttack = $hasAreaAttack;

        return $this;
    }

    public function getStrengthGate(): ?bool
    {
        return $this->strengthGate;
    }

    public function setStrengthGate(?bool $strengthGate): self
    {
        $this->strengthGate = $strengthGate;

        return $this;
    }

    public function getStrengthEye(): ?bool
    {
        return $this->strengthEye;
    }

    public function setStrengthEye(?bool $strengthEye): self
    {
        $this->strengthEye = $strengthEye;

        return $this;
    }

    public function getStrengthShield(): ?bool
    {
        return $this->strengthShield;
    }

    public function setStrengthShield(?bool $strengthShield): self
    {
        $this->strengthShield = $strengthShield;

        return $this;
    }

    public function getStrengthArcana(): ?bool
    {
        return $this->strengthArcana;
    }

    public function setStrengthArcana(?bool $strengthArcana): self
    {
        $this->strengthArcana = $strengthArcana;

        return $this;
    }

    public function getMinionSkillType(): ?MinionSkillType
    {
        return $this->minionSkillType;
    }

    public function setMinionSkillType(?MinionSkillType $minionSkillType): self
    {
        $this->minionSkillType = $minionSkillType;

        return $this;
    }
}
