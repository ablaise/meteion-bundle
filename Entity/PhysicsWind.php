<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PhysicsWind.
 *
 * @ORM\Table(name="physics_wind")
 * @ORM\Entity
 */
class PhysicsWind
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="physics_wind_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var string|null
     *
     * @ORM\Column(name="threshold", type="string", length=255, nullable=true)
     */
    private $threshold;

    /**
     * @var string|null
     *
     * @ORM\Column(name="amplitude", type="string", length=255, nullable=true)
     */
    private $amplitude;

    /**
     * @var string|null
     *
     * @ORM\Column(name="amplitude_frequency", type="string", length=255, nullable=true)
     */
    private $amplitudeFrequency;

    /**
     * @var string|null
     *
     * @ORM\Column(name="power_min", type="string", length=255, nullable=true)
     */
    private $powerMin;

    /**
     * @var string|null
     *
     * @ORM\Column(name="power_max", type="string", length=255, nullable=true)
     */
    private $powerMax;

    /**
     * @var string|null
     *
     * @ORM\Column(name="power_frequency", type="string", length=255, nullable=true)
     */
    private $powerFrequency;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getThreshold(): ?string
    {
        return $this->threshold;
    }

    public function setThreshold(?string $threshold): self
    {
        $this->threshold = $threshold;

        return $this;
    }

    public function getAmplitude(): ?string
    {
        return $this->amplitude;
    }

    public function setAmplitude(?string $amplitude): self
    {
        $this->amplitude = $amplitude;

        return $this;
    }

    public function getAmplitudeFrequency(): ?string
    {
        return $this->amplitudeFrequency;
    }

    public function setAmplitudeFrequency(?string $amplitudeFrequency): self
    {
        $this->amplitudeFrequency = $amplitudeFrequency;

        return $this;
    }

    public function getPowerMin(): ?string
    {
        return $this->powerMin;
    }

    public function setPowerMin(?string $powerMin): self
    {
        $this->powerMin = $powerMin;

        return $this;
    }

    public function getPowerMax(): ?string
    {
        return $this->powerMax;
    }

    public function setPowerMax(?string $powerMax): self
    {
        $this->powerMax = $powerMax;

        return $this;
    }

    public function getPowerFrequency(): ?string
    {
        return $this->powerFrequency;
    }

    public function setPowerFrequency(?string $powerFrequency): self
    {
        $this->powerFrequency = $powerFrequency;

        return $this;
    }
}
