<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WeeklyBingoOrderData.
 *
 * @ORM\Table(name="weekly_bingo_order_data", indexes={@ORM\Index(name="idx_c2b8a35f3b8ba7c7", columns={"text"})})
 * @ORM\Entity
 */
class WeeklyBingoOrderData
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="weekly_bingo_order_data_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="type", type="bigint", nullable=true)
     */
    private $type;

    /**
     * @var int|null
     *
     * @ORM\Column(name="data", type="integer", nullable=true)
     */
    private $data;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_3", type="integer", nullable=true)
     */
    private $column3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="icon", type="integer", nullable=true)
     */
    private $icon;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_6", type="integer", nullable=true)
     */
    private $column6;

    /**
     * @var WeeklyBingoText
     *
     * @ORM\ManyToOne(targetEntity="WeeklyBingoText")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="text", referencedColumnName="pk")
     * })
     */
    private $text;

    public function getPk(): ?int
    {
        return $this->pk;
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

    public function getData(): ?int
    {
        return $this->data;
    }

    public function setData(?int $data): self
    {
        $this->data = $data;

        return $this;
    }

    public function getColumn3(): ?int
    {
        return $this->column3;
    }

    public function setColumn3(?int $column3): self
    {
        $this->column3 = $column3;

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

    public function getColumn6(): ?int
    {
        return $this->column6;
    }

    public function setColumn6(?int $column6): self
    {
        $this->column6 = $column6;

        return $this;
    }

    public function getText(): ?WeeklyBingoText
    {
        return $this->text;
    }

    public function setText(?WeeklyBingoText $text): self
    {
        $this->text = $text;

        return $this;
    }
}
