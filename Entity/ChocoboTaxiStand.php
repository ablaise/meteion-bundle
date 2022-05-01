<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ChocoboTaxiStand.
 *
 * @ORM\Table(name="chocobo_taxi_stand", indexes={@ORM\Index(name="idx_944fef06553ad598", columns={"target_locations_0"}), @ORM\Index(name="idx_944fef0652571181", columns={"target_locations_4"}), @ORM\Index(name="idx_944fef06cc338422", columns={"target_locations_3"}), @ORM\Index(name="idx_944fef06223de50e", columns={"target_locations_1"}), @ORM\Index(name="idx_944fef06cb5e403b", columns={"target_locations_7"}), @ORM\Index(name="idx_944fef06bb34b4b4", columns={"target_locations_2"}), @ORM\Index(name="idx_944fef0625502117", columns={"target_locations_5"}), @ORM\Index(name="idx_944fef06bc5970ad", columns={"target_locations_6"})})
 * @ORM\Entity
 */
class ChocoboTaxiStand
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="chocobo_taxi_stand_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var string|null
     *
     * @ORM\Column(name="place_name", type="string", length=255, nullable=true)
     */
    private $placeName;

    /**
     * @var ChocoboTaxi
     *
     * @ORM\ManyToOne(targetEntity="ChocoboTaxi")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="target_locations_7", referencedColumnName="pk")
     * })
     */
    private $targetLocations7;

    /**
     * @var ChocoboTaxi
     *
     * @ORM\ManyToOne(targetEntity="ChocoboTaxi")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="target_locations_6", referencedColumnName="pk")
     * })
     */
    private $targetLocations6;

    /**
     * @var ChocoboTaxi
     *
     * @ORM\ManyToOne(targetEntity="ChocoboTaxi")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="target_locations_5", referencedColumnName="pk")
     * })
     */
    private $targetLocations5;

    /**
     * @var ChocoboTaxi
     *
     * @ORM\ManyToOne(targetEntity="ChocoboTaxi")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="target_locations_4", referencedColumnName="pk")
     * })
     */
    private $targetLocations4;

    /**
     * @var ChocoboTaxi
     *
     * @ORM\ManyToOne(targetEntity="ChocoboTaxi")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="target_locations_3", referencedColumnName="pk")
     * })
     */
    private $targetLocations3;

    /**
     * @var ChocoboTaxi
     *
     * @ORM\ManyToOne(targetEntity="ChocoboTaxi")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="target_locations_2", referencedColumnName="pk")
     * })
     */
    private $targetLocations2;

    /**
     * @var ChocoboTaxi
     *
     * @ORM\ManyToOne(targetEntity="ChocoboTaxi")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="target_locations_1", referencedColumnName="pk")
     * })
     */
    private $targetLocations1;

    /**
     * @var ChocoboTaxi
     *
     * @ORM\ManyToOne(targetEntity="ChocoboTaxi")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="target_locations_0", referencedColumnName="pk")
     * })
     */
    private $targetLocations0;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getPlaceName(): ?string
    {
        return $this->placeName;
    }

    public function setPlaceName(?string $placeName): self
    {
        $this->placeName = $placeName;

        return $this;
    }

    public function getTargetLocations7(): ?ChocoboTaxi
    {
        return $this->targetLocations7;
    }

    public function setTargetLocations7(?ChocoboTaxi $targetLocations7): self
    {
        $this->targetLocations7 = $targetLocations7;

        return $this;
    }

    public function getTargetLocations6(): ?ChocoboTaxi
    {
        return $this->targetLocations6;
    }

    public function setTargetLocations6(?ChocoboTaxi $targetLocations6): self
    {
        $this->targetLocations6 = $targetLocations6;

        return $this;
    }

    public function getTargetLocations5(): ?ChocoboTaxi
    {
        return $this->targetLocations5;
    }

    public function setTargetLocations5(?ChocoboTaxi $targetLocations5): self
    {
        $this->targetLocations5 = $targetLocations5;

        return $this;
    }

    public function getTargetLocations4(): ?ChocoboTaxi
    {
        return $this->targetLocations4;
    }

    public function setTargetLocations4(?ChocoboTaxi $targetLocations4): self
    {
        $this->targetLocations4 = $targetLocations4;

        return $this;
    }

    public function getTargetLocations3(): ?ChocoboTaxi
    {
        return $this->targetLocations3;
    }

    public function setTargetLocations3(?ChocoboTaxi $targetLocations3): self
    {
        $this->targetLocations3 = $targetLocations3;

        return $this;
    }

    public function getTargetLocations2(): ?ChocoboTaxi
    {
        return $this->targetLocations2;
    }

    public function setTargetLocations2(?ChocoboTaxi $targetLocations2): self
    {
        $this->targetLocations2 = $targetLocations2;

        return $this;
    }

    public function getTargetLocations1(): ?ChocoboTaxi
    {
        return $this->targetLocations1;
    }

    public function setTargetLocations1(?ChocoboTaxi $targetLocations1): self
    {
        $this->targetLocations1 = $targetLocations1;

        return $this;
    }

    public function getTargetLocations0(): ?ChocoboTaxi
    {
        return $this->targetLocations0;
    }

    public function setTargetLocations0(?ChocoboTaxi $targetLocations0): self
    {
        $this->targetLocations0 = $targetLocations0;

        return $this;
    }
}
