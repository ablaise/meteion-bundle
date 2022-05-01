<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AirshipExplorationLevel.
 *
 * @ORM\Table(name="airship_exploration_level")
 * @ORM\Entity
 */
class AirshipExplorationLevel
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="airship_exploration_level_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="capacity", type="bigint", nullable=true)
     */
    private $capacity;

    /**
     * @var int|null
     *
     * @ORM\Column(name="exp_to_next", type="bigint", nullable=true)
     */
    private $expToNext;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getCapacity(): ?string
    {
        return $this->capacity;
    }

    public function setCapacity(?string $capacity): self
    {
        $this->capacity = $capacity;

        return $this;
    }

    public function getExpToNext(): ?string
    {
        return $this->expToNext;
    }

    public function setExpToNext(?string $expToNext): self
    {
        $this->expToNext = $expToNext;

        return $this;
    }
}
