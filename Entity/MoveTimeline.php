<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MoveTimeline.
 *
 * @ORM\Table(name="move_timeline", indexes={@ORM\Index(name="idx_b303cff763a6fd83", columns={"move_back"}), @ORM\Index(name="idx_b303cff778c86abd", columns={"move_right"}), @ORM\Index(name="idx_b303cff74d3f0d65", columns={"extra"}), @ORM\Index(name="idx_b303cff7dc24b515", columns={"idle"}), @ORM\Index(name="idx_b303cff7d56a472", columns={"move_turn_right"}), @ORM\Index(name="idx_b303cff7155ce9d1", columns={"move_forward"}), @ORM\Index(name="idx_b303cff7740fdbdc", columns={"move_left"}), @ORM\Index(name="idx_b303cff71297ac8f", columns={"move_down"}), @ORM\Index(name="idx_b303cff78062881e", columns={"move_turn_left"}), @ORM\Index(name="idx_b303cff79168c888", columns={"move_up"})})
 * @ORM\Entity
 */
class MoveTimeline
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="move_timeline_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var ActionTimeline
     *
     * @ORM\ManyToOne(targetEntity="ActionTimeline")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="extra", referencedColumnName="pk")
     * })
     */
    private $extra;

    /**
     * @var ActionTimeline
     *
     * @ORM\ManyToOne(targetEntity="ActionTimeline")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="move_turn_right", referencedColumnName="pk")
     * })
     */
    private $moveTurnRight;

    /**
     * @var ActionTimeline
     *
     * @ORM\ManyToOne(targetEntity="ActionTimeline")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="move_turn_left", referencedColumnName="pk")
     * })
     */
    private $moveTurnLeft;

    /**
     * @var ActionTimeline
     *
     * @ORM\ManyToOne(targetEntity="ActionTimeline")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="move_down", referencedColumnName="pk")
     * })
     */
    private $moveDown;

    /**
     * @var ActionTimeline
     *
     * @ORM\ManyToOne(targetEntity="ActionTimeline")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="move_up", referencedColumnName="pk")
     * })
     */
    private $moveUp;

    /**
     * @var ActionTimeline
     *
     * @ORM\ManyToOne(targetEntity="ActionTimeline")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="move_right", referencedColumnName="pk")
     * })
     */
    private $moveRight;

    /**
     * @var ActionTimeline
     *
     * @ORM\ManyToOne(targetEntity="ActionTimeline")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="move_left", referencedColumnName="pk")
     * })
     */
    private $moveLeft;

    /**
     * @var ActionTimeline
     *
     * @ORM\ManyToOne(targetEntity="ActionTimeline")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="move_back", referencedColumnName="pk")
     * })
     */
    private $moveBack;

    /**
     * @var ActionTimeline
     *
     * @ORM\ManyToOne(targetEntity="ActionTimeline")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="move_forward", referencedColumnName="pk")
     * })
     */
    private $moveForward;

    /**
     * @var ActionTimeline
     *
     * @ORM\ManyToOne(targetEntity="ActionTimeline")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idle", referencedColumnName="pk")
     * })
     */
    private $idle;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getExtra(): ?ActionTimeline
    {
        return $this->extra;
    }

    public function setExtra(?ActionTimeline $extra): self
    {
        $this->extra = $extra;

        return $this;
    }

    public function getMoveTurnRight(): ?ActionTimeline
    {
        return $this->moveTurnRight;
    }

    public function setMoveTurnRight(?ActionTimeline $moveTurnRight): self
    {
        $this->moveTurnRight = $moveTurnRight;

        return $this;
    }

    public function getMoveTurnLeft(): ?ActionTimeline
    {
        return $this->moveTurnLeft;
    }

    public function setMoveTurnLeft(?ActionTimeline $moveTurnLeft): self
    {
        $this->moveTurnLeft = $moveTurnLeft;

        return $this;
    }

    public function getMoveDown(): ?ActionTimeline
    {
        return $this->moveDown;
    }

    public function setMoveDown(?ActionTimeline $moveDown): self
    {
        $this->moveDown = $moveDown;

        return $this;
    }

    public function getMoveUp(): ?ActionTimeline
    {
        return $this->moveUp;
    }

    public function setMoveUp(?ActionTimeline $moveUp): self
    {
        $this->moveUp = $moveUp;

        return $this;
    }

    public function getMoveRight(): ?ActionTimeline
    {
        return $this->moveRight;
    }

    public function setMoveRight(?ActionTimeline $moveRight): self
    {
        $this->moveRight = $moveRight;

        return $this;
    }

    public function getMoveLeft(): ?ActionTimeline
    {
        return $this->moveLeft;
    }

    public function setMoveLeft(?ActionTimeline $moveLeft): self
    {
        $this->moveLeft = $moveLeft;

        return $this;
    }

    public function getMoveBack(): ?ActionTimeline
    {
        return $this->moveBack;
    }

    public function setMoveBack(?ActionTimeline $moveBack): self
    {
        $this->moveBack = $moveBack;

        return $this;
    }

    public function getMoveForward(): ?ActionTimeline
    {
        return $this->moveForward;
    }

    public function setMoveForward(?ActionTimeline $moveForward): self
    {
        $this->moveForward = $moveForward;

        return $this;
    }

    public function getIdle(): ?ActionTimeline
    {
        return $this->idle;
    }

    public function setIdle(?ActionTimeline $idle): self
    {
        $this->idle = $idle;

        return $this;
    }
}
