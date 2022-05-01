<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fcreputation.
 *
 * @ORM\Table(name="fcreputation", indexes={@ORM\Index(name="idx_5c11ed95665648e9", columns={"color"})})
 * @ORM\Entity
 */
class Fcreputation
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="fcreputation_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="points_to_next", type="bigint", nullable=true)
     */
    private $pointsToNext;

    /**
     * @var int|null
     *
     * @ORM\Column(name="required_points", type="bigint", nullable=true)
     */
    private $requiredPoints;

    /**
     * @var int|null
     *
     * @ORM\Column(name="discount_rate", type="integer", nullable=true)
     */
    private $discountRate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var Uicolor
     *
     * @ORM\ManyToOne(targetEntity="Uicolor")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="color", referencedColumnName="pk")
     * })
     */
    private $color;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getPointsToNext(): ?string
    {
        return $this->pointsToNext;
    }

    public function setPointsToNext(?string $pointsToNext): self
    {
        $this->pointsToNext = $pointsToNext;

        return $this;
    }

    public function getRequiredPoints(): ?string
    {
        return $this->requiredPoints;
    }

    public function setRequiredPoints(?string $requiredPoints): self
    {
        $this->requiredPoints = $requiredPoints;

        return $this;
    }

    public function getDiscountRate(): ?int
    {
        return $this->discountRate;
    }

    public function setDiscountRate(?int $discountRate): self
    {
        $this->discountRate = $discountRate;

        return $this;
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

    public function getColor(): ?Uicolor
    {
        return $this->color;
    }

    public function setColor(?Uicolor $color): self
    {
        $this->color = $color;

        return $this;
    }
}
