<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CycleTime.
 *
 * @ORM\Table(name="cycle_time")
 * @ORM\Entity
 */
class CycleTime
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="cycle_time_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="first_cycle", type="bigint", nullable=true)
     */
    private $firstCycle;

    /**
     * @var int|null
     *
     * @ORM\Column(name="cycle", type="bigint", nullable=true)
     */
    private $cycle;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getFirstCycle(): ?string
    {
        return $this->firstCycle;
    }

    public function setFirstCycle(?string $firstCycle): self
    {
        $this->firstCycle = $firstCycle;

        return $this;
    }

    public function getCycle(): ?string
    {
        return $this->cycle;
    }

    public function setCycle(?string $cycle): self
    {
        $this->cycle = $cycle;

        return $this;
    }
}
