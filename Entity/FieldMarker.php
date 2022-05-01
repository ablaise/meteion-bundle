<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FieldMarker.
 *
 * @ORM\Table(name="field_marker", indexes={@ORM\Index(name="idx_a88bacfcc244f8df", columns={"vfx"})})
 * @ORM\Entity
 */
class FieldMarker
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="field_marker_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ui_icon", type="integer", nullable=true)
     */
    private $uiIcon;

    /**
     * @var int|null
     *
     * @ORM\Column(name="map_icon", type="integer", nullable=true)
     */
    private $mapIcon;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

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

    public function getUiIcon(): ?int
    {
        return $this->uiIcon;
    }

    public function setUiIcon(?int $uiIcon): self
    {
        $this->uiIcon = $uiIcon;

        return $this;
    }

    public function getMapIcon(): ?int
    {
        return $this->mapIcon;
    }

    public function setMapIcon(?int $mapIcon): self
    {
        $this->mapIcon = $mapIcon;

        return $this;
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
