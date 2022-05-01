<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Attributive.
 *
 * @ORM\Table(name="attributive")
 * @ORM\Entity
 */
class Attributive
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="attributive_pk_seq", allocationSize=1, initialValue=1)
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

    /**
     * @var string|null
     *
     * @ORM\Column(name="column_17", type="string", length=255, nullable=true)
     */
    private $column17;

    /**
     * @var string|null
     *
     * @ORM\Column(name="column_18", type="string", length=255, nullable=true)
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

    /**
     * @var string|null
     *
     * @ORM\Column(name="column_21", type="string", length=255, nullable=true)
     */
    private $column21;

    /**
     * @var string|null
     *
     * @ORM\Column(name="column_22", type="string", length=255, nullable=true)
     */
    private $column22;

    /**
     * @var string|null
     *
     * @ORM\Column(name="column_23", type="string", length=255, nullable=true)
     */
    private $column23;

    /**
     * @var string|null
     *
     * @ORM\Column(name="column_24", type="string", length=255, nullable=true)
     */
    private $column24;

    /**
     * @var string|null
     *
     * @ORM\Column(name="column_25", type="string", length=255, nullable=true)
     */
    private $column25;

    /**
     * @var string|null
     *
     * @ORM\Column(name="column_26", type="string", length=255, nullable=true)
     */
    private $column26;

    /**
     * @var string|null
     *
     * @ORM\Column(name="column_27", type="string", length=255, nullable=true)
     */
    private $column27;

    /**
     * @var string|null
     *
     * @ORM\Column(name="column_28", type="string", length=255, nullable=true)
     */
    private $column28;

    /**
     * @var string|null
     *
     * @ORM\Column(name="column_29", type="string", length=255, nullable=true)
     */
    private $column29;

    /**
     * @var string|null
     *
     * @ORM\Column(name="column_30", type="string", length=255, nullable=true)
     */
    private $column30;

    /**
     * @var string|null
     *
     * @ORM\Column(name="column_31", type="string", length=255, nullable=true)
     */
    private $column31;

    /**
     * @var string|null
     *
     * @ORM\Column(name="column_32", type="string", length=255, nullable=true)
     */
    private $column32;

    /**
     * @var string|null
     *
     * @ORM\Column(name="column_33", type="string", length=255, nullable=true)
     */
    private $column33;

    /**
     * @var string|null
     *
     * @ORM\Column(name="column_34", type="string", length=255, nullable=true)
     */
    private $column34;

    /**
     * @var string|null
     *
     * @ORM\Column(name="column_35", type="string", length=255, nullable=true)
     */
    private $column35;

    /**
     * @var string|null
     *
     * @ORM\Column(name="column_36", type="string", length=255, nullable=true)
     */
    private $column36;

    /**
     * @var string|null
     *
     * @ORM\Column(name="column_37", type="string", length=255, nullable=true)
     */
    private $column37;

    /**
     * @var string|null
     *
     * @ORM\Column(name="column_38", type="string", length=255, nullable=true)
     */
    private $column38;

    /**
     * @var string|null
     *
     * @ORM\Column(name="column_39", type="string", length=255, nullable=true)
     */
    private $column39;

    /**
     * @var string|null
     *
     * @ORM\Column(name="column_40", type="string", length=255, nullable=true)
     */
    private $column40;

    /**
     * @var string|null
     *
     * @ORM\Column(name="column_41", type="string", length=255, nullable=true)
     */
    private $column41;

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

    public function getColumn17(): ?string
    {
        return $this->column17;
    }

    public function setColumn17(?string $column17): self
    {
        $this->column17 = $column17;

        return $this;
    }

    public function getColumn18(): ?string
    {
        return $this->column18;
    }

    public function setColumn18(?string $column18): self
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

    public function getColumn21(): ?string
    {
        return $this->column21;
    }

    public function setColumn21(?string $column21): self
    {
        $this->column21 = $column21;

        return $this;
    }

    public function getColumn22(): ?string
    {
        return $this->column22;
    }

    public function setColumn22(?string $column22): self
    {
        $this->column22 = $column22;

        return $this;
    }

    public function getColumn23(): ?string
    {
        return $this->column23;
    }

    public function setColumn23(?string $column23): self
    {
        $this->column23 = $column23;

        return $this;
    }

    public function getColumn24(): ?string
    {
        return $this->column24;
    }

    public function setColumn24(?string $column24): self
    {
        $this->column24 = $column24;

        return $this;
    }

    public function getColumn25(): ?string
    {
        return $this->column25;
    }

    public function setColumn25(?string $column25): self
    {
        $this->column25 = $column25;

        return $this;
    }

    public function getColumn26(): ?string
    {
        return $this->column26;
    }

    public function setColumn26(?string $column26): self
    {
        $this->column26 = $column26;

        return $this;
    }

    public function getColumn27(): ?string
    {
        return $this->column27;
    }

    public function setColumn27(?string $column27): self
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

    public function getColumn32(): ?string
    {
        return $this->column32;
    }

    public function setColumn32(?string $column32): self
    {
        $this->column32 = $column32;

        return $this;
    }

    public function getColumn33(): ?string
    {
        return $this->column33;
    }

    public function setColumn33(?string $column33): self
    {
        $this->column33 = $column33;

        return $this;
    }

    public function getColumn34(): ?string
    {
        return $this->column34;
    }

    public function setColumn34(?string $column34): self
    {
        $this->column34 = $column34;

        return $this;
    }

    public function getColumn35(): ?string
    {
        return $this->column35;
    }

    public function setColumn35(?string $column35): self
    {
        $this->column35 = $column35;

        return $this;
    }

    public function getColumn36(): ?string
    {
        return $this->column36;
    }

    public function setColumn36(?string $column36): self
    {
        $this->column36 = $column36;

        return $this;
    }

    public function getColumn37(): ?string
    {
        return $this->column37;
    }

    public function setColumn37(?string $column37): self
    {
        $this->column37 = $column37;

        return $this;
    }

    public function getColumn38(): ?string
    {
        return $this->column38;
    }

    public function setColumn38(?string $column38): self
    {
        $this->column38 = $column38;

        return $this;
    }

    public function getColumn39(): ?string
    {
        return $this->column39;
    }

    public function setColumn39(?string $column39): self
    {
        $this->column39 = $column39;

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
}
