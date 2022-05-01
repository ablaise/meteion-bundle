<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PvPseries.
 *
 * @ORM\Table(name="pv_pseries")
 * @ORM\Entity
 */
class PvPseries
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="pv_pseries_pk_seq", allocationSize=1, initialValue=1)
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
     * @ORM\Column(name="column_36", type="integer", nullable=true)
     */
    private $column36;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_37", type="integer", nullable=true)
     */
    private $column37;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_38", type="integer", nullable=true)
     */
    private $column38;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_39", type="integer", nullable=true)
     */
    private $column39;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_40", type="integer", nullable=true)
     */
    private $column40;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_41", type="integer", nullable=true)
     */
    private $column41;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_42", type="integer", nullable=true)
     */
    private $column42;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_43", type="integer", nullable=true)
     */
    private $column43;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_44", type="integer", nullable=true)
     */
    private $column44;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_45", type="integer", nullable=true)
     */
    private $column45;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_46", type="integer", nullable=true)
     */
    private $column46;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_47", type="integer", nullable=true)
     */
    private $column47;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_48", type="integer", nullable=true)
     */
    private $column48;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_49", type="integer", nullable=true)
     */
    private $column49;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_50", type="integer", nullable=true)
     */
    private $column50;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_51", type="integer", nullable=true)
     */
    private $column51;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_52", type="integer", nullable=true)
     */
    private $column52;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_53", type="integer", nullable=true)
     */
    private $column53;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_54", type="integer", nullable=true)
     */
    private $column54;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_55", type="integer", nullable=true)
     */
    private $column55;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_56", type="integer", nullable=true)
     */
    private $column56;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_57", type="integer", nullable=true)
     */
    private $column57;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_58", type="integer", nullable=true)
     */
    private $column58;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_59", type="integer", nullable=true)
     */
    private $column59;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_60", type="integer", nullable=true)
     */
    private $column60;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_61", type="integer", nullable=true)
     */
    private $column61;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_62", type="integer", nullable=true)
     */
    private $column62;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_63", type="integer", nullable=true)
     */
    private $column63;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_64", type="integer", nullable=true)
     */
    private $column64;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_65", type="integer", nullable=true)
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
     * @ORM\Column(name="column_97", type="bigint", nullable=true)
     */
    private $column97;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_98", type="bigint", nullable=true)
     */
    private $column98;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_99", type="bigint", nullable=true)
     */
    private $column99;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_100", type="bigint", nullable=true)
     */
    private $column100;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_101", type="bigint", nullable=true)
     */
    private $column101;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_102", type="bigint", nullable=true)
     */
    private $column102;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_103", type="bigint", nullable=true)
     */
    private $column103;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_104", type="bigint", nullable=true)
     */
    private $column104;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_105", type="bigint", nullable=true)
     */
    private $column105;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_106", type="bigint", nullable=true)
     */
    private $column106;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_107", type="bigint", nullable=true)
     */
    private $column107;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_108", type="bigint", nullable=true)
     */
    private $column108;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_109", type="bigint", nullable=true)
     */
    private $column109;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_110", type="bigint", nullable=true)
     */
    private $column110;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_111", type="bigint", nullable=true)
     */
    private $column111;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_112", type="bigint", nullable=true)
     */
    private $column112;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_113", type="bigint", nullable=true)
     */
    private $column113;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_114", type="bigint", nullable=true)
     */
    private $column114;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_115", type="bigint", nullable=true)
     */
    private $column115;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_116", type="bigint", nullable=true)
     */
    private $column116;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_117", type="bigint", nullable=true)
     */
    private $column117;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_118", type="bigint", nullable=true)
     */
    private $column118;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_119", type="bigint", nullable=true)
     */
    private $column119;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_120", type="bigint", nullable=true)
     */
    private $column120;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_121", type="bigint", nullable=true)
     */
    private $column121;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_122", type="bigint", nullable=true)
     */
    private $column122;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_123", type="bigint", nullable=true)
     */
    private $column123;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_124", type="bigint", nullable=true)
     */
    private $column124;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_125", type="bigint", nullable=true)
     */
    private $column125;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_126", type="bigint", nullable=true)
     */
    private $column126;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_127", type="bigint", nullable=true)
     */
    private $column127;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_128", type="bigint", nullable=true)
     */
    private $column128;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_129", type="bigint", nullable=true)
     */
    private $column129;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_130", type="integer", nullable=true)
     */
    private $column130;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_131", type="integer", nullable=true)
     */
    private $column131;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_132", type="integer", nullable=true)
     */
    private $column132;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_133", type="integer", nullable=true)
     */
    private $column133;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_134", type="integer", nullable=true)
     */
    private $column134;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_135", type="integer", nullable=true)
     */
    private $column135;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_136", type="integer", nullable=true)
     */
    private $column136;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_137", type="integer", nullable=true)
     */
    private $column137;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_138", type="integer", nullable=true)
     */
    private $column138;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_139", type="integer", nullable=true)
     */
    private $column139;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_140", type="integer", nullable=true)
     */
    private $column140;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_141", type="integer", nullable=true)
     */
    private $column141;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_142", type="integer", nullable=true)
     */
    private $column142;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_143", type="integer", nullable=true)
     */
    private $column143;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_144", type="integer", nullable=true)
     */
    private $column144;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_145", type="integer", nullable=true)
     */
    private $column145;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_146", type="integer", nullable=true)
     */
    private $column146;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_147", type="integer", nullable=true)
     */
    private $column147;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_148", type="integer", nullable=true)
     */
    private $column148;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_149", type="integer", nullable=true)
     */
    private $column149;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_150", type="integer", nullable=true)
     */
    private $column150;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_151", type="integer", nullable=true)
     */
    private $column151;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_152", type="integer", nullable=true)
     */
    private $column152;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_153", type="integer", nullable=true)
     */
    private $column153;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_154", type="integer", nullable=true)
     */
    private $column154;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_155", type="integer", nullable=true)
     */
    private $column155;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_156", type="integer", nullable=true)
     */
    private $column156;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_157", type="integer", nullable=true)
     */
    private $column157;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_158", type="integer", nullable=true)
     */
    private $column158;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_159", type="integer", nullable=true)
     */
    private $column159;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_160", type="integer", nullable=true)
     */
    private $column160;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_161", type="integer", nullable=true)
     */
    private $column161;

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

    public function getColumn36(): ?int
    {
        return $this->column36;
    }

    public function setColumn36(?int $column36): self
    {
        $this->column36 = $column36;

        return $this;
    }

    public function getColumn37(): ?int
    {
        return $this->column37;
    }

    public function setColumn37(?int $column37): self
    {
        $this->column37 = $column37;

        return $this;
    }

    public function getColumn38(): ?int
    {
        return $this->column38;
    }

    public function setColumn38(?int $column38): self
    {
        $this->column38 = $column38;

        return $this;
    }

    public function getColumn39(): ?int
    {
        return $this->column39;
    }

    public function setColumn39(?int $column39): self
    {
        $this->column39 = $column39;

        return $this;
    }

    public function getColumn40(): ?int
    {
        return $this->column40;
    }

    public function setColumn40(?int $column40): self
    {
        $this->column40 = $column40;

        return $this;
    }

    public function getColumn41(): ?int
    {
        return $this->column41;
    }

    public function setColumn41(?int $column41): self
    {
        $this->column41 = $column41;

        return $this;
    }

    public function getColumn42(): ?int
    {
        return $this->column42;
    }

    public function setColumn42(?int $column42): self
    {
        $this->column42 = $column42;

        return $this;
    }

    public function getColumn43(): ?int
    {
        return $this->column43;
    }

    public function setColumn43(?int $column43): self
    {
        $this->column43 = $column43;

        return $this;
    }

    public function getColumn44(): ?int
    {
        return $this->column44;
    }

    public function setColumn44(?int $column44): self
    {
        $this->column44 = $column44;

        return $this;
    }

    public function getColumn45(): ?int
    {
        return $this->column45;
    }

    public function setColumn45(?int $column45): self
    {
        $this->column45 = $column45;

        return $this;
    }

    public function getColumn46(): ?int
    {
        return $this->column46;
    }

    public function setColumn46(?int $column46): self
    {
        $this->column46 = $column46;

        return $this;
    }

    public function getColumn47(): ?int
    {
        return $this->column47;
    }

    public function setColumn47(?int $column47): self
    {
        $this->column47 = $column47;

        return $this;
    }

    public function getColumn48(): ?int
    {
        return $this->column48;
    }

    public function setColumn48(?int $column48): self
    {
        $this->column48 = $column48;

        return $this;
    }

    public function getColumn49(): ?int
    {
        return $this->column49;
    }

    public function setColumn49(?int $column49): self
    {
        $this->column49 = $column49;

        return $this;
    }

    public function getColumn50(): ?int
    {
        return $this->column50;
    }

    public function setColumn50(?int $column50): self
    {
        $this->column50 = $column50;

        return $this;
    }

    public function getColumn51(): ?int
    {
        return $this->column51;
    }

    public function setColumn51(?int $column51): self
    {
        $this->column51 = $column51;

        return $this;
    }

    public function getColumn52(): ?int
    {
        return $this->column52;
    }

    public function setColumn52(?int $column52): self
    {
        $this->column52 = $column52;

        return $this;
    }

    public function getColumn53(): ?int
    {
        return $this->column53;
    }

    public function setColumn53(?int $column53): self
    {
        $this->column53 = $column53;

        return $this;
    }

    public function getColumn54(): ?int
    {
        return $this->column54;
    }

    public function setColumn54(?int $column54): self
    {
        $this->column54 = $column54;

        return $this;
    }

    public function getColumn55(): ?int
    {
        return $this->column55;
    }

    public function setColumn55(?int $column55): self
    {
        $this->column55 = $column55;

        return $this;
    }

    public function getColumn56(): ?int
    {
        return $this->column56;
    }

    public function setColumn56(?int $column56): self
    {
        $this->column56 = $column56;

        return $this;
    }

    public function getColumn57(): ?int
    {
        return $this->column57;
    }

    public function setColumn57(?int $column57): self
    {
        $this->column57 = $column57;

        return $this;
    }

    public function getColumn58(): ?int
    {
        return $this->column58;
    }

    public function setColumn58(?int $column58): self
    {
        $this->column58 = $column58;

        return $this;
    }

    public function getColumn59(): ?int
    {
        return $this->column59;
    }

    public function setColumn59(?int $column59): self
    {
        $this->column59 = $column59;

        return $this;
    }

    public function getColumn60(): ?int
    {
        return $this->column60;
    }

    public function setColumn60(?int $column60): self
    {
        $this->column60 = $column60;

        return $this;
    }

    public function getColumn61(): ?int
    {
        return $this->column61;
    }

    public function setColumn61(?int $column61): self
    {
        $this->column61 = $column61;

        return $this;
    }

    public function getColumn62(): ?int
    {
        return $this->column62;
    }

    public function setColumn62(?int $column62): self
    {
        $this->column62 = $column62;

        return $this;
    }

    public function getColumn63(): ?int
    {
        return $this->column63;
    }

    public function setColumn63(?int $column63): self
    {
        $this->column63 = $column63;

        return $this;
    }

    public function getColumn64(): ?int
    {
        return $this->column64;
    }

    public function setColumn64(?int $column64): self
    {
        $this->column64 = $column64;

        return $this;
    }

    public function getColumn65(): ?int
    {
        return $this->column65;
    }

    public function setColumn65(?int $column65): self
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

    public function getColumn97(): ?string
    {
        return $this->column97;
    }

    public function setColumn97(?string $column97): self
    {
        $this->column97 = $column97;

        return $this;
    }

    public function getColumn98(): ?string
    {
        return $this->column98;
    }

    public function setColumn98(?string $column98): self
    {
        $this->column98 = $column98;

        return $this;
    }

    public function getColumn99(): ?string
    {
        return $this->column99;
    }

    public function setColumn99(?string $column99): self
    {
        $this->column99 = $column99;

        return $this;
    }

    public function getColumn100(): ?string
    {
        return $this->column100;
    }

    public function setColumn100(?string $column100): self
    {
        $this->column100 = $column100;

        return $this;
    }

    public function getColumn101(): ?string
    {
        return $this->column101;
    }

    public function setColumn101(?string $column101): self
    {
        $this->column101 = $column101;

        return $this;
    }

    public function getColumn102(): ?string
    {
        return $this->column102;
    }

    public function setColumn102(?string $column102): self
    {
        $this->column102 = $column102;

        return $this;
    }

    public function getColumn103(): ?string
    {
        return $this->column103;
    }

    public function setColumn103(?string $column103): self
    {
        $this->column103 = $column103;

        return $this;
    }

    public function getColumn104(): ?string
    {
        return $this->column104;
    }

    public function setColumn104(?string $column104): self
    {
        $this->column104 = $column104;

        return $this;
    }

    public function getColumn105(): ?string
    {
        return $this->column105;
    }

    public function setColumn105(?string $column105): self
    {
        $this->column105 = $column105;

        return $this;
    }

    public function getColumn106(): ?string
    {
        return $this->column106;
    }

    public function setColumn106(?string $column106): self
    {
        $this->column106 = $column106;

        return $this;
    }

    public function getColumn107(): ?string
    {
        return $this->column107;
    }

    public function setColumn107(?string $column107): self
    {
        $this->column107 = $column107;

        return $this;
    }

    public function getColumn108(): ?string
    {
        return $this->column108;
    }

    public function setColumn108(?string $column108): self
    {
        $this->column108 = $column108;

        return $this;
    }

    public function getColumn109(): ?string
    {
        return $this->column109;
    }

    public function setColumn109(?string $column109): self
    {
        $this->column109 = $column109;

        return $this;
    }

    public function getColumn110(): ?string
    {
        return $this->column110;
    }

    public function setColumn110(?string $column110): self
    {
        $this->column110 = $column110;

        return $this;
    }

    public function getColumn111(): ?string
    {
        return $this->column111;
    }

    public function setColumn111(?string $column111): self
    {
        $this->column111 = $column111;

        return $this;
    }

    public function getColumn112(): ?string
    {
        return $this->column112;
    }

    public function setColumn112(?string $column112): self
    {
        $this->column112 = $column112;

        return $this;
    }

    public function getColumn113(): ?string
    {
        return $this->column113;
    }

    public function setColumn113(?string $column113): self
    {
        $this->column113 = $column113;

        return $this;
    }

    public function getColumn114(): ?string
    {
        return $this->column114;
    }

    public function setColumn114(?string $column114): self
    {
        $this->column114 = $column114;

        return $this;
    }

    public function getColumn115(): ?string
    {
        return $this->column115;
    }

    public function setColumn115(?string $column115): self
    {
        $this->column115 = $column115;

        return $this;
    }

    public function getColumn116(): ?string
    {
        return $this->column116;
    }

    public function setColumn116(?string $column116): self
    {
        $this->column116 = $column116;

        return $this;
    }

    public function getColumn117(): ?string
    {
        return $this->column117;
    }

    public function setColumn117(?string $column117): self
    {
        $this->column117 = $column117;

        return $this;
    }

    public function getColumn118(): ?string
    {
        return $this->column118;
    }

    public function setColumn118(?string $column118): self
    {
        $this->column118 = $column118;

        return $this;
    }

    public function getColumn119(): ?string
    {
        return $this->column119;
    }

    public function setColumn119(?string $column119): self
    {
        $this->column119 = $column119;

        return $this;
    }

    public function getColumn120(): ?string
    {
        return $this->column120;
    }

    public function setColumn120(?string $column120): self
    {
        $this->column120 = $column120;

        return $this;
    }

    public function getColumn121(): ?string
    {
        return $this->column121;
    }

    public function setColumn121(?string $column121): self
    {
        $this->column121 = $column121;

        return $this;
    }

    public function getColumn122(): ?string
    {
        return $this->column122;
    }

    public function setColumn122(?string $column122): self
    {
        $this->column122 = $column122;

        return $this;
    }

    public function getColumn123(): ?string
    {
        return $this->column123;
    }

    public function setColumn123(?string $column123): self
    {
        $this->column123 = $column123;

        return $this;
    }

    public function getColumn124(): ?string
    {
        return $this->column124;
    }

    public function setColumn124(?string $column124): self
    {
        $this->column124 = $column124;

        return $this;
    }

    public function getColumn125(): ?string
    {
        return $this->column125;
    }

    public function setColumn125(?string $column125): self
    {
        $this->column125 = $column125;

        return $this;
    }

    public function getColumn126(): ?string
    {
        return $this->column126;
    }

    public function setColumn126(?string $column126): self
    {
        $this->column126 = $column126;

        return $this;
    }

    public function getColumn127(): ?string
    {
        return $this->column127;
    }

    public function setColumn127(?string $column127): self
    {
        $this->column127 = $column127;

        return $this;
    }

    public function getColumn128(): ?string
    {
        return $this->column128;
    }

    public function setColumn128(?string $column128): self
    {
        $this->column128 = $column128;

        return $this;
    }

    public function getColumn129(): ?string
    {
        return $this->column129;
    }

    public function setColumn129(?string $column129): self
    {
        $this->column129 = $column129;

        return $this;
    }

    public function getColumn130(): ?int
    {
        return $this->column130;
    }

    public function setColumn130(?int $column130): self
    {
        $this->column130 = $column130;

        return $this;
    }

    public function getColumn131(): ?int
    {
        return $this->column131;
    }

    public function setColumn131(?int $column131): self
    {
        $this->column131 = $column131;

        return $this;
    }

    public function getColumn132(): ?int
    {
        return $this->column132;
    }

    public function setColumn132(?int $column132): self
    {
        $this->column132 = $column132;

        return $this;
    }

    public function getColumn133(): ?int
    {
        return $this->column133;
    }

    public function setColumn133(?int $column133): self
    {
        $this->column133 = $column133;

        return $this;
    }

    public function getColumn134(): ?int
    {
        return $this->column134;
    }

    public function setColumn134(?int $column134): self
    {
        $this->column134 = $column134;

        return $this;
    }

    public function getColumn135(): ?int
    {
        return $this->column135;
    }

    public function setColumn135(?int $column135): self
    {
        $this->column135 = $column135;

        return $this;
    }

    public function getColumn136(): ?int
    {
        return $this->column136;
    }

    public function setColumn136(?int $column136): self
    {
        $this->column136 = $column136;

        return $this;
    }

    public function getColumn137(): ?int
    {
        return $this->column137;
    }

    public function setColumn137(?int $column137): self
    {
        $this->column137 = $column137;

        return $this;
    }

    public function getColumn138(): ?int
    {
        return $this->column138;
    }

    public function setColumn138(?int $column138): self
    {
        $this->column138 = $column138;

        return $this;
    }

    public function getColumn139(): ?int
    {
        return $this->column139;
    }

    public function setColumn139(?int $column139): self
    {
        $this->column139 = $column139;

        return $this;
    }

    public function getColumn140(): ?int
    {
        return $this->column140;
    }

    public function setColumn140(?int $column140): self
    {
        $this->column140 = $column140;

        return $this;
    }

    public function getColumn141(): ?int
    {
        return $this->column141;
    }

    public function setColumn141(?int $column141): self
    {
        $this->column141 = $column141;

        return $this;
    }

    public function getColumn142(): ?int
    {
        return $this->column142;
    }

    public function setColumn142(?int $column142): self
    {
        $this->column142 = $column142;

        return $this;
    }

    public function getColumn143(): ?int
    {
        return $this->column143;
    }

    public function setColumn143(?int $column143): self
    {
        $this->column143 = $column143;

        return $this;
    }

    public function getColumn144(): ?int
    {
        return $this->column144;
    }

    public function setColumn144(?int $column144): self
    {
        $this->column144 = $column144;

        return $this;
    }

    public function getColumn145(): ?int
    {
        return $this->column145;
    }

    public function setColumn145(?int $column145): self
    {
        $this->column145 = $column145;

        return $this;
    }

    public function getColumn146(): ?int
    {
        return $this->column146;
    }

    public function setColumn146(?int $column146): self
    {
        $this->column146 = $column146;

        return $this;
    }

    public function getColumn147(): ?int
    {
        return $this->column147;
    }

    public function setColumn147(?int $column147): self
    {
        $this->column147 = $column147;

        return $this;
    }

    public function getColumn148(): ?int
    {
        return $this->column148;
    }

    public function setColumn148(?int $column148): self
    {
        $this->column148 = $column148;

        return $this;
    }

    public function getColumn149(): ?int
    {
        return $this->column149;
    }

    public function setColumn149(?int $column149): self
    {
        $this->column149 = $column149;

        return $this;
    }

    public function getColumn150(): ?int
    {
        return $this->column150;
    }

    public function setColumn150(?int $column150): self
    {
        $this->column150 = $column150;

        return $this;
    }

    public function getColumn151(): ?int
    {
        return $this->column151;
    }

    public function setColumn151(?int $column151): self
    {
        $this->column151 = $column151;

        return $this;
    }

    public function getColumn152(): ?int
    {
        return $this->column152;
    }

    public function setColumn152(?int $column152): self
    {
        $this->column152 = $column152;

        return $this;
    }

    public function getColumn153(): ?int
    {
        return $this->column153;
    }

    public function setColumn153(?int $column153): self
    {
        $this->column153 = $column153;

        return $this;
    }

    public function getColumn154(): ?int
    {
        return $this->column154;
    }

    public function setColumn154(?int $column154): self
    {
        $this->column154 = $column154;

        return $this;
    }

    public function getColumn155(): ?int
    {
        return $this->column155;
    }

    public function setColumn155(?int $column155): self
    {
        $this->column155 = $column155;

        return $this;
    }

    public function getColumn156(): ?int
    {
        return $this->column156;
    }

    public function setColumn156(?int $column156): self
    {
        $this->column156 = $column156;

        return $this;
    }

    public function getColumn157(): ?int
    {
        return $this->column157;
    }

    public function setColumn157(?int $column157): self
    {
        $this->column157 = $column157;

        return $this;
    }

    public function getColumn158(): ?int
    {
        return $this->column158;
    }

    public function setColumn158(?int $column158): self
    {
        $this->column158 = $column158;

        return $this;
    }

    public function getColumn159(): ?int
    {
        return $this->column159;
    }

    public function setColumn159(?int $column159): self
    {
        $this->column159 = $column159;

        return $this;
    }

    public function getColumn160(): ?int
    {
        return $this->column160;
    }

    public function setColumn160(?int $column160): self
    {
        $this->column160 = $column160;

        return $this;
    }

    public function getColumn161(): ?int
    {
        return $this->column161;
    }

    public function setColumn161(?int $column161): self
    {
        $this->column161 = $column161;

        return $this;
    }
}
