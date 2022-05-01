<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TerritoryIntendedUse.
 *
 * @ORM\Table(name="territory_intended_use")
 * @ORM\Entity
 */
class TerritoryIntendedUse
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="territory_intended_use_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_1", type="boolean", nullable=true)
     */
    private $column1;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_2", type="boolean", nullable=true)
     */
    private $column2;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_3", type="boolean", nullable=true)
     */
    private $column3;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_4", type="boolean", nullable=true)
     */
    private $column4;

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

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_7", type="boolean", nullable=true)
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
     * @var bool|null
     *
     * @ORM\Column(name="column_16", type="boolean", nullable=true)
     */
    private $column16;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_17", type="boolean", nullable=true)
     */
    private $column17;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_18", type="boolean", nullable=true)
     */
    private $column18;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_19", type="bigint", nullable=true)
     */
    private $column19;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_20", type="integer", nullable=true)
     */
    private $column20;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_21", type="boolean", nullable=true)
     */
    private $column21;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_22", type="boolean", nullable=true)
     */
    private $column22;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_23", type="boolean", nullable=true)
     */
    private $column23;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_24", type="boolean", nullable=true)
     */
    private $column24;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_25", type="boolean", nullable=true)
     */
    private $column25;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_26", type="boolean", nullable=true)
     */
    private $column26;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_27", type="boolean", nullable=true)
     */
    private $column27;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_28", type="boolean", nullable=true)
     */
    private $column28;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_29", type="boolean", nullable=true)
     */
    private $column29;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_30", type="boolean", nullable=true)
     */
    private $column30;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_31", type="boolean", nullable=true)
     */
    private $column31;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_32", type="boolean", nullable=true)
     */
    private $column32;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_33", type="integer", nullable=true)
     */
    private $column33;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_34", type="boolean", nullable=true)
     */
    private $column34;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_35", type="boolean", nullable=true)
     */
    private $column35;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_36", type="integer", nullable=true)
     */
    private $column36;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_37", type="boolean", nullable=true)
     */
    private $column37;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_38", type="boolean", nullable=true)
     */
    private $column38;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_39", type="boolean", nullable=true)
     */
    private $column39;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_40", type="boolean", nullable=true)
     */
    private $column40;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getColumn1(): ?bool
    {
        return $this->column1;
    }

    public function setColumn1(?bool $column1): self
    {
        $this->column1 = $column1;

        return $this;
    }

    public function getColumn2(): ?bool
    {
        return $this->column2;
    }

    public function setColumn2(?bool $column2): self
    {
        $this->column2 = $column2;

        return $this;
    }

    public function getColumn3(): ?bool
    {
        return $this->column3;
    }

    public function setColumn3(?bool $column3): self
    {
        $this->column3 = $column3;

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

    public function getColumn7(): ?bool
    {
        return $this->column7;
    }

    public function setColumn7(?bool $column7): self
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

    public function getColumn16(): ?bool
    {
        return $this->column16;
    }

    public function setColumn16(?bool $column16): self
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

    public function getColumn18(): ?bool
    {
        return $this->column18;
    }

    public function setColumn18(?bool $column18): self
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

    public function getColumn20(): ?int
    {
        return $this->column20;
    }

    public function setColumn20(?int $column20): self
    {
        $this->column20 = $column20;

        return $this;
    }

    public function getColumn21(): ?bool
    {
        return $this->column21;
    }

    public function setColumn21(?bool $column21): self
    {
        $this->column21 = $column21;

        return $this;
    }

    public function getColumn22(): ?bool
    {
        return $this->column22;
    }

    public function setColumn22(?bool $column22): self
    {
        $this->column22 = $column22;

        return $this;
    }

    public function getColumn23(): ?bool
    {
        return $this->column23;
    }

    public function setColumn23(?bool $column23): self
    {
        $this->column23 = $column23;

        return $this;
    }

    public function getColumn24(): ?bool
    {
        return $this->column24;
    }

    public function setColumn24(?bool $column24): self
    {
        $this->column24 = $column24;

        return $this;
    }

    public function getColumn25(): ?bool
    {
        return $this->column25;
    }

    public function setColumn25(?bool $column25): self
    {
        $this->column25 = $column25;

        return $this;
    }

    public function getColumn26(): ?bool
    {
        return $this->column26;
    }

    public function setColumn26(?bool $column26): self
    {
        $this->column26 = $column26;

        return $this;
    }

    public function getColumn27(): ?bool
    {
        return $this->column27;
    }

    public function setColumn27(?bool $column27): self
    {
        $this->column27 = $column27;

        return $this;
    }

    public function getColumn28(): ?bool
    {
        return $this->column28;
    }

    public function setColumn28(?bool $column28): self
    {
        $this->column28 = $column28;

        return $this;
    }

    public function getColumn29(): ?bool
    {
        return $this->column29;
    }

    public function setColumn29(?bool $column29): self
    {
        $this->column29 = $column29;

        return $this;
    }

    public function getColumn30(): ?bool
    {
        return $this->column30;
    }

    public function setColumn30(?bool $column30): self
    {
        $this->column30 = $column30;

        return $this;
    }

    public function getColumn31(): ?bool
    {
        return $this->column31;
    }

    public function setColumn31(?bool $column31): self
    {
        $this->column31 = $column31;

        return $this;
    }

    public function getColumn32(): ?bool
    {
        return $this->column32;
    }

    public function setColumn32(?bool $column32): self
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

    public function getColumn34(): ?bool
    {
        return $this->column34;
    }

    public function setColumn34(?bool $column34): self
    {
        $this->column34 = $column34;

        return $this;
    }

    public function getColumn35(): ?bool
    {
        return $this->column35;
    }

    public function setColumn35(?bool $column35): self
    {
        $this->column35 = $column35;

        return $this;
    }

    public function getColumn36(): ?int
    {
        return $this->column36;
    }

    public function setColumn36(?int $column36): self
    {
        $this->column36 = $column36;

        return $this;
    }

    public function getColumn37(): ?bool
    {
        return $this->column37;
    }

    public function setColumn37(?bool $column37): self
    {
        $this->column37 = $column37;

        return $this;
    }

    public function getColumn38(): ?bool
    {
        return $this->column38;
    }

    public function setColumn38(?bool $column38): self
    {
        $this->column38 = $column38;

        return $this;
    }

    public function getColumn39(): ?bool
    {
        return $this->column39;
    }

    public function setColumn39(?bool $column39): self
    {
        $this->column39 = $column39;

        return $this;
    }

    public function getColumn40(): ?bool
    {
        return $this->column40;
    }

    public function setColumn40(?bool $column40): self
    {
        $this->column40 = $column40;

        return $this;
    }
}
