<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SatisfactionNpc.
 *
 * @ORM\Table(name="satisfaction_npc", indexes={@ORM\Index(name="idx_e83cb13820cc9e5b", columns={"item_4_0"}), @ORM\Index(name="idx_e83cb1385284b848", columns={"item_3_1"}), @ORM\Index(name="idx_e83cb13851006c26", columns={"item_1_1"}), @ORM\Index(name="idx_e83cb138c9cb57ab", columns={"item_0_2"}), @ORM\Index(name="idx_e83cb138258388de", columns={"item_3_0"}), @ORM\Index(name="idx_e83cb13850c20611", columns={"item_0_1"}), @ORM\Index(name="idx_e83cb1382441e2e9", columns={"item_2_0"}), @ORM\Index(name="idx_e83cb138ca4f83c5", columns={"item_2_2"}), @ORM\Index(name="idx_e83cb138468c762c", columns={"npc"}), @ORM\Index(name="idx_e83cb138c8093d9c", columns={"item_1_2"}), @ORM\Index(name="idx_e83cb1385609c4fa", columns={"item_5_1"}), @ORM\Index(name="idx_e83cb13827c53687", columns={"item_0_0"}), @ORM\Index(name="idx_e83cb1385346d27f", columns={"item_2_1"}), @ORM\Index(name="idx_e83cb138cb8de9f2", columns={"item_3_2"}), @ORM\Index(name="idx_e83cb13857cbaecd", columns={"item_4_1"}), @ORM\Index(name="idx_e83cb138210ef46c", columns={"item_5_0"}), @ORM\Index(name="idx_e83cb138cec2ff77", columns={"item_4_2"}), @ORM\Index(name="idx_e83cb1381c11aac", columns={"quest_required"}), @ORM\Index(name="idx_e83cb13826075cb0", columns={"item_1_0"}), @ORM\Index(name="idx_e83cb138cf009540", columns={"item_5_2"})})
 * @ORM\Entity
 */
