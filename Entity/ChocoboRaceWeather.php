<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ChocoboRaceWeather.
 *
 * @ORM\Table(name="chocobo_race_weather", indexes={@ORM\Index(name="idx_5d8bc674724aa25a", columns={"weather_type_1"}), @ORM\Index(name="idx_5d8bc674eb43f3e0", columns={"weather_type_2"})})
 * @ORM\Entity
 */
class ChocoboRaceWeather
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="chocobo_race_weather_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var Weather
     *
     * @ORM\ManyToOne(targetEntity="Weather")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="weather_type_2", referencedColumnName="pk")
     * })
     */
    private $weatherType2;

    /**
     * @var Weather
     *
     * @ORM\ManyToOne(targetEntity="Weather")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="weather_type_1", referencedColumnName="pk")
     * })
     */
    private $weatherType1;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getWeatherType2(): ?Weather
    {
        return $this->weatherType2;
    }

    public function setWeatherType2(?Weather $weatherType2): self
    {
        $this->weatherType2 = $weatherType2;

        return $this;
    }

    public function getWeatherType1(): ?Weather
    {
        return $this->weatherType1;
    }

    public function setWeatherType1(?Weather $weatherType1): self
    {
        $this->weatherType1 = $weatherType1;

        return $this;
    }
}
