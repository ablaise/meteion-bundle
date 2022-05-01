<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AnimationLod.
 *
 * @ORM\Table(name="animation_lod")
 * @ORM\Entity
 */
class AnimationLod
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="animation_lod_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var string|null
     *
     * @ORM\Column(name="camera_distance", type="string", length=255, nullable=true)
     */
    private $cameraDistance;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sample_interval", type="string", length=255, nullable=true)
     */
    private $sampleInterval;

    /**
     * @var int|null
     *
     * @ORM\Column(name="bone_lod", type="integer", nullable=true)
     */
    private $boneLod;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="animation_enable_0", type="boolean", nullable=true)
     */
    private $animationEnable0;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="animation_enable_1", type="boolean", nullable=true)
     */
    private $animationEnable1;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="animation_enable_2", type="boolean", nullable=true)
     */
    private $animationEnable2;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="animation_enable_3", type="boolean", nullable=true)
     */
    private $animationEnable3;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="animation_enable_4", type="boolean", nullable=true)
     */
    private $animationEnable4;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="animation_enable_5", type="boolean", nullable=true)
     */
    private $animationEnable5;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="animation_enable_6", type="boolean", nullable=true)
     */
    private $animationEnable6;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="animation_enable_7", type="boolean", nullable=true)
     */
    private $animationEnable7;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getCameraDistance(): ?string
    {
        return $this->cameraDistance;
    }

    public function setCameraDistance(?string $cameraDistance): self
    {
        $this->cameraDistance = $cameraDistance;

        return $this;
    }

    public function getSampleInterval(): ?string
    {
        return $this->sampleInterval;
    }

    public function setSampleInterval(?string $sampleInterval): self
    {
        $this->sampleInterval = $sampleInterval;

        return $this;
    }

    public function getBoneLod(): ?int
    {
        return $this->boneLod;
    }

    public function setBoneLod(?int $boneLod): self
    {
        $this->boneLod = $boneLod;

        return $this;
    }

    public function getAnimationEnable0(): ?bool
    {
        return $this->animationEnable0;
    }

    public function setAnimationEnable0(?bool $animationEnable0): self
    {
        $this->animationEnable0 = $animationEnable0;

        return $this;
    }

    public function getAnimationEnable1(): ?bool
    {
        return $this->animationEnable1;
    }

    public function setAnimationEnable1(?bool $animationEnable1): self
    {
        $this->animationEnable1 = $animationEnable1;

        return $this;
    }

    public function getAnimationEnable2(): ?bool
    {
        return $this->animationEnable2;
    }

    public function setAnimationEnable2(?bool $animationEnable2): self
    {
        $this->animationEnable2 = $animationEnable2;

        return $this;
    }

    public function getAnimationEnable3(): ?bool
    {
        return $this->animationEnable3;
    }

    public function setAnimationEnable3(?bool $animationEnable3): self
    {
        $this->animationEnable3 = $animationEnable3;

        return $this;
    }

    public function getAnimationEnable4(): ?bool
    {
        return $this->animationEnable4;
    }

    public function setAnimationEnable4(?bool $animationEnable4): self
    {
        $this->animationEnable4 = $animationEnable4;

        return $this;
    }

    public function getAnimationEnable5(): ?bool
    {
        return $this->animationEnable5;
    }

    public function setAnimationEnable5(?bool $animationEnable5): self
    {
        $this->animationEnable5 = $animationEnable5;

        return $this;
    }

    public function getAnimationEnable6(): ?bool
    {
        return $this->animationEnable6;
    }

    public function setAnimationEnable6(?bool $animationEnable6): self
    {
        $this->animationEnable6 = $animationEnable6;

        return $this;
    }

    public function getAnimationEnable7(): ?bool
    {
        return $this->animationEnable7;
    }

    public function setAnimationEnable7(?bool $animationEnable7): self
    {
        $this->animationEnable7 = $animationEnable7;

        return $this;
    }
}
