<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Frontline04.
 *
 * @ORM\Table(name="frontline04", indexes={@ORM\Index(name="idx_ffc5215630176791", columns={"level_3"}), @ORM\Index(name="idx_ffc52156de1906bd", columns={"level_1"}), @ORM\Index(name="idx_ffc5215647105707", columns={"level_2"})})
 * @ORM\Entity
 */
class Frontline04
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="frontline04_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

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
     * @ORM\Column(name="column_66", type="integer", nullable=true)
     */
    private $column66;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_67", type="integer", nullable=true)
     */
    private $column67;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_68", type="integer", nullable=true)
     */
    private $column68;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_69", type="integer", nullable=true)
     */
    private $column69;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_70", type="integer", nullable=true)
     */
    private $column70;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_71", type="integer", nullable=true)
     */
    private $column71;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_72", type="integer", nullable=true)
     */
    private $column72;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_73", type="integer", nullable=true)
     */
    private $column73;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_74", type="integer", nullable=true)
     */
    private $column74;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_75", type="integer", nullable=true)
     */
    private $column75;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_76", type="integer", nullable=true)
     */
    private $column76;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_77", type="integer", nullable=true)
     */
    private $column77;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_78", type="integer", nullable=true)
     */
    private $column78;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_79", type="integer", nullable=true)
     */
    private $column79;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_80", type="integer", nullable=true)
     */
    private $column80;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_81", type="integer", nullable=true)
     */
    private $column81;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_82", type="integer", nullable=true)
     */
    private $column82;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_83", type="integer", nullable=true)
     */
    private $column83;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_84", type="integer", nullable=true)
     */
    private $column84;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_85", type="integer", nullable=true)
     */
    private $column85;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_86", type="integer", nullable=true)
     */
    private $column86;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_87", type="integer", nullable=true)
     */
    private $column87;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_88", type="integer", nullable=true)
     */
    private $column88;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_89", type="integer", nullable=true)
     */
    private $column89;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_90", type="integer", nullable=true)
     */
    private $column90;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_91", type="integer", nullable=true)
     */
    private $column91;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_92", type="integer", nullable=true)
     */
    private $column92;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_93", type="integer", nullable=true)
     */
    private $column93;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_94", type="integer", nullable=true)
     */
    private $column94;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_95", type="integer", nullable=true)
     */
    private $column95;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_96", type="integer", nullable=true)
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

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_129", type="integer", nullable=true)
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

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_162", type="integer", nullable=true)
     */
    private $column162;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_163", type="integer", nullable=true)
     */
    private $column163;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_164", type="integer", nullable=true)
     */
    private $column164;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_165", type="integer", nullable=true)
     */
    private $column165;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_166", type="integer", nullable=true)
     */
    private $column166;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_167", type="integer", nullable=true)
     */
    private $column167;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_168", type="integer", nullable=true)
     */
    private $column168;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_169", type="integer", nullable=true)
     */
    private $column169;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_170", type="integer", nullable=true)
     */
    private $column170;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_171", type="integer", nullable=true)
     */
    private $column171;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_172", type="integer", nullable=true)
     */
    private $column172;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_173", type="integer", nullable=true)
     */
    private $column173;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_174", type="integer", nullable=true)
     */
    private $column174;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_175", type="integer", nullable=true)
     */
    private $column175;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_176", type="integer", nullable=true)
     */
    private $column176;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_177", type="integer", nullable=true)
     */
    private $column177;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_178", type="integer", nullable=true)
     */
    private $column178;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_179", type="integer", nullable=true)
     */
    private $column179;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_180", type="integer", nullable=true)
     */
    private $column180;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_181", type="integer", nullable=true)
     */
    private $column181;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_182", type="integer", nullable=true)
     */
    private $column182;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_183", type="integer", nullable=true)
     */
    private $column183;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_184", type="integer", nullable=true)
     */
    private $column184;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_185", type="integer", nullable=true)
     */
    private $column185;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_186", type="integer", nullable=true)
     */
    private $column186;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_187", type="integer", nullable=true)
     */
    private $column187;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_188", type="integer", nullable=true)
     */
    private $column188;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_189", type="integer", nullable=true)
     */
    private $column189;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_190", type="integer", nullable=true)
     */
    private $column190;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_191", type="integer", nullable=true)
     */
    private $column191;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_192", type="integer", nullable=true)
     */
    private $column192;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_193", type="integer", nullable=true)
     */
    private $column193;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_194", type="integer", nullable=true)
     */
    private $column194;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_195", type="integer", nullable=true)
     */
    private $column195;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_196", type="integer", nullable=true)
     */
    private $column196;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_197", type="integer", nullable=true)
     */
    private $column197;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_198", type="integer", nullable=true)
     */
    private $column198;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_199", type="integer", nullable=true)
     */
    private $column199;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_200", type="integer", nullable=true)
     */
    private $column200;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_201", type="integer", nullable=true)
     */
    private $column201;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_202", type="integer", nullable=true)
     */
    private $column202;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_203", type="integer", nullable=true)
     */
    private $column203;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_204", type="integer", nullable=true)
     */
    private $column204;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_205", type="integer", nullable=true)
     */
    private $column205;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_206", type="integer", nullable=true)
     */
    private $column206;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_207", type="integer", nullable=true)
     */
    private $column207;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_208", type="integer", nullable=true)
     */
    private $column208;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_209", type="integer", nullable=true)
     */
    private $column209;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_210", type="integer", nullable=true)
     */
    private $column210;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_211", type="integer", nullable=true)
     */
    private $column211;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_212", type="integer", nullable=true)
     */
    private $column212;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_213", type="integer", nullable=true)
     */
    private $column213;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_214", type="integer", nullable=true)
     */
    private $column214;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_215", type="integer", nullable=true)
     */
    private $column215;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_216", type="integer", nullable=true)
     */
    private $column216;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_217", type="integer", nullable=true)
     */
    private $column217;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_218", type="integer", nullable=true)
     */
    private $column218;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_219", type="integer", nullable=true)
     */
    private $column219;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_220", type="integer", nullable=true)
     */
    private $column220;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_221", type="integer", nullable=true)
     */
    private $column221;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_222", type="integer", nullable=true)
     */
    private $column222;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_223", type="integer", nullable=true)
     */
    private $column223;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_224", type="integer", nullable=true)
     */
    private $column224;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_225", type="integer", nullable=true)
     */
    private $column225;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_226", type="integer", nullable=true)
     */
    private $column226;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_227", type="integer", nullable=true)
     */
    private $column227;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_228", type="integer", nullable=true)
     */
    private $column228;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_229", type="integer", nullable=true)
     */
    private $column229;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_230", type="integer", nullable=true)
     */
    private $column230;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_231", type="integer", nullable=true)
     */
    private $column231;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_232", type="integer", nullable=true)
     */
    private $column232;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_233", type="integer", nullable=true)
     */
    private $column233;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_234", type="integer", nullable=true)
     */
    private $column234;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_235", type="integer", nullable=true)
     */
    private $column235;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_236", type="integer", nullable=true)
     */
    private $column236;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_237", type="integer", nullable=true)
     */
    private $column237;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_238", type="integer", nullable=true)
     */
    private $column238;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_239", type="integer", nullable=true)
     */
    private $column239;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_240", type="integer", nullable=true)
     */
    private $column240;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_241", type="integer", nullable=true)
     */
    private $column241;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_242", type="integer", nullable=true)
     */
    private $column242;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_243", type="integer", nullable=true)
     */
    private $column243;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_244", type="integer", nullable=true)
     */
    private $column244;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_245", type="integer", nullable=true)
     */
    private $column245;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_246", type="integer", nullable=true)
     */
    private $column246;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_247", type="integer", nullable=true)
     */
    private $column247;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_248", type="integer", nullable=true)
     */
    private $column248;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_249", type="integer", nullable=true)
     */
    private $column249;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_250", type="integer", nullable=true)
     */
    private $column250;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_251", type="integer", nullable=true)
     */
    private $column251;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_252", type="integer", nullable=true)
     */
    private $column252;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_253", type="integer", nullable=true)
     */
    private $column253;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_254", type="integer", nullable=true)
     */
    private $column254;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_255", type="integer", nullable=true)
     */
    private $column255;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_256", type="integer", nullable=true)
     */
    private $column256;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_257", type="integer", nullable=true)
     */
    private $column257;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_258", type="integer", nullable=true)
     */
    private $column258;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_259", type="integer", nullable=true)
     */
    private $column259;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_260", type="integer", nullable=true)
     */
    private $column260;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_261", type="integer", nullable=true)
     */
    private $column261;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_262", type="integer", nullable=true)
     */
    private $column262;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_263", type="integer", nullable=true)
     */
    private $column263;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_264", type="integer", nullable=true)
     */
    private $column264;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_265", type="integer", nullable=true)
     */
    private $column265;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_266", type="integer", nullable=true)
     */
    private $column266;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_267", type="integer", nullable=true)
     */
    private $column267;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_268", type="integer", nullable=true)
     */
    private $column268;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_269", type="integer", nullable=true)
     */
    private $column269;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_270", type="integer", nullable=true)
     */
    private $column270;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_271", type="integer", nullable=true)
     */
    private $column271;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_272", type="integer", nullable=true)
     */
    private $column272;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_273", type="integer", nullable=true)
     */
    private $column273;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_274", type="integer", nullable=true)
     */
    private $column274;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_275", type="integer", nullable=true)
     */
    private $column275;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_276", type="integer", nullable=true)
     */
    private $column276;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_277", type="integer", nullable=true)
     */
    private $column277;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_278", type="integer", nullable=true)
     */
    private $column278;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_279", type="integer", nullable=true)
     */
    private $column279;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_280", type="integer", nullable=true)
     */
    private $column280;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_281", type="integer", nullable=true)
     */
    private $column281;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_282", type="integer", nullable=true)
     */
    private $column282;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_283", type="integer", nullable=true)
     */
    private $column283;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_284", type="integer", nullable=true)
     */
    private $column284;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_285", type="integer", nullable=true)
     */
    private $column285;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_286", type="integer", nullable=true)
     */
    private $column286;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_287", type="integer", nullable=true)
     */
    private $column287;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_288", type="integer", nullable=true)
     */
    private $column288;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_289", type="integer", nullable=true)
     */
    private $column289;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_290", type="integer", nullable=true)
     */
    private $column290;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_291", type="integer", nullable=true)
     */
    private $column291;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_292", type="integer", nullable=true)
     */
    private $column292;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_293", type="integer", nullable=true)
     */
    private $column293;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_294", type="integer", nullable=true)
     */
    private $column294;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_295", type="integer", nullable=true)
     */
    private $column295;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_296", type="integer", nullable=true)
     */
    private $column296;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_297", type="integer", nullable=true)
     */
    private $column297;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_298", type="integer", nullable=true)
     */
    private $column298;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_299", type="integer", nullable=true)
     */
    private $column299;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_300", type="integer", nullable=true)
     */
    private $column300;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_301", type="integer", nullable=true)
     */
    private $column301;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_302", type="integer", nullable=true)
     */
    private $column302;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_303", type="integer", nullable=true)
     */
    private $column303;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_304", type="integer", nullable=true)
     */
    private $column304;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_305", type="integer", nullable=true)
     */
    private $column305;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_306", type="integer", nullable=true)
     */
    private $column306;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_307", type="integer", nullable=true)
     */
    private $column307;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_308", type="integer", nullable=true)
     */
    private $column308;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_309", type="integer", nullable=true)
     */
    private $column309;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_310", type="integer", nullable=true)
     */
    private $column310;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_311", type="integer", nullable=true)
     */
    private $column311;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_312", type="integer", nullable=true)
     */
    private $column312;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_313", type="integer", nullable=true)
     */
    private $column313;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_314", type="integer", nullable=true)
     */
    private $column314;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_315", type="integer", nullable=true)
     */
    private $column315;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_316", type="integer", nullable=true)
     */
    private $column316;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_317", type="integer", nullable=true)
     */
    private $column317;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_318", type="integer", nullable=true)
     */
    private $column318;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_319", type="integer", nullable=true)
     */
    private $column319;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_320", type="integer", nullable=true)
     */
    private $column320;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_321", type="integer", nullable=true)
     */
    private $column321;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_322", type="integer", nullable=true)
     */
    private $column322;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_323", type="integer", nullable=true)
     */
    private $column323;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_324", type="integer", nullable=true)
     */
    private $column324;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_325", type="integer", nullable=true)
     */
    private $column325;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_326", type="integer", nullable=true)
     */
    private $column326;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_327", type="integer", nullable=true)
     */
    private $column327;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_328", type="integer", nullable=true)
     */
    private $column328;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_329", type="integer", nullable=true)
     */
    private $column329;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_330", type="integer", nullable=true)
     */
    private $column330;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_331", type="integer", nullable=true)
     */
    private $column331;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_332", type="integer", nullable=true)
     */
    private $column332;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_333", type="integer", nullable=true)
     */
    private $column333;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_334", type="integer", nullable=true)
     */
    private $column334;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_335", type="integer", nullable=true)
     */
    private $column335;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_336", type="integer", nullable=true)
     */
    private $column336;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_337", type="integer", nullable=true)
     */
    private $column337;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_338", type="integer", nullable=true)
     */
    private $column338;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_339", type="integer", nullable=true)
     */
    private $column339;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_340", type="integer", nullable=true)
     */
    private $column340;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_341", type="integer", nullable=true)
     */
    private $column341;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_342", type="integer", nullable=true)
     */
    private $column342;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_343", type="integer", nullable=true)
     */
    private $column343;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_344", type="integer", nullable=true)
     */
    private $column344;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_345", type="integer", nullable=true)
     */
    private $column345;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_346", type="integer", nullable=true)
     */
    private $column346;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_347", type="integer", nullable=true)
     */
    private $column347;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_348", type="integer", nullable=true)
     */
    private $column348;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_349", type="integer", nullable=true)
     */
    private $column349;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_350", type="integer", nullable=true)
     */
    private $column350;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_351", type="integer", nullable=true)
     */
    private $column351;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_352", type="integer", nullable=true)
     */
    private $column352;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_353", type="integer", nullable=true)
     */
    private $column353;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_354", type="integer", nullable=true)
     */
    private $column354;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_355", type="integer", nullable=true)
     */
    private $column355;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_356", type="integer", nullable=true)
     */
    private $column356;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_357", type="integer", nullable=true)
     */
    private $column357;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_358", type="integer", nullable=true)
     */
    private $column358;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_359", type="integer", nullable=true)
     */
    private $column359;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_360", type="integer", nullable=true)
     */
    private $column360;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_361", type="integer", nullable=true)
     */
    private $column361;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_362", type="integer", nullable=true)
     */
    private $column362;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_363", type="integer", nullable=true)
     */
    private $column363;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_364", type="integer", nullable=true)
     */
    private $column364;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_365", type="integer", nullable=true)
     */
    private $column365;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_366", type="integer", nullable=true)
     */
    private $column366;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_367", type="integer", nullable=true)
     */
    private $column367;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_368", type="integer", nullable=true)
     */
    private $column368;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_369", type="integer", nullable=true)
     */
    private $column369;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="level_3", referencedColumnName="pk")
     * })
     */
    private $level3;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="level_2", referencedColumnName="pk")
     * })
     */
    private $level2;

    /**
     * @var Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="level_1", referencedColumnName="pk")
     * })
     */
    private $level1;

    public function getPk(): ?int
    {
        return $this->pk;
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

    public function getColumn66(): ?int
    {
        return $this->column66;
    }

    public function setColumn66(?int $column66): self
    {
        $this->column66 = $column66;

        return $this;
    }

    public function getColumn67(): ?int
    {
        return $this->column67;
    }

    public function setColumn67(?int $column67): self
    {
        $this->column67 = $column67;

        return $this;
    }

    public function getColumn68(): ?int
    {
        return $this->column68;
    }

    public function setColumn68(?int $column68): self
    {
        $this->column68 = $column68;

        return $this;
    }

    public function getColumn69(): ?int
    {
        return $this->column69;
    }

    public function setColumn69(?int $column69): self
    {
        $this->column69 = $column69;

        return $this;
    }

    public function getColumn70(): ?int
    {
        return $this->column70;
    }

    public function setColumn70(?int $column70): self
    {
        $this->column70 = $column70;

        return $this;
    }

    public function getColumn71(): ?int
    {
        return $this->column71;
    }

    public function setColumn71(?int $column71): self
    {
        $this->column71 = $column71;

        return $this;
    }

    public function getColumn72(): ?int
    {
        return $this->column72;
    }

    public function setColumn72(?int $column72): self
    {
        $this->column72 = $column72;

        return $this;
    }

    public function getColumn73(): ?int
    {
        return $this->column73;
    }

    public function setColumn73(?int $column73): self
    {
        $this->column73 = $column73;

        return $this;
    }

    public function getColumn74(): ?int
    {
        return $this->column74;
    }

    public function setColumn74(?int $column74): self
    {
        $this->column74 = $column74;

        return $this;
    }

    public function getColumn75(): ?int
    {
        return $this->column75;
    }

    public function setColumn75(?int $column75): self
    {
        $this->column75 = $column75;

        return $this;
    }

    public function getColumn76(): ?int
    {
        return $this->column76;
    }

    public function setColumn76(?int $column76): self
    {
        $this->column76 = $column76;

        return $this;
    }

    public function getColumn77(): ?int
    {
        return $this->column77;
    }

    public function setColumn77(?int $column77): self
    {
        $this->column77 = $column77;

        return $this;
    }

    public function getColumn78(): ?int
    {
        return $this->column78;
    }

    public function setColumn78(?int $column78): self
    {
        $this->column78 = $column78;

        return $this;
    }

    public function getColumn79(): ?int
    {
        return $this->column79;
    }

    public function setColumn79(?int $column79): self
    {
        $this->column79 = $column79;

        return $this;
    }

    public function getColumn80(): ?int
    {
        return $this->column80;
    }

    public function setColumn80(?int $column80): self
    {
        $this->column80 = $column80;

        return $this;
    }

    public function getColumn81(): ?int
    {
        return $this->column81;
    }

    public function setColumn81(?int $column81): self
    {
        $this->column81 = $column81;

        return $this;
    }

    public function getColumn82(): ?int
    {
        return $this->column82;
    }

    public function setColumn82(?int $column82): self
    {
        $this->column82 = $column82;

        return $this;
    }

    public function getColumn83(): ?int
    {
        return $this->column83;
    }

    public function setColumn83(?int $column83): self
    {
        $this->column83 = $column83;

        return $this;
    }

    public function getColumn84(): ?int
    {
        return $this->column84;
    }

    public function setColumn84(?int $column84): self
    {
        $this->column84 = $column84;

        return $this;
    }

    public function getColumn85(): ?int
    {
        return $this->column85;
    }

    public function setColumn85(?int $column85): self
    {
        $this->column85 = $column85;

        return $this;
    }

    public function getColumn86(): ?int
    {
        return $this->column86;
    }

    public function setColumn86(?int $column86): self
    {
        $this->column86 = $column86;

        return $this;
    }

    public function getColumn87(): ?int
    {
        return $this->column87;
    }

    public function setColumn87(?int $column87): self
    {
        $this->column87 = $column87;

        return $this;
    }

    public function getColumn88(): ?int
    {
        return $this->column88;
    }

    public function setColumn88(?int $column88): self
    {
        $this->column88 = $column88;

        return $this;
    }

    public function getColumn89(): ?int
    {
        return $this->column89;
    }

    public function setColumn89(?int $column89): self
    {
        $this->column89 = $column89;

        return $this;
    }

    public function getColumn90(): ?int
    {
        return $this->column90;
    }

    public function setColumn90(?int $column90): self
    {
        $this->column90 = $column90;

        return $this;
    }

    public function getColumn91(): ?int
    {
        return $this->column91;
    }

    public function setColumn91(?int $column91): self
    {
        $this->column91 = $column91;

        return $this;
    }

    public function getColumn92(): ?int
    {
        return $this->column92;
    }

    public function setColumn92(?int $column92): self
    {
        $this->column92 = $column92;

        return $this;
    }

    public function getColumn93(): ?int
    {
        return $this->column93;
    }

    public function setColumn93(?int $column93): self
    {
        $this->column93 = $column93;

        return $this;
    }

    public function getColumn94(): ?int
    {
        return $this->column94;
    }

    public function setColumn94(?int $column94): self
    {
        $this->column94 = $column94;

        return $this;
    }

    public function getColumn95(): ?int
    {
        return $this->column95;
    }

    public function setColumn95(?int $column95): self
    {
        $this->column95 = $column95;

        return $this;
    }

    public function getColumn96(): ?int
    {
        return $this->column96;
    }

    public function setColumn96(?int $column96): self
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

    public function getColumn129(): ?int
    {
        return $this->column129;
    }

    public function setColumn129(?int $column129): self
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

    public function getColumn162(): ?int
    {
        return $this->column162;
    }

    public function setColumn162(?int $column162): self
    {
        $this->column162 = $column162;

        return $this;
    }

    public function getColumn163(): ?int
    {
        return $this->column163;
    }

    public function setColumn163(?int $column163): self
    {
        $this->column163 = $column163;

        return $this;
    }

    public function getColumn164(): ?int
    {
        return $this->column164;
    }

    public function setColumn164(?int $column164): self
    {
        $this->column164 = $column164;

        return $this;
    }

    public function getColumn165(): ?int
    {
        return $this->column165;
    }

    public function setColumn165(?int $column165): self
    {
        $this->column165 = $column165;

        return $this;
    }

    public function getColumn166(): ?int
    {
        return $this->column166;
    }

    public function setColumn166(?int $column166): self
    {
        $this->column166 = $column166;

        return $this;
    }

    public function getColumn167(): ?int
    {
        return $this->column167;
    }

    public function setColumn167(?int $column167): self
    {
        $this->column167 = $column167;

        return $this;
    }

    public function getColumn168(): ?int
    {
        return $this->column168;
    }

    public function setColumn168(?int $column168): self
    {
        $this->column168 = $column168;

        return $this;
    }

    public function getColumn169(): ?int
    {
        return $this->column169;
    }

    public function setColumn169(?int $column169): self
    {
        $this->column169 = $column169;

        return $this;
    }

    public function getColumn170(): ?int
    {
        return $this->column170;
    }

    public function setColumn170(?int $column170): self
    {
        $this->column170 = $column170;

        return $this;
    }

    public function getColumn171(): ?int
    {
        return $this->column171;
    }

    public function setColumn171(?int $column171): self
    {
        $this->column171 = $column171;

        return $this;
    }

    public function getColumn172(): ?int
    {
        return $this->column172;
    }

    public function setColumn172(?int $column172): self
    {
        $this->column172 = $column172;

        return $this;
    }

    public function getColumn173(): ?int
    {
        return $this->column173;
    }

    public function setColumn173(?int $column173): self
    {
        $this->column173 = $column173;

        return $this;
    }

    public function getColumn174(): ?int
    {
        return $this->column174;
    }

    public function setColumn174(?int $column174): self
    {
        $this->column174 = $column174;

        return $this;
    }

    public function getColumn175(): ?int
    {
        return $this->column175;
    }

    public function setColumn175(?int $column175): self
    {
        $this->column175 = $column175;

        return $this;
    }

    public function getColumn176(): ?int
    {
        return $this->column176;
    }

    public function setColumn176(?int $column176): self
    {
        $this->column176 = $column176;

        return $this;
    }

    public function getColumn177(): ?int
    {
        return $this->column177;
    }

    public function setColumn177(?int $column177): self
    {
        $this->column177 = $column177;

        return $this;
    }

    public function getColumn178(): ?int
    {
        return $this->column178;
    }

    public function setColumn178(?int $column178): self
    {
        $this->column178 = $column178;

        return $this;
    }

    public function getColumn179(): ?int
    {
        return $this->column179;
    }

    public function setColumn179(?int $column179): self
    {
        $this->column179 = $column179;

        return $this;
    }

    public function getColumn180(): ?int
    {
        return $this->column180;
    }

    public function setColumn180(?int $column180): self
    {
        $this->column180 = $column180;

        return $this;
    }

    public function getColumn181(): ?int
    {
        return $this->column181;
    }

    public function setColumn181(?int $column181): self
    {
        $this->column181 = $column181;

        return $this;
    }

    public function getColumn182(): ?int
    {
        return $this->column182;
    }

    public function setColumn182(?int $column182): self
    {
        $this->column182 = $column182;

        return $this;
    }

    public function getColumn183(): ?int
    {
        return $this->column183;
    }

    public function setColumn183(?int $column183): self
    {
        $this->column183 = $column183;

        return $this;
    }

    public function getColumn184(): ?int
    {
        return $this->column184;
    }

    public function setColumn184(?int $column184): self
    {
        $this->column184 = $column184;

        return $this;
    }

    public function getColumn185(): ?int
    {
        return $this->column185;
    }

    public function setColumn185(?int $column185): self
    {
        $this->column185 = $column185;

        return $this;
    }

    public function getColumn186(): ?int
    {
        return $this->column186;
    }

    public function setColumn186(?int $column186): self
    {
        $this->column186 = $column186;

        return $this;
    }

    public function getColumn187(): ?int
    {
        return $this->column187;
    }

    public function setColumn187(?int $column187): self
    {
        $this->column187 = $column187;

        return $this;
    }

    public function getColumn188(): ?int
    {
        return $this->column188;
    }

    public function setColumn188(?int $column188): self
    {
        $this->column188 = $column188;

        return $this;
    }

    public function getColumn189(): ?int
    {
        return $this->column189;
    }

    public function setColumn189(?int $column189): self
    {
        $this->column189 = $column189;

        return $this;
    }

    public function getColumn190(): ?int
    {
        return $this->column190;
    }

    public function setColumn190(?int $column190): self
    {
        $this->column190 = $column190;

        return $this;
    }

    public function getColumn191(): ?int
    {
        return $this->column191;
    }

    public function setColumn191(?int $column191): self
    {
        $this->column191 = $column191;

        return $this;
    }

    public function getColumn192(): ?int
    {
        return $this->column192;
    }

    public function setColumn192(?int $column192): self
    {
        $this->column192 = $column192;

        return $this;
    }

    public function getColumn193(): ?int
    {
        return $this->column193;
    }

    public function setColumn193(?int $column193): self
    {
        $this->column193 = $column193;

        return $this;
    }

    public function getColumn194(): ?int
    {
        return $this->column194;
    }

    public function setColumn194(?int $column194): self
    {
        $this->column194 = $column194;

        return $this;
    }

    public function getColumn195(): ?int
    {
        return $this->column195;
    }

    public function setColumn195(?int $column195): self
    {
        $this->column195 = $column195;

        return $this;
    }

    public function getColumn196(): ?int
    {
        return $this->column196;
    }

    public function setColumn196(?int $column196): self
    {
        $this->column196 = $column196;

        return $this;
    }

    public function getColumn197(): ?int
    {
        return $this->column197;
    }

    public function setColumn197(?int $column197): self
    {
        $this->column197 = $column197;

        return $this;
    }

    public function getColumn198(): ?int
    {
        return $this->column198;
    }

    public function setColumn198(?int $column198): self
    {
        $this->column198 = $column198;

        return $this;
    }

    public function getColumn199(): ?int
    {
        return $this->column199;
    }

    public function setColumn199(?int $column199): self
    {
        $this->column199 = $column199;

        return $this;
    }

    public function getColumn200(): ?int
    {
        return $this->column200;
    }

    public function setColumn200(?int $column200): self
    {
        $this->column200 = $column200;

        return $this;
    }

    public function getColumn201(): ?int
    {
        return $this->column201;
    }

    public function setColumn201(?int $column201): self
    {
        $this->column201 = $column201;

        return $this;
    }

    public function getColumn202(): ?int
    {
        return $this->column202;
    }

    public function setColumn202(?int $column202): self
    {
        $this->column202 = $column202;

        return $this;
    }

    public function getColumn203(): ?int
    {
        return $this->column203;
    }

    public function setColumn203(?int $column203): self
    {
        $this->column203 = $column203;

        return $this;
    }

    public function getColumn204(): ?int
    {
        return $this->column204;
    }

    public function setColumn204(?int $column204): self
    {
        $this->column204 = $column204;

        return $this;
    }

    public function getColumn205(): ?int
    {
        return $this->column205;
    }

    public function setColumn205(?int $column205): self
    {
        $this->column205 = $column205;

        return $this;
    }

    public function getColumn206(): ?int
    {
        return $this->column206;
    }

    public function setColumn206(?int $column206): self
    {
        $this->column206 = $column206;

        return $this;
    }

    public function getColumn207(): ?int
    {
        return $this->column207;
    }

    public function setColumn207(?int $column207): self
    {
        $this->column207 = $column207;

        return $this;
    }

    public function getColumn208(): ?int
    {
        return $this->column208;
    }

    public function setColumn208(?int $column208): self
    {
        $this->column208 = $column208;

        return $this;
    }

    public function getColumn209(): ?int
    {
        return $this->column209;
    }

    public function setColumn209(?int $column209): self
    {
        $this->column209 = $column209;

        return $this;
    }

    public function getColumn210(): ?int
    {
        return $this->column210;
    }

    public function setColumn210(?int $column210): self
    {
        $this->column210 = $column210;

        return $this;
    }

    public function getColumn211(): ?int
    {
        return $this->column211;
    }

    public function setColumn211(?int $column211): self
    {
        $this->column211 = $column211;

        return $this;
    }

    public function getColumn212(): ?int
    {
        return $this->column212;
    }

    public function setColumn212(?int $column212): self
    {
        $this->column212 = $column212;

        return $this;
    }

    public function getColumn213(): ?int
    {
        return $this->column213;
    }

    public function setColumn213(?int $column213): self
    {
        $this->column213 = $column213;

        return $this;
    }

    public function getColumn214(): ?int
    {
        return $this->column214;
    }

    public function setColumn214(?int $column214): self
    {
        $this->column214 = $column214;

        return $this;
    }

    public function getColumn215(): ?int
    {
        return $this->column215;
    }

    public function setColumn215(?int $column215): self
    {
        $this->column215 = $column215;

        return $this;
    }

    public function getColumn216(): ?int
    {
        return $this->column216;
    }

    public function setColumn216(?int $column216): self
    {
        $this->column216 = $column216;

        return $this;
    }

    public function getColumn217(): ?int
    {
        return $this->column217;
    }

    public function setColumn217(?int $column217): self
    {
        $this->column217 = $column217;

        return $this;
    }

    public function getColumn218(): ?int
    {
        return $this->column218;
    }

    public function setColumn218(?int $column218): self
    {
        $this->column218 = $column218;

        return $this;
    }

    public function getColumn219(): ?int
    {
        return $this->column219;
    }

    public function setColumn219(?int $column219): self
    {
        $this->column219 = $column219;

        return $this;
    }

    public function getColumn220(): ?int
    {
        return $this->column220;
    }

    public function setColumn220(?int $column220): self
    {
        $this->column220 = $column220;

        return $this;
    }

    public function getColumn221(): ?int
    {
        return $this->column221;
    }

    public function setColumn221(?int $column221): self
    {
        $this->column221 = $column221;

        return $this;
    }

    public function getColumn222(): ?int
    {
        return $this->column222;
    }

    public function setColumn222(?int $column222): self
    {
        $this->column222 = $column222;

        return $this;
    }

    public function getColumn223(): ?int
    {
        return $this->column223;
    }

    public function setColumn223(?int $column223): self
    {
        $this->column223 = $column223;

        return $this;
    }

    public function getColumn224(): ?int
    {
        return $this->column224;
    }

    public function setColumn224(?int $column224): self
    {
        $this->column224 = $column224;

        return $this;
    }

    public function getColumn225(): ?int
    {
        return $this->column225;
    }

    public function setColumn225(?int $column225): self
    {
        $this->column225 = $column225;

        return $this;
    }

    public function getColumn226(): ?int
    {
        return $this->column226;
    }

    public function setColumn226(?int $column226): self
    {
        $this->column226 = $column226;

        return $this;
    }

    public function getColumn227(): ?int
    {
        return $this->column227;
    }

    public function setColumn227(?int $column227): self
    {
        $this->column227 = $column227;

        return $this;
    }

    public function getColumn228(): ?int
    {
        return $this->column228;
    }

    public function setColumn228(?int $column228): self
    {
        $this->column228 = $column228;

        return $this;
    }

    public function getColumn229(): ?int
    {
        return $this->column229;
    }

    public function setColumn229(?int $column229): self
    {
        $this->column229 = $column229;

        return $this;
    }

    public function getColumn230(): ?int
    {
        return $this->column230;
    }

    public function setColumn230(?int $column230): self
    {
        $this->column230 = $column230;

        return $this;
    }

    public function getColumn231(): ?int
    {
        return $this->column231;
    }

    public function setColumn231(?int $column231): self
    {
        $this->column231 = $column231;

        return $this;
    }

    public function getColumn232(): ?int
    {
        return $this->column232;
    }

    public function setColumn232(?int $column232): self
    {
        $this->column232 = $column232;

        return $this;
    }

    public function getColumn233(): ?int
    {
        return $this->column233;
    }

    public function setColumn233(?int $column233): self
    {
        $this->column233 = $column233;

        return $this;
    }

    public function getColumn234(): ?int
    {
        return $this->column234;
    }

    public function setColumn234(?int $column234): self
    {
        $this->column234 = $column234;

        return $this;
    }

    public function getColumn235(): ?int
    {
        return $this->column235;
    }

    public function setColumn235(?int $column235): self
    {
        $this->column235 = $column235;

        return $this;
    }

    public function getColumn236(): ?int
    {
        return $this->column236;
    }

    public function setColumn236(?int $column236): self
    {
        $this->column236 = $column236;

        return $this;
    }

    public function getColumn237(): ?int
    {
        return $this->column237;
    }

    public function setColumn237(?int $column237): self
    {
        $this->column237 = $column237;

        return $this;
    }

    public function getColumn238(): ?int
    {
        return $this->column238;
    }

    public function setColumn238(?int $column238): self
    {
        $this->column238 = $column238;

        return $this;
    }

    public function getColumn239(): ?int
    {
        return $this->column239;
    }

    public function setColumn239(?int $column239): self
    {
        $this->column239 = $column239;

        return $this;
    }

    public function getColumn240(): ?int
    {
        return $this->column240;
    }

    public function setColumn240(?int $column240): self
    {
        $this->column240 = $column240;

        return $this;
    }

    public function getColumn241(): ?int
    {
        return $this->column241;
    }

    public function setColumn241(?int $column241): self
    {
        $this->column241 = $column241;

        return $this;
    }

    public function getColumn242(): ?int
    {
        return $this->column242;
    }

    public function setColumn242(?int $column242): self
    {
        $this->column242 = $column242;

        return $this;
    }

    public function getColumn243(): ?int
    {
        return $this->column243;
    }

    public function setColumn243(?int $column243): self
    {
        $this->column243 = $column243;

        return $this;
    }

    public function getColumn244(): ?int
    {
        return $this->column244;
    }

    public function setColumn244(?int $column244): self
    {
        $this->column244 = $column244;

        return $this;
    }

    public function getColumn245(): ?int
    {
        return $this->column245;
    }

    public function setColumn245(?int $column245): self
    {
        $this->column245 = $column245;

        return $this;
    }

    public function getColumn246(): ?int
    {
        return $this->column246;
    }

    public function setColumn246(?int $column246): self
    {
        $this->column246 = $column246;

        return $this;
    }

    public function getColumn247(): ?int
    {
        return $this->column247;
    }

    public function setColumn247(?int $column247): self
    {
        $this->column247 = $column247;

        return $this;
    }

    public function getColumn248(): ?int
    {
        return $this->column248;
    }

    public function setColumn248(?int $column248): self
    {
        $this->column248 = $column248;

        return $this;
    }

    public function getColumn249(): ?int
    {
        return $this->column249;
    }

    public function setColumn249(?int $column249): self
    {
        $this->column249 = $column249;

        return $this;
    }

    public function getColumn250(): ?int
    {
        return $this->column250;
    }

    public function setColumn250(?int $column250): self
    {
        $this->column250 = $column250;

        return $this;
    }

    public function getColumn251(): ?int
    {
        return $this->column251;
    }

    public function setColumn251(?int $column251): self
    {
        $this->column251 = $column251;

        return $this;
    }

    public function getColumn252(): ?int
    {
        return $this->column252;
    }

    public function setColumn252(?int $column252): self
    {
        $this->column252 = $column252;

        return $this;
    }

    public function getColumn253(): ?int
    {
        return $this->column253;
    }

    public function setColumn253(?int $column253): self
    {
        $this->column253 = $column253;

        return $this;
    }

    public function getColumn254(): ?int
    {
        return $this->column254;
    }

    public function setColumn254(?int $column254): self
    {
        $this->column254 = $column254;

        return $this;
    }

    public function getColumn255(): ?int
    {
        return $this->column255;
    }

    public function setColumn255(?int $column255): self
    {
        $this->column255 = $column255;

        return $this;
    }

    public function getColumn256(): ?int
    {
        return $this->column256;
    }

    public function setColumn256(?int $column256): self
    {
        $this->column256 = $column256;

        return $this;
    }

    public function getColumn257(): ?int
    {
        return $this->column257;
    }

    public function setColumn257(?int $column257): self
    {
        $this->column257 = $column257;

        return $this;
    }

    public function getColumn258(): ?int
    {
        return $this->column258;
    }

    public function setColumn258(?int $column258): self
    {
        $this->column258 = $column258;

        return $this;
    }

    public function getColumn259(): ?int
    {
        return $this->column259;
    }

    public function setColumn259(?int $column259): self
    {
        $this->column259 = $column259;

        return $this;
    }

    public function getColumn260(): ?int
    {
        return $this->column260;
    }

    public function setColumn260(?int $column260): self
    {
        $this->column260 = $column260;

        return $this;
    }

    public function getColumn261(): ?int
    {
        return $this->column261;
    }

    public function setColumn261(?int $column261): self
    {
        $this->column261 = $column261;

        return $this;
    }

    public function getColumn262(): ?int
    {
        return $this->column262;
    }

    public function setColumn262(?int $column262): self
    {
        $this->column262 = $column262;

        return $this;
    }

    public function getColumn263(): ?int
    {
        return $this->column263;
    }

    public function setColumn263(?int $column263): self
    {
        $this->column263 = $column263;

        return $this;
    }

    public function getColumn264(): ?int
    {
        return $this->column264;
    }

    public function setColumn264(?int $column264): self
    {
        $this->column264 = $column264;

        return $this;
    }

    public function getColumn265(): ?int
    {
        return $this->column265;
    }

    public function setColumn265(?int $column265): self
    {
        $this->column265 = $column265;

        return $this;
    }

    public function getColumn266(): ?int
    {
        return $this->column266;
    }

    public function setColumn266(?int $column266): self
    {
        $this->column266 = $column266;

        return $this;
    }

    public function getColumn267(): ?int
    {
        return $this->column267;
    }

    public function setColumn267(?int $column267): self
    {
        $this->column267 = $column267;

        return $this;
    }

    public function getColumn268(): ?int
    {
        return $this->column268;
    }

    public function setColumn268(?int $column268): self
    {
        $this->column268 = $column268;

        return $this;
    }

    public function getColumn269(): ?int
    {
        return $this->column269;
    }

    public function setColumn269(?int $column269): self
    {
        $this->column269 = $column269;

        return $this;
    }

    public function getColumn270(): ?int
    {
        return $this->column270;
    }

    public function setColumn270(?int $column270): self
    {
        $this->column270 = $column270;

        return $this;
    }

    public function getColumn271(): ?int
    {
        return $this->column271;
    }

    public function setColumn271(?int $column271): self
    {
        $this->column271 = $column271;

        return $this;
    }

    public function getColumn272(): ?int
    {
        return $this->column272;
    }

    public function setColumn272(?int $column272): self
    {
        $this->column272 = $column272;

        return $this;
    }

    public function getColumn273(): ?int
    {
        return $this->column273;
    }

    public function setColumn273(?int $column273): self
    {
        $this->column273 = $column273;

        return $this;
    }

    public function getColumn274(): ?int
    {
        return $this->column274;
    }

    public function setColumn274(?int $column274): self
    {
        $this->column274 = $column274;

        return $this;
    }

    public function getColumn275(): ?int
    {
        return $this->column275;
    }

    public function setColumn275(?int $column275): self
    {
        $this->column275 = $column275;

        return $this;
    }

    public function getColumn276(): ?int
    {
        return $this->column276;
    }

    public function setColumn276(?int $column276): self
    {
        $this->column276 = $column276;

        return $this;
    }

    public function getColumn277(): ?int
    {
        return $this->column277;
    }

    public function setColumn277(?int $column277): self
    {
        $this->column277 = $column277;

        return $this;
    }

    public function getColumn278(): ?int
    {
        return $this->column278;
    }

    public function setColumn278(?int $column278): self
    {
        $this->column278 = $column278;

        return $this;
    }

    public function getColumn279(): ?int
    {
        return $this->column279;
    }

    public function setColumn279(?int $column279): self
    {
        $this->column279 = $column279;

        return $this;
    }

    public function getColumn280(): ?int
    {
        return $this->column280;
    }

    public function setColumn280(?int $column280): self
    {
        $this->column280 = $column280;

        return $this;
    }

    public function getColumn281(): ?int
    {
        return $this->column281;
    }

    public function setColumn281(?int $column281): self
    {
        $this->column281 = $column281;

        return $this;
    }

    public function getColumn282(): ?int
    {
        return $this->column282;
    }

    public function setColumn282(?int $column282): self
    {
        $this->column282 = $column282;

        return $this;
    }

    public function getColumn283(): ?int
    {
        return $this->column283;
    }

    public function setColumn283(?int $column283): self
    {
        $this->column283 = $column283;

        return $this;
    }

    public function getColumn284(): ?int
    {
        return $this->column284;
    }

    public function setColumn284(?int $column284): self
    {
        $this->column284 = $column284;

        return $this;
    }

    public function getColumn285(): ?int
    {
        return $this->column285;
    }

    public function setColumn285(?int $column285): self
    {
        $this->column285 = $column285;

        return $this;
    }

    public function getColumn286(): ?int
    {
        return $this->column286;
    }

    public function setColumn286(?int $column286): self
    {
        $this->column286 = $column286;

        return $this;
    }

    public function getColumn287(): ?int
    {
        return $this->column287;
    }

    public function setColumn287(?int $column287): self
    {
        $this->column287 = $column287;

        return $this;
    }

    public function getColumn288(): ?int
    {
        return $this->column288;
    }

    public function setColumn288(?int $column288): self
    {
        $this->column288 = $column288;

        return $this;
    }

    public function getColumn289(): ?int
    {
        return $this->column289;
    }

    public function setColumn289(?int $column289): self
    {
        $this->column289 = $column289;

        return $this;
    }

    public function getColumn290(): ?int
    {
        return $this->column290;
    }

    public function setColumn290(?int $column290): self
    {
        $this->column290 = $column290;

        return $this;
    }

    public function getColumn291(): ?int
    {
        return $this->column291;
    }

    public function setColumn291(?int $column291): self
    {
        $this->column291 = $column291;

        return $this;
    }

    public function getColumn292(): ?int
    {
        return $this->column292;
    }

    public function setColumn292(?int $column292): self
    {
        $this->column292 = $column292;

        return $this;
    }

    public function getColumn293(): ?int
    {
        return $this->column293;
    }

    public function setColumn293(?int $column293): self
    {
        $this->column293 = $column293;

        return $this;
    }

    public function getColumn294(): ?int
    {
        return $this->column294;
    }

    public function setColumn294(?int $column294): self
    {
        $this->column294 = $column294;

        return $this;
    }

    public function getColumn295(): ?int
    {
        return $this->column295;
    }

    public function setColumn295(?int $column295): self
    {
        $this->column295 = $column295;

        return $this;
    }

    public function getColumn296(): ?int
    {
        return $this->column296;
    }

    public function setColumn296(?int $column296): self
    {
        $this->column296 = $column296;

        return $this;
    }

    public function getColumn297(): ?int
    {
        return $this->column297;
    }

    public function setColumn297(?int $column297): self
    {
        $this->column297 = $column297;

        return $this;
    }

    public function getColumn298(): ?int
    {
        return $this->column298;
    }

    public function setColumn298(?int $column298): self
    {
        $this->column298 = $column298;

        return $this;
    }

    public function getColumn299(): ?int
    {
        return $this->column299;
    }

    public function setColumn299(?int $column299): self
    {
        $this->column299 = $column299;

        return $this;
    }

    public function getColumn300(): ?int
    {
        return $this->column300;
    }

    public function setColumn300(?int $column300): self
    {
        $this->column300 = $column300;

        return $this;
    }

    public function getColumn301(): ?int
    {
        return $this->column301;
    }

    public function setColumn301(?int $column301): self
    {
        $this->column301 = $column301;

        return $this;
    }

    public function getColumn302(): ?int
    {
        return $this->column302;
    }

    public function setColumn302(?int $column302): self
    {
        $this->column302 = $column302;

        return $this;
    }

    public function getColumn303(): ?int
    {
        return $this->column303;
    }

    public function setColumn303(?int $column303): self
    {
        $this->column303 = $column303;

        return $this;
    }

    public function getColumn304(): ?int
    {
        return $this->column304;
    }

    public function setColumn304(?int $column304): self
    {
        $this->column304 = $column304;

        return $this;
    }

    public function getColumn305(): ?int
    {
        return $this->column305;
    }

    public function setColumn305(?int $column305): self
    {
        $this->column305 = $column305;

        return $this;
    }

    public function getColumn306(): ?int
    {
        return $this->column306;
    }

    public function setColumn306(?int $column306): self
    {
        $this->column306 = $column306;

        return $this;
    }

    public function getColumn307(): ?int
    {
        return $this->column307;
    }

    public function setColumn307(?int $column307): self
    {
        $this->column307 = $column307;

        return $this;
    }

    public function getColumn308(): ?int
    {
        return $this->column308;
    }

    public function setColumn308(?int $column308): self
    {
        $this->column308 = $column308;

        return $this;
    }

    public function getColumn309(): ?int
    {
        return $this->column309;
    }

    public function setColumn309(?int $column309): self
    {
        $this->column309 = $column309;

        return $this;
    }

    public function getColumn310(): ?int
    {
        return $this->column310;
    }

    public function setColumn310(?int $column310): self
    {
        $this->column310 = $column310;

        return $this;
    }

    public function getColumn311(): ?int
    {
        return $this->column311;
    }

    public function setColumn311(?int $column311): self
    {
        $this->column311 = $column311;

        return $this;
    }

    public function getColumn312(): ?int
    {
        return $this->column312;
    }

    public function setColumn312(?int $column312): self
    {
        $this->column312 = $column312;

        return $this;
    }

    public function getColumn313(): ?int
    {
        return $this->column313;
    }

    public function setColumn313(?int $column313): self
    {
        $this->column313 = $column313;

        return $this;
    }

    public function getColumn314(): ?int
    {
        return $this->column314;
    }

    public function setColumn314(?int $column314): self
    {
        $this->column314 = $column314;

        return $this;
    }

    public function getColumn315(): ?int
    {
        return $this->column315;
    }

    public function setColumn315(?int $column315): self
    {
        $this->column315 = $column315;

        return $this;
    }

    public function getColumn316(): ?int
    {
        return $this->column316;
    }

    public function setColumn316(?int $column316): self
    {
        $this->column316 = $column316;

        return $this;
    }

    public function getColumn317(): ?int
    {
        return $this->column317;
    }

    public function setColumn317(?int $column317): self
    {
        $this->column317 = $column317;

        return $this;
    }

    public function getColumn318(): ?int
    {
        return $this->column318;
    }

    public function setColumn318(?int $column318): self
    {
        $this->column318 = $column318;

        return $this;
    }

    public function getColumn319(): ?int
    {
        return $this->column319;
    }

    public function setColumn319(?int $column319): self
    {
        $this->column319 = $column319;

        return $this;
    }

    public function getColumn320(): ?int
    {
        return $this->column320;
    }

    public function setColumn320(?int $column320): self
    {
        $this->column320 = $column320;

        return $this;
    }

    public function getColumn321(): ?int
    {
        return $this->column321;
    }

    public function setColumn321(?int $column321): self
    {
        $this->column321 = $column321;

        return $this;
    }

    public function getColumn322(): ?int
    {
        return $this->column322;
    }

    public function setColumn322(?int $column322): self
    {
        $this->column322 = $column322;

        return $this;
    }

    public function getColumn323(): ?int
    {
        return $this->column323;
    }

    public function setColumn323(?int $column323): self
    {
        $this->column323 = $column323;

        return $this;
    }

    public function getColumn324(): ?int
    {
        return $this->column324;
    }

    public function setColumn324(?int $column324): self
    {
        $this->column324 = $column324;

        return $this;
    }

    public function getColumn325(): ?int
    {
        return $this->column325;
    }

    public function setColumn325(?int $column325): self
    {
        $this->column325 = $column325;

        return $this;
    }

    public function getColumn326(): ?int
    {
        return $this->column326;
    }

    public function setColumn326(?int $column326): self
    {
        $this->column326 = $column326;

        return $this;
    }

    public function getColumn327(): ?int
    {
        return $this->column327;
    }

    public function setColumn327(?int $column327): self
    {
        $this->column327 = $column327;

        return $this;
    }

    public function getColumn328(): ?int
    {
        return $this->column328;
    }

    public function setColumn328(?int $column328): self
    {
        $this->column328 = $column328;

        return $this;
    }

    public function getColumn329(): ?int
    {
        return $this->column329;
    }

    public function setColumn329(?int $column329): self
    {
        $this->column329 = $column329;

        return $this;
    }

    public function getColumn330(): ?int
    {
        return $this->column330;
    }

    public function setColumn330(?int $column330): self
    {
        $this->column330 = $column330;

        return $this;
    }

    public function getColumn331(): ?int
    {
        return $this->column331;
    }

    public function setColumn331(?int $column331): self
    {
        $this->column331 = $column331;

        return $this;
    }

    public function getColumn332(): ?int
    {
        return $this->column332;
    }

    public function setColumn332(?int $column332): self
    {
        $this->column332 = $column332;

        return $this;
    }

    public function getColumn333(): ?int
    {
        return $this->column333;
    }

    public function setColumn333(?int $column333): self
    {
        $this->column333 = $column333;

        return $this;
    }

    public function getColumn334(): ?int
    {
        return $this->column334;
    }

    public function setColumn334(?int $column334): self
    {
        $this->column334 = $column334;

        return $this;
    }

    public function getColumn335(): ?int
    {
        return $this->column335;
    }

    public function setColumn335(?int $column335): self
    {
        $this->column335 = $column335;

        return $this;
    }

    public function getColumn336(): ?int
    {
        return $this->column336;
    }

    public function setColumn336(?int $column336): self
    {
        $this->column336 = $column336;

        return $this;
    }

    public function getColumn337(): ?int
    {
        return $this->column337;
    }

    public function setColumn337(?int $column337): self
    {
        $this->column337 = $column337;

        return $this;
    }

    public function getColumn338(): ?int
    {
        return $this->column338;
    }

    public function setColumn338(?int $column338): self
    {
        $this->column338 = $column338;

        return $this;
    }

    public function getColumn339(): ?int
    {
        return $this->column339;
    }

    public function setColumn339(?int $column339): self
    {
        $this->column339 = $column339;

        return $this;
    }

    public function getColumn340(): ?int
    {
        return $this->column340;
    }

    public function setColumn340(?int $column340): self
    {
        $this->column340 = $column340;

        return $this;
    }

    public function getColumn341(): ?int
    {
        return $this->column341;
    }

    public function setColumn341(?int $column341): self
    {
        $this->column341 = $column341;

        return $this;
    }

    public function getColumn342(): ?int
    {
        return $this->column342;
    }

    public function setColumn342(?int $column342): self
    {
        $this->column342 = $column342;

        return $this;
    }

    public function getColumn343(): ?int
    {
        return $this->column343;
    }

    public function setColumn343(?int $column343): self
    {
        $this->column343 = $column343;

        return $this;
    }

    public function getColumn344(): ?int
    {
        return $this->column344;
    }

    public function setColumn344(?int $column344): self
    {
        $this->column344 = $column344;

        return $this;
    }

    public function getColumn345(): ?int
    {
        return $this->column345;
    }

    public function setColumn345(?int $column345): self
    {
        $this->column345 = $column345;

        return $this;
    }

    public function getColumn346(): ?int
    {
        return $this->column346;
    }

    public function setColumn346(?int $column346): self
    {
        $this->column346 = $column346;

        return $this;
    }

    public function getColumn347(): ?int
    {
        return $this->column347;
    }

    public function setColumn347(?int $column347): self
    {
        $this->column347 = $column347;

        return $this;
    }

    public function getColumn348(): ?int
    {
        return $this->column348;
    }

    public function setColumn348(?int $column348): self
    {
        $this->column348 = $column348;

        return $this;
    }

    public function getColumn349(): ?int
    {
        return $this->column349;
    }

    public function setColumn349(?int $column349): self
    {
        $this->column349 = $column349;

        return $this;
    }

    public function getColumn350(): ?int
    {
        return $this->column350;
    }

    public function setColumn350(?int $column350): self
    {
        $this->column350 = $column350;

        return $this;
    }

    public function getColumn351(): ?int
    {
        return $this->column351;
    }

    public function setColumn351(?int $column351): self
    {
        $this->column351 = $column351;

        return $this;
    }

    public function getColumn352(): ?int
    {
        return $this->column352;
    }

    public function setColumn352(?int $column352): self
    {
        $this->column352 = $column352;

        return $this;
    }

    public function getColumn353(): ?int
    {
        return $this->column353;
    }

    public function setColumn353(?int $column353): self
    {
        $this->column353 = $column353;

        return $this;
    }

    public function getColumn354(): ?int
    {
        return $this->column354;
    }

    public function setColumn354(?int $column354): self
    {
        $this->column354 = $column354;

        return $this;
    }

    public function getColumn355(): ?int
    {
        return $this->column355;
    }

    public function setColumn355(?int $column355): self
    {
        $this->column355 = $column355;

        return $this;
    }

    public function getColumn356(): ?int
    {
        return $this->column356;
    }

    public function setColumn356(?int $column356): self
    {
        $this->column356 = $column356;

        return $this;
    }

    public function getColumn357(): ?int
    {
        return $this->column357;
    }

    public function setColumn357(?int $column357): self
    {
        $this->column357 = $column357;

        return $this;
    }

    public function getColumn358(): ?int
    {
        return $this->column358;
    }

    public function setColumn358(?int $column358): self
    {
        $this->column358 = $column358;

        return $this;
    }

    public function getColumn359(): ?int
    {
        return $this->column359;
    }

    public function setColumn359(?int $column359): self
    {
        $this->column359 = $column359;

        return $this;
    }

    public function getColumn360(): ?int
    {
        return $this->column360;
    }

    public function setColumn360(?int $column360): self
    {
        $this->column360 = $column360;

        return $this;
    }

    public function getColumn361(): ?int
    {
        return $this->column361;
    }

    public function setColumn361(?int $column361): self
    {
        $this->column361 = $column361;

        return $this;
    }

    public function getColumn362(): ?int
    {
        return $this->column362;
    }

    public function setColumn362(?int $column362): self
    {
        $this->column362 = $column362;

        return $this;
    }

    public function getColumn363(): ?int
    {
        return $this->column363;
    }

    public function setColumn363(?int $column363): self
    {
        $this->column363 = $column363;

        return $this;
    }

    public function getColumn364(): ?int
    {
        return $this->column364;
    }

    public function setColumn364(?int $column364): self
    {
        $this->column364 = $column364;

        return $this;
    }

    public function getColumn365(): ?int
    {
        return $this->column365;
    }

    public function setColumn365(?int $column365): self
    {
        $this->column365 = $column365;

        return $this;
    }

    public function getColumn366(): ?int
    {
        return $this->column366;
    }

    public function setColumn366(?int $column366): self
    {
        $this->column366 = $column366;

        return $this;
    }

    public function getColumn367(): ?int
    {
        return $this->column367;
    }

    public function setColumn367(?int $column367): self
    {
        $this->column367 = $column367;

        return $this;
    }

    public function getColumn368(): ?int
    {
        return $this->column368;
    }

    public function setColumn368(?int $column368): self
    {
        $this->column368 = $column368;

        return $this;
    }

    public function getColumn369(): ?int
    {
        return $this->column369;
    }

    public function setColumn369(?int $column369): self
    {
        $this->column369 = $column369;

        return $this;
    }

    public function getLevel3(): ?Level
    {
        return $this->level3;
    }

    public function setLevel3(?Level $level3): self
    {
        $this->level3 = $level3;

        return $this;
    }

    public function getLevel2(): ?Level
    {
        return $this->level2;
    }

    public function setLevel2(?Level $level2): self
    {
        $this->level2 = $level2;

        return $this;
    }

    public function getLevel1(): ?Level
    {
        return $this->level1;
    }

    public function setLevel1(?Level $level1): self
    {
        $this->level1 = $level1;

        return $this;
    }
}
