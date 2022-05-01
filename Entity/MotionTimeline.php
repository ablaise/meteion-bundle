<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MotionTimeline.
 *
 * @ORM\Table(name="motion_timeline")
 * @ORM\Entity
 */
class MotionTimeline
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="motion_timeline_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var string|null
     *
     * @ORM\Column(name="filename", type="string", length=255, nullable=true)
     */
    private $filename;

    /**
     * @var int|null
     *
     * @ORM\Column(name="blend_group", type="integer", nullable=true)
     */
    private $blendGroup;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_loop", type="boolean", nullable=true)
     */
    private $isLoop;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_blink_enable", type="boolean", nullable=true)
     */
    private $isBlinkEnable;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_lip_enable", type="boolean", nullable=true)
     */
    private $isLipEnable;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getFilename(): ?string
    {
        return $this->filename;
    }

    public function setFilename(?string $filename): self
    {
        $this->filename = $filename;

        return $this;
    }

    public function getBlendGroup(): ?int
    {
        return $this->blendGroup;
    }

    public function setBlendGroup(?int $blendGroup): self
    {
        $this->blendGroup = $blendGroup;

        return $this;
    }

    public function getIsLoop(): ?bool
    {
        return $this->isLoop;
    }

    public function setIsLoop(?bool $isLoop): self
    {
        $this->isLoop = $isLoop;

        return $this;
    }

    public function getIsBlinkEnable(): ?bool
    {
        return $this->isBlinkEnable;
    }

    public function setIsBlinkEnable(?bool $isBlinkEnable): self
    {
        $this->isBlinkEnable = $isBlinkEnable;

        return $this;
    }

    public function getIsLipEnable(): ?bool
    {
        return $this->isLipEnable;
    }

    public function setIsLipEnable(?bool $isLipEnable): self
    {
        $this->isLipEnable = $isLipEnable;

        return $this;
    }
}
