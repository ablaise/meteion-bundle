<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Opening.
 *
 * @ORM\Table(name="opening", indexes={@ORM\Index(name="idx_e35d4c34317f817", columns={"quest"})})
 * @ORM\Entity
 */
class Opening
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="opening_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

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

    /**
     * @var string|null
     *
     * @ORM\Column(name="column_42", type="string", length=255, nullable=true)
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

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_64", type="bigint", nullable=true)
     */
    private $column64;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_65", type="bigint", nullable=true)
     */
    private $column65;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_66", type="bigint", nullable=true)
     */
    private $column66;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_67", type="bigint", nullable=true)
     */
    private $column67;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_68", type="bigint", nullable=true)
     */
    private $column68;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_69", type="bigint", nullable=true)
     */
    private $column69;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_70", type="bigint", nullable=true)
     */
    private $column70;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_71", type="bigint", nullable=true)
     */
    private $column71;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_72", type="bigint", nullable=true)
     */
    private $column72;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_73", type="bigint", nullable=true)
     */
    private $column73;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_74", type="bigint", nullable=true)
     */
    private $column74;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_75", type="bigint", nullable=true)
     */
    private $column75;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_76", type="bigint", nullable=true)
     */
    private $column76;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_77", type="bigint", nullable=true)
     */
    private $column77;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_78", type="bigint", nullable=true)
     */
    private $column78;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_79", type="bigint", nullable=true)
     */
    private $column79;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_80", type="bigint", nullable=true)
     */
    private $column80;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_81", type="bigint", nullable=true)
     */
    private $column81;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_82", type="bigint", nullable=true)
     */
    private $column82;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest", referencedColumnName="pk")
     * })
     */
    private $quest;

    public function getPk(): ?int
    {
        return $this->pk;
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

    public function getColumn64(): ?string
    {
        return $this->column64;
    }

    public function setColumn64(?string $column64): self
    {
        $this->column64 = $column64;

        return $this;
    }

    public function getColumn65(): ?string
    {
        return $this->column65;
    }

    public function setColumn65(?string $column65): self
    {
        $this->column65 = $column65;

        return $this;
    }

    public function getColumn66(): ?string
    {
        return $this->column66;
    }

    public function setColumn66(?string $column66): self
    {
        $this->column66 = $column66;

        return $this;
    }

    public function getColumn67(): ?string
    {
        return $this->column67;
    }

    public function setColumn67(?string $column67): self
    {
        $this->column67 = $column67;

        return $this;
    }

    public function getColumn68(): ?string
    {
        return $this->column68;
    }

    public function setColumn68(?string $column68): self
    {
        $this->column68 = $column68;

        return $this;
    }

    public function getColumn69(): ?string
    {
        return $this->column69;
    }

    public function setColumn69(?string $column69): self
    {
        $this->column69 = $column69;

        return $this;
    }

    public function getColumn70(): ?string
    {
        return $this->column70;
    }

    public function setColumn70(?string $column70): self
    {
        $this->column70 = $column70;

        return $this;
    }

    public function getColumn71(): ?string
    {
        return $this->column71;
    }

    public function setColumn71(?string $column71): self
    {
        $this->column71 = $column71;

        return $this;
    }

    public function getColumn72(): ?string
    {
        return $this->column72;
    }

    public function setColumn72(?string $column72): self
    {
        $this->column72 = $column72;

        return $this;
    }

    public function getColumn73(): ?string
    {
        return $this->column73;
    }

    public function setColumn73(?string $column73): self
    {
        $this->column73 = $column73;

        return $this;
    }

    public function getColumn74(): ?string
    {
        return $this->column74;
    }

    public function setColumn74(?string $column74): self
    {
        $this->column74 = $column74;

        return $this;
    }

    public function getColumn75(): ?string
    {
        return $this->column75;
    }

    public function setColumn75(?string $column75): self
    {
        $this->column75 = $column75;

        return $this;
    }

    public function getColumn76(): ?string
    {
        return $this->column76;
    }

    public function setColumn76(?string $column76): self
    {
        $this->column76 = $column76;

        return $this;
    }

    public function getColumn77(): ?string
    {
        return $this->column77;
    }

    public function setColumn77(?string $column77): self
    {
        $this->column77 = $column77;

        return $this;
    }

    public function getColumn78(): ?string
    {
        return $this->column78;
    }

    public function setColumn78(?string $column78): self
    {
        $this->column78 = $column78;

        return $this;
    }

    public function getColumn79(): ?string
    {
        return $this->column79;
    }

    public function setColumn79(?string $column79): self
    {
        $this->column79 = $column79;

        return $this;
    }

    public function getColumn80(): ?string
    {
        return $this->column80;
    }

    public function setColumn80(?string $column80): self
    {
        $this->column80 = $column80;

        return $this;
    }

    public function getColumn81(): ?string
    {
        return $this->column81;
    }

    public function setColumn81(?string $column81): self
    {
        $this->column81 = $column81;

        return $this;
    }

    public function getColumn82(): ?string
    {
        return $this->column82;
    }

    public function setColumn82(?string $column82): self
    {
        $this->column82 = $column82;

        return $this;
    }

    public function getQuest(): ?Quest
    {
        return $this->quest;
    }

    public function setQuest(?Quest $quest): self
    {
        $this->quest = $quest;

        return $this;
    }
}
