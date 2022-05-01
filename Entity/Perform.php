<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Perform.
 *
 * @ORM\Table(name="perform", indexes={@ORM\Index(name="idx_d9e30040ba581576", columns={"stop_animation"}), @ORM\Index(name="idx_d9e30040bc323cef", columns={"animation_start"}), @ORM\Index(name="idx_d9e300406498b8d5", columns={"animation_play02"}), @ORM\Index(name="idx_d9e30040a05ae1b0", columns={"transient"}), @ORM\Index(name="idx_d9e30040dcad5f7d", columns={"animation_end"}), @ORM\Index(name="idx_d9e30040fd91e96f", columns={"animation_play01"}), @ORM\Index(name="idx_d9e300404e2a6ae2", columns={"animation_idle"})})
 * @ORM\Entity
 */
class Perform
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="perform_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_2", type="boolean", nullable=true)
     */
    private $column2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="model_key", type="string", length=255, nullable=true)
     */
    private $modelKey;

    /**
     * @var string|null
     *
     * @ORM\Column(name="instrument", type="string", length=255, nullable=true)
     */
    private $instrument;

    /**
     * @var int|null
     *
     * @ORM\Column(name="order", type="integer", nullable=true)
     */
    private $order;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_13", type="integer", nullable=true)
     */
    private $column13;

    /**
     * @var PerformTransient
     *
     * @ORM\ManyToOne(targetEntity="PerformTransient")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="transient", referencedColumnName="pk")
     * })
     */
    private $transient;

    /**
     * @var ActionTimeline
     *
     * @ORM\ManyToOne(targetEntity="ActionTimeline")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="stop_animation", referencedColumnName="pk")
     * })
     */
    private $stopAnimation;

    /**
     * @var ActionTimeline
     *
     * @ORM\ManyToOne(targetEntity="ActionTimeline")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="animation_play02", referencedColumnName="pk")
     * })
     */
    private $animationPlay02;

    /**
     * @var ActionTimeline
     *
     * @ORM\ManyToOne(targetEntity="ActionTimeline")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="animation_play01", referencedColumnName="pk")
     * })
     */
    private $animationPlay01;

    /**
     * @var ActionTimeline
     *
     * @ORM\ManyToOne(targetEntity="ActionTimeline")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="animation_idle", referencedColumnName="pk")
     * })
     */
    private $animationIdle;

    /**
     * @var ActionTimeline
     *
     * @ORM\ManyToOne(targetEntity="ActionTimeline")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="animation_end", referencedColumnName="pk")
     * })
     */
    private $animationEnd;

    /**
     * @var ActionTimeline
     *
     * @ORM\ManyToOne(targetEntity="ActionTimeline")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="animation_start", referencedColumnName="pk")
     * })
     */
    private $animationStart;

    public function getPk(): ?int
    {
        return $this->pk;
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

    public function getColumn2(): ?bool
    {
        return $this->column2;
    }

    public function setColumn2(?bool $column2): self
    {
        $this->column2 = $column2;

        return $this;
    }

    public function getModelKey(): ?string
    {
        return $this->modelKey;
    }

    public function setModelKey(?string $modelKey): self
    {
        $this->modelKey = $modelKey;

        return $this;
    }

    public function getInstrument(): ?string
    {
        return $this->instrument;
    }

    public function setInstrument(?string $instrument): self
    {
        $this->instrument = $instrument;

        return $this;
    }

    public function getOrder(): ?int
    {
        return $this->order;
    }

    public function setOrder(?int $order): self
    {
        $this->order = $order;

        return $this;
    }

    public function getColumn13(): ?int
    {
        return $this->column13;
    }

    public function setColumn13(?int $column13): self
    {
        $this->column13 = $column13;

        return $this;
    }

    public function getTransient(): ?PerformTransient
    {
        return $this->transient;
    }

    public function setTransient(?PerformTransient $transient): self
    {
        $this->transient = $transient;

        return $this;
    }

    public function getStopAnimation(): ?ActionTimeline
    {
        return $this->stopAnimation;
    }

    public function setStopAnimation(?ActionTimeline $stopAnimation): self
    {
        $this->stopAnimation = $stopAnimation;

        return $this;
    }

    public function getAnimationPlay02(): ?ActionTimeline
    {
        return $this->animationPlay02;
    }

    public function setAnimationPlay02(?ActionTimeline $animationPlay02): self
    {
        $this->animationPlay02 = $animationPlay02;

        return $this;
    }

    public function getAnimationPlay01(): ?ActionTimeline
    {
        return $this->animationPlay01;
    }

    public function setAnimationPlay01(?ActionTimeline $animationPlay01): self
    {
        $this->animationPlay01 = $animationPlay01;

        return $this;
    }

    public function getAnimationIdle(): ?ActionTimeline
    {
        return $this->animationIdle;
    }

    public function setAnimationIdle(?ActionTimeline $animationIdle): self
    {
        $this->animationIdle = $animationIdle;

        return $this;
    }

    public function getAnimationEnd(): ?ActionTimeline
    {
        return $this->animationEnd;
    }

    public function setAnimationEnd(?ActionTimeline $animationEnd): self
    {
        $this->animationEnd = $animationEnd;

        return $this;
    }

    public function getAnimationStart(): ?ActionTimeline
    {
        return $this->animationStart;
    }

    public function setAnimationStart(?ActionTimeline $animationStart): self
    {
        $this->animationStart = $animationStart;

        return $this;
    }
}
