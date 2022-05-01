<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PetMirage.
 *
 * @ORM\Table(name="pet_mirage")
 * @ORM\Entity
 */
class PetMirage
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="pet_mirage_pk_seq", allocationSize=1, initialValue=1)
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
     * @ORM\Column(name="column_2", type="bigint", nullable=true)
     */
    private $column2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_4", type="bigint", nullable=true)
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
     * @var int|null
     *
     * @ORM\Column(name="column_8", type="bigint", nullable=true)
     */
    private $column8;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_9", type="bigint", nullable=true)
     */
    private $column9;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_10", type="bigint", nullable=true)
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
     * @ORM\Column(name="column_12", type="bigint", nullable=true)
     */
    private $column12;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_13", type="bigint", nullable=true)
     */
    private $column13;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_14", type="bigint", nullable=true)
     */
    private $column14;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_15", type="bigint", nullable=true)
     */
    private $column15;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_16", type="bigint", nullable=true)
     */
    private $column16;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_17", type="bigint", nullable=true)
     */
    private $column17;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_18", type="bigint", nullable=true)
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
     * @ORM\Column(name="column_28", type="integer", nullable=true)
     */
    private $column28;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_29", type="integer", nullable=true)
     */
    private $column29;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_30", type="integer", nullable=true)
     */
    private $column30;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_31", type="integer", nullable=true)
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
     * @ORM\Column(name="column_34", type="bigint", nullable=true)
     */
    private $column34;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_35", type="bigint", nullable=true)
     */
    private $column35;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_36", type="bigint", nullable=true)
     */
    private $column36;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_37", type="bigint", nullable=true)
     */
    private $column37;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_38", type="bigint", nullable=true)
     */
    private $column38;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_39", type="bigint", nullable=true)
     */
    private $column39;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_40", type="bigint", nullable=true)
     */
    private $column40;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_41", type="bigint", nullable=true)
     */
    private $column41;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_42", type="bigint", nullable=true)
     */
    private $column42;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_43", type="bigint", nullable=true)
     */
    private $column43;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_44", type="bigint", nullable=true)
     */
    private $column44;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_45", type="bigint", nullable=true)
     */
    private $column45;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_46", type="bigint", nullable=true)
     */
    private $column46;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_47", type="bigint", nullable=true)
     */
    private $column47;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_48", type="bigint", nullable=true)
     */
    private $column48;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_49", type="bigint", nullable=true)
     */
    private $column49;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_50", type="bigint", nullable=true)
     */
    private $column50;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_51", type="bigint", nullable=true)
     */
    private $column51;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_52", type="bigint", nullable=true)
     */
    private $column52;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_53", type="bigint", nullable=true)
     */
    private $column53;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_54", type="bigint", nullable=true)
     */
    private $column54;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_55", type="bigint", nullable=true)
     */
    private $column55;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_56", type="bigint", nullable=true)
     */
    private $column56;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_57", type="bigint", nullable=true)
     */
    private $column57;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_58", type="bigint", nullable=true)
     */
    private $column58;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_59", type="bigint", nullable=true)
     */
    private $column59;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_60", type="bigint", nullable=true)
     */
    private $column60;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_61", type="bigint", nullable=true)
     */
    private $column61;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_62", type="bigint", nullable=true)
     */
    private $column62;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_63", type="bigint", nullable=true)
     */
    private $column63;

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

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

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

    public function getColumn28(): ?int
    {
        return $this->column28;
    }

    public function setColumn28(?int $column28): self
    {
        $this->column28 = $column28;

        return $this;
    }

    public function getColumn29(): ?int
    {
        return $this->column29;
    }

    public function setColumn29(?int $column29): self
    {
        $this->column29 = $column29;

        return $this;
    }

    public function getColumn30(): ?int
    {
        return $this->column30;
    }

    public function setColumn30(?int $column30): self
    {
        $this->column30 = $column30;

        return $this;
    }

    public function getColumn31(): ?int
    {
        return $this->column31;
    }

    public function setColumn31(?int $column31): self
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

    public function getColumn44(): ?string
    {
        return $this->column44;
    }

    public function setColumn44(?string $column44): self
    {
        $this->column44 = $column44;

        return $this;
    }

    public function getColumn45(): ?string
    {
        return $this->column45;
    }

    public function setColumn45(?string $column45): self
    {
        $this->column45 = $column45;

        return $this;
    }

    public function getColumn46(): ?string
    {
        return $this->column46;
    }

    public function setColumn46(?string $column46): self
    {
        $this->column46 = $column46;

        return $this;
    }

    public function getColumn47(): ?string
    {
        return $this->column47;
    }

    public function setColumn47(?string $column47): self
    {
        $this->column47 = $column47;

        return $this;
    }

    public function getColumn48(): ?string
    {
        return $this->column48;
    }

    public function setColumn48(?string $column48): self
    {
        $this->column48 = $column48;

        return $this;
    }

    public function getColumn49(): ?string
    {
        return $this->column49;
    }

    public function setColumn49(?string $column49): self
    {
        $this->column49 = $column49;

        return $this;
    }

    public function getColumn50(): ?string
    {
        return $this->column50;
    }

    public function setColumn50(?string $column50): self
    {
        $this->column50 = $column50;

        return $this;
    }

    public function getColumn51(): ?string
    {
        return $this->column51;
    }

    public function setColumn51(?string $column51): self
    {
        $this->column51 = $column51;

        return $this;
    }

    public function getColumn52(): ?string
    {
        return $this->column52;
    }

    public function setColumn52(?string $column52): self
    {
        $this->column52 = $column52;

        return $this;
    }

    public function getColumn53(): ?string
    {
        return $this->column53;
    }

    public function setColumn53(?string $column53): self
    {
        $this->column53 = $column53;

        return $this;
    }

    public function getColumn54(): ?string
    {
        return $this->column54;
    }

    public function setColumn54(?string $column54): self
    {
        $this->column54 = $column54;

        return $this;
    }

    public function getColumn55(): ?string
    {
        return $this->column55;
    }

    public function setColumn55(?string $column55): self
    {
        $this->column55 = $column55;

        return $this;
    }

    public function getColumn56(): ?string
    {
        return $this->column56;
    }

    public function setColumn56(?string $column56): self
    {
        $this->column56 = $column56;

        return $this;
    }

    public function getColumn57(): ?string
    {
        return $this->column57;
    }

    public function setColumn57(?string $column57): self
    {
        $this->column57 = $column57;

        return $this;
    }

    public function getColumn58(): ?string
    {
        return $this->column58;
    }

    public function setColumn58(?string $column58): self
    {
        $this->column58 = $column58;

        return $this;
    }

    public function getColumn59(): ?string
    {
        return $this->column59;
    }

    public function setColumn59(?string $column59): self
    {
        $this->column59 = $column59;

        return $this;
    }

    public function getColumn60(): ?string
    {
        return $this->column60;
    }

    public function setColumn60(?string $column60): self
    {
        $this->column60 = $column60;

        return $this;
    }

    public function getColumn61(): ?string
    {
        return $this->column61;
    }

    public function setColumn61(?string $column61): self
    {
        $this->column61 = $column61;

        return $this;
    }

    public function getColumn62(): ?string
    {
        return $this->column62;
    }

    public function setColumn62(?string $column62): self
    {
        $this->column62 = $column62;

        return $this;
    }

    public function getColumn63(): ?string
    {
        return $this->column63;
    }

    public function setColumn63(?string $column63): self
    {
        $this->column63 = $column63;

        return $this;
    }
}
