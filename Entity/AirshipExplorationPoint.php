<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AirshipExplorationPoint.
 *
 * @ORM\Table(name="airship_exploration_point")
 * @ORM\Entity
 */
class AirshipExplorationPoint
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="airship_exploration_point_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name_short", type="string", length=255, nullable=true)
     */
    private $nameShort;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="passengers", type="boolean", nullable=true)
     */
    private $passengers;

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
     * @ORM\Column(name="rank_req", type="integer", nullable=true)
     */
    private $rankReq;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ceruleum_tank_req", type="bigint", nullable=true)
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
     * @ORM\Column(name="survey_distance", type="bigint", nullable=true)
     */
    private $surveyDistance;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_10", type="integer", nullable=true)
     */
    private $column10;

    /**
     * @var int|null
     *
     * @ORM\Column(name="surveillance_req", type="integer", nullable=true)
     */
    private $surveillanceReq;

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
     * @ORM\Column(name="exp_reward", type="bigint", nullable=true)
     */
    private $expReward;

    public function getPk(): ?int
    {
        return $this->pk;
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

    public function getNameShort(): ?string
    {
        return $this->nameShort;
    }

    public function setNameShort(?string $nameShort): self
    {
        $this->nameShort = $nameShort;

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

    public function getRankReq(): ?int
    {
        return $this->rankReq;
    }

    public function setRankReq(?int $rankReq): self
    {
        $this->rankReq = $rankReq;

        return $this;
    }

    public function getCeruleumTankReq(): ?string
    {
        return $this->ceruleumTankReq;
    }

    public function setCeruleumTankReq(?string $ceruleumTankReq): self
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

    public function getSurveyDistance(): ?string
    {
        return $this->surveyDistance;
    }

    public function setSurveyDistance(?string $surveyDistance): self
    {
        $this->surveyDistance = $surveyDistance;

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

    public function getSurveillanceReq(): ?int
    {
        return $this->surveillanceReq;
    }

    public function setSurveillanceReq(?int $surveillanceReq): self
    {
        $this->surveillanceReq = $surveillanceReq;

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

    public function getExpReward(): ?string
    {
        return $this->expReward;
    }

    public function setExpReward(?string $expReward): self
    {
        $this->expReward = $expReward;

        return $this;
    }
}
