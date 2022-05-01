<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AquariumFish.
 *
 * @ORM\Table(name="aquarium_fish", indexes={@ORM\Index(name="idx_6d1669c346dc84eb", columns={"aquarium_water"}), @ORM\Index(name="idx_6d1669c31f1b251e", columns={"item"})})
 * @ORM\Entity
 */
class AquariumFish
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="aquarium_fish_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="size", type="integer", nullable=true)
     */
    private $size;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_4", type="bigint", nullable=true)
     */
    private $column4;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item", referencedColumnName="pk")
     * })
     */
    private $item;

    /**
     * @var AquariumWater
     *
     * @ORM\ManyToOne(targetEntity="AquariumWater")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="aquarium_water", referencedColumnName="pk")
     * })
     */
    private $aquariumWater;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getSize(): ?int
    {
        return $this->size;
    }

    public function setSize(?int $size): self
    {
        $this->size = $size;

        return $this;
    }

    public function getColumn4(): ?string
    {
        return $this->column4;
    }

    public function setColumn4(?string $column4): self
    {
        $this->column4 = $column4;

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

    public function getAquariumWater(): ?AquariumWater
    {
        return $this->aquariumWater;
    }

    public function setAquariumWater(?AquariumWater $aquariumWater): self
    {
        $this->aquariumWater = $aquariumWater;

        return $this;
    }
}
