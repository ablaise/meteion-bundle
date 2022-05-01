<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HugeCraftworksNpc.
 *
 * @ORM\Table(name="huge_craftworks_npc", indexes={@ORM\Index(name="idx_91f5d58480baaaef", columns={"item_reward_3"}), @ORM\Index(name="idx_91f5d584f7bfab4a", columns={"item_requested_2"}), @ORM\Index(name="idx_91f5d58419b3fb55", columns={"item_reward_0"}), @ORM\Index(name="idx_91f5d5847915fe69", columns={"item_unkown_3"}), @ORM\Index(name="idx_91f5d584ccf3f691", columns={"enpc_resident"}), @ORM\Index(name="idx_91f5d5846eb4cbc3", columns={"item_reward_1"}), @ORM\Index(name="idx_91f5d584ae8947ec", columns={"class_job_category"}), @ORM\Index(name="idx_91f5d58480b89bdc", columns={"item_requested_3"}), @ORM\Index(name="idx_91f5d58419b1ca66", columns={"item_requested_0"}), @ORM\Index(name="idx_91f5d5846eb6faf0", columns={"item_requested_1"}), @ORM\Index(name="idx_91f5d584e12ceff", columns={"item_unkown_2"}), @ORM\Index(name="idx_91f5d584f7bd9a79", columns={"item_reward_2"}), @ORM\Index(name="idx_91f5d584e01cafd3", columns={"item_unkown_0"}), @ORM\Index(name="idx_91f5d584971b9f45", columns={"item_unkown_1"})})
 * @ORM\Entity
 */
