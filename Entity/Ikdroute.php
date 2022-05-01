<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ikdroute.
 *
 * @ORM\Table(name="ikdroute", indexes={@ORM\Index(name="idx_74b4e6ce29f9ac6a", columns={"time_0"}), @ORM\Index(name="idx_74b4e6ce96ee9add", columns={"territory_type"}), @ORM\Index(name="idx_74b4e6ce99e6587b", columns={"spot_1"}), @ORM\Index(name="idx_74b4e6ce5efe9cfc", columns={"time_1"}), @ORM\Index(name="idx_74b4e6cec7f7cd46", columns={"time_2"}), @ORM\Index(name="idx_74b4e6ceeee168ed", columns={"spot_0"}), @ORM\Index(name="idx_74b4e6ceef09c1", columns={"spot_2"})})
 * @ORM\Entity
 */
class Ikdroute
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ikdroute_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="image", type="integer", nullable=true)
     */
    private $image;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var TerritoryType
     *
     * @ORM\ManyToOne(targetEntity="TerritoryType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="territory_type", referencedColumnName="pk")
     * })
     */
    private $territoryType;

    /**
     * @var IkdtimeDefine
     *
     * @ORM\ManyToOne(targetEntity="IkdtimeDefine")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="time_2", referencedColumnName="pk")
     * })
     */
    private $time2;

    /**
     * @var Ikdspot
     *
     * @ORM\ManyToOne(targetEntity="Ikdspot")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="spot_2", referencedColumnName="pk")
     * })
     */
    private $spot2;

    /**
     * @var IkdtimeDefine
     *
     * @ORM\ManyToOne(targetEntity="IkdtimeDefine")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="time_1", referencedColumnName="pk")
     * })
     */
    private $time1;

    /**
     * @var Ikdspot
     *
     * @ORM\ManyToOne(targetEntity="Ikdspot")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="spot_1", referencedColumnName="pk")
     * })
     */
    private $spot1;

    /**
     * @var IkdtimeDefine
     *
     * @ORM\ManyToOne(targetEntity="IkdtimeDefine")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="time_0", referencedColumnName="pk")
     * })
     */
    private $time0;

    /**
     * @var Ikdspot
     *
     * @ORM\ManyToOne(targetEntity="Ikdspot")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="spot_0", referencedColumnName="pk")
     * })
     */
    private $spot0;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getImage(): ?int
    {
        return $this->image;
    }

    public function setImage(?int $image): self
    {
        $this->image = $image;

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

    public function getTerritoryType(): ?TerritoryType
    {
        return $this->territoryType;
    }

    public function setTerritoryType(?TerritoryType $territoryType): self
    {
        $this->territoryType = $territoryType;

        return $this;
    }

    public function getTime2(): ?IkdtimeDefine
    {
        return $this->time2;
    }

    public function setTime2(?IkdtimeDefine $time2): self
    {
        $this->time2 = $time2;

        return $this;
    }

    public function getSpot2(): ?Ikdspot
    {
        return $this->spot2;
    }

    public function setSpot2(?Ikdspot $spot2): self
    {
        $this->spot2 = $spot2;

        return $this;
    }

    public function getTime1(): ?IkdtimeDefine
    {
        return $this->time1;
    }

    public function setTime1(?IkdtimeDefine $time1): self
    {
        $this->time1 = $time1;

        return $this;
    }

    public function getSpot1(): ?Ikdspot
    {
        return $this->spot1;
    }

    public function setSpot1(?Ikdspot $spot1): self
    {
        $this->spot1 = $spot1;

        return $this;
    }

    public function getTime0(): ?IkdtimeDefine
    {
        return $this->time0;
    }

    public function setTime0(?IkdtimeDefine $time0): self
    {
        $this->time0 = $time0;

        return $this;
    }

    public function getSpot0(): ?Ikdspot
    {
        return $this->spot0;
    }

    public function setSpot0(?Ikdspot $spot0): self
    {
        $this->spot0 = $spot0;

        return $this;
    }
}
