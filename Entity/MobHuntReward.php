<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MobHuntReward.
 *
 * @ORM\Table(name="mob_hunt_reward", indexes={@ORM\Index(name="idx_ffa813ecf0695b72", columns={"expansion"})})
 * @ORM\Entity
 */
class MobHuntReward
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="mob_hunt_reward_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="exp_reward", type="bigint", nullable=true)
     */
    private $expReward;

    /**
     * @var int|null
     *
     * @ORM\Column(name="gil_reward", type="bigint", nullable=true)
     */
    private $gilReward;

    /**
     * @var int|null
     *
     * @ORM\Column(name="currency_reward", type="bigint", nullable=true)
     */
    private $currencyReward;

    /**
     * @var ExVersion
     *
     * @ORM\ManyToOne(targetEntity="ExVersion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="expansion", referencedColumnName="pk")
     * })
     */
    private $expansion;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getExpReward(): ?string
    {
        return $this->expReward;
    }

    public function setExpReward(?string $expReward): self
    {
        $this->expReward = $expReward;

        return $this;
    }

    public function getGilReward(): ?string
    {
        return $this->gilReward;
    }

    public function setGilReward(?string $gilReward): self
    {
        $this->gilReward = $gilReward;

        return $this;
    }

    public function getCurrencyReward(): ?string
    {
        return $this->currencyReward;
    }

    public function setCurrencyReward(?string $currencyReward): self
    {
        $this->currencyReward = $currencyReward;

        return $this;
    }

    public function getExpansion(): ?ExVersion
    {
        return $this->expansion;
    }

    public function setExpansion(?ExVersion $expansion): self
    {
        $this->expansion = $expansion;

        return $this;
    }
}
