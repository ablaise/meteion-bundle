<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CutsceneMotion.
 *
 * @ORM\Table(name="cutscene_motion")
 * @ORM\Entity
 */
class CutsceneMotion
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="cutscene_motion_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var string|null
     *
     * @ORM\Column(name="walk_loop_speed", type="string", length=255, nullable=true)
     */
    private $walkLoopSpeed;

    /**
     * @var string|null
     *
     * @ORM\Column(name="run_loop_speed", type="string", length=255, nullable=true)
     */
    private $runLoopSpeed;

    /**
     * @var string|null
     *
     * @ORM\Column(name="slowwalk_loop_speed", type="string", length=255, nullable=true)
     */
    private $slowwalkLoopSpeed;

    /**
     * @var string|null
     *
     * @ORM\Column(name="slowrun_loop_speed", type="string", length=255, nullable=true)
     */
    private $slowrunLoopSpeed;

    /**
     * @var string|null
     *
     * @ORM\Column(name="battlewalk_loop_speed", type="string", length=255, nullable=true)
     */
    private $battlewalkLoopSpeed;

    /**
     * @var string|null
     *
     * @ORM\Column(name="battlerun_loop_speed", type="string", length=255, nullable=true)
     */
    private $battlerunLoopSpeed;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dash_loop_speed", type="string", length=255, nullable=true)
     */
    private $dashLoopSpeed;

    /**
     * @var int|null
     *
     * @ORM\Column(name="turn_cw90_frame", type="integer", nullable=true)
     */
    private $turnCw90Frame;

    /**
     * @var int|null
     *
     * @ORM\Column(name="turn_ccw90_frame", type="integer", nullable=true)
     */
    private $turnCcw90Frame;

    /**
     * @var int|null
     *
     * @ORM\Column(name="turn_cw180_frame", type="integer", nullable=true)
     */
    private $turnCw180Frame;

    /**
     * @var int|null
     *
     * @ORM\Column(name="turn_ccw180_frame", type="integer", nullable=true)
     */
    private $turnCcw180Frame;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getWalkLoopSpeed(): ?string
    {
        return $this->walkLoopSpeed;
    }

    public function setWalkLoopSpeed(?string $walkLoopSpeed): self
    {
        $this->walkLoopSpeed = $walkLoopSpeed;

        return $this;
    }

    public function getRunLoopSpeed(): ?string
    {
        return $this->runLoopSpeed;
    }

    public function setRunLoopSpeed(?string $runLoopSpeed): self
    {
        $this->runLoopSpeed = $runLoopSpeed;

        return $this;
    }

    public function getSlowwalkLoopSpeed(): ?string
    {
        return $this->slowwalkLoopSpeed;
    }

    public function setSlowwalkLoopSpeed(?string $slowwalkLoopSpeed): self
    {
        $this->slowwalkLoopSpeed = $slowwalkLoopSpeed;

        return $this;
    }

    public function getSlowrunLoopSpeed(): ?string
    {
        return $this->slowrunLoopSpeed;
    }

    public function setSlowrunLoopSpeed(?string $slowrunLoopSpeed): self
    {
        $this->slowrunLoopSpeed = $slowrunLoopSpeed;

        return $this;
    }

    public function getBattlewalkLoopSpeed(): ?string
    {
        return $this->battlewalkLoopSpeed;
    }

    public function setBattlewalkLoopSpeed(?string $battlewalkLoopSpeed): self
    {
        $this->battlewalkLoopSpeed = $battlewalkLoopSpeed;

        return $this;
    }

    public function getBattlerunLoopSpeed(): ?string
    {
        return $this->battlerunLoopSpeed;
    }

    public function setBattlerunLoopSpeed(?string $battlerunLoopSpeed): self
    {
        $this->battlerunLoopSpeed = $battlerunLoopSpeed;

        return $this;
    }

    public function getDashLoopSpeed(): ?string
    {
        return $this->dashLoopSpeed;
    }

    public function setDashLoopSpeed(?string $dashLoopSpeed): self
    {
        $this->dashLoopSpeed = $dashLoopSpeed;

        return $this;
    }

    public function getTurnCw90Frame(): ?int
    {
        return $this->turnCw90Frame;
    }

    public function setTurnCw90Frame(?int $turnCw90Frame): self
    {
        $this->turnCw90Frame = $turnCw90Frame;

        return $this;
    }

    public function getTurnCcw90Frame(): ?int
    {
        return $this->turnCcw90Frame;
    }

    public function setTurnCcw90Frame(?int $turnCcw90Frame): self
    {
        $this->turnCcw90Frame = $turnCcw90Frame;

        return $this;
    }

    public function getTurnCw180Frame(): ?int
    {
        return $this->turnCw180Frame;
    }

    public function setTurnCw180Frame(?int $turnCw180Frame): self
    {
        $this->turnCw180Frame = $turnCw180Frame;

        return $this;
    }

    public function getTurnCcw180Frame(): ?int
    {
        return $this->turnCcw180Frame;
    }

    public function setTurnCcw180Frame(?int $turnCcw180Frame): self
    {
        $this->turnCcw180Frame = $turnCcw180Frame;

        return $this;
    }
}
