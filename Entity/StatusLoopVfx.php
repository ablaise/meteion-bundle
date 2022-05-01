<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * StatusLoopVfx.
 *
 * @ORM\Table(name="status_loop_vfx", indexes={@ORM\Index(name="idx_ac599230c244f8df", columns={"vfx"}), @ORM\Index(name="idx_ac599230c7b35b0", columns={"vfx2"}), @ORM\Index(name="idx_ac5992307b7c0526", columns={"vfx3"})})
 * @ORM\Entity
 */
class StatusLoopVfx
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="status_loop_vfx_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_2", type="integer", nullable=true)
     */
    private $column2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_4", type="integer", nullable=true)
     */
    private $column4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_6", type="integer", nullable=true)
     */
    private $column6;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_7", type="integer", nullable=true)
     */
    private $column7;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_8", type="boolean", nullable=true)
     */
    private $column8;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_9", type="boolean", nullable=true)
     */
    private $column9;

    /**
     * @var Vfx
     *
     * @ORM\ManyToOne(targetEntity="Vfx")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="vfx3", referencedColumnName="pk")
     * })
     */
    private $vfx3;

    /**
     * @var Vfx
     *
     * @ORM\ManyToOne(targetEntity="Vfx")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="vfx2", referencedColumnName="pk")
     * })
     */
    private $vfx2;

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

    public function getColumn2(): ?int
    {
        return $this->column2;
    }

    public function setColumn2(?int $column2): self
    {
        $this->column2 = $column2;

        return $this;
    }

    public function getColumn4(): ?int
    {
        return $this->column4;
    }

    public function setColumn4(?int $column4): self
    {
        $this->column4 = $column4;

        return $this;
    }

    public function getColumn6(): ?int
    {
        return $this->column6;
    }

    public function setColumn6(?int $column6): self
    {
        $this->column6 = $column6;

        return $this;
    }

    public function getColumn7(): ?int
    {
        return $this->column7;
    }

    public function setColumn7(?int $column7): self
    {
        $this->column7 = $column7;

        return $this;
    }

    public function getColumn8(): ?bool
    {
        return $this->column8;
    }

    public function setColumn8(?bool $column8): self
    {
        $this->column8 = $column8;

        return $this;
    }

    public function getColumn9(): ?bool
    {
        return $this->column9;
    }

    public function setColumn9(?bool $column9): self
    {
        $this->column9 = $column9;

        return $this;
    }

    public function getVfx3(): ?Vfx
    {
        return $this->vfx3;
    }

    public function setVfx3(?Vfx $vfx3): self
    {
        $this->vfx3 = $vfx3;

        return $this;
    }

    public function getVfx2(): ?Vfx
    {
        return $this->vfx2;
    }

    public function setVfx2(?Vfx $vfx2): self
    {
        $this->vfx2 = $vfx2;

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
