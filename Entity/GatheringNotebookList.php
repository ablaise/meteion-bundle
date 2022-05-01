<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GatheringNotebookList.
 *
 * @ORM\Table(name="gathering_notebook_list", indexes={@ORM\Index(name="idx_88143d1bf549c394", columns={"gathering_item_67"}), @ORM\Index(name="idx_88143d1b3e6a83d0", columns={"gathering_item_7"}), @ORM\Index(name="idx_88143d1b2971c03a", columns={"gathering_item_45"}), @ORM\Index(name="idx_88143d1b39dcbd50", columns={"gathering_item_59"}), @ORM\Index(name="idx_88143d1baed59e41", columns={"gathering_item_8"}), @ORM\Index(name="idx_88143d1bf419333", columns={"gathering_item_20"}), @ORM\Index(name="idx_88143d1be26ec2ca", columns={"gathering_item_98"}), @ORM\Index(name="idx_88143d1b230104e9", columns={"gathering_item_14"}), @ORM\Index(name="idx_88143d1b755ba36f", columns={"gathering_item_74"}), @ORM\Index(name="idx_88143d1bba085553", columns={"gathering_item_17"}), @ORM\Index(name="idx_88143d1b536bf066", columns={"gathering_item_11"}), @ORM\Index(name="idx_88143d1bf5ae7bb9", columns={"gathering_item_80"}), @ORM\Index(name="idx_88143d1b1c2a66a1", columns={"gathering_item_61"}), @ORM\Index(name="idx_88143d1b8523371b", columns={"gathering_item_62"}), @ORM\Index(name="idx_88143d1b72d1df5b", columns={"gathering_item_97"}), @ORM\Index(name="idx_88143d1b615d92e4", columns={"gathering_item_31"}), @ORM\Index(name="idx_88143d1b6c40922e", columns={"gathering_item_64"}), @ORM\Index(name="idx_88143d1b246cc0f0", columns={"gathering_item_10"}), @ORM\Index(name="idx_88143d1b19a1b01", columns={"gathering_item_28"}), @ORM\Index(name="idx_88143d1b9648c289", columns={"gathering_item_23"}), @ORM\Index(name="idx_88143d1b7f2b67bc", columns={"gathering_item_25"}), @ORM\Index(name="idx_88143d1b25c93f9", columns={"gathering_item_75"}), @ORM\Index(name="idx_88143d1b5db07854", columns={"gathering_item_19"}), @ORM\Index(name="idx_88143d1b1ba01a95", columns={"gathering_item_82"}), @ORM\Index(name="idx_88143d1b85c48f36", columns={"gathering_item_85"}), @ORM\Index(name="idx_88143d1b306af17b", columns={"gathering_item_55"}), @ORM\Index(name="idx_88143d1b4edb8dc6", columns={"gathering_item_58"}), @ORM\Index(name="idx_88143d1b6ca72a03", columns={"gathering_item_83"}), @ORM\Index(name="idx_88143d1b6bcaee1a", columns={"gathering_item_87"}), @ORM\Index(name="idx_88143d1bf854c35e", columns={"gathering_item_32"}), @ORM\Index(name="idx_88143d1b390747c9", columns={"gathering_item_3"}), @ORM\Index(name="idx_88143d1b591b34b5", columns={"gathering_item_40"}), @ORM\Index(name="idx_88143d1bcd0f65c5", columns={"gathering_item_16"}), @ORM\Index(name="idx_88143d1b9c38065a", columns={"gathering_item_72"}), @ORM\Index(name="idx_88143d1bae0e64d8", columns={"gathering_item_52"}), @ORM\Index(name="idx_88143d1b8c72c31d", columns={"gathering_item_89"}), @ORM\Index(name="idx_88143d1b6f861ad6", columns={"gathering_item_39"}), @ORM\Index(name="idx_88143d1ba963a0c1", columns={"gathering_item_56"}), @ORM\Index(name="idx_88143d1b2bb2bd4", columns={"gathering_item_92"}), @ORM\Index(name="idx_88143d1bca62a1dc", columns={"gathering_item_12"}), @ORM\Index(name="idx_88143d1bff390747", columns={"gathering_item_36"}), @ORM\Index(name="idx_88143d1b9bb27a6e", columns={"gathering_item_91"}), @ORM\Index(name="idx_88143d1bb7155599", columns={"gathering_item_42"}), @ORM\Index(name="idx_88143d1b7cedef44", columns={"gathering_item_78"}), @ORM\Index(name="idx_88143d1bfb75f38b", columns={"gathering_item_88"}), @ORM\Index(name="idx_88143d1b72366776", columns={"gathering_item_70"}), @ORM\Index(name="idx_88143d1b496db346", columns={"gathering_item_6"}), @ORM\Index(name="idx_88143d1be6223606", columns={"gathering_item_26"}), @ORM\Index(name="idx_88143d1b4e00775f", columns={"gathering_item_2"}), @ORM\Index(name="idx_88143d1b91250690", columns={"gathering_item_27"}), @ORM\Index(name="idx_88143d1bc77fa116", columns={"gathering_item_47"}), @ORM\Index(name="idx_88143d1b9569f25c", columns={"gathering_item_99"}), @ORM\Index(name="idx_88143d1bd909544e", columns={"gathering_item_53"}), @ORM\Index(name="idx_88143d1bbeadfd2", columns={"gathering_item_79"}), @ORM\Index(name="idx_88143d1b6b2d5637", columns={"gathering_item_60"}), @ORM\Index(name="idx_88143d1b5e76f0ac", columns={"gathering_item_44"}), @ORM\Index(name="idx_88143d1b18812a40", columns={"gathering_item_38"}), @ORM\Index(name="idx_88143d1b20c78c11", columns={"gathering_item_49"}), @ORM\Index(name="idx_88143d1b1b47a2b8", columns={"gathering_item_65"}), @ORM\Index(name="idx_88143d1b53157e0", columns={"gathering_item_71"}), @ORM\Index(name="idx_88143d1b75bc1b42", columns={"gathering_item_93"}), @ORM\Index(name="idx_88143d1b7846a3a5", columns={"gathering_item_21"}), @ORM\Index(name="idx_88143d1be14ff21f", columns={"gathering_item_22"}), @ORM\Index(name="idx_88143d1ba00e1673", columns={"gathering_item_0"}), @ORM\Index(name="idx_88143d1b2ab748c2", columns={"gathering_item_18"}), @ORM\Index(name="idx_88143d1beb3f36cc", columns={"gathering_item_73"}), @ORM\Index(name="idx_88143d1bebd88ee1", columns={"gathering_item_94"}), @ORM\Index(name="idx_88143d1bf2c3bfa0", columns={"gathering_item_84"}), @ORM\Index(name="idx_88143d1b663056fd", columns={"gathering_item_35"}), @ORM\Index(name="idx_88143d1b1ccdde8c", columns={"gathering_item_86"}), @ORM\Index(name="idx_88143d1b37073562", columns={"gathering_item_51"}), @ORM\Index(name="idx_88143d1b9b55c243", columns={"gathering_item_76"}), @ORM\Index(name="idx_88143d1b82a94b2f", columns={"gathering_item_81"}), @ORM\Index(name="idx_88143d1becb54af8", columns={"gathering_item_90"}), @ORM\Index(name="idx_88143d1b5d6efcd", columns={"gathering_item_96"}), @ORM\Index(name="idx_88143d1bd70926e5", columns={"gathering_item_1"}), @ORM\Index(name="idx_88143d1bd9d2aed7", columns={"gathering_item_9"}), @ORM\Index(name="idx_88143d1b8f53f3c8", columns={"gathering_item_33"}), @ORM\Index(name="idx_88143d1b2e1c0423", columns={"gathering_item_41"}), @ORM\Index(name="idx_88143d1bc012650f", columns={"gathering_item_43"}), @ORM\Index(name="idx_88143d1bf224078d", columns={"gathering_item_63"}), @ORM\Index(name="idx_88143d1b9cdfbe77", columns={"gathering_item_95"}), @ORM\Index(name="idx_88143d1b400005f4", columns={"gathering_item_50"}), @ORM\Index(name="idx_88143d1b769d2b97", columns={"gathering_item_29"}), @ORM\Index(name="idx_88143d1b165aa272", columns={"gathering_item_30"}), @ORM\Index(name="idx_88143d1b5406347f", columns={"gathering_item_15"}), @ORM\Index(name="idx_88143d1bd064e2fc", columns={"gathering_item_5"}), @ORM\Index(name="idx_88143d1b476dc1ed", columns={"gathering_item_54"}), @ORM\Index(name="idx_88143d1bde649057", columns={"gathering_item_57"}), @ORM\Index(name="idx_88143d1b57c0bc87", columns={"gathering_item_48"}), @ORM\Index(name="idx_88143d1b883e37d1", columns={"gathering_item_37"}), @ORM\Index(name="idx_88143d1bb0789180", columns={"gathering_item_46"}), @ORM\Index(name="idx_88143d1b82c572a", columns={"gathering_item_24"}), @ORM\Index(name="idx_88143d1b1137666b", columns={"gathering_item_34"}), @ORM\Index(name="idx_88143d1b65f6de05", columns={"gathering_item_68"}), @ORM\Index(name="idx_88143d1ba763d26a", columns={"gathering_item_4"}), @ORM\Index(name="idx_88143d1b824ef302", columns={"gathering_item_66"}), @ORM\Index(name="idx_88143d1bec52f2d5", columns={"gathering_item_77"}), @ORM\Index(name="idx_88143d1b12f1ee93", columns={"gathering_item_69"}), @ORM\Index(name="idx_88143d1bbd65914a", columns={"gathering_item_13"})})
 * @ORM\Entity
 */
