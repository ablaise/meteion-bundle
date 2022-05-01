<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ContentGauge.
 *
 * @ORM\Table(name="content_gauge", indexes={@ORM\Index(name="idx_c0375af8665648e9", columns={"color"})})
 * @ORM\Entity
 */
class ContentGauge
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="content_gauge_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1", type="integer", nullable=true)
     */
    private $column1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_4", type="boolean", nullable=true)
     */
    private $column4;

    /**
     * @var string|null
     *
     * @ORM\Column(name="text_string", type="string", length=255, nullable=true)
     */
    private $textString;

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

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_11", type="integer", nullable=true)
     */
    private $column11;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_12", type="integer", nullable=true)
     */
    private $column12;

    /**
     * @var ContentGaugeColor
     *
     * @ORM\ManyToOne(targetEntity="ContentGaugeColor")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="color", referencedColumnName="pk")
     * })
     */
    private $color;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getColumn1(): ?int
    {
        return $this->column1;
    }

    public function setColumn1(?int $column1): self
    {
        $this->column1 = $column1;

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

    public function getColumn4(): ?bool
    {
        return $this->column4;
    }

    public function setColumn4(?bool $column4): self
    {
        $this->column4 = $column4;

        return $this;
    }

    public function getTextString(): ?string
    {
        return $this->textString;
    }

    public function setTextString(?string $textString): self
    {
        $this->textString = $textString;

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

    public function getColumn11(): ?int
    {
        return $this->column11;
    }

    public function setColumn11(?int $column11): self
    {
        $this->column11 = $column11;

        return $this;
    }

    public function getColumn12(): ?int
    {
        return $this->column12;
    }

    public function setColumn12(?int $column12): self
    {
        $this->column12 = $column12;

        return $this;
    }

    public function getColor(): ?ContentGaugeColor
    {
        return $this->color;
    }

    public function setColor(?ContentGaugeColor $color): self
    {
        $this->color = $color;

        return $this;
    }
}
