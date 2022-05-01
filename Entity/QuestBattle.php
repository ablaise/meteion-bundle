<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * QuestBattle.
 *
 * @ORM\Table(name="quest_battle")
 * @ORM\Entity
 */
class QuestBattle
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="quest_battle_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quest", type="integer", nullable=true)
     */
    private $quest;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quest_battle_scene", type="integer", nullable=true)
     */
    private $questBattleScene;

    /**
     * @var int|null
     *
     * @ORM\Column(name="time_limit", type="bigint", nullable=true)
     */
    private $timeLimit;

    /**
     * @var int|null
     *
     * @ORM\Column(name="level_sync", type="bigint", nullable=true)
     */
    private $levelSync;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_0", type="string", length=255, nullable=true)
     */
    private $scriptInstruction0;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_1", type="string", length=255, nullable=true)
     */
    private $scriptInstruction1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_2", type="string", length=255, nullable=true)
     */
    private $scriptInstruction2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_3", type="string", length=255, nullable=true)
     */
    private $scriptInstruction3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_4", type="string", length=255, nullable=true)
     */
    private $scriptInstruction4;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_5", type="string", length=255, nullable=true)
     */
    private $scriptInstruction5;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_6", type="string", length=255, nullable=true)
     */
    private $scriptInstruction6;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_7", type="string", length=255, nullable=true)
     */
    private $scriptInstruction7;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_8", type="string", length=255, nullable=true)
     */
    private $scriptInstruction8;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_9", type="string", length=255, nullable=true)
     */
    private $scriptInstruction9;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_10", type="string", length=255, nullable=true)
     */
    private $scriptInstruction10;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_11", type="string", length=255, nullable=true)
     */
    private $scriptInstruction11;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_12", type="string", length=255, nullable=true)
     */
    private $scriptInstruction12;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_13", type="string", length=255, nullable=true)
     */
    private $scriptInstruction13;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_14", type="string", length=255, nullable=true)
     */
    private $scriptInstruction14;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_15", type="string", length=255, nullable=true)
     */
    private $scriptInstruction15;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_16", type="string", length=255, nullable=true)
     */
    private $scriptInstruction16;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_17", type="string", length=255, nullable=true)
     */
    private $scriptInstruction17;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_18", type="string", length=255, nullable=true)
     */
    private $scriptInstruction18;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_19", type="string", length=255, nullable=true)
     */
    private $scriptInstruction19;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_20", type="string", length=255, nullable=true)
     */
    private $scriptInstruction20;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_21", type="string", length=255, nullable=true)
     */
    private $scriptInstruction21;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_22", type="string", length=255, nullable=true)
     */
    private $scriptInstruction22;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_23", type="string", length=255, nullable=true)
     */
    private $scriptInstruction23;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_24", type="string", length=255, nullable=true)
     */
    private $scriptInstruction24;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_25", type="string", length=255, nullable=true)
     */
    private $scriptInstruction25;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_26", type="string", length=255, nullable=true)
     */
    private $scriptInstruction26;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_27", type="string", length=255, nullable=true)
     */
    private $scriptInstruction27;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_28", type="string", length=255, nullable=true)
     */
    private $scriptInstruction28;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_29", type="string", length=255, nullable=true)
     */
    private $scriptInstruction29;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_30", type="string", length=255, nullable=true)
     */
    private $scriptInstruction30;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_31", type="string", length=255, nullable=true)
     */
    private $scriptInstruction31;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_32", type="string", length=255, nullable=true)
     */
    private $scriptInstruction32;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_33", type="string", length=255, nullable=true)
     */
    private $scriptInstruction33;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_34", type="string", length=255, nullable=true)
     */
    private $scriptInstruction34;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_35", type="string", length=255, nullable=true)
     */
    private $scriptInstruction35;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_36", type="string", length=255, nullable=true)
     */
    private $scriptInstruction36;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_37", type="string", length=255, nullable=true)
     */
    private $scriptInstruction37;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_38", type="string", length=255, nullable=true)
     */
    private $scriptInstruction38;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_39", type="string", length=255, nullable=true)
     */
    private $scriptInstruction39;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_40", type="string", length=255, nullable=true)
     */
    private $scriptInstruction40;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_41", type="string", length=255, nullable=true)
     */
    private $scriptInstruction41;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_42", type="string", length=255, nullable=true)
     */
    private $scriptInstruction42;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_43", type="string", length=255, nullable=true)
     */
    private $scriptInstruction43;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_44", type="string", length=255, nullable=true)
     */
    private $scriptInstruction44;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_45", type="string", length=255, nullable=true)
     */
    private $scriptInstruction45;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_46", type="string", length=255, nullable=true)
     */
    private $scriptInstruction46;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_47", type="string", length=255, nullable=true)
     */
    private $scriptInstruction47;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_48", type="string", length=255, nullable=true)
     */
    private $scriptInstruction48;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_49", type="string", length=255, nullable=true)
     */
    private $scriptInstruction49;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_50", type="string", length=255, nullable=true)
     */
    private $scriptInstruction50;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_51", type="string", length=255, nullable=true)
     */
    private $scriptInstruction51;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_52", type="string", length=255, nullable=true)
     */
    private $scriptInstruction52;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_53", type="string", length=255, nullable=true)
     */
    private $scriptInstruction53;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_54", type="string", length=255, nullable=true)
     */
    private $scriptInstruction54;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_55", type="string", length=255, nullable=true)
     */
    private $scriptInstruction55;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_56", type="string", length=255, nullable=true)
     */
    private $scriptInstruction56;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_57", type="string", length=255, nullable=true)
     */
    private $scriptInstruction57;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_58", type="string", length=255, nullable=true)
     */
    private $scriptInstruction58;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_59", type="string", length=255, nullable=true)
     */
    private $scriptInstruction59;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_60", type="string", length=255, nullable=true)
     */
    private $scriptInstruction60;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_61", type="string", length=255, nullable=true)
     */
    private $scriptInstruction61;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_62", type="string", length=255, nullable=true)
     */
    private $scriptInstruction62;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_63", type="string", length=255, nullable=true)
     */
    private $scriptInstruction63;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_64", type="string", length=255, nullable=true)
     */
    private $scriptInstruction64;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_65", type="string", length=255, nullable=true)
     */
    private $scriptInstruction65;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_66", type="string", length=255, nullable=true)
     */
    private $scriptInstruction66;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_67", type="string", length=255, nullable=true)
     */
    private $scriptInstruction67;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_68", type="string", length=255, nullable=true)
     */
    private $scriptInstruction68;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_69", type="string", length=255, nullable=true)
     */
    private $scriptInstruction69;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_70", type="string", length=255, nullable=true)
     */
    private $scriptInstruction70;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_71", type="string", length=255, nullable=true)
     */
    private $scriptInstruction71;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_72", type="string", length=255, nullable=true)
     */
    private $scriptInstruction72;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_73", type="string", length=255, nullable=true)
     */
    private $scriptInstruction73;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_74", type="string", length=255, nullable=true)
     */
    private $scriptInstruction74;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_75", type="string", length=255, nullable=true)
     */
    private $scriptInstruction75;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_76", type="string", length=255, nullable=true)
     */
    private $scriptInstruction76;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_77", type="string", length=255, nullable=true)
     */
    private $scriptInstruction77;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_78", type="string", length=255, nullable=true)
     */
    private $scriptInstruction78;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_79", type="string", length=255, nullable=true)
     */
    private $scriptInstruction79;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_80", type="string", length=255, nullable=true)
     */
    private $scriptInstruction80;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_81", type="string", length=255, nullable=true)
     */
    private $scriptInstruction81;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_82", type="string", length=255, nullable=true)
     */
    private $scriptInstruction82;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_83", type="string", length=255, nullable=true)
     */
    private $scriptInstruction83;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_84", type="string", length=255, nullable=true)
     */
    private $scriptInstruction84;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_85", type="string", length=255, nullable=true)
     */
    private $scriptInstruction85;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_86", type="string", length=255, nullable=true)
     */
    private $scriptInstruction86;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_87", type="string", length=255, nullable=true)
     */
    private $scriptInstruction87;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_88", type="string", length=255, nullable=true)
     */
    private $scriptInstruction88;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_89", type="string", length=255, nullable=true)
     */
    private $scriptInstruction89;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_90", type="string", length=255, nullable=true)
     */
    private $scriptInstruction90;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_91", type="string", length=255, nullable=true)
     */
    private $scriptInstruction91;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_92", type="string", length=255, nullable=true)
     */
    private $scriptInstruction92;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_93", type="string", length=255, nullable=true)
     */
    private $scriptInstruction93;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_94", type="string", length=255, nullable=true)
     */
    private $scriptInstruction94;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_95", type="string", length=255, nullable=true)
     */
    private $scriptInstruction95;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_96", type="string", length=255, nullable=true)
     */
    private $scriptInstruction96;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_97", type="string", length=255, nullable=true)
     */
    private $scriptInstruction97;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_98", type="string", length=255, nullable=true)
     */
    private $scriptInstruction98;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_99", type="string", length=255, nullable=true)
     */
    private $scriptInstruction99;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_100", type="string", length=255, nullable=true)
     */
    private $scriptInstruction100;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_101", type="string", length=255, nullable=true)
     */
    private $scriptInstruction101;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_102", type="string", length=255, nullable=true)
     */
    private $scriptInstruction102;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_103", type="string", length=255, nullable=true)
     */
    private $scriptInstruction103;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_104", type="string", length=255, nullable=true)
     */
    private $scriptInstruction104;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_105", type="string", length=255, nullable=true)
     */
    private $scriptInstruction105;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_106", type="string", length=255, nullable=true)
     */
    private $scriptInstruction106;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_107", type="string", length=255, nullable=true)
     */
    private $scriptInstruction107;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_108", type="string", length=255, nullable=true)
     */
    private $scriptInstruction108;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_109", type="string", length=255, nullable=true)
     */
    private $scriptInstruction109;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_110", type="string", length=255, nullable=true)
     */
    private $scriptInstruction110;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_111", type="string", length=255, nullable=true)
     */
    private $scriptInstruction111;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_112", type="string", length=255, nullable=true)
     */
    private $scriptInstruction112;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_113", type="string", length=255, nullable=true)
     */
    private $scriptInstruction113;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_114", type="string", length=255, nullable=true)
     */
    private $scriptInstruction114;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_115", type="string", length=255, nullable=true)
     */
    private $scriptInstruction115;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_116", type="string", length=255, nullable=true)
     */
    private $scriptInstruction116;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_117", type="string", length=255, nullable=true)
     */
    private $scriptInstruction117;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_118", type="string", length=255, nullable=true)
     */
    private $scriptInstruction118;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_119", type="string", length=255, nullable=true)
     */
    private $scriptInstruction119;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_120", type="string", length=255, nullable=true)
     */
    private $scriptInstruction120;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_121", type="string", length=255, nullable=true)
     */
    private $scriptInstruction121;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_122", type="string", length=255, nullable=true)
     */
    private $scriptInstruction122;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_123", type="string", length=255, nullable=true)
     */
    private $scriptInstruction123;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_124", type="string", length=255, nullable=true)
     */
    private $scriptInstruction124;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_125", type="string", length=255, nullable=true)
     */
    private $scriptInstruction125;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_126", type="string", length=255, nullable=true)
     */
    private $scriptInstruction126;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_127", type="string", length=255, nullable=true)
     */
    private $scriptInstruction127;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_128", type="string", length=255, nullable=true)
     */
    private $scriptInstruction128;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_129", type="string", length=255, nullable=true)
     */
    private $scriptInstruction129;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_130", type="string", length=255, nullable=true)
     */
    private $scriptInstruction130;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_131", type="string", length=255, nullable=true)
     */
    private $scriptInstruction131;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_132", type="string", length=255, nullable=true)
     */
    private $scriptInstruction132;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_133", type="string", length=255, nullable=true)
     */
    private $scriptInstruction133;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_134", type="string", length=255, nullable=true)
     */
    private $scriptInstruction134;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_135", type="string", length=255, nullable=true)
     */
    private $scriptInstruction135;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_136", type="string", length=255, nullable=true)
     */
    private $scriptInstruction136;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_137", type="string", length=255, nullable=true)
     */
    private $scriptInstruction137;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_138", type="string", length=255, nullable=true)
     */
    private $scriptInstruction138;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_139", type="string", length=255, nullable=true)
     */
    private $scriptInstruction139;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_140", type="string", length=255, nullable=true)
     */
    private $scriptInstruction140;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_141", type="string", length=255, nullable=true)
     */
    private $scriptInstruction141;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_142", type="string", length=255, nullable=true)
     */
    private $scriptInstruction142;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_143", type="string", length=255, nullable=true)
     */
    private $scriptInstruction143;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_144", type="string", length=255, nullable=true)
     */
    private $scriptInstruction144;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_145", type="string", length=255, nullable=true)
     */
    private $scriptInstruction145;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_146", type="string", length=255, nullable=true)
     */
    private $scriptInstruction146;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_147", type="string", length=255, nullable=true)
     */
    private $scriptInstruction147;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_148", type="string", length=255, nullable=true)
     */
    private $scriptInstruction148;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_149", type="string", length=255, nullable=true)
     */
    private $scriptInstruction149;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_150", type="string", length=255, nullable=true)
     */
    private $scriptInstruction150;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_151", type="string", length=255, nullable=true)
     */
    private $scriptInstruction151;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_152", type="string", length=255, nullable=true)
     */
    private $scriptInstruction152;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_153", type="string", length=255, nullable=true)
     */
    private $scriptInstruction153;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_154", type="string", length=255, nullable=true)
     */
    private $scriptInstruction154;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_155", type="string", length=255, nullable=true)
     */
    private $scriptInstruction155;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_156", type="string", length=255, nullable=true)
     */
    private $scriptInstruction156;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_157", type="string", length=255, nullable=true)
     */
    private $scriptInstruction157;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_158", type="string", length=255, nullable=true)
     */
    private $scriptInstruction158;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_159", type="string", length=255, nullable=true)
     */
    private $scriptInstruction159;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_160", type="string", length=255, nullable=true)
     */
    private $scriptInstruction160;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_161", type="string", length=255, nullable=true)
     */
    private $scriptInstruction161;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_162", type="string", length=255, nullable=true)
     */
    private $scriptInstruction162;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_163", type="string", length=255, nullable=true)
     */
    private $scriptInstruction163;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_164", type="string", length=255, nullable=true)
     */
    private $scriptInstruction164;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_165", type="string", length=255, nullable=true)
     */
    private $scriptInstruction165;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_166", type="string", length=255, nullable=true)
     */
    private $scriptInstruction166;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_167", type="string", length=255, nullable=true)
     */
    private $scriptInstruction167;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_168", type="string", length=255, nullable=true)
     */
    private $scriptInstruction168;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_169", type="string", length=255, nullable=true)
     */
    private $scriptInstruction169;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_170", type="string", length=255, nullable=true)
     */
    private $scriptInstruction170;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_171", type="string", length=255, nullable=true)
     */
    private $scriptInstruction171;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_172", type="string", length=255, nullable=true)
     */
    private $scriptInstruction172;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_173", type="string", length=255, nullable=true)
     */
    private $scriptInstruction173;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_174", type="string", length=255, nullable=true)
     */
    private $scriptInstruction174;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_175", type="string", length=255, nullable=true)
     */
    private $scriptInstruction175;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_176", type="string", length=255, nullable=true)
     */
    private $scriptInstruction176;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_177", type="string", length=255, nullable=true)
     */
    private $scriptInstruction177;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_178", type="string", length=255, nullable=true)
     */
    private $scriptInstruction178;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_179", type="string", length=255, nullable=true)
     */
    private $scriptInstruction179;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_180", type="string", length=255, nullable=true)
     */
    private $scriptInstruction180;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_181", type="string", length=255, nullable=true)
     */
    private $scriptInstruction181;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_182", type="string", length=255, nullable=true)
     */
    private $scriptInstruction182;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_183", type="string", length=255, nullable=true)
     */
    private $scriptInstruction183;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_184", type="string", length=255, nullable=true)
     */
    private $scriptInstruction184;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_185", type="string", length=255, nullable=true)
     */
    private $scriptInstruction185;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_186", type="string", length=255, nullable=true)
     */
    private $scriptInstruction186;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_187", type="string", length=255, nullable=true)
     */
    private $scriptInstruction187;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_188", type="string", length=255, nullable=true)
     */
    private $scriptInstruction188;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_189", type="string", length=255, nullable=true)
     */
    private $scriptInstruction189;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_190", type="string", length=255, nullable=true)
     */
    private $scriptInstruction190;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_191", type="string", length=255, nullable=true)
     */
    private $scriptInstruction191;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_192", type="string", length=255, nullable=true)
     */
    private $scriptInstruction192;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_193", type="string", length=255, nullable=true)
     */
    private $scriptInstruction193;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_194", type="string", length=255, nullable=true)
     */
    private $scriptInstruction194;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_195", type="string", length=255, nullable=true)
     */
    private $scriptInstruction195;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_196", type="string", length=255, nullable=true)
     */
    private $scriptInstruction196;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_197", type="string", length=255, nullable=true)
     */
    private $scriptInstruction197;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_198", type="string", length=255, nullable=true)
     */
    private $scriptInstruction198;

    /**
     * @var string|null
     *
     * @ORM\Column(name="script_instruction_199", type="string", length=255, nullable=true)
     */
    private $scriptInstruction199;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_0", type="bigint", nullable=true)
     */
    private $scriptValue0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_1", type="bigint", nullable=true)
     */
    private $scriptValue1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_2", type="bigint", nullable=true)
     */
    private $scriptValue2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_3", type="bigint", nullable=true)
     */
    private $scriptValue3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_4", type="bigint", nullable=true)
     */
    private $scriptValue4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_5", type="bigint", nullable=true)
     */
    private $scriptValue5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_6", type="bigint", nullable=true)
     */
    private $scriptValue6;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_7", type="bigint", nullable=true)
     */
    private $scriptValue7;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_8", type="bigint", nullable=true)
     */
    private $scriptValue8;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_9", type="bigint", nullable=true)
     */
    private $scriptValue9;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_10", type="bigint", nullable=true)
     */
    private $scriptValue10;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_11", type="bigint", nullable=true)
     */
    private $scriptValue11;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_12", type="bigint", nullable=true)
     */
    private $scriptValue12;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_13", type="bigint", nullable=true)
     */
    private $scriptValue13;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_14", type="bigint", nullable=true)
     */
    private $scriptValue14;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_15", type="bigint", nullable=true)
     */
    private $scriptValue15;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_16", type="bigint", nullable=true)
     */
    private $scriptValue16;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_17", type="bigint", nullable=true)
     */
    private $scriptValue17;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_18", type="bigint", nullable=true)
     */
    private $scriptValue18;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_19", type="bigint", nullable=true)
     */
    private $scriptValue19;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_20", type="bigint", nullable=true)
     */
    private $scriptValue20;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_21", type="bigint", nullable=true)
     */
    private $scriptValue21;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_22", type="bigint", nullable=true)
     */
    private $scriptValue22;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_23", type="bigint", nullable=true)
     */
    private $scriptValue23;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_24", type="bigint", nullable=true)
     */
    private $scriptValue24;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_25", type="bigint", nullable=true)
     */
    private $scriptValue25;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_26", type="bigint", nullable=true)
     */
    private $scriptValue26;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_27", type="bigint", nullable=true)
     */
    private $scriptValue27;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_28", type="bigint", nullable=true)
     */
    private $scriptValue28;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_29", type="bigint", nullable=true)
     */
    private $scriptValue29;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_30", type="bigint", nullable=true)
     */
    private $scriptValue30;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_31", type="bigint", nullable=true)
     */
    private $scriptValue31;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_32", type="bigint", nullable=true)
     */
    private $scriptValue32;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_33", type="bigint", nullable=true)
     */
    private $scriptValue33;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_34", type="bigint", nullable=true)
     */
    private $scriptValue34;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_35", type="bigint", nullable=true)
     */
    private $scriptValue35;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_36", type="bigint", nullable=true)
     */
    private $scriptValue36;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_37", type="bigint", nullable=true)
     */
    private $scriptValue37;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_38", type="bigint", nullable=true)
     */
    private $scriptValue38;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_39", type="bigint", nullable=true)
     */
    private $scriptValue39;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_40", type="bigint", nullable=true)
     */
    private $scriptValue40;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_41", type="bigint", nullable=true)
     */
    private $scriptValue41;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_42", type="bigint", nullable=true)
     */
    private $scriptValue42;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_43", type="bigint", nullable=true)
     */
    private $scriptValue43;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_44", type="bigint", nullable=true)
     */
    private $scriptValue44;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_45", type="bigint", nullable=true)
     */
    private $scriptValue45;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_46", type="bigint", nullable=true)
     */
    private $scriptValue46;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_47", type="bigint", nullable=true)
     */
    private $scriptValue47;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_48", type="bigint", nullable=true)
     */
    private $scriptValue48;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_49", type="bigint", nullable=true)
     */
    private $scriptValue49;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_50", type="bigint", nullable=true)
     */
    private $scriptValue50;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_51", type="bigint", nullable=true)
     */
    private $scriptValue51;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_52", type="bigint", nullable=true)
     */
    private $scriptValue52;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_53", type="bigint", nullable=true)
     */
    private $scriptValue53;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_54", type="bigint", nullable=true)
     */
    private $scriptValue54;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_55", type="bigint", nullable=true)
     */
    private $scriptValue55;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_56", type="bigint", nullable=true)
     */
    private $scriptValue56;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_57", type="bigint", nullable=true)
     */
    private $scriptValue57;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_58", type="bigint", nullable=true)
     */
    private $scriptValue58;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_59", type="bigint", nullable=true)
     */
    private $scriptValue59;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_60", type="bigint", nullable=true)
     */
    private $scriptValue60;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_61", type="bigint", nullable=true)
     */
    private $scriptValue61;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_62", type="bigint", nullable=true)
     */
    private $scriptValue62;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_63", type="bigint", nullable=true)
     */
    private $scriptValue63;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_64", type="bigint", nullable=true)
     */
    private $scriptValue64;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_65", type="bigint", nullable=true)
     */
    private $scriptValue65;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_66", type="bigint", nullable=true)
     */
    private $scriptValue66;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_67", type="bigint", nullable=true)
     */
    private $scriptValue67;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_68", type="bigint", nullable=true)
     */
    private $scriptValue68;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_69", type="bigint", nullable=true)
     */
    private $scriptValue69;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_70", type="bigint", nullable=true)
     */
    private $scriptValue70;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_71", type="bigint", nullable=true)
     */
    private $scriptValue71;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_72", type="bigint", nullable=true)
     */
    private $scriptValue72;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_73", type="bigint", nullable=true)
     */
    private $scriptValue73;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_74", type="bigint", nullable=true)
     */
    private $scriptValue74;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_75", type="bigint", nullable=true)
     */
    private $scriptValue75;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_76", type="bigint", nullable=true)
     */
    private $scriptValue76;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_77", type="bigint", nullable=true)
     */
    private $scriptValue77;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_78", type="bigint", nullable=true)
     */
    private $scriptValue78;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_79", type="bigint", nullable=true)
     */
    private $scriptValue79;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_80", type="bigint", nullable=true)
     */
    private $scriptValue80;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_81", type="bigint", nullable=true)
     */
    private $scriptValue81;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_82", type="bigint", nullable=true)
     */
    private $scriptValue82;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_83", type="bigint", nullable=true)
     */
    private $scriptValue83;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_84", type="bigint", nullable=true)
     */
    private $scriptValue84;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_85", type="bigint", nullable=true)
     */
    private $scriptValue85;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_86", type="bigint", nullable=true)
     */
    private $scriptValue86;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_87", type="bigint", nullable=true)
     */
    private $scriptValue87;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_88", type="bigint", nullable=true)
     */
    private $scriptValue88;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_89", type="bigint", nullable=true)
     */
    private $scriptValue89;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_90", type="bigint", nullable=true)
     */
    private $scriptValue90;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_91", type="bigint", nullable=true)
     */
    private $scriptValue91;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_92", type="bigint", nullable=true)
     */
    private $scriptValue92;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_93", type="bigint", nullable=true)
     */
    private $scriptValue93;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_94", type="bigint", nullable=true)
     */
    private $scriptValue94;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_95", type="bigint", nullable=true)
     */
    private $scriptValue95;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_96", type="bigint", nullable=true)
     */
    private $scriptValue96;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_97", type="bigint", nullable=true)
     */
    private $scriptValue97;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_98", type="bigint", nullable=true)
     */
    private $scriptValue98;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_99", type="bigint", nullable=true)
     */
    private $scriptValue99;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_100", type="bigint", nullable=true)
     */
    private $scriptValue100;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_101", type="bigint", nullable=true)
     */
    private $scriptValue101;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_102", type="bigint", nullable=true)
     */
    private $scriptValue102;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_103", type="bigint", nullable=true)
     */
    private $scriptValue103;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_104", type="bigint", nullable=true)
     */
    private $scriptValue104;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_105", type="bigint", nullable=true)
     */
    private $scriptValue105;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_106", type="bigint", nullable=true)
     */
    private $scriptValue106;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_107", type="bigint", nullable=true)
     */
    private $scriptValue107;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_108", type="bigint", nullable=true)
     */
    private $scriptValue108;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_109", type="bigint", nullable=true)
     */
    private $scriptValue109;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_110", type="bigint", nullable=true)
     */
    private $scriptValue110;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_111", type="bigint", nullable=true)
     */
    private $scriptValue111;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_112", type="bigint", nullable=true)
     */
    private $scriptValue112;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_113", type="bigint", nullable=true)
     */
    private $scriptValue113;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_114", type="bigint", nullable=true)
     */
    private $scriptValue114;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_115", type="bigint", nullable=true)
     */
    private $scriptValue115;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_116", type="bigint", nullable=true)
     */
    private $scriptValue116;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_117", type="bigint", nullable=true)
     */
    private $scriptValue117;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_118", type="bigint", nullable=true)
     */
    private $scriptValue118;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_119", type="bigint", nullable=true)
     */
    private $scriptValue119;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_120", type="bigint", nullable=true)
     */
    private $scriptValue120;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_121", type="bigint", nullable=true)
     */
    private $scriptValue121;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_122", type="bigint", nullable=true)
     */
    private $scriptValue122;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_123", type="bigint", nullable=true)
     */
    private $scriptValue123;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_124", type="bigint", nullable=true)
     */
    private $scriptValue124;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_125", type="bigint", nullable=true)
     */
    private $scriptValue125;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_126", type="bigint", nullable=true)
     */
    private $scriptValue126;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_127", type="bigint", nullable=true)
     */
    private $scriptValue127;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_128", type="bigint", nullable=true)
     */
    private $scriptValue128;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_129", type="bigint", nullable=true)
     */
    private $scriptValue129;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_130", type="bigint", nullable=true)
     */
    private $scriptValue130;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_131", type="bigint", nullable=true)
     */
    private $scriptValue131;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_132", type="bigint", nullable=true)
     */
    private $scriptValue132;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_133", type="bigint", nullable=true)
     */
    private $scriptValue133;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_134", type="bigint", nullable=true)
     */
    private $scriptValue134;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_135", type="bigint", nullable=true)
     */
    private $scriptValue135;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_136", type="bigint", nullable=true)
     */
    private $scriptValue136;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_137", type="bigint", nullable=true)
     */
    private $scriptValue137;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_138", type="bigint", nullable=true)
     */
    private $scriptValue138;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_139", type="bigint", nullable=true)
     */
    private $scriptValue139;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_140", type="bigint", nullable=true)
     */
    private $scriptValue140;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_141", type="bigint", nullable=true)
     */
    private $scriptValue141;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_142", type="bigint", nullable=true)
     */
    private $scriptValue142;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_143", type="bigint", nullable=true)
     */
    private $scriptValue143;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_144", type="bigint", nullable=true)
     */
    private $scriptValue144;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_145", type="bigint", nullable=true)
     */
    private $scriptValue145;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_146", type="bigint", nullable=true)
     */
    private $scriptValue146;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_147", type="bigint", nullable=true)
     */
    private $scriptValue147;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_148", type="bigint", nullable=true)
     */
    private $scriptValue148;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_149", type="bigint", nullable=true)
     */
    private $scriptValue149;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_150", type="bigint", nullable=true)
     */
    private $scriptValue150;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_151", type="bigint", nullable=true)
     */
    private $scriptValue151;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_152", type="bigint", nullable=true)
     */
    private $scriptValue152;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_153", type="bigint", nullable=true)
     */
    private $scriptValue153;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_154", type="bigint", nullable=true)
     */
    private $scriptValue154;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_155", type="bigint", nullable=true)
     */
    private $scriptValue155;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_156", type="bigint", nullable=true)
     */
    private $scriptValue156;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_157", type="bigint", nullable=true)
     */
    private $scriptValue157;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_158", type="bigint", nullable=true)
     */
    private $scriptValue158;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_159", type="bigint", nullable=true)
     */
    private $scriptValue159;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_160", type="bigint", nullable=true)
     */
    private $scriptValue160;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_161", type="bigint", nullable=true)
     */
    private $scriptValue161;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_162", type="bigint", nullable=true)
     */
    private $scriptValue162;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_163", type="bigint", nullable=true)
     */
    private $scriptValue163;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_164", type="bigint", nullable=true)
     */
    private $scriptValue164;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_165", type="bigint", nullable=true)
     */
    private $scriptValue165;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_166", type="bigint", nullable=true)
     */
    private $scriptValue166;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_167", type="bigint", nullable=true)
     */
    private $scriptValue167;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_168", type="bigint", nullable=true)
     */
    private $scriptValue168;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_169", type="bigint", nullable=true)
     */
    private $scriptValue169;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_170", type="bigint", nullable=true)
     */
    private $scriptValue170;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_171", type="bigint", nullable=true)
     */
    private $scriptValue171;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_172", type="bigint", nullable=true)
     */
    private $scriptValue172;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_173", type="bigint", nullable=true)
     */
    private $scriptValue173;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_174", type="bigint", nullable=true)
     */
    private $scriptValue174;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_175", type="bigint", nullable=true)
     */
    private $scriptValue175;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_176", type="bigint", nullable=true)
     */
    private $scriptValue176;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_177", type="bigint", nullable=true)
     */
    private $scriptValue177;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_178", type="bigint", nullable=true)
     */
    private $scriptValue178;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_179", type="bigint", nullable=true)
     */
    private $scriptValue179;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_180", type="bigint", nullable=true)
     */
    private $scriptValue180;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_181", type="bigint", nullable=true)
     */
    private $scriptValue181;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_182", type="bigint", nullable=true)
     */
    private $scriptValue182;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_183", type="bigint", nullable=true)
     */
    private $scriptValue183;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_184", type="bigint", nullable=true)
     */
    private $scriptValue184;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_185", type="bigint", nullable=true)
     */
    private $scriptValue185;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_186", type="bigint", nullable=true)
     */
    private $scriptValue186;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_187", type="bigint", nullable=true)
     */
    private $scriptValue187;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_188", type="bigint", nullable=true)
     */
    private $scriptValue188;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_189", type="bigint", nullable=true)
     */
    private $scriptValue189;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_190", type="bigint", nullable=true)
     */
    private $scriptValue190;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_191", type="bigint", nullable=true)
     */
    private $scriptValue191;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_192", type="bigint", nullable=true)
     */
    private $scriptValue192;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_193", type="bigint", nullable=true)
     */
    private $scriptValue193;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_194", type="bigint", nullable=true)
     */
    private $scriptValue194;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_195", type="bigint", nullable=true)
     */
    private $scriptValue195;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_196", type="bigint", nullable=true)
     */
    private $scriptValue196;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_197", type="bigint", nullable=true)
     */
    private $scriptValue197;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_198", type="bigint", nullable=true)
     */
    private $scriptValue198;

    /**
     * @var int|null
     *
     * @ORM\Column(name="script_value_199", type="bigint", nullable=true)
     */
    private $scriptValue199;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getQuest(): ?int
    {
        return $this->quest;
    }

    public function setQuest(?int $quest): self
    {
        $this->quest = $quest;

        return $this;
    }

    public function getQuestBattleScene(): ?int
    {
        return $this->questBattleScene;
    }

    public function setQuestBattleScene(?int $questBattleScene): self
    {
        $this->questBattleScene = $questBattleScene;

        return $this;
    }

    public function getTimeLimit(): ?string
    {
        return $this->timeLimit;
    }

    public function setTimeLimit(?string $timeLimit): self
    {
        $this->timeLimit = $timeLimit;

        return $this;
    }

    public function getLevelSync(): ?string
    {
        return $this->levelSync;
    }

    public function setLevelSync(?string $levelSync): self
    {
        $this->levelSync = $levelSync;

        return $this;
    }

    public function getScriptInstruction0(): ?string
    {
        return $this->scriptInstruction0;
    }

    public function setScriptInstruction0(?string $scriptInstruction0): self
    {
        $this->scriptInstruction0 = $scriptInstruction0;

        return $this;
    }

    public function getScriptInstruction1(): ?string
    {
        return $this->scriptInstruction1;
    }

    public function setScriptInstruction1(?string $scriptInstruction1): self
    {
        $this->scriptInstruction1 = $scriptInstruction1;

        return $this;
    }

    public function getScriptInstruction2(): ?string
    {
        return $this->scriptInstruction2;
    }

    public function setScriptInstruction2(?string $scriptInstruction2): self
    {
        $this->scriptInstruction2 = $scriptInstruction2;

        return $this;
    }

    public function getScriptInstruction3(): ?string
    {
        return $this->scriptInstruction3;
    }

    public function setScriptInstruction3(?string $scriptInstruction3): self
    {
        $this->scriptInstruction3 = $scriptInstruction3;

        return $this;
    }

    public function getScriptInstruction4(): ?string
    {
        return $this->scriptInstruction4;
    }

    public function setScriptInstruction4(?string $scriptInstruction4): self
    {
        $this->scriptInstruction4 = $scriptInstruction4;

        return $this;
    }

    public function getScriptInstruction5(): ?string
    {
        return $this->scriptInstruction5;
    }

    public function setScriptInstruction5(?string $scriptInstruction5): self
    {
        $this->scriptInstruction5 = $scriptInstruction5;

        return $this;
    }

    public function getScriptInstruction6(): ?string
    {
        return $this->scriptInstruction6;
    }

    public function setScriptInstruction6(?string $scriptInstruction6): self
    {
        $this->scriptInstruction6 = $scriptInstruction6;

        return $this;
    }

    public function getScriptInstruction7(): ?string
    {
        return $this->scriptInstruction7;
    }

    public function setScriptInstruction7(?string $scriptInstruction7): self
    {
        $this->scriptInstruction7 = $scriptInstruction7;

        return $this;
    }

    public function getScriptInstruction8(): ?string
    {
        return $this->scriptInstruction8;
    }

    public function setScriptInstruction8(?string $scriptInstruction8): self
    {
        $this->scriptInstruction8 = $scriptInstruction8;

        return $this;
    }

    public function getScriptInstruction9(): ?string
    {
        return $this->scriptInstruction9;
    }

    public function setScriptInstruction9(?string $scriptInstruction9): self
    {
        $this->scriptInstruction9 = $scriptInstruction9;

        return $this;
    }

    public function getScriptInstruction10(): ?string
    {
        return $this->scriptInstruction10;
    }

    public function setScriptInstruction10(?string $scriptInstruction10): self
    {
        $this->scriptInstruction10 = $scriptInstruction10;

        return $this;
    }

    public function getScriptInstruction11(): ?string
    {
        return $this->scriptInstruction11;
    }

    public function setScriptInstruction11(?string $scriptInstruction11): self
    {
        $this->scriptInstruction11 = $scriptInstruction11;

        return $this;
    }

    public function getScriptInstruction12(): ?string
    {
        return $this->scriptInstruction12;
    }

    public function setScriptInstruction12(?string $scriptInstruction12): self
    {
        $this->scriptInstruction12 = $scriptInstruction12;

        return $this;
    }

    public function getScriptInstruction13(): ?string
    {
        return $this->scriptInstruction13;
    }

    public function setScriptInstruction13(?string $scriptInstruction13): self
    {
        $this->scriptInstruction13 = $scriptInstruction13;

        return $this;
    }

    public function getScriptInstruction14(): ?string
    {
        return $this->scriptInstruction14;
    }

    public function setScriptInstruction14(?string $scriptInstruction14): self
    {
        $this->scriptInstruction14 = $scriptInstruction14;

        return $this;
    }

    public function getScriptInstruction15(): ?string
    {
        return $this->scriptInstruction15;
    }

    public function setScriptInstruction15(?string $scriptInstruction15): self
    {
        $this->scriptInstruction15 = $scriptInstruction15;

        return $this;
    }

    public function getScriptInstruction16(): ?string
    {
        return $this->scriptInstruction16;
    }

    public function setScriptInstruction16(?string $scriptInstruction16): self
    {
        $this->scriptInstruction16 = $scriptInstruction16;

        return $this;
    }

    public function getScriptInstruction17(): ?string
    {
        return $this->scriptInstruction17;
    }

    public function setScriptInstruction17(?string $scriptInstruction17): self
    {
        $this->scriptInstruction17 = $scriptInstruction17;

        return $this;
    }

    public function getScriptInstruction18(): ?string
    {
        return $this->scriptInstruction18;
    }

    public function setScriptInstruction18(?string $scriptInstruction18): self
    {
        $this->scriptInstruction18 = $scriptInstruction18;

        return $this;
    }

    public function getScriptInstruction19(): ?string
    {
        return $this->scriptInstruction19;
    }

    public function setScriptInstruction19(?string $scriptInstruction19): self
    {
        $this->scriptInstruction19 = $scriptInstruction19;

        return $this;
    }

    public function getScriptInstruction20(): ?string
    {
        return $this->scriptInstruction20;
    }

    public function setScriptInstruction20(?string $scriptInstruction20): self
    {
        $this->scriptInstruction20 = $scriptInstruction20;

        return $this;
    }

    public function getScriptInstruction21(): ?string
    {
        return $this->scriptInstruction21;
    }

    public function setScriptInstruction21(?string $scriptInstruction21): self
    {
        $this->scriptInstruction21 = $scriptInstruction21;

        return $this;
    }

    public function getScriptInstruction22(): ?string
    {
        return $this->scriptInstruction22;
    }

    public function setScriptInstruction22(?string $scriptInstruction22): self
    {
        $this->scriptInstruction22 = $scriptInstruction22;

        return $this;
    }

    public function getScriptInstruction23(): ?string
    {
        return $this->scriptInstruction23;
    }

    public function setScriptInstruction23(?string $scriptInstruction23): self
    {
        $this->scriptInstruction23 = $scriptInstruction23;

        return $this;
    }

    public function getScriptInstruction24(): ?string
    {
        return $this->scriptInstruction24;
    }

    public function setScriptInstruction24(?string $scriptInstruction24): self
    {
        $this->scriptInstruction24 = $scriptInstruction24;

        return $this;
    }

    public function getScriptInstruction25(): ?string
    {
        return $this->scriptInstruction25;
    }

    public function setScriptInstruction25(?string $scriptInstruction25): self
    {
        $this->scriptInstruction25 = $scriptInstruction25;

        return $this;
    }

    public function getScriptInstruction26(): ?string
    {
        return $this->scriptInstruction26;
    }

    public function setScriptInstruction26(?string $scriptInstruction26): self
    {
        $this->scriptInstruction26 = $scriptInstruction26;

        return $this;
    }

    public function getScriptInstruction27(): ?string
    {
        return $this->scriptInstruction27;
    }

    public function setScriptInstruction27(?string $scriptInstruction27): self
    {
        $this->scriptInstruction27 = $scriptInstruction27;

        return $this;
    }

    public function getScriptInstruction28(): ?string
    {
        return $this->scriptInstruction28;
    }

    public function setScriptInstruction28(?string $scriptInstruction28): self
    {
        $this->scriptInstruction28 = $scriptInstruction28;

        return $this;
    }

    public function getScriptInstruction29(): ?string
    {
        return $this->scriptInstruction29;
    }

    public function setScriptInstruction29(?string $scriptInstruction29): self
    {
        $this->scriptInstruction29 = $scriptInstruction29;

        return $this;
    }

    public function getScriptInstruction30(): ?string
    {
        return $this->scriptInstruction30;
    }

    public function setScriptInstruction30(?string $scriptInstruction30): self
    {
        $this->scriptInstruction30 = $scriptInstruction30;

        return $this;
    }

    public function getScriptInstruction31(): ?string
    {
        return $this->scriptInstruction31;
    }

    public function setScriptInstruction31(?string $scriptInstruction31): self
    {
        $this->scriptInstruction31 = $scriptInstruction31;

        return $this;
    }

    public function getScriptInstruction32(): ?string
    {
        return $this->scriptInstruction32;
    }

    public function setScriptInstruction32(?string $scriptInstruction32): self
    {
        $this->scriptInstruction32 = $scriptInstruction32;

        return $this;
    }

    public function getScriptInstruction33(): ?string
    {
        return $this->scriptInstruction33;
    }

    public function setScriptInstruction33(?string $scriptInstruction33): self
    {
        $this->scriptInstruction33 = $scriptInstruction33;

        return $this;
    }

    public function getScriptInstruction34(): ?string
    {
        return $this->scriptInstruction34;
    }

    public function setScriptInstruction34(?string $scriptInstruction34): self
    {
        $this->scriptInstruction34 = $scriptInstruction34;

        return $this;
    }

    public function getScriptInstruction35(): ?string
    {
        return $this->scriptInstruction35;
    }

    public function setScriptInstruction35(?string $scriptInstruction35): self
    {
        $this->scriptInstruction35 = $scriptInstruction35;

        return $this;
    }

    public function getScriptInstruction36(): ?string
    {
        return $this->scriptInstruction36;
    }

    public function setScriptInstruction36(?string $scriptInstruction36): self
    {
        $this->scriptInstruction36 = $scriptInstruction36;

        return $this;
    }

    public function getScriptInstruction37(): ?string
    {
        return $this->scriptInstruction37;
    }

    public function setScriptInstruction37(?string $scriptInstruction37): self
    {
        $this->scriptInstruction37 = $scriptInstruction37;

        return $this;
    }

    public function getScriptInstruction38(): ?string
    {
        return $this->scriptInstruction38;
    }

    public function setScriptInstruction38(?string $scriptInstruction38): self
    {
        $this->scriptInstruction38 = $scriptInstruction38;

        return $this;
    }

    public function getScriptInstruction39(): ?string
    {
        return $this->scriptInstruction39;
    }

    public function setScriptInstruction39(?string $scriptInstruction39): self
    {
        $this->scriptInstruction39 = $scriptInstruction39;

        return $this;
    }

    public function getScriptInstruction40(): ?string
    {
        return $this->scriptInstruction40;
    }

    public function setScriptInstruction40(?string $scriptInstruction40): self
    {
        $this->scriptInstruction40 = $scriptInstruction40;

        return $this;
    }

    public function getScriptInstruction41(): ?string
    {
        return $this->scriptInstruction41;
    }

    public function setScriptInstruction41(?string $scriptInstruction41): self
    {
        $this->scriptInstruction41 = $scriptInstruction41;

        return $this;
    }

    public function getScriptInstruction42(): ?string
    {
        return $this->scriptInstruction42;
    }

    public function setScriptInstruction42(?string $scriptInstruction42): self
    {
        $this->scriptInstruction42 = $scriptInstruction42;

        return $this;
    }

    public function getScriptInstruction43(): ?string
    {
        return $this->scriptInstruction43;
    }

    public function setScriptInstruction43(?string $scriptInstruction43): self
    {
        $this->scriptInstruction43 = $scriptInstruction43;

        return $this;
    }

    public function getScriptInstruction44(): ?string
    {
        return $this->scriptInstruction44;
    }

    public function setScriptInstruction44(?string $scriptInstruction44): self
    {
        $this->scriptInstruction44 = $scriptInstruction44;

        return $this;
    }

    public function getScriptInstruction45(): ?string
    {
        return $this->scriptInstruction45;
    }

    public function setScriptInstruction45(?string $scriptInstruction45): self
    {
        $this->scriptInstruction45 = $scriptInstruction45;

        return $this;
    }

    public function getScriptInstruction46(): ?string
    {
        return $this->scriptInstruction46;
    }

    public function setScriptInstruction46(?string $scriptInstruction46): self
    {
        $this->scriptInstruction46 = $scriptInstruction46;

        return $this;
    }

    public function getScriptInstruction47(): ?string
    {
        return $this->scriptInstruction47;
    }

    public function setScriptInstruction47(?string $scriptInstruction47): self
    {
        $this->scriptInstruction47 = $scriptInstruction47;

        return $this;
    }

    public function getScriptInstruction48(): ?string
    {
        return $this->scriptInstruction48;
    }

    public function setScriptInstruction48(?string $scriptInstruction48): self
    {
        $this->scriptInstruction48 = $scriptInstruction48;

        return $this;
    }

    public function getScriptInstruction49(): ?string
    {
        return $this->scriptInstruction49;
    }

    public function setScriptInstruction49(?string $scriptInstruction49): self
    {
        $this->scriptInstruction49 = $scriptInstruction49;

        return $this;
    }

    public function getScriptInstruction50(): ?string
    {
        return $this->scriptInstruction50;
    }

    public function setScriptInstruction50(?string $scriptInstruction50): self
    {
        $this->scriptInstruction50 = $scriptInstruction50;

        return $this;
    }

    public function getScriptInstruction51(): ?string
    {
        return $this->scriptInstruction51;
    }

    public function setScriptInstruction51(?string $scriptInstruction51): self
    {
        $this->scriptInstruction51 = $scriptInstruction51;

        return $this;
    }

    public function getScriptInstruction52(): ?string
    {
        return $this->scriptInstruction52;
    }

    public function setScriptInstruction52(?string $scriptInstruction52): self
    {
        $this->scriptInstruction52 = $scriptInstruction52;

        return $this;
    }

    public function getScriptInstruction53(): ?string
    {
        return $this->scriptInstruction53;
    }

    public function setScriptInstruction53(?string $scriptInstruction53): self
    {
        $this->scriptInstruction53 = $scriptInstruction53;

        return $this;
    }

    public function getScriptInstruction54(): ?string
    {
        return $this->scriptInstruction54;
    }

    public function setScriptInstruction54(?string $scriptInstruction54): self
    {
        $this->scriptInstruction54 = $scriptInstruction54;

        return $this;
    }

    public function getScriptInstruction55(): ?string
    {
        return $this->scriptInstruction55;
    }

    public function setScriptInstruction55(?string $scriptInstruction55): self
    {
        $this->scriptInstruction55 = $scriptInstruction55;

        return $this;
    }

    public function getScriptInstruction56(): ?string
    {
        return $this->scriptInstruction56;
    }

    public function setScriptInstruction56(?string $scriptInstruction56): self
    {
        $this->scriptInstruction56 = $scriptInstruction56;

        return $this;
    }

    public function getScriptInstruction57(): ?string
    {
        return $this->scriptInstruction57;
    }

    public function setScriptInstruction57(?string $scriptInstruction57): self
    {
        $this->scriptInstruction57 = $scriptInstruction57;

        return $this;
    }

    public function getScriptInstruction58(): ?string
    {
        return $this->scriptInstruction58;
    }

    public function setScriptInstruction58(?string $scriptInstruction58): self
    {
        $this->scriptInstruction58 = $scriptInstruction58;

        return $this;
    }

    public function getScriptInstruction59(): ?string
    {
        return $this->scriptInstruction59;
    }

    public function setScriptInstruction59(?string $scriptInstruction59): self
    {
        $this->scriptInstruction59 = $scriptInstruction59;

        return $this;
    }

    public function getScriptInstruction60(): ?string
    {
        return $this->scriptInstruction60;
    }

    public function setScriptInstruction60(?string $scriptInstruction60): self
    {
        $this->scriptInstruction60 = $scriptInstruction60;

        return $this;
    }

    public function getScriptInstruction61(): ?string
    {
        return $this->scriptInstruction61;
    }

    public function setScriptInstruction61(?string $scriptInstruction61): self
    {
        $this->scriptInstruction61 = $scriptInstruction61;

        return $this;
    }

    public function getScriptInstruction62(): ?string
    {
        return $this->scriptInstruction62;
    }

    public function setScriptInstruction62(?string $scriptInstruction62): self
    {
        $this->scriptInstruction62 = $scriptInstruction62;

        return $this;
    }

    public function getScriptInstruction63(): ?string
    {
        return $this->scriptInstruction63;
    }

    public function setScriptInstruction63(?string $scriptInstruction63): self
    {
        $this->scriptInstruction63 = $scriptInstruction63;

        return $this;
    }

    public function getScriptInstruction64(): ?string
    {
        return $this->scriptInstruction64;
    }

    public function setScriptInstruction64(?string $scriptInstruction64): self
    {
        $this->scriptInstruction64 = $scriptInstruction64;

        return $this;
    }

    public function getScriptInstruction65(): ?string
    {
        return $this->scriptInstruction65;
    }

    public function setScriptInstruction65(?string $scriptInstruction65): self
    {
        $this->scriptInstruction65 = $scriptInstruction65;

        return $this;
    }

    public function getScriptInstruction66(): ?string
    {
        return $this->scriptInstruction66;
    }

    public function setScriptInstruction66(?string $scriptInstruction66): self
    {
        $this->scriptInstruction66 = $scriptInstruction66;

        return $this;
    }

    public function getScriptInstruction67(): ?string
    {
        return $this->scriptInstruction67;
    }

    public function setScriptInstruction67(?string $scriptInstruction67): self
    {
        $this->scriptInstruction67 = $scriptInstruction67;

        return $this;
    }

    public function getScriptInstruction68(): ?string
    {
        return $this->scriptInstruction68;
    }

    public function setScriptInstruction68(?string $scriptInstruction68): self
    {
        $this->scriptInstruction68 = $scriptInstruction68;

        return $this;
    }

    public function getScriptInstruction69(): ?string
    {
        return $this->scriptInstruction69;
    }

    public function setScriptInstruction69(?string $scriptInstruction69): self
    {
        $this->scriptInstruction69 = $scriptInstruction69;

        return $this;
    }

    public function getScriptInstruction70(): ?string
    {
        return $this->scriptInstruction70;
    }

    public function setScriptInstruction70(?string $scriptInstruction70): self
    {
        $this->scriptInstruction70 = $scriptInstruction70;

        return $this;
    }

    public function getScriptInstruction71(): ?string
    {
        return $this->scriptInstruction71;
    }

    public function setScriptInstruction71(?string $scriptInstruction71): self
    {
        $this->scriptInstruction71 = $scriptInstruction71;

        return $this;
    }

    public function getScriptInstruction72(): ?string
    {
        return $this->scriptInstruction72;
    }

    public function setScriptInstruction72(?string $scriptInstruction72): self
    {
        $this->scriptInstruction72 = $scriptInstruction72;

        return $this;
    }

    public function getScriptInstruction73(): ?string
    {
        return $this->scriptInstruction73;
    }

    public function setScriptInstruction73(?string $scriptInstruction73): self
    {
        $this->scriptInstruction73 = $scriptInstruction73;

        return $this;
    }

    public function getScriptInstruction74(): ?string
    {
        return $this->scriptInstruction74;
    }

    public function setScriptInstruction74(?string $scriptInstruction74): self
    {
        $this->scriptInstruction74 = $scriptInstruction74;

        return $this;
    }

    public function getScriptInstruction75(): ?string
    {
        return $this->scriptInstruction75;
    }

    public function setScriptInstruction75(?string $scriptInstruction75): self
    {
        $this->scriptInstruction75 = $scriptInstruction75;

        return $this;
    }

    public function getScriptInstruction76(): ?string
    {
        return $this->scriptInstruction76;
    }

    public function setScriptInstruction76(?string $scriptInstruction76): self
    {
        $this->scriptInstruction76 = $scriptInstruction76;

        return $this;
    }

    public function getScriptInstruction77(): ?string
    {
        return $this->scriptInstruction77;
    }

    public function setScriptInstruction77(?string $scriptInstruction77): self
    {
        $this->scriptInstruction77 = $scriptInstruction77;

        return $this;
    }

    public function getScriptInstruction78(): ?string
    {
        return $this->scriptInstruction78;
    }

    public function setScriptInstruction78(?string $scriptInstruction78): self
    {
        $this->scriptInstruction78 = $scriptInstruction78;

        return $this;
    }

    public function getScriptInstruction79(): ?string
    {
        return $this->scriptInstruction79;
    }

    public function setScriptInstruction79(?string $scriptInstruction79): self
    {
        $this->scriptInstruction79 = $scriptInstruction79;

        return $this;
    }

    public function getScriptInstruction80(): ?string
    {
        return $this->scriptInstruction80;
    }

    public function setScriptInstruction80(?string $scriptInstruction80): self
    {
        $this->scriptInstruction80 = $scriptInstruction80;

        return $this;
    }

    public function getScriptInstruction81(): ?string
    {
        return $this->scriptInstruction81;
    }

    public function setScriptInstruction81(?string $scriptInstruction81): self
    {
        $this->scriptInstruction81 = $scriptInstruction81;

        return $this;
    }

    public function getScriptInstruction82(): ?string
    {
        return $this->scriptInstruction82;
    }

    public function setScriptInstruction82(?string $scriptInstruction82): self
    {
        $this->scriptInstruction82 = $scriptInstruction82;

        return $this;
    }

    public function getScriptInstruction83(): ?string
    {
        return $this->scriptInstruction83;
    }

    public function setScriptInstruction83(?string $scriptInstruction83): self
    {
        $this->scriptInstruction83 = $scriptInstruction83;

        return $this;
    }

    public function getScriptInstruction84(): ?string
    {
        return $this->scriptInstruction84;
    }

    public function setScriptInstruction84(?string $scriptInstruction84): self
    {
        $this->scriptInstruction84 = $scriptInstruction84;

        return $this;
    }

    public function getScriptInstruction85(): ?string
    {
        return $this->scriptInstruction85;
    }

    public function setScriptInstruction85(?string $scriptInstruction85): self
    {
        $this->scriptInstruction85 = $scriptInstruction85;

        return $this;
    }

    public function getScriptInstruction86(): ?string
    {
        return $this->scriptInstruction86;
    }

    public function setScriptInstruction86(?string $scriptInstruction86): self
    {
        $this->scriptInstruction86 = $scriptInstruction86;

        return $this;
    }

    public function getScriptInstruction87(): ?string
    {
        return $this->scriptInstruction87;
    }

    public function setScriptInstruction87(?string $scriptInstruction87): self
    {
        $this->scriptInstruction87 = $scriptInstruction87;

        return $this;
    }

    public function getScriptInstruction88(): ?string
    {
        return $this->scriptInstruction88;
    }

    public function setScriptInstruction88(?string $scriptInstruction88): self
    {
        $this->scriptInstruction88 = $scriptInstruction88;

        return $this;
    }

    public function getScriptInstruction89(): ?string
    {
        return $this->scriptInstruction89;
    }

    public function setScriptInstruction89(?string $scriptInstruction89): self
    {
        $this->scriptInstruction89 = $scriptInstruction89;

        return $this;
    }

    public function getScriptInstruction90(): ?string
    {
        return $this->scriptInstruction90;
    }

    public function setScriptInstruction90(?string $scriptInstruction90): self
    {
        $this->scriptInstruction90 = $scriptInstruction90;

        return $this;
    }

    public function getScriptInstruction91(): ?string
    {
        return $this->scriptInstruction91;
    }

    public function setScriptInstruction91(?string $scriptInstruction91): self
    {
        $this->scriptInstruction91 = $scriptInstruction91;

        return $this;
    }

    public function getScriptInstruction92(): ?string
    {
        return $this->scriptInstruction92;
    }

    public function setScriptInstruction92(?string $scriptInstruction92): self
    {
        $this->scriptInstruction92 = $scriptInstruction92;

        return $this;
    }

    public function getScriptInstruction93(): ?string
    {
        return $this->scriptInstruction93;
    }

    public function setScriptInstruction93(?string $scriptInstruction93): self
    {
        $this->scriptInstruction93 = $scriptInstruction93;

        return $this;
    }

    public function getScriptInstruction94(): ?string
    {
        return $this->scriptInstruction94;
    }

    public function setScriptInstruction94(?string $scriptInstruction94): self
    {
        $this->scriptInstruction94 = $scriptInstruction94;

        return $this;
    }

    public function getScriptInstruction95(): ?string
    {
        return $this->scriptInstruction95;
    }

    public function setScriptInstruction95(?string $scriptInstruction95): self
    {
        $this->scriptInstruction95 = $scriptInstruction95;

        return $this;
    }

    public function getScriptInstruction96(): ?string
    {
        return $this->scriptInstruction96;
    }

    public function setScriptInstruction96(?string $scriptInstruction96): self
    {
        $this->scriptInstruction96 = $scriptInstruction96;

        return $this;
    }

    public function getScriptInstruction97(): ?string
    {
        return $this->scriptInstruction97;
    }

    public function setScriptInstruction97(?string $scriptInstruction97): self
    {
        $this->scriptInstruction97 = $scriptInstruction97;

        return $this;
    }

    public function getScriptInstruction98(): ?string
    {
        return $this->scriptInstruction98;
    }

    public function setScriptInstruction98(?string $scriptInstruction98): self
    {
        $this->scriptInstruction98 = $scriptInstruction98;

        return $this;
    }

    public function getScriptInstruction99(): ?string
    {
        return $this->scriptInstruction99;
    }

    public function setScriptInstruction99(?string $scriptInstruction99): self
    {
        $this->scriptInstruction99 = $scriptInstruction99;

        return $this;
    }

    public function getScriptInstruction100(): ?string
    {
        return $this->scriptInstruction100;
    }

    public function setScriptInstruction100(?string $scriptInstruction100): self
    {
        $this->scriptInstruction100 = $scriptInstruction100;

        return $this;
    }

    public function getScriptInstruction101(): ?string
    {
        return $this->scriptInstruction101;
    }

    public function setScriptInstruction101(?string $scriptInstruction101): self
    {
        $this->scriptInstruction101 = $scriptInstruction101;

        return $this;
    }

    public function getScriptInstruction102(): ?string
    {
        return $this->scriptInstruction102;
    }

    public function setScriptInstruction102(?string $scriptInstruction102): self
    {
        $this->scriptInstruction102 = $scriptInstruction102;

        return $this;
    }

    public function getScriptInstruction103(): ?string
    {
        return $this->scriptInstruction103;
    }

    public function setScriptInstruction103(?string $scriptInstruction103): self
    {
        $this->scriptInstruction103 = $scriptInstruction103;

        return $this;
    }

    public function getScriptInstruction104(): ?string
    {
        return $this->scriptInstruction104;
    }

    public function setScriptInstruction104(?string $scriptInstruction104): self
    {
        $this->scriptInstruction104 = $scriptInstruction104;

        return $this;
    }

    public function getScriptInstruction105(): ?string
    {
        return $this->scriptInstruction105;
    }

    public function setScriptInstruction105(?string $scriptInstruction105): self
    {
        $this->scriptInstruction105 = $scriptInstruction105;

        return $this;
    }

    public function getScriptInstruction106(): ?string
    {
        return $this->scriptInstruction106;
    }

    public function setScriptInstruction106(?string $scriptInstruction106): self
    {
        $this->scriptInstruction106 = $scriptInstruction106;

        return $this;
    }

    public function getScriptInstruction107(): ?string
    {
        return $this->scriptInstruction107;
    }

    public function setScriptInstruction107(?string $scriptInstruction107): self
    {
        $this->scriptInstruction107 = $scriptInstruction107;

        return $this;
    }

    public function getScriptInstruction108(): ?string
    {
        return $this->scriptInstruction108;
    }

    public function setScriptInstruction108(?string $scriptInstruction108): self
    {
        $this->scriptInstruction108 = $scriptInstruction108;

        return $this;
    }

    public function getScriptInstruction109(): ?string
    {
        return $this->scriptInstruction109;
    }

    public function setScriptInstruction109(?string $scriptInstruction109): self
    {
        $this->scriptInstruction109 = $scriptInstruction109;

        return $this;
    }

    public function getScriptInstruction110(): ?string
    {
        return $this->scriptInstruction110;
    }

    public function setScriptInstruction110(?string $scriptInstruction110): self
    {
        $this->scriptInstruction110 = $scriptInstruction110;

        return $this;
    }

    public function getScriptInstruction111(): ?string
    {
        return $this->scriptInstruction111;
    }

    public function setScriptInstruction111(?string $scriptInstruction111): self
    {
        $this->scriptInstruction111 = $scriptInstruction111;

        return $this;
    }

    public function getScriptInstruction112(): ?string
    {
        return $this->scriptInstruction112;
    }

    public function setScriptInstruction112(?string $scriptInstruction112): self
    {
        $this->scriptInstruction112 = $scriptInstruction112;

        return $this;
    }

    public function getScriptInstruction113(): ?string
    {
        return $this->scriptInstruction113;
    }

    public function setScriptInstruction113(?string $scriptInstruction113): self
    {
        $this->scriptInstruction113 = $scriptInstruction113;

        return $this;
    }

    public function getScriptInstruction114(): ?string
    {
        return $this->scriptInstruction114;
    }

    public function setScriptInstruction114(?string $scriptInstruction114): self
    {
        $this->scriptInstruction114 = $scriptInstruction114;

        return $this;
    }

    public function getScriptInstruction115(): ?string
    {
        return $this->scriptInstruction115;
    }

    public function setScriptInstruction115(?string $scriptInstruction115): self
    {
        $this->scriptInstruction115 = $scriptInstruction115;

        return $this;
    }

    public function getScriptInstruction116(): ?string
    {
        return $this->scriptInstruction116;
    }

    public function setScriptInstruction116(?string $scriptInstruction116): self
    {
        $this->scriptInstruction116 = $scriptInstruction116;

        return $this;
    }

    public function getScriptInstruction117(): ?string
    {
        return $this->scriptInstruction117;
    }

    public function setScriptInstruction117(?string $scriptInstruction117): self
    {
        $this->scriptInstruction117 = $scriptInstruction117;

        return $this;
    }

    public function getScriptInstruction118(): ?string
    {
        return $this->scriptInstruction118;
    }

    public function setScriptInstruction118(?string $scriptInstruction118): self
    {
        $this->scriptInstruction118 = $scriptInstruction118;

        return $this;
    }

    public function getScriptInstruction119(): ?string
    {
        return $this->scriptInstruction119;
    }

    public function setScriptInstruction119(?string $scriptInstruction119): self
    {
        $this->scriptInstruction119 = $scriptInstruction119;

        return $this;
    }

    public function getScriptInstruction120(): ?string
    {
        return $this->scriptInstruction120;
    }

    public function setScriptInstruction120(?string $scriptInstruction120): self
    {
        $this->scriptInstruction120 = $scriptInstruction120;

        return $this;
    }

    public function getScriptInstruction121(): ?string
    {
        return $this->scriptInstruction121;
    }

    public function setScriptInstruction121(?string $scriptInstruction121): self
    {
        $this->scriptInstruction121 = $scriptInstruction121;

        return $this;
    }

    public function getScriptInstruction122(): ?string
    {
        return $this->scriptInstruction122;
    }

    public function setScriptInstruction122(?string $scriptInstruction122): self
    {
        $this->scriptInstruction122 = $scriptInstruction122;

        return $this;
    }

    public function getScriptInstruction123(): ?string
    {
        return $this->scriptInstruction123;
    }

    public function setScriptInstruction123(?string $scriptInstruction123): self
    {
        $this->scriptInstruction123 = $scriptInstruction123;

        return $this;
    }

    public function getScriptInstruction124(): ?string
    {
        return $this->scriptInstruction124;
    }

    public function setScriptInstruction124(?string $scriptInstruction124): self
    {
        $this->scriptInstruction124 = $scriptInstruction124;

        return $this;
    }

    public function getScriptInstruction125(): ?string
    {
        return $this->scriptInstruction125;
    }

    public function setScriptInstruction125(?string $scriptInstruction125): self
    {
        $this->scriptInstruction125 = $scriptInstruction125;

        return $this;
    }

    public function getScriptInstruction126(): ?string
    {
        return $this->scriptInstruction126;
    }

    public function setScriptInstruction126(?string $scriptInstruction126): self
    {
        $this->scriptInstruction126 = $scriptInstruction126;

        return $this;
    }

    public function getScriptInstruction127(): ?string
    {
        return $this->scriptInstruction127;
    }

    public function setScriptInstruction127(?string $scriptInstruction127): self
    {
        $this->scriptInstruction127 = $scriptInstruction127;

        return $this;
    }

    public function getScriptInstruction128(): ?string
    {
        return $this->scriptInstruction128;
    }

    public function setScriptInstruction128(?string $scriptInstruction128): self
    {
        $this->scriptInstruction128 = $scriptInstruction128;

        return $this;
    }

    public function getScriptInstruction129(): ?string
    {
        return $this->scriptInstruction129;
    }

    public function setScriptInstruction129(?string $scriptInstruction129): self
    {
        $this->scriptInstruction129 = $scriptInstruction129;

        return $this;
    }

    public function getScriptInstruction130(): ?string
    {
        return $this->scriptInstruction130;
    }

    public function setScriptInstruction130(?string $scriptInstruction130): self
    {
        $this->scriptInstruction130 = $scriptInstruction130;

        return $this;
    }

    public function getScriptInstruction131(): ?string
    {
        return $this->scriptInstruction131;
    }

    public function setScriptInstruction131(?string $scriptInstruction131): self
    {
        $this->scriptInstruction131 = $scriptInstruction131;

        return $this;
    }

    public function getScriptInstruction132(): ?string
    {
        return $this->scriptInstruction132;
    }

    public function setScriptInstruction132(?string $scriptInstruction132): self
    {
        $this->scriptInstruction132 = $scriptInstruction132;

        return $this;
    }

    public function getScriptInstruction133(): ?string
    {
        return $this->scriptInstruction133;
    }

    public function setScriptInstruction133(?string $scriptInstruction133): self
    {
        $this->scriptInstruction133 = $scriptInstruction133;

        return $this;
    }

    public function getScriptInstruction134(): ?string
    {
        return $this->scriptInstruction134;
    }

    public function setScriptInstruction134(?string $scriptInstruction134): self
    {
        $this->scriptInstruction134 = $scriptInstruction134;

        return $this;
    }

    public function getScriptInstruction135(): ?string
    {
        return $this->scriptInstruction135;
    }

    public function setScriptInstruction135(?string $scriptInstruction135): self
    {
        $this->scriptInstruction135 = $scriptInstruction135;

        return $this;
    }

    public function getScriptInstruction136(): ?string
    {
        return $this->scriptInstruction136;
    }

    public function setScriptInstruction136(?string $scriptInstruction136): self
    {
        $this->scriptInstruction136 = $scriptInstruction136;

        return $this;
    }

    public function getScriptInstruction137(): ?string
    {
        return $this->scriptInstruction137;
    }

    public function setScriptInstruction137(?string $scriptInstruction137): self
    {
        $this->scriptInstruction137 = $scriptInstruction137;

        return $this;
    }

    public function getScriptInstruction138(): ?string
    {
        return $this->scriptInstruction138;
    }

    public function setScriptInstruction138(?string $scriptInstruction138): self
    {
        $this->scriptInstruction138 = $scriptInstruction138;

        return $this;
    }

    public function getScriptInstruction139(): ?string
    {
        return $this->scriptInstruction139;
    }

    public function setScriptInstruction139(?string $scriptInstruction139): self
    {
        $this->scriptInstruction139 = $scriptInstruction139;

        return $this;
    }

    public function getScriptInstruction140(): ?string
    {
        return $this->scriptInstruction140;
    }

    public function setScriptInstruction140(?string $scriptInstruction140): self
    {
        $this->scriptInstruction140 = $scriptInstruction140;

        return $this;
    }

    public function getScriptInstruction141(): ?string
    {
        return $this->scriptInstruction141;
    }

    public function setScriptInstruction141(?string $scriptInstruction141): self
    {
        $this->scriptInstruction141 = $scriptInstruction141;

        return $this;
    }

    public function getScriptInstruction142(): ?string
    {
        return $this->scriptInstruction142;
    }

    public function setScriptInstruction142(?string $scriptInstruction142): self
    {
        $this->scriptInstruction142 = $scriptInstruction142;

        return $this;
    }

    public function getScriptInstruction143(): ?string
    {
        return $this->scriptInstruction143;
    }

    public function setScriptInstruction143(?string $scriptInstruction143): self
    {
        $this->scriptInstruction143 = $scriptInstruction143;

        return $this;
    }

    public function getScriptInstruction144(): ?string
    {
        return $this->scriptInstruction144;
    }

    public function setScriptInstruction144(?string $scriptInstruction144): self
    {
        $this->scriptInstruction144 = $scriptInstruction144;

        return $this;
    }

    public function getScriptInstruction145(): ?string
    {
        return $this->scriptInstruction145;
    }

    public function setScriptInstruction145(?string $scriptInstruction145): self
    {
        $this->scriptInstruction145 = $scriptInstruction145;

        return $this;
    }

    public function getScriptInstruction146(): ?string
    {
        return $this->scriptInstruction146;
    }

    public function setScriptInstruction146(?string $scriptInstruction146): self
    {
        $this->scriptInstruction146 = $scriptInstruction146;

        return $this;
    }

    public function getScriptInstruction147(): ?string
    {
        return $this->scriptInstruction147;
    }

    public function setScriptInstruction147(?string $scriptInstruction147): self
    {
        $this->scriptInstruction147 = $scriptInstruction147;

        return $this;
    }

    public function getScriptInstruction148(): ?string
    {
        return $this->scriptInstruction148;
    }

    public function setScriptInstruction148(?string $scriptInstruction148): self
    {
        $this->scriptInstruction148 = $scriptInstruction148;

        return $this;
    }

    public function getScriptInstruction149(): ?string
    {
        return $this->scriptInstruction149;
    }

    public function setScriptInstruction149(?string $scriptInstruction149): self
    {
        $this->scriptInstruction149 = $scriptInstruction149;

        return $this;
    }

    public function getScriptInstruction150(): ?string
    {
        return $this->scriptInstruction150;
    }

    public function setScriptInstruction150(?string $scriptInstruction150): self
    {
        $this->scriptInstruction150 = $scriptInstruction150;

        return $this;
    }

    public function getScriptInstruction151(): ?string
    {
        return $this->scriptInstruction151;
    }

    public function setScriptInstruction151(?string $scriptInstruction151): self
    {
        $this->scriptInstruction151 = $scriptInstruction151;

        return $this;
    }

    public function getScriptInstruction152(): ?string
    {
        return $this->scriptInstruction152;
    }

    public function setScriptInstruction152(?string $scriptInstruction152): self
    {
        $this->scriptInstruction152 = $scriptInstruction152;

        return $this;
    }

    public function getScriptInstruction153(): ?string
    {
        return $this->scriptInstruction153;
    }

    public function setScriptInstruction153(?string $scriptInstruction153): self
    {
        $this->scriptInstruction153 = $scriptInstruction153;

        return $this;
    }

    public function getScriptInstruction154(): ?string
    {
        return $this->scriptInstruction154;
    }

    public function setScriptInstruction154(?string $scriptInstruction154): self
    {
        $this->scriptInstruction154 = $scriptInstruction154;

        return $this;
    }

    public function getScriptInstruction155(): ?string
    {
        return $this->scriptInstruction155;
    }

    public function setScriptInstruction155(?string $scriptInstruction155): self
    {
        $this->scriptInstruction155 = $scriptInstruction155;

        return $this;
    }

    public function getScriptInstruction156(): ?string
    {
        return $this->scriptInstruction156;
    }

    public function setScriptInstruction156(?string $scriptInstruction156): self
    {
        $this->scriptInstruction156 = $scriptInstruction156;

        return $this;
    }

    public function getScriptInstruction157(): ?string
    {
        return $this->scriptInstruction157;
    }

    public function setScriptInstruction157(?string $scriptInstruction157): self
    {
        $this->scriptInstruction157 = $scriptInstruction157;

        return $this;
    }

    public function getScriptInstruction158(): ?string
    {
        return $this->scriptInstruction158;
    }

    public function setScriptInstruction158(?string $scriptInstruction158): self
    {
        $this->scriptInstruction158 = $scriptInstruction158;

        return $this;
    }

    public function getScriptInstruction159(): ?string
    {
        return $this->scriptInstruction159;
    }

    public function setScriptInstruction159(?string $scriptInstruction159): self
    {
        $this->scriptInstruction159 = $scriptInstruction159;

        return $this;
    }

    public function getScriptInstruction160(): ?string
    {
        return $this->scriptInstruction160;
    }

    public function setScriptInstruction160(?string $scriptInstruction160): self
    {
        $this->scriptInstruction160 = $scriptInstruction160;

        return $this;
    }

    public function getScriptInstruction161(): ?string
    {
        return $this->scriptInstruction161;
    }

    public function setScriptInstruction161(?string $scriptInstruction161): self
    {
        $this->scriptInstruction161 = $scriptInstruction161;

        return $this;
    }

    public function getScriptInstruction162(): ?string
    {
        return $this->scriptInstruction162;
    }

    public function setScriptInstruction162(?string $scriptInstruction162): self
    {
        $this->scriptInstruction162 = $scriptInstruction162;

        return $this;
    }

    public function getScriptInstruction163(): ?string
    {
        return $this->scriptInstruction163;
    }

    public function setScriptInstruction163(?string $scriptInstruction163): self
    {
        $this->scriptInstruction163 = $scriptInstruction163;

        return $this;
    }

    public function getScriptInstruction164(): ?string
    {
        return $this->scriptInstruction164;
    }

    public function setScriptInstruction164(?string $scriptInstruction164): self
    {
        $this->scriptInstruction164 = $scriptInstruction164;

        return $this;
    }

    public function getScriptInstruction165(): ?string
    {
        return $this->scriptInstruction165;
    }

    public function setScriptInstruction165(?string $scriptInstruction165): self
    {
        $this->scriptInstruction165 = $scriptInstruction165;

        return $this;
    }

    public function getScriptInstruction166(): ?string
    {
        return $this->scriptInstruction166;
    }

    public function setScriptInstruction166(?string $scriptInstruction166): self
    {
        $this->scriptInstruction166 = $scriptInstruction166;

        return $this;
    }

    public function getScriptInstruction167(): ?string
    {
        return $this->scriptInstruction167;
    }

    public function setScriptInstruction167(?string $scriptInstruction167): self
    {
        $this->scriptInstruction167 = $scriptInstruction167;

        return $this;
    }

    public function getScriptInstruction168(): ?string
    {
        return $this->scriptInstruction168;
    }

    public function setScriptInstruction168(?string $scriptInstruction168): self
    {
        $this->scriptInstruction168 = $scriptInstruction168;

        return $this;
    }

    public function getScriptInstruction169(): ?string
    {
        return $this->scriptInstruction169;
    }

    public function setScriptInstruction169(?string $scriptInstruction169): self
    {
        $this->scriptInstruction169 = $scriptInstruction169;

        return $this;
    }

    public function getScriptInstruction170(): ?string
    {
        return $this->scriptInstruction170;
    }

    public function setScriptInstruction170(?string $scriptInstruction170): self
    {
        $this->scriptInstruction170 = $scriptInstruction170;

        return $this;
    }

    public function getScriptInstruction171(): ?string
    {
        return $this->scriptInstruction171;
    }

    public function setScriptInstruction171(?string $scriptInstruction171): self
    {
        $this->scriptInstruction171 = $scriptInstruction171;

        return $this;
    }

    public function getScriptInstruction172(): ?string
    {
        return $this->scriptInstruction172;
    }

    public function setScriptInstruction172(?string $scriptInstruction172): self
    {
        $this->scriptInstruction172 = $scriptInstruction172;

        return $this;
    }

    public function getScriptInstruction173(): ?string
    {
        return $this->scriptInstruction173;
    }

    public function setScriptInstruction173(?string $scriptInstruction173): self
    {
        $this->scriptInstruction173 = $scriptInstruction173;

        return $this;
    }

    public function getScriptInstruction174(): ?string
    {
        return $this->scriptInstruction174;
    }

    public function setScriptInstruction174(?string $scriptInstruction174): self
    {
        $this->scriptInstruction174 = $scriptInstruction174;

        return $this;
    }

    public function getScriptInstruction175(): ?string
    {
        return $this->scriptInstruction175;
    }

    public function setScriptInstruction175(?string $scriptInstruction175): self
    {
        $this->scriptInstruction175 = $scriptInstruction175;

        return $this;
    }

    public function getScriptInstruction176(): ?string
    {
        return $this->scriptInstruction176;
    }

    public function setScriptInstruction176(?string $scriptInstruction176): self
    {
        $this->scriptInstruction176 = $scriptInstruction176;

        return $this;
    }

    public function getScriptInstruction177(): ?string
    {
        return $this->scriptInstruction177;
    }

    public function setScriptInstruction177(?string $scriptInstruction177): self
    {
        $this->scriptInstruction177 = $scriptInstruction177;

        return $this;
    }

    public function getScriptInstruction178(): ?string
    {
        return $this->scriptInstruction178;
    }

    public function setScriptInstruction178(?string $scriptInstruction178): self
    {
        $this->scriptInstruction178 = $scriptInstruction178;

        return $this;
    }

    public function getScriptInstruction179(): ?string
    {
        return $this->scriptInstruction179;
    }

    public function setScriptInstruction179(?string $scriptInstruction179): self
    {
        $this->scriptInstruction179 = $scriptInstruction179;

        return $this;
    }

    public function getScriptInstruction180(): ?string
    {
        return $this->scriptInstruction180;
    }

    public function setScriptInstruction180(?string $scriptInstruction180): self
    {
        $this->scriptInstruction180 = $scriptInstruction180;

        return $this;
    }

    public function getScriptInstruction181(): ?string
    {
        return $this->scriptInstruction181;
    }

    public function setScriptInstruction181(?string $scriptInstruction181): self
    {
        $this->scriptInstruction181 = $scriptInstruction181;

        return $this;
    }

    public function getScriptInstruction182(): ?string
    {
        return $this->scriptInstruction182;
    }

    public function setScriptInstruction182(?string $scriptInstruction182): self
    {
        $this->scriptInstruction182 = $scriptInstruction182;

        return $this;
    }

    public function getScriptInstruction183(): ?string
    {
        return $this->scriptInstruction183;
    }

    public function setScriptInstruction183(?string $scriptInstruction183): self
    {
        $this->scriptInstruction183 = $scriptInstruction183;

        return $this;
    }

    public function getScriptInstruction184(): ?string
    {
        return $this->scriptInstruction184;
    }

    public function setScriptInstruction184(?string $scriptInstruction184): self
    {
        $this->scriptInstruction184 = $scriptInstruction184;

        return $this;
    }

    public function getScriptInstruction185(): ?string
    {
        return $this->scriptInstruction185;
    }

    public function setScriptInstruction185(?string $scriptInstruction185): self
    {
        $this->scriptInstruction185 = $scriptInstruction185;

        return $this;
    }

    public function getScriptInstruction186(): ?string
    {
        return $this->scriptInstruction186;
    }

    public function setScriptInstruction186(?string $scriptInstruction186): self
    {
        $this->scriptInstruction186 = $scriptInstruction186;

        return $this;
    }

    public function getScriptInstruction187(): ?string
    {
        return $this->scriptInstruction187;
    }

    public function setScriptInstruction187(?string $scriptInstruction187): self
    {
        $this->scriptInstruction187 = $scriptInstruction187;

        return $this;
    }

    public function getScriptInstruction188(): ?string
    {
        return $this->scriptInstruction188;
    }

    public function setScriptInstruction188(?string $scriptInstruction188): self
    {
        $this->scriptInstruction188 = $scriptInstruction188;

        return $this;
    }

    public function getScriptInstruction189(): ?string
    {
        return $this->scriptInstruction189;
    }

    public function setScriptInstruction189(?string $scriptInstruction189): self
    {
        $this->scriptInstruction189 = $scriptInstruction189;

        return $this;
    }

    public function getScriptInstruction190(): ?string
    {
        return $this->scriptInstruction190;
    }

    public function setScriptInstruction190(?string $scriptInstruction190): self
    {
        $this->scriptInstruction190 = $scriptInstruction190;

        return $this;
    }

    public function getScriptInstruction191(): ?string
    {
        return $this->scriptInstruction191;
    }

    public function setScriptInstruction191(?string $scriptInstruction191): self
    {
        $this->scriptInstruction191 = $scriptInstruction191;

        return $this;
    }

    public function getScriptInstruction192(): ?string
    {
        return $this->scriptInstruction192;
    }

    public function setScriptInstruction192(?string $scriptInstruction192): self
    {
        $this->scriptInstruction192 = $scriptInstruction192;

        return $this;
    }

    public function getScriptInstruction193(): ?string
    {
        return $this->scriptInstruction193;
    }

    public function setScriptInstruction193(?string $scriptInstruction193): self
    {
        $this->scriptInstruction193 = $scriptInstruction193;

        return $this;
    }

    public function getScriptInstruction194(): ?string
    {
        return $this->scriptInstruction194;
    }

    public function setScriptInstruction194(?string $scriptInstruction194): self
    {
        $this->scriptInstruction194 = $scriptInstruction194;

        return $this;
    }

    public function getScriptInstruction195(): ?string
    {
        return $this->scriptInstruction195;
    }

    public function setScriptInstruction195(?string $scriptInstruction195): self
    {
        $this->scriptInstruction195 = $scriptInstruction195;

        return $this;
    }

    public function getScriptInstruction196(): ?string
    {
        return $this->scriptInstruction196;
    }

    public function setScriptInstruction196(?string $scriptInstruction196): self
    {
        $this->scriptInstruction196 = $scriptInstruction196;

        return $this;
    }

    public function getScriptInstruction197(): ?string
    {
        return $this->scriptInstruction197;
    }

    public function setScriptInstruction197(?string $scriptInstruction197): self
    {
        $this->scriptInstruction197 = $scriptInstruction197;

        return $this;
    }

    public function getScriptInstruction198(): ?string
    {
        return $this->scriptInstruction198;
    }

    public function setScriptInstruction198(?string $scriptInstruction198): self
    {
        $this->scriptInstruction198 = $scriptInstruction198;

        return $this;
    }

    public function getScriptInstruction199(): ?string
    {
        return $this->scriptInstruction199;
    }

    public function setScriptInstruction199(?string $scriptInstruction199): self
    {
        $this->scriptInstruction199 = $scriptInstruction199;

        return $this;
    }

    public function getScriptValue0(): ?string
    {
        return $this->scriptValue0;
    }

    public function setScriptValue0(?string $scriptValue0): self
    {
        $this->scriptValue0 = $scriptValue0;

        return $this;
    }

    public function getScriptValue1(): ?string
    {
        return $this->scriptValue1;
    }

    public function setScriptValue1(?string $scriptValue1): self
    {
        $this->scriptValue1 = $scriptValue1;

        return $this;
    }

    public function getScriptValue2(): ?string
    {
        return $this->scriptValue2;
    }

    public function setScriptValue2(?string $scriptValue2): self
    {
        $this->scriptValue2 = $scriptValue2;

        return $this;
    }

    public function getScriptValue3(): ?string
    {
        return $this->scriptValue3;
    }

    public function setScriptValue3(?string $scriptValue3): self
    {
        $this->scriptValue3 = $scriptValue3;

        return $this;
    }

    public function getScriptValue4(): ?string
    {
        return $this->scriptValue4;
    }

    public function setScriptValue4(?string $scriptValue4): self
    {
        $this->scriptValue4 = $scriptValue4;

        return $this;
    }

    public function getScriptValue5(): ?string
    {
        return $this->scriptValue5;
    }

    public function setScriptValue5(?string $scriptValue5): self
    {
        $this->scriptValue5 = $scriptValue5;

        return $this;
    }

    public function getScriptValue6(): ?string
    {
        return $this->scriptValue6;
    }

    public function setScriptValue6(?string $scriptValue6): self
    {
        $this->scriptValue6 = $scriptValue6;

        return $this;
    }

    public function getScriptValue7(): ?string
    {
        return $this->scriptValue7;
    }

    public function setScriptValue7(?string $scriptValue7): self
    {
        $this->scriptValue7 = $scriptValue7;

        return $this;
    }

    public function getScriptValue8(): ?string
    {
        return $this->scriptValue8;
    }

    public function setScriptValue8(?string $scriptValue8): self
    {
        $this->scriptValue8 = $scriptValue8;

        return $this;
    }

    public function getScriptValue9(): ?string
    {
        return $this->scriptValue9;
    }

    public function setScriptValue9(?string $scriptValue9): self
    {
        $this->scriptValue9 = $scriptValue9;

        return $this;
    }

    public function getScriptValue10(): ?string
    {
        return $this->scriptValue10;
    }

    public function setScriptValue10(?string $scriptValue10): self
    {
        $this->scriptValue10 = $scriptValue10;

        return $this;
    }

    public function getScriptValue11(): ?string
    {
        return $this->scriptValue11;
    }

    public function setScriptValue11(?string $scriptValue11): self
    {
        $this->scriptValue11 = $scriptValue11;

        return $this;
    }

    public function getScriptValue12(): ?string
    {
        return $this->scriptValue12;
    }

    public function setScriptValue12(?string $scriptValue12): self
    {
        $this->scriptValue12 = $scriptValue12;

        return $this;
    }

    public function getScriptValue13(): ?string
    {
        return $this->scriptValue13;
    }

    public function setScriptValue13(?string $scriptValue13): self
    {
        $this->scriptValue13 = $scriptValue13;

        return $this;
    }

    public function getScriptValue14(): ?string
    {
        return $this->scriptValue14;
    }

    public function setScriptValue14(?string $scriptValue14): self
    {
        $this->scriptValue14 = $scriptValue14;

        return $this;
    }

    public function getScriptValue15(): ?string
    {
        return $this->scriptValue15;
    }

    public function setScriptValue15(?string $scriptValue15): self
    {
        $this->scriptValue15 = $scriptValue15;

        return $this;
    }

    public function getScriptValue16(): ?string
    {
        return $this->scriptValue16;
    }

    public function setScriptValue16(?string $scriptValue16): self
    {
        $this->scriptValue16 = $scriptValue16;

        return $this;
    }

    public function getScriptValue17(): ?string
    {
        return $this->scriptValue17;
    }

    public function setScriptValue17(?string $scriptValue17): self
    {
        $this->scriptValue17 = $scriptValue17;

        return $this;
    }

    public function getScriptValue18(): ?string
    {
        return $this->scriptValue18;
    }

    public function setScriptValue18(?string $scriptValue18): self
    {
        $this->scriptValue18 = $scriptValue18;

        return $this;
    }

    public function getScriptValue19(): ?string
    {
        return $this->scriptValue19;
    }

    public function setScriptValue19(?string $scriptValue19): self
    {
        $this->scriptValue19 = $scriptValue19;

        return $this;
    }

    public function getScriptValue20(): ?string
    {
        return $this->scriptValue20;
    }

    public function setScriptValue20(?string $scriptValue20): self
    {
        $this->scriptValue20 = $scriptValue20;

        return $this;
    }

    public function getScriptValue21(): ?string
    {
        return $this->scriptValue21;
    }

    public function setScriptValue21(?string $scriptValue21): self
    {
        $this->scriptValue21 = $scriptValue21;

        return $this;
    }

    public function getScriptValue22(): ?string
    {
        return $this->scriptValue22;
    }

    public function setScriptValue22(?string $scriptValue22): self
    {
        $this->scriptValue22 = $scriptValue22;

        return $this;
    }

    public function getScriptValue23(): ?string
    {
        return $this->scriptValue23;
    }

    public function setScriptValue23(?string $scriptValue23): self
    {
        $this->scriptValue23 = $scriptValue23;

        return $this;
    }

    public function getScriptValue24(): ?string
    {
        return $this->scriptValue24;
    }

    public function setScriptValue24(?string $scriptValue24): self
    {
        $this->scriptValue24 = $scriptValue24;

        return $this;
    }

    public function getScriptValue25(): ?string
    {
        return $this->scriptValue25;
    }

    public function setScriptValue25(?string $scriptValue25): self
    {
        $this->scriptValue25 = $scriptValue25;

        return $this;
    }

    public function getScriptValue26(): ?string
    {
        return $this->scriptValue26;
    }

    public function setScriptValue26(?string $scriptValue26): self
    {
        $this->scriptValue26 = $scriptValue26;

        return $this;
    }

    public function getScriptValue27(): ?string
    {
        return $this->scriptValue27;
    }

    public function setScriptValue27(?string $scriptValue27): self
    {
        $this->scriptValue27 = $scriptValue27;

        return $this;
    }

    public function getScriptValue28(): ?string
    {
        return $this->scriptValue28;
    }

    public function setScriptValue28(?string $scriptValue28): self
    {
        $this->scriptValue28 = $scriptValue28;

        return $this;
    }

    public function getScriptValue29(): ?string
    {
        return $this->scriptValue29;
    }

    public function setScriptValue29(?string $scriptValue29): self
    {
        $this->scriptValue29 = $scriptValue29;

        return $this;
    }

    public function getScriptValue30(): ?string
    {
        return $this->scriptValue30;
    }

    public function setScriptValue30(?string $scriptValue30): self
    {
        $this->scriptValue30 = $scriptValue30;

        return $this;
    }

    public function getScriptValue31(): ?string
    {
        return $this->scriptValue31;
    }

    public function setScriptValue31(?string $scriptValue31): self
    {
        $this->scriptValue31 = $scriptValue31;

        return $this;
    }

    public function getScriptValue32(): ?string
    {
        return $this->scriptValue32;
    }

    public function setScriptValue32(?string $scriptValue32): self
    {
        $this->scriptValue32 = $scriptValue32;

        return $this;
    }

    public function getScriptValue33(): ?string
    {
        return $this->scriptValue33;
    }

    public function setScriptValue33(?string $scriptValue33): self
    {
        $this->scriptValue33 = $scriptValue33;

        return $this;
    }

    public function getScriptValue34(): ?string
    {
        return $this->scriptValue34;
    }

    public function setScriptValue34(?string $scriptValue34): self
    {
        $this->scriptValue34 = $scriptValue34;

        return $this;
    }

    public function getScriptValue35(): ?string
    {
        return $this->scriptValue35;
    }

    public function setScriptValue35(?string $scriptValue35): self
    {
        $this->scriptValue35 = $scriptValue35;

        return $this;
    }

    public function getScriptValue36(): ?string
    {
        return $this->scriptValue36;
    }

    public function setScriptValue36(?string $scriptValue36): self
    {
        $this->scriptValue36 = $scriptValue36;

        return $this;
    }

    public function getScriptValue37(): ?string
    {
        return $this->scriptValue37;
    }

    public function setScriptValue37(?string $scriptValue37): self
    {
        $this->scriptValue37 = $scriptValue37;

        return $this;
    }

    public function getScriptValue38(): ?string
    {
        return $this->scriptValue38;
    }

    public function setScriptValue38(?string $scriptValue38): self
    {
        $this->scriptValue38 = $scriptValue38;

        return $this;
    }

    public function getScriptValue39(): ?string
    {
        return $this->scriptValue39;
    }

    public function setScriptValue39(?string $scriptValue39): self
    {
        $this->scriptValue39 = $scriptValue39;

        return $this;
    }

    public function getScriptValue40(): ?string
    {
        return $this->scriptValue40;
    }

    public function setScriptValue40(?string $scriptValue40): self
    {
        $this->scriptValue40 = $scriptValue40;

        return $this;
    }

    public function getScriptValue41(): ?string
    {
        return $this->scriptValue41;
    }

    public function setScriptValue41(?string $scriptValue41): self
    {
        $this->scriptValue41 = $scriptValue41;

        return $this;
    }

    public function getScriptValue42(): ?string
    {
        return $this->scriptValue42;
    }

    public function setScriptValue42(?string $scriptValue42): self
    {
        $this->scriptValue42 = $scriptValue42;

        return $this;
    }

    public function getScriptValue43(): ?string
    {
        return $this->scriptValue43;
    }

    public function setScriptValue43(?string $scriptValue43): self
    {
        $this->scriptValue43 = $scriptValue43;

        return $this;
    }

    public function getScriptValue44(): ?string
    {
        return $this->scriptValue44;
    }

    public function setScriptValue44(?string $scriptValue44): self
    {
        $this->scriptValue44 = $scriptValue44;

        return $this;
    }

    public function getScriptValue45(): ?string
    {
        return $this->scriptValue45;
    }

    public function setScriptValue45(?string $scriptValue45): self
    {
        $this->scriptValue45 = $scriptValue45;

        return $this;
    }

    public function getScriptValue46(): ?string
    {
        return $this->scriptValue46;
    }

    public function setScriptValue46(?string $scriptValue46): self
    {
        $this->scriptValue46 = $scriptValue46;

        return $this;
    }

    public function getScriptValue47(): ?string
    {
        return $this->scriptValue47;
    }

    public function setScriptValue47(?string $scriptValue47): self
    {
        $this->scriptValue47 = $scriptValue47;

        return $this;
    }

    public function getScriptValue48(): ?string
    {
        return $this->scriptValue48;
    }

    public function setScriptValue48(?string $scriptValue48): self
    {
        $this->scriptValue48 = $scriptValue48;

        return $this;
    }

    public function getScriptValue49(): ?string
    {
        return $this->scriptValue49;
    }

    public function setScriptValue49(?string $scriptValue49): self
    {
        $this->scriptValue49 = $scriptValue49;

        return $this;
    }

    public function getScriptValue50(): ?string
    {
        return $this->scriptValue50;
    }

    public function setScriptValue50(?string $scriptValue50): self
    {
        $this->scriptValue50 = $scriptValue50;

        return $this;
    }

    public function getScriptValue51(): ?string
    {
        return $this->scriptValue51;
    }

    public function setScriptValue51(?string $scriptValue51): self
    {
        $this->scriptValue51 = $scriptValue51;

        return $this;
    }

    public function getScriptValue52(): ?string
    {
        return $this->scriptValue52;
    }

    public function setScriptValue52(?string $scriptValue52): self
    {
        $this->scriptValue52 = $scriptValue52;

        return $this;
    }

    public function getScriptValue53(): ?string
    {
        return $this->scriptValue53;
    }

    public function setScriptValue53(?string $scriptValue53): self
    {
        $this->scriptValue53 = $scriptValue53;

        return $this;
    }

    public function getScriptValue54(): ?string
    {
        return $this->scriptValue54;
    }

    public function setScriptValue54(?string $scriptValue54): self
    {
        $this->scriptValue54 = $scriptValue54;

        return $this;
    }

    public function getScriptValue55(): ?string
    {
        return $this->scriptValue55;
    }

    public function setScriptValue55(?string $scriptValue55): self
    {
        $this->scriptValue55 = $scriptValue55;

        return $this;
    }

    public function getScriptValue56(): ?string
    {
        return $this->scriptValue56;
    }

    public function setScriptValue56(?string $scriptValue56): self
    {
        $this->scriptValue56 = $scriptValue56;

        return $this;
    }

    public function getScriptValue57(): ?string
    {
        return $this->scriptValue57;
    }

    public function setScriptValue57(?string $scriptValue57): self
    {
        $this->scriptValue57 = $scriptValue57;

        return $this;
    }

    public function getScriptValue58(): ?string
    {
        return $this->scriptValue58;
    }

    public function setScriptValue58(?string $scriptValue58): self
    {
        $this->scriptValue58 = $scriptValue58;

        return $this;
    }

    public function getScriptValue59(): ?string
    {
        return $this->scriptValue59;
    }

    public function setScriptValue59(?string $scriptValue59): self
    {
        $this->scriptValue59 = $scriptValue59;

        return $this;
    }

    public function getScriptValue60(): ?string
    {
        return $this->scriptValue60;
    }

    public function setScriptValue60(?string $scriptValue60): self
    {
        $this->scriptValue60 = $scriptValue60;

        return $this;
    }

    public function getScriptValue61(): ?string
    {
        return $this->scriptValue61;
    }

    public function setScriptValue61(?string $scriptValue61): self
    {
        $this->scriptValue61 = $scriptValue61;

        return $this;
    }

    public function getScriptValue62(): ?string
    {
        return $this->scriptValue62;
    }

    public function setScriptValue62(?string $scriptValue62): self
    {
        $this->scriptValue62 = $scriptValue62;

        return $this;
    }

    public function getScriptValue63(): ?string
    {
        return $this->scriptValue63;
    }

    public function setScriptValue63(?string $scriptValue63): self
    {
        $this->scriptValue63 = $scriptValue63;

        return $this;
    }

    public function getScriptValue64(): ?string
    {
        return $this->scriptValue64;
    }

    public function setScriptValue64(?string $scriptValue64): self
    {
        $this->scriptValue64 = $scriptValue64;

        return $this;
    }

    public function getScriptValue65(): ?string
    {
        return $this->scriptValue65;
    }

    public function setScriptValue65(?string $scriptValue65): self
    {
        $this->scriptValue65 = $scriptValue65;

        return $this;
    }

    public function getScriptValue66(): ?string
    {
        return $this->scriptValue66;
    }

    public function setScriptValue66(?string $scriptValue66): self
    {
        $this->scriptValue66 = $scriptValue66;

        return $this;
    }

    public function getScriptValue67(): ?string
    {
        return $this->scriptValue67;
    }

    public function setScriptValue67(?string $scriptValue67): self
    {
        $this->scriptValue67 = $scriptValue67;

        return $this;
    }

    public function getScriptValue68(): ?string
    {
        return $this->scriptValue68;
    }

    public function setScriptValue68(?string $scriptValue68): self
    {
        $this->scriptValue68 = $scriptValue68;

        return $this;
    }

    public function getScriptValue69(): ?string
    {
        return $this->scriptValue69;
    }

    public function setScriptValue69(?string $scriptValue69): self
    {
        $this->scriptValue69 = $scriptValue69;

        return $this;
    }

    public function getScriptValue70(): ?string
    {
        return $this->scriptValue70;
    }

    public function setScriptValue70(?string $scriptValue70): self
    {
        $this->scriptValue70 = $scriptValue70;

        return $this;
    }

    public function getScriptValue71(): ?string
    {
        return $this->scriptValue71;
    }

    public function setScriptValue71(?string $scriptValue71): self
    {
        $this->scriptValue71 = $scriptValue71;

        return $this;
    }

    public function getScriptValue72(): ?string
    {
        return $this->scriptValue72;
    }

    public function setScriptValue72(?string $scriptValue72): self
    {
        $this->scriptValue72 = $scriptValue72;

        return $this;
    }

    public function getScriptValue73(): ?string
    {
        return $this->scriptValue73;
    }

    public function setScriptValue73(?string $scriptValue73): self
    {
        $this->scriptValue73 = $scriptValue73;

        return $this;
    }

    public function getScriptValue74(): ?string
    {
        return $this->scriptValue74;
    }

    public function setScriptValue74(?string $scriptValue74): self
    {
        $this->scriptValue74 = $scriptValue74;

        return $this;
    }

    public function getScriptValue75(): ?string
    {
        return $this->scriptValue75;
    }

    public function setScriptValue75(?string $scriptValue75): self
    {
        $this->scriptValue75 = $scriptValue75;

        return $this;
    }

    public function getScriptValue76(): ?string
    {
        return $this->scriptValue76;
    }

    public function setScriptValue76(?string $scriptValue76): self
    {
        $this->scriptValue76 = $scriptValue76;

        return $this;
    }

    public function getScriptValue77(): ?string
    {
        return $this->scriptValue77;
    }

    public function setScriptValue77(?string $scriptValue77): self
    {
        $this->scriptValue77 = $scriptValue77;

        return $this;
    }

    public function getScriptValue78(): ?string
    {
        return $this->scriptValue78;
    }

    public function setScriptValue78(?string $scriptValue78): self
    {
        $this->scriptValue78 = $scriptValue78;

        return $this;
    }

    public function getScriptValue79(): ?string
    {
        return $this->scriptValue79;
    }

    public function setScriptValue79(?string $scriptValue79): self
    {
        $this->scriptValue79 = $scriptValue79;

        return $this;
    }

    public function getScriptValue80(): ?string
    {
        return $this->scriptValue80;
    }

    public function setScriptValue80(?string $scriptValue80): self
    {
        $this->scriptValue80 = $scriptValue80;

        return $this;
    }

    public function getScriptValue81(): ?string
    {
        return $this->scriptValue81;
    }

    public function setScriptValue81(?string $scriptValue81): self
    {
        $this->scriptValue81 = $scriptValue81;

        return $this;
    }

    public function getScriptValue82(): ?string
    {
        return $this->scriptValue82;
    }

    public function setScriptValue82(?string $scriptValue82): self
    {
        $this->scriptValue82 = $scriptValue82;

        return $this;
    }

    public function getScriptValue83(): ?string
    {
        return $this->scriptValue83;
    }

    public function setScriptValue83(?string $scriptValue83): self
    {
        $this->scriptValue83 = $scriptValue83;

        return $this;
    }

    public function getScriptValue84(): ?string
    {
        return $this->scriptValue84;
    }

    public function setScriptValue84(?string $scriptValue84): self
    {
        $this->scriptValue84 = $scriptValue84;

        return $this;
    }

    public function getScriptValue85(): ?string
    {
        return $this->scriptValue85;
    }

    public function setScriptValue85(?string $scriptValue85): self
    {
        $this->scriptValue85 = $scriptValue85;

        return $this;
    }

    public function getScriptValue86(): ?string
    {
        return $this->scriptValue86;
    }

    public function setScriptValue86(?string $scriptValue86): self
    {
        $this->scriptValue86 = $scriptValue86;

        return $this;
    }

    public function getScriptValue87(): ?string
    {
        return $this->scriptValue87;
    }

    public function setScriptValue87(?string $scriptValue87): self
    {
        $this->scriptValue87 = $scriptValue87;

        return $this;
    }

    public function getScriptValue88(): ?string
    {
        return $this->scriptValue88;
    }

    public function setScriptValue88(?string $scriptValue88): self
    {
        $this->scriptValue88 = $scriptValue88;

        return $this;
    }

    public function getScriptValue89(): ?string
    {
        return $this->scriptValue89;
    }

    public function setScriptValue89(?string $scriptValue89): self
    {
        $this->scriptValue89 = $scriptValue89;

        return $this;
    }

    public function getScriptValue90(): ?string
    {
        return $this->scriptValue90;
    }

    public function setScriptValue90(?string $scriptValue90): self
    {
        $this->scriptValue90 = $scriptValue90;

        return $this;
    }

    public function getScriptValue91(): ?string
    {
        return $this->scriptValue91;
    }

    public function setScriptValue91(?string $scriptValue91): self
    {
        $this->scriptValue91 = $scriptValue91;

        return $this;
    }

    public function getScriptValue92(): ?string
    {
        return $this->scriptValue92;
    }

    public function setScriptValue92(?string $scriptValue92): self
    {
        $this->scriptValue92 = $scriptValue92;

        return $this;
    }

    public function getScriptValue93(): ?string
    {
        return $this->scriptValue93;
    }

    public function setScriptValue93(?string $scriptValue93): self
    {
        $this->scriptValue93 = $scriptValue93;

        return $this;
    }

    public function getScriptValue94(): ?string
    {
        return $this->scriptValue94;
    }

    public function setScriptValue94(?string $scriptValue94): self
    {
        $this->scriptValue94 = $scriptValue94;

        return $this;
    }

    public function getScriptValue95(): ?string
    {
        return $this->scriptValue95;
    }

    public function setScriptValue95(?string $scriptValue95): self
    {
        $this->scriptValue95 = $scriptValue95;

        return $this;
    }

    public function getScriptValue96(): ?string
    {
        return $this->scriptValue96;
    }

    public function setScriptValue96(?string $scriptValue96): self
    {
        $this->scriptValue96 = $scriptValue96;

        return $this;
    }

    public function getScriptValue97(): ?string
    {
        return $this->scriptValue97;
    }

    public function setScriptValue97(?string $scriptValue97): self
    {
        $this->scriptValue97 = $scriptValue97;

        return $this;
    }

    public function getScriptValue98(): ?string
    {
        return $this->scriptValue98;
    }

    public function setScriptValue98(?string $scriptValue98): self
    {
        $this->scriptValue98 = $scriptValue98;

        return $this;
    }

    public function getScriptValue99(): ?string
    {
        return $this->scriptValue99;
    }

    public function setScriptValue99(?string $scriptValue99): self
    {
        $this->scriptValue99 = $scriptValue99;

        return $this;
    }

    public function getScriptValue100(): ?string
    {
        return $this->scriptValue100;
    }

    public function setScriptValue100(?string $scriptValue100): self
    {
        $this->scriptValue100 = $scriptValue100;

        return $this;
    }

    public function getScriptValue101(): ?string
    {
        return $this->scriptValue101;
    }

    public function setScriptValue101(?string $scriptValue101): self
    {
        $this->scriptValue101 = $scriptValue101;

        return $this;
    }

    public function getScriptValue102(): ?string
    {
        return $this->scriptValue102;
    }

    public function setScriptValue102(?string $scriptValue102): self
    {
        $this->scriptValue102 = $scriptValue102;

        return $this;
    }

    public function getScriptValue103(): ?string
    {
        return $this->scriptValue103;
    }

    public function setScriptValue103(?string $scriptValue103): self
    {
        $this->scriptValue103 = $scriptValue103;

        return $this;
    }

    public function getScriptValue104(): ?string
    {
        return $this->scriptValue104;
    }

    public function setScriptValue104(?string $scriptValue104): self
    {
        $this->scriptValue104 = $scriptValue104;

        return $this;
    }

    public function getScriptValue105(): ?string
    {
        return $this->scriptValue105;
    }

    public function setScriptValue105(?string $scriptValue105): self
    {
        $this->scriptValue105 = $scriptValue105;

        return $this;
    }

    public function getScriptValue106(): ?string
    {
        return $this->scriptValue106;
    }

    public function setScriptValue106(?string $scriptValue106): self
    {
        $this->scriptValue106 = $scriptValue106;

        return $this;
    }

    public function getScriptValue107(): ?string
    {
        return $this->scriptValue107;
    }

    public function setScriptValue107(?string $scriptValue107): self
    {
        $this->scriptValue107 = $scriptValue107;

        return $this;
    }

    public function getScriptValue108(): ?string
    {
        return $this->scriptValue108;
    }

    public function setScriptValue108(?string $scriptValue108): self
    {
        $this->scriptValue108 = $scriptValue108;

        return $this;
    }

    public function getScriptValue109(): ?string
    {
        return $this->scriptValue109;
    }

    public function setScriptValue109(?string $scriptValue109): self
    {
        $this->scriptValue109 = $scriptValue109;

        return $this;
    }

    public function getScriptValue110(): ?string
    {
        return $this->scriptValue110;
    }

    public function setScriptValue110(?string $scriptValue110): self
    {
        $this->scriptValue110 = $scriptValue110;

        return $this;
    }

    public function getScriptValue111(): ?string
    {
        return $this->scriptValue111;
    }

    public function setScriptValue111(?string $scriptValue111): self
    {
        $this->scriptValue111 = $scriptValue111;

        return $this;
    }

    public function getScriptValue112(): ?string
    {
        return $this->scriptValue112;
    }

    public function setScriptValue112(?string $scriptValue112): self
    {
        $this->scriptValue112 = $scriptValue112;

        return $this;
    }

    public function getScriptValue113(): ?string
    {
        return $this->scriptValue113;
    }

    public function setScriptValue113(?string $scriptValue113): self
    {
        $this->scriptValue113 = $scriptValue113;

        return $this;
    }

    public function getScriptValue114(): ?string
    {
        return $this->scriptValue114;
    }

    public function setScriptValue114(?string $scriptValue114): self
    {
        $this->scriptValue114 = $scriptValue114;

        return $this;
    }

    public function getScriptValue115(): ?string
    {
        return $this->scriptValue115;
    }

    public function setScriptValue115(?string $scriptValue115): self
    {
        $this->scriptValue115 = $scriptValue115;

        return $this;
    }

    public function getScriptValue116(): ?string
    {
        return $this->scriptValue116;
    }

    public function setScriptValue116(?string $scriptValue116): self
    {
        $this->scriptValue116 = $scriptValue116;

        return $this;
    }

    public function getScriptValue117(): ?string
    {
        return $this->scriptValue117;
    }

    public function setScriptValue117(?string $scriptValue117): self
    {
        $this->scriptValue117 = $scriptValue117;

        return $this;
    }

    public function getScriptValue118(): ?string
    {
        return $this->scriptValue118;
    }

    public function setScriptValue118(?string $scriptValue118): self
    {
        $this->scriptValue118 = $scriptValue118;

        return $this;
    }

    public function getScriptValue119(): ?string
    {
        return $this->scriptValue119;
    }

    public function setScriptValue119(?string $scriptValue119): self
    {
        $this->scriptValue119 = $scriptValue119;

        return $this;
    }

    public function getScriptValue120(): ?string
    {
        return $this->scriptValue120;
    }

    public function setScriptValue120(?string $scriptValue120): self
    {
        $this->scriptValue120 = $scriptValue120;

        return $this;
    }

    public function getScriptValue121(): ?string
    {
        return $this->scriptValue121;
    }

    public function setScriptValue121(?string $scriptValue121): self
    {
        $this->scriptValue121 = $scriptValue121;

        return $this;
    }

    public function getScriptValue122(): ?string
    {
        return $this->scriptValue122;
    }

    public function setScriptValue122(?string $scriptValue122): self
    {
        $this->scriptValue122 = $scriptValue122;

        return $this;
    }

    public function getScriptValue123(): ?string
    {
        return $this->scriptValue123;
    }

    public function setScriptValue123(?string $scriptValue123): self
    {
        $this->scriptValue123 = $scriptValue123;

        return $this;
    }

    public function getScriptValue124(): ?string
    {
        return $this->scriptValue124;
    }

    public function setScriptValue124(?string $scriptValue124): self
    {
        $this->scriptValue124 = $scriptValue124;

        return $this;
    }

    public function getScriptValue125(): ?string
    {
        return $this->scriptValue125;
    }

    public function setScriptValue125(?string $scriptValue125): self
    {
        $this->scriptValue125 = $scriptValue125;

        return $this;
    }

    public function getScriptValue126(): ?string
    {
        return $this->scriptValue126;
    }

    public function setScriptValue126(?string $scriptValue126): self
    {
        $this->scriptValue126 = $scriptValue126;

        return $this;
    }

    public function getScriptValue127(): ?string
    {
        return $this->scriptValue127;
    }

    public function setScriptValue127(?string $scriptValue127): self
    {
        $this->scriptValue127 = $scriptValue127;

        return $this;
    }

    public function getScriptValue128(): ?string
    {
        return $this->scriptValue128;
    }

    public function setScriptValue128(?string $scriptValue128): self
    {
        $this->scriptValue128 = $scriptValue128;

        return $this;
    }

    public function getScriptValue129(): ?string
    {
        return $this->scriptValue129;
    }

    public function setScriptValue129(?string $scriptValue129): self
    {
        $this->scriptValue129 = $scriptValue129;

        return $this;
    }

    public function getScriptValue130(): ?string
    {
        return $this->scriptValue130;
    }

    public function setScriptValue130(?string $scriptValue130): self
    {
        $this->scriptValue130 = $scriptValue130;

        return $this;
    }

    public function getScriptValue131(): ?string
    {
        return $this->scriptValue131;
    }

    public function setScriptValue131(?string $scriptValue131): self
    {
        $this->scriptValue131 = $scriptValue131;

        return $this;
    }

    public function getScriptValue132(): ?string
    {
        return $this->scriptValue132;
    }

    public function setScriptValue132(?string $scriptValue132): self
    {
        $this->scriptValue132 = $scriptValue132;

        return $this;
    }

    public function getScriptValue133(): ?string
    {
        return $this->scriptValue133;
    }

    public function setScriptValue133(?string $scriptValue133): self
    {
        $this->scriptValue133 = $scriptValue133;

        return $this;
    }

    public function getScriptValue134(): ?string
    {
        return $this->scriptValue134;
    }

    public function setScriptValue134(?string $scriptValue134): self
    {
        $this->scriptValue134 = $scriptValue134;

        return $this;
    }

    public function getScriptValue135(): ?string
    {
        return $this->scriptValue135;
    }

    public function setScriptValue135(?string $scriptValue135): self
    {
        $this->scriptValue135 = $scriptValue135;

        return $this;
    }

    public function getScriptValue136(): ?string
    {
        return $this->scriptValue136;
    }

    public function setScriptValue136(?string $scriptValue136): self
    {
        $this->scriptValue136 = $scriptValue136;

        return $this;
    }

    public function getScriptValue137(): ?string
    {
        return $this->scriptValue137;
    }

    public function setScriptValue137(?string $scriptValue137): self
    {
        $this->scriptValue137 = $scriptValue137;

        return $this;
    }

    public function getScriptValue138(): ?string
    {
        return $this->scriptValue138;
    }

    public function setScriptValue138(?string $scriptValue138): self
    {
        $this->scriptValue138 = $scriptValue138;

        return $this;
    }

    public function getScriptValue139(): ?string
    {
        return $this->scriptValue139;
    }

    public function setScriptValue139(?string $scriptValue139): self
    {
        $this->scriptValue139 = $scriptValue139;

        return $this;
    }

    public function getScriptValue140(): ?string
    {
        return $this->scriptValue140;
    }

    public function setScriptValue140(?string $scriptValue140): self
    {
        $this->scriptValue140 = $scriptValue140;

        return $this;
    }

    public function getScriptValue141(): ?string
    {
        return $this->scriptValue141;
    }

    public function setScriptValue141(?string $scriptValue141): self
    {
        $this->scriptValue141 = $scriptValue141;

        return $this;
    }

    public function getScriptValue142(): ?string
    {
        return $this->scriptValue142;
    }

    public function setScriptValue142(?string $scriptValue142): self
    {
        $this->scriptValue142 = $scriptValue142;

        return $this;
    }

    public function getScriptValue143(): ?string
    {
        return $this->scriptValue143;
    }

    public function setScriptValue143(?string $scriptValue143): self
    {
        $this->scriptValue143 = $scriptValue143;

        return $this;
    }

    public function getScriptValue144(): ?string
    {
        return $this->scriptValue144;
    }

    public function setScriptValue144(?string $scriptValue144): self
    {
        $this->scriptValue144 = $scriptValue144;

        return $this;
    }

    public function getScriptValue145(): ?string
    {
        return $this->scriptValue145;
    }

    public function setScriptValue145(?string $scriptValue145): self
    {
        $this->scriptValue145 = $scriptValue145;

        return $this;
    }

    public function getScriptValue146(): ?string
    {
        return $this->scriptValue146;
    }

    public function setScriptValue146(?string $scriptValue146): self
    {
        $this->scriptValue146 = $scriptValue146;

        return $this;
    }

    public function getScriptValue147(): ?string
    {
        return $this->scriptValue147;
    }

    public function setScriptValue147(?string $scriptValue147): self
    {
        $this->scriptValue147 = $scriptValue147;

        return $this;
    }

    public function getScriptValue148(): ?string
    {
        return $this->scriptValue148;
    }

    public function setScriptValue148(?string $scriptValue148): self
    {
        $this->scriptValue148 = $scriptValue148;

        return $this;
    }

    public function getScriptValue149(): ?string
    {
        return $this->scriptValue149;
    }

    public function setScriptValue149(?string $scriptValue149): self
    {
        $this->scriptValue149 = $scriptValue149;

        return $this;
    }

    public function getScriptValue150(): ?string
    {
        return $this->scriptValue150;
    }

    public function setScriptValue150(?string $scriptValue150): self
    {
        $this->scriptValue150 = $scriptValue150;

        return $this;
    }

    public function getScriptValue151(): ?string
    {
        return $this->scriptValue151;
    }

    public function setScriptValue151(?string $scriptValue151): self
    {
        $this->scriptValue151 = $scriptValue151;

        return $this;
    }

    public function getScriptValue152(): ?string
    {
        return $this->scriptValue152;
    }

    public function setScriptValue152(?string $scriptValue152): self
    {
        $this->scriptValue152 = $scriptValue152;

        return $this;
    }

    public function getScriptValue153(): ?string
    {
        return $this->scriptValue153;
    }

    public function setScriptValue153(?string $scriptValue153): self
    {
        $this->scriptValue153 = $scriptValue153;

        return $this;
    }

    public function getScriptValue154(): ?string
    {
        return $this->scriptValue154;
    }

    public function setScriptValue154(?string $scriptValue154): self
    {
        $this->scriptValue154 = $scriptValue154;

        return $this;
    }

    public function getScriptValue155(): ?string
    {
        return $this->scriptValue155;
    }

    public function setScriptValue155(?string $scriptValue155): self
    {
        $this->scriptValue155 = $scriptValue155;

        return $this;
    }

    public function getScriptValue156(): ?string
    {
        return $this->scriptValue156;
    }

    public function setScriptValue156(?string $scriptValue156): self
    {
        $this->scriptValue156 = $scriptValue156;

        return $this;
    }

    public function getScriptValue157(): ?string
    {
        return $this->scriptValue157;
    }

    public function setScriptValue157(?string $scriptValue157): self
    {
        $this->scriptValue157 = $scriptValue157;

        return $this;
    }

    public function getScriptValue158(): ?string
    {
        return $this->scriptValue158;
    }

    public function setScriptValue158(?string $scriptValue158): self
    {
        $this->scriptValue158 = $scriptValue158;

        return $this;
    }

    public function getScriptValue159(): ?string
    {
        return $this->scriptValue159;
    }

    public function setScriptValue159(?string $scriptValue159): self
    {
        $this->scriptValue159 = $scriptValue159;

        return $this;
    }

    public function getScriptValue160(): ?string
    {
        return $this->scriptValue160;
    }

    public function setScriptValue160(?string $scriptValue160): self
    {
        $this->scriptValue160 = $scriptValue160;

        return $this;
    }

    public function getScriptValue161(): ?string
    {
        return $this->scriptValue161;
    }

    public function setScriptValue161(?string $scriptValue161): self
    {
        $this->scriptValue161 = $scriptValue161;

        return $this;
    }

    public function getScriptValue162(): ?string
    {
        return $this->scriptValue162;
    }

    public function setScriptValue162(?string $scriptValue162): self
    {
        $this->scriptValue162 = $scriptValue162;

        return $this;
    }

    public function getScriptValue163(): ?string
    {
        return $this->scriptValue163;
    }

    public function setScriptValue163(?string $scriptValue163): self
    {
        $this->scriptValue163 = $scriptValue163;

        return $this;
    }

    public function getScriptValue164(): ?string
    {
        return $this->scriptValue164;
    }

    public function setScriptValue164(?string $scriptValue164): self
    {
        $this->scriptValue164 = $scriptValue164;

        return $this;
    }

    public function getScriptValue165(): ?string
    {
        return $this->scriptValue165;
    }

    public function setScriptValue165(?string $scriptValue165): self
    {
        $this->scriptValue165 = $scriptValue165;

        return $this;
    }

    public function getScriptValue166(): ?string
    {
        return $this->scriptValue166;
    }

    public function setScriptValue166(?string $scriptValue166): self
    {
        $this->scriptValue166 = $scriptValue166;

        return $this;
    }

    public function getScriptValue167(): ?string
    {
        return $this->scriptValue167;
    }

    public function setScriptValue167(?string $scriptValue167): self
    {
        $this->scriptValue167 = $scriptValue167;

        return $this;
    }

    public function getScriptValue168(): ?string
    {
        return $this->scriptValue168;
    }

    public function setScriptValue168(?string $scriptValue168): self
    {
        $this->scriptValue168 = $scriptValue168;

        return $this;
    }

    public function getScriptValue169(): ?string
    {
        return $this->scriptValue169;
    }

    public function setScriptValue169(?string $scriptValue169): self
    {
        $this->scriptValue169 = $scriptValue169;

        return $this;
    }

    public function getScriptValue170(): ?string
    {
        return $this->scriptValue170;
    }

    public function setScriptValue170(?string $scriptValue170): self
    {
        $this->scriptValue170 = $scriptValue170;

        return $this;
    }

    public function getScriptValue171(): ?string
    {
        return $this->scriptValue171;
    }

    public function setScriptValue171(?string $scriptValue171): self
    {
        $this->scriptValue171 = $scriptValue171;

        return $this;
    }

    public function getScriptValue172(): ?string
    {
        return $this->scriptValue172;
    }

    public function setScriptValue172(?string $scriptValue172): self
    {
        $this->scriptValue172 = $scriptValue172;

        return $this;
    }

    public function getScriptValue173(): ?string
    {
        return $this->scriptValue173;
    }

    public function setScriptValue173(?string $scriptValue173): self
    {
        $this->scriptValue173 = $scriptValue173;

        return $this;
    }

    public function getScriptValue174(): ?string
    {
        return $this->scriptValue174;
    }

    public function setScriptValue174(?string $scriptValue174): self
    {
        $this->scriptValue174 = $scriptValue174;

        return $this;
    }

    public function getScriptValue175(): ?string
    {
        return $this->scriptValue175;
    }

    public function setScriptValue175(?string $scriptValue175): self
    {
        $this->scriptValue175 = $scriptValue175;

        return $this;
    }

    public function getScriptValue176(): ?string
    {
        return $this->scriptValue176;
    }

    public function setScriptValue176(?string $scriptValue176): self
    {
        $this->scriptValue176 = $scriptValue176;

        return $this;
    }

    public function getScriptValue177(): ?string
    {
        return $this->scriptValue177;
    }

    public function setScriptValue177(?string $scriptValue177): self
    {
        $this->scriptValue177 = $scriptValue177;

        return $this;
    }

    public function getScriptValue178(): ?string
    {
        return $this->scriptValue178;
    }

    public function setScriptValue178(?string $scriptValue178): self
    {
        $this->scriptValue178 = $scriptValue178;

        return $this;
    }

    public function getScriptValue179(): ?string
    {
        return $this->scriptValue179;
    }

    public function setScriptValue179(?string $scriptValue179): self
    {
        $this->scriptValue179 = $scriptValue179;

        return $this;
    }

    public function getScriptValue180(): ?string
    {
        return $this->scriptValue180;
    }

    public function setScriptValue180(?string $scriptValue180): self
    {
        $this->scriptValue180 = $scriptValue180;

        return $this;
    }

    public function getScriptValue181(): ?string
    {
        return $this->scriptValue181;
    }

    public function setScriptValue181(?string $scriptValue181): self
    {
        $this->scriptValue181 = $scriptValue181;

        return $this;
    }

    public function getScriptValue182(): ?string
    {
        return $this->scriptValue182;
    }

    public function setScriptValue182(?string $scriptValue182): self
    {
        $this->scriptValue182 = $scriptValue182;

        return $this;
    }

    public function getScriptValue183(): ?string
    {
        return $this->scriptValue183;
    }

    public function setScriptValue183(?string $scriptValue183): self
    {
        $this->scriptValue183 = $scriptValue183;

        return $this;
    }

    public function getScriptValue184(): ?string
    {
        return $this->scriptValue184;
    }

    public function setScriptValue184(?string $scriptValue184): self
    {
        $this->scriptValue184 = $scriptValue184;

        return $this;
    }

    public function getScriptValue185(): ?string
    {
        return $this->scriptValue185;
    }

    public function setScriptValue185(?string $scriptValue185): self
    {
        $this->scriptValue185 = $scriptValue185;

        return $this;
    }

    public function getScriptValue186(): ?string
    {
        return $this->scriptValue186;
    }

    public function setScriptValue186(?string $scriptValue186): self
    {
        $this->scriptValue186 = $scriptValue186;

        return $this;
    }

    public function getScriptValue187(): ?string
    {
        return $this->scriptValue187;
    }

    public function setScriptValue187(?string $scriptValue187): self
    {
        $this->scriptValue187 = $scriptValue187;

        return $this;
    }

    public function getScriptValue188(): ?string
    {
        return $this->scriptValue188;
    }

    public function setScriptValue188(?string $scriptValue188): self
    {
        $this->scriptValue188 = $scriptValue188;

        return $this;
    }

    public function getScriptValue189(): ?string
    {
        return $this->scriptValue189;
    }

    public function setScriptValue189(?string $scriptValue189): self
    {
        $this->scriptValue189 = $scriptValue189;

        return $this;
    }

    public function getScriptValue190(): ?string
    {
        return $this->scriptValue190;
    }

    public function setScriptValue190(?string $scriptValue190): self
    {
        $this->scriptValue190 = $scriptValue190;

        return $this;
    }

    public function getScriptValue191(): ?string
    {
        return $this->scriptValue191;
    }

    public function setScriptValue191(?string $scriptValue191): self
    {
        $this->scriptValue191 = $scriptValue191;

        return $this;
    }

    public function getScriptValue192(): ?string
    {
        return $this->scriptValue192;
    }

    public function setScriptValue192(?string $scriptValue192): self
    {
        $this->scriptValue192 = $scriptValue192;

        return $this;
    }

    public function getScriptValue193(): ?string
    {
        return $this->scriptValue193;
    }

    public function setScriptValue193(?string $scriptValue193): self
    {
        $this->scriptValue193 = $scriptValue193;

        return $this;
    }

    public function getScriptValue194(): ?string
    {
        return $this->scriptValue194;
    }

    public function setScriptValue194(?string $scriptValue194): self
    {
        $this->scriptValue194 = $scriptValue194;

        return $this;
    }

    public function getScriptValue195(): ?string
    {
        return $this->scriptValue195;
    }

    public function setScriptValue195(?string $scriptValue195): self
    {
        $this->scriptValue195 = $scriptValue195;

        return $this;
    }

    public function getScriptValue196(): ?string
    {
        return $this->scriptValue196;
    }

    public function setScriptValue196(?string $scriptValue196): self
    {
        $this->scriptValue196 = $scriptValue196;

        return $this;
    }

    public function getScriptValue197(): ?string
    {
        return $this->scriptValue197;
    }

    public function setScriptValue197(?string $scriptValue197): self
    {
        $this->scriptValue197 = $scriptValue197;

        return $this;
    }

    public function getScriptValue198(): ?string
    {
        return $this->scriptValue198;
    }

    public function setScriptValue198(?string $scriptValue198): self
    {
        $this->scriptValue198 = $scriptValue198;

        return $this;
    }

    public function getScriptValue199(): ?string
    {
        return $this->scriptValue199;
    }

    public function setScriptValue199(?string $scriptValue199): self
    {
        $this->scriptValue199 = $scriptValue199;

        return $this;
    }
}
