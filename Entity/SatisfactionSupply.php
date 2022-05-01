<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SatisfactionSupply.
 *
 * @ORM\Table(name="satisfaction_supply", indexes={@ORM\Index(name="idx_86ec6d8b4ed17253", columns={"reward"}), @ORM\Index(name="idx_86ec6d8b1f1b251e", columns={"item"})})
 * @ORM\Entity
 */
class SatisfactionSupply
{
    /**
     * @var string
     *
     * @ORM\Column(name="pk", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="satisfaction_supply_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="slot", type="integer", nullable=true)
     */
    private $slot;

    /**
     * @var int|null
     *
     * @ORM\Column(name="probability", type="integer", nullable=true)
     */
    private $probability;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_low", type="bigint", nullable=true)
     */
    private $collectabilityLow;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_mid", type="bigint", nullable=true)
     */
    private $collectabilityMid;

    /**
     * @var int|null
     *
     * @ORM\Column(name="collectability_high", type="bigint", nullable=true)
     */
    private $collectabilityHigh;

    /**
     * @var SatisfactionSupplyReward
     *
     * @ORM\ManyToOne(targetEntity="SatisfactionSupplyReward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reward", referencedColumnName="pk")
     * })
     */
    private $reward;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item", referencedColumnName="pk")
     * })
     */
    private $item;

    public function getPk(): ?string
    {
        return $this->pk;
    }

    public function getSlot(): ?int
    {
        return $this->slot;
    }

    public function setSlot(?int $slot): self
    {
        $this->slot = $slot;

        return $this;
    }

    public function getProbability(): ?int
    {
        return $this->probability;
    }

    public function setProbability(?int $probability): self
    {
        $this->probability = $probability;

        return $this;
    }

    public function getCollectabilityLow(): ?string
    {
        return $this->collectabilityLow;
    }

    public function setCollectabilityLow(?string $collectabilityLow): self
    {
        $this->collectabilityLow = $collectabilityLow;

        return $this;
    }

    public function getCollectabilityMid(): ?string
    {
        return $this->collectabilityMid;
    }

    public function setCollectabilityMid(?string $collectabilityMid): self
    {
        $this->collectabilityMid = $collectabilityMid;

        return $this;
    }

    public function getCollectabilityHigh(): ?string
    {
        return $this->collectabilityHigh;
    }

    public function setCollectabilityHigh(?string $collectabilityHigh): self
    {
        $this->collectabilityHigh = $collectabilityHigh;

        return $this;
    }

    public function getReward(): ?SatisfactionSupplyReward
    {
        return $this->reward;
    }

    public function setReward(?SatisfactionSupplyReward $reward): self
    {
        $this->reward = $reward;

        return $this;
    }

    public function getItem(): ?Item
    {
        return $this->item;
    }

    public function setItem(?Item $item): self
    {
        $this->item = $item;

        return $this;
    }
}
