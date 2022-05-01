<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DeepDungeonRoom.
 *
 * @ORM\Table(name="deep_dungeon_room", indexes={@ORM\Index(name="idx_52a8208830176791", columns={"level_3"}), @ORM\Index(name="idx_52a82088ae73f232", columns={"level_4"}), @ORM\Index(name="idx_52a82088a91e362b", columns={"level_0"}), @ORM\Index(name="idx_52a8208847105707", columns={"level_2"}), @ORM\Index(name="idx_52a82088de1906bd", columns={"level_1"})})
 * @ORM\Entity
 */
class DeepDungeonRoom
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="deep_dungeon_room_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="level_4", referencedColumnName="pk")
     * })
     */
    private $level4;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="level_3", referencedColumnName="pk")
     * })
     */
    private $level3;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="level_2", referencedColumnName="pk")
     * })
     */
    private $level2;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="level_1", referencedColumnName="pk")
     * })
     */
    private $level1;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="level_0", referencedColumnName="pk")
     * })
     */
    private $level0;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getLevel4(): ?Level
    {
        return $this->level4;
    }

    public function setLevel4(?Level $level4): self
    {
        $this->level4 = $level4;

        return $this;
    }

    public function getLevel3(): ?Level
    {
        return $this->level3;
    }

    public function setLevel3(?Level $level3): self
    {
        $this->level3 = $level3;

        return $this;
    }

    public function getLevel2(): ?Level
    {
        return $this->level2;
    }

    public function setLevel2(?Level $level2): self
    {
        $this->level2 = $level2;

        return $this;
    }

    public function getLevel1(): ?Level
    {
        return $this->level1;
    }

    public function setLevel1(?Level $level1): self
    {
        $this->level1 = $level1;

        return $this;
    }

    public function getLevel0(): ?Level
    {
        return $this->level0;
    }

    public function setLevel0(?Level $level0): self
    {
        $this->level0 = $level0;

        return $this;
    }
}
