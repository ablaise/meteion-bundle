<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SubmarinePart.
 *
 * @ORM\Table(name="submarine_part")
 * @ORM\Entity
 */
class SubmarinePart
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="submarine_part_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="slot", type="integer", nullable=true)
     */
    private $slot;

    /**
     * @var int|null
     *
     * @ORM\Column(name="rank", type="integer", nullable=true)
     */
    private $rank;

    /**
     * @var int|null
     *
     * @ORM\Column(name="components", type="integer", nullable=true)
     */
    private $components;

    /**
     * @var int|null
     *
     * @ORM\Column(name="surveillance", type="integer", nullable=true)
     */
    private $surveillance;

    /**
     * @var int|null
     *
     * @ORM\Column(name="retrieval", type="integer", nullable=true)
     */
    private $retrieval;

    /**
     * @var int|null
     *
     * @ORM\Column(name="speed", type="integer", nullable=true)
     */
    private $speed;

    /**
     * @var int|null
     *
     * @ORM\Column(name="range", type="integer", nullable=true)
     */
    private $range;

    /**
     * @var int|null
     *
     * @ORM\Column(name="favor", type="integer", nullable=true)
     */
    private $favor;

    /**
     * @var int|null
     *
     * @ORM\Column(name="class", type="bigint", nullable=true)
     */
    private $class;

    /**
     * @var int|null
     *
     * @ORM\Column(name="repair_materials", type="integer", nullable=true)
     */
    private $repairMaterials;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getSlot(): ?int
    {
        return $this->slot;
    }

    public function setSlot(?int $slot): self
    {
        $this->slot = $slot;

        return $this;
    }

    public function getRank(): ?int
    {
        return $this->rank;
    }

    public function setRank(?int $rank): self
    {
        $this->rank = $rank;

        return $this;
    }

    public function getComponents(): ?int
    {
        return $this->components;
    }

    public function setComponents(?int $components): self
    {
        $this->components = $components;

        return $this;
    }

    public function getSurveillance(): ?int
    {
        return $this->surveillance;
    }

    public function setSurveillance(?int $surveillance): self
    {
        $this->surveillance = $surveillance;

        return $this;
    }

    public function getRetrieval(): ?int
    {
        return $this->retrieval;
    }

    public function setRetrieval(?int $retrieval): self
    {
        $this->retrieval = $retrieval;

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

    public function getRange(): ?int
    {
        return $this->range;
    }

    public function setRange(?int $range): self
    {
        $this->range = $range;

        return $this;
    }

    public function getFavor(): ?int
    {
        return $this->favor;
    }

    public function setFavor(?int $favor): self
    {
        $this->favor = $favor;

        return $this;
    }

    public function getClass(): ?string
    {
        return $this->class;
    }

    public function setClass(?string $class): self
    {
        $this->class = $class;

        return $this;
    }

    public function getRepairMaterials(): ?int
    {
        return $this->repairMaterials;
    }

    public function setRepairMaterials(?int $repairMaterials): self
    {
        $this->repairMaterials = $repairMaterials;

        return $this;
    }
}
