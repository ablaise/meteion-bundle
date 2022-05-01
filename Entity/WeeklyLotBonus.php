<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WeeklyLotBonus.
 *
 * @ORM\Table(name="weekly_lot_bonus", indexes={@ORM\Index(name="idx_b128e908af042a12", columns={"weekly_lot_bonus_threshold_8"}), @ORM\Index(name="idx_b128e9083f6cb43f", columns={"weekly_lot_bonus_threshold_16"}), @ORM\Index(name="idx_b128e9088d48b646", columns={"weekly_lot_bonus_threshold_25"}), @ORM\Index(name="idx_b128e9081441e7fc", columns={"weekly_lot_bonus_threshold_26"}), @ORM\Index(name="idx_b128e908132c23e5", columns={"weekly_lot_bonus_threshold_22"}), @ORM\Index(name="idx_b128e908642b1373", columns={"weekly_lot_bonus_threshold_23"}), @ORM\Index(name="idx_b128e908fa4f86d0", columns={"weekly_lot_bonus_threshold_24"}), @ORM\Index(name="idx_b128e908a108219c", columns={"weekly_lot_bonus_threshold_11"}), @ORM\Index(name="idx_b128e908d162d513", columns={"weekly_lot_bonus_threshold_14"}), @ORM\Index(name="idx_b128e908a1dfa220", columns={"weekly_lot_bonus_threshold_0"}), @ORM\Index(name="idx_b128e908d1b556af", columns={"weekly_lot_bonus_threshold_5"}), @ORM\Index(name="idx_b128e908e4397388", columns={"weekly_lot_bonus_threshold_30"}), @ORM\Index(name="idx_b128e9083fbb3783", columns={"weekly_lot_bonus_threshold_7"}), @ORM\Index(name="idx_b128e9084f0640b0", columns={"weekly_lot_bonus_threshold_13"}), @ORM\Index(name="idx_b128e9088a25725f", columns={"weekly_lot_bonus_threshold_21"}), @ORM\Index(name="idx_b128e908d8d49938", columns={"weekly_lot_bonus_threshold_18"}), @ORM\Index(name="idx_b128e9084fd1c30c", columns={"weekly_lot_bonus_threshold_2"}), @ORM\Index(name="idx_b128e908f3f9cafb", columns={"weekly_lot_bonus_threshold_28"}), @ORM\Index(name="idx_b128e908d6d892b6", columns={"weekly_lot_bonus_threshold_1"}), @ORM\Index(name="idx_b128e908d8031a84", columns={"weekly_lot_bonus_threshold_9"}), @ORM\Index(name="idx_b128e908afd3a9ae", columns={"weekly_lot_bonus_threshold_19"}), @ORM\Index(name="idx_b128e9086346d76a", columns={"weekly_lot_bonus_threshold_27"}), @ORM\Index(name="idx_b128e908a665e585", columns={"weekly_lot_bonus_threshold_15"}), @ORM\Index(name="idx_b128e90848bc0715", columns={"weekly_lot_bonus_threshold_6"}), @ORM\Index(name="idx_b128e908fd2242c9", columns={"weekly_lot_bonus_threshold_20"}), @ORM\Index(name="idx_b128e90884fefa6d", columns={"weekly_lot_bonus_threshold_29"}), @ORM\Index(name="idx_b128e908d60f110a", columns={"weekly_lot_bonus_threshold_10"}), @ORM\Index(name="idx_b128e90838017026", columns={"weekly_lot_bonus_threshold_12"}), @ORM\Index(name="idx_b128e90838d6f39a", columns={"weekly_lot_bonus_threshold_3"}), @ORM\Index(name="idx_b128e908a6b26639", columns={"weekly_lot_bonus_threshold_4"}), @ORM\Index(name="idx_b128e908486b84a9", columns={"weekly_lot_bonus_threshold_17"})})
 * @ORM\Entity
 */
