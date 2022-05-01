<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LotteryExchangeShop.
 *
 * @ORM\Table(name="lottery_exchange_shop", indexes={@ORM\Index(name="idx_5e477a2b5aa00453", columns={"item_accepted_13"}), @ORM\Index(name="idx_5e477a2b76e09389", columns={"item_accepted_27"}), @ORM\Index(name="idx_5e477a2befe9c233", columns={"item_accepted_24"}), @ORM\Index(name="idx_5e477a2bb4ae657f", columns={"item_accepted_11"}), @ORM\Index(name="idx_5e477a2b869807fd", columns={"item_accepted_31"}), @ORM\Index(name="idx_5e477a2bddb6087d", columns={"item_accepted_0"}), @ORM\Index(name="idx_5e477a2b34d5ad48", columns={"item_accepted_6"}), @ORM\Index(name="idx_5e477a2b718d5790", columns={"item_accepted_23"}), @ORM\Index(name="idx_5e477a2b9158be8e", columns={"item_accepted_29"}), @ORM\Index(name="idx_5e477a2b2c517d42", columns={"log_message_2"}), @ORM\Index(name="idx_5e477a2b68a6706", columns={"item_accepted_22"}), @ORM\Index(name="idx_5e477a2b33b86951", columns={"item_accepted_2"}), @ORM\Index(name="idx_5e477a2baddcfcf2", columns={"item_accepted_5"}), @ORM\Index(name="idx_5e477a2bba75ed4d", columns={"item_accepted_19"}), @ORM\Index(name="idx_5e477a2ba46ab0d9", columns={"item_accepted_9"}), @ORM\Index(name="idx_5e477a2bc4c491f0", columns={"item_accepted_14"}), @ORM\Index(name="idx_5e477a2b1e7a31f", columns={"item_accepted_26"}), @ORM\Index(name="idx_5e477a2bcd72dddb", columns={"item_accepted_18"}), @ORM\Index(name="idx_5e477a2b44bf59c7", columns={"item_accepted_3"}), @ORM\Index(name="idx_5e477a2be884062a", columns={"item_accepted_20"}), @ORM\Index(name="idx_5e477a2b5dcdc04a", columns={"item_accepted_17"}), @ORM\Index(name="idx_5e477a2b98eef2a5", columns={"item_accepted_25"}), @ORM\Index(name="idx_5e477a2bb5582cf8", columns={"log_message_1"}), @ORM\Index(name="idx_5e477a2bf19f376b", columns={"item_accepted_30"}), @ORM\Index(name="idx_5e477a2bd36d804f", columns={"item_accepted_8"}), @ORM\Index(name="idx_5e477a2bb3c3a166", columns={"item_accepted_15"}), @ORM\Index(name="idx_5e477a2bdadbcc64", columns={"item_accepted_4"}), @ORM\Index(name="idx_5e477a2b43d29dde", columns={"item_accepted_7"}), @ORM\Index(name="idx_5e477a2baab138eb", columns={"item_accepted_1"}), @ORM\Index(name="idx_5e477a2bc3a955e9", columns={"item_accepted_10"}), @ORM\Index(name="idx_5e477a2b2da734c5", columns={"item_accepted_12"}), @ORM\Index(name="idx_5e477a2b2acaf0dc", columns={"item_accepted_16"}), @ORM\Index(name="idx_5e477a2be65f8e18", columns={"item_accepted_28"}), @ORM\Index(name="idx_5e477a2bc25f1c6e", columns={"log_message_0"}), @ORM\Index(name="idx_5e477a2b9f8336bc", columns={"item_accepted_21"})})
 * @ORM\Entity
 */
