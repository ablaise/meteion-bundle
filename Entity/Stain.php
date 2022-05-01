<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Stain.
 *
 * @ORM\Table(name="stain")
 * @ORM\Entity
 */
class Stain
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="stain_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="color", type="integer", nullable=true)
     */
    private $color;

    /**
     * @var int|null
     *
     * @ORM\Column(name="shade", type="integer", nullable=true)
     */
    private $shade;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sub_order", type="integer", nullable=true)
     */
    private $subOrder;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_5", type="boolean", nullable=true)
     */
    private $column5;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_6", type="boolean", nullable=true)
     */
    private $column6;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getColor(): ?int
    {
        return $this->color;
    }

    public function setColor(?int $color): self
    {
        $this->color = $color;

        return $this;
    }

    public function getShade(): ?int
    {
        return $this->shade;
    }

    public function setShade(?int $shade): self
    {
        $this->shade = $shade;

        return $this;
    }

    public function getSubOrder(): ?int
    {
        return $this->subOrder;
    }

    public function setSubOrder(?int $subOrder): self
    {
        $this->subOrder = $subOrder;

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

    public function getColumn5(): ?bool
    {
        return $this->column5;
    }

    public function setColumn5(?bool $column5): self
    {
        $this->column5 = $column5;

        return $this;
    }

    public function getColumn6(): ?bool
    {
        return $this->column6;
    }

    public function setColumn6(?bool $column6): self
    {
        $this->column6 = $column6;

        return $this;
    }
}
