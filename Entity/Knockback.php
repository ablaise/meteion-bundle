<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Knockback.
 *
 * @ORM\Table(name="knockback")
 * @ORM\Entity
 */
class Knockback
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="knockback_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="distance", type="integer", nullable=true)
     */
    private $distance;

    /**
     * @var int|null
     *
     * @ORM\Column(name="speed", type="integer", nullable=true)
     */
    private $speed;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="motion", type="boolean", nullable=true)
     */
    private $motion;

    /**
     * @var int|null
     *
     * @ORM\Column(name="near_distance", type="integer", nullable=true)
     */
    private $nearDistance;

    /**
     * @var int|null
     *
     * @ORM\Column(name="direction", type="integer", nullable=true)
     */
    private $direction;

    /**
     * @var int|null
     *
     * @ORM\Column(name="direction_arg", type="integer", nullable=true)
     */
    private $directionArg;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="cancel_move", type="boolean", nullable=true)
     */
    private $cancelMove;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getDistance(): ?int
    {
        return $this->distance;
    }

    public function setDistance(?int $distance): self
    {
        $this->distance = $distance;

        return $this;
    }

    public function getSpeed(): ?int
    {
        return $this->speed;
    }

    public function setSpeed(?int $speed): self
    {
        $this->speed = $speed;

        return $this;
    }

    public function getMotion(): ?bool
    {
        return $this->motion;
    }

    public function setMotion(?bool $motion): self
    {
        $this->motion = $motion;

        return $this;
    }

    public function getNearDistance(): ?int
    {
        return $this->nearDistance;
    }

    public function setNearDistance(?int $nearDistance): self
    {
        $this->nearDistance = $nearDistance;

        return $this;
    }

    public function getDirection(): ?int
    {
        return $this->direction;
    }

    public function setDirection(?int $direction): self
    {
        $this->direction = $direction;

        return $this;
    }

    public function getDirectionArg(): ?int
    {
        return $this->directionArg;
    }

    public function setDirectionArg(?int $directionArg): self
    {
        $this->directionArg = $directionArg;

        return $this;
    }

    public function getCancelMove(): ?bool
    {
        return $this->cancelMove;
    }

    public function setCancelMove(?bool $cancelMove): self
    {
        $this->cancelMove = $cancelMove;

        return $this;
    }
}
