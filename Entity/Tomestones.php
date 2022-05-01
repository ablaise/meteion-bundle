<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tomestones.
 *
 * @ORM\Table(name="tomestones")
 * @ORM\Entity
 */
class Tomestones
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="tomestones_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="weekly_limit", type="bigint", nullable=true)
     */
    private $weeklyLimit;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getWeeklyLimit(): ?string
    {
        return $this->weeklyLimit;
    }

    public function setWeeklyLimit(?string $weeklyLimit): self
    {
        $this->weeklyLimit = $weeklyLimit;

        return $this;
    }
}
