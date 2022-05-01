<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WeatherRate.
 *
 * @ORM\Table(name="weather_rate", indexes={@ORM\Index(name="idx_416fa540c980dac9", columns={"weather_1"}), @ORM\Index(name="idx_416fa54050898b73", columns={"weather_2"}), @ORM\Index(name="idx_416fa540b9ea2e46", columns={"weather_4"}), @ORM\Index(name="idx_416fa540ceed1ed0", columns={"weather_5"}), @ORM\Index(name="idx_416fa540278ebbe5", columns={"weather_3"}), @ORM\Index(name="idx_416fa54020e37ffc", columns={"weather_7"}), @ORM\Index(name="idx_416fa540be87ea5f", columns={"weather_0"}), @ORM\Index(name="idx_416fa54057e44f6a", columns={"weather_6"})})
 * @ORM\Entity
 */
class WeatherRate
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="weather_rate_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="rate_0", type="integer", nullable=true)
     */
    private $rate0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="rate_1", type="integer", nullable=true)
     */
    private $rate1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="rate_2", type="integer", nullable=true)
     */
    private $rate2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="rate_3", type="integer", nullable=true)
     */
    private $rate3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="rate_4", type="integer", nullable=true)
     */
    private $rate4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="rate_5", type="integer", nullable=true)
     */
    private $rate5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="rate_6", type="integer", nullable=true)
     */
    private $rate6;

    /**
     * @var int|null
     *
     * @ORM\Column(name="rate_7", type="integer", nullable=true)
     */
    private $rate7;

    /**
     * @var Weather
     *
     * @ORM\ManyToOne(targetEntity="Weather")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="weather_7", referencedColumnName="pk")
     * })
     */
    private $weather7;

    /**
     * @var Weather
     *
     * @ORM\ManyToOne(targetEntity="Weather")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="weather_6", referencedColumnName="pk")
     * })
     */
    private $weather6;

    /**
     * @var Weather
     *
     * @ORM\ManyToOne(targetEntity="Weather")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="weather_5", referencedColumnName="pk")
     * })
     */
    private $weather5;

    /**
     * @var Weather
     *
     * @ORM\ManyToOne(targetEntity="Weather")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="weather_4", referencedColumnName="pk")
     * })
     */
    private $weather4;

    /**
     * @var Weather
     *
     * @ORM\ManyToOne(targetEntity="Weather")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="weather_3", referencedColumnName="pk")
     * })
     */
    private $weather3;

    /**
     * @var Weather
     *
     * @ORM\ManyToOne(targetEntity="Weather")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="weather_2", referencedColumnName="pk")
     * })
     */
    private $weather2;

    /**
     * @var Weather
     *
     * @ORM\ManyToOne(targetEntity="Weather")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="weather_1", referencedColumnName="pk")
     * })
     */
    private $weather1;

    /**
     * @var Weather
     *
     * @ORM\ManyToOne(targetEntity="Weather")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="weather_0", referencedColumnName="pk")
     * })
     */
    private $weather0;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getRate0(): ?int
    {
        return $this->rate0;
    }

    public function setRate0(?int $rate0): self
    {
        $this->rate0 = $rate0;

        return $this;
    }

    public function getRate1(): ?int
    {
        return $this->rate1;
    }

    public function setRate1(?int $rate1): self
    {
        $this->rate1 = $rate1;

        return $this;
    }

    public function getRate2(): ?int
    {
        return $this->rate2;
    }

    public function setRate2(?int $rate2): self
    {
        $this->rate2 = $rate2;

        return $this;
    }

    public function getRate3(): ?int
    {
        return $this->rate3;
    }

    public function setRate3(?int $rate3): self
    {
        $this->rate3 = $rate3;

        return $this;
    }

    public function getRate4(): ?int
    {
        return $this->rate4;
    }

    public function setRate4(?int $rate4): self
    {
        $this->rate4 = $rate4;

        return $this;
    }

    public function getRate5(): ?int
    {
        return $this->rate5;
    }

    public function setRate5(?int $rate5): self
    {
        $this->rate5 = $rate5;

        return $this;
    }

    public function getRate6(): ?int
    {
        return $this->rate6;
    }

    public function setRate6(?int $rate6): self
    {
        $this->rate6 = $rate6;

        return $this;
    }

    public function getRate7(): ?int
    {
        return $this->rate7;
    }

    public function setRate7(?int $rate7): self
    {
        $this->rate7 = $rate7;

        return $this;
    }

    public function getWeather7(): ?Weather
    {
        return $this->weather7;
    }

    public function setWeather7(?Weather $weather7): self
    {
        $this->weather7 = $weather7;

        return $this;
    }

    public function getWeather6(): ?Weather
    {
        return $this->weather6;
    }

    public function setWeather6(?Weather $weather6): self
    {
        $this->weather6 = $weather6;

        return $this;
    }

    public function getWeather5(): ?Weather
    {
        return $this->weather5;
    }

    public function setWeather5(?Weather $weather5): self
    {
        $this->weather5 = $weather5;

        return $this;
    }

    public function getWeather4(): ?Weather
    {
        return $this->weather4;
    }

    public function setWeather4(?Weather $weather4): self
    {
        $this->weather4 = $weather4;

        return $this;
    }

    public function getWeather3(): ?Weather
    {
        return $this->weather3;
    }

    public function setWeather3(?Weather $weather3): self
    {
        $this->weather3 = $weather3;

        return $this;
    }

    public function getWeather2(): ?Weather
    {
        return $this->weather2;
    }

    public function setWeather2(?Weather $weather2): self
    {
        $this->weather2 = $weather2;

        return $this;
    }

    public function getWeather1(): ?Weather
    {
        return $this->weather1;
    }

    public function setWeather1(?Weather $weather1): self
    {
        $this->weather1 = $weather1;

        return $this;
    }

    public function getWeather0(): ?Weather
    {
        return $this->weather0;
    }

    public function setWeather0(?Weather $weather0): self
    {
        $this->weather0 = $weather0;

        return $this;
    }
}