class GatheringNotebookList
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="gathering_notebook_list_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1", type="integer", nullable=true)
     */
    private $column1;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_item_99", referencedColumnName="pk")
     * })
     */
    private $gatheringItem99;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_item_98", referencedColumnName="pk")
     * })
     */
    private $gatheringItem98;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_item_97", referencedColumnName="pk")
     * })
     */
    private $gatheringItem97;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_item_96", referencedColumnName="pk")
     * })
     */
    private $gatheringItem96;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_item_95", referencedColumnName="pk")
     * })
     */
    private $gatheringItem95;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_item_94", referencedColumnName="pk")
     * })
     */
    private $gatheringItem94;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_item_93", referencedColumnName="pk")
     * })
     */
    private $gatheringItem93;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_item_92", referencedColumnName="pk")
     * })
     */
    private $gatheringItem92;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_item_91", referencedColumnName="pk")
     * })
     */
    private $gatheringItem91;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_item_90", referencedColumnName="pk")
     * })
     */
    private $gatheringItem90;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_item_89", referencedColumnName="pk")
     * })
     */
    private $gatheringItem89;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_item_88", referencedColumnName="pk")
     * })
     */
    private $gatheringItem88;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_item_87", referencedColumnName="pk")
     * })
     */
    private $gatheringItem87;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_item_86", referencedColumnName="pk")
     * })
     */
    private $gatheringItem86;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_item_85", referencedColumnName="pk")
     * })
     */
    private $gatheringItem85;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_item_84", referencedColumnName="pk")
     * })
     */
    private $gatheringItem84;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_item_83", referencedColumnName="pk")
     * })
     */
    private $gatheringItem83;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_item_82", referencedColumnName="pk")
     * })
     */
    private $gatheringItem82;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_item_81", referencedColumnName="pk")
     * })
     */
    private $gatheringItem81;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_item_80", referencedColumnName="pk")
     * })
     */
    private $gatheringItem80;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_item_79", referencedColumnName="pk")
     * })
     */
    private $gatheringItem79;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_item_78", referencedColumnName="pk")
     * })
     */
    private $gatheringItem78;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_item_77", referencedColumnName="pk")
     * })
     */
    private $gatheringItem77;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_item_76", referencedColumnName="pk")
     * })
     */
    private $gatheringItem76;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_item_75", referencedColumnName="pk")
     * })
     */
    private $gatheringItem75;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_item_74", referencedColumnName="pk")
     * })
     */
    private $gatheringItem74;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_item_73", referencedColumnName="pk")
     * })
     */
    private $gatheringItem73;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_item_72", referencedColumnName="pk")
     * })
     */
    private $gatheringItem72;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_item_71", referencedColumnName="pk")
     * })
     */
    private $gatheringItem71;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_item_70", referencedColumnName="pk")
     * })
     */
    private $gatheringItem70;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_item_69", referencedColumnName="pk")
     * })
     */
    private $gatheringItem69;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_item_68", referencedColumnName="pk")
     * })
     */
    private $gatheringItem68;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_item_67", referencedColumnName="pk")
     * })
     */
    private $gatheringItem67;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_item_66", referencedColumnName="pk")
     * })
     */
    private $gatheringItem66;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_item_65", referencedColumnName="pk")
     * })
     */
    private $gatheringItem65;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_item_64", referencedColumnName="pk")
     * })
     */
    private $gatheringItem64;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_item_63", referencedColumnName="pk")
     * })
     */
    private $gatheringItem63;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_item_62", referencedColumnName="pk")
     * })
     */
    private $gatheringItem62;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_item_61", referencedColumnName="pk")
     * })
     */
    private $gatheringItem61;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_item_60", referencedColumnName="pk")
     * })
     */
    private $gatheringItem60;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_item_59", referencedColumnName="pk")
     * })
     */
    private $gatheringItem59;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_item_58", referencedColumnName="pk")
     * })
     */
    private $gatheringItem58;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_item_57", referencedColumnName="pk")
     * })
     */
    private $gatheringItem57;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_item_56", referencedColumnName="pk")
     * })
     */
    private $gatheringItem56;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_item_55", referencedColumnName="pk")
     * })
     */
    private $gatheringItem55;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_item_54", referencedColumnName="pk")
     * })
     */
    private $gatheringItem54;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_item_53", referencedColumnName="pk")
     * })
     */
    private $gatheringItem53;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_item_52", referencedColumnName="pk")
     * })
     */
    private $gatheringItem52;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_item_51", referencedColumnName="pk")
     * })
     */
    private $gatheringItem51;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_item_50", referencedColumnName="pk")
     * })
     */
    private $gatheringItem50;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_item_49", referencedColumnName="pk")
     * })
     */
    private $gatheringItem49;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_item_48", referencedColumnName="pk")
     * })
     */
    private $gatheringItem48;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_item_47", referencedColumnName="pk")
     * })
     */
    private $gatheringItem47;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_item_46", referencedColumnName="pk")
     * })
     */
    private $gatheringItem46;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_item_45", referencedColumnName="pk")
     * })
     */
    private $gatheringItem45;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_item_44", referencedColumnName="pk")
     * })
     */
    private $gatheringItem44;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_item_43", referencedColumnName="pk")
     * })
     */
    private $gatheringItem43;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_item_42", referencedColumnName="pk")
     * })
     */
    private $gatheringItem42;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_item_41", referencedColumnName="pk")
     * })
     */
    private $gatheringItem41;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_item_40", referencedColumnName="pk")
     * })
     */
    private $gatheringItem40;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_item_39", referencedColumnName="pk")
     * })
     */
    private $gatheringItem39;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_item_38", referencedColumnName="pk")
     * })
     */
    private $gatheringItem38;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_item_37", referencedColumnName="pk")
     * })
     */
    private $gatheringItem37;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_item_36", referencedColumnName="pk")
     * })
     */
    private $gatheringItem36;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_item_35", referencedColumnName="pk")
     * })
     */
    private $gatheringItem35;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_item_34", referencedColumnName="pk")
     * })
     */
    private $gatheringItem34;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_item_33", referencedColumnName="pk")
     * })
     */
    private $gatheringItem33;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_item_32", referencedColumnName="pk")
     * })
     */
    private $gatheringItem32;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_item_31", referencedColumnName="pk")
     * })
     */
    private $gatheringItem31;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_item_30", referencedColumnName="pk")
     * })
     */
    private $gatheringItem30;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_item_29", referencedColumnName="pk")
     * })
     */
    private $gatheringItem29;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_item_28", referencedColumnName="pk")
     * })
     */
    private $gatheringItem28;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_item_27", referencedColumnName="pk")
     * })
     */
    private $gatheringItem27;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_item_26", referencedColumnName="pk")
     * })
     */
    private $gatheringItem26;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_item_25", referencedColumnName="pk")
     * })
     */
    private $gatheringItem25;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_item_24", referencedColumnName="pk")
     * })
     */
    private $gatheringItem24;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_item_23", referencedColumnName="pk")
     * })
     */
    private $gatheringItem23;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_item_22", referencedColumnName="pk")
     * })
     */
    private $gatheringItem22;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_item_21", referencedColumnName="pk")
     * })
     */
    private $gatheringItem21;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_item_20", referencedColumnName="pk")
     * })
     */
    private $gatheringItem20;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_item_19", referencedColumnName="pk")
     * })
     */
    private $gatheringItem19;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_item_18", referencedColumnName="pk")
     * })
     */
    private $gatheringItem18;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_item_17", referencedColumnName="pk")
     * })
     */
    private $gatheringItem17;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_item_16", referencedColumnName="pk")
     * })
     */
    private $gatheringItem16;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_item_15", referencedColumnName="pk")
     * })
     */
    private $gatheringItem15;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_item_14", referencedColumnName="pk")
     * })
     */
    private $gatheringItem14;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_item_13", referencedColumnName="pk")
     * })
     */
    private $gatheringItem13;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_item_12", referencedColumnName="pk")
     * })
     */
    private $gatheringItem12;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_item_11", referencedColumnName="pk")
     * })
     */
    private $gatheringItem11;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_item_10", referencedColumnName="pk")
     * })
     */
    private $gatheringItem10;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_item_9", referencedColumnName="pk")
     * })
     */
    private $gatheringItem9;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_item_8", referencedColumnName="pk")
     * })
     */
    private $gatheringItem8;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_item_7", referencedColumnName="pk")
     * })
     */
    private $gatheringItem7;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_item_6", referencedColumnName="pk")
     * })
     */
    private $gatheringItem6;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_item_5", referencedColumnName="pk")
     * })
     */
    private $gatheringItem5;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_item_4", referencedColumnName="pk")
     * })
     */
    private $gatheringItem4;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_item_3", referencedColumnName="pk")
     * })
     */
    private $gatheringItem3;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_item_2", referencedColumnName="pk")
     * })
     */
    private $gatheringItem2;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_item_1", referencedColumnName="pk")
     * })
     */
    private $gatheringItem1;

    /**
     * @var GatheringItem
     *
     * @ORM\ManyToOne(targetEntity="GatheringItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gathering_item_0", referencedColumnName="pk")
     * })
     */
    private $gatheringItem0;

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

    public function getGatheringItem99(): ?GatheringItem
    {
        return $this->gatheringItem99;
    }

    public function setGatheringItem99(?GatheringItem $gatheringItem99): self
    {
        $this->gatheringItem99 = $gatheringItem99;

        return $this;
    }

    public function getGatheringItem98(): ?GatheringItem
    {
        return $this->gatheringItem98;
    }

    public function setGatheringItem98(?GatheringItem $gatheringItem98): self
    {
        $this->gatheringItem98 = $gatheringItem98;

        return $this;
    }

    public function getGatheringItem97(): ?GatheringItem
    {
        return $this->gatheringItem97;
    }

    public function setGatheringItem97(?GatheringItem $gatheringItem97): self
    {
        $this->gatheringItem97 = $gatheringItem97;

        return $this;
    }

    public function getGatheringItem96(): ?GatheringItem
    {
        return $this->gatheringItem96;
    }

    public function setGatheringItem96(?GatheringItem $gatheringItem96): self
    {
        $this->gatheringItem96 = $gatheringItem96;

        return $this;
    }

    public function getGatheringItem95(): ?GatheringItem
    {
        return $this->gatheringItem95;
    }

    public function setGatheringItem95(?GatheringItem $gatheringItem95): self
    {
        $this->gatheringItem95 = $gatheringItem95;

        return $this;
    }

    public function getGatheringItem94(): ?GatheringItem
    {
        return $this->gatheringItem94;
    }

    public function setGatheringItem94(?GatheringItem $gatheringItem94): self
    {
        $this->gatheringItem94 = $gatheringItem94;

        return $this;
    }

    public function getGatheringItem93(): ?GatheringItem
    {
        return $this->gatheringItem93;
    }

    public function setGatheringItem93(?GatheringItem $gatheringItem93): self
    {
        $this->gatheringItem93 = $gatheringItem93;

        return $this;
    }

    public function getGatheringItem92(): ?GatheringItem
    {
        return $this->gatheringItem92;
    }

    public function setGatheringItem92(?GatheringItem $gatheringItem92): self
    {
        $this->gatheringItem92 = $gatheringItem92;

        return $this;
    }

    public function getGatheringItem91(): ?GatheringItem
    {
        return $this->gatheringItem91;
    }

    public function setGatheringItem91(?GatheringItem $gatheringItem91): self
    {
        $this->gatheringItem91 = $gatheringItem91;

        return $this;
    }

    public function getGatheringItem90(): ?GatheringItem
    {
        return $this->gatheringItem90;
    }

    public function setGatheringItem90(?GatheringItem $gatheringItem90): self
    {
        $this->gatheringItem90 = $gatheringItem90;

        return $this;
    }

    public function getGatheringItem89(): ?GatheringItem
    {
        return $this->gatheringItem89;
    }

    public function setGatheringItem89(?GatheringItem $gatheringItem89): self
    {
        $this->gatheringItem89 = $gatheringItem89;

        return $this;
    }

    public function getGatheringItem88(): ?GatheringItem
    {
        return $this->gatheringItem88;
    }

    public function setGatheringItem88(?GatheringItem $gatheringItem88): self
    {
        $this->gatheringItem88 = $gatheringItem88;

        return $this;
    }

    public function getGatheringItem87(): ?GatheringItem
    {
        return $this->gatheringItem87;
    }

    public function setGatheringItem87(?GatheringItem $gatheringItem87): self
    {
        $this->gatheringItem87 = $gatheringItem87;

        return $this;
    }

    public function getGatheringItem86(): ?GatheringItem
    {
        return $this->gatheringItem86;
    }

    public function setGatheringItem86(?GatheringItem $gatheringItem86): self
    {
        $this->gatheringItem86 = $gatheringItem86;

        return $this;
    }

    public function getGatheringItem85(): ?GatheringItem
    {
        return $this->gatheringItem85;
    }

    public function setGatheringItem85(?GatheringItem $gatheringItem85): self
    {
        $this->gatheringItem85 = $gatheringItem85;

        return $this;
    }

    public function getGatheringItem84(): ?GatheringItem
    {
        return $this->gatheringItem84;
    }

    public function setGatheringItem84(?GatheringItem $gatheringItem84): self
    {
        $this->gatheringItem84 = $gatheringItem84;

        return $this;
    }

    public function getGatheringItem83(): ?GatheringItem
    {
        return $this->gatheringItem83;
    }

    public function setGatheringItem83(?GatheringItem $gatheringItem83): self
    {
        $this->gatheringItem83 = $gatheringItem83;

        return $this;
    }

    public function getGatheringItem82(): ?GatheringItem
    {
        return $this->gatheringItem82;
    }

    public function setGatheringItem82(?GatheringItem $gatheringItem82): self
    {
        $this->gatheringItem82 = $gatheringItem82;

        return $this;
    }

    public function getGatheringItem81(): ?GatheringItem
    {
        return $this->gatheringItem81;
    }

    public function setGatheringItem81(?GatheringItem $gatheringItem81): self
    {
        $this->gatheringItem81 = $gatheringItem81;

        return $this;
    }

    public function getGatheringItem80(): ?GatheringItem
    {
        return $this->gatheringItem80;
    }

    public function setGatheringItem80(?GatheringItem $gatheringItem80): self
    {
        $this->gatheringItem80 = $gatheringItem80;

        return $this;
    }

    public function getGatheringItem79(): ?GatheringItem
    {
        return $this->gatheringItem79;
    }

    public function setGatheringItem79(?GatheringItem $gatheringItem79): self
    {
        $this->gatheringItem79 = $gatheringItem79;

        return $this;
    }

    public function getGatheringItem78(): ?GatheringItem
    {
        return $this->gatheringItem78;
    }

    public function setGatheringItem78(?GatheringItem $gatheringItem78): self
    {
        $this->gatheringItem78 = $gatheringItem78;

        return $this;
    }

    public function getGatheringItem77(): ?GatheringItem
    {
        return $this->gatheringItem77;
    }

    public function setGatheringItem77(?GatheringItem $gatheringItem77): self
    {
        $this->gatheringItem77 = $gatheringItem77;

        return $this;
    }

    public function getGatheringItem76(): ?GatheringItem
    {
        return $this->gatheringItem76;
    }

    public function setGatheringItem76(?GatheringItem $gatheringItem76): self
    {
        $this->gatheringItem76 = $gatheringItem76;

        return $this;
    }

    public function getGatheringItem75(): ?GatheringItem
    {
        return $this->gatheringItem75;
    }

    public function setGatheringItem75(?GatheringItem $gatheringItem75): self
    {
        $this->gatheringItem75 = $gatheringItem75;

        return $this;
    }

    public function getGatheringItem74(): ?GatheringItem
    {
        return $this->gatheringItem74;
    }

    public function setGatheringItem74(?GatheringItem $gatheringItem74): self
    {
        $this->gatheringItem74 = $gatheringItem74;

        return $this;
    }

    public function getGatheringItem73(): ?GatheringItem
    {
        return $this->gatheringItem73;
    }

    public function setGatheringItem73(?GatheringItem $gatheringItem73): self
    {
        $this->gatheringItem73 = $gatheringItem73;

        return $this;
    }

    public function getGatheringItem72(): ?GatheringItem
    {
        return $this->gatheringItem72;
    }

    public function setGatheringItem72(?GatheringItem $gatheringItem72): self
    {
        $this->gatheringItem72 = $gatheringItem72;

        return $this;
    }

    public function getGatheringItem71(): ?GatheringItem
    {
        return $this->gatheringItem71;
    }

    public function setGatheringItem71(?GatheringItem $gatheringItem71): self
    {
        $this->gatheringItem71 = $gatheringItem71;

        return $this;
    }

    public function getGatheringItem70(): ?GatheringItem
    {
        return $this->gatheringItem70;
    }

    public function setGatheringItem70(?GatheringItem $gatheringItem70): self
    {
        $this->gatheringItem70 = $gatheringItem70;

        return $this;
    }

    public function getGatheringItem69(): ?GatheringItem
    {
        return $this->gatheringItem69;
    }

    public function setGatheringItem69(?GatheringItem $gatheringItem69): self
    {
        $this->gatheringItem69 = $gatheringItem69;

        return $this;
    }

    public function getGatheringItem68(): ?GatheringItem
    {
        return $this->gatheringItem68;
    }

    public function setGatheringItem68(?GatheringItem $gatheringItem68): self
    {
        $this->gatheringItem68 = $gatheringItem68;

        return $this;
    }

    public function getGatheringItem67(): ?GatheringItem
    {
        return $this->gatheringItem67;
    }

    public function setGatheringItem67(?GatheringItem $gatheringItem67): self
    {
        $this->gatheringItem67 = $gatheringItem67;

        return $this;
    }

    public function getGatheringItem66(): ?GatheringItem
    {
        return $this->gatheringItem66;
    }

    public function setGatheringItem66(?GatheringItem $gatheringItem66): self
    {
        $this->gatheringItem66 = $gatheringItem66;

        return $this;
    }

    public function getGatheringItem65(): ?GatheringItem
    {
        return $this->gatheringItem65;
    }

    public function setGatheringItem65(?GatheringItem $gatheringItem65): self
    {
        $this->gatheringItem65 = $gatheringItem65;

        return $this;
    }

    public function getGatheringItem64(): ?GatheringItem
    {
        return $this->gatheringItem64;
    }

    public function setGatheringItem64(?GatheringItem $gatheringItem64): self
    {
        $this->gatheringItem64 = $gatheringItem64;

        return $this;
    }

    public function getGatheringItem63(): ?GatheringItem
    {
        return $this->gatheringItem63;
    }

    public function setGatheringItem63(?GatheringItem $gatheringItem63): self
    {
        $this->gatheringItem63 = $gatheringItem63;

        return $this;
    }

    public function getGatheringItem62(): ?GatheringItem
    {
        return $this->gatheringItem62;
    }

    public function setGatheringItem62(?GatheringItem $gatheringItem62): self
    {
        $this->gatheringItem62 = $gatheringItem62;

        return $this;
    }

    public function getGatheringItem61(): ?GatheringItem
    {
        return $this->gatheringItem61;
    }

    public function setGatheringItem61(?GatheringItem $gatheringItem61): self
    {
        $this->gatheringItem61 = $gatheringItem61;

        return $this;
    }

    public function getGatheringItem60(): ?GatheringItem
    {
        return $this->gatheringItem60;
    }

    public function setGatheringItem60(?GatheringItem $gatheringItem60): self
    {
        $this->gatheringItem60 = $gatheringItem60;

        return $this;
    }

    public function getGatheringItem59(): ?GatheringItem
    {
        return $this->gatheringItem59;
    }

    public function setGatheringItem59(?GatheringItem $gatheringItem59): self
    {
        $this->gatheringItem59 = $gatheringItem59;

        return $this;
    }

    public function getGatheringItem58(): ?GatheringItem
    {
        return $this->gatheringItem58;
    }

    public function setGatheringItem58(?GatheringItem $gatheringItem58): self
    {
        $this->gatheringItem58 = $gatheringItem58;

        return $this;
    }

    public function getGatheringItem57(): ?GatheringItem
    {
        return $this->gatheringItem57;
    }

    public function setGatheringItem57(?GatheringItem $gatheringItem57): self
    {
        $this->gatheringItem57 = $gatheringItem57;

        return $this;
    }

    public function getGatheringItem56(): ?GatheringItem
    {
        return $this->gatheringItem56;
    }

    public function setGatheringItem56(?GatheringItem $gatheringItem56): self
    {
        $this->gatheringItem56 = $gatheringItem56;

        return $this;
    }

    public function getGatheringItem55(): ?GatheringItem
    {
        return $this->gatheringItem55;
    }

    public function setGatheringItem55(?GatheringItem $gatheringItem55): self
    {
        $this->gatheringItem55 = $gatheringItem55;

        return $this;
    }

    public function getGatheringItem54(): ?GatheringItem
    {
        return $this->gatheringItem54;
    }

    public function setGatheringItem54(?GatheringItem $gatheringItem54): self
    {
        $this->gatheringItem54 = $gatheringItem54;

        return $this;
    }

    public function getGatheringItem53(): ?GatheringItem
    {
        return $this->gatheringItem53;
    }

    public function setGatheringItem53(?GatheringItem $gatheringItem53): self
    {
        $this->gatheringItem53 = $gatheringItem53;

        return $this;
    }

    public function getGatheringItem52(): ?GatheringItem
    {
        return $this->gatheringItem52;
    }

    public function setGatheringItem52(?GatheringItem $gatheringItem52): self
    {
        $this->gatheringItem52 = $gatheringItem52;

        return $this;
    }

    public function getGatheringItem51(): ?GatheringItem
    {
        return $this->gatheringItem51;
    }

    public function setGatheringItem51(?GatheringItem $gatheringItem51): self
    {
        $this->gatheringItem51 = $gatheringItem51;

        return $this;
    }

    public function getGatheringItem50(): ?GatheringItem
    {
        return $this->gatheringItem50;
    }

    public function setGatheringItem50(?GatheringItem $gatheringItem50): self
    {
        $this->gatheringItem50 = $gatheringItem50;

        return $this;
    }

    public function getGatheringItem49(): ?GatheringItem
    {
        return $this->gatheringItem49;
    }

    public function setGatheringItem49(?GatheringItem $gatheringItem49): self
    {
        $this->gatheringItem49 = $gatheringItem49;

        return $this;
    }

    public function getGatheringItem48(): ?GatheringItem
    {
        return $this->gatheringItem48;
    }

    public function setGatheringItem48(?GatheringItem $gatheringItem48): self
    {
        $this->gatheringItem48 = $gatheringItem48;

        return $this;
    }

    public function getGatheringItem47(): ?GatheringItem
    {
        return $this->gatheringItem47;
    }

    public function setGatheringItem47(?GatheringItem $gatheringItem47): self
    {
        $this->gatheringItem47 = $gatheringItem47;

        return $this;
    }

    public function getGatheringItem46(): ?GatheringItem
    {
        return $this->gatheringItem46;
    }

    public function setGatheringItem46(?GatheringItem $gatheringItem46): self
    {
        $this->gatheringItem46 = $gatheringItem46;

        return $this;
    }

    public function getGatheringItem45(): ?GatheringItem
    {
        return $this->gatheringItem45;
    }

    public function setGatheringItem45(?GatheringItem $gatheringItem45): self
    {
        $this->gatheringItem45 = $gatheringItem45;

        return $this;
    }

    public function getGatheringItem44(): ?GatheringItem
    {
        return $this->gatheringItem44;
    }

    public function setGatheringItem44(?GatheringItem $gatheringItem44): self
    {
        $this->gatheringItem44 = $gatheringItem44;

        return $this;
    }

    public function getGatheringItem43(): ?GatheringItem
    {
        return $this->gatheringItem43;
    }

    public function setGatheringItem43(?GatheringItem $gatheringItem43): self
    {
        $this->gatheringItem43 = $gatheringItem43;

        return $this;
    }

    public function getGatheringItem42(): ?GatheringItem
    {
        return $this->gatheringItem42;
    }

    public function setGatheringItem42(?GatheringItem $gatheringItem42): self
    {
        $this->gatheringItem42 = $gatheringItem42;

        return $this;
    }

    public function getGatheringItem41(): ?GatheringItem
    {
        return $this->gatheringItem41;
    }

    public function setGatheringItem41(?GatheringItem $gatheringItem41): self
    {
        $this->gatheringItem41 = $gatheringItem41;

        return $this;
    }

    public function getGatheringItem40(): ?GatheringItem
    {
        return $this->gatheringItem40;
    }

    public function setGatheringItem40(?GatheringItem $gatheringItem40): self
    {
        $this->gatheringItem40 = $gatheringItem40;

        return $this;
    }

    public function getGatheringItem39(): ?GatheringItem
    {
        return $this->gatheringItem39;
    }

    public function setGatheringItem39(?GatheringItem $gatheringItem39): self
    {
        $this->gatheringItem39 = $gatheringItem39;

        return $this;
    }

    public function getGatheringItem38(): ?GatheringItem
    {
        return $this->gatheringItem38;
    }

    public function setGatheringItem38(?GatheringItem $gatheringItem38): self
    {
        $this->gatheringItem38 = $gatheringItem38;

        return $this;
    }

    public function getGatheringItem37(): ?GatheringItem
    {
        return $this->gatheringItem37;
    }

    public function setGatheringItem37(?GatheringItem $gatheringItem37): self
    {
        $this->gatheringItem37 = $gatheringItem37;

        return $this;
    }

    public function getGatheringItem36(): ?GatheringItem
    {
        return $this->gatheringItem36;
    }

    public function setGatheringItem36(?GatheringItem $gatheringItem36): self
    {
        $this->gatheringItem36 = $gatheringItem36;

        return $this;
    }

    public function getGatheringItem35(): ?GatheringItem
    {
        return $this->gatheringItem35;
    }

    public function setGatheringItem35(?GatheringItem $gatheringItem35): self
    {
        $this->gatheringItem35 = $gatheringItem35;

        return $this;
    }

    public function getGatheringItem34(): ?GatheringItem
    {
        return $this->gatheringItem34;
    }

    public function setGatheringItem34(?GatheringItem $gatheringItem34): self
    {
        $this->gatheringItem34 = $gatheringItem34;

        return $this;
    }

    public function getGatheringItem33(): ?GatheringItem
    {
        return $this->gatheringItem33;
    }

    public function setGatheringItem33(?GatheringItem $gatheringItem33): self
    {
        $this->gatheringItem33 = $gatheringItem33;

        return $this;
    }

    public function getGatheringItem32(): ?GatheringItem
    {
        return $this->gatheringItem32;
    }

    public function setGatheringItem32(?GatheringItem $gatheringItem32): self
    {
        $this->gatheringItem32 = $gatheringItem32;

        return $this;
    }

    public function getGatheringItem31(): ?GatheringItem
    {
        return $this->gatheringItem31;
    }

    public function setGatheringItem31(?GatheringItem $gatheringItem31): self
    {
        $this->gatheringItem31 = $gatheringItem31;

        return $this;
    }

    public function getGatheringItem30(): ?GatheringItem
    {
        return $this->gatheringItem30;
    }

    public function setGatheringItem30(?GatheringItem $gatheringItem30): self
    {
        $this->gatheringItem30 = $gatheringItem30;

        return $this;
    }

    public function getGatheringItem29(): ?GatheringItem
    {
        return $this->gatheringItem29;
    }

    public function setGatheringItem29(?GatheringItem $gatheringItem29): self
    {
        $this->gatheringItem29 = $gatheringItem29;

        return $this;
    }

    public function getGatheringItem28(): ?GatheringItem
    {
        return $this->gatheringItem28;
    }

    public function setGatheringItem28(?GatheringItem $gatheringItem28): self
    {
        $this->gatheringItem28 = $gatheringItem28;

        return $this;
    }

    public function getGatheringItem27(): ?GatheringItem
    {
        return $this->gatheringItem27;
    }

    public function setGatheringItem27(?GatheringItem $gatheringItem27): self
    {
        $this->gatheringItem27 = $gatheringItem27;

        return $this;
    }

    public function getGatheringItem26(): ?GatheringItem
    {
        return $this->gatheringItem26;
    }

    public function setGatheringItem26(?GatheringItem $gatheringItem26): self
    {
        $this->gatheringItem26 = $gatheringItem26;

        return $this;
    }

    public function getGatheringItem25(): ?GatheringItem
    {
        return $this->gatheringItem25;
    }

    public function setGatheringItem25(?GatheringItem $gatheringItem25): self
    {
        $this->gatheringItem25 = $gatheringItem25;

        return $this;
    }

    public function getGatheringItem24(): ?GatheringItem
    {
        return $this->gatheringItem24;
    }

    public function setGatheringItem24(?GatheringItem $gatheringItem24): self
    {
        $this->gatheringItem24 = $gatheringItem24;

        return $this;
    }

    public function getGatheringItem23(): ?GatheringItem
    {
        return $this->gatheringItem23;
    }

    public function setGatheringItem23(?GatheringItem $gatheringItem23): self
    {
        $this->gatheringItem23 = $gatheringItem23;

        return $this;
    }

    public function getGatheringItem22(): ?GatheringItem
    {
        return $this->gatheringItem22;
    }

    public function setGatheringItem22(?GatheringItem $gatheringItem22): self
    {
        $this->gatheringItem22 = $gatheringItem22;

        return $this;
    }

    public function getGatheringItem21(): ?GatheringItem
    {
        return $this->gatheringItem21;
    }

    public function setGatheringItem21(?GatheringItem $gatheringItem21): self
    {
        $this->gatheringItem21 = $gatheringItem21;

        return $this;
    }

    public function getGatheringItem20(): ?GatheringItem
    {
        return $this->gatheringItem20;
    }

    public function setGatheringItem20(?GatheringItem $gatheringItem20): self
    {
        $this->gatheringItem20 = $gatheringItem20;

        return $this;
    }

    public function getGatheringItem19(): ?GatheringItem
    {
        return $this->gatheringItem19;
    }

    public function setGatheringItem19(?GatheringItem $gatheringItem19): self
    {
        $this->gatheringItem19 = $gatheringItem19;

        return $this;
    }

    public function getGatheringItem18(): ?GatheringItem
    {
        return $this->gatheringItem18;
    }

    public function setGatheringItem18(?GatheringItem $gatheringItem18): self
    {
        $this->gatheringItem18 = $gatheringItem18;

        return $this;
    }

    public function getGatheringItem17(): ?GatheringItem
    {
        return $this->gatheringItem17;
    }

    public function setGatheringItem17(?GatheringItem $gatheringItem17): self
    {
        $this->gatheringItem17 = $gatheringItem17;

        return $this;
    }

    public function getGatheringItem16(): ?GatheringItem
    {
        return $this->gatheringItem16;
    }

    public function setGatheringItem16(?GatheringItem $gatheringItem16): self
    {
        $this->gatheringItem16 = $gatheringItem16;

        return $this;
    }

    public function getGatheringItem15(): ?GatheringItem
    {
        return $this->gatheringItem15;
    }

    public function setGatheringItem15(?GatheringItem $gatheringItem15): self
    {
        $this->gatheringItem15 = $gatheringItem15;

        return $this;
    }

    public function getGatheringItem14(): ?GatheringItem
    {
        return $this->gatheringItem14;
    }

    public function setGatheringItem14(?GatheringItem $gatheringItem14): self
    {
        $this->gatheringItem14 = $gatheringItem14;

        return $this;
    }

    public function getGatheringItem13(): ?GatheringItem
    {
        return $this->gatheringItem13;
    }

    public function setGatheringItem13(?GatheringItem $gatheringItem13): self
    {
        $this->gatheringItem13 = $gatheringItem13;

        return $this;
    }

    public function getGatheringItem12(): ?GatheringItem
    {
        return $this->gatheringItem12;
    }

    public function setGatheringItem12(?GatheringItem $gatheringItem12): self
    {
        $this->gatheringItem12 = $gatheringItem12;

        return $this;
    }

    public function getGatheringItem11(): ?GatheringItem
    {
        return $this->gatheringItem11;
    }

    public function setGatheringItem11(?GatheringItem $gatheringItem11): self
    {
        $this->gatheringItem11 = $gatheringItem11;

        return $this;
    }

    public function getGatheringItem10(): ?GatheringItem
    {
        return $this->gatheringItem10;
    }

    public function setGatheringItem10(?GatheringItem $gatheringItem10): self
    {
        $this->gatheringItem10 = $gatheringItem10;

        return $this;
    }

    public function getGatheringItem9(): ?GatheringItem
    {
        return $this->gatheringItem9;
    }

    public function setGatheringItem9(?GatheringItem $gatheringItem9): self
    {
        $this->gatheringItem9 = $gatheringItem9;

        return $this;
    }

    public function getGatheringItem8(): ?GatheringItem
    {
        return $this->gatheringItem8;
    }

    public function setGatheringItem8(?GatheringItem $gatheringItem8): self
    {
        $this->gatheringItem8 = $gatheringItem8;

        return $this;
    }

    public function getGatheringItem7(): ?GatheringItem
    {
        return $this->gatheringItem7;
    }

    public function setGatheringItem7(?GatheringItem $gatheringItem7): self
    {
        $this->gatheringItem7 = $gatheringItem7;

        return $this;
    }

    public function getGatheringItem6(): ?GatheringItem
    {
        return $this->gatheringItem6;
    }

    public function setGatheringItem6(?GatheringItem $gatheringItem6): self
    {
        $this->gatheringItem6 = $gatheringItem6;

        return $this;
    }

    public function getGatheringItem5(): ?GatheringItem
    {
        return $this->gatheringItem5;
    }

    public function setGatheringItem5(?GatheringItem $gatheringItem5): self
    {
        $this->gatheringItem5 = $gatheringItem5;

        return $this;
    }

    public function getGatheringItem4(): ?GatheringItem
    {
        return $this->gatheringItem4;
    }

    public function setGatheringItem4(?GatheringItem $gatheringItem4): self
    {
        $this->gatheringItem4 = $gatheringItem4;

        return $this;
    }

    public function getGatheringItem3(): ?GatheringItem
    {
        return $this->gatheringItem3;
    }

    public function setGatheringItem3(?GatheringItem $gatheringItem3): self
    {
        $this->gatheringItem3 = $gatheringItem3;

        return $this;
    }

    public function getGatheringItem2(): ?GatheringItem
    {
        return $this->gatheringItem2;
    }

    public function setGatheringItem2(?GatheringItem $gatheringItem2): self
    {
        $this->gatheringItem2 = $gatheringItem2;

        return $this;
    }

    public function getGatheringItem1(): ?GatheringItem
    {
        return $this->gatheringItem1;
    }

    public function setGatheringItem1(?GatheringItem $gatheringItem1): self
    {
        $this->gatheringItem1 = $gatheringItem1;

        return $this;
    }

    public function getGatheringItem0(): ?GatheringItem
    {
        return $this->gatheringItem0;
    }

    public function setGatheringItem0(?GatheringItem $gatheringItem0): self
    {
        $this->gatheringItem0 = $gatheringItem0;

        return $this;
    }
}
