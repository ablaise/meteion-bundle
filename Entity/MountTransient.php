<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MountTransient.
 *
 * @ORM\Table(name="mount_transient")
 * @ORM\Entity
 */
class MountTransient
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="mount_transient_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="string", length=516, nullable=true)
     */
    private $description;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description_enhanced", type="string", length=516, nullable=true)
     */
    private $descriptionEnhanced;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tooltip", type="string", length=516, nullable=true)
     */
    private $tooltip;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getDescriptionEnhanced(): ?string
    {
        return $this->descriptionEnhanced;
    }

    public function setDescriptionEnhanced(?string $descriptionEnhanced): self
    {
        $this->descriptionEnhanced = $descriptionEnhanced;

        return $this;
    }

    public function getTooltip(): ?string
    {
        return $this->tooltip;
    }

    public function setTooltip(?string $tooltip): self
    {
        $this->tooltip = $tooltip;

        return $this;
    }
}
