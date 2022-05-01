<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GatheringPointTransient.
 *
 * @ORM\Table(name="gathering_point_transient", indexes={@ORM\Index(name="idx_e96cff7bd09a8e63", columns={"gathering_rare_pop_time_table"})})
 * @ORM\Entity
 */
class GatheringPointTransient
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="gathering_point_transient_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ephemeral_start_time", type="bigint", nullable=true)
     */
    private $ephemeralStartTime;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ephemeral_end_time", type="bigint", nullable=true)
     */
    private $ephemeralEndTime;

    /**
     * @var GatheringRarePopTimeTable
     *
     * @ORM\ManyToOne(targetEntity="GatheringRarePopTimeTable")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_rare_pop_time_table", referencedColumnName="pk")
     * })
     */
    private $gatheringRarePopTimeTable;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getEphemeralStartTime(): ?string
    {
        return $this->ephemeralStartTime;
    }

    public function setEphemeralStartTime(?string $ephemeralStartTime): self
    {
        $this->ephemeralStartTime = $ephemeralStartTime;

        return $this;
    }

    public function getEphemeralEndTime(): ?string
    {
        return $this->ephemeralEndTime;
    }

    public function setEphemeralEndTime(?string $ephemeralEndTime): self
    {
        $this->ephemeralEndTime = $ephemeralEndTime;

        return $this;
    }

    public function getGatheringRarePopTimeTable(): ?GatheringRarePopTimeTable
    {
        return $this->gatheringRarePopTimeTable;
    }

    public function setGatheringRarePopTimeTable(?GatheringRarePopTimeTable $gatheringRarePopTimeTable): self
    {
        $this->gatheringRarePopTimeTable = $gatheringRarePopTimeTable;

        return $this;
    }
}
