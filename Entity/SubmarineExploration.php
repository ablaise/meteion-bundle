<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SubmarineExploration.
 *
 * @ORM\Table(name="submarine_exploration", indexes={@ORM\Index(name="idx_b8f3b88193adaabb", columns={"map"})})
 * @ORM\Entity
 */
class SubmarineExploration
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="submarine_exploration_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var string|null
     *
     * @ORM\Column(name="destination", type="string", length=255, nullable=true)
     */
    private $destination;

    /**
     * @var string|null
     *
     * @ORM\Column(name="location", type="string", length=255, nullable=true)
     */
    private $location;

    /**
     * @var int|null
     *
     * @ORM\Column(name="x", type="integer", nullable=true)
     */
    private $x;

    /**
     * @var int|null
     *
     * @ORM\Column(name="y", type="integer", nullable=true)
     */
    private $y;

    /**
     * @var int|null
     *
     * @ORM\Column(name="z", type="integer", nullable=true)
     */
    private $z;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="passengers", type="boolean", nullable=true)
     */
    private $passengers;

    /**
     * @var int|null
     *
     * @ORM\Column(name="stars", type="integer", nullable=true)
     */
    private $stars;

    /**
     * @var int|null
     *
     * @ORM\Column(name="rank_req", type="integer", nullable=true)
     */
    private $rankReq;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ceruleum_tank_req", type="integer", nullable=true)
     */
    private $ceruleumTankReq;

    /**
     * @var int|null
     *
     * @ORM\Column(name="survey_duration_min", type="bigint", nullable=true)
     */
    private $surveyDurationMin;

    /**
     * @var int|null
     *
     * @ORM\Column(name="survey_distance", type="integer", nullable=true)
     */
    private $surveyDistance;

    /**
     * @var int|null
     *
     * @ORM\Column(name="exp_reward", type="bigint", nullable=true)
     */
    private $expReward;

    /**
     * @var SubmarineMap
     *
     * @ORM\ManyToOne(targetEntity="SubmarineMap")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="map", referencedColumnName="pk")
     * })
     */
    private $map;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getDestination(): ?string
    {
        return $this->destination;
    }

    public function setDestination(?string $destination): self
    {
        $this->destination = $destination;

        return $this;
    }

    public function getLocation(): ?string
    {
        return $this->location;
    }

    public function setLocation(?string $location): self
    {
        $this->location = $location;

        return $this;
    }

    public function getX(): ?int
    {
        return $this->x;
    }

    public function setX(?int $x): self
    {
        $this->x = $x;

        return $this;
    }

    public function getY(): ?int
    {
        return $this->y;
    }

    public function setY(?int $y): self
    {
        $this->y = $y;

        return $this;
    }

    public function getZ(): ?int
    {
        return $this->z;
    }

    public function setZ(?int $z): self
    {
        $this->z = $z;

        return $this;
    }

    public function getPassengers(): ?bool
    {
        return $this->passengers;
    }

    public function setPassengers(?bool $passengers): self
    {
        $this->passengers = $passengers;

        return $this;
    }

    public function getStars(): ?int
    {
        return $this->stars;
    }

    public function setStars(?int $stars): self
    {
        $this->stars = $stars;

        return $this;
    }

    public function getRankReq(): ?int
    {
        return $this->rankReq;
    }

    public function setRankReq(?int $rankReq): self
    {
        $this->rankReq = $rankReq;

        return $this;
    }

    public function getCeruleumTankReq(): ?int
    {
        return $this->ceruleumTankReq;
    }

    public function setCeruleumTankReq(?int $ceruleumTankReq): self
    {
        $this->ceruleumTankReq = $ceruleumTankReq;

        return $this;
    }

    public function getSurveyDurationMin(): ?string
    {
        return $this->surveyDurationMin;
    }

    public function setSurveyDurationMin(?string $surveyDurationMin): self
    {
        $this->surveyDurationMin = $surveyDurationMin;

        return $this;
    }

    public function getSurveyDistance(): ?int
    {
        return $this->surveyDistance;
    }

    public function setSurveyDistance(?int $surveyDistance): self
    {
        $this->surveyDistance = $surveyDistance;

        return $this;
    }

    public function getExpReward(): ?string
    {
        return $this->expReward;
    }

    public function setExpReward(?string $expReward): self
    {
        $this->expReward = $expReward;

        return $this;
    }

    public function getMap(): ?SubmarineMap
    {
        return $this->map;
    }

    public function setMap(?SubmarineMap $map): self
    {
        $this->map = $map;

        return $this;
    }
}
