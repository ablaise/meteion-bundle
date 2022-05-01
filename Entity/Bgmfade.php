<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bgmfade.
 *
 * @ORM\Table(name="bgmfade", indexes={@ORM\Index(name="idx_9e073c10e16b46b8", columns={"bgmfade_type"})})
 * @ORM\Entity
 */
class Bgmfade
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="bgmfade_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="scene_out", type="integer", nullable=true)
     */
    private $sceneOut;

    /**
     * @var int|null
     *
     * @ORM\Column(name="scene_in", type="integer", nullable=true)
     */
    private $sceneIn;

    /**
     * @var BgmfadeType
     *
     * @ORM\ManyToOne(targetEntity="BgmfadeType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="bgmfade_type", referencedColumnName="pk")
     * })
     */
    private $bgmfadeType;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getSceneOut(): ?int
    {
        return $this->sceneOut;
    }

    public function setSceneOut(?int $sceneOut): self
    {
        $this->sceneOut = $sceneOut;

        return $this;
    }

    public function getSceneIn(): ?int
    {
        return $this->sceneIn;
    }

    public function setSceneIn(?int $sceneIn): self
    {
        $this->sceneIn = $sceneIn;

        return $this;
    }

    public function getBgmfadeType(): ?BgmfadeType
    {
        return $this->bgmfadeType;
    }

    public function setBgmfadeType(?BgmfadeType $bgmfadeType): self
    {
        $this->bgmfadeType = $bgmfadeType;

        return $this;
    }
}
