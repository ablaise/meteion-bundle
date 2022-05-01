<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GoldSaucerArcadeMachine.
 *
 * @ORM\Table(name="gold_saucer_arcade_machine")
 * @ORM\Entity
 */
class GoldSaucerArcadeMachine
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="gold_saucer_arcade_machine_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1", type="integer", nullable=true)
     */
    private $column1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_2", type="integer", nullable=true)
     */
    private $column2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_3", type="integer", nullable=true)
     */
    private $column3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_4", type="integer", nullable=true)
     */
    private $column4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_5", type="bigint", nullable=true)
     */
    private $column5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_6", type="integer", nullable=true)
     */
    private $column6;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fail_image", type="integer", nullable=true)
     */
    private $failImage;

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
     * @ORM\Column(name="column_11", type="bigint", nullable=true)
     */
    private $column11;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_12", type="integer", nullable=true)
     */
    private $column12;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_13", type="integer", nullable=true)
     */
    private $column13;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_14", type="integer", nullable=true)
     */
    private $column14;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_15", type="integer", nullable=true)
     */
    private $column15;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_16", type="integer", nullable=true)
     */
    private $column16;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_17", type="integer", nullable=true)
     */
    private $column17;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_18", type="integer", nullable=true)
     */
    private $column18;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_19", type="integer", nullable=true)
     */
    private $column19;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_20", type="integer", nullable=true)
     */
    private $column20;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_21", type="integer", nullable=true)
     */
    private $column21;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_22", type="integer", nullable=true)
     */
    private $column22;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_23", type="integer", nullable=true)
     */
    private $column23;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_24", type="integer", nullable=true)
     */
    private $column24;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_25", type="integer", nullable=true)
     */
    private $column25;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_26", type="integer", nullable=true)
     */
    private $column26;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_27", type="integer", nullable=true)
     */
    private $column27;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_28", type="bigint", nullable=true)
     */
    private $column28;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_29", type="bigint", nullable=true)
     */
    private $column29;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_30", type="bigint", nullable=true)
     */
    private $column30;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_31", type="bigint", nullable=true)
     */
    private $column31;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_32", type="integer", nullable=true)
     */
    private $column32;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_33", type="integer", nullable=true)
     */
    private $column33;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_34", type="integer", nullable=true)
     */
    private $column34;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_35", type="integer", nullable=true)
     */
    private $column35;

    /**
     * @var int|null
     *
     * @ORM\Column(name="poor", type="integer", nullable=true)
     */
    private $poor;

    /**
     * @var int|null
     *
     * @ORM\Column(name="good", type="integer", nullable=true)
     */
    private $good;

    /**
     * @var int|null
     *
     * @ORM\Column(name="great", type="integer", nullable=true)
     */
    private $great;

    /**
     * @var int|null
     *
     * @ORM\Column(name="excellent", type="integer", nullable=true)
     */
    private $excellent;

    /**
     * @var string|null
     *
     * @ORM\Column(name="column_40", type="string", length=266, nullable=true)
     */
    private $column40;

    /**
     * @var string|null
     *
     * @ORM\Column(name="column_41", type="string", length=266, nullable=true)
     */
    private $column41;

    /**
     * @var string|null
     *
     * @ORM\Column(name="column_42", type="string", length=266, nullable=true)
     */
    private $column42;

    /**
     * @var string|null
     *
     * @ORM\Column(name="column_43", type="string", length=266, nullable=true)
     */
    private $column43;

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

    public function getColumn2(): ?int
    {
        return $this->column2;
    }

    public function setColumn2(?int $column2): self
    {
        $this->column2 = $column2;

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

    public function getColumn4(): ?int
    {
        return $this->column4;
    }

    public function setColumn4(?int $column4): self
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

    public function getColumn6(): ?int
    {
        return $this->column6;
    }

    public function setColumn6(?int $column6): self
    {
        $this->column6 = $column6;

        return $this;
    }

    public function getFailImage(): ?int
    {
        return $this->failImage;
    }

    public function setFailImage(?int $failImage): self
    {
        $this->failImage = $failImage;

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

    public function getColumn11(): ?string
    {
        return $this->column11;
    }

    public function setColumn11(?string $column11): self
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

    public function getColumn13(): ?int
    {
        return $this->column13;
    }

    public function setColumn13(?int $column13): self
    {
        $this->column13 = $column13;

        return $this;
    }

    public function getColumn14(): ?int
    {
        return $this->column14;
    }

    public function setColumn14(?int $column14): self
    {
        $this->column14 = $column14;

        return $this;
    }

    public function getColumn15(): ?int
    {
        return $this->column15;
    }

    public function setColumn15(?int $column15): self
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

    public function getColumn17(): ?int
    {
        return $this->column17;
    }

    public function setColumn17(?int $column17): self
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

    public function getColumn19(): ?int
    {
        return $this->column19;
    }

    public function setColumn19(?int $column19): self
    {
        $this->column19 = $column19;

        return $this;
    }

    public function getColumn20(): ?int
    {
        return $this->column20;
    }

    public function setColumn20(?int $column20): self
    {
        $this->column20 = $column20;

        return $this;
    }

    public function getColumn21(): ?int
    {
        return $this->column21;
    }

    public function setColumn21(?int $column21): self
    {
        $this->column21 = $column21;

        return $this;
    }

    public function getColumn22(): ?int
    {
        return $this->column22;
    }

    public function setColumn22(?int $column22): self
    {
        $this->column22 = $column22;

        return $this;
    }

    public function getColumn23(): ?int
    {
        return $this->column23;
    }

    public function setColumn23(?int $column23): self
    {
        $this->column23 = $column23;

        return $this;
    }

    public function getColumn24(): ?int
    {
        return $this->column24;
    }

    public function setColumn24(?int $column24): self
    {
        $this->column24 = $column24;

        return $this;
    }

    public function getColumn25(): ?int
    {
        return $this->column25;
    }

    public function setColumn25(?int $column25): self
    {
        $this->column25 = $column25;

        return $this;
    }

    public function getColumn26(): ?int
    {
        return $this->column26;
    }

    public function setColumn26(?int $column26): self
    {
        $this->column26 = $column26;

        return $this;
    }

    public function getColumn27(): ?int
    {
        return $this->column27;
    }

    public function setColumn27(?int $column27): self
    {
        $this->column27 = $column27;

        return $this;
    }

    public function getColumn28(): ?string
    {
        return $this->column28;
    }

    public function setColumn28(?string $column28): self
    {
        $this->column28 = $column28;

        return $this;
    }

    public function getColumn29(): ?string
    {
        return $this->column29;
    }

    public function setColumn29(?string $column29): self
    {
        $this->column29 = $column29;

        return $this;
    }

    public function getColumn30(): ?string
    {
        return $this->column30;
    }

    public function setColumn30(?string $column30): self
    {
        $this->column30 = $column30;

        return $this;
    }

    public function getColumn31(): ?string
    {
        return $this->column31;
    }

    public function setColumn31(?string $column31): self
    {
        $this->column31 = $column31;

        return $this;
    }

    public function getColumn32(): ?int
    {
        return $this->column32;
    }

    public function setColumn32(?int $column32): self
    {
        $this->column32 = $column32;

        return $this;
    }

    public function getColumn33(): ?int
    {
        return $this->column33;
    }

    public function setColumn33(?int $column33): self
    {
        $this->column33 = $column33;

        return $this;
    }

    public function getColumn34(): ?int
    {
        return $this->column34;
    }

    public function setColumn34(?int $column34): self
    {
        $this->column34 = $column34;

        return $this;
    }

    public function getColumn35(): ?int
    {
        return $this->column35;
    }

    public function setColumn35(?int $column35): self
    {
        $this->column35 = $column35;

        return $this;
    }

    public function getPoor(): ?int
    {
        return $this->poor;
    }

    public function setPoor(?int $poor): self
    {
        $this->poor = $poor;

        return $this;
    }

    public function getGood(): ?int
    {
        return $this->good;
    }

    public function setGood(?int $good): self
    {
        $this->good = $good;

        return $this;
    }

    public function getGreat(): ?int
    {
        return $this->great;
    }

    public function setGreat(?int $great): self
    {
        $this->great = $great;

        return $this;
    }

    public function getExcellent(): ?int
    {
        return $this->excellent;
    }

    public function setExcellent(?int $excellent): self
    {
        $this->excellent = $excellent;

        return $this;
    }

    public function getColumn40(): ?string
    {
        return $this->column40;
    }

    public function setColumn40(?string $column40): self
    {
        $this->column40 = $column40;

        return $this;
    }

    public function getColumn41(): ?string
    {
        return $this->column41;
    }

    public function setColumn41(?string $column41): self
    {
        $this->column41 = $column41;

        return $this;
    }

    public function getColumn42(): ?string
    {
        return $this->column42;
    }

    public function setColumn42(?string $column42): self
    {
        $this->column42 = $column42;

        return $this;
    }

    public function getColumn43(): ?string
    {
        return $this->column43;
    }

    public function setColumn43(?string $column43): self
    {
        $this->column43 = $column43;

        return $this;
    }
}