class SatisfactionNpc
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="satisfaction_npc_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="level_unlock", type="integer", nullable=true)
     */
    private $levelUnlock;

    /**
     * @var int|null
     *
     * @ORM\Column(name="deliveries_per_week", type="integer", nullable=true)
     */
    private $deliveriesPerWeek;

    /**
     * @var int|null
     *
     * @ORM\Column(name="supply_index_0", type="integer", nullable=true)
     */
    private $supplyIndex0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="supply_index_1", type="integer", nullable=true)
     */
    private $supplyIndex1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="supply_index_2", type="integer", nullable=true)
     */
    private $supplyIndex2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="supply_index_3", type="integer", nullable=true)
     */
    private $supplyIndex3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="supply_index_4", type="integer", nullable=true)
     */
    private $supplyIndex4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="supply_index_5", type="integer", nullable=true)
     */
    private $supplyIndex5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="satisfaction_required_0", type="bigint", nullable=true)
     */
    private $satisfactionRequired0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="satisfaction_required_1", type="bigint", nullable=true)
     */
    private $satisfactionRequired1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="satisfaction_required_2", type="bigint", nullable=true)
     */
    private $satisfactionRequired2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="satisfaction_required_3", type="bigint", nullable=true)
     */
    private $satisfactionRequired3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="satisfaction_required_4", type="bigint", nullable=true)
     */
    private $satisfactionRequired4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="satisfaction_required_5", type="bigint", nullable=true)
     */
    private $satisfactionRequired5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_count_0_0", type="integer", nullable=true)
     */
    private $itemCount00;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_count_1_0", type="integer", nullable=true)
     */
    private $itemCount10;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_count_2_0", type="integer", nullable=true)
     */
    private $itemCount20;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_count_3_0", type="integer", nullable=true)
     */
    private $itemCount30;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_count_4_0", type="integer", nullable=true)
     */
    private $itemCount40;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_count_5_0", type="integer", nullable=true)
     */
    private $itemCount50;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_hq_0_0", type="boolean", nullable=true)
     */
    private $isHq00;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_hq_1_0", type="boolean", nullable=true)
     */
    private $isHq10;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_hq_2_0", type="boolean", nullable=true)
     */
    private $isHq20;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_hq_3_0", type="boolean", nullable=true)
     */
    private $isHq30;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_hq_4_0", type="boolean", nullable=true)
     */
    private $isHq40;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_hq_5_0", type="boolean", nullable=true)
     */
    private $isHq50;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_count_0_1", type="integer", nullable=true)
     */
    private $itemCount01;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_count_1_1", type="integer", nullable=true)
     */
    private $itemCount11;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_count_2_1", type="integer", nullable=true)
     */
    private $itemCount21;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_count_3_1", type="integer", nullable=true)
     */
    private $itemCount31;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_count_4_1", type="integer", nullable=true)
     */
    private $itemCount41;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_count_5_1", type="integer", nullable=true)
     */
    private $itemCount51;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_hq_0_1", type="boolean", nullable=true)
     */
    private $isHq01;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_hq_1_1", type="boolean", nullable=true)
     */
    private $isHq11;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_hq_2_1", type="boolean", nullable=true)
     */
    private $isHq21;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_hq_3_1", type="boolean", nullable=true)
     */
    private $isHq31;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_hq_4_1", type="boolean", nullable=true)
     */
    private $isHq41;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_hq_5_1", type="boolean", nullable=true)
     */
    private $isHq51;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_count_0_2", type="integer", nullable=true)
     */
    private $itemCount02;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_count_1_2", type="integer", nullable=true)
     */
    private $itemCount12;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_count_2_2", type="integer", nullable=true)
     */
    private $itemCount22;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_count_3_2", type="integer", nullable=true)
     */
    private $itemCount32;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_count_4_2", type="integer", nullable=true)
     */
    private $itemCount42;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_count_5_2", type="integer", nullable=true)
     */
    private $itemCount52;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_hq_0_2", type="boolean", nullable=true)
     */
    private $isHq02;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_hq_1_2", type="boolean", nullable=true)
     */
    private $isHq12;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_hq_2_2", type="boolean", nullable=true)
     */
    private $isHq22;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_hq_3_2", type="boolean", nullable=true)
     */
    private $isHq32;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_hq_4_2", type="boolean", nullable=true)
     */
    private $isHq42;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_hq_5_2", type="boolean", nullable=true)
     */
    private $isHq52;

    /**
     * @var int|null
     *
     * @ORM\Column(name="icon", type="integer", nullable=true)
     */
    private $icon;

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
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_5_2", referencedColumnName="pk")
     * })
     */
    private $item52;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_4_2", referencedColumnName="pk")
     * })
     */
    private $item42;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_3_2", referencedColumnName="pk")
     * })
     */
    private $item32;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_2_2", referencedColumnName="pk")
     * })
     */
    private $item22;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_1_2", referencedColumnName="pk")
     * })
     */
    private $item12;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_0_2", referencedColumnName="pk")
     * })
     */
    private $item02;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_5_1", referencedColumnName="pk")
     * })
     */
    private $item51;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_4_1", referencedColumnName="pk")
     * })
     */
    private $item41;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_3_1", referencedColumnName="pk")
     * })
     */
    private $item31;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_2_1", referencedColumnName="pk")
     * })
     */
    private $item21;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_1_1", referencedColumnName="pk")
     * })
     */
    private $item11;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_0_1", referencedColumnName="pk")
     * })
     */
    private $item01;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_5_0", referencedColumnName="pk")
     * })
     */
    private $item50;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_4_0", referencedColumnName="pk")
     * })
     */
    private $item40;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_3_0", referencedColumnName="pk")
     * })
     */
    private $item30;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_2_0", referencedColumnName="pk")
     * })
     */
    private $item20;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_1_0", referencedColumnName="pk")
     * })
     */
    private $item10;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_0_0", referencedColumnName="pk")
     * })
     */
    private $item00;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest_required", referencedColumnName="pk")
     * })
     */
    private $questRequired;

    /**
     * @var EnpcResident
     *
     * @ORM\ManyToOne(targetEntity="EnpcResident")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="npc", referencedColumnName="pk")
     * })
     */
    private $npc;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getLevelUnlock(): ?int
    {
        return $this->levelUnlock;
    }

    public function setLevelUnlock(?int $levelUnlock): self
    {
        $this->levelUnlock = $levelUnlock;

        return $this;
    }

    public function getDeliveriesPerWeek(): ?int
    {
        return $this->deliveriesPerWeek;
    }

    public function setDeliveriesPerWeek(?int $deliveriesPerWeek): self
    {
        $this->deliveriesPerWeek = $deliveriesPerWeek;

        return $this;
    }

    public function getSupplyIndex0(): ?int
    {
        return $this->supplyIndex0;
    }

    public function setSupplyIndex0(?int $supplyIndex0): self
    {
        $this->supplyIndex0 = $supplyIndex0;

        return $this;
    }

    public function getSupplyIndex1(): ?int
    {
        return $this->supplyIndex1;
    }

    public function setSupplyIndex1(?int $supplyIndex1): self
    {
        $this->supplyIndex1 = $supplyIndex1;

        return $this;
    }

    public function getSupplyIndex2(): ?int
    {
        return $this->supplyIndex2;
    }

    public function setSupplyIndex2(?int $supplyIndex2): self
    {
        $this->supplyIndex2 = $supplyIndex2;

        return $this;
    }

    public function getSupplyIndex3(): ?int
    {
        return $this->supplyIndex3;
    }

    public function setSupplyIndex3(?int $supplyIndex3): self
    {
        $this->supplyIndex3 = $supplyIndex3;

        return $this;
    }

    public function getSupplyIndex4(): ?int
    {
        return $this->supplyIndex4;
    }

    public function setSupplyIndex4(?int $supplyIndex4): self
    {
        $this->supplyIndex4 = $supplyIndex4;

        return $this;
    }

    public function getSupplyIndex5(): ?int
    {
        return $this->supplyIndex5;
    }

    public function setSupplyIndex5(?int $supplyIndex5): self
    {
        $this->supplyIndex5 = $supplyIndex5;

        return $this;
    }

    public function getSatisfactionRequired0(): ?string
    {
        return $this->satisfactionRequired0;
    }

    public function setSatisfactionRequired0(?string $satisfactionRequired0): self
    {
        $this->satisfactionRequired0 = $satisfactionRequired0;

        return $this;
    }

    public function getSatisfactionRequired1(): ?string
    {
        return $this->satisfactionRequired1;
    }

    public function setSatisfactionRequired1(?string $satisfactionRequired1): self
    {
        $this->satisfactionRequired1 = $satisfactionRequired1;

        return $this;
    }

    public function getSatisfactionRequired2(): ?string
    {
        return $this->satisfactionRequired2;
    }

    public function setSatisfactionRequired2(?string $satisfactionRequired2): self
    {
        $this->satisfactionRequired2 = $satisfactionRequired2;

        return $this;
    }

    public function getSatisfactionRequired3(): ?string
    {
        return $this->satisfactionRequired3;
    }

    public function setSatisfactionRequired3(?string $satisfactionRequired3): self
    {
        $this->satisfactionRequired3 = $satisfactionRequired3;

        return $this;
    }

    public function getSatisfactionRequired4(): ?string
    {
        return $this->satisfactionRequired4;
    }

    public function setSatisfactionRequired4(?string $satisfactionRequired4): self
    {
        $this->satisfactionRequired4 = $satisfactionRequired4;

        return $this;
    }

    public function getSatisfactionRequired5(): ?string
    {
        return $this->satisfactionRequired5;
    }

    public function setSatisfactionRequired5(?string $satisfactionRequired5): self
    {
        $this->satisfactionRequired5 = $satisfactionRequired5;

        return $this;
    }

    public function getItemCount00(): ?int
    {
        return $this->itemCount00;
    }

    public function setItemCount00(?int $itemCount00): self
    {
        $this->itemCount00 = $itemCount00;

        return $this;
    }

    public function getItemCount10(): ?int
    {
        return $this->itemCount10;
    }

    public function setItemCount10(?int $itemCount10): self
    {
        $this->itemCount10 = $itemCount10;

        return $this;
    }

    public function getItemCount20(): ?int
    {
        return $this->itemCount20;
    }

    public function setItemCount20(?int $itemCount20): self
    {
        $this->itemCount20 = $itemCount20;

        return $this;
    }

    public function getItemCount30(): ?int
    {
        return $this->itemCount30;
    }

    public function setItemCount30(?int $itemCount30): self
    {
        $this->itemCount30 = $itemCount30;

        return $this;
    }

    public function getItemCount40(): ?int
    {
        return $this->itemCount40;
    }

    public function setItemCount40(?int $itemCount40): self
    {
        $this->itemCount40 = $itemCount40;

        return $this;
    }

    public function getItemCount50(): ?int
    {
        return $this->itemCount50;
    }

    public function setItemCount50(?int $itemCount50): self
    {
        $this->itemCount50 = $itemCount50;

        return $this;
    }

    public function getIsHq00(): ?bool
    {
        return $this->isHq00;
    }

    public function setIsHq00(?bool $isHq00): self
    {
        $this->isHq00 = $isHq00;

        return $this;
    }

    public function getIsHq10(): ?bool
    {
        return $this->isHq10;
    }

    public function setIsHq10(?bool $isHq10): self
    {
        $this->isHq10 = $isHq10;

        return $this;
    }

    public function getIsHq20(): ?bool
    {
        return $this->isHq20;
    }

    public function setIsHq20(?bool $isHq20): self
    {
        $this->isHq20 = $isHq20;

        return $this;
    }

    public function getIsHq30(): ?bool
    {
        return $this->isHq30;
    }

    public function setIsHq30(?bool $isHq30): self
    {
        $this->isHq30 = $isHq30;

        return $this;
    }

    public function getIsHq40(): ?bool
    {
        return $this->isHq40;
    }

    public function setIsHq40(?bool $isHq40): self
    {
        $this->isHq40 = $isHq40;

        return $this;
    }

    public function getIsHq50(): ?bool
    {
        return $this->isHq50;
    }

    public function setIsHq50(?bool $isHq50): self
    {
        $this->isHq50 = $isHq50;

        return $this;
    }

    public function getItemCount01(): ?int
    {
        return $this->itemCount01;
    }

    public function setItemCount01(?int $itemCount01): self
    {
        $this->itemCount01 = $itemCount01;

        return $this;
    }

    public function getItemCount11(): ?int
    {
        return $this->itemCount11;
    }

    public function setItemCount11(?int $itemCount11): self
    {
        $this->itemCount11 = $itemCount11;

        return $this;
    }

    public function getItemCount21(): ?int
    {
        return $this->itemCount21;
    }

    public function setItemCount21(?int $itemCount21): self
    {
        $this->itemCount21 = $itemCount21;

        return $this;
    }

    public function getItemCount31(): ?int
    {
        return $this->itemCount31;
    }

    public function setItemCount31(?int $itemCount31): self
    {
        $this->itemCount31 = $itemCount31;

        return $this;
    }

    public function getItemCount41(): ?int
    {
        return $this->itemCount41;
    }

    public function setItemCount41(?int $itemCount41): self
    {
        $this->itemCount41 = $itemCount41;

        return $this;
    }

    public function getItemCount51(): ?int
    {
        return $this->itemCount51;
    }

    public function setItemCount51(?int $itemCount51): self
    {
        $this->itemCount51 = $itemCount51;

        return $this;
    }

    public function getIsHq01(): ?bool
    {
        return $this->isHq01;
    }

    public function setIsHq01(?bool $isHq01): self
    {
        $this->isHq01 = $isHq01;

        return $this;
    }

    public function getIsHq11(): ?bool
    {
        return $this->isHq11;
    }

    public function setIsHq11(?bool $isHq11): self
    {
        $this->isHq11 = $isHq11;

        return $this;
    }

    public function getIsHq21(): ?bool
    {
        return $this->isHq21;
    }

    public function setIsHq21(?bool $isHq21): self
    {
        $this->isHq21 = $isHq21;

        return $this;
    }

    public function getIsHq31(): ?bool
    {
        return $this->isHq31;
    }

    public function setIsHq31(?bool $isHq31): self
    {
        $this->isHq31 = $isHq31;

        return $this;
    }

    public function getIsHq41(): ?bool
    {
        return $this->isHq41;
    }

    public function setIsHq41(?bool $isHq41): self
    {
        $this->isHq41 = $isHq41;

        return $this;
    }

    public function getIsHq51(): ?bool
    {
        return $this->isHq51;
    }

    public function setIsHq51(?bool $isHq51): self
    {
        $this->isHq51 = $isHq51;

        return $this;
    }

    public function getItemCount02(): ?int
    {
        return $this->itemCount02;
    }

    public function setItemCount02(?int $itemCount02): self
    {
        $this->itemCount02 = $itemCount02;

        return $this;
    }

    public function getItemCount12(): ?int
    {
        return $this->itemCount12;
    }

    public function setItemCount12(?int $itemCount12): self
    {
        $this->itemCount12 = $itemCount12;

        return $this;
    }

    public function getItemCount22(): ?int
    {
        return $this->itemCount22;
    }

    public function setItemCount22(?int $itemCount22): self
    {
        $this->itemCount22 = $itemCount22;

        return $this;
    }

    public function getItemCount32(): ?int
    {
        return $this->itemCount32;
    }

    public function setItemCount32(?int $itemCount32): self
    {
        $this->itemCount32 = $itemCount32;

        return $this;
    }

    public function getItemCount42(): ?int
    {
        return $this->itemCount42;
    }

    public function setItemCount42(?int $itemCount42): self
    {
        $this->itemCount42 = $itemCount42;

        return $this;
    }

    public function getItemCount52(): ?int
    {
        return $this->itemCount52;
    }

    public function setItemCount52(?int $itemCount52): self
    {
        $this->itemCount52 = $itemCount52;

        return $this;
    }

    public function getIsHq02(): ?bool
    {
        return $this->isHq02;
    }

    public function setIsHq02(?bool $isHq02): self
    {
        $this->isHq02 = $isHq02;

        return $this;
    }

    public function getIsHq12(): ?bool
    {
        return $this->isHq12;
    }

    public function setIsHq12(?bool $isHq12): self
    {
        $this->isHq12 = $isHq12;

        return $this;
    }

    public function getIsHq22(): ?bool
    {
        return $this->isHq22;
    }

    public function setIsHq22(?bool $isHq22): self
    {
        $this->isHq22 = $isHq22;

        return $this;
    }

    public function getIsHq32(): ?bool
    {
        return $this->isHq32;
    }

    public function setIsHq32(?bool $isHq32): self
    {
        $this->isHq32 = $isHq32;

        return $this;
    }

    public function getIsHq42(): ?bool
    {
        return $this->isHq42;
    }

    public function setIsHq42(?bool $isHq42): self
    {
        $this->isHq42 = $isHq42;

        return $this;
    }

    public function getIsHq52(): ?bool
    {
        return $this->isHq52;
    }

    public function setIsHq52(?bool $isHq52): self
    {
        $this->isHq52 = $isHq52;

        return $this;
    }

    public function getIcon(): ?int
    {
        return $this->icon;
    }

    public function setIcon(?int $icon): self
    {
        $this->icon = $icon;

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

    public function getItem52(): ?Item
    {
        return $this->item52;
    }

    public function setItem52(?Item $item52): self
    {
        $this->item52 = $item52;

        return $this;
    }

    public function getItem42(): ?Item
    {
        return $this->item42;
    }

    public function setItem42(?Item $item42): self
    {
        $this->item42 = $item42;

        return $this;
    }

    public function getItem32(): ?Item
    {
        return $this->item32;
    }

    public function setItem32(?Item $item32): self
    {
        $this->item32 = $item32;

        return $this;
    }

    public function getItem22(): ?Item
    {
        return $this->item22;
    }

    public function setItem22(?Item $item22): self
    {
        $this->item22 = $item22;

        return $this;
    }

    public function getItem12(): ?Item
    {
        return $this->item12;
    }

    public function setItem12(?Item $item12): self
    {
        $this->item12 = $item12;

        return $this;
    }

    public function getItem02(): ?Item
    {
        return $this->item02;
    }

    public function setItem02(?Item $item02): self
    {
        $this->item02 = $item02;

        return $this;
    }

    public function getItem51(): ?Item
    {
        return $this->item51;
    }

    public function setItem51(?Item $item51): self
    {
        $this->item51 = $item51;

        return $this;
    }

    public function getItem41(): ?Item
    {
        return $this->item41;
    }

    public function setItem41(?Item $item41): self
    {
        $this->item41 = $item41;

        return $this;
    }

    public function getItem31(): ?Item
    {
        return $this->item31;
    }

    public function setItem31(?Item $item31): self
    {
        $this->item31 = $item31;

        return $this;
    }

    public function getItem21(): ?Item
    {
        return $this->item21;
    }

    public function setItem21(?Item $item21): self
    {
        $this->item21 = $item21;

        return $this;
    }

    public function getItem11(): ?Item
    {
        return $this->item11;
    }

    public function setItem11(?Item $item11): self
    {
        $this->item11 = $item11;

        return $this;
    }

    public function getItem01(): ?Item
    {
        return $this->item01;
    }

    public function setItem01(?Item $item01): self
    {
        $this->item01 = $item01;

        return $this;
    }

    public function getItem50(): ?Item
    {
        return $this->item50;
    }

    public function setItem50(?Item $item50): self
    {
        $this->item50 = $item50;

        return $this;
    }

    public function getItem40(): ?Item
    {
        return $this->item40;
    }

    public function setItem40(?Item $item40): self
    {
        $this->item40 = $item40;

        return $this;
    }

    public function getItem30(): ?Item
    {
        return $this->item30;
    }

    public function setItem30(?Item $item30): self
    {
        $this->item30 = $item30;

        return $this;
    }

    public function getItem20(): ?Item
    {
        return $this->item20;
    }

    public function setItem20(?Item $item20): self
    {
        $this->item20 = $item20;

        return $this;
    }

    public function getItem10(): ?Item
    {
        return $this->item10;
    }

    public function setItem10(?Item $item10): self
    {
        $this->item10 = $item10;

        return $this;
    }

    public function getItem00(): ?Item
    {
        return $this->item00;
    }

    public function setItem00(?Item $item00): self
    {
        $this->item00 = $item00;

        return $this;
    }

    public function getQuestRequired(): ?Quest
    {
        return $this->questRequired;
    }

    public function setQuestRequired(?Quest $questRequired): self
    {
        $this->questRequired = $questRequired;

        return $this;
    }

    public function getNpc(): ?EnpcResident
    {
        return $this->npc;
    }

    public function setNpc(?EnpcResident $npc): self
    {
        $this->npc = $npc;

        return $this;
    }
}
