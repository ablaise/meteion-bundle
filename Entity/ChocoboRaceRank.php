<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ChocoboRaceRank.
 *
 * @ORM\Table(name="chocobo_race_rank", indexes={@ORM\Index(name="idx_101c6db05e237e06", columns={"name"})})
 * @ORM\Entity
 */
class ChocoboRaceRank
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="chocobo_race_rank_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="rating_min", type="bigint", nullable=true)
     */
    private $ratingMin;

    /**
     * @var int|null
     *
     * @ORM\Column(name="rating_max", type="bigint", nullable=true)
     */
    private $ratingMax;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fee", type="bigint", nullable=true)
     */
    private $fee;

    /**
     * @var int|null
     *
     * @ORM\Column(name="icon", type="integer", nullable=true)
     */
    private $icon;

    /**
     * @var GoldSaucerTextData
     *
     * @ORM\ManyToOne(targetEntity="GoldSaucerTextData")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="name", referencedColumnName="pk")
     * })
     */
    private $name;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getRatingMin(): ?string
    {
        return $this->ratingMin;
    }

    public function setRatingMin(?string $ratingMin): self
    {
        $this->ratingMin = $ratingMin;

        return $this;
    }

    public function getRatingMax(): ?string
    {
        return $this->ratingMax;
    }

    public function setRatingMax(?string $ratingMax): self
    {
        $this->ratingMax = $ratingMax;

        return $this;
    }

    public function getFee(): ?string
    {
        return $this->fee;
    }

    public function setFee(?string $fee): self
    {
        $this->fee = $fee;

        return $this;
    }

    public function getIcon(): ?int
    {
        return $this->icon;
    }

    public function setIcon(?int $icon): self
    {
        $this->icon = $icon;

        return $this;
    }

    public function getName(): ?GoldSaucerTextData
    {
        return $this->name;
    }

    public function setName(?GoldSaucerTextData $name): self
    {
        $this->name = $name;

        return $this;
    }
}
