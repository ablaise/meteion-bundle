<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcArmyMemberGrow.
 *
 * @ORM\Table(name="gc_army_member_grow", indexes={@ORM\Index(name="idx_60f39be167a529c2", columns={"equip_preset_58"}), @ORM\Index(name="idx_60f39be1e96deb26", columns={"equip_preset_2"}), @ORM\Index(name="idx_60f39be17a155462", columns={"equip_preset_11"}), @ORM\Index(name="idx_60f39be1e4e13", columns={"equip_preset_4"}), @ORM\Index(name="idx_60f39be199063584", columns={"equip_preset_46"}), @ORM\Index(name="idx_60f39be1a7fa0ed", columns={"equip_preset_14"}), @ORM\Index(name="idx_60f39be1ee010512", columns={"equip_preset_47"}), @ORM\Index(name="idx_60f39be110a21954", columns={"equip_preset_59"}), @ORM\Index(name="idx_60f39be12152f32e", columns={"equip_preset_24"}), @ORM\Index(name="idx_60f39be1f077f04a", columns={"equip_preset_53"}), @ORM\Index(name="idx_60f39be1d1264f4", columns={"equip_preset_10"}), @ORM\Index(name="idx_60f39be1ee002f3f", columns={"equip_preset_6"}), @ORM\Index(name="idx_60f39be1f643e", columns={"equip_preset_45"}), @ORM\Index(name="idx_60f39be128e4bf05", columns={"equip_preset_28"}), @ORM\Index(name="idx_60f39be13c9ecc6", columns={"equip_preset_18"}), @ORM\Index(name="idx_60f39be17f98947e", columns={"class_book"}), @ORM\Index(name="idx_60f39be174cedc50", columns={"equip_preset_19"}), @ORM\Index(name="idx_60f39be19b92815", columns={"equip_preset_49"}), @ORM\Index(name="idx_60f39be199071fa9", columns={"equip_preset_7"}), @ORM\Index(name="idx_60f39be15655c3b8", columns={"equip_preset_25"}), @ORM\Index(name="idx_60f39be1a62d57cc", columns={"equip_preset_33"}), @ORM\Index(name="idx_60f39be1697ea1f0", columns={"equip_preset_50"}), @ORM\Index(name="idx_60f39be131ff8e44", columns={"equip_preset_38"}), @ORM\Index(name="idx_60f39be14f4ef2f9", columns={"equip_preset_35"}), @ORM\Index(name="idx_60f39be19e6bf19d", columns={"equip_preset_42"}), @ORM\Index(name="idx_60f39be17064ba9c", columns={"equip_preset_1"}), @ORM\Index(name="idx_60f39be19b80238", columns={"equip_preset_8"}), @ORM\Index(name="idx_60f39be15fe38f93", columns={"equip_preset_29"}), @ORM\Index(name="idx_60f39be13f240676", columns={"equip_preset_30"}), @ORM\Index(name="idx_60f39be18770c0dc", columns={"equip_preset_52"}), @ORM\Index(name="idx_60f39be1e471c1c1", columns={"equip_preset_16"}), @ORM\Index(name="idx_60f39be1513807a1", columns={"equip_preset_21"}), @ORM\Index(name="idx_60f39be1d647a343", columns={"equip_preset_36"}), @ORM\Index(name="idx_60f39be16e1365e9", columns={"equip_preset_54"}), @ORM\Index(name="idx_60f39be177097e85", columns={"equip_preset_5"}), @ORM\Index(name="idx_60f39be17d78907b", columns={"equip_preset_15"}), @ORM\Index(name="idx_60f39be17638a0a", columns={"equip_preset_0"}), @ORM\Index(name="idx_60f39be1263f3737", columns={"equip_preset_20"}), @ORM\Index(name="idx_60f39be146f8bed2", columns={"equip_preset_39"}), @ORM\Index(name="idx_60f39be1770854a8", columns={"equip_preset_44"}), @ORM\Index(name="idx_60f39be1706590b1", columns={"equip_preset_40"}), @ORM\Index(name="idx_60f39be1bf36668d", columns={"equip_preset_23"}), @ORM\Index(name="idx_60f39be19e6adbb0", columns={"equip_preset_3"}), @ORM\Index(name="idx_60f39be11914557f", columns={"equip_preset_55"}), @ORM\Index(name="idx_60f39be1e31c05d8", columns={"equip_preset_12"}), @ORM\Index(name="idx_60f39be1cf5c9202", columns={"equip_preset_26"}), @ORM\Index(name="idx_60f39be1e96cc10b", columns={"equip_preset_43"}), @ORM\Index(name="idx_60f39be1b85ba294", columns={"equip_preset_27"}), @ORM\Index(name="idx_60f39be17ebf32ae", columns={"equip_preset_9"}), @ORM\Index(name="idx_60f39be1c831561b", columns={"equip_preset_22"}), @ORM\Index(name="idx_60f39be1f71a3453", columns={"equip_preset_57"}), @ORM\Index(name="idx_60f39be1a14093d5", columns={"equip_preset_37"}), @ORM\Index(name="idx_60f39be17ebe1883", columns={"equip_preset_48"}), @ORM\Index(name="idx_60f39be1762a027", columns={"equip_preset_41"}), @ORM\Index(name="idx_60f39be19376f157", columns={"equip_preset_17"}), @ORM\Index(name="idx_60f39be18d519804", columns={"class_job"}), @ORM\Index(name="idx_60f39be1941b354e", columns={"equip_preset_13"}), @ORM\Index(name="idx_60f39be13849c26f", columns={"equip_preset_34"}), @ORM\Index(name="idx_60f39be11e799166", columns={"equip_preset_51"}), @ORM\Index(name="idx_60f39be1482336e0", columns={"equip_preset_31"}), @ORM\Index(name="idx_60f39be1801d04c5", columns={"equip_preset_56"}), @ORM\Index(name="idx_60f39be1d12a675a", columns={"equip_preset_32"})})
 * @ORM\Entity
 */
