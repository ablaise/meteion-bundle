<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WeatherGroup.
 *
 * @ORM\Table(name="weather_group", indexes={@ORM\Index(name="idx_44870ec7416fa540", columns={"weather_rate"})})
 * @ORM\Entity
 */
class WeatherGroup
{
    /**
     * @var string
     *
     * @ORM\Column(name="pk", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="weather_group_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1", type="integer", nullable=true)
     */
    private $column1;

    /**
     * @var WeatherRate
     *
     * @ORM\ManyToOne(targetEntity="WeatherRate")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="weather_rate", referencedColumnName="pk")
     * })
     */
    private $weatherRate;

    public function getPk(): ?string
    {
        return $this->pk;
    }

    public function getColumn1(): ?int
    {
        return $this->column1;
    }

    public function setColumn1(?int $column1): self
    {
        $this->column1 = $column1;

        return $this;
    }

    public function getWeatherRate(): ?WeatherRate
    {
        return $this->weatherRate;
    }

    public function setWeatherRate(?WeatherRate $weatherRate): self
    {
        $this->weatherRate = $weatherRate;

        return $this;
    }
}
