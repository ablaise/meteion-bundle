<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ContentAttributeRect.
 *
 * @ORM\Table(name="content_attribute_rect")
 * @ORM\Entity
 */
class ContentAttributeRect
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="content_attribute_rect_pk_seq", allocationSize=1, initialValue=1)
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
     * @ORM\Column(name="column_5", type="integer", nullable=true)
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
     * @ORM\Column(name="column_33", type="bigint", nullable=true)
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
     * @var int|null
     *
     * @ORM\Column(name="column_83", type="bigint", nullable=true)
     */
    private $column83;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_84", type="bigint", nullable=true)
     */
    private $column84;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_85", type="bigint", nullable=true)
     */
    private $column85;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_86", type="bigint", nullable=true)
     */
    private $column86;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_87", type="bigint", nullable=true)
     */
    private $column87;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_88", type="bigint", nullable=true)
     */
    private $column88;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_89", type="bigint", nullable=true)
     */
    private $column89;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_90", type="bigint", nullable=true)
     */
    private $column90;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_91", type="bigint", nullable=true)
     */
    private $column91;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_92", type="bigint", nullable=true)
     */
    private $column92;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_93", type="bigint", nullable=true)
     */
    private $column93;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_94", type="bigint", nullable=true)
     */
    private $column94;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_95", type="bigint", nullable=true)
     */
    private $column95;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_96", type="bigint", nullable=true)
     */
    private $column96;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_97", type="integer", nullable=true)
     */
    private $column97;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_98", type="integer", nullable=true)
     */
    private $column98;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_99", type="integer", nullable=true)
     */
    private $column99;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_100", type="integer", nullable=true)
     */
    private $column100;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_101", type="integer", nullable=true)
     */
    private $column101;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_102", type="integer", nullable=true)
     */
    private $column102;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_103", type="integer", nullable=true)
     */
    private $column103;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_104", type="integer", nullable=true)
     */
    private $column104;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_105", type="integer", nullable=true)
     */
    private $column105;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_106", type="integer", nullable=true)
     */
    private $column106;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_107", type="integer", nullable=true)
     */
    private $column107;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_108", type="integer", nullable=true)
     */
    private $column108;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_109", type="integer", nullable=true)
     */
    private $column109;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_110", type="integer", nullable=true)
     */
    private $column110;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_111", type="integer", nullable=true)
     */
    private $column111;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_112", type="integer", nullable=true)
     */
    private $column112;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_113", type="integer", nullable=true)
     */
    private $column113;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_114", type="integer", nullable=true)
     */
    private $column114;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_115", type="integer", nullable=true)
     */
    private $column115;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_116", type="integer", nullable=true)
     */
    private $column116;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_117", type="integer", nullable=true)
     */
    private $column117;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_118", type="integer", nullable=true)
     */
    private $column118;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_119", type="integer", nullable=true)
     */
    private $column119;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_120", type="integer", nullable=true)
     */
    private $column120;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_121", type="integer", nullable=true)
     */
    private $column121;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_122", type="integer", nullable=true)
     */
    private $column122;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_123", type="integer", nullable=true)
     */
    private $column123;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_124", type="integer", nullable=true)
     */
    private $column124;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_125", type="integer", nullable=true)
     */
    private $column125;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_126", type="integer", nullable=true)
     */
    private $column126;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_127", type="integer", nullable=true)
     */
    private $column127;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_128", type="integer", nullable=true)
     */
    private $column128;

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

    public function getColumn5(): ?int
    {
        return $this->column5;
    }

    public function setColumn5(?int $column5): self
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

    public function getColumn83(): ?string
    {
        return $this->column83;
    }

    public function setColumn83(?string $column83): self
    {
        $this->column83 = $column83;

        return $this;
    }

    public function getColumn84(): ?string
    {
        return $this->column84;
    }

    public function setColumn84(?string $column84): self
    {
        $this->column84 = $column84;

        return $this;
    }

    public function getColumn85(): ?string
    {
        return $this->column85;
    }

    public function setColumn85(?string $column85): self
    {
        $this->column85 = $column85;

        return $this;
    }

    public function getColumn86(): ?string
    {
        return $this->column86;
    }

    public function setColumn86(?string $column86): self
    {
        $this->column86 = $column86;

        return $this;
    }

    public function getColumn87(): ?string
    {
        return $this->column87;
    }

    public function setColumn87(?string $column87): self
    {
        $this->column87 = $column87;

        return $this;
    }

    public function getColumn88(): ?string
    {
        return $this->column88;
    }

    public function setColumn88(?string $column88): self
    {
        $this->column88 = $column88;

        return $this;
    }

    public function getColumn89(): ?string
    {
        return $this->column89;
    }

    public function setColumn89(?string $column89): self
    {
        $this->column89 = $column89;

        return $this;
    }

    public function getColumn90(): ?string
    {
        return $this->column90;
    }

    public function setColumn90(?string $column90): self
    {
        $this->column90 = $column90;

        return $this;
    }

    public function getColumn91(): ?string
    {
        return $this->column91;
    }

    public function setColumn91(?string $column91): self
    {
        $this->column91 = $column91;

        return $this;
    }

    public function getColumn92(): ?string
    {
        return $this->column92;
    }

    public function setColumn92(?string $column92): self
    {
        $this->column92 = $column92;

        return $this;
    }

    public function getColumn93(): ?string
    {
        return $this->column93;
    }

    public function setColumn93(?string $column93): self
    {
        $this->column93 = $column93;

        return $this;
    }

    public function getColumn94(): ?string
    {
        return $this->column94;
    }

    public function setColumn94(?string $column94): self
    {
        $this->column94 = $column94;

        return $this;
    }

    public function getColumn95(): ?string
    {
        return $this->column95;
    }

    public function setColumn95(?string $column95): self
    {
        $this->column95 = $column95;

        return $this;
    }

    public function getColumn96(): ?string
    {
        return $this->column96;
    }

    public function setColumn96(?string $column96): self
    {
        $this->column96 = $column96;

        return $this;
    }

    public function getColumn97(): ?int
    {
        return $this->column97;
    }

    public function setColumn97(?int $column97): self
    {
        $this->column97 = $column97;

        return $this;
    }

    public function getColumn98(): ?int
    {
        return $this->column98;
    }

    public function setColumn98(?int $column98): self
    {
        $this->column98 = $column98;

        return $this;
    }

    public function getColumn99(): ?int
    {
        return $this->column99;
    }

    public function setColumn99(?int $column99): self
    {
        $this->column99 = $column99;

        return $this;
    }

    public function getColumn100(): ?int
    {
        return $this->column100;
    }

    public function setColumn100(?int $column100): self
    {
        $this->column100 = $column100;

        return $this;
    }

    public function getColumn101(): ?int
    {
        return $this->column101;
    }

    public function setColumn101(?int $column101): self
    {
        $this->column101 = $column101;

        return $this;
    }

    public function getColumn102(): ?int
    {
        return $this->column102;
    }

    public function setColumn102(?int $column102): self
    {
        $this->column102 = $column102;

        return $this;
    }

    public function getColumn103(): ?int
    {
        return $this->column103;
    }

    public function setColumn103(?int $column103): self
    {
        $this->column103 = $column103;

        return $this;
    }

    public function getColumn104(): ?int
    {
        return $this->column104;
    }

    public function setColumn104(?int $column104): self
    {
        $this->column104 = $column104;

        return $this;
    }

    public function getColumn105(): ?int
    {
        return $this->column105;
    }

    public function setColumn105(?int $column105): self
    {
        $this->column105 = $column105;

        return $this;
    }

    public function getColumn106(): ?int
    {
        return $this->column106;
    }

    public function setColumn106(?int $column106): self
    {
        $this->column106 = $column106;

        return $this;
    }

    public function getColumn107(): ?int
    {
        return $this->column107;
    }

    public function setColumn107(?int $column107): self
    {
        $this->column107 = $column107;

        return $this;
    }

    public function getColumn108(): ?int
    {
        return $this->column108;
    }

    public function setColumn108(?int $column108): self
    {
        $this->column108 = $column108;

        return $this;
    }

    public function getColumn109(): ?int
    {
        return $this->column109;
    }

    public function setColumn109(?int $column109): self
    {
        $this->column109 = $column109;

        return $this;
    }

    public function getColumn110(): ?int
    {
        return $this->column110;
    }

    public function setColumn110(?int $column110): self
    {
        $this->column110 = $column110;

        return $this;
    }

    public function getColumn111(): ?int
    {
        return $this->column111;
    }

    public function setColumn111(?int $column111): self
    {
        $this->column111 = $column111;

        return $this;
    }

    public function getColumn112(): ?int
    {
        return $this->column112;
    }

    public function setColumn112(?int $column112): self
    {
        $this->column112 = $column112;

        return $this;
    }

    public function getColumn113(): ?int
    {
        return $this->column113;
    }

    public function setColumn113(?int $column113): self
    {
        $this->column113 = $column113;

        return $this;
    }

    public function getColumn114(): ?int
    {
        return $this->column114;
    }

    public function setColumn114(?int $column114): self
    {
        $this->column114 = $column114;

        return $this;
    }

    public function getColumn115(): ?int
    {
        return $this->column115;
    }

    public function setColumn115(?int $column115): self
    {
        $this->column115 = $column115;

        return $this;
    }

    public function getColumn116(): ?int
    {
        return $this->column116;
    }

    public function setColumn116(?int $column116): self
    {
        $this->column116 = $column116;

        return $this;
    }

    public function getColumn117(): ?int
    {
        return $this->column117;
    }

    public function setColumn117(?int $column117): self
    {
        $this->column117 = $column117;

        return $this;
    }

    public function getColumn118(): ?int
    {
        return $this->column118;
    }

    public function setColumn118(?int $column118): self
    {
        $this->column118 = $column118;

        return $this;
    }

    public function getColumn119(): ?int
    {
        return $this->column119;
    }

    public function setColumn119(?int $column119): self
    {
        $this->column119 = $column119;

        return $this;
    }

    public function getColumn120(): ?int
    {
        return $this->column120;
    }

    public function setColumn120(?int $column120): self
    {
        $this->column120 = $column120;

        return $this;
    }

    public function getColumn121(): ?int
    {
        return $this->column121;
    }

    public function setColumn121(?int $column121): self
    {
        $this->column121 = $column121;

        return $this;
    }

    public function getColumn122(): ?int
    {
        return $this->column122;
    }

    public function setColumn122(?int $column122): self
    {
        $this->column122 = $column122;

        return $this;
    }

    public function getColumn123(): ?int
    {
        return $this->column123;
    }

    public function setColumn123(?int $column123): self
    {
        $this->column123 = $column123;

        return $this;
    }

    public function getColumn124(): ?int
    {
        return $this->column124;
    }

    public function setColumn124(?int $column124): self
    {
        $this->column124 = $column124;

        return $this;
    }

    public function getColumn125(): ?int
    {
        return $this->column125;
    }

    public function setColumn125(?int $column125): self
    {
        $this->column125 = $column125;

        return $this;
    }

    public function getColumn126(): ?int
    {
        return $this->column126;
    }

    public function setColumn126(?int $column126): self
    {
        $this->column126 = $column126;

        return $this;
    }

    public function getColumn127(): ?int
    {
        return $this->column127;
    }

    public function setColumn127(?int $column127): self
    {
        $this->column127 = $column127;

        return $this;
    }

    public function getColumn128(): ?int
    {
        return $this->column128;
    }

    public function setColumn128(?int $column128): self
    {
        $this->column128 = $column128;

        return $this;
    }
}
