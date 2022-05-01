<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ChocoboRaceAbility.
 *
 * @ORM\Table(name="chocobo_race_ability", indexes={@ORM\Index(name="idx_2494fb26c5ef9dba", columns={"chocobo_race_ability_type"})})
 * @ORM\Entity
 */
class ChocoboRaceAbility
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="chocobo_race_ability_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var int|null
     *
     * @ORM\Column(name="icon", type="integer", nullable=true)
     */
    private $icon;

    /**
     * @var int|null
     *
     * @ORM\Column(name="value", type="integer", nullable=true)
     */
    private $value;

    /**
     * @var ChocoboRaceAbilityType
     *
     * @ORM\ManyToOne(targetEntity="ChocoboRaceAbilityType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="chocobo_race_ability_type", referencedColumnName="pk")
     * })
     */
    private $chocoboRaceAbilityType;

    public function getPk(): ?int
    {
        return $this->pk;
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

    public function getIcon(): ?int
    {
        return $this->icon;
    }

    public function setIcon(?int $icon): self
    {
        $this->icon = $icon;

        return $this;
    }

    public function getValue(): ?int
    {
        return $this->value;
    }

    public function setValue(?int $value): self
    {
        $this->value = $value;

        return $this;
    }

    public function getChocoboRaceAbilityType(): ?ChocoboRaceAbilityType
    {
        return $this->chocoboRaceAbilityType;
    }

    public function setChocoboRaceAbilityType(?ChocoboRaceAbilityType $chocoboRaceAbilityType): self
    {
        $this->chocoboRaceAbilityType = $chocoboRaceAbilityType;

        return $this;
    }
}