class LotteryExchangeShop
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="lottery_exchange_shop_pk_seq", allocationSize=1, initialValue=1)
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
     * @ORM\Column(name="amount_accepted_0", type="bigint", nullable=true)
     */
    private $amountAccepted0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_accepted_1", type="bigint", nullable=true)
     */
    private $amountAccepted1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_accepted_2", type="bigint", nullable=true)
     */
    private $amountAccepted2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_accepted_3", type="bigint", nullable=true)
     */
    private $amountAccepted3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_accepted_4", type="bigint", nullable=true)
     */
    private $amountAccepted4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_accepted_5", type="bigint", nullable=true)
     */
    private $amountAccepted5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_accepted_6", type="bigint", nullable=true)
     */
    private $amountAccepted6;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_accepted_7", type="bigint", nullable=true)
     */
    private $amountAccepted7;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_accepted_8", type="bigint", nullable=true)
     */
    private $amountAccepted8;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_accepted_9", type="bigint", nullable=true)
     */
    private $amountAccepted9;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_accepted_10", type="bigint", nullable=true)
     */
    private $amountAccepted10;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_accepted_11", type="bigint", nullable=true)
     */
    private $amountAccepted11;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_accepted_12", type="bigint", nullable=true)
     */
    private $amountAccepted12;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_accepted_13", type="bigint", nullable=true)
     */
    private $amountAccepted13;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_accepted_14", type="bigint", nullable=true)
     */
    private $amountAccepted14;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_accepted_15", type="bigint", nullable=true)
     */
    private $amountAccepted15;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_accepted_16", type="bigint", nullable=true)
     */
    private $amountAccepted16;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_accepted_17", type="bigint", nullable=true)
     */
    private $amountAccepted17;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_accepted_18", type="bigint", nullable=true)
     */
    private $amountAccepted18;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_accepted_19", type="bigint", nullable=true)
     */
    private $amountAccepted19;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_accepted_20", type="bigint", nullable=true)
     */
    private $amountAccepted20;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_accepted_21", type="bigint", nullable=true)
     */
    private $amountAccepted21;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_accepted_22", type="bigint", nullable=true)
     */
    private $amountAccepted22;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_accepted_23", type="bigint", nullable=true)
     */
    private $amountAccepted23;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_accepted_24", type="bigint", nullable=true)
     */
    private $amountAccepted24;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_accepted_25", type="bigint", nullable=true)
     */
    private $amountAccepted25;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_accepted_26", type="bigint", nullable=true)
     */
    private $amountAccepted26;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_accepted_27", type="bigint", nullable=true)
     */
    private $amountAccepted27;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_accepted_28", type="bigint", nullable=true)
     */
    private $amountAccepted28;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_accepted_29", type="bigint", nullable=true)
     */
    private $amountAccepted29;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_accepted_30", type="bigint", nullable=true)
     */
    private $amountAccepted30;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_accepted_31", type="bigint", nullable=true)
     */
    private $amountAccepted31;

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
     * @var string|null
     *
     * @ORM\Column(name="lua", type="string", length=255, nullable=true)
     */
    private $lua;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_134", type="boolean", nullable=true)
     */
    private $column134;

    /**
     * @var LogMessage
     *
     * @ORM\ManyToOne(targetEntity="LogMessage")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="log_message_2", referencedColumnName="pk")
     * })
     */
    private $logMessage2;

    /**
     * @var LogMessage
     *
     * @ORM\ManyToOne(targetEntity="LogMessage")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="log_message_1", referencedColumnName="pk")
     * })
     */
    private $logMessage1;

    /**
     * @var LogMessage
     *
     * @ORM\ManyToOne(targetEntity="LogMessage")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="log_message_0", referencedColumnName="pk")
     * })
     */
    private $logMessage0;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_accepted_31", referencedColumnName="pk")
     * })
     */
    private $itemAccepted31;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_accepted_30", referencedColumnName="pk")
     * })
     */
    private $itemAccepted30;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_accepted_29", referencedColumnName="pk")
     * })
     */
    private $itemAccepted29;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_accepted_28", referencedColumnName="pk")
     * })
     */
    private $itemAccepted28;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_accepted_27", referencedColumnName="pk")
     * })
     */
    private $itemAccepted27;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_accepted_26", referencedColumnName="pk")
     * })
     */
    private $itemAccepted26;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_accepted_25", referencedColumnName="pk")
     * })
     */
    private $itemAccepted25;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_accepted_24", referencedColumnName="pk")
     * })
     */
    private $itemAccepted24;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_accepted_23", referencedColumnName="pk")
     * })
     */
    private $itemAccepted23;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_accepted_22", referencedColumnName="pk")
     * })
     */
    private $itemAccepted22;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_accepted_21", referencedColumnName="pk")
     * })
     */
    private $itemAccepted21;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_accepted_20", referencedColumnName="pk")
     * })
     */
    private $itemAccepted20;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_accepted_19", referencedColumnName="pk")
     * })
     */
    private $itemAccepted19;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_accepted_18", referencedColumnName="pk")
     * })
     */
    private $itemAccepted18;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_accepted_17", referencedColumnName="pk")
     * })
     */
    private $itemAccepted17;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_accepted_16", referencedColumnName="pk")
     * })
     */
    private $itemAccepted16;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_accepted_15", referencedColumnName="pk")
     * })
     */
    private $itemAccepted15;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_accepted_14", referencedColumnName="pk")
     * })
     */
    private $itemAccepted14;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_accepted_13", referencedColumnName="pk")
     * })
     */
    private $itemAccepted13;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_accepted_12", referencedColumnName="pk")
     * })
     */
    private $itemAccepted12;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_accepted_11", referencedColumnName="pk")
     * })
     */
    private $itemAccepted11;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_accepted_10", referencedColumnName="pk")
     * })
     */
    private $itemAccepted10;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_accepted_9", referencedColumnName="pk")
     * })
     */
    private $itemAccepted9;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_accepted_8", referencedColumnName="pk")
     * })
     */
    private $itemAccepted8;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_accepted_7", referencedColumnName="pk")
     * })
     */
    private $itemAccepted7;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_accepted_6", referencedColumnName="pk")
     * })
     */
    private $itemAccepted6;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_accepted_5", referencedColumnName="pk")
     * })
     */
    private $itemAccepted5;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_accepted_4", referencedColumnName="pk")
     * })
     */
    private $itemAccepted4;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_accepted_3", referencedColumnName="pk")
     * })
     */
    private $itemAccepted3;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_accepted_2", referencedColumnName="pk")
     * })
     */
    private $itemAccepted2;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_accepted_1", referencedColumnName="pk")
     * })
     */
    private $itemAccepted1;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_accepted_0", referencedColumnName="pk")
     * })
     */
    private $itemAccepted0;

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

    public function getAmountAccepted0(): ?string
    {
        return $this->amountAccepted0;
    }

    public function setAmountAccepted0(?string $amountAccepted0): self
    {
        $this->amountAccepted0 = $amountAccepted0;

        return $this;
    }

    public function getAmountAccepted1(): ?string
    {
        return $this->amountAccepted1;
    }

    public function setAmountAccepted1(?string $amountAccepted1): self
    {
        $this->amountAccepted1 = $amountAccepted1;

        return $this;
    }

    public function getAmountAccepted2(): ?string
    {
        return $this->amountAccepted2;
    }

    public function setAmountAccepted2(?string $amountAccepted2): self
    {
        $this->amountAccepted2 = $amountAccepted2;

        return $this;
    }

    public function getAmountAccepted3(): ?string
    {
        return $this->amountAccepted3;
    }

    public function setAmountAccepted3(?string $amountAccepted3): self
    {
        $this->amountAccepted3 = $amountAccepted3;

        return $this;
    }

    public function getAmountAccepted4(): ?string
    {
        return $this->amountAccepted4;
    }

    public function setAmountAccepted4(?string $amountAccepted4): self
    {
        $this->amountAccepted4 = $amountAccepted4;

        return $this;
    }

    public function getAmountAccepted5(): ?string
    {
        return $this->amountAccepted5;
    }

    public function setAmountAccepted5(?string $amountAccepted5): self
    {
        $this->amountAccepted5 = $amountAccepted5;

        return $this;
    }

    public function getAmountAccepted6(): ?string
    {
        return $this->amountAccepted6;
    }

    public function setAmountAccepted6(?string $amountAccepted6): self
    {
        $this->amountAccepted6 = $amountAccepted6;

        return $this;
    }

    public function getAmountAccepted7(): ?string
    {
        return $this->amountAccepted7;
    }

    public function setAmountAccepted7(?string $amountAccepted7): self
    {
        $this->amountAccepted7 = $amountAccepted7;

        return $this;
    }

    public function getAmountAccepted8(): ?string
    {
        return $this->amountAccepted8;
    }

    public function setAmountAccepted8(?string $amountAccepted8): self
    {
        $this->amountAccepted8 = $amountAccepted8;

        return $this;
    }

    public function getAmountAccepted9(): ?string
    {
        return $this->amountAccepted9;
    }

    public function setAmountAccepted9(?string $amountAccepted9): self
    {
        $this->amountAccepted9 = $amountAccepted9;

        return $this;
    }

    public function getAmountAccepted10(): ?string
    {
        return $this->amountAccepted10;
    }

    public function setAmountAccepted10(?string $amountAccepted10): self
    {
        $this->amountAccepted10 = $amountAccepted10;

        return $this;
    }

    public function getAmountAccepted11(): ?string
    {
        return $this->amountAccepted11;
    }

    public function setAmountAccepted11(?string $amountAccepted11): self
    {
        $this->amountAccepted11 = $amountAccepted11;

        return $this;
    }

    public function getAmountAccepted12(): ?string
    {
        return $this->amountAccepted12;
    }

    public function setAmountAccepted12(?string $amountAccepted12): self
    {
        $this->amountAccepted12 = $amountAccepted12;

        return $this;
    }

    public function getAmountAccepted13(): ?string
    {
        return $this->amountAccepted13;
    }

    public function setAmountAccepted13(?string $amountAccepted13): self
    {
        $this->amountAccepted13 = $amountAccepted13;

        return $this;
    }

    public function getAmountAccepted14(): ?string
    {
        return $this->amountAccepted14;
    }

    public function setAmountAccepted14(?string $amountAccepted14): self
    {
        $this->amountAccepted14 = $amountAccepted14;

        return $this;
    }

    public function getAmountAccepted15(): ?string
    {
        return $this->amountAccepted15;
    }

    public function setAmountAccepted15(?string $amountAccepted15): self
    {
        $this->amountAccepted15 = $amountAccepted15;

        return $this;
    }

    public function getAmountAccepted16(): ?string
    {
        return $this->amountAccepted16;
    }

    public function setAmountAccepted16(?string $amountAccepted16): self
    {
        $this->amountAccepted16 = $amountAccepted16;

        return $this;
    }

    public function getAmountAccepted17(): ?string
    {
        return $this->amountAccepted17;
    }

    public function setAmountAccepted17(?string $amountAccepted17): self
    {
        $this->amountAccepted17 = $amountAccepted17;

        return $this;
    }

    public function getAmountAccepted18(): ?string
    {
        return $this->amountAccepted18;
    }

    public function setAmountAccepted18(?string $amountAccepted18): self
    {
        $this->amountAccepted18 = $amountAccepted18;

        return $this;
    }

    public function getAmountAccepted19(): ?string
    {
        return $this->amountAccepted19;
    }

    public function setAmountAccepted19(?string $amountAccepted19): self
    {
        $this->amountAccepted19 = $amountAccepted19;

        return $this;
    }

    public function getAmountAccepted20(): ?string
    {
        return $this->amountAccepted20;
    }

    public function setAmountAccepted20(?string $amountAccepted20): self
    {
        $this->amountAccepted20 = $amountAccepted20;

        return $this;
    }

    public function getAmountAccepted21(): ?string
    {
        return $this->amountAccepted21;
    }

    public function setAmountAccepted21(?string $amountAccepted21): self
    {
        $this->amountAccepted21 = $amountAccepted21;

        return $this;
    }

    public function getAmountAccepted22(): ?string
    {
        return $this->amountAccepted22;
    }

    public function setAmountAccepted22(?string $amountAccepted22): self
    {
        $this->amountAccepted22 = $amountAccepted22;

        return $this;
    }

    public function getAmountAccepted23(): ?string
    {
        return $this->amountAccepted23;
    }

    public function setAmountAccepted23(?string $amountAccepted23): self
    {
        $this->amountAccepted23 = $amountAccepted23;

        return $this;
    }

    public function getAmountAccepted24(): ?string
    {
        return $this->amountAccepted24;
    }

    public function setAmountAccepted24(?string $amountAccepted24): self
    {
        $this->amountAccepted24 = $amountAccepted24;

        return $this;
    }

    public function getAmountAccepted25(): ?string
    {
        return $this->amountAccepted25;
    }

    public function setAmountAccepted25(?string $amountAccepted25): self
    {
        $this->amountAccepted25 = $amountAccepted25;

        return $this;
    }

    public function getAmountAccepted26(): ?string
    {
        return $this->amountAccepted26;
    }

    public function setAmountAccepted26(?string $amountAccepted26): self
    {
        $this->amountAccepted26 = $amountAccepted26;

        return $this;
    }

    public function getAmountAccepted27(): ?string
    {
        return $this->amountAccepted27;
    }

    public function setAmountAccepted27(?string $amountAccepted27): self
    {
        $this->amountAccepted27 = $amountAccepted27;

        return $this;
    }

    public function getAmountAccepted28(): ?string
    {
        return $this->amountAccepted28;
    }

    public function setAmountAccepted28(?string $amountAccepted28): self
    {
        $this->amountAccepted28 = $amountAccepted28;

        return $this;
    }

    public function getAmountAccepted29(): ?string
    {
        return $this->amountAccepted29;
    }

    public function setAmountAccepted29(?string $amountAccepted29): self
    {
        $this->amountAccepted29 = $amountAccepted29;

        return $this;
    }

    public function getAmountAccepted30(): ?string
    {
        return $this->amountAccepted30;
    }

    public function setAmountAccepted30(?string $amountAccepted30): self
    {
        $this->amountAccepted30 = $amountAccepted30;

        return $this;
    }

    public function getAmountAccepted31(): ?string
    {
        return $this->amountAccepted31;
    }

    public function setAmountAccepted31(?string $amountAccepted31): self
    {
        $this->amountAccepted31 = $amountAccepted31;

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

    public function getLua(): ?string
    {
        return $this->lua;
    }

    public function setLua(?string $lua): self
    {
        $this->lua = $lua;

        return $this;
    }

    public function getColumn134(): ?bool
    {
        return $this->column134;
    }

    public function setColumn134(?bool $column134): self
    {
        $this->column134 = $column134;

        return $this;
    }

    public function getLogMessage2(): ?LogMessage
    {
        return $this->logMessage2;
    }

    public function setLogMessage2(?LogMessage $logMessage2): self
    {
        $this->logMessage2 = $logMessage2;

        return $this;
    }

    public function getLogMessage1(): ?LogMessage
    {
        return $this->logMessage1;
    }

    public function setLogMessage1(?LogMessage $logMessage1): self
    {
        $this->logMessage1 = $logMessage1;

        return $this;
    }

    public function getLogMessage0(): ?LogMessage
    {
        return $this->logMessage0;
    }

    public function setLogMessage0(?LogMessage $logMessage0): self
    {
        $this->logMessage0 = $logMessage0;

        return $this;
    }

    public function getItemAccepted31(): ?Item
    {
        return $this->itemAccepted31;
    }

    public function setItemAccepted31(?Item $itemAccepted31): self
    {
        $this->itemAccepted31 = $itemAccepted31;

        return $this;
    }

    public function getItemAccepted30(): ?Item
    {
        return $this->itemAccepted30;
    }

    public function setItemAccepted30(?Item $itemAccepted30): self
    {
        $this->itemAccepted30 = $itemAccepted30;

        return $this;
    }

    public function getItemAccepted29(): ?Item
    {
        return $this->itemAccepted29;
    }

    public function setItemAccepted29(?Item $itemAccepted29): self
    {
        $this->itemAccepted29 = $itemAccepted29;

        return $this;
    }

    public function getItemAccepted28(): ?Item
    {
        return $this->itemAccepted28;
    }

    public function setItemAccepted28(?Item $itemAccepted28): self
    {
        $this->itemAccepted28 = $itemAccepted28;

        return $this;
    }

    public function getItemAccepted27(): ?Item
    {
        return $this->itemAccepted27;
    }

    public function setItemAccepted27(?Item $itemAccepted27): self
    {
        $this->itemAccepted27 = $itemAccepted27;

        return $this;
    }

    public function getItemAccepted26(): ?Item
    {
        return $this->itemAccepted26;
    }

    public function setItemAccepted26(?Item $itemAccepted26): self
    {
        $this->itemAccepted26 = $itemAccepted26;

        return $this;
    }

    public function getItemAccepted25(): ?Item
    {
        return $this->itemAccepted25;
    }

    public function setItemAccepted25(?Item $itemAccepted25): self
    {
        $this->itemAccepted25 = $itemAccepted25;

        return $this;
    }

    public function getItemAccepted24(): ?Item
    {
        return $this->itemAccepted24;
    }

    public function setItemAccepted24(?Item $itemAccepted24): self
    {
        $this->itemAccepted24 = $itemAccepted24;

        return $this;
    }

    public function getItemAccepted23(): ?Item
    {
        return $this->itemAccepted23;
    }

    public function setItemAccepted23(?Item $itemAccepted23): self
    {
        $this->itemAccepted23 = $itemAccepted23;

        return $this;
    }

    public function getItemAccepted22(): ?Item
    {
        return $this->itemAccepted22;
    }

    public function setItemAccepted22(?Item $itemAccepted22): self
    {
        $this->itemAccepted22 = $itemAccepted22;

        return $this;
    }

    public function getItemAccepted21(): ?Item
    {
        return $this->itemAccepted21;
    }

    public function setItemAccepted21(?Item $itemAccepted21): self
    {
        $this->itemAccepted21 = $itemAccepted21;

        return $this;
    }

    public function getItemAccepted20(): ?Item
    {
        return $this->itemAccepted20;
    }

    public function setItemAccepted20(?Item $itemAccepted20): self
    {
        $this->itemAccepted20 = $itemAccepted20;

        return $this;
    }

    public function getItemAccepted19(): ?Item
    {
        return $this->itemAccepted19;
    }

    public function setItemAccepted19(?Item $itemAccepted19): self
    {
        $this->itemAccepted19 = $itemAccepted19;

        return $this;
    }

    public function getItemAccepted18(): ?Item
    {
        return $this->itemAccepted18;
    }

    public function setItemAccepted18(?Item $itemAccepted18): self
    {
        $this->itemAccepted18 = $itemAccepted18;

        return $this;
    }

    public function getItemAccepted17(): ?Item
    {
        return $this->itemAccepted17;
    }

    public function setItemAccepted17(?Item $itemAccepted17): self
    {
        $this->itemAccepted17 = $itemAccepted17;

        return $this;
    }

    public function getItemAccepted16(): ?Item
    {
        return $this->itemAccepted16;
    }

    public function setItemAccepted16(?Item $itemAccepted16): self
    {
        $this->itemAccepted16 = $itemAccepted16;

        return $this;
    }

    public function getItemAccepted15(): ?Item
    {
        return $this->itemAccepted15;
    }

    public function setItemAccepted15(?Item $itemAccepted15): self
    {
        $this->itemAccepted15 = $itemAccepted15;

        return $this;
    }

    public function getItemAccepted14(): ?Item
    {
        return $this->itemAccepted14;
    }

    public function setItemAccepted14(?Item $itemAccepted14): self
    {
        $this->itemAccepted14 = $itemAccepted14;

        return $this;
    }

    public function getItemAccepted13(): ?Item
    {
        return $this->itemAccepted13;
    }

    public function setItemAccepted13(?Item $itemAccepted13): self
    {
        $this->itemAccepted13 = $itemAccepted13;

        return $this;
    }

    public function getItemAccepted12(): ?Item
    {
        return $this->itemAccepted12;
    }

    public function setItemAccepted12(?Item $itemAccepted12): self
    {
        $this->itemAccepted12 = $itemAccepted12;

        return $this;
    }

    public function getItemAccepted11(): ?Item
    {
        return $this->itemAccepted11;
    }

    public function setItemAccepted11(?Item $itemAccepted11): self
    {
        $this->itemAccepted11 = $itemAccepted11;

        return $this;
    }

    public function getItemAccepted10(): ?Item
    {
        return $this->itemAccepted10;
    }

    public function setItemAccepted10(?Item $itemAccepted10): self
    {
        $this->itemAccepted10 = $itemAccepted10;

        return $this;
    }

    public function getItemAccepted9(): ?Item
    {
        return $this->itemAccepted9;
    }

    public function setItemAccepted9(?Item $itemAccepted9): self
    {
        $this->itemAccepted9 = $itemAccepted9;

        return $this;
    }

    public function getItemAccepted8(): ?Item
    {
        return $this->itemAccepted8;
    }

    public function setItemAccepted8(?Item $itemAccepted8): self
    {
        $this->itemAccepted8 = $itemAccepted8;

        return $this;
    }

    public function getItemAccepted7(): ?Item
    {
        return $this->itemAccepted7;
    }

    public function setItemAccepted7(?Item $itemAccepted7): self
    {
        $this->itemAccepted7 = $itemAccepted7;

        return $this;
    }

    public function getItemAccepted6(): ?Item
    {
        return $this->itemAccepted6;
    }

    public function setItemAccepted6(?Item $itemAccepted6): self
    {
        $this->itemAccepted6 = $itemAccepted6;

        return $this;
    }

    public function getItemAccepted5(): ?Item
    {
        return $this->itemAccepted5;
    }

    public function setItemAccepted5(?Item $itemAccepted5): self
    {
        $this->itemAccepted5 = $itemAccepted5;

        return $this;
    }

    public function getItemAccepted4(): ?Item
    {
        return $this->itemAccepted4;
    }

    public function setItemAccepted4(?Item $itemAccepted4): self
    {
        $this->itemAccepted4 = $itemAccepted4;

        return $this;
    }

    public function getItemAccepted3(): ?Item
    {
        return $this->itemAccepted3;
    }

    public function setItemAccepted3(?Item $itemAccepted3): self
    {
        $this->itemAccepted3 = $itemAccepted3;

        return $this;
    }

    public function getItemAccepted2(): ?Item
    {
        return $this->itemAccepted2;
    }

    public function setItemAccepted2(?Item $itemAccepted2): self
    {
        $this->itemAccepted2 = $itemAccepted2;

        return $this;
    }

    public function getItemAccepted1(): ?Item
    {
        return $this->itemAccepted1;
    }

    public function setItemAccepted1(?Item $itemAccepted1): self
    {
        $this->itemAccepted1 = $itemAccepted1;

        return $this;
    }

    public function getItemAccepted0(): ?Item
    {
        return $this->itemAccepted0;
    }

    public function setItemAccepted0(?Item $itemAccepted0): self
    {
        $this->itemAccepted0 = $itemAccepted0;

        return $this;
    }
}
