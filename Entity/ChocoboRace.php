<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ChocoboRace.
 *
 * @ORM\Table(name="chocobo_race", indexes={@ORM\Index(name="idx_2624838b3484360d", columns={"chocobo_race_territory"}), @ORM\Index(name="idx_2624838b101c6db0", columns={"chocobo_race_rank"})})
 * @ORM\Entity
 */
class ChocoboRace
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="chocobo_race_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var ChocoboRaceTerritory
     *
     * @ORM\ManyToOne(targetEntity="ChocoboRaceTerritory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="chocobo_race_territory", referencedColumnName="pk")
     * })
     */
    private $chocoboRaceTerritory;

    /**
     * @var ChocoboRaceRank
     *
     * @ORM\ManyToOne(targetEntity="ChocoboRaceRank")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="chocobo_race_rank", referencedColumnName="pk")
     * })
     */
    private $chocoboRaceRank;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getChocoboRaceTerritory(): ?ChocoboRaceTerritory
    {
        return $this->chocoboRaceTerritory;
    }

    public function setChocoboRaceTerritory(?ChocoboRaceTerritory $chocoboRaceTerritory): self
    {
        $this->chocoboRaceTerritory = $chocoboRaceTerritory;

        return $this;
    }

    public function getChocoboRaceRank(): ?ChocoboRaceRank
    {
        return $this->chocoboRaceRank;
    }

    public function setChocoboRaceRank(?ChocoboRaceRank $chocoboRaceRank): self
    {
        $this->chocoboRaceRank = $chocoboRaceRank;

        return $this;
    }
}