class WeeklyLotBonus
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="weekly_lot_bonus_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

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
     * @var WeeklyLotBonusThreshold
     *
     * @ORM\ManyToOne(targetEntity="WeeklyLotBonusThreshold")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="weekly_lot_bonus_threshold_30", referencedColumnName="pk")
     * })
     */
    private $weeklyLotBonusThreshold30;

    /**
     * @var WeeklyLotBonusThreshold
     *
     * @ORM\ManyToOne(targetEntity="WeeklyLotBonusThreshold")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="weekly_lot_bonus_threshold_29", referencedColumnName="pk")
     * })
     */
    private $weeklyLotBonusThreshold29;

    /**
     * @var WeeklyLotBonusThreshold
     *
     * @ORM\ManyToOne(targetEntity="WeeklyLotBonusThreshold")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="weekly_lot_bonus_threshold_28", referencedColumnName="pk")
     * })
     */
    private $weeklyLotBonusThreshold28;

    /**
     * @var WeeklyLotBonusThreshold
     *
     * @ORM\ManyToOne(targetEntity="WeeklyLotBonusThreshold")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="weekly_lot_bonus_threshold_27", referencedColumnName="pk")
     * })
     */
    private $weeklyLotBonusThreshold27;

    /**
     * @var WeeklyLotBonusThreshold
     *
     * @ORM\ManyToOne(targetEntity="WeeklyLotBonusThreshold")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="weekly_lot_bonus_threshold_26", referencedColumnName="pk")
     * })
     */
    private $weeklyLotBonusThreshold26;

    /**
     * @var WeeklyLotBonusThreshold
     *
     * @ORM\ManyToOne(targetEntity="WeeklyLotBonusThreshold")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="weekly_lot_bonus_threshold_25", referencedColumnName="pk")
     * })
     */
    private $weeklyLotBonusThreshold25;

    /**
     * @var WeeklyLotBonusThreshold
     *
     * @ORM\ManyToOne(targetEntity="WeeklyLotBonusThreshold")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="weekly_lot_bonus_threshold_24", referencedColumnName="pk")
     * })
     */
    private $weeklyLotBonusThreshold24;

    /**
     * @var WeeklyLotBonusThreshold
     *
     * @ORM\ManyToOne(targetEntity="WeeklyLotBonusThreshold")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="weekly_lot_bonus_threshold_23", referencedColumnName="pk")
     * })
     */
    private $weeklyLotBonusThreshold23;

    /**
     * @var WeeklyLotBonusThreshold
     *
     * @ORM\ManyToOne(targetEntity="WeeklyLotBonusThreshold")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="weekly_lot_bonus_threshold_22", referencedColumnName="pk")
     * })
     */
    private $weeklyLotBonusThreshold22;

    /**
     * @var WeeklyLotBonusThreshold
     *
     * @ORM\ManyToOne(targetEntity="WeeklyLotBonusThreshold")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="weekly_lot_bonus_threshold_21", referencedColumnName="pk")
     * })
     */
    private $weeklyLotBonusThreshold21;

    /**
     * @var WeeklyLotBonusThreshold
     *
     * @ORM\ManyToOne(targetEntity="WeeklyLotBonusThreshold")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="weekly_lot_bonus_threshold_20", referencedColumnName="pk")
     * })
     */
    private $weeklyLotBonusThreshold20;

    /**
     * @var WeeklyLotBonusThreshold
     *
     * @ORM\ManyToOne(targetEntity="WeeklyLotBonusThreshold")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="weekly_lot_bonus_threshold_19", referencedColumnName="pk")
     * })
     */
    private $weeklyLotBonusThreshold19;

    /**
     * @var WeeklyLotBonusThreshold
     *
     * @ORM\ManyToOne(targetEntity="WeeklyLotBonusThreshold")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="weekly_lot_bonus_threshold_18", referencedColumnName="pk")
     * })
     */
    private $weeklyLotBonusThreshold18;

    /**
     * @var WeeklyLotBonusThreshold
     *
     * @ORM\ManyToOne(targetEntity="WeeklyLotBonusThreshold")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="weekly_lot_bonus_threshold_17", referencedColumnName="pk")
     * })
     */
    private $weeklyLotBonusThreshold17;

    /**
     * @var WeeklyLotBonusThreshold
     *
     * @ORM\ManyToOne(targetEntity="WeeklyLotBonusThreshold")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="weekly_lot_bonus_threshold_16", referencedColumnName="pk")
     * })
     */
    private $weeklyLotBonusThreshold16;

    /**
     * @var WeeklyLotBonusThreshold
     *
     * @ORM\ManyToOne(targetEntity="WeeklyLotBonusThreshold")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="weekly_lot_bonus_threshold_15", referencedColumnName="pk")
     * })
     */
    private $weeklyLotBonusThreshold15;

    /**
     * @var WeeklyLotBonusThreshold
     *
     * @ORM\ManyToOne(targetEntity="WeeklyLotBonusThreshold")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="weekly_lot_bonus_threshold_14", referencedColumnName="pk")
     * })
     */
    private $weeklyLotBonusThreshold14;

    /**
     * @var WeeklyLotBonusThreshold
     *
     * @ORM\ManyToOne(targetEntity="WeeklyLotBonusThreshold")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="weekly_lot_bonus_threshold_13", referencedColumnName="pk")
     * })
     */
    private $weeklyLotBonusThreshold13;

    /**
     * @var WeeklyLotBonusThreshold
     *
     * @ORM\ManyToOne(targetEntity="WeeklyLotBonusThreshold")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="weekly_lot_bonus_threshold_12", referencedColumnName="pk")
     * })
     */
    private $weeklyLotBonusThreshold12;

    /**
     * @var WeeklyLotBonusThreshold
     *
     * @ORM\ManyToOne(targetEntity="WeeklyLotBonusThreshold")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="weekly_lot_bonus_threshold_11", referencedColumnName="pk")
     * })
     */
    private $weeklyLotBonusThreshold11;

    /**
     * @var WeeklyLotBonusThreshold
     *
     * @ORM\ManyToOne(targetEntity="WeeklyLotBonusThreshold")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="weekly_lot_bonus_threshold_10", referencedColumnName="pk")
     * })
     */
    private $weeklyLotBonusThreshold10;

    /**
     * @var WeeklyLotBonusThreshold
     *
     * @ORM\ManyToOne(targetEntity="WeeklyLotBonusThreshold")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="weekly_lot_bonus_threshold_9", referencedColumnName="pk")
     * })
     */
    private $weeklyLotBonusThreshold9;

    /**
     * @var WeeklyLotBonusThreshold
     *
     * @ORM\ManyToOne(targetEntity="WeeklyLotBonusThreshold")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="weekly_lot_bonus_threshold_8", referencedColumnName="pk")
     * })
     */
    private $weeklyLotBonusThreshold8;

    /**
     * @var WeeklyLotBonusThreshold
     *
     * @ORM\ManyToOne(targetEntity="WeeklyLotBonusThreshold")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="weekly_lot_bonus_threshold_7", referencedColumnName="pk")
     * })
     */
    private $weeklyLotBonusThreshold7;

    /**
     * @var WeeklyLotBonusThreshold
     *
     * @ORM\ManyToOne(targetEntity="WeeklyLotBonusThreshold")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="weekly_lot_bonus_threshold_6", referencedColumnName="pk")
     * })
     */
    private $weeklyLotBonusThreshold6;

    /**
     * @var WeeklyLotBonusThreshold
     *
     * @ORM\ManyToOne(targetEntity="WeeklyLotBonusThreshold")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="weekly_lot_bonus_threshold_5", referencedColumnName="pk")
     * })
     */
    private $weeklyLotBonusThreshold5;

    /**
     * @var WeeklyLotBonusThreshold
     *
     * @ORM\ManyToOne(targetEntity="WeeklyLotBonusThreshold")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="weekly_lot_bonus_threshold_4", referencedColumnName="pk")
     * })
     */
    private $weeklyLotBonusThreshold4;

    /**
     * @var WeeklyLotBonusThreshold
     *
     * @ORM\ManyToOne(targetEntity="WeeklyLotBonusThreshold")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="weekly_lot_bonus_threshold_3", referencedColumnName="pk")
     * })
     */
    private $weeklyLotBonusThreshold3;

    /**
     * @var WeeklyLotBonusThreshold
     *
     * @ORM\ManyToOne(targetEntity="WeeklyLotBonusThreshold")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="weekly_lot_bonus_threshold_2", referencedColumnName="pk")
     * })
     */
    private $weeklyLotBonusThreshold2;

    /**
     * @var WeeklyLotBonusThreshold
     *
     * @ORM\ManyToOne(targetEntity="WeeklyLotBonusThreshold")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="weekly_lot_bonus_threshold_1", referencedColumnName="pk")
     * })
     */
    private $weeklyLotBonusThreshold1;

    /**
     * @var WeeklyLotBonusThreshold
     *
     * @ORM\ManyToOne(targetEntity="WeeklyLotBonusThreshold")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="weekly_lot_bonus_threshold_0", referencedColumnName="pk")
     * })
     */
    private $weeklyLotBonusThreshold0;

    public function getPk(): ?int
    {
        return $this->pk;
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

    public function getWeeklyLotBonusThreshold30(): ?WeeklyLotBonusThreshold
    {
        return $this->weeklyLotBonusThreshold30;
    }

    public function setWeeklyLotBonusThreshold30(?WeeklyLotBonusThreshold $weeklyLotBonusThreshold30): self
    {
        $this->weeklyLotBonusThreshold30 = $weeklyLotBonusThreshold30;

        return $this;
    }

    public function getWeeklyLotBonusThreshold29(): ?WeeklyLotBonusThreshold
    {
        return $this->weeklyLotBonusThreshold29;
    }

    public function setWeeklyLotBonusThreshold29(?WeeklyLotBonusThreshold $weeklyLotBonusThreshold29): self
    {
        $this->weeklyLotBonusThreshold29 = $weeklyLotBonusThreshold29;

        return $this;
    }

    public function getWeeklyLotBonusThreshold28(): ?WeeklyLotBonusThreshold
    {
        return $this->weeklyLotBonusThreshold28;
    }

    public function setWeeklyLotBonusThreshold28(?WeeklyLotBonusThreshold $weeklyLotBonusThreshold28): self
    {
        $this->weeklyLotBonusThreshold28 = $weeklyLotBonusThreshold28;

        return $this;
    }

    public function getWeeklyLotBonusThreshold27(): ?WeeklyLotBonusThreshold
    {
        return $this->weeklyLotBonusThreshold27;
    }

    public function setWeeklyLotBonusThreshold27(?WeeklyLotBonusThreshold $weeklyLotBonusThreshold27): self
    {
        $this->weeklyLotBonusThreshold27 = $weeklyLotBonusThreshold27;

        return $this;
    }

    public function getWeeklyLotBonusThreshold26(): ?WeeklyLotBonusThreshold
    {
        return $this->weeklyLotBonusThreshold26;
    }

    public function setWeeklyLotBonusThreshold26(?WeeklyLotBonusThreshold $weeklyLotBonusThreshold26): self
    {
        $this->weeklyLotBonusThreshold26 = $weeklyLotBonusThreshold26;

        return $this;
    }

    public function getWeeklyLotBonusThreshold25(): ?WeeklyLotBonusThreshold
    {
        return $this->weeklyLotBonusThreshold25;
    }

    public function setWeeklyLotBonusThreshold25(?WeeklyLotBonusThreshold $weeklyLotBonusThreshold25): self
    {
        $this->weeklyLotBonusThreshold25 = $weeklyLotBonusThreshold25;

        return $this;
    }

    public function getWeeklyLotBonusThreshold24(): ?WeeklyLotBonusThreshold
    {
        return $this->weeklyLotBonusThreshold24;
    }

    public function setWeeklyLotBonusThreshold24(?WeeklyLotBonusThreshold $weeklyLotBonusThreshold24): self
    {
        $this->weeklyLotBonusThreshold24 = $weeklyLotBonusThreshold24;

        return $this;
    }

    public function getWeeklyLotBonusThreshold23(): ?WeeklyLotBonusThreshold
    {
        return $this->weeklyLotBonusThreshold23;
    }

    public function setWeeklyLotBonusThreshold23(?WeeklyLotBonusThreshold $weeklyLotBonusThreshold23): self
    {
        $this->weeklyLotBonusThreshold23 = $weeklyLotBonusThreshold23;

        return $this;
    }

    public function getWeeklyLotBonusThreshold22(): ?WeeklyLotBonusThreshold
    {
        return $this->weeklyLotBonusThreshold22;
    }

    public function setWeeklyLotBonusThreshold22(?WeeklyLotBonusThreshold $weeklyLotBonusThreshold22): self
    {
        $this->weeklyLotBonusThreshold22 = $weeklyLotBonusThreshold22;

        return $this;
    }

    public function getWeeklyLotBonusThreshold21(): ?WeeklyLotBonusThreshold
    {
        return $this->weeklyLotBonusThreshold21;
    }

    public function setWeeklyLotBonusThreshold21(?WeeklyLotBonusThreshold $weeklyLotBonusThreshold21): self
    {
        $this->weeklyLotBonusThreshold21 = $weeklyLotBonusThreshold21;

        return $this;
    }

    public function getWeeklyLotBonusThreshold20(): ?WeeklyLotBonusThreshold
    {
        return $this->weeklyLotBonusThreshold20;
    }

    public function setWeeklyLotBonusThreshold20(?WeeklyLotBonusThreshold $weeklyLotBonusThreshold20): self
    {
        $this->weeklyLotBonusThreshold20 = $weeklyLotBonusThreshold20;

        return $this;
    }

    public function getWeeklyLotBonusThreshold19(): ?WeeklyLotBonusThreshold
    {
        return $this->weeklyLotBonusThreshold19;
    }

    public function setWeeklyLotBonusThreshold19(?WeeklyLotBonusThreshold $weeklyLotBonusThreshold19): self
    {
        $this->weeklyLotBonusThreshold19 = $weeklyLotBonusThreshold19;

        return $this;
    }

    public function getWeeklyLotBonusThreshold18(): ?WeeklyLotBonusThreshold
    {
        return $this->weeklyLotBonusThreshold18;
    }

    public function setWeeklyLotBonusThreshold18(?WeeklyLotBonusThreshold $weeklyLotBonusThreshold18): self
    {
        $this->weeklyLotBonusThreshold18 = $weeklyLotBonusThreshold18;

        return $this;
    }

    public function getWeeklyLotBonusThreshold17(): ?WeeklyLotBonusThreshold
    {
        return $this->weeklyLotBonusThreshold17;
    }

    public function setWeeklyLotBonusThreshold17(?WeeklyLotBonusThreshold $weeklyLotBonusThreshold17): self
    {
        $this->weeklyLotBonusThreshold17 = $weeklyLotBonusThreshold17;

        return $this;
    }

    public function getWeeklyLotBonusThreshold16(): ?WeeklyLotBonusThreshold
    {
        return $this->weeklyLotBonusThreshold16;
    }

    public function setWeeklyLotBonusThreshold16(?WeeklyLotBonusThreshold $weeklyLotBonusThreshold16): self
    {
        $this->weeklyLotBonusThreshold16 = $weeklyLotBonusThreshold16;

        return $this;
    }

    public function getWeeklyLotBonusThreshold15(): ?WeeklyLotBonusThreshold
    {
        return $this->weeklyLotBonusThreshold15;
    }

    public function setWeeklyLotBonusThreshold15(?WeeklyLotBonusThreshold $weeklyLotBonusThreshold15): self
    {
        $this->weeklyLotBonusThreshold15 = $weeklyLotBonusThreshold15;

        return $this;
    }

    public function getWeeklyLotBonusThreshold14(): ?WeeklyLotBonusThreshold
    {
        return $this->weeklyLotBonusThreshold14;
    }

    public function setWeeklyLotBonusThreshold14(?WeeklyLotBonusThreshold $weeklyLotBonusThreshold14): self
    {
        $this->weeklyLotBonusThreshold14 = $weeklyLotBonusThreshold14;

        return $this;
    }

    public function getWeeklyLotBonusThreshold13(): ?WeeklyLotBonusThreshold
    {
        return $this->weeklyLotBonusThreshold13;
    }

    public function setWeeklyLotBonusThreshold13(?WeeklyLotBonusThreshold $weeklyLotBonusThreshold13): self
    {
        $this->weeklyLotBonusThreshold13 = $weeklyLotBonusThreshold13;

        return $this;
    }

    public function getWeeklyLotBonusThreshold12(): ?WeeklyLotBonusThreshold
    {
        return $this->weeklyLotBonusThreshold12;
    }

    public function setWeeklyLotBonusThreshold12(?WeeklyLotBonusThreshold $weeklyLotBonusThreshold12): self
    {
        $this->weeklyLotBonusThreshold12 = $weeklyLotBonusThreshold12;

        return $this;
    }

    public function getWeeklyLotBonusThreshold11(): ?WeeklyLotBonusThreshold
    {
        return $this->weeklyLotBonusThreshold11;
    }

    public function setWeeklyLotBonusThreshold11(?WeeklyLotBonusThreshold $weeklyLotBonusThreshold11): self
    {
        $this->weeklyLotBonusThreshold11 = $weeklyLotBonusThreshold11;

        return $this;
    }

    public function getWeeklyLotBonusThreshold10(): ?WeeklyLotBonusThreshold
    {
        return $this->weeklyLotBonusThreshold10;
    }

    public function setWeeklyLotBonusThreshold10(?WeeklyLotBonusThreshold $weeklyLotBonusThreshold10): self
    {
        $this->weeklyLotBonusThreshold10 = $weeklyLotBonusThreshold10;

        return $this;
    }

    public function getWeeklyLotBonusThreshold9(): ?WeeklyLotBonusThreshold
    {
        return $this->weeklyLotBonusThreshold9;
    }

    public function setWeeklyLotBonusThreshold9(?WeeklyLotBonusThreshold $weeklyLotBonusThreshold9): self
    {
        $this->weeklyLotBonusThreshold9 = $weeklyLotBonusThreshold9;

        return $this;
    }

    public function getWeeklyLotBonusThreshold8(): ?WeeklyLotBonusThreshold
    {
        return $this->weeklyLotBonusThreshold8;
    }

    public function setWeeklyLotBonusThreshold8(?WeeklyLotBonusThreshold $weeklyLotBonusThreshold8): self
    {
        $this->weeklyLotBonusThreshold8 = $weeklyLotBonusThreshold8;

        return $this;
    }

    public function getWeeklyLotBonusThreshold7(): ?WeeklyLotBonusThreshold
    {
        return $this->weeklyLotBonusThreshold7;
    }

    public function setWeeklyLotBonusThreshold7(?WeeklyLotBonusThreshold $weeklyLotBonusThreshold7): self
    {
        $this->weeklyLotBonusThreshold7 = $weeklyLotBonusThreshold7;

        return $this;
    }

    public function getWeeklyLotBonusThreshold6(): ?WeeklyLotBonusThreshold
    {
        return $this->weeklyLotBonusThreshold6;
    }

    public function setWeeklyLotBonusThreshold6(?WeeklyLotBonusThreshold $weeklyLotBonusThreshold6): self
    {
        $this->weeklyLotBonusThreshold6 = $weeklyLotBonusThreshold6;

        return $this;
    }

    public function getWeeklyLotBonusThreshold5(): ?WeeklyLotBonusThreshold
    {
        return $this->weeklyLotBonusThreshold5;
    }

    public function setWeeklyLotBonusThreshold5(?WeeklyLotBonusThreshold $weeklyLotBonusThreshold5): self
    {
        $this->weeklyLotBonusThreshold5 = $weeklyLotBonusThreshold5;

        return $this;
    }

    public function getWeeklyLotBonusThreshold4(): ?WeeklyLotBonusThreshold
    {
        return $this->weeklyLotBonusThreshold4;
    }

    public function setWeeklyLotBonusThreshold4(?WeeklyLotBonusThreshold $weeklyLotBonusThreshold4): self
    {
        $this->weeklyLotBonusThreshold4 = $weeklyLotBonusThreshold4;

        return $this;
    }

    public function getWeeklyLotBonusThreshold3(): ?WeeklyLotBonusThreshold
    {
        return $this->weeklyLotBonusThreshold3;
    }

    public function setWeeklyLotBonusThreshold3(?WeeklyLotBonusThreshold $weeklyLotBonusThreshold3): self
    {
        $this->weeklyLotBonusThreshold3 = $weeklyLotBonusThreshold3;

        return $this;
    }

    public function getWeeklyLotBonusThreshold2(): ?WeeklyLotBonusThreshold
    {
        return $this->weeklyLotBonusThreshold2;
    }

    public function setWeeklyLotBonusThreshold2(?WeeklyLotBonusThreshold $weeklyLotBonusThreshold2): self
    {
        $this->weeklyLotBonusThreshold2 = $weeklyLotBonusThreshold2;

        return $this;
    }

    public function getWeeklyLotBonusThreshold1(): ?WeeklyLotBonusThreshold
    {
        return $this->weeklyLotBonusThreshold1;
    }

    public function setWeeklyLotBonusThreshold1(?WeeklyLotBonusThreshold $weeklyLotBonusThreshold1): self
    {
        $this->weeklyLotBonusThreshold1 = $weeklyLotBonusThreshold1;

        return $this;
    }

    public function getWeeklyLotBonusThreshold0(): ?WeeklyLotBonusThreshold
    {
        return $this->weeklyLotBonusThreshold0;
    }

    public function setWeeklyLotBonusThreshold0(?WeeklyLotBonusThreshold $weeklyLotBonusThreshold0): self
    {
        $this->weeklyLotBonusThreshold0 = $weeklyLotBonusThreshold0;

        return $this;
    }
}
