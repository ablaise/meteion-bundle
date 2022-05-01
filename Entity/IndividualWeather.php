<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IndividualWeather.
 *
 * @ORM\Table(name="individual_weather", indexes={@ORM\Index(name="idx_750c52e3c980dac9", columns={"weather_1"}), @ORM\Index(name="idx_750c52e3ecc6de67", columns={"quest_0"}), @ORM\Index(name="idx_750c52e39cac2ae8", columns={"quest_5"}), @ORM\Index(name="idx_750c52e350898b73", columns={"weather_2"}), @ORM\Index(name="idx_750c52e3ceed1ed0", columns={"weather_5"}), @ORM\Index(name="idx_750c52e32c8bf4b", columns={"quest_2"}), @ORM\Index(name="idx_750c52e3be87ea5f", columns={"weather_0"}), @ORM\Index(name="idx_750c52e3b9ea2e46", columns={"weather_4"}), @ORM\Index(name="idx_750c52e375cf8fdd", columns={"quest_3"}), @ORM\Index(name="idx_750c52e3278ebbe5", columns={"weather_3"}), @ORM\Index(name="idx_750c52e3ebab1a7e", columns={"quest_4"}), @ORM\Index(name="idx_750c52e39bc1eef1", columns={"quest_1"})})
 * @ORM\Entity
 */
class IndividualWeather
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="individual_weather_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_7", type="integer", nullable=true)
     */
    private $column7;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_8", type="integer", nullable=true)
     */
    private $column8;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_9", type="integer", nullable=true)
     */
    private $column9;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_10", type="integer", nullable=true)
     */
    private $column10;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_11", type="integer", nullable=true)
     */
    private $column11;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_12", type="integer", nullable=true)
     */
    private $column12;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_13", type="integer", nullable=true)
     */
    private $column13;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_14", type="integer", nullable=true)
     */
    private $column14;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_15", type="bigint", nullable=true)
     */
    private $column15;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_22", type="bigint", nullable=true)
     */
    private $column22;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_23", type="bigint", nullable=true)
     */
    private $column23;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_24", type="bigint", nullable=true)
     */
    private $column24;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_25", type="bigint", nullable=true)
     */
    private $column25;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_26", type="bigint", nullable=true)
     */
    private $column26;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_27", type="bigint", nullable=true)
     */
    private $column27;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_28", type="bigint", nullable=true)
     */
    private $column28;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_5", referencedColumnName="pk")
     * })
     */
    private $quest5;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_4", referencedColumnName="pk")
     * })
     */
    private $quest4;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_3", referencedColumnName="pk")
     * })
     */
    private $quest3;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_2", referencedColumnName="pk")
     * })
     */
    private $quest2;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_1", referencedColumnName="pk")
     * })
     */
    private $quest1;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_0", referencedColumnName="pk")
     * })
     */
    private $quest0;

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

    public function getColumn7(): ?int
    {
        return $this->column7;
    }

    public function setColumn7(?int $column7): self
    {
        $this->column7 = $column7;

        return $this;
    }

    public function getColumn8(): ?int
    {
        return $this->column8;
    }

    public function setColumn8(?int $column8): self
    {
        $this->column8 = $column8;

        return $this;
    }

    public function getColumn9(): ?int
    {
        return $this->column9;
    }

    public function setColumn9(?int $column9): self
    {
        $this->column9 = $column9;

        return $this;
    }

    public function getColumn10(): ?int
    {
        return $this->column10;
    }

    public function setColumn10(?int $column10): self
    {
        $this->column10 = $column10;

        return $this;
    }

    public function getColumn11(): ?int
    {
        return $this->column11;
    }

    public function setColumn11(?int $column11): self
    {
        $this->column11 = $column11;

        return $this;
    }

    public function getColumn12(): ?int
    {
        return $this->column12;
    }

    public function setColumn12(?int $column12): self
    {
        $this->column12 = $column12;

        return $this;
    }

    public function getColumn13(): ?int
    {
        return $this->column13;
    }

    public function setColumn13(?int $column13): self
    {
        $this->column13 = $column13;

        return $this;
    }

    public function getColumn14(): ?int
    {
        return $this->column14;
    }

    public function setColumn14(?int $column14): self
    {
        $this->column14 = $column14;

        return $this;
    }

    public function getColumn15(): ?string
    {
        return $this->column15;
    }

    public function setColumn15(?string $column15): self
    {
        $this->column15 = $column15;

        return $this;
    }

    public function getColumn22(): ?string
    {
        return $this->column22;
    }

    public function setColumn22(?string $column22): self
    {
        $this->column22 = $column22;

        return $this;
    }

    public function getColumn23(): ?string
    {
        return $this->column23;
    }

    public function setColumn23(?string $column23): self
    {
        $this->column23 = $column23;

        return $this;
    }

    public function getColumn24(): ?string
    {
        return $this->column24;
    }

    public function setColumn24(?string $column24): self
    {
        $this->column24 = $column24;

        return $this;
    }

    public function getColumn25(): ?string
    {
        return $this->column25;
    }

    public function setColumn25(?string $column25): self
    {
        $this->column25 = $column25;

        return $this;
    }

    public function getColumn26(): ?string
    {
        return $this->column26;
    }

    public function setColumn26(?string $column26): self
    {
        $this->column26 = $column26;

        return $this;
    }

    public function getColumn27(): ?string
    {
        return $this->column27;
    }

    public function setColumn27(?string $column27): self
    {
        $this->column27 = $column27;

        return $this;
    }

    public function getColumn28(): ?string
    {
        return $this->column28;
    }

    public function setColumn28(?string $column28): self
    {
        $this->column28 = $column28;

        return $this;
    }

    public function getQuest5(): ?Quest
    {
        return $this->quest5;
    }

    public function setQuest5(?Quest $quest5): self
    {
        $this->quest5 = $quest5;

        return $this;
    }

    public function getQuest4(): ?Quest
    {
        return $this->quest4;
    }

    public function setQuest4(?Quest $quest4): self
    {
        $this->quest4 = $quest4;

        return $this;
    }

    public function getQuest3(): ?Quest
    {
        return $this->quest3;
    }

    public function setQuest3(?Quest $quest3): self
    {
        $this->quest3 = $quest3;

        return $this;
    }

    public function getQuest2(): ?Quest
    {
        return $this->quest2;
    }

    public function setQuest2(?Quest $quest2): self
    {
        $this->quest2 = $quest2;

        return $this;
    }

    public function getQuest1(): ?Quest
    {
        return $this->quest1;
    }

    public function setQuest1(?Quest $quest1): self
    {
        $this->quest1 = $quest1;

        return $this;
    }

    public function getQuest0(): ?Quest
    {
        return $this->quest0;
    }

    public function setQuest0(?Quest $quest0): self
    {
        $this->quest0 = $quest0;

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
