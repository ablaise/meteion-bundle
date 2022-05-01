<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PvPselectTrait.
 *
 * @ORM\Table(name="pv_pselect_trait")
 * @ORM\Entity
 */
class PvPselectTrait
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="pv_pselect_trait_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var string|null
     *
     * @ORM\Column(name="effect", type="string", length=255, nullable=true)
     */
    private $effect;

    /**
     * @var int|null
     *
     * @ORM\Column(name="icon", type="integer", nullable=true)
     */
    private $icon;

    /**
     * @var int|null
     *
     * @ORM\Column(name="value", type="integer", nullable=true)
     */
    private $value;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getEffect(): ?string
    {
        return $this->effect;
    }

    public function setEffect(?string $effect): self
    {
        $this->effect = $effect;

        return $this;
    }

    public function getIcon(): ?int
    {
        return $this->icon;
    }

    public function setIcon(?int $icon): self
    {
        $this->icon = $icon;

        return $this;
    }

    public function getValue(): ?int
    {
        return $this->value;
    }

    public function setValue(?int $value): self
    {
        $this->value = $value;

        return $this;
    }
}
