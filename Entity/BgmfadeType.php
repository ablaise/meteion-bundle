<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BgmfadeType.
 *
 * @ORM\Table(name="bgmfade_type")
 * @ORM\Entity
 */
class BgmfadeType
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="bgmfade_type_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fade_out_time", type="string", length=255, nullable=true)
     */
    private $fadeOutTime;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fade_in_time", type="string", length=255, nullable=true)
     */
    private $fadeInTime;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fade_in_start_time", type="string", length=255, nullable=true)
     */
    private $fadeInStartTime;

    /**
     * @var string|null
     *
     * @ORM\Column(name="resume_fade_in_time", type="string", length=255, nullable=true)
     */
    private $resumeFadeInTime;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getFadeOutTime(): ?string
    {
        return $this->fadeOutTime;
    }

    public function setFadeOutTime(?string $fadeOutTime): self
    {
        $this->fadeOutTime = $fadeOutTime;

        return $this;
    }

    public function getFadeInTime(): ?string
    {
        return $this->fadeInTime;
    }

    public function setFadeInTime(?string $fadeInTime): self
    {
        $this->fadeInTime = $fadeInTime;

        return $this;
    }

    public function getFadeInStartTime(): ?string
    {
        return $this->fadeInStartTime;
    }

    public function setFadeInStartTime(?string $fadeInStartTime): self
    {
        $this->fadeInStartTime = $fadeInStartTime;

        return $this;
    }

    public function getResumeFadeInTime(): ?string
    {
        return $this->resumeFadeInTime;
    }

    public function setResumeFadeInTime(?string $resumeFadeInTime): self
    {
        $this->resumeFadeInTime = $resumeFadeInTime;

        return $this;
    }
}