class HugeCraftworksNpc
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="huge_craftworks_npc_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_3", type="bigint", nullable=true)
     */
    private $column3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_8", type="bigint", nullable=true)
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
     * @ORM\Column(name="qty_requested_0", type="integer", nullable=true)
     */
    private $qtyRequested0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="qty_requested_1", type="integer", nullable=true)
     */
    private $qtyRequested1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="qty_requested_2", type="integer", nullable=true)
     */
    private $qtyRequested2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="qty_requested_3", type="integer", nullable=true)
     */
    private $qtyRequested3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_14", type="integer", nullable=true)
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
     * @ORM\Column(name="qty_item_reward_0", type="boolean", nullable=true)
     */
    private $qtyItemReward0;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="qty_item_reward_1", type="boolean", nullable=true)
     */
    private $qtyItemReward1;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="qty_item_reward_2", type="boolean", nullable=true)
     */
    private $qtyItemReward2;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="qty_item_reward_3", type="boolean", nullable=true)
     */
    private $qtyItemReward3;

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
     * @ORM\Column(name="qty_item_unkown_0", type="boolean", nullable=true)
     */
    private $qtyItemUnkown0;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="qty_item_unkown_1", type="boolean", nullable=true)
     */
    private $qtyItemUnkown1;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="qty_item_unkown_2", type="boolean", nullable=true)
     */
    private $qtyItemUnkown2;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="qty_item_unkown_3", type="boolean", nullable=true)
     */
    private $qtyItemUnkown3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="transient", type="integer", nullable=true)
     */
    private $transient;

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
     * @var string|null
     *
     * @ORM\Column(name="column_93", type="string", length=1900, nullable=true)
     */
    private $column93;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_unkown_3", referencedColumnName="pk")
     * })
     */
    private $itemUnkown3;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_unkown_2", referencedColumnName="pk")
     * })
     */
    private $itemUnkown2;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_unkown_1", referencedColumnName="pk")
     * })
     */
    private $itemUnkown1;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_unkown_0", referencedColumnName="pk")
     * })
     */
    private $itemUnkown0;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_reward_3", referencedColumnName="pk")
     * })
     */
    private $itemReward3;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_reward_2", referencedColumnName="pk")
     * })
     */
    private $itemReward2;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_reward_1", referencedColumnName="pk")
     * })
     */
    private $itemReward1;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_reward_0", referencedColumnName="pk")
     * })
     */
    private $itemReward0;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_requested_3", referencedColumnName="pk")
     * })
     */
    private $itemRequested3;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_requested_2", referencedColumnName="pk")
     * })
     */
    private $itemRequested2;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_requested_1", referencedColumnName="pk")
     * })
     */
    private $itemRequested1;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_requested_0", referencedColumnName="pk")
     * })
     */
    private $itemRequested0;

    /**
     * @var ClassJobCategory
     *
     * @ORM\ManyToOne(targetEntity="ClassJobCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="class_job_category", referencedColumnName="pk")
     * })
     */
    private $classJobCategory;

    /**
     * @var EnpcResident
     *
     * @ORM\ManyToOne(targetEntity="EnpcResident")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="enpc_resident", referencedColumnName="pk")
     * })
     */
    private $enpcResident;

    public function getPk(): ?int
    {
        return $this->pk;
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

    public function getColumn8(): ?string
    {
        return $this->column8;
    }

    public function setColumn8(?string $column8): self
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

    public function getQtyRequested0(): ?int
    {
        return $this->qtyRequested0;
    }

    public function setQtyRequested0(?int $qtyRequested0): self
    {
        $this->qtyRequested0 = $qtyRequested0;

        return $this;
    }

    public function getQtyRequested1(): ?int
    {
        return $this->qtyRequested1;
    }

    public function setQtyRequested1(?int $qtyRequested1): self
    {
        $this->qtyRequested1 = $qtyRequested1;

        return $this;
    }

    public function getQtyRequested2(): ?int
    {
        return $this->qtyRequested2;
    }

    public function setQtyRequested2(?int $qtyRequested2): self
    {
        $this->qtyRequested2 = $qtyRequested2;

        return $this;
    }

    public function getQtyRequested3(): ?int
    {
        return $this->qtyRequested3;
    }

    public function setQtyRequested3(?int $qtyRequested3): self
    {
        $this->qtyRequested3 = $qtyRequested3;

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

    public function getQtyItemReward0(): ?bool
    {
        return $this->qtyItemReward0;
    }

    public function setQtyItemReward0(?bool $qtyItemReward0): self
    {
        $this->qtyItemReward0 = $qtyItemReward0;

        return $this;
    }

    public function getQtyItemReward1(): ?bool
    {
        return $this->qtyItemReward1;
    }

    public function setQtyItemReward1(?bool $qtyItemReward1): self
    {
        $this->qtyItemReward1 = $qtyItemReward1;

        return $this;
    }

    public function getQtyItemReward2(): ?bool
    {
        return $this->qtyItemReward2;
    }

    public function setQtyItemReward2(?bool $qtyItemReward2): self
    {
        $this->qtyItemReward2 = $qtyItemReward2;

        return $this;
    }

    public function getQtyItemReward3(): ?bool
    {
        return $this->qtyItemReward3;
    }

    public function setQtyItemReward3(?bool $qtyItemReward3): self
    {
        $this->qtyItemReward3 = $qtyItemReward3;

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

    public function getQtyItemUnkown0(): ?bool
    {
        return $this->qtyItemUnkown0;
    }

    public function setQtyItemUnkown0(?bool $qtyItemUnkown0): self
    {
        $this->qtyItemUnkown0 = $qtyItemUnkown0;

        return $this;
    }

    public function getQtyItemUnkown1(): ?bool
    {
        return $this->qtyItemUnkown1;
    }

    public function setQtyItemUnkown1(?bool $qtyItemUnkown1): self
    {
        $this->qtyItemUnkown1 = $qtyItemUnkown1;

        return $this;
    }

    public function getQtyItemUnkown2(): ?bool
    {
        return $this->qtyItemUnkown2;
    }

    public function setQtyItemUnkown2(?bool $qtyItemUnkown2): self
    {
        $this->qtyItemUnkown2 = $qtyItemUnkown2;

        return $this;
    }

    public function getQtyItemUnkown3(): ?bool
    {
        return $this->qtyItemUnkown3;
    }

    public function setQtyItemUnkown3(?bool $qtyItemUnkown3): self
    {
        $this->qtyItemUnkown3 = $qtyItemUnkown3;

        return $this;
    }

    public function getTransient(): ?int
    {
        return $this->transient;
    }

    public function setTransient(?int $transient): self
    {
        $this->transient = $transient;

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

    public function getColumn93(): ?string
    {
        return $this->column93;
    }

    public function setColumn93(?string $column93): self
    {
        $this->column93 = $column93;

        return $this;
    }

    public function getItemUnkown3(): ?Item
    {
        return $this->itemUnkown3;
    }

    public function setItemUnkown3(?Item $itemUnkown3): self
    {
        $this->itemUnkown3 = $itemUnkown3;

        return $this;
    }

    public function getItemUnkown2(): ?Item
    {
        return $this->itemUnkown2;
    }

    public function setItemUnkown2(?Item $itemUnkown2): self
    {
        $this->itemUnkown2 = $itemUnkown2;

        return $this;
    }

    public function getItemUnkown1(): ?Item
    {
        return $this->itemUnkown1;
    }

    public function setItemUnkown1(?Item $itemUnkown1): self
    {
        $this->itemUnkown1 = $itemUnkown1;

        return $this;
    }

    public function getItemUnkown0(): ?Item
    {
        return $this->itemUnkown0;
    }

    public function setItemUnkown0(?Item $itemUnkown0): self
    {
        $this->itemUnkown0 = $itemUnkown0;

        return $this;
    }

    public function getItemReward3(): ?Item
    {
        return $this->itemReward3;
    }

    public function setItemReward3(?Item $itemReward3): self
    {
        $this->itemReward3 = $itemReward3;

        return $this;
    }

    public function getItemReward2(): ?Item
    {
        return $this->itemReward2;
    }

    public function setItemReward2(?Item $itemReward2): self
    {
        $this->itemReward2 = $itemReward2;

        return $this;
    }

    public function getItemReward1(): ?Item
    {
        return $this->itemReward1;
    }

    public function setItemReward1(?Item $itemReward1): self
    {
        $this->itemReward1 = $itemReward1;

        return $this;
    }

    public function getItemReward0(): ?Item
    {
        return $this->itemReward0;
    }

    public function setItemReward0(?Item $itemReward0): self
    {
        $this->itemReward0 = $itemReward0;

        return $this;
    }

    public function getItemRequested3(): ?Item
    {
        return $this->itemRequested3;
    }

    public function setItemRequested3(?Item $itemRequested3): self
    {
        $this->itemRequested3 = $itemRequested3;

        return $this;
    }

    public function getItemRequested2(): ?Item
    {
        return $this->itemRequested2;
    }

    public function setItemRequested2(?Item $itemRequested2): self
    {
        $this->itemRequested2 = $itemRequested2;

        return $this;
    }

    public function getItemRequested1(): ?Item
    {
        return $this->itemRequested1;
    }

    public function setItemRequested1(?Item $itemRequested1): self
    {
        $this->itemRequested1 = $itemRequested1;

        return $this;
    }

    public function getItemRequested0(): ?Item
    {
        return $this->itemRequested0;
    }

    public function setItemRequested0(?Item $itemRequested0): self
    {
        $this->itemRequested0 = $itemRequested0;

        return $this;
    }

    public function getClassJobCategory(): ?ClassJobCategory
    {
        return $this->classJobCategory;
    }

    public function setClassJobCategory(?ClassJobCategory $classJobCategory): self
    {
        $this->classJobCategory = $classJobCategory;

        return $this;
    }

    public function getEnpcResident(): ?EnpcResident
    {
        return $this->enpcResident;
    }

    public function setEnpcResident(?EnpcResident $enpcResident): self
    {
        $this->enpcResident = $enpcResident;

        return $this;
    }
}
