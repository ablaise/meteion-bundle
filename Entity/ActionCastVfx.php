<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ActionCastVfx.
 *
 * @ORM\Table(name="action_cast_vfx", indexes={@ORM\Index(name="idx_eedf485fc244f8df", columns={"vfx"})})
 * @ORM\Entity
 */
class ActionCastVfx
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="action_cast_vfx_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var Vfx
     *
     * @ORM\ManyToOne(targetEntity="Vfx")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="vfx", referencedColumnName="pk")
     * })
     */
    private $vfx;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getVfx(): ?Vfx
    {
        return $this->vfx;
    }

    public function setVfx(?Vfx $vfx): self
    {
        $this->vfx = $vfx;

        return $this;
    }
}
