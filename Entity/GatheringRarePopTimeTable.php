<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GatheringRarePopTimeTable.
 *
 * @ORM\Table(name="gathering_rare_pop_time_table")
 * @ORM\Entity
 */
class GatheringRarePopTimeTable
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="gathering_rare_pop_time_table_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="start_time_0", type="bigint", nullable=true)
     */
    private $startTime0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="duration_m__0", type="bigint", nullable=true)
     */
    private $durationM0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="start_time_1", type="bigint", nullable=true)
     */
    private $startTime1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="duration_m__1", type="bigint", nullable=true)
     */
    private $durationM1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="start_time_2", type="bigint", nullable=true)
     */
    private $startTime2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="duration_m__2", type="bigint", nullable=true)
     */
    private $durationM2;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getStartTime0(): ?string
    {
        return $this->startTime0;
    }

    public function setStartTime0(?string $startTime0): self
    {
        $this->startTime0 = $startTime0;

        return $this;
    }

    public function getDurationM0(): ?string
    {
        return $this->durationM0;
    }

    public function setDurationM0(?string $durationM0): self
    {
        $this->durationM0 = $durationM0;

        return $this;
    }

    public function getStartTime1(): ?string
    {
        return $this->startTime1;
    }

    public function setStartTime1(?string $startTime1): self
    {
        $this->startTime1 = $startTime1;

        return $this;
    }

    public function getDurationM1(): ?string
    {
        return $this->durationM1;
    }

    public function setDurationM1(?string $durationM1): self
    {
        $this->durationM1 = $durationM1;

        return $this;
    }

    public function getStartTime2(): ?string
    {
        return $this->startTime2;
    }

    public function setStartTime2(?string $startTime2): self
    {
        $this->startTime2 = $startTime2;

        return $this;
    }

    public function getDurationM2(): ?string
    {
        return $this->durationM2;
    }

    public function setDurationM2(?string $durationM2): self
    {
        $this->durationM2 = $durationM2;

        return $this;
    }
}
