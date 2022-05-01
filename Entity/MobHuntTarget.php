<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MobHuntTarget.
 *
 * @ORM\Table(name="mob_hunt_target", indexes={@ORM\Index(name="idx_f7164e4397fff1", columns={"fate"}), @ORM\Index(name="idx_f7164e4396ee9add", columns={"territory_type"}), @ORM\Index(name="idx_f7164e4394960eea", columns={"place_name"}), @ORM\Index(name="idx_f7164e435e237e06", columns={"name"})})
 * @ORM\Entity
 */
class MobHuntTarget
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="mob_hunt_target_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="icon", type="integer", nullable=true)
     */
    private $icon;

    /**
     * @var PlaceName
     *
     * @ORM\ManyToOne(targetEntity="PlaceName")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="place_name", referencedColumnName="pk")
     * })
     */
    private $placeName;

    /**
     * @var Map
     *
     * @ORM\ManyToOne(targetEntity="Map")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="territory_type", referencedColumnName="pk")
     * })
     */
    private $territoryType;

    /**
     * @var Fate
     *
     * @ORM\ManyToOne(targetEntity="Fate")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fate", referencedColumnName="pk")
     * })
     */
    private $fate;

    /**
     * @var BnpcName
     *
     * @ORM\ManyToOne(targetEntity="BnpcName")
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

    public function getPlaceName(): ?PlaceName
    {
        return $this->placeName;
    }

    public function setPlaceName(?PlaceName $placeName): self
    {
        $this->placeName = $placeName;

        return $this;
    }

    public function getTerritoryType(): ?Map
    {
        return $this->territoryType;
    }

    public function setTerritoryType(?Map $territoryType): self
    {
        $this->territoryType = $territoryType;

        return $this;
    }

    public function getFate(): ?Fate
    {
        return $this->fate;
    }

    public function setFate(?Fate $fate): self
    {
        $this->fate = $fate;

        return $this;
    }

    public function getName(): ?BnpcName
    {
        return $this->name;
    }

    public function setName(?BnpcName $name): self
    {
        $this->name = $name;

        return $this;
    }
}
