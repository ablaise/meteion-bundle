<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ModelSkeleton.
 *
 * @ORM\Table(name="model_skeleton")
 * @ORM\Entity
 */
class ModelSkeleton
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="model_skeleton_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var string|null
     *
     * @ORM\Column(name="radius", type="string", length=255, nullable=true)
     */
    private $radius;

    /**
     * @var string|null
     *
     * @ORM\Column(name="height", type="string", length=255, nullable=true)
     */
    private $height;

    /**
     * @var string|null
     *
     * @ORM\Column(name="vfxscale", type="string", length=255, nullable=true)
     */
    private $vfxscale;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_4", type="bigint", nullable=true)
     */
    private $column4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_5", type="bigint", nullable=true)
     */
    private $column5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_6", type="bigint", nullable=true)
     */
    private $column6;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_7", type="bigint", nullable=true)
     */
    private $column7;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_8", type="bigint", nullable=true)
     */
    private $column8;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_9", type="bigint", nullable=true)
     */
    private $column9;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_10", type="bigint", nullable=true)
     */
    private $column10;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_11", type="bigint", nullable=true)
     */
    private $column11;

    /**
     * @var string|null
     *
     * @ORM\Column(name="float_height", type="string", length=255, nullable=true)
     */
    private $floatHeight;

    /**
     * @var string|null
     *
     * @ORM\Column(name="float_down", type="string", length=255, nullable=true)
     */
    private $floatDown;

    /**
     * @var int|null
     *
     * @ORM\Column(name="float_up", type="bigint", nullable=true)
     */
    private $floatUp;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_15", type="integer", nullable=true)
     */
    private $column15;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="motion_blend_type", type="boolean", nullable=true)
     */
    private $motionBlendType;

    /**
     * @var int|null
     *
     * @ORM\Column(name="loop_fly_se", type="integer", nullable=true)
     */
    private $loopFlySe;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getRadius(): ?string
    {
        return $this->radius;
    }

    public function setRadius(?string $radius): self
    {
        $this->radius = $radius;

        return $this;
    }

    public function getHeight(): ?string
    {
        return $this->height;
    }

    public function setHeight(?string $height): self
    {
        $this->height = $height;

        return $this;
    }

    public function getVfxscale(): ?string
    {
        return $this->vfxscale;
    }

    public function setVfxscale(?string $vfxscale): self
    {
        $this->vfxscale = $vfxscale;

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

    public function getColumn5(): ?string
    {
        return $this->column5;
    }

    public function setColumn5(?string $column5): self
    {
        $this->column5 = $column5;

        return $this;
    }

    public function getColumn6(): ?string
    {
        return $this->column6;
    }

    public function setColumn6(?string $column6): self
    {
        $this->column6 = $column6;

        return $this;
    }

    public function getColumn7(): ?string
    {
        return $this->column7;
    }

    public function setColumn7(?string $column7): self
    {
        $this->column7 = $column7;

        return $this;
    }

    public function getColumn8(): ?string
    {
        return $this->column8;
    }

    public function setColumn8(?string $column8): self
    {
        $this->column8 = $column8;

        return $this;
    }

    public function getColumn9(): ?string
    {
        return $this->column9;
    }

    public function setColumn9(?string $column9): self
    {
        $this->column9 = $column9;

        return $this;
    }

    public function getColumn10(): ?string
    {
        return $this->column10;
    }

    public function setColumn10(?string $column10): self
    {
        $this->column10 = $column10;

        return $this;
    }

    public function getColumn11(): ?string
    {
        return $this->column11;
    }

    public function setColumn11(?string $column11): self
    {
        $this->column11 = $column11;

        return $this;
    }

    public function getFloatHeight(): ?string
    {
        return $this->floatHeight;
    }

    public function setFloatHeight(?string $floatHeight): self
    {
        $this->floatHeight = $floatHeight;

        return $this;
    }

    public function getFloatDown(): ?string
    {
        return $this->floatDown;
    }

    public function setFloatDown(?string $floatDown): self
    {
        $this->floatDown = $floatDown;

        return $this;
    }

    public function getFloatUp(): ?string
    {
        return $this->floatUp;
    }

    public function setFloatUp(?string $floatUp): self
    {
        $this->floatUp = $floatUp;

        return $this;
    }

    public function getColumn15(): ?int
    {
        return $this->column15;
    }

    public function setColumn15(?int $column15): self
    {
        $this->column15 = $column15;

        return $this;
    }

    public function getMotionBlendType(): ?bool
    {
        return $this->motionBlendType;
    }

    public function setMotionBlendType(?bool $motionBlendType): self
    {
        $this->motionBlendType = $motionBlendType;

        return $this;
    }

    public function getLoopFlySe(): ?int
    {
        return $this->loopFlySe;
    }

    public function setLoopFlySe(?int $loopFlySe): self
    {
        $this->loopFlySe = $loopFlySe;

        return $this;
    }
}
