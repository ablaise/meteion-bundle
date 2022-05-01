<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BeastReputationRank.
 *
 * @ORM\Table(name="beast_reputation_rank", indexes={@ORM\Index(name="idx_e21ac3db665648e9", columns={"color"})})
 * @ORM\Entity
 */
class BeastReputationRank
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="beast_reputation_rank_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="required_reputation", type="bigint", nullable=true)
     */
    private $requiredReputation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="allied_names", type="string", length=255, nullable=true)
     */
    private $alliedNames;

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

    public function getRequiredReputation(): ?string
    {
        return $this->requiredReputation;
    }

    public function setRequiredReputation(?string $requiredReputation): self
    {
        $this->requiredReputation = $requiredReputation;

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

    public function getAlliedNames(): ?string
    {
        return $this->alliedNames;
    }

    public function setAlliedNames(?string $alliedNames): self
    {
        $this->alliedNames = $alliedNames;

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
