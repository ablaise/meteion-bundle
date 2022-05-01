<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AozcontentBriefingBnpc.
 *
 * @ORM\Table(name="aozcontent_briefing_bnpc", indexes={@ORM\Index(name="idx_e4d3408af6d15bda", columns={"bnpc_name"})})
 * @ORM\Entity
 */
class AozcontentBriefingBnpc
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="aozcontent_briefing_bnpc_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="target_small", type="integer", nullable=true)
     */
    private $targetSmall;

    /**
     * @var int|null
     *
     * @ORM\Column(name="target_large", type="integer", nullable=true)
     */
    private $targetLarge;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="hide_stats", type="boolean", nullable=true)
     */
    private $hideStats;

    /**
     * @var int|null
     *
     * @ORM\Column(name="endurance", type="integer", nullable=true)
     */
    private $endurance;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fire", type="integer", nullable=true)
     */
    private $fire;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ice", type="integer", nullable=true)
     */
    private $ice;

    /**
     * @var int|null
     *
     * @ORM\Column(name="wind", type="integer", nullable=true)
     */
    private $wind;

    /**
     * @var int|null
     *
     * @ORM\Column(name="earth", type="integer", nullable=true)
     */
    private $earth;

    /**
     * @var int|null
     *
     * @ORM\Column(name="thunder", type="integer", nullable=true)
     */
    private $thunder;

    /**
     * @var int|null
     *
     * @ORM\Column(name="water", type="integer", nullable=true)
     */
    private $water;

    /**
     * @var int|null
     *
     * @ORM\Column(name="slashing", type="integer", nullable=true)
     */
    private $slashing;

    /**
     * @var int|null
     *
     * @ORM\Column(name="piercing", type="integer", nullable=true)
     */
    private $piercing;

    /**
     * @var int|null
     *
     * @ORM\Column(name="blunt", type="integer", nullable=true)
     */
    private $blunt;

    /**
     * @var int|null
     *
     * @ORM\Column(name="magic", type="integer", nullable=true)
     */
    private $magic;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="slow_vuln", type="boolean", nullable=true)
     */
    private $slowVuln;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="petrification_vuln", type="boolean", nullable=true)
     */
    private $petrificationVuln;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="paralysis_vuln", type="boolean", nullable=true)
     */
    private $paralysisVuln;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="interruption_vuln", type="boolean", nullable=true)
     */
    private $interruptionVuln;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="blind_vuln", type="boolean", nullable=true)
     */
    private $blindVuln;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="stun_vuln", type="boolean", nullable=true)
     */
    private $stunVuln;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="sleep_vuln", type="boolean", nullable=true)
     */
    private $sleepVuln;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="bind_vuln", type="boolean", nullable=true)
     */
    private $bindVuln;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="heavy_vuln", type="boolean", nullable=true)
     */
    private $heavyVuln;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="flat_or_death_vuln", type="boolean", nullable=true)
     */
    private $flatOrDeathVuln;

    /**
     * @var BnpcName
     *
     * @ORM\ManyToOne(targetEntity="BnpcName")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="bnpc_name", referencedColumnName="pk")
     * })
     */
    private $bnpcName;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getTargetSmall(): ?int
    {
        return $this->targetSmall;
    }

    public function setTargetSmall(?int $targetSmall): self
    {
        $this->targetSmall = $targetSmall;

        return $this;
    }

    public function getTargetLarge(): ?int
    {
        return $this->targetLarge;
    }

    public function setTargetLarge(?int $targetLarge): self
    {
        $this->targetLarge = $targetLarge;

        return $this;
    }

    public function getHideStats(): ?bool
    {
        return $this->hideStats;
    }

    public function setHideStats(?bool $hideStats): self
    {
        $this->hideStats = $hideStats;

        return $this;
    }

    public function getEndurance(): ?int
    {
        return $this->endurance;
    }

    public function setEndurance(?int $endurance): self
    {
        $this->endurance = $endurance;

        return $this;
    }

    public function getFire(): ?int
    {
        return $this->fire;
    }

    public function setFire(?int $fire): self
    {
        $this->fire = $fire;

        return $this;
    }

    public function getIce(): ?int
    {
        return $this->ice;
    }

    public function setIce(?int $ice): self
    {
        $this->ice = $ice;

        return $this;
    }

    public function getWind(): ?int
    {
        return $this->wind;
    }

    public function setWind(?int $wind): self
    {
        $this->wind = $wind;

        return $this;
    }

    public function getEarth(): ?int
    {
        return $this->earth;
    }

    public function setEarth(?int $earth): self
    {
        $this->earth = $earth;

        return $this;
    }

    public function getThunder(): ?int
    {
        return $this->thunder;
    }

    public function setThunder(?int $thunder): self
    {
        $this->thunder = $thunder;

        return $this;
    }

    public function getWater(): ?int
    {
        return $this->water;
    }

    public function setWater(?int $water): self
    {
        $this->water = $water;

        return $this;
    }

    public function getSlashing(): ?int
    {
        return $this->slashing;
    }

    public function setSlashing(?int $slashing): self
    {
        $this->slashing = $slashing;

        return $this;
    }

    public function getPiercing(): ?int
    {
        return $this->piercing;
    }

    public function setPiercing(?int $piercing): self
    {
        $this->piercing = $piercing;

        return $this;
    }

    public function getBlunt(): ?int
    {
        return $this->blunt;
    }

    public function setBlunt(?int $blunt): self
    {
        $this->blunt = $blunt;

        return $this;
    }

    public function getMagic(): ?int
    {
        return $this->magic;
    }

    public function setMagic(?int $magic): self
    {
        $this->magic = $magic;

        return $this;
    }

    public function getSlowVuln(): ?bool
    {
        return $this->slowVuln;
    }

    public function setSlowVuln(?bool $slowVuln): self
    {
        $this->slowVuln = $slowVuln;

        return $this;
    }

    public function getPetrificationVuln(): ?bool
    {
        return $this->petrificationVuln;
    }

    public function setPetrificationVuln(?bool $petrificationVuln): self
    {
        $this->petrificationVuln = $petrificationVuln;

        return $this;
    }

    public function getParalysisVuln(): ?bool
    {
        return $this->paralysisVuln;
    }

    public function setParalysisVuln(?bool $paralysisVuln): self
    {
        $this->paralysisVuln = $paralysisVuln;

        return $this;
    }

    public function getInterruptionVuln(): ?bool
    {
        return $this->interruptionVuln;
    }

    public function setInterruptionVuln(?bool $interruptionVuln): self
    {
        $this->interruptionVuln = $interruptionVuln;

        return $this;
    }

    public function getBlindVuln(): ?bool
    {
        return $this->blindVuln;
    }

    public function setBlindVuln(?bool $blindVuln): self
    {
        $this->blindVuln = $blindVuln;

        return $this;
    }

    public function getStunVuln(): ?bool
    {
        return $this->stunVuln;
    }

    public function setStunVuln(?bool $stunVuln): self
    {
        $this->stunVuln = $stunVuln;

        return $this;
    }

    public function getSleepVuln(): ?bool
    {
        return $this->sleepVuln;
    }

    public function setSleepVuln(?bool $sleepVuln): self
    {
        $this->sleepVuln = $sleepVuln;

        return $this;
    }

    public function getBindVuln(): ?bool
    {
        return $this->bindVuln;
    }

    public function setBindVuln(?bool $bindVuln): self
    {
        $this->bindVuln = $bindVuln;

        return $this;
    }

    public function getHeavyVuln(): ?bool
    {
        return $this->heavyVuln;
    }

    public function setHeavyVuln(?bool $heavyVuln): self
    {
        $this->heavyVuln = $heavyVuln;

        return $this;
    }

    public function getFlatOrDeathVuln(): ?bool
    {
        return $this->flatOrDeathVuln;
    }

    public function setFlatOrDeathVuln(?bool $flatOrDeathVuln): self
    {
        $this->flatOrDeathVuln = $flatOrDeathVuln;

        return $this;
    }

    public function getBnpcName(): ?BnpcName
    {
        return $this->bnpcName;
    }

    public function setBnpcName(?BnpcName $bnpcName): self
    {
        $this->bnpcName = $bnpcName;

        return $this;
    }
}