class GcArmyMemberGrow
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="gc_army_member_grow_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_63", type="bigint", nullable=true)
     */
    private $column63;

    /**
     * @var int|null
     *
     * @ORM\Column(name="physical_0", type="integer", nullable=true)
     */
    private $physical0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="physical_1", type="integer", nullable=true)
     */
    private $physical1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="physical_2", type="integer", nullable=true)
     */
    private $physical2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="physical_3", type="integer", nullable=true)
     */
    private $physical3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="physical_4", type="integer", nullable=true)
     */
    private $physical4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="physical_5", type="integer", nullable=true)
     */
    private $physical5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="physical_6", type="integer", nullable=true)
     */
    private $physical6;

    /**
     * @var int|null
     *
     * @ORM\Column(name="physical_7", type="integer", nullable=true)
     */
    private $physical7;

    /**
     * @var int|null
     *
     * @ORM\Column(name="physical_8", type="integer", nullable=true)
     */
    private $physical8;

    /**
     * @var int|null
     *
     * @ORM\Column(name="physical_9", type="integer", nullable=true)
     */
    private $physical9;

    /**
     * @var int|null
     *
     * @ORM\Column(name="physical_10", type="integer", nullable=true)
     */
    private $physical10;

    /**
     * @var int|null
     *
     * @ORM\Column(name="physical_11", type="integer", nullable=true)
     */
    private $physical11;

    /**
     * @var int|null
     *
     * @ORM\Column(name="physical_12", type="integer", nullable=true)
     */
    private $physical12;

    /**
     * @var int|null
     *
     * @ORM\Column(name="physical_13", type="integer", nullable=true)
     */
    private $physical13;

    /**
     * @var int|null
     *
     * @ORM\Column(name="physical_14", type="integer", nullable=true)
     */
    private $physical14;

    /**
     * @var int|null
     *
     * @ORM\Column(name="physical_15", type="integer", nullable=true)
     */
    private $physical15;

    /**
     * @var int|null
     *
     * @ORM\Column(name="physical_16", type="integer", nullable=true)
     */
    private $physical16;

    /**
     * @var int|null
     *
     * @ORM\Column(name="physical_17", type="integer", nullable=true)
     */
    private $physical17;

    /**
     * @var int|null
     *
     * @ORM\Column(name="physical_18", type="integer", nullable=true)
     */
    private $physical18;

    /**
     * @var int|null
     *
     * @ORM\Column(name="physical_19", type="integer", nullable=true)
     */
    private $physical19;

    /**
     * @var int|null
     *
     * @ORM\Column(name="physical_20", type="integer", nullable=true)
     */
    private $physical20;

    /**
     * @var int|null
     *
     * @ORM\Column(name="physical_21", type="integer", nullable=true)
     */
    private $physical21;

    /**
     * @var int|null
     *
     * @ORM\Column(name="physical_22", type="integer", nullable=true)
     */
    private $physical22;

    /**
     * @var int|null
     *
     * @ORM\Column(name="physical_23", type="integer", nullable=true)
     */
    private $physical23;

    /**
     * @var int|null
     *
     * @ORM\Column(name="physical_24", type="integer", nullable=true)
     */
    private $physical24;

    /**
     * @var int|null
     *
     * @ORM\Column(name="physical_25", type="integer", nullable=true)
     */
    private $physical25;

    /**
     * @var int|null
     *
     * @ORM\Column(name="physical_26", type="integer", nullable=true)
     */
    private $physical26;

    /**
     * @var int|null
     *
     * @ORM\Column(name="physical_27", type="integer", nullable=true)
     */
    private $physical27;

    /**
     * @var int|null
     *
     * @ORM\Column(name="physical_28", type="integer", nullable=true)
     */
    private $physical28;

    /**
     * @var int|null
     *
     * @ORM\Column(name="physical_29", type="integer", nullable=true)
     */
    private $physical29;

    /**
     * @var int|null
     *
     * @ORM\Column(name="physical_30", type="integer", nullable=true)
     */
    private $physical30;

    /**
     * @var int|null
     *
     * @ORM\Column(name="physical_31", type="integer", nullable=true)
     */
    private $physical31;

    /**
     * @var int|null
     *
     * @ORM\Column(name="physical_32", type="integer", nullable=true)
     */
    private $physical32;

    /**
     * @var int|null
     *
     * @ORM\Column(name="physical_33", type="integer", nullable=true)
     */
    private $physical33;

    /**
     * @var int|null
     *
     * @ORM\Column(name="physical_34", type="integer", nullable=true)
     */
    private $physical34;

    /**
     * @var int|null
     *
     * @ORM\Column(name="physical_35", type="integer", nullable=true)
     */
    private $physical35;

    /**
     * @var int|null
     *
     * @ORM\Column(name="physical_36", type="integer", nullable=true)
     */
    private $physical36;

    /**
     * @var int|null
     *
     * @ORM\Column(name="physical_37", type="integer", nullable=true)
     */
    private $physical37;

    /**
     * @var int|null
     *
     * @ORM\Column(name="physical_38", type="integer", nullable=true)
     */
    private $physical38;

    /**
     * @var int|null
     *
     * @ORM\Column(name="physical_39", type="integer", nullable=true)
     */
    private $physical39;

    /**
     * @var int|null
     *
     * @ORM\Column(name="physical_40", type="integer", nullable=true)
     */
    private $physical40;

    /**
     * @var int|null
     *
     * @ORM\Column(name="physical_41", type="integer", nullable=true)
     */
    private $physical41;

    /**
     * @var int|null
     *
     * @ORM\Column(name="physical_42", type="integer", nullable=true)
     */
    private $physical42;

    /**
     * @var int|null
     *
     * @ORM\Column(name="physical_43", type="integer", nullable=true)
     */
    private $physical43;

    /**
     * @var int|null
     *
     * @ORM\Column(name="physical_44", type="integer", nullable=true)
     */
    private $physical44;

    /**
     * @var int|null
     *
     * @ORM\Column(name="physical_45", type="integer", nullable=true)
     */
    private $physical45;

    /**
     * @var int|null
     *
     * @ORM\Column(name="physical_46", type="integer", nullable=true)
     */
    private $physical46;

    /**
     * @var int|null
     *
     * @ORM\Column(name="physical_47", type="integer", nullable=true)
     */
    private $physical47;

    /**
     * @var int|null
     *
     * @ORM\Column(name="physical_48", type="integer", nullable=true)
     */
    private $physical48;

    /**
     * @var int|null
     *
     * @ORM\Column(name="physical_49", type="integer", nullable=true)
     */
    private $physical49;

    /**
     * @var int|null
     *
     * @ORM\Column(name="physical_50", type="integer", nullable=true)
     */
    private $physical50;

    /**
     * @var int|null
     *
     * @ORM\Column(name="physical_51", type="integer", nullable=true)
     */
    private $physical51;

    /**
     * @var int|null
     *
     * @ORM\Column(name="physical_52", type="integer", nullable=true)
     */
    private $physical52;

    /**
     * @var int|null
     *
     * @ORM\Column(name="physical_53", type="integer", nullable=true)
     */
    private $physical53;

    /**
     * @var int|null
     *
     * @ORM\Column(name="physical_54", type="integer", nullable=true)
     */
    private $physical54;

    /**
     * @var int|null
     *
     * @ORM\Column(name="physical_55", type="integer", nullable=true)
     */
    private $physical55;

    /**
     * @var int|null
     *
     * @ORM\Column(name="physical_56", type="integer", nullable=true)
     */
    private $physical56;

    /**
     * @var int|null
     *
     * @ORM\Column(name="physical_57", type="integer", nullable=true)
     */
    private $physical57;

    /**
     * @var int|null
     *
     * @ORM\Column(name="physical_58", type="integer", nullable=true)
     */
    private $physical58;

    /**
     * @var int|null
     *
     * @ORM\Column(name="physical_59", type="integer", nullable=true)
     */
    private $physical59;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_124", type="integer", nullable=true)
     */
    private $column124;

    /**
     * @var int|null
     *
     * @ORM\Column(name="mental_0", type="integer", nullable=true)
     */
    private $mental0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="mental_1", type="integer", nullable=true)
     */
    private $mental1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="mental_2", type="integer", nullable=true)
     */
    private $mental2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="mental_3", type="integer", nullable=true)
     */
    private $mental3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="mental_4", type="integer", nullable=true)
     */
    private $mental4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="mental_5", type="integer", nullable=true)
     */
    private $mental5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="mental_6", type="integer", nullable=true)
     */
    private $mental6;

    /**
     * @var int|null
     *
     * @ORM\Column(name="mental_7", type="integer", nullable=true)
     */
    private $mental7;

    /**
     * @var int|null
     *
     * @ORM\Column(name="mental_8", type="integer", nullable=true)
     */
    private $mental8;

    /**
     * @var int|null
     *
     * @ORM\Column(name="mental_9", type="integer", nullable=true)
     */
    private $mental9;

    /**
     * @var int|null
     *
     * @ORM\Column(name="mental_10", type="integer", nullable=true)
     */
    private $mental10;

    /**
     * @var int|null
     *
     * @ORM\Column(name="mental_11", type="integer", nullable=true)
     */
    private $mental11;

    /**
     * @var int|null
     *
     * @ORM\Column(name="mental_12", type="integer", nullable=true)
     */
    private $mental12;

    /**
     * @var int|null
     *
     * @ORM\Column(name="mental_13", type="integer", nullable=true)
     */
    private $mental13;

    /**
     * @var int|null
     *
     * @ORM\Column(name="mental_14", type="integer", nullable=true)
     */
    private $mental14;

    /**
     * @var int|null
     *
     * @ORM\Column(name="mental_15", type="integer", nullable=true)
     */
    private $mental15;

    /**
     * @var int|null
     *
     * @ORM\Column(name="mental_16", type="integer", nullable=true)
     */
    private $mental16;

    /**
     * @var int|null
     *
     * @ORM\Column(name="mental_17", type="integer", nullable=true)
     */
    private $mental17;

    /**
     * @var int|null
     *
     * @ORM\Column(name="mental_18", type="integer", nullable=true)
     */
    private $mental18;

    /**
     * @var int|null
     *
     * @ORM\Column(name="mental_19", type="integer", nullable=true)
     */
    private $mental19;

    /**
     * @var int|null
     *
     * @ORM\Column(name="mental_20", type="integer", nullable=true)
     */
    private $mental20;

    /**
     * @var int|null
     *
     * @ORM\Column(name="mental_21", type="integer", nullable=true)
     */
    private $mental21;

    /**
     * @var int|null
     *
     * @ORM\Column(name="mental_22", type="integer", nullable=true)
     */
    private $mental22;

    /**
     * @var int|null
     *
     * @ORM\Column(name="mental_23", type="integer", nullable=true)
     */
    private $mental23;

    /**
     * @var int|null
     *
     * @ORM\Column(name="mental_24", type="integer", nullable=true)
     */
    private $mental24;

    /**
     * @var int|null
     *
     * @ORM\Column(name="mental_25", type="integer", nullable=true)
     */
    private $mental25;

    /**
     * @var int|null
     *
     * @ORM\Column(name="mental_26", type="integer", nullable=true)
     */
    private $mental26;

    /**
     * @var int|null
     *
     * @ORM\Column(name="mental_27", type="integer", nullable=true)
     */
    private $mental27;

    /**
     * @var int|null
     *
     * @ORM\Column(name="mental_28", type="integer", nullable=true)
     */
    private $mental28;

    /**
     * @var int|null
     *
     * @ORM\Column(name="mental_29", type="integer", nullable=true)
     */
    private $mental29;

    /**
     * @var int|null
     *
     * @ORM\Column(name="mental_30", type="integer", nullable=true)
     */
    private $mental30;

    /**
     * @var int|null
     *
     * @ORM\Column(name="mental_31", type="integer", nullable=true)
     */
    private $mental31;

    /**
     * @var int|null
     *
     * @ORM\Column(name="mental_32", type="integer", nullable=true)
     */
    private $mental32;

    /**
     * @var int|null
     *
     * @ORM\Column(name="mental_33", type="integer", nullable=true)
     */
    private $mental33;

    /**
     * @var int|null
     *
     * @ORM\Column(name="mental_34", type="integer", nullable=true)
     */
    private $mental34;

    /**
     * @var int|null
     *
     * @ORM\Column(name="mental_35", type="integer", nullable=true)
     */
    private $mental35;

    /**
     * @var int|null
     *
     * @ORM\Column(name="mental_36", type="integer", nullable=true)
     */
    private $mental36;

    /**
     * @var int|null
     *
     * @ORM\Column(name="mental_37", type="integer", nullable=true)
     */
    private $mental37;

    /**
     * @var int|null
     *
     * @ORM\Column(name="mental_38", type="integer", nullable=true)
     */
    private $mental38;

    /**
     * @var int|null
     *
     * @ORM\Column(name="mental_39", type="integer", nullable=true)
     */
    private $mental39;

    /**
     * @var int|null
     *
     * @ORM\Column(name="mental_40", type="integer", nullable=true)
     */
    private $mental40;

    /**
     * @var int|null
     *
     * @ORM\Column(name="mental_41", type="integer", nullable=true)
     */
    private $mental41;

    /**
     * @var int|null
     *
     * @ORM\Column(name="mental_42", type="integer", nullable=true)
     */
    private $mental42;

    /**
     * @var int|null
     *
     * @ORM\Column(name="mental_43", type="integer", nullable=true)
     */
    private $mental43;

    /**
     * @var int|null
     *
     * @ORM\Column(name="mental_44", type="integer", nullable=true)
     */
    private $mental44;

    /**
     * @var int|null
     *
     * @ORM\Column(name="mental_45", type="integer", nullable=true)
     */
    private $mental45;

    /**
     * @var int|null
     *
     * @ORM\Column(name="mental_46", type="integer", nullable=true)
     */
    private $mental46;

    /**
     * @var int|null
     *
     * @ORM\Column(name="mental_47", type="integer", nullable=true)
     */
    private $mental47;

    /**
     * @var int|null
     *
     * @ORM\Column(name="mental_48", type="integer", nullable=true)
     */
    private $mental48;

    /**
     * @var int|null
     *
     * @ORM\Column(name="mental_49", type="integer", nullable=true)
     */
    private $mental49;

    /**
     * @var int|null
     *
     * @ORM\Column(name="mental_50", type="integer", nullable=true)
     */
    private $mental50;

    /**
     * @var int|null
     *
     * @ORM\Column(name="mental_51", type="integer", nullable=true)
     */
    private $mental51;

    /**
     * @var int|null
     *
     * @ORM\Column(name="mental_52", type="integer", nullable=true)
     */
    private $mental52;

    /**
     * @var int|null
     *
     * @ORM\Column(name="mental_53", type="integer", nullable=true)
     */
    private $mental53;

    /**
     * @var int|null
     *
     * @ORM\Column(name="mental_54", type="integer", nullable=true)
     */
    private $mental54;

    /**
     * @var int|null
     *
     * @ORM\Column(name="mental_55", type="integer", nullable=true)
     */
    private $mental55;

    /**
     * @var int|null
     *
     * @ORM\Column(name="mental_56", type="integer", nullable=true)
     */
    private $mental56;

    /**
     * @var int|null
     *
     * @ORM\Column(name="mental_57", type="integer", nullable=true)
     */
    private $mental57;

    /**
     * @var int|null
     *
     * @ORM\Column(name="mental_58", type="integer", nullable=true)
     */
    private $mental58;

    /**
     * @var int|null
     *
     * @ORM\Column(name="mental_59", type="integer", nullable=true)
     */
    private $mental59;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_185", type="integer", nullable=true)
     */
    private $column185;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tactical_0", type="integer", nullable=true)
     */
    private $tactical0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tactical_1", type="integer", nullable=true)
     */
    private $tactical1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tactical_2", type="integer", nullable=true)
     */
    private $tactical2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tactical_3", type="integer", nullable=true)
     */
    private $tactical3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tactical_4", type="integer", nullable=true)
     */
    private $tactical4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tactical_5", type="integer", nullable=true)
     */
    private $tactical5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tactical_6", type="integer", nullable=true)
     */
    private $tactical6;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tactical_7", type="integer", nullable=true)
     */
    private $tactical7;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tactical_8", type="integer", nullable=true)
     */
    private $tactical8;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tactical_9", type="integer", nullable=true)
     */
    private $tactical9;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tactical_10", type="integer", nullable=true)
     */
    private $tactical10;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tactical_11", type="integer", nullable=true)
     */
    private $tactical11;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tactical_12", type="integer", nullable=true)
     */
    private $tactical12;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tactical_13", type="integer", nullable=true)
     */
    private $tactical13;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tactical_14", type="integer", nullable=true)
     */
    private $tactical14;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tactical_15", type="integer", nullable=true)
     */
    private $tactical15;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tactical_16", type="integer", nullable=true)
     */
    private $tactical16;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tactical_17", type="integer", nullable=true)
     */
    private $tactical17;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tactical_18", type="integer", nullable=true)
     */
    private $tactical18;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tactical_19", type="integer", nullable=true)
     */
    private $tactical19;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tactical_20", type="integer", nullable=true)
     */
    private $tactical20;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tactical_21", type="integer", nullable=true)
     */
    private $tactical21;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tactical_22", type="integer", nullable=true)
     */
    private $tactical22;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tactical_23", type="integer", nullable=true)
     */
    private $tactical23;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tactical_24", type="integer", nullable=true)
     */
    private $tactical24;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tactical_25", type="integer", nullable=true)
     */
    private $tactical25;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tactical_26", type="integer", nullable=true)
     */
    private $tactical26;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tactical_27", type="integer", nullable=true)
     */
    private $tactical27;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tactical_28", type="integer", nullable=true)
     */
    private $tactical28;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tactical_29", type="integer", nullable=true)
     */
    private $tactical29;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tactical_30", type="integer", nullable=true)
     */
    private $tactical30;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tactical_31", type="integer", nullable=true)
     */
    private $tactical31;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tactical_32", type="integer", nullable=true)
     */
    private $tactical32;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tactical_33", type="integer", nullable=true)
     */
    private $tactical33;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tactical_34", type="integer", nullable=true)
     */
    private $tactical34;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tactical_35", type="integer", nullable=true)
     */
    private $tactical35;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tactical_36", type="integer", nullable=true)
     */
    private $tactical36;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tactical_37", type="integer", nullable=true)
     */
    private $tactical37;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tactical_38", type="integer", nullable=true)
     */
    private $tactical38;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tactical_39", type="integer", nullable=true)
     */
    private $tactical39;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tactical_40", type="integer", nullable=true)
     */
    private $tactical40;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tactical_41", type="integer", nullable=true)
     */
    private $tactical41;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tactical_42", type="integer", nullable=true)
     */
    private $tactical42;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tactical_43", type="integer", nullable=true)
     */
    private $tactical43;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tactical_44", type="integer", nullable=true)
     */
    private $tactical44;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tactical_45", type="integer", nullable=true)
     */
    private $tactical45;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tactical_46", type="integer", nullable=true)
     */
    private $tactical46;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tactical_47", type="integer", nullable=true)
     */
    private $tactical47;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tactical_48", type="integer", nullable=true)
     */
    private $tactical48;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tactical_49", type="integer", nullable=true)
     */
    private $tactical49;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tactical_50", type="integer", nullable=true)
     */
    private $tactical50;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tactical_51", type="integer", nullable=true)
     */
    private $tactical51;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tactical_52", type="integer", nullable=true)
     */
    private $tactical52;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tactical_53", type="integer", nullable=true)
     */
    private $tactical53;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tactical_54", type="integer", nullable=true)
     */
    private $tactical54;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tactical_55", type="integer", nullable=true)
     */
    private $tactical55;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tactical_56", type="integer", nullable=true)
     */
    private $tactical56;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tactical_57", type="integer", nullable=true)
     */
    private $tactical57;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tactical_58", type="integer", nullable=true)
     */
    private $tactical58;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tactical_59", type="integer", nullable=true)
     */
    private $tactical59;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_246", type="integer", nullable=true)
     */
    private $column246;

    /**
     * @var GcArmyEquipPreset
     *
     * @ORM\ManyToOne(targetEntity="GcArmyEquipPreset")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="equip_preset_59", referencedColumnName="pk")
     * })
     */
    private $equipPreset59;

    /**
     * @var GcArmyEquipPreset
     *
     * @ORM\ManyToOne(targetEntity="GcArmyEquipPreset")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="equip_preset_58", referencedColumnName="pk")
     * })
     */
    private $equipPreset58;

    /**
     * @var GcArmyEquipPreset
     *
     * @ORM\ManyToOne(targetEntity="GcArmyEquipPreset")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="equip_preset_57", referencedColumnName="pk")
     * })
     */
    private $equipPreset57;

    /**
     * @var GcArmyEquipPreset
     *
     * @ORM\ManyToOne(targetEntity="GcArmyEquipPreset")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="equip_preset_56", referencedColumnName="pk")
     * })
     */
    private $equipPreset56;

    /**
     * @var GcArmyEquipPreset
     *
     * @ORM\ManyToOne(targetEntity="GcArmyEquipPreset")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="equip_preset_55", referencedColumnName="pk")
     * })
     */
    private $equipPreset55;

    /**
     * @var GcArmyEquipPreset
     *
     * @ORM\ManyToOne(targetEntity="GcArmyEquipPreset")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="equip_preset_54", referencedColumnName="pk")
     * })
     */
    private $equipPreset54;

    /**
     * @var GcArmyEquipPreset
     *
     * @ORM\ManyToOne(targetEntity="GcArmyEquipPreset")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="equip_preset_53", referencedColumnName="pk")
     * })
     */
    private $equipPreset53;

    /**
     * @var GcArmyEquipPreset
     *
     * @ORM\ManyToOne(targetEntity="GcArmyEquipPreset")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="equip_preset_52", referencedColumnName="pk")
     * })
     */
    private $equipPreset52;

    /**
     * @var GcArmyEquipPreset
     *
     * @ORM\ManyToOne(targetEntity="GcArmyEquipPreset")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="equip_preset_51", referencedColumnName="pk")
     * })
     */
    private $equipPreset51;

    /**
     * @var GcArmyEquipPreset
     *
     * @ORM\ManyToOne(targetEntity="GcArmyEquipPreset")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="equip_preset_50", referencedColumnName="pk")
     * })
     */
    private $equipPreset50;

    /**
     * @var GcArmyEquipPreset
     *
     * @ORM\ManyToOne(targetEntity="GcArmyEquipPreset")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="equip_preset_49", referencedColumnName="pk")
     * })
     */
    private $equipPreset49;

    /**
     * @var GcArmyEquipPreset
     *
     * @ORM\ManyToOne(targetEntity="GcArmyEquipPreset")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="equip_preset_48", referencedColumnName="pk")
     * })
     */
    private $equipPreset48;

    /**
     * @var GcArmyEquipPreset
     *
     * @ORM\ManyToOne(targetEntity="GcArmyEquipPreset")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="equip_preset_47", referencedColumnName="pk")
     * })
     */
    private $equipPreset47;

    /**
     * @var GcArmyEquipPreset
     *
     * @ORM\ManyToOne(targetEntity="GcArmyEquipPreset")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="equip_preset_46", referencedColumnName="pk")
     * })
     */
    private $equipPreset46;

    /**
     * @var GcArmyEquipPreset
     *
     * @ORM\ManyToOne(targetEntity="GcArmyEquipPreset")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="equip_preset_45", referencedColumnName="pk")
     * })
     */
    private $equipPreset45;

    /**
     * @var GcArmyEquipPreset
     *
     * @ORM\ManyToOne(targetEntity="GcArmyEquipPreset")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="equip_preset_44", referencedColumnName="pk")
     * })
     */
    private $equipPreset44;

    /**
     * @var GcArmyEquipPreset
     *
     * @ORM\ManyToOne(targetEntity="GcArmyEquipPreset")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="equip_preset_43", referencedColumnName="pk")
     * })
     */
    private $equipPreset43;

    /**
     * @var GcArmyEquipPreset
     *
     * @ORM\ManyToOne(targetEntity="GcArmyEquipPreset")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="equip_preset_42", referencedColumnName="pk")
     * })
     */
    private $equipPreset42;

    /**
     * @var GcArmyEquipPreset
     *
     * @ORM\ManyToOne(targetEntity="GcArmyEquipPreset")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="equip_preset_41", referencedColumnName="pk")
     * })
     */
    private $equipPreset41;

    /**
     * @var GcArmyEquipPreset
     *
     * @ORM\ManyToOne(targetEntity="GcArmyEquipPreset")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="equip_preset_40", referencedColumnName="pk")
     * })
     */
    private $equipPreset40;

    /**
     * @var GcArmyEquipPreset
     *
     * @ORM\ManyToOne(targetEntity="GcArmyEquipPreset")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="equip_preset_39", referencedColumnName="pk")
     * })
     */
    private $equipPreset39;

    /**
     * @var GcArmyEquipPreset
     *
     * @ORM\ManyToOne(targetEntity="GcArmyEquipPreset")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="equip_preset_38", referencedColumnName="pk")
     * })
     */
    private $equipPreset38;

    /**
     * @var GcArmyEquipPreset
     *
     * @ORM\ManyToOne(targetEntity="GcArmyEquipPreset")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="equip_preset_37", referencedColumnName="pk")
     * })
     */
    private $equipPreset37;

    /**
     * @var GcArmyEquipPreset
     *
     * @ORM\ManyToOne(targetEntity="GcArmyEquipPreset")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="equip_preset_36", referencedColumnName="pk")
     * })
     */
    private $equipPreset36;

    /**
     * @var GcArmyEquipPreset
     *
     * @ORM\ManyToOne(targetEntity="GcArmyEquipPreset")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="equip_preset_35", referencedColumnName="pk")
     * })
     */
    private $equipPreset35;

    /**
     * @var GcArmyEquipPreset
     *
     * @ORM\ManyToOne(targetEntity="GcArmyEquipPreset")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="equip_preset_34", referencedColumnName="pk")
     * })
     */
    private $equipPreset34;

    /**
     * @var GcArmyEquipPreset
     *
     * @ORM\ManyToOne(targetEntity="GcArmyEquipPreset")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="equip_preset_33", referencedColumnName="pk")
     * })
     */
    private $equipPreset33;

    /**
     * @var GcArmyEquipPreset
     *
     * @ORM\ManyToOne(targetEntity="GcArmyEquipPreset")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="equip_preset_32", referencedColumnName="pk")
     * })
     */
    private $equipPreset32;

    /**
     * @var GcArmyEquipPreset
     *
     * @ORM\ManyToOne(targetEntity="GcArmyEquipPreset")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="equip_preset_31", referencedColumnName="pk")
     * })
     */
    private $equipPreset31;

    /**
     * @var GcArmyEquipPreset
     *
     * @ORM\ManyToOne(targetEntity="GcArmyEquipPreset")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="equip_preset_30", referencedColumnName="pk")
     * })
     */
    private $equipPreset30;

    /**
     * @var GcArmyEquipPreset
     *
     * @ORM\ManyToOne(targetEntity="GcArmyEquipPreset")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="equip_preset_29", referencedColumnName="pk")
     * })
     */
    private $equipPreset29;

    /**
     * @var GcArmyEquipPreset
     *
     * @ORM\ManyToOne(targetEntity="GcArmyEquipPreset")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="equip_preset_28", referencedColumnName="pk")
     * })
     */
    private $equipPreset28;

    /**
     * @var GcArmyEquipPreset
     *
     * @ORM\ManyToOne(targetEntity="GcArmyEquipPreset")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="equip_preset_27", referencedColumnName="pk")
     * })
     */
    private $equipPreset27;

    /**
     * @var GcArmyEquipPreset
     *
     * @ORM\ManyToOne(targetEntity="GcArmyEquipPreset")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="equip_preset_26", referencedColumnName="pk")
     * })
     */
    private $equipPreset26;

    /**
     * @var GcArmyEquipPreset
     *
     * @ORM\ManyToOne(targetEntity="GcArmyEquipPreset")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="equip_preset_25", referencedColumnName="pk")
     * })
     */
    private $equipPreset25;

    /**
     * @var GcArmyEquipPreset
     *
     * @ORM\ManyToOne(targetEntity="GcArmyEquipPreset")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="equip_preset_24", referencedColumnName="pk")
     * })
     */
    private $equipPreset24;

    /**
     * @var GcArmyEquipPreset
     *
     * @ORM\ManyToOne(targetEntity="GcArmyEquipPreset")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="equip_preset_23", referencedColumnName="pk")
     * })
     */
    private $equipPreset23;

    /**
     * @var GcArmyEquipPreset
     *
     * @ORM\ManyToOne(targetEntity="GcArmyEquipPreset")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="equip_preset_22", referencedColumnName="pk")
     * })
     */
    private $equipPreset22;

    /**
     * @var GcArmyEquipPreset
     *
     * @ORM\ManyToOne(targetEntity="GcArmyEquipPreset")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="equip_preset_21", referencedColumnName="pk")
     * })
     */
    private $equipPreset21;

    /**
     * @var GcArmyEquipPreset
     *
     * @ORM\ManyToOne(targetEntity="GcArmyEquipPreset")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="equip_preset_20", referencedColumnName="pk")
     * })
     */
    private $equipPreset20;

    /**
     * @var GcArmyEquipPreset
     *
     * @ORM\ManyToOne(targetEntity="GcArmyEquipPreset")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="equip_preset_19", referencedColumnName="pk")
     * })
     */
    private $equipPreset19;

    /**
     * @var GcArmyEquipPreset
     *
     * @ORM\ManyToOne(targetEntity="GcArmyEquipPreset")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="equip_preset_18", referencedColumnName="pk")
     * })
     */
    private $equipPreset18;

    /**
     * @var GcArmyEquipPreset
     *
     * @ORM\ManyToOne(targetEntity="GcArmyEquipPreset")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="equip_preset_17", referencedColumnName="pk")
     * })
     */
    private $equipPreset17;

    /**
     * @var GcArmyEquipPreset
     *
     * @ORM\ManyToOne(targetEntity="GcArmyEquipPreset")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="equip_preset_16", referencedColumnName="pk")
     * })
     */
    private $equipPreset16;

    /**
     * @var GcArmyEquipPreset
     *
     * @ORM\ManyToOne(targetEntity="GcArmyEquipPreset")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="equip_preset_15", referencedColumnName="pk")
     * })
     */
    private $equipPreset15;

    /**
     * @var GcArmyEquipPreset
     *
     * @ORM\ManyToOne(targetEntity="GcArmyEquipPreset")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="equip_preset_14", referencedColumnName="pk")
     * })
     */
    private $equipPreset14;

    /**
     * @var GcArmyEquipPreset
     *
     * @ORM\ManyToOne(targetEntity="GcArmyEquipPreset")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="equip_preset_13", referencedColumnName="pk")
     * })
     */
    private $equipPreset13;

    /**
     * @var GcArmyEquipPreset
     *
     * @ORM\ManyToOne(targetEntity="GcArmyEquipPreset")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="equip_preset_12", referencedColumnName="pk")
     * })
     */
    private $equipPreset12;

    /**
     * @var GcArmyEquipPreset
     *
     * @ORM\ManyToOne(targetEntity="GcArmyEquipPreset")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="equip_preset_11", referencedColumnName="pk")
     * })
     */
    private $equipPreset11;

    /**
     * @var GcArmyEquipPreset
     *
     * @ORM\ManyToOne(targetEntity="GcArmyEquipPreset")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="equip_preset_10", referencedColumnName="pk")
     * })
     */
    private $equipPreset10;

    /**
     * @var GcArmyEquipPreset
     *
     * @ORM\ManyToOne(targetEntity="GcArmyEquipPreset")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="equip_preset_9", referencedColumnName="pk")
     * })
     */
    private $equipPreset9;

    /**
     * @var GcArmyEquipPreset
     *
     * @ORM\ManyToOne(targetEntity="GcArmyEquipPreset")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="equip_preset_8", referencedColumnName="pk")
     * })
     */
    private $equipPreset8;

    /**
     * @var GcArmyEquipPreset
     *
     * @ORM\ManyToOne(targetEntity="GcArmyEquipPreset")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="equip_preset_7", referencedColumnName="pk")
     * })
     */
    private $equipPreset7;

    /**
     * @var GcArmyEquipPreset
     *
     * @ORM\ManyToOne(targetEntity="GcArmyEquipPreset")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="equip_preset_6", referencedColumnName="pk")
     * })
     */
    private $equipPreset6;

    /**
     * @var GcArmyEquipPreset
     *
     * @ORM\ManyToOne(targetEntity="GcArmyEquipPreset")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="equip_preset_5", referencedColumnName="pk")
     * })
     */
    private $equipPreset5;

    /**
     * @var GcArmyEquipPreset
     *
     * @ORM\ManyToOne(targetEntity="GcArmyEquipPreset")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="equip_preset_4", referencedColumnName="pk")
     * })
     */
    private $equipPreset4;

    /**
     * @var GcArmyEquipPreset
     *
     * @ORM\ManyToOne(targetEntity="GcArmyEquipPreset")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="equip_preset_3", referencedColumnName="pk")
     * })
     */
    private $equipPreset3;

    /**
     * @var GcArmyEquipPreset
     *
     * @ORM\ManyToOne(targetEntity="GcArmyEquipPreset")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="equip_preset_2", referencedColumnName="pk")
     * })
     */
    private $equipPreset2;

    /**
     * @var GcArmyEquipPreset
     *
     * @ORM\ManyToOne(targetEntity="GcArmyEquipPreset")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="equip_preset_1", referencedColumnName="pk")
     * })
     */
    private $equipPreset1;

    /**
     * @var GcArmyEquipPreset
     *
     * @ORM\ManyToOne(targetEntity="GcArmyEquipPreset")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="equip_preset_0", referencedColumnName="pk")
     * })
     */
    private $equipPreset0;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="class_book", referencedColumnName="pk")
     * })
     */
    private $classBook;

    /**
     * @var ClassJob
     *
     * @ORM\ManyToOne(targetEntity="ClassJob")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="class_job", referencedColumnName="pk")
     * })
     */
    private $classJob;

    public function getPk(): ?int
    {
        return $this->pk;
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

    public function getPhysical0(): ?int
    {
        return $this->physical0;
    }

    public function setPhysical0(?int $physical0): self
    {
        $this->physical0 = $physical0;

        return $this;
    }

    public function getPhysical1(): ?int
    {
        return $this->physical1;
    }

    public function setPhysical1(?int $physical1): self
    {
        $this->physical1 = $physical1;

        return $this;
    }

    public function getPhysical2(): ?int
    {
        return $this->physical2;
    }

    public function setPhysical2(?int $physical2): self
    {
        $this->physical2 = $physical2;

        return $this;
    }

    public function getPhysical3(): ?int
    {
        return $this->physical3;
    }

    public function setPhysical3(?int $physical3): self
    {
        $this->physical3 = $physical3;

        return $this;
    }

    public function getPhysical4(): ?int
    {
        return $this->physical4;
    }

    public function setPhysical4(?int $physical4): self
    {
        $this->physical4 = $physical4;

        return $this;
    }

    public function getPhysical5(): ?int
    {
        return $this->physical5;
    }

    public function setPhysical5(?int $physical5): self
    {
        $this->physical5 = $physical5;

        return $this;
    }

    public function getPhysical6(): ?int
    {
        return $this->physical6;
    }

    public function setPhysical6(?int $physical6): self
    {
        $this->physical6 = $physical6;

        return $this;
    }

    public function getPhysical7(): ?int
    {
        return $this->physical7;
    }

    public function setPhysical7(?int $physical7): self
    {
        $this->physical7 = $physical7;

        return $this;
    }

    public function getPhysical8(): ?int
    {
        return $this->physical8;
    }

    public function setPhysical8(?int $physical8): self
    {
        $this->physical8 = $physical8;

        return $this;
    }

    public function getPhysical9(): ?int
    {
        return $this->physical9;
    }

    public function setPhysical9(?int $physical9): self
    {
        $this->physical9 = $physical9;

        return $this;
    }

    public function getPhysical10(): ?int
    {
        return $this->physical10;
    }

    public function setPhysical10(?int $physical10): self
    {
        $this->physical10 = $physical10;

        return $this;
    }

    public function getPhysical11(): ?int
    {
        return $this->physical11;
    }

    public function setPhysical11(?int $physical11): self
    {
        $this->physical11 = $physical11;

        return $this;
    }

    public function getPhysical12(): ?int
    {
        return $this->physical12;
    }

    public function setPhysical12(?int $physical12): self
    {
        $this->physical12 = $physical12;

        return $this;
    }

    public function getPhysical13(): ?int
    {
        return $this->physical13;
    }

    public function setPhysical13(?int $physical13): self
    {
        $this->physical13 = $physical13;

        return $this;
    }

    public function getPhysical14(): ?int
    {
        return $this->physical14;
    }

    public function setPhysical14(?int $physical14): self
    {
        $this->physical14 = $physical14;

        return $this;
    }

    public function getPhysical15(): ?int
    {
        return $this->physical15;
    }

    public function setPhysical15(?int $physical15): self
    {
        $this->physical15 = $physical15;

        return $this;
    }

    public function getPhysical16(): ?int
    {
        return $this->physical16;
    }

    public function setPhysical16(?int $physical16): self
    {
        $this->physical16 = $physical16;

        return $this;
    }

    public function getPhysical17(): ?int
    {
        return $this->physical17;
    }

    public function setPhysical17(?int $physical17): self
    {
        $this->physical17 = $physical17;

        return $this;
    }

    public function getPhysical18(): ?int
    {
        return $this->physical18;
    }

    public function setPhysical18(?int $physical18): self
    {
        $this->physical18 = $physical18;

        return $this;
    }

    public function getPhysical19(): ?int
    {
        return $this->physical19;
    }

    public function setPhysical19(?int $physical19): self
    {
        $this->physical19 = $physical19;

        return $this;
    }

    public function getPhysical20(): ?int
    {
        return $this->physical20;
    }

    public function setPhysical20(?int $physical20): self
    {
        $this->physical20 = $physical20;

        return $this;
    }

    public function getPhysical21(): ?int
    {
        return $this->physical21;
    }

    public function setPhysical21(?int $physical21): self
    {
        $this->physical21 = $physical21;

        return $this;
    }

    public function getPhysical22(): ?int
    {
        return $this->physical22;
    }

    public function setPhysical22(?int $physical22): self
    {
        $this->physical22 = $physical22;

        return $this;
    }

    public function getPhysical23(): ?int
    {
        return $this->physical23;
    }

    public function setPhysical23(?int $physical23): self
    {
        $this->physical23 = $physical23;

        return $this;
    }

    public function getPhysical24(): ?int
    {
        return $this->physical24;
    }

    public function setPhysical24(?int $physical24): self
    {
        $this->physical24 = $physical24;

        return $this;
    }

    public function getPhysical25(): ?int
    {
        return $this->physical25;
    }

    public function setPhysical25(?int $physical25): self
    {
        $this->physical25 = $physical25;

        return $this;
    }

    public function getPhysical26(): ?int
    {
        return $this->physical26;
    }

    public function setPhysical26(?int $physical26): self
    {
        $this->physical26 = $physical26;

        return $this;
    }

    public function getPhysical27(): ?int
    {
        return $this->physical27;
    }

    public function setPhysical27(?int $physical27): self
    {
        $this->physical27 = $physical27;

        return $this;
    }

    public function getPhysical28(): ?int
    {
        return $this->physical28;
    }

    public function setPhysical28(?int $physical28): self
    {
        $this->physical28 = $physical28;

        return $this;
    }

    public function getPhysical29(): ?int
    {
        return $this->physical29;
    }

    public function setPhysical29(?int $physical29): self
    {
        $this->physical29 = $physical29;

        return $this;
    }

    public function getPhysical30(): ?int
    {
        return $this->physical30;
    }

    public function setPhysical30(?int $physical30): self
    {
        $this->physical30 = $physical30;

        return $this;
    }

    public function getPhysical31(): ?int
    {
        return $this->physical31;
    }

    public function setPhysical31(?int $physical31): self
    {
        $this->physical31 = $physical31;

        return $this;
    }

    public function getPhysical32(): ?int
    {
        return $this->physical32;
    }

    public function setPhysical32(?int $physical32): self
    {
        $this->physical32 = $physical32;

        return $this;
    }

    public function getPhysical33(): ?int
    {
        return $this->physical33;
    }

    public function setPhysical33(?int $physical33): self
    {
        $this->physical33 = $physical33;

        return $this;
    }

    public function getPhysical34(): ?int
    {
        return $this->physical34;
    }

    public function setPhysical34(?int $physical34): self
    {
        $this->physical34 = $physical34;

        return $this;
    }

    public function getPhysical35(): ?int
    {
        return $this->physical35;
    }

    public function setPhysical35(?int $physical35): self
    {
        $this->physical35 = $physical35;

        return $this;
    }

    public function getPhysical36(): ?int
    {
        return $this->physical36;
    }

    public function setPhysical36(?int $physical36): self
    {
        $this->physical36 = $physical36;

        return $this;
    }

    public function getPhysical37(): ?int
    {
        return $this->physical37;
    }

    public function setPhysical37(?int $physical37): self
    {
        $this->physical37 = $physical37;

        return $this;
    }

    public function getPhysical38(): ?int
    {
        return $this->physical38;
    }

    public function setPhysical38(?int $physical38): self
    {
        $this->physical38 = $physical38;

        return $this;
    }

    public function getPhysical39(): ?int
    {
        return $this->physical39;
    }

    public function setPhysical39(?int $physical39): self
    {
        $this->physical39 = $physical39;

        return $this;
    }

    public function getPhysical40(): ?int
    {
        return $this->physical40;
    }

    public function setPhysical40(?int $physical40): self
    {
        $this->physical40 = $physical40;

        return $this;
    }

    public function getPhysical41(): ?int
    {
        return $this->physical41;
    }

    public function setPhysical41(?int $physical41): self
    {
        $this->physical41 = $physical41;

        return $this;
    }

    public function getPhysical42(): ?int
    {
        return $this->physical42;
    }

    public function setPhysical42(?int $physical42): self
    {
        $this->physical42 = $physical42;

        return $this;
    }

    public function getPhysical43(): ?int
    {
        return $this->physical43;
    }

    public function setPhysical43(?int $physical43): self
    {
        $this->physical43 = $physical43;

        return $this;
    }

    public function getPhysical44(): ?int
    {
        return $this->physical44;
    }

    public function setPhysical44(?int $physical44): self
    {
        $this->physical44 = $physical44;

        return $this;
    }

    public function getPhysical45(): ?int
    {
        return $this->physical45;
    }

    public function setPhysical45(?int $physical45): self
    {
        $this->physical45 = $physical45;

        return $this;
    }

    public function getPhysical46(): ?int
    {
        return $this->physical46;
    }

    public function setPhysical46(?int $physical46): self
    {
        $this->physical46 = $physical46;

        return $this;
    }

    public function getPhysical47(): ?int
    {
        return $this->physical47;
    }

    public function setPhysical47(?int $physical47): self
    {
        $this->physical47 = $physical47;

        return $this;
    }

    public function getPhysical48(): ?int
    {
        return $this->physical48;
    }

    public function setPhysical48(?int $physical48): self
    {
        $this->physical48 = $physical48;

        return $this;
    }

    public function getPhysical49(): ?int
    {
        return $this->physical49;
    }

    public function setPhysical49(?int $physical49): self
    {
        $this->physical49 = $physical49;

        return $this;
    }

    public function getPhysical50(): ?int
    {
        return $this->physical50;
    }

    public function setPhysical50(?int $physical50): self
    {
        $this->physical50 = $physical50;

        return $this;
    }

    public function getPhysical51(): ?int
    {
        return $this->physical51;
    }

    public function setPhysical51(?int $physical51): self
    {
        $this->physical51 = $physical51;

        return $this;
    }

    public function getPhysical52(): ?int
    {
        return $this->physical52;
    }

    public function setPhysical52(?int $physical52): self
    {
        $this->physical52 = $physical52;

        return $this;
    }

    public function getPhysical53(): ?int
    {
        return $this->physical53;
    }

    public function setPhysical53(?int $physical53): self
    {
        $this->physical53 = $physical53;

        return $this;
    }

    public function getPhysical54(): ?int
    {
        return $this->physical54;
    }

    public function setPhysical54(?int $physical54): self
    {
        $this->physical54 = $physical54;

        return $this;
    }

    public function getPhysical55(): ?int
    {
        return $this->physical55;
    }

    public function setPhysical55(?int $physical55): self
    {
        $this->physical55 = $physical55;

        return $this;
    }

    public function getPhysical56(): ?int
    {
        return $this->physical56;
    }

    public function setPhysical56(?int $physical56): self
    {
        $this->physical56 = $physical56;

        return $this;
    }

    public function getPhysical57(): ?int
    {
        return $this->physical57;
    }

    public function setPhysical57(?int $physical57): self
    {
        $this->physical57 = $physical57;

        return $this;
    }

    public function getPhysical58(): ?int
    {
        return $this->physical58;
    }

    public function setPhysical58(?int $physical58): self
    {
        $this->physical58 = $physical58;

        return $this;
    }

    public function getPhysical59(): ?int
    {
        return $this->physical59;
    }

    public function setPhysical59(?int $physical59): self
    {
        $this->physical59 = $physical59;

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

    public function getMental0(): ?int
    {
        return $this->mental0;
    }

    public function setMental0(?int $mental0): self
    {
        $this->mental0 = $mental0;

        return $this;
    }

    public function getMental1(): ?int
    {
        return $this->mental1;
    }

    public function setMental1(?int $mental1): self
    {
        $this->mental1 = $mental1;

        return $this;
    }

    public function getMental2(): ?int
    {
        return $this->mental2;
    }

    public function setMental2(?int $mental2): self
    {
        $this->mental2 = $mental2;

        return $this;
    }

    public function getMental3(): ?int
    {
        return $this->mental3;
    }

    public function setMental3(?int $mental3): self
    {
        $this->mental3 = $mental3;

        return $this;
    }

    public function getMental4(): ?int
    {
        return $this->mental4;
    }

    public function setMental4(?int $mental4): self
    {
        $this->mental4 = $mental4;

        return $this;
    }

    public function getMental5(): ?int
    {
        return $this->mental5;
    }

    public function setMental5(?int $mental5): self
    {
        $this->mental5 = $mental5;

        return $this;
    }

    public function getMental6(): ?int
    {
        return $this->mental6;
    }

    public function setMental6(?int $mental6): self
    {
        $this->mental6 = $mental6;

        return $this;
    }

    public function getMental7(): ?int
    {
        return $this->mental7;
    }

    public function setMental7(?int $mental7): self
    {
        $this->mental7 = $mental7;

        return $this;
    }

    public function getMental8(): ?int
    {
        return $this->mental8;
    }

    public function setMental8(?int $mental8): self
    {
        $this->mental8 = $mental8;

        return $this;
    }

    public function getMental9(): ?int
    {
        return $this->mental9;
    }

    public function setMental9(?int $mental9): self
    {
        $this->mental9 = $mental9;

        return $this;
    }

    public function getMental10(): ?int
    {
        return $this->mental10;
    }

    public function setMental10(?int $mental10): self
    {
        $this->mental10 = $mental10;

        return $this;
    }

    public function getMental11(): ?int
    {
        return $this->mental11;
    }

    public function setMental11(?int $mental11): self
    {
        $this->mental11 = $mental11;

        return $this;
    }

    public function getMental12(): ?int
    {
        return $this->mental12;
    }

    public function setMental12(?int $mental12): self
    {
        $this->mental12 = $mental12;

        return $this;
    }

    public function getMental13(): ?int
    {
        return $this->mental13;
    }

    public function setMental13(?int $mental13): self
    {
        $this->mental13 = $mental13;

        return $this;
    }

    public function getMental14(): ?int
    {
        return $this->mental14;
    }

    public function setMental14(?int $mental14): self
    {
        $this->mental14 = $mental14;

        return $this;
    }

    public function getMental15(): ?int
    {
        return $this->mental15;
    }

    public function setMental15(?int $mental15): self
    {
        $this->mental15 = $mental15;

        return $this;
    }

    public function getMental16(): ?int
    {
        return $this->mental16;
    }

    public function setMental16(?int $mental16): self
    {
        $this->mental16 = $mental16;

        return $this;
    }

    public function getMental17(): ?int
    {
        return $this->mental17;
    }

    public function setMental17(?int $mental17): self
    {
        $this->mental17 = $mental17;

        return $this;
    }

    public function getMental18(): ?int
    {
        return $this->mental18;
    }

    public function setMental18(?int $mental18): self
    {
        $this->mental18 = $mental18;

        return $this;
    }

    public function getMental19(): ?int
    {
        return $this->mental19;
    }

    public function setMental19(?int $mental19): self
    {
        $this->mental19 = $mental19;

        return $this;
    }

    public function getMental20(): ?int
    {
        return $this->mental20;
    }

    public function setMental20(?int $mental20): self
    {
        $this->mental20 = $mental20;

        return $this;
    }

    public function getMental21(): ?int
    {
        return $this->mental21;
    }

    public function setMental21(?int $mental21): self
    {
        $this->mental21 = $mental21;

        return $this;
    }

    public function getMental22(): ?int
    {
        return $this->mental22;
    }

    public function setMental22(?int $mental22): self
    {
        $this->mental22 = $mental22;

        return $this;
    }

    public function getMental23(): ?int
    {
        return $this->mental23;
    }

    public function setMental23(?int $mental23): self
    {
        $this->mental23 = $mental23;

        return $this;
    }

    public function getMental24(): ?int
    {
        return $this->mental24;
    }

    public function setMental24(?int $mental24): self
    {
        $this->mental24 = $mental24;

        return $this;
    }

    public function getMental25(): ?int
    {
        return $this->mental25;
    }

    public function setMental25(?int $mental25): self
    {
        $this->mental25 = $mental25;

        return $this;
    }

    public function getMental26(): ?int
    {
        return $this->mental26;
    }

    public function setMental26(?int $mental26): self
    {
        $this->mental26 = $mental26;

        return $this;
    }

    public function getMental27(): ?int
    {
        return $this->mental27;
    }

    public function setMental27(?int $mental27): self
    {
        $this->mental27 = $mental27;

        return $this;
    }

    public function getMental28(): ?int
    {
        return $this->mental28;
    }

    public function setMental28(?int $mental28): self
    {
        $this->mental28 = $mental28;

        return $this;
    }

    public function getMental29(): ?int
    {
        return $this->mental29;
    }

    public function setMental29(?int $mental29): self
    {
        $this->mental29 = $mental29;

        return $this;
    }

    public function getMental30(): ?int
    {
        return $this->mental30;
    }

    public function setMental30(?int $mental30): self
    {
        $this->mental30 = $mental30;

        return $this;
    }

    public function getMental31(): ?int
    {
        return $this->mental31;
    }

    public function setMental31(?int $mental31): self
    {
        $this->mental31 = $mental31;

        return $this;
    }

    public function getMental32(): ?int
    {
        return $this->mental32;
    }

    public function setMental32(?int $mental32): self
    {
        $this->mental32 = $mental32;

        return $this;
    }

    public function getMental33(): ?int
    {
        return $this->mental33;
    }

    public function setMental33(?int $mental33): self
    {
        $this->mental33 = $mental33;

        return $this;
    }

    public function getMental34(): ?int
    {
        return $this->mental34;
    }

    public function setMental34(?int $mental34): self
    {
        $this->mental34 = $mental34;

        return $this;
    }

    public function getMental35(): ?int
    {
        return $this->mental35;
    }

    public function setMental35(?int $mental35): self
    {
        $this->mental35 = $mental35;

        return $this;
    }

    public function getMental36(): ?int
    {
        return $this->mental36;
    }

    public function setMental36(?int $mental36): self
    {
        $this->mental36 = $mental36;

        return $this;
    }

    public function getMental37(): ?int
    {
        return $this->mental37;
    }

    public function setMental37(?int $mental37): self
    {
        $this->mental37 = $mental37;

        return $this;
    }

    public function getMental38(): ?int
    {
        return $this->mental38;
    }

    public function setMental38(?int $mental38): self
    {
        $this->mental38 = $mental38;

        return $this;
    }

    public function getMental39(): ?int
    {
        return $this->mental39;
    }

    public function setMental39(?int $mental39): self
    {
        $this->mental39 = $mental39;

        return $this;
    }

    public function getMental40(): ?int
    {
        return $this->mental40;
    }

    public function setMental40(?int $mental40): self
    {
        $this->mental40 = $mental40;

        return $this;
    }

    public function getMental41(): ?int
    {
        return $this->mental41;
    }

    public function setMental41(?int $mental41): self
    {
        $this->mental41 = $mental41;

        return $this;
    }

    public function getMental42(): ?int
    {
        return $this->mental42;
    }

    public function setMental42(?int $mental42): self
    {
        $this->mental42 = $mental42;

        return $this;
    }

    public function getMental43(): ?int
    {
        return $this->mental43;
    }

    public function setMental43(?int $mental43): self
    {
        $this->mental43 = $mental43;

        return $this;
    }

    public function getMental44(): ?int
    {
        return $this->mental44;
    }

    public function setMental44(?int $mental44): self
    {
        $this->mental44 = $mental44;

        return $this;
    }

    public function getMental45(): ?int
    {
        return $this->mental45;
    }

    public function setMental45(?int $mental45): self
    {
        $this->mental45 = $mental45;

        return $this;
    }

    public function getMental46(): ?int
    {
        return $this->mental46;
    }

    public function setMental46(?int $mental46): self
    {
        $this->mental46 = $mental46;

        return $this;
    }

    public function getMental47(): ?int
    {
        return $this->mental47;
    }

    public function setMental47(?int $mental47): self
    {
        $this->mental47 = $mental47;

        return $this;
    }

    public function getMental48(): ?int
    {
        return $this->mental48;
    }

    public function setMental48(?int $mental48): self
    {
        $this->mental48 = $mental48;

        return $this;
    }

    public function getMental49(): ?int
    {
        return $this->mental49;
    }

    public function setMental49(?int $mental49): self
    {
        $this->mental49 = $mental49;

        return $this;
    }

    public function getMental50(): ?int
    {
        return $this->mental50;
    }

    public function setMental50(?int $mental50): self
    {
        $this->mental50 = $mental50;

        return $this;
    }

    public function getMental51(): ?int
    {
        return $this->mental51;
    }

    public function setMental51(?int $mental51): self
    {
        $this->mental51 = $mental51;

        return $this;
    }

    public function getMental52(): ?int
    {
        return $this->mental52;
    }

    public function setMental52(?int $mental52): self
    {
        $this->mental52 = $mental52;

        return $this;
    }

    public function getMental53(): ?int
    {
        return $this->mental53;
    }

    public function setMental53(?int $mental53): self
    {
        $this->mental53 = $mental53;

        return $this;
    }

    public function getMental54(): ?int
    {
        return $this->mental54;
    }

    public function setMental54(?int $mental54): self
    {
        $this->mental54 = $mental54;

        return $this;
    }

    public function getMental55(): ?int
    {
        return $this->mental55;
    }

    public function setMental55(?int $mental55): self
    {
        $this->mental55 = $mental55;

        return $this;
    }

    public function getMental56(): ?int
    {
        return $this->mental56;
    }

    public function setMental56(?int $mental56): self
    {
        $this->mental56 = $mental56;

        return $this;
    }

    public function getMental57(): ?int
    {
        return $this->mental57;
    }

    public function setMental57(?int $mental57): self
    {
        $this->mental57 = $mental57;

        return $this;
    }

    public function getMental58(): ?int
    {
        return $this->mental58;
    }

    public function setMental58(?int $mental58): self
    {
        $this->mental58 = $mental58;

        return $this;
    }

    public function getMental59(): ?int
    {
        return $this->mental59;
    }

    public function setMental59(?int $mental59): self
    {
        $this->mental59 = $mental59;

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

    public function getTactical0(): ?int
    {
        return $this->tactical0;
    }

    public function setTactical0(?int $tactical0): self
    {
        $this->tactical0 = $tactical0;

        return $this;
    }

    public function getTactical1(): ?int
    {
        return $this->tactical1;
    }

    public function setTactical1(?int $tactical1): self
    {
        $this->tactical1 = $tactical1;

        return $this;
    }

    public function getTactical2(): ?int
    {
        return $this->tactical2;
    }

    public function setTactical2(?int $tactical2): self
    {
        $this->tactical2 = $tactical2;

        return $this;
    }

    public function getTactical3(): ?int
    {
        return $this->tactical3;
    }

    public function setTactical3(?int $tactical3): self
    {
        $this->tactical3 = $tactical3;

        return $this;
    }

    public function getTactical4(): ?int
    {
        return $this->tactical4;
    }

    public function setTactical4(?int $tactical4): self
    {
        $this->tactical4 = $tactical4;

        return $this;
    }

    public function getTactical5(): ?int
    {
        return $this->tactical5;
    }

    public function setTactical5(?int $tactical5): self
    {
        $this->tactical5 = $tactical5;

        return $this;
    }

    public function getTactical6(): ?int
    {
        return $this->tactical6;
    }

    public function setTactical6(?int $tactical6): self
    {
        $this->tactical6 = $tactical6;

        return $this;
    }

    public function getTactical7(): ?int
    {
        return $this->tactical7;
    }

    public function setTactical7(?int $tactical7): self
    {
        $this->tactical7 = $tactical7;

        return $this;
    }

    public function getTactical8(): ?int
    {
        return $this->tactical8;
    }

    public function setTactical8(?int $tactical8): self
    {
        $this->tactical8 = $tactical8;

        return $this;
    }

    public function getTactical9(): ?int
    {
        return $this->tactical9;
    }

    public function setTactical9(?int $tactical9): self
    {
        $this->tactical9 = $tactical9;

        return $this;
    }

    public function getTactical10(): ?int
    {
        return $this->tactical10;
    }

    public function setTactical10(?int $tactical10): self
    {
        $this->tactical10 = $tactical10;

        return $this;
    }

    public function getTactical11(): ?int
    {
        return $this->tactical11;
    }

    public function setTactical11(?int $tactical11): self
    {
        $this->tactical11 = $tactical11;

        return $this;
    }

    public function getTactical12(): ?int
    {
        return $this->tactical12;
    }

    public function setTactical12(?int $tactical12): self
    {
        $this->tactical12 = $tactical12;

        return $this;
    }

    public function getTactical13(): ?int
    {
        return $this->tactical13;
    }

    public function setTactical13(?int $tactical13): self
    {
        $this->tactical13 = $tactical13;

        return $this;
    }

    public function getTactical14(): ?int
    {
        return $this->tactical14;
    }

    public function setTactical14(?int $tactical14): self
    {
        $this->tactical14 = $tactical14;

        return $this;
    }

    public function getTactical15(): ?int
    {
        return $this->tactical15;
    }

    public function setTactical15(?int $tactical15): self
    {
        $this->tactical15 = $tactical15;

        return $this;
    }

    public function getTactical16(): ?int
    {
        return $this->tactical16;
    }

    public function setTactical16(?int $tactical16): self
    {
        $this->tactical16 = $tactical16;

        return $this;
    }

    public function getTactical17(): ?int
    {
        return $this->tactical17;
    }

    public function setTactical17(?int $tactical17): self
    {
        $this->tactical17 = $tactical17;

        return $this;
    }

    public function getTactical18(): ?int
    {
        return $this->tactical18;
    }

    public function setTactical18(?int $tactical18): self
    {
        $this->tactical18 = $tactical18;

        return $this;
    }

    public function getTactical19(): ?int
    {
        return $this->tactical19;
    }

    public function setTactical19(?int $tactical19): self
    {
        $this->tactical19 = $tactical19;

        return $this;
    }

    public function getTactical20(): ?int
    {
        return $this->tactical20;
    }

    public function setTactical20(?int $tactical20): self
    {
        $this->tactical20 = $tactical20;

        return $this;
    }

    public function getTactical21(): ?int
    {
        return $this->tactical21;
    }

    public function setTactical21(?int $tactical21): self
    {
        $this->tactical21 = $tactical21;

        return $this;
    }

    public function getTactical22(): ?int
    {
        return $this->tactical22;
    }

    public function setTactical22(?int $tactical22): self
    {
        $this->tactical22 = $tactical22;

        return $this;
    }

    public function getTactical23(): ?int
    {
        return $this->tactical23;
    }

    public function setTactical23(?int $tactical23): self
    {
        $this->tactical23 = $tactical23;

        return $this;
    }

    public function getTactical24(): ?int
    {
        return $this->tactical24;
    }

    public function setTactical24(?int $tactical24): self
    {
        $this->tactical24 = $tactical24;

        return $this;
    }

    public function getTactical25(): ?int
    {
        return $this->tactical25;
    }

    public function setTactical25(?int $tactical25): self
    {
        $this->tactical25 = $tactical25;

        return $this;
    }

    public function getTactical26(): ?int
    {
        return $this->tactical26;
    }

    public function setTactical26(?int $tactical26): self
    {
        $this->tactical26 = $tactical26;

        return $this;
    }

    public function getTactical27(): ?int
    {
        return $this->tactical27;
    }

    public function setTactical27(?int $tactical27): self
    {
        $this->tactical27 = $tactical27;

        return $this;
    }

    public function getTactical28(): ?int
    {
        return $this->tactical28;
    }

    public function setTactical28(?int $tactical28): self
    {
        $this->tactical28 = $tactical28;

        return $this;
    }

    public function getTactical29(): ?int
    {
        return $this->tactical29;
    }

    public function setTactical29(?int $tactical29): self
    {
        $this->tactical29 = $tactical29;

        return $this;
    }

    public function getTactical30(): ?int
    {
        return $this->tactical30;
    }

    public function setTactical30(?int $tactical30): self
    {
        $this->tactical30 = $tactical30;

        return $this;
    }

    public function getTactical31(): ?int
    {
        return $this->tactical31;
    }

    public function setTactical31(?int $tactical31): self
    {
        $this->tactical31 = $tactical31;

        return $this;
    }

    public function getTactical32(): ?int
    {
        return $this->tactical32;
    }

    public function setTactical32(?int $tactical32): self
    {
        $this->tactical32 = $tactical32;

        return $this;
    }

    public function getTactical33(): ?int
    {
        return $this->tactical33;
    }

    public function setTactical33(?int $tactical33): self
    {
        $this->tactical33 = $tactical33;

        return $this;
    }

    public function getTactical34(): ?int
    {
        return $this->tactical34;
    }

    public function setTactical34(?int $tactical34): self
    {
        $this->tactical34 = $tactical34;

        return $this;
    }

    public function getTactical35(): ?int
    {
        return $this->tactical35;
    }

    public function setTactical35(?int $tactical35): self
    {
        $this->tactical35 = $tactical35;

        return $this;
    }

    public function getTactical36(): ?int
    {
        return $this->tactical36;
    }

    public function setTactical36(?int $tactical36): self
    {
        $this->tactical36 = $tactical36;

        return $this;
    }

    public function getTactical37(): ?int
    {
        return $this->tactical37;
    }

    public function setTactical37(?int $tactical37): self
    {
        $this->tactical37 = $tactical37;

        return $this;
    }

    public function getTactical38(): ?int
    {
        return $this->tactical38;
    }

    public function setTactical38(?int $tactical38): self
    {
        $this->tactical38 = $tactical38;

        return $this;
    }

    public function getTactical39(): ?int
    {
        return $this->tactical39;
    }

    public function setTactical39(?int $tactical39): self
    {
        $this->tactical39 = $tactical39;

        return $this;
    }

    public function getTactical40(): ?int
    {
        return $this->tactical40;
    }

    public function setTactical40(?int $tactical40): self
    {
        $this->tactical40 = $tactical40;

        return $this;
    }

    public function getTactical41(): ?int
    {
        return $this->tactical41;
    }

    public function setTactical41(?int $tactical41): self
    {
        $this->tactical41 = $tactical41;

        return $this;
    }

    public function getTactical42(): ?int
    {
        return $this->tactical42;
    }

    public function setTactical42(?int $tactical42): self
    {
        $this->tactical42 = $tactical42;

        return $this;
    }

    public function getTactical43(): ?int
    {
        return $this->tactical43;
    }

    public function setTactical43(?int $tactical43): self
    {
        $this->tactical43 = $tactical43;

        return $this;
    }

    public function getTactical44(): ?int
    {
        return $this->tactical44;
    }

    public function setTactical44(?int $tactical44): self
    {
        $this->tactical44 = $tactical44;

        return $this;
    }

    public function getTactical45(): ?int
    {
        return $this->tactical45;
    }

    public function setTactical45(?int $tactical45): self
    {
        $this->tactical45 = $tactical45;

        return $this;
    }

    public function getTactical46(): ?int
    {
        return $this->tactical46;
    }

    public function setTactical46(?int $tactical46): self
    {
        $this->tactical46 = $tactical46;

        return $this;
    }

    public function getTactical47(): ?int
    {
        return $this->tactical47;
    }

    public function setTactical47(?int $tactical47): self
    {
        $this->tactical47 = $tactical47;

        return $this;
    }

    public function getTactical48(): ?int
    {
        return $this->tactical48;
    }

    public function setTactical48(?int $tactical48): self
    {
        $this->tactical48 = $tactical48;

        return $this;
    }

    public function getTactical49(): ?int
    {
        return $this->tactical49;
    }

    public function setTactical49(?int $tactical49): self
    {
        $this->tactical49 = $tactical49;

        return $this;
    }

    public function getTactical50(): ?int
    {
        return $this->tactical50;
    }

    public function setTactical50(?int $tactical50): self
    {
        $this->tactical50 = $tactical50;

        return $this;
    }

    public function getTactical51(): ?int
    {
        return $this->tactical51;
    }

    public function setTactical51(?int $tactical51): self
    {
        $this->tactical51 = $tactical51;

        return $this;
    }

    public function getTactical52(): ?int
    {
        return $this->tactical52;
    }

    public function setTactical52(?int $tactical52): self
    {
        $this->tactical52 = $tactical52;

        return $this;
    }

    public function getTactical53(): ?int
    {
        return $this->tactical53;
    }

    public function setTactical53(?int $tactical53): self
    {
        $this->tactical53 = $tactical53;

        return $this;
    }

    public function getTactical54(): ?int
    {
        return $this->tactical54;
    }

    public function setTactical54(?int $tactical54): self
    {
        $this->tactical54 = $tactical54;

        return $this;
    }

    public function getTactical55(): ?int
    {
        return $this->tactical55;
    }

    public function setTactical55(?int $tactical55): self
    {
        $this->tactical55 = $tactical55;

        return $this;
    }

    public function getTactical56(): ?int
    {
        return $this->tactical56;
    }

    public function setTactical56(?int $tactical56): self
    {
        $this->tactical56 = $tactical56;

        return $this;
    }

    public function getTactical57(): ?int
    {
        return $this->tactical57;
    }

    public function setTactical57(?int $tactical57): self
    {
        $this->tactical57 = $tactical57;

        return $this;
    }

    public function getTactical58(): ?int
    {
        return $this->tactical58;
    }

    public function setTactical58(?int $tactical58): self
    {
        $this->tactical58 = $tactical58;

        return $this;
    }

    public function getTactical59(): ?int
    {
        return $this->tactical59;
    }

    public function setTactical59(?int $tactical59): self
    {
        $this->tactical59 = $tactical59;

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

    public function getEquipPreset59(): ?GcArmyEquipPreset
    {
        return $this->equipPreset59;
    }

    public function setEquipPreset59(?GcArmyEquipPreset $equipPreset59): self
    {
        $this->equipPreset59 = $equipPreset59;

        return $this;
    }

    public function getEquipPreset58(): ?GcArmyEquipPreset
    {
        return $this->equipPreset58;
    }

    public function setEquipPreset58(?GcArmyEquipPreset $equipPreset58): self
    {
        $this->equipPreset58 = $equipPreset58;

        return $this;
    }

    public function getEquipPreset57(): ?GcArmyEquipPreset
    {
        return $this->equipPreset57;
    }

    public function setEquipPreset57(?GcArmyEquipPreset $equipPreset57): self
    {
        $this->equipPreset57 = $equipPreset57;

        return $this;
    }

    public function getEquipPreset56(): ?GcArmyEquipPreset
    {
        return $this->equipPreset56;
    }

    public function setEquipPreset56(?GcArmyEquipPreset $equipPreset56): self
    {
        $this->equipPreset56 = $equipPreset56;

        return $this;
    }

    public function getEquipPreset55(): ?GcArmyEquipPreset
    {
        return $this->equipPreset55;
    }

    public function setEquipPreset55(?GcArmyEquipPreset $equipPreset55): self
    {
        $this->equipPreset55 = $equipPreset55;

        return $this;
    }

    public function getEquipPreset54(): ?GcArmyEquipPreset
    {
        return $this->equipPreset54;
    }

    public function setEquipPreset54(?GcArmyEquipPreset $equipPreset54): self
    {
        $this->equipPreset54 = $equipPreset54;

        return $this;
    }

    public function getEquipPreset53(): ?GcArmyEquipPreset
    {
        return $this->equipPreset53;
    }

    public function setEquipPreset53(?GcArmyEquipPreset $equipPreset53): self
    {
        $this->equipPreset53 = $equipPreset53;

        return $this;
    }

    public function getEquipPreset52(): ?GcArmyEquipPreset
    {
        return $this->equipPreset52;
    }

    public function setEquipPreset52(?GcArmyEquipPreset $equipPreset52): self
    {
        $this->equipPreset52 = $equipPreset52;

        return $this;
    }

    public function getEquipPreset51(): ?GcArmyEquipPreset
    {
        return $this->equipPreset51;
    }

    public function setEquipPreset51(?GcArmyEquipPreset $equipPreset51): self
    {
        $this->equipPreset51 = $equipPreset51;

        return $this;
    }

    public function getEquipPreset50(): ?GcArmyEquipPreset
    {
        return $this->equipPreset50;
    }

    public function setEquipPreset50(?GcArmyEquipPreset $equipPreset50): self
    {
        $this->equipPreset50 = $equipPreset50;

        return $this;
    }

    public function getEquipPreset49(): ?GcArmyEquipPreset
    {
        return $this->equipPreset49;
    }

    public function setEquipPreset49(?GcArmyEquipPreset $equipPreset49): self
    {
        $this->equipPreset49 = $equipPreset49;

        return $this;
    }

    public function getEquipPreset48(): ?GcArmyEquipPreset
    {
        return $this->equipPreset48;
    }

    public function setEquipPreset48(?GcArmyEquipPreset $equipPreset48): self
    {
        $this->equipPreset48 = $equipPreset48;

        return $this;
    }

    public function getEquipPreset47(): ?GcArmyEquipPreset
    {
        return $this->equipPreset47;
    }

    public function setEquipPreset47(?GcArmyEquipPreset $equipPreset47): self
    {
        $this->equipPreset47 = $equipPreset47;

        return $this;
    }

    public function getEquipPreset46(): ?GcArmyEquipPreset
    {
        return $this->equipPreset46;
    }

    public function setEquipPreset46(?GcArmyEquipPreset $equipPreset46): self
    {
        $this->equipPreset46 = $equipPreset46;

        return $this;
    }

    public function getEquipPreset45(): ?GcArmyEquipPreset
    {
        return $this->equipPreset45;
    }

    public function setEquipPreset45(?GcArmyEquipPreset $equipPreset45): self
    {
        $this->equipPreset45 = $equipPreset45;

        return $this;
    }

    public function getEquipPreset44(): ?GcArmyEquipPreset
    {
        return $this->equipPreset44;
    }

    public function setEquipPreset44(?GcArmyEquipPreset $equipPreset44): self
    {
        $this->equipPreset44 = $equipPreset44;

        return $this;
    }

    public function getEquipPreset43(): ?GcArmyEquipPreset
    {
        return $this->equipPreset43;
    }

    public function setEquipPreset43(?GcArmyEquipPreset $equipPreset43): self
    {
        $this->equipPreset43 = $equipPreset43;

        return $this;
    }

    public function getEquipPreset42(): ?GcArmyEquipPreset
    {
        return $this->equipPreset42;
    }

    public function setEquipPreset42(?GcArmyEquipPreset $equipPreset42): self
    {
        $this->equipPreset42 = $equipPreset42;

        return $this;
    }

    public function getEquipPreset41(): ?GcArmyEquipPreset
    {
        return $this->equipPreset41;
    }

    public function setEquipPreset41(?GcArmyEquipPreset $equipPreset41): self
    {
        $this->equipPreset41 = $equipPreset41;

        return $this;
    }

    public function getEquipPreset40(): ?GcArmyEquipPreset
    {
        return $this->equipPreset40;
    }

    public function setEquipPreset40(?GcArmyEquipPreset $equipPreset40): self
    {
        $this->equipPreset40 = $equipPreset40;

        return $this;
    }

    public function getEquipPreset39(): ?GcArmyEquipPreset
    {
        return $this->equipPreset39;
    }

    public function setEquipPreset39(?GcArmyEquipPreset $equipPreset39): self
    {
        $this->equipPreset39 = $equipPreset39;

        return $this;
    }

    public function getEquipPreset38(): ?GcArmyEquipPreset
    {
        return $this->equipPreset38;
    }

    public function setEquipPreset38(?GcArmyEquipPreset $equipPreset38): self
    {
        $this->equipPreset38 = $equipPreset38;

        return $this;
    }

    public function getEquipPreset37(): ?GcArmyEquipPreset
    {
        return $this->equipPreset37;
    }

    public function setEquipPreset37(?GcArmyEquipPreset $equipPreset37): self
    {
        $this->equipPreset37 = $equipPreset37;

        return $this;
    }

    public function getEquipPreset36(): ?GcArmyEquipPreset
    {
        return $this->equipPreset36;
    }

    public function setEquipPreset36(?GcArmyEquipPreset $equipPreset36): self
    {
        $this->equipPreset36 = $equipPreset36;

        return $this;
    }

    public function getEquipPreset35(): ?GcArmyEquipPreset
    {
        return $this->equipPreset35;
    }

    public function setEquipPreset35(?GcArmyEquipPreset $equipPreset35): self
    {
        $this->equipPreset35 = $equipPreset35;

        return $this;
    }

    public function getEquipPreset34(): ?GcArmyEquipPreset
    {
        return $this->equipPreset34;
    }

    public function setEquipPreset34(?GcArmyEquipPreset $equipPreset34): self
    {
        $this->equipPreset34 = $equipPreset34;

        return $this;
    }

    public function getEquipPreset33(): ?GcArmyEquipPreset
    {
        return $this->equipPreset33;
    }

    public function setEquipPreset33(?GcArmyEquipPreset $equipPreset33): self
    {
        $this->equipPreset33 = $equipPreset33;

        return $this;
    }

    public function getEquipPreset32(): ?GcArmyEquipPreset
    {
        return $this->equipPreset32;
    }

    public function setEquipPreset32(?GcArmyEquipPreset $equipPreset32): self
    {
        $this->equipPreset32 = $equipPreset32;

        return $this;
    }

    public function getEquipPreset31(): ?GcArmyEquipPreset
    {
        return $this->equipPreset31;
    }

    public function setEquipPreset31(?GcArmyEquipPreset $equipPreset31): self
    {
        $this->equipPreset31 = $equipPreset31;

        return $this;
    }

    public function getEquipPreset30(): ?GcArmyEquipPreset
    {
        return $this->equipPreset30;
    }

    public function setEquipPreset30(?GcArmyEquipPreset $equipPreset30): self
    {
        $this->equipPreset30 = $equipPreset30;

        return $this;
    }

    public function getEquipPreset29(): ?GcArmyEquipPreset
    {
        return $this->equipPreset29;
    }

    public function setEquipPreset29(?GcArmyEquipPreset $equipPreset29): self
    {
        $this->equipPreset29 = $equipPreset29;

        return $this;
    }

    public function getEquipPreset28(): ?GcArmyEquipPreset
    {
        return $this->equipPreset28;
    }

    public function setEquipPreset28(?GcArmyEquipPreset $equipPreset28): self
    {
        $this->equipPreset28 = $equipPreset28;

        return $this;
    }

    public function getEquipPreset27(): ?GcArmyEquipPreset
    {
        return $this->equipPreset27;
    }

    public function setEquipPreset27(?GcArmyEquipPreset $equipPreset27): self
    {
        $this->equipPreset27 = $equipPreset27;

        return $this;
    }

    public function getEquipPreset26(): ?GcArmyEquipPreset
    {
        return $this->equipPreset26;
    }

    public function setEquipPreset26(?GcArmyEquipPreset $equipPreset26): self
    {
        $this->equipPreset26 = $equipPreset26;

        return $this;
    }

    public function getEquipPreset25(): ?GcArmyEquipPreset
    {
        return $this->equipPreset25;
    }

    public function setEquipPreset25(?GcArmyEquipPreset $equipPreset25): self
    {
        $this->equipPreset25 = $equipPreset25;

        return $this;
    }

    public function getEquipPreset24(): ?GcArmyEquipPreset
    {
        return $this->equipPreset24;
    }

    public function setEquipPreset24(?GcArmyEquipPreset $equipPreset24): self
    {
        $this->equipPreset24 = $equipPreset24;

        return $this;
    }

    public function getEquipPreset23(): ?GcArmyEquipPreset
    {
        return $this->equipPreset23;
    }

    public function setEquipPreset23(?GcArmyEquipPreset $equipPreset23): self
    {
        $this->equipPreset23 = $equipPreset23;

        return $this;
    }

    public function getEquipPreset22(): ?GcArmyEquipPreset
    {
        return $this->equipPreset22;
    }

    public function setEquipPreset22(?GcArmyEquipPreset $equipPreset22): self
    {
        $this->equipPreset22 = $equipPreset22;

        return $this;
    }

    public function getEquipPreset21(): ?GcArmyEquipPreset
    {
        return $this->equipPreset21;
    }

    public function setEquipPreset21(?GcArmyEquipPreset $equipPreset21): self
    {
        $this->equipPreset21 = $equipPreset21;

        return $this;
    }

    public function getEquipPreset20(): ?GcArmyEquipPreset
    {
        return $this->equipPreset20;
    }

    public function setEquipPreset20(?GcArmyEquipPreset $equipPreset20): self
    {
        $this->equipPreset20 = $equipPreset20;

        return $this;
    }

    public function getEquipPreset19(): ?GcArmyEquipPreset
    {
        return $this->equipPreset19;
    }

    public function setEquipPreset19(?GcArmyEquipPreset $equipPreset19): self
    {
        $this->equipPreset19 = $equipPreset19;

        return $this;
    }

    public function getEquipPreset18(): ?GcArmyEquipPreset
    {
        return $this->equipPreset18;
    }

    public function setEquipPreset18(?GcArmyEquipPreset $equipPreset18): self
    {
        $this->equipPreset18 = $equipPreset18;

        return $this;
    }

    public function getEquipPreset17(): ?GcArmyEquipPreset
    {
        return $this->equipPreset17;
    }

    public function setEquipPreset17(?GcArmyEquipPreset $equipPreset17): self
    {
        $this->equipPreset17 = $equipPreset17;

        return $this;
    }

    public function getEquipPreset16(): ?GcArmyEquipPreset
    {
        return $this->equipPreset16;
    }

    public function setEquipPreset16(?GcArmyEquipPreset $equipPreset16): self
    {
        $this->equipPreset16 = $equipPreset16;

        return $this;
    }

    public function getEquipPreset15(): ?GcArmyEquipPreset
    {
        return $this->equipPreset15;
    }

    public function setEquipPreset15(?GcArmyEquipPreset $equipPreset15): self
    {
        $this->equipPreset15 = $equipPreset15;

        return $this;
    }

    public function getEquipPreset14(): ?GcArmyEquipPreset
    {
        return $this->equipPreset14;
    }

    public function setEquipPreset14(?GcArmyEquipPreset $equipPreset14): self
    {
        $this->equipPreset14 = $equipPreset14;

        return $this;
    }

    public function getEquipPreset13(): ?GcArmyEquipPreset
    {
        return $this->equipPreset13;
    }

    public function setEquipPreset13(?GcArmyEquipPreset $equipPreset13): self
    {
        $this->equipPreset13 = $equipPreset13;

        return $this;
    }

    public function getEquipPreset12(): ?GcArmyEquipPreset
    {
        return $this->equipPreset12;
    }

    public function setEquipPreset12(?GcArmyEquipPreset $equipPreset12): self
    {
        $this->equipPreset12 = $equipPreset12;

        return $this;
    }

    public function getEquipPreset11(): ?GcArmyEquipPreset
    {
        return $this->equipPreset11;
    }

    public function setEquipPreset11(?GcArmyEquipPreset $equipPreset11): self
    {
        $this->equipPreset11 = $equipPreset11;

        return $this;
    }

    public function getEquipPreset10(): ?GcArmyEquipPreset
    {
        return $this->equipPreset10;
    }

    public function setEquipPreset10(?GcArmyEquipPreset $equipPreset10): self
    {
        $this->equipPreset10 = $equipPreset10;

        return $this;
    }

    public function getEquipPreset9(): ?GcArmyEquipPreset
    {
        return $this->equipPreset9;
    }

    public function setEquipPreset9(?GcArmyEquipPreset $equipPreset9): self
    {
        $this->equipPreset9 = $equipPreset9;

        return $this;
    }

    public function getEquipPreset8(): ?GcArmyEquipPreset
    {
        return $this->equipPreset8;
    }

    public function setEquipPreset8(?GcArmyEquipPreset $equipPreset8): self
    {
        $this->equipPreset8 = $equipPreset8;

        return $this;
    }

    public function getEquipPreset7(): ?GcArmyEquipPreset
    {
        return $this->equipPreset7;
    }

    public function setEquipPreset7(?GcArmyEquipPreset $equipPreset7): self
    {
        $this->equipPreset7 = $equipPreset7;

        return $this;
    }

    public function getEquipPreset6(): ?GcArmyEquipPreset
    {
        return $this->equipPreset6;
    }

    public function setEquipPreset6(?GcArmyEquipPreset $equipPreset6): self
    {
        $this->equipPreset6 = $equipPreset6;

        return $this;
    }

    public function getEquipPreset5(): ?GcArmyEquipPreset
    {
        return $this->equipPreset5;
    }

    public function setEquipPreset5(?GcArmyEquipPreset $equipPreset5): self
    {
        $this->equipPreset5 = $equipPreset5;

        return $this;
    }

    public function getEquipPreset4(): ?GcArmyEquipPreset
    {
        return $this->equipPreset4;
    }

    public function setEquipPreset4(?GcArmyEquipPreset $equipPreset4): self
    {
        $this->equipPreset4 = $equipPreset4;

        return $this;
    }

    public function getEquipPreset3(): ?GcArmyEquipPreset
    {
        return $this->equipPreset3;
    }

    public function setEquipPreset3(?GcArmyEquipPreset $equipPreset3): self
    {
        $this->equipPreset3 = $equipPreset3;

        return $this;
    }

    public function getEquipPreset2(): ?GcArmyEquipPreset
    {
        return $this->equipPreset2;
    }

    public function setEquipPreset2(?GcArmyEquipPreset $equipPreset2): self
    {
        $this->equipPreset2 = $equipPreset2;

        return $this;
    }

    public function getEquipPreset1(): ?GcArmyEquipPreset
    {
        return $this->equipPreset1;
    }

    public function setEquipPreset1(?GcArmyEquipPreset $equipPreset1): self
    {
        $this->equipPreset1 = $equipPreset1;

        return $this;
    }

    public function getEquipPreset0(): ?GcArmyEquipPreset
    {
        return $this->equipPreset0;
    }

    public function setEquipPreset0(?GcArmyEquipPreset $equipPreset0): self
    {
        $this->equipPreset0 = $equipPreset0;

        return $this;
    }

    public function getClassBook(): ?Item
    {
        return $this->classBook;
    }

    public function setClassBook(?Item $classBook): self
    {
        $this->classBook = $classBook;

        return $this;
    }

    public function getClassJob(): ?ClassJob
    {
        return $this->classJob;
    }

    public function setClassJob(?ClassJob $classJob): self
    {
        $this->classJob = $classJob;

        return $this;
    }
}
