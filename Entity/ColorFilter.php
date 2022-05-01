<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ColorFilter.
 *
 * @ORM\Table(name="color_filter")
 * @ORM\Entity
 */
class ColorFilter
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="color_filter_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var string|null
     *
     * @ORM\Column(name="column_1", type="string", length=255, nullable=true)
     */
    private $column1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_2", type="integer", nullable=true)
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
     * @var bool|null
     *
     * @ORM\Column(name="column_5", type="boolean", nullable=true)
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
     * @var string|null
     *
     * @ORM\Column(name="column_8", type="string", length=255, nullable=true)
     */
    private $column8;

    /**
     * @var string|null
     *
     * @ORM\Column(name="column_9", type="string", length=255, nullable=true)
     */
    private $column9;

    /**
     * @var string|null
     *
     * @ORM\Column(name="column_10", type="string", length=255, nullable=true)
     */
    private $column10;

    /**
     * @var string|null
     *
     * @ORM\Column(name="column_11", type="string", length=255, nullable=true)
     */
    private $column11;

    /**
     * @var string|null
     *
     * @ORM\Column(name="column_12", type="string", length=255, nullable=true)
     */
    private $column12;

    /**
     * @var string|null
     *
     * @ORM\Column(name="column_13", type="string", length=255, nullable=true)
     */
    private $column13;

    /**
     * @var string|null
     *
     * @ORM\Column(name="column_14", type="string", length=255, nullable=true)
     */
    private $column14;

    /**
     * @var string|null
     *
     * @ORM\Column(name="column_15", type="string", length=255, nullable=true)
     */
    private $column15;

    /**
     * @var string|null
     *
     * @ORM\Column(name="column_16", type="string", length=255, nullable=true)
     */
    private $column16;

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

    public function getColumn2(): ?int
    {
        return $this->column2;
    }

    public function setColumn2(?int $column2): self
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

    public function getColumn5(): ?bool
    {
        return $this->column5;
    }

    public function setColumn5(?bool $column5): self
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

    public function getColumn8(): ?string
    {
        return $this->column8;
    }

    public function setColumn8(?string $column8): self
    {
        $this->column8 = $column8;

        return $this;
    }

    public function getColumn9(): ?string
    {
        return $this->column9;
    }

    public function setColumn9(?string $column9): self
    {
        $this->column9 = $column9;

        return $this;
    }

    public function getColumn10(): ?string
    {
        return $this->column10;
    }

    public function setColumn10(?string $column10): self
    {
        $this->column10 = $column10;

        return $this;
    }

    public function getColumn11(): ?string
    {
        return $this->column11;
    }

    public function setColumn11(?string $column11): self
    {
        $this->column11 = $column11;

        return $this;
    }

    public function getColumn12(): ?string
    {
        return $this->column12;
    }

    public function setColumn12(?string $column12): self
    {
        $this->column12 = $column12;

        return $this;
    }

    public function getColumn13(): ?string
    {
        return $this->column13;
    }

    public function setColumn13(?string $column13): self
    {
        $this->column13 = $column13;

        return $this;
    }

    public function getColumn14(): ?string
    {
        return $this->column14;
    }

    public function setColumn14(?string $column14): self
    {
        $this->column14 = $column14;

        return $this;
    }

    public function getColumn15(): ?string
    {
        return $this->column15;
    }

    public function setColumn15(?string $column15): self
    {
        $this->column15 = $column15;

        return $this;
    }

    public function getColumn16(): ?string
    {
        return $this->column16;
    }

    public function setColumn16(?string $column16): self
    {
        $this->column16 = $column16;

        return $this;
    }
}
