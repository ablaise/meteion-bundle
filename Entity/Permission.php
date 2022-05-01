<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Permission.
 *
 * @ORM\Table(name="permission")
 * @ORM\Entity
 */
class Permission
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="permission_pk_seq", allocationSize=1, initialValue=1)
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
     * @var bool|null
     *
     * @ORM\Column(name="column_19", type="boolean", nullable=true)
     */
    private $column19;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_20", type="boolean", nullable=true)
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
     * @var bool|null
     *
     * @ORM\Column(name="column_33", type="boolean", nullable=true)
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
     * @var bool|null
     *
     * @ORM\Column(name="column_36", type="boolean", nullable=true)
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

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_41", type="boolean", nullable=true)
     */
    private $column41;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_42", type="boolean", nullable=true)
     */
    private $column42;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_43", type="boolean", nullable=true)
     */
    private $column43;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_44", type="boolean", nullable=true)
     */
    private $column44;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_45", type="boolean", nullable=true)
     */
    private $column45;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_46", type="boolean", nullable=true)
     */
    private $column46;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_47", type="boolean", nullable=true)
     */
    private $column47;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_48", type="boolean", nullable=true)
     */
    private $column48;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_49", type="boolean", nullable=true)
     */
    private $column49;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_50", type="boolean", nullable=true)
     */
    private $column50;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_51", type="boolean", nullable=true)
     */
    private $column51;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_52", type="boolean", nullable=true)
     */
    private $column52;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_53", type="boolean", nullable=true)
     */
    private $column53;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_54", type="boolean", nullable=true)
     */
    private $column54;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_55", type="boolean", nullable=true)
     */
    private $column55;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_56", type="boolean", nullable=true)
     */
    private $column56;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_57", type="boolean", nullable=true)
     */
    private $column57;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_58", type="boolean", nullable=true)
     */
    private $column58;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_59", type="boolean", nullable=true)
     */
    private $column59;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_60", type="boolean", nullable=true)
     */
    private $column60;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_61", type="boolean", nullable=true)
     */
    private $column61;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_62", type="boolean", nullable=true)
     */
    private $column62;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_63", type="boolean", nullable=true)
     */
    private $column63;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_64", type="boolean", nullable=true)
     */
    private $column64;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_65", type="boolean", nullable=true)
     */
    private $column65;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_66", type="boolean", nullable=true)
     */
    private $column66;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_67", type="boolean", nullable=true)
     */
    private $column67;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_68", type="boolean", nullable=true)
     */
    private $column68;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_69", type="boolean", nullable=true)
     */
    private $column69;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_70", type="boolean", nullable=true)
     */
    private $column70;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_71", type="boolean", nullable=true)
     */
    private $column71;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_72", type="boolean", nullable=true)
     */
    private $column72;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_73", type="boolean", nullable=true)
     */
    private $column73;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_74", type="boolean", nullable=true)
     */
    private $column74;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_75", type="boolean", nullable=true)
     */
    private $column75;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_76", type="boolean", nullable=true)
     */
    private $column76;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_77", type="boolean", nullable=true)
     */
    private $column77;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_78", type="boolean", nullable=true)
     */
    private $column78;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_79", type="boolean", nullable=true)
     */
    private $column79;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_80", type="boolean", nullable=true)
     */
    private $column80;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_81", type="boolean", nullable=true)
     */
    private $column81;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_82", type="boolean", nullable=true)
     */
    private $column82;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_83", type="boolean", nullable=true)
     */
    private $column83;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_84", type="boolean", nullable=true)
     */
    private $column84;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_85", type="boolean", nullable=true)
     */
    private $column85;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_86", type="boolean", nullable=true)
     */
    private $column86;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_87", type="boolean", nullable=true)
     */
    private $column87;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_88", type="boolean", nullable=true)
     */
    private $column88;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_89", type="boolean", nullable=true)
     */
    private $column89;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_90", type="boolean", nullable=true)
     */
    private $column90;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_91", type="boolean", nullable=true)
     */
    private $column91;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_92", type="boolean", nullable=true)
     */
    private $column92;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_93", type="boolean", nullable=true)
     */
    private $column93;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_94", type="boolean", nullable=true)
     */
    private $column94;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_95", type="boolean", nullable=true)
     */
    private $column95;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_96", type="boolean", nullable=true)
     */
    private $column96;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_97", type="boolean", nullable=true)
     */
    private $column97;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_98", type="boolean", nullable=true)
     */
    private $column98;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_99", type="boolean", nullable=true)
     */
    private $column99;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_100", type="boolean", nullable=true)
     */
    private $column100;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_101", type="boolean", nullable=true)
     */
    private $column101;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_102", type="boolean", nullable=true)
     */
    private $column102;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_103", type="boolean", nullable=true)
     */
    private $column103;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_104", type="boolean", nullable=true)
     */
    private $column104;

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

    public function getColumn19(): ?bool
    {
        return $this->column19;
    }

    public function setColumn19(?bool $column19): self
    {
        $this->column19 = $column19;

        return $this;
    }

    public function getColumn20(): ?bool
    {
        return $this->column20;
    }

    public function setColumn20(?bool $column20): self
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

    public function getColumn33(): ?bool
    {
        return $this->column33;
    }

    public function setColumn33(?bool $column33): self
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

    public function getColumn36(): ?bool
    {
        return $this->column36;
    }

    public function setColumn36(?bool $column36): self
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

    public function getColumn41(): ?bool
    {
        return $this->column41;
    }

    public function setColumn41(?bool $column41): self
    {
        $this->column41 = $column41;

        return $this;
    }

    public function getColumn42(): ?bool
    {
        return $this->column42;
    }

    public function setColumn42(?bool $column42): self
    {
        $this->column42 = $column42;

        return $this;
    }

    public function getColumn43(): ?bool
    {
        return $this->column43;
    }

    public function setColumn43(?bool $column43): self
    {
        $this->column43 = $column43;

        return $this;
    }

    public function getColumn44(): ?bool
    {
        return $this->column44;
    }

    public function setColumn44(?bool $column44): self
    {
        $this->column44 = $column44;

        return $this;
    }

    public function getColumn45(): ?bool
    {
        return $this->column45;
    }

    public function setColumn45(?bool $column45): self
    {
        $this->column45 = $column45;

        return $this;
    }

    public function getColumn46(): ?bool
    {
        return $this->column46;
    }

    public function setColumn46(?bool $column46): self
    {
        $this->column46 = $column46;

        return $this;
    }

    public function getColumn47(): ?bool
    {
        return $this->column47;
    }

    public function setColumn47(?bool $column47): self
    {
        $this->column47 = $column47;

        return $this;
    }

    public function getColumn48(): ?bool
    {
        return $this->column48;
    }

    public function setColumn48(?bool $column48): self
    {
        $this->column48 = $column48;

        return $this;
    }

    public function getColumn49(): ?bool
    {
        return $this->column49;
    }

    public function setColumn49(?bool $column49): self
    {
        $this->column49 = $column49;

        return $this;
    }

    public function getColumn50(): ?bool
    {
        return $this->column50;
    }

    public function setColumn50(?bool $column50): self
    {
        $this->column50 = $column50;

        return $this;
    }

    public function getColumn51(): ?bool
    {
        return $this->column51;
    }

    public function setColumn51(?bool $column51): self
    {
        $this->column51 = $column51;

        return $this;
    }

    public function getColumn52(): ?bool
    {
        return $this->column52;
    }

    public function setColumn52(?bool $column52): self
    {
        $this->column52 = $column52;

        return $this;
    }

    public function getColumn53(): ?bool
    {
        return $this->column53;
    }

    public function setColumn53(?bool $column53): self
    {
        $this->column53 = $column53;

        return $this;
    }

    public function getColumn54(): ?bool
    {
        return $this->column54;
    }

    public function setColumn54(?bool $column54): self
    {
        $this->column54 = $column54;

        return $this;
    }

    public function getColumn55(): ?bool
    {
        return $this->column55;
    }

    public function setColumn55(?bool $column55): self
    {
        $this->column55 = $column55;

        return $this;
    }

    public function getColumn56(): ?bool
    {
        return $this->column56;
    }

    public function setColumn56(?bool $column56): self
    {
        $this->column56 = $column56;

        return $this;
    }

    public function getColumn57(): ?bool
    {
        return $this->column57;
    }

    public function setColumn57(?bool $column57): self
    {
        $this->column57 = $column57;

        return $this;
    }

    public function getColumn58(): ?bool
    {
        return $this->column58;
    }

    public function setColumn58(?bool $column58): self
    {
        $this->column58 = $column58;

        return $this;
    }

    public function getColumn59(): ?bool
    {
        return $this->column59;
    }

    public function setColumn59(?bool $column59): self
    {
        $this->column59 = $column59;

        return $this;
    }

    public function getColumn60(): ?bool
    {
        return $this->column60;
    }

    public function setColumn60(?bool $column60): self
    {
        $this->column60 = $column60;

        return $this;
    }

    public function getColumn61(): ?bool
    {
        return $this->column61;
    }

    public function setColumn61(?bool $column61): self
    {
        $this->column61 = $column61;

        return $this;
    }

    public function getColumn62(): ?bool
    {
        return $this->column62;
    }

    public function setColumn62(?bool $column62): self
    {
        $this->column62 = $column62;

        return $this;
    }

    public function getColumn63(): ?bool
    {
        return $this->column63;
    }

    public function setColumn63(?bool $column63): self
    {
        $this->column63 = $column63;

        return $this;
    }

    public function getColumn64(): ?bool
    {
        return $this->column64;
    }

    public function setColumn64(?bool $column64): self
    {
        $this->column64 = $column64;

        return $this;
    }

    public function getColumn65(): ?bool
    {
        return $this->column65;
    }

    public function setColumn65(?bool $column65): self
    {
        $this->column65 = $column65;

        return $this;
    }

    public function getColumn66(): ?bool
    {
        return $this->column66;
    }

    public function setColumn66(?bool $column66): self
    {
        $this->column66 = $column66;

        return $this;
    }

    public function getColumn67(): ?bool
    {
        return $this->column67;
    }

    public function setColumn67(?bool $column67): self
    {
        $this->column67 = $column67;

        return $this;
    }

    public function getColumn68(): ?bool
    {
        return $this->column68;
    }

    public function setColumn68(?bool $column68): self
    {
        $this->column68 = $column68;

        return $this;
    }

    public function getColumn69(): ?bool
    {
        return $this->column69;
    }

    public function setColumn69(?bool $column69): self
    {
        $this->column69 = $column69;

        return $this;
    }

    public function getColumn70(): ?bool
    {
        return $this->column70;
    }

    public function setColumn70(?bool $column70): self
    {
        $this->column70 = $column70;

        return $this;
    }

    public function getColumn71(): ?bool
    {
        return $this->column71;
    }

    public function setColumn71(?bool $column71): self
    {
        $this->column71 = $column71;

        return $this;
    }

    public function getColumn72(): ?bool
    {
        return $this->column72;
    }

    public function setColumn72(?bool $column72): self
    {
        $this->column72 = $column72;

        return $this;
    }

    public function getColumn73(): ?bool
    {
        return $this->column73;
    }

    public function setColumn73(?bool $column73): self
    {
        $this->column73 = $column73;

        return $this;
    }

    public function getColumn74(): ?bool
    {
        return $this->column74;
    }

    public function setColumn74(?bool $column74): self
    {
        $this->column74 = $column74;

        return $this;
    }

    public function getColumn75(): ?bool
    {
        return $this->column75;
    }

    public function setColumn75(?bool $column75): self
    {
        $this->column75 = $column75;

        return $this;
    }

    public function getColumn76(): ?bool
    {
        return $this->column76;
    }

    public function setColumn76(?bool $column76): self
    {
        $this->column76 = $column76;

        return $this;
    }

    public function getColumn77(): ?bool
    {
        return $this->column77;
    }

    public function setColumn77(?bool $column77): self
    {
        $this->column77 = $column77;

        return $this;
    }

    public function getColumn78(): ?bool
    {
        return $this->column78;
    }

    public function setColumn78(?bool $column78): self
    {
        $this->column78 = $column78;

        return $this;
    }

    public function getColumn79(): ?bool
    {
        return $this->column79;
    }

    public function setColumn79(?bool $column79): self
    {
        $this->column79 = $column79;

        return $this;
    }

    public function getColumn80(): ?bool
    {
        return $this->column80;
    }

    public function setColumn80(?bool $column80): self
    {
        $this->column80 = $column80;

        return $this;
    }

    public function getColumn81(): ?bool
    {
        return $this->column81;
    }

    public function setColumn81(?bool $column81): self
    {
        $this->column81 = $column81;

        return $this;
    }

    public function getColumn82(): ?bool
    {
        return $this->column82;
    }

    public function setColumn82(?bool $column82): self
    {
        $this->column82 = $column82;

        return $this;
    }

    public function getColumn83(): ?bool
    {
        return $this->column83;
    }

    public function setColumn83(?bool $column83): self
    {
        $this->column83 = $column83;

        return $this;
    }

    public function getColumn84(): ?bool
    {
        return $this->column84;
    }

    public function setColumn84(?bool $column84): self
    {
        $this->column84 = $column84;

        return $this;
    }

    public function getColumn85(): ?bool
    {
        return $this->column85;
    }

    public function setColumn85(?bool $column85): self
    {
        $this->column85 = $column85;

        return $this;
    }

    public function getColumn86(): ?bool
    {
        return $this->column86;
    }

    public function setColumn86(?bool $column86): self
    {
        $this->column86 = $column86;

        return $this;
    }

    public function getColumn87(): ?bool
    {
        return $this->column87;
    }

    public function setColumn87(?bool $column87): self
    {
        $this->column87 = $column87;

        return $this;
    }

    public function getColumn88(): ?bool
    {
        return $this->column88;
    }

    public function setColumn88(?bool $column88): self
    {
        $this->column88 = $column88;

        return $this;
    }

    public function getColumn89(): ?bool
    {
        return $this->column89;
    }

    public function setColumn89(?bool $column89): self
    {
        $this->column89 = $column89;

        return $this;
    }

    public function getColumn90(): ?bool
    {
        return $this->column90;
    }

    public function setColumn90(?bool $column90): self
    {
        $this->column90 = $column90;

        return $this;
    }

    public function getColumn91(): ?bool
    {
        return $this->column91;
    }

    public function setColumn91(?bool $column91): self
    {
        $this->column91 = $column91;

        return $this;
    }

    public function getColumn92(): ?bool
    {
        return $this->column92;
    }

    public function setColumn92(?bool $column92): self
    {
        $this->column92 = $column92;

        return $this;
    }

    public function getColumn93(): ?bool
    {
        return $this->column93;
    }

    public function setColumn93(?bool $column93): self
    {
        $this->column93 = $column93;

        return $this;
    }

    public function getColumn94(): ?bool
    {
        return $this->column94;
    }

    public function setColumn94(?bool $column94): self
    {
        $this->column94 = $column94;

        return $this;
    }

    public function getColumn95(): ?bool
    {
        return $this->column95;
    }

    public function setColumn95(?bool $column95): self
    {
        $this->column95 = $column95;

        return $this;
    }

    public function getColumn96(): ?bool
    {
        return $this->column96;
    }

    public function setColumn96(?bool $column96): self
    {
        $this->column96 = $column96;

        return $this;
    }

    public function getColumn97(): ?bool
    {
        return $this->column97;
    }

    public function setColumn97(?bool $column97): self
    {
        $this->column97 = $column97;

        return $this;
    }

    public function getColumn98(): ?bool
    {
        return $this->column98;
    }

    public function setColumn98(?bool $column98): self
    {
        $this->column98 = $column98;

        return $this;
    }

    public function getColumn99(): ?bool
    {
        return $this->column99;
    }

    public function setColumn99(?bool $column99): self
    {
        $this->column99 = $column99;

        return $this;
    }

    public function getColumn100(): ?bool
    {
        return $this->column100;
    }

    public function setColumn100(?bool $column100): self
    {
        $this->column100 = $column100;

        return $this;
    }

    public function getColumn101(): ?bool
    {
        return $this->column101;
    }

    public function setColumn101(?bool $column101): self
    {
        $this->column101 = $column101;

        return $this;
    }

    public function getColumn102(): ?bool
    {
        return $this->column102;
    }

    public function setColumn102(?bool $column102): self
    {
        $this->column102 = $column102;

        return $this;
    }

    public function getColumn103(): ?bool
    {
        return $this->column103;
    }

    public function setColumn103(?bool $column103): self
    {
        $this->column103 = $column103;

        return $this;
    }

    public function getColumn104(): ?bool
    {
        return $this->column104;
    }

    public function setColumn104(?bool $column104): self
    {
        $this->column104 = $column104;

        return $this;
    }
}
