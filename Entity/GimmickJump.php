<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GimmickJump.
 *
 * @ORM\Table(name="gimmick_jump", indexes={@ORM\Index(name="idx_aece9107af8eac1e", columns={"loop_motion"}), @ORM\Index(name="idx_aece910785e5ca20", columns={"end_motion"})})
 * @ORM\Entity
 */
class GimmickJump
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="gimmick_jump_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fall_damage", type="bigint", nullable=true)
     */
    private $fallDamage;

    /**
     * @var int|null
     *
     * @ORM\Column(name="height", type="integer", nullable=true)
     */
    private $height;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="start_client", type="boolean", nullable=true)
     */
    private $startClient;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_6", type="boolean", nullable=true)
     */
    private $column6;

    /**
     * @var ActionTimeline
     *
     * @ORM\ManyToOne(targetEntity="ActionTimeline")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="end_motion", referencedColumnName="pk")
     * })
     */
    private $endMotion;

    /**
     * @var ActionTimeline
     *
     * @ORM\ManyToOne(targetEntity="ActionTimeline")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="loop_motion", referencedColumnName="pk")
     * })
     */
    private $loopMotion;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getFallDamage(): ?string
    {
        return $this->fallDamage;
    }

    public function setFallDamage(?string $fallDamage): self
    {
        $this->fallDamage = $fallDamage;

        return $this;
    }

    public function getHeight(): ?int
    {
        return $this->height;
    }

    public function setHeight(?int $height): self
    {
        $this->height = $height;

        return $this;
    }

    public function getStartClient(): ?bool
    {
        return $this->startClient;
    }

    public function setStartClient(?bool $startClient): self
    {
        $this->startClient = $startClient;

        return $this;
    }

    public function getColumn6(): ?bool
    {
        return $this->column6;
    }

    public function setColumn6(?bool $column6): self
    {
        $this->column6 = $column6;

        return $this;
    }

    public function getEndMotion(): ?ActionTimeline
    {
        return $this->endMotion;
    }

    public function setEndMotion(?ActionTimeline $endMotion): self
    {
        $this->endMotion = $endMotion;

        return $this;
    }

    public function getLoopMotion(): ?ActionTimeline
    {
        return $this->loopMotion;
    }

    public function setLoopMotion(?ActionTimeline $loopMotion): self
    {
        $this->loopMotion = $loopMotion;

        return $this;
    }
}
