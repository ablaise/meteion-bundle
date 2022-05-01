<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CreditList.
 *
 * @ORM\Table(name="credit_list", indexes={@ORM\Index(name="idx_430a472512b8b9f6", columns={"cast"}), @ORM\Index(name="idx_430a4725d09408d2", columns={"font"})})
 * @ORM\Entity
 */
class CreditList
{
    /**
     * @var string
     *
     * @ORM\Column(name="pk", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="credit_list_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="scale", type="bigint", nullable=true)
     */
    private $scale;

    /**
     * @var int|null
     *
     * @ORM\Column(name="icon", type="integer", nullable=true)
     */
    private $icon;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_4", type="integer", nullable=true)
     */
    private $column4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_5", type="integer", nullable=true)
     */
    private $column5;

    /**
     * @var CreditListText
     *
     * @ORM\ManyToOne(targetEntity="CreditListText")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cast", referencedColumnName="pk")
     * })
     */
    private $cast;

    /**
     * @var CreditFont
     *
     * @ORM\ManyToOne(targetEntity="CreditFont")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="font", referencedColumnName="pk")
     * })
     */
    private $font;

    public function getPk(): ?string
    {
        return $this->pk;
    }

    public function getScale(): ?string
    {
        return $this->scale;
    }

    public function setScale(?string $scale): self
    {
        $this->scale = $scale;

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

    public function getColumn4(): ?int
    {
        return $this->column4;
    }

    public function setColumn4(?int $column4): self
    {
        $this->column4 = $column4;

        return $this;
    }

    public function getColumn5(): ?int
    {
        return $this->column5;
    }

    public function setColumn5(?int $column5): self
    {
        $this->column5 = $column5;

        return $this;
    }

    public function getCast(): ?CreditListText
    {
        return $this->cast;
    }

    public function setCast(?CreditListText $cast): self
    {
        $this->cast = $cast;

        return $this;
    }

    public function getFont(): ?CreditFont
    {
        return $this->font;
    }

    public function setFont(?CreditFont $font): self
    {
        $this->font = $font;

        return $this;
    }
}
