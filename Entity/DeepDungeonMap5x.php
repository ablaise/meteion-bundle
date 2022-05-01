<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DeepDungeonMap5x.
 *
 * @ORM\Table(name="deep_dungeon_map5x", indexes={@ORM\Index(name="idx_89af1c0b1e5251", columns={"deep_dungeon_room_3"}), @ORM\Index(name="idx_89af1c0e510337d", columns={"deep_dungeon_room_1"}), @ORM\Index(name="idx_89af1c07c1962c7", columns={"deep_dungeon_room_2"}), @ORM\Index(name="idx_89af1c0921703eb", columns={"deep_dungeon_room_0"}), @ORM\Index(name="idx_89af1c0957ac7f2", columns={"deep_dungeon_room_4"})})
 * @ORM\Entity
 */
class DeepDungeonMap5x
{
    /**
     * @var string
     *
     * @ORM\Column(name="pk", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="deep_dungeon_map5x_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var DeepDungeonRoom
     *
     * @ORM\ManyToOne(targetEntity="DeepDungeonRoom")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="deep_dungeon_room_4", referencedColumnName="pk")
     * })
     */
    private $deepDungeonRoom4;

    /**
     * @var DeepDungeonRoom
     *
     * @ORM\ManyToOne(targetEntity="DeepDungeonRoom")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="deep_dungeon_room_3", referencedColumnName="pk")
     * })
     */
    private $deepDungeonRoom3;

    /**
     * @var DeepDungeonRoom
     *
     * @ORM\ManyToOne(targetEntity="DeepDungeonRoom")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="deep_dungeon_room_2", referencedColumnName="pk")
     * })
     */
    private $deepDungeonRoom2;

    /**
     * @var DeepDungeonRoom
     *
     * @ORM\ManyToOne(targetEntity="DeepDungeonRoom")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="deep_dungeon_room_1", referencedColumnName="pk")
     * })
     */
    private $deepDungeonRoom1;

    /**
     * @var DeepDungeonRoom
     *
     * @ORM\ManyToOne(targetEntity="DeepDungeonRoom")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="deep_dungeon_room_0", referencedColumnName="pk")
     * })
     */
    private $deepDungeonRoom0;

    public function getPk(): ?string
    {
        return $this->pk;
    }

    public function getDeepDungeonRoom4(): ?DeepDungeonRoom
    {
        return $this->deepDungeonRoom4;
    }

    public function setDeepDungeonRoom4(?DeepDungeonRoom $deepDungeonRoom4): self
    {
        $this->deepDungeonRoom4 = $deepDungeonRoom4;

        return $this;
    }

    public function getDeepDungeonRoom3(): ?DeepDungeonRoom
    {
        return $this->deepDungeonRoom3;
    }

    public function setDeepDungeonRoom3(?DeepDungeonRoom $deepDungeonRoom3): self
    {
        $this->deepDungeonRoom3 = $deepDungeonRoom3;

        return $this;
    }

    public function getDeepDungeonRoom2(): ?DeepDungeonRoom
    {
        return $this->deepDungeonRoom2;
    }

    public function setDeepDungeonRoom2(?DeepDungeonRoom $deepDungeonRoom2): self
    {
        $this->deepDungeonRoom2 = $deepDungeonRoom2;

        return $this;
    }

    public function getDeepDungeonRoom1(): ?DeepDungeonRoom
    {
        return $this->deepDungeonRoom1;
    }

    public function setDeepDungeonRoom1(?DeepDungeonRoom $deepDungeonRoom1): self
    {
        $this->deepDungeonRoom1 = $deepDungeonRoom1;

        return $this;
    }

    public function getDeepDungeonRoom0(): ?DeepDungeonRoom
    {
        return $this->deepDungeonRoom0;
    }

    public function setDeepDungeonRoom0(?DeepDungeonRoom $deepDungeonRoom0): self
    {
        $this->deepDungeonRoom0 = $deepDungeonRoom0;

        return $this;
    }
}
