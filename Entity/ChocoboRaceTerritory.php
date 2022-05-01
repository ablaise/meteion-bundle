<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ChocoboRaceTerritory.
 *
 * @ORM\Table(name="chocobo_race_territory", indexes={@ORM\Index(name="idx_3484360d5e237e06", columns={"name"})})
 * @ORM\Entity
 */
class ChocoboRaceTerritory
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="chocobo_race_territory_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

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
