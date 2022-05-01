<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DeepDungeonLayer.
 *
 * @ORM\Table(name="deep_dungeon_layer", indexes={@ORM\Index(name="idx_604557b598ff8607", columns={"deep_dungeon"})})
 * @ORM\Entity
 */
class DeepDungeonLayer
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="deep_dungeon_layer_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="floor_set", type="integer", nullable=true)
     */
    private $floorSet;

    /**
     * @var int|null
     *
     * @ORM\Column(name="room_a", type="integer", nullable=true)
     */
    private $roomA;

    /**
     * @var int|null
     *
     * @ORM\Column(name="room_b", type="integer", nullable=true)
     */
    private $roomB;

    /**
     * @var int|null
     *
     * @ORM\Column(name="room_c", type="integer", nullable=true)
     */
    private $roomC;

    /**
     * @var int|null
     *
     * @ORM\Column(name="wep_min_lv", type="integer", nullable=true)
     */
    private $wepMinLv;

    /**
     * @var int|null
     *
     * @ORM\Column(name="armour_min_lv", type="integer", nullable=true)
     */
    private $armourMinLv;

    /**
     * @var DeepDungeon
     *
     * @ORM\ManyToOne(targetEntity="DeepDungeon")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="deep_dungeon", referencedColumnName="pk")
     * })
     */
    private $deepDungeon;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getFloorSet(): ?int
    {
        return $this->floorSet;
    }

    public function setFloorSet(?int $floorSet): self
    {
        $this->floorSet = $floorSet;

        return $this;
    }

    public function getRoomA(): ?int
    {
        return $this->roomA;
    }

    public function setRoomA(?int $roomA): self
    {
        $this->roomA = $roomA;

        return $this;
    }

    public function getRoomB(): ?int
    {
        return $this->roomB;
    }

    public function setRoomB(?int $roomB): self
    {
        $this->roomB = $roomB;

        return $this;
    }

    public function getRoomC(): ?int
    {
        return $this->roomC;
    }

    public function setRoomC(?int $roomC): self
    {
        $this->roomC = $roomC;

        return $this;
    }

    public function getWepMinLv(): ?int
    {
        return $this->wepMinLv;
    }

    public function setWepMinLv(?int $wepMinLv): self
    {
        $this->wepMinLv = $wepMinLv;

        return $this;
    }

    public function getArmourMinLv(): ?int
    {
        return $this->armourMinLv;
    }

    public function setArmourMinLv(?int $armourMinLv): self
    {
        $this->armourMinLv = $armourMinLv;

        return $this;
    }

    public function getDeepDungeon(): ?DeepDungeon
    {
        return $this->deepDungeon;
    }

    public function setDeepDungeon(?DeepDungeon $deepDungeon): self
    {
        $this->deepDungeon = $deepDungeon;

        return $this;
    }
}
