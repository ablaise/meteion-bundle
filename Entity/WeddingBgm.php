<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WeddingBgm.
 *
 * @ORM\Table(name="wedding_bgm", indexes={@ORM\Index(name="idx_183e6b3f33edeea1", columns={"song"})})
 * @ORM\Entity
 */
class WeddingBgm
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="wedding_bgm_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var string|null
     *
     * @ORM\Column(name="song_name", type="string", length=255, nullable=true)
     */
    private $songName;

    /**
     * @var Bgm
     *
     * @ORM\ManyToOne(targetEntity="Bgm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="song", referencedColumnName="pk")
     * })
     */
    private $song;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getSongName(): ?string
    {
        return $this->songName;
    }

    public function setSongName(?string $songName): self
    {
        $this->songName = $songName;

        return $this;
    }

    public function getSong(): ?Bgm
    {
        return $this->song;
    }

    public function setSong(?Bgm $song): self
    {
        $this->song = $song;

        return $this;
    }
}
