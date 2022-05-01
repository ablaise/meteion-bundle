<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MoveVfx.
 *
 * @ORM\Table(name="move_vfx", indexes={@ORM\Index(name="idx_71f07ed73cf450c6", columns={"vfxnormal"}), @ORM\Index(name="idx_71f07ed77d3d75cb", columns={"vfxwalking"})})
 * @ORM\Entity
 */
class MoveVfx
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="move_vfx_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var Vfx
     *
     * @ORM\ManyToOne(targetEntity="Vfx")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="vfxwalking", referencedColumnName="pk")
     * })
     */
    private $vfxwalking;

    /**
     * @var Vfx
     *
     * @ORM\ManyToOne(targetEntity="Vfx")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="vfxnormal", referencedColumnName="pk")
     * })
     */
    private $vfxnormal;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getVfxwalking(): ?Vfx
    {
        return $this->vfxwalking;
    }

    public function setVfxwalking(?Vfx $vfxwalking): self
    {
        $this->vfxwalking = $vfxwalking;

        return $this;
    }

    public function getVfxnormal(): ?Vfx
    {
        return $this->vfxnormal;
    }

    public function setVfxnormal(?Vfx $vfxnormal): self
    {
        $this->vfxnormal = $vfxnormal;

        return $this;
    }
}
