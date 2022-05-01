<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * StatusHitEffect.
 *
 * @ORM\Table(name="status_hit_effect", indexes={@ORM\Index(name="idx_2a0cc9ee5e9e89cb", columns={"location"})})
 * @ORM\Entity
 */
class StatusHitEffect
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="status_hit_effect_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var Vfx
     *
     * @ORM\ManyToOne(targetEntity="Vfx")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="location", referencedColumnName="pk")
     * })
     */
    private $location;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getLocation(): ?Vfx
    {
        return $this->location;
    }

    public function setLocation(?Vfx $location): self
    {
        $this->location = $location;

        return $this;
    }
}
