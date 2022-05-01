<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ModelChara.
 *
 * @ORM\Table(name="model_chara")
 * @ORM\Entity
 */
class ModelChara
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="model_chara_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="type", type="integer", nullable=true)
     */
    private $type;

    /**
     * @var int|null
     *
     * @ORM\Column(name="model", type="bigint", nullable=true)
     */
    private $model;

    /**
     * @var int|null
     *
     * @ORM\Column(name="base", type="integer", nullable=true)
     */
    private $base;

    /**
     * @var int|null
     *
     * @ORM\Column(name="variant", type="integer", nullable=true)
     */
    private $variant;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sepack", type="bigint", nullable=true)
     */
    private $sepack;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_6", type="integer", nullable=true)
     */
    private $column6;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_7", type="boolean", nullable=true)
     */
    private $column7;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="pap_variation", type="boolean", nullable=true)
     */
    private $papVariation;

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
     * @var bool|null
     *
     * @ORM\Column(name="column_11", type="boolean", nullable=true)
     */
    private $column11;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_12", type="boolean", nullable=true)
     */
    private $column12;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_13", type="boolean", nullable=true)
     */
    private $column13;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_14", type="boolean", nullable=true)
     */
    private $column14;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_15", type="boolean", nullable=true)
     */
    private $column15;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_16", type="integer", nullable=true)
     */
    private $column16;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_17", type="boolean", nullable=true)
     */
    private $column17;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_18", type="integer", nullable=true)
     */
    private $column18;

    /**
     * @var string|null
     *
     * @ORM\Column(name="column_19", type="string", length=255, nullable=true)
     */
    private $column19;

    /**
     * @var string|null
     *
     * @ORM\Column(name="column_20", type="string", length=255, nullable=true)
     */
    private $column20;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getType(): ?int
    {
        return $this->type;
    }

    public function setType(?int $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getModel(): ?string
    {
        return $this->model;
    }

    public function setModel(?string $model): self
    {
        $this->model = $model;

        return $this;
    }

    public function getBase(): ?int
    {
        return $this->base;
    }

    public function setBase(?int $base): self
    {
        $this->base = $base;

        return $this;
    }

    public function getVariant(): ?int
    {
        return $this->variant;
    }

    public function setVariant(?int $variant): self
    {
        $this->variant = $variant;

        return $this;
    }

    public function getSepack(): ?string
    {
        return $this->sepack;
    }

    public function setSepack(?string $sepack): self
    {
        $this->sepack = $sepack;

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

    public function getColumn7(): ?bool
    {
        return $this->column7;
    }

    public function setColumn7(?bool $column7): self
    {
        $this->column7 = $column7;

        return $this;
    }

    public function getPapVariation(): ?bool
    {
        return $this->papVariation;
    }

    public function setPapVariation(?bool $papVariation): self
    {
        $this->papVariation = $papVariation;

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

    public function getColumn11(): ?bool
    {
        return $this->column11;
    }

    public function setColumn11(?bool $column11): self
    {
        $this->column11 = $column11;

        return $this;
    }

    public function getColumn12(): ?bool
    {
        return $this->column12;
    }

    public function setColumn12(?bool $column12): self
    {
        $this->column12 = $column12;

        return $this;
    }

    public function getColumn13(): ?bool
    {
        return $this->column13;
    }

    public function setColumn13(?bool $column13): self
    {
        $this->column13 = $column13;

        return $this;
    }

    public function getColumn14(): ?bool
    {
        return $this->column14;
    }

    public function setColumn14(?bool $column14): self
    {
        $this->column14 = $column14;

        return $this;
    }

    public function getColumn15(): ?bool
    {
        return $this->column15;
    }

    public function setColumn15(?bool $column15): self
    {
        $this->column15 = $column15;

        return $this;
    }

    public function getColumn16(): ?int
    {
        return $this->column16;
    }

    public function setColumn16(?int $column16): self
    {
        $this->column16 = $column16;

        return $this;
    }

    public function getColumn17(): ?bool
    {
        return $this->column17;
    }

    public function setColumn17(?bool $column17): self
    {
        $this->column17 = $column17;

        return $this;
    }

    public function getColumn18(): ?int
    {
        return $this->column18;
    }

    public function setColumn18(?int $column18): self
    {
        $this->column18 = $column18;

        return $this;
    }

    public function getColumn19(): ?string
    {
        return $this->column19;
    }

    public function setColumn19(?string $column19): self
    {
        $this->column19 = $column19;

        return $this;
    }

    public function getColumn20(): ?string
    {
        return $this->column20;
    }

    public function setColumn20(?string $column20): self
    {
        $this->column20 = $column20;

        return $this;
    }
}
