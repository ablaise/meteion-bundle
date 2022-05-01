<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SubmarineRank.
 *
 * @ORM\Table(name="submarine_rank")
 * @ORM\Entity
 */
class SubmarineRank
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="submarine_rank_pk_seq", allocationSize=1, initialValue=1)
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

    /**
     * @var int|null
     *
     * @ORM\Column(name="surveillance_bonus", type="integer", nullable=true)
     */
    private $surveillanceBonus;

    /**
     * @var int|null
     *
     * @ORM\Column(name="retrieval_bonus", type="integer", nullable=true)
     */
    private $retrievalBonus;

    /**
     * @var int|null
     *
     * @ORM\Column(name="speed_bonus", type="integer", nullable=true)
     */
    private $speedBonus;

    /**
     * @var int|null
     *
     * @ORM\Column(name="range_bonus", type="integer", nullable=true)
     */
    private $rangeBonus;

    /**
     * @var int|null
     *
     * @ORM\Column(name="favor_bonus", type="integer", nullable=true)
     */
    private $favorBonus;

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

    public function getSurveillanceBonus(): ?int
    {
        return $this->surveillanceBonus;
    }

    public function setSurveillanceBonus(?int $surveillanceBonus): self
    {
        $this->surveillanceBonus = $surveillanceBonus;

        return $this;
    }

    public function getRetrievalBonus(): ?int
    {
        return $this->retrievalBonus;
    }

    public function setRetrievalBonus(?int $retrievalBonus): self
    {
        $this->retrievalBonus = $retrievalBonus;

        return $this;
    }

    public function getSpeedBonus(): ?int
    {
        return $this->speedBonus;
    }

    public function setSpeedBonus(?int $speedBonus): self
    {
        $this->speedBonus = $speedBonus;

        return $this;
    }

    public function getRangeBonus(): ?int
    {
        return $this->rangeBonus;
    }

    public function setRangeBonus(?int $rangeBonus): self
    {
        $this->rangeBonus = $rangeBonus;

        return $this;
    }

    public function getFavorBonus(): ?int
    {
        return $this->favorBonus;
    }

    public function setFavorBonus(?int $favorBonus): self
    {
        $this->favorBonus = $favorBonus;

        return $this;
    }
}
