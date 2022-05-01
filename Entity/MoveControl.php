<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MoveControl.
 *
 * @ORM\Table(name="move_control")
 * @ORM\Entity
 */
class MoveControl
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="move_control_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var string|null
     *
     * @ORM\Column(name="column_1", type="string", length=255, nullable=true)
     */
    private $column1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="column_2", type="string", length=255, nullable=true)
     */
    private $column2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="column_3", type="string", length=255, nullable=true)
     */
    private $column3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="column_4", type="string", length=255, nullable=true)
     */
    private $column4;

    /**
     * @var string|null
     *
     * @ORM\Column(name="column_5", type="string", length=255, nullable=true)
     */
    private $column5;

    /**
     * @var string|null
     *
     * @ORM\Column(name="column_6", type="string", length=255, nullable=true)
     */
    private $column6;

    /**
     * @var string|null
     *
     * @ORM\Column(name="column_7", type="string", length=255, nullable=true)
     */
    private $column7;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_8", type="integer", nullable=true)
     */
    private $column8;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_9", type="integer", nullable=true)
     */
    private $column9;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_10", type="integer", nullable=true)
     */
    private $column10;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getColumn1(): ?string
    {
        return $this->column1;
    }

    public function setColumn1(?string $column1): self
    {
        $this->column1 = $column1;

        return $this;
    }

    public function getColumn2(): ?string
    {
        return $this->column2;
    }

    public function setColumn2(?string $column2): self
    {
        $this->column2 = $column2;

        return $this;
    }

    public function getColumn3(): ?string
    {
        return $this->column3;
    }

    public function setColumn3(?string $column3): self
    {
        $this->column3 = $column3;

        return $this;
    }

    public function getColumn4(): ?string
    {
        return $this->column4;
    }

    public function setColumn4(?string $column4): self
    {
        $this->column4 = $column4;

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

    public function getColumn8(): ?int
    {
        return $this->column8;
    }

    public function setColumn8(?int $column8): self
    {
        $this->column8 = $column8;

        return $this;
    }

    public function getColumn9(): ?int
    {
        return $this->column9;
    }

    public function setColumn9(?int $column9): self
    {
        $this->column9 = $column9;

        return $this;
    }

    public function getColumn10(): ?int
    {
        return $this->column10;
    }

    public function setColumn10(?int $column10): self
    {
        $this->column10 = $column10;

        return $this;
    }
}
