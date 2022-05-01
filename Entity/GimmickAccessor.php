<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GimmickAccessor.
 *
 * @ORM\Table(name="gimmick_accessor")
 * @ORM\Entity
 */
class GimmickAccessor
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="gimmick_accessor_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="param0", type="integer", nullable=true)
     */
    private $param0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="param1", type="bigint", nullable=true)
     */
    private $param1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="param2", type="bigint", nullable=true)
     */
    private $param2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="type", type="bigint", nullable=true)
     */
    private $type;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_5", type="bigint", nullable=true)
     */
    private $column5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_6", type="bigint", nullable=true)
     */
    private $column6;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_7", type="bigint", nullable=true)
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
     * @var bool|null
     *
     * @ORM\Column(name="column_10", type="boolean", nullable=true)
     */
    private $column10;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getParam0(): ?int
    {
        return $this->param0;
    }

    public function setParam0(?int $param0): self
    {
        $this->param0 = $param0;

        return $this;
    }

    public function getParam1(): ?string
    {
        return $this->param1;
    }

    public function setParam1(?string $param1): self
    {
        $this->param1 = $param1;

        return $this;
    }

    public function getParam2(): ?string
    {
        return $this->param2;
    }

    public function setParam2(?string $param2): self
    {
        $this->param2 = $param2;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getColumn5(): ?string
    {
        return $this->column5;
    }

    public function setColumn5(?string $column5): self
    {
        $this->column5 = $column5;

        return $this;
    }

    public function getColumn6(): ?string
    {
        return $this->column6;
    }

    public function setColumn6(?string $column6): self
    {
        $this->column6 = $column6;

        return $this;
    }

    public function getColumn7(): ?string
    {
        return $this->column7;
    }

    public function setColumn7(?string $column7): self
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

    public function getColumn10(): ?bool
    {
        return $this->column10;
    }

    public function setColumn10(?bool $column10): self
    {
        $this->column10 = $column10;

        return $this;
    }
}
