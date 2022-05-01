<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcArmyTraining.
 *
 * @ORM\Table(name="gc_army_training")
 * @ORM\Entity
 */
class GcArmyTraining
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="gc_army_training_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="physical_bonus", type="integer", nullable=true)
     */
    private $physicalBonus;

    /**
     * @var int|null
     *
     * @ORM\Column(name="mental_bonus", type="integer", nullable=true)
     */
    private $mentalBonus;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tactical_bonus", type="integer", nullable=true)
     */
    private $tacticalBonus;

    /**
     * @var int|null
     *
     * @ORM\Column(name="experience", type="bigint", nullable=true)
     */
    private $experience;

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

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getPhysicalBonus(): ?int
    {
        return $this->physicalBonus;
    }

    public function setPhysicalBonus(?int $physicalBonus): self
    {
        $this->physicalBonus = $physicalBonus;

        return $this;
    }

    public function getMentalBonus(): ?int
    {
        return $this->mentalBonus;
    }

    public function setMentalBonus(?int $mentalBonus): self
    {
        $this->mentalBonus = $mentalBonus;

        return $this;
    }

    public function getTacticalBonus(): ?int
    {
        return $this->tacticalBonus;
    }

    public function setTacticalBonus(?int $tacticalBonus): self
    {
        $this->tacticalBonus = $tacticalBonus;

        return $this;
    }

    public function getExperience(): ?string
    {
        return $this->experience;
    }

    public function setExperience(?string $experience): self
    {
        $this->experience = $experience;

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
}
