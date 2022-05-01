<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BehaviorPath.
 *
 * @ORM\Table(name="behavior_path")
 * @ORM\Entity
 */
class BehaviorPath
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="behavior_path_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_turn_transition", type="boolean", nullable=true)
     */
    private $isTurnTransition;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_fade_out", type="boolean", nullable=true)
     */
    private $isFadeOut;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_fade_in", type="boolean", nullable=true)
     */
    private $isFadeIn;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_walking", type="boolean", nullable=true)
     */
    private $isWalking;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_5", type="boolean", nullable=true)
     */
    private $column5;

    /**
     * @var string|null
     *
     * @ORM\Column(name="speed", type="string", length=255, nullable=true)
     */
    private $speed;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getIsTurnTransition(): ?bool
    {
        return $this->isTurnTransition;
    }

    public function setIsTurnTransition(?bool $isTurnTransition): self
    {
        $this->isTurnTransition = $isTurnTransition;

        return $this;
    }

    public function getIsFadeOut(): ?bool
    {
        return $this->isFadeOut;
    }

    public function setIsFadeOut(?bool $isFadeOut): self
    {
        $this->isFadeOut = $isFadeOut;

        return $this;
    }

    public function getIsFadeIn(): ?bool
    {
        return $this->isFadeIn;
    }

    public function setIsFadeIn(?bool $isFadeIn): self
    {
        $this->isFadeIn = $isFadeIn;

        return $this;
    }

    public function getIsWalking(): ?bool
    {
        return $this->isWalking;
    }

    public function setIsWalking(?bool $isWalking): self
    {
        $this->isWalking = $isWalking;

        return $this;
    }

    public function getColumn5(): ?bool
    {
        return $this->column5;
    }

    public function setColumn5(?bool $column5): self
    {
        $this->column5 = $column5;

        return $this;
    }

    public function getSpeed(): ?string
    {
        return $this->speed;
    }

    public function setSpeed(?string $speed): self
    {
        $this->speed = $speed;

        return $this;
    }
}
