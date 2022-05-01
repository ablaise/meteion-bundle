<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ChocoboTaxi.
 *
 * @ORM\Table(name="chocobo_taxi", indexes={@ORM\Index(name="idx_a3cf5be65e9e89cb", columns={"location"})})
 * @ORM\Entity
 */
class ChocoboTaxi
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="chocobo_taxi_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fare", type="integer", nullable=true)
     */
    private $fare;

    /**
     * @var int|null
     *
     * @ORM\Column(name="time_required", type="bigint", nullable=true)
     */
    private $timeRequired;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_4", type="bigint", nullable=true)
     */
    private $column4;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_5", type="boolean", nullable=true)
     */
    private $column5;

    /**
     * @var ChocoboTaxiStand
     *
     * @ORM\ManyToOne(targetEntity="ChocoboTaxiStand")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="location", referencedColumnName="pk")
     * })
     */
    private $location;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getFare(): ?int
    {
        return $this->fare;
    }

    public function setFare(?int $fare): self
    {
        $this->fare = $fare;

        return $this;
    }

    public function getTimeRequired(): ?string
    {
        return $this->timeRequired;
    }

    public function setTimeRequired(?string $timeRequired): self
    {
        $this->timeRequired = $timeRequired;

        return $this;
    }

    public function getColumn4(): ?string
    {
        return $this->column4;
    }

    public function setColumn4(?string $column4): self
    {
        $this->column4 = $column4;

        return $this;
    }

    public function getColumn5(): ?bool
    {
        return $this->column5;
    }

    public function setColumn5(?bool $column5): self
    {
        $this->column5 = $column5;

        return $this;
    }

    public function getLocation(): ?ChocoboTaxiStand
    {
        return $this->location;
    }

    public function setLocation(?ChocoboTaxiStand $location): self
    {
        $this->location = $location;

        return $this;
    }
}
