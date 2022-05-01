<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DeepDungeon.
 *
 * @ORM\Table(name="deep_dungeon", indexes={@ORM\Index(name="idx_98ff860753379169", columns={"pomander_slot_10"}), @ORM\Index(name="idx_98ff860785b3a1d6", columns={"pomander_slot_9"}), @ORM\Index(name="idx_98ff8607406419de", columns={"magicite_slot_0"}), @ORM\Index(name="idx_98ff8607f2b49140", columns={"pomander_slot_8"}), @ORM\Index(name="idx_98ff8607ca3ec0d3", columns={"pomander_slot_13"}), @ORM\Index(name="idx_98ff8607656648c8", columns={"pomander_slot_3"}), @ORM\Index(name="idx_98ff8607e933e7e3", columns={"content_finder_condition_start"}), @ORM\Index(name="idx_98ff8607bd39f045", columns={"pomander_slot_12"}), @ORM\Index(name="idx_98ff8607545a5570", columns={"pomander_slot_14"}), @ORM\Index(name="idx_98ff8607ae6a78f2", columns={"magicite_slot_2"}), @ORM\Index(name="idx_98ff860777caa569", columns={"aetherpool_arm"}), @ORM\Index(name="idx_98ff8607fc6f1972", columns={"pomander_slot_0"}), @ORM\Index(name="idx_98ff8607f3485c4", columns={"aetherpool_armor"}), @ORM\Index(name="idx_98ff8607fb02dd6b", columns={"pomander_slot_4"}), @ORM\Index(name="idx_98ff860737632948", columns={"magicite_slot_1"}), @ORM\Index(name="idx_98ff86078c05edfd", columns={"pomander_slot_5"}), @ORM\Index(name="idx_98ff8607235d65e6", columns={"pomander_slot_15"}), @ORM\Index(name="idx_98ff86078b6829e4", columns={"pomander_slot_1"}), @ORM\Index(name="idx_98ff8607620b8cd1", columns={"pomander_slot_7"}), @ORM\Index(name="idx_98ff8607150cbc47", columns={"pomander_slot_6"}), @ORM\Index(name="idx_98ff86071261785e", columns={"pomander_slot_2"}), @ORM\Index(name="idx_98ff8607d96d4864", columns={"magicite_slot_3"}), @ORM\Index(name="idx_98ff86072430a1ff", columns={"pomander_slot_11"})})
 * @ORM\Entity
 */
class DeepDungeon
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="deep_dungeon_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_25", type="boolean", nullable=true)
     */
    private $column25;

    /**
     * @var ContentFinderCondition
     *
     * @ORM\ManyToOne(targetEntity="ContentFinderCondition")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="content_finder_condition_start", referencedColumnName="pk")
     * })
     */
    private $contentFinderConditionStart;

    /**
     * @var DeepDungeonMagicStone
     *
     * @ORM\ManyToOne(targetEntity="DeepDungeonMagicStone")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="magicite_slot_3", referencedColumnName="pk")
     * })
     */
    private $magiciteSlot3;

    /**
     * @var DeepDungeonMagicStone
     *
     * @ORM\ManyToOne(targetEntity="DeepDungeonMagicStone")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="magicite_slot_2", referencedColumnName="pk")
     * })
     */
    private $magiciteSlot2;

    /**
     * @var DeepDungeonMagicStone
     *
     * @ORM\ManyToOne(targetEntity="DeepDungeonMagicStone")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="magicite_slot_1", referencedColumnName="pk")
     * })
     */
    private $magiciteSlot1;

    /**
     * @var DeepDungeonMagicStone
     *
     * @ORM\ManyToOne(targetEntity="DeepDungeonMagicStone")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="magicite_slot_0", referencedColumnName="pk")
     * })
     */
    private $magiciteSlot0;

    /**
     * @var DeepDungeonItem
     *
     * @ORM\ManyToOne(targetEntity="DeepDungeonItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pomander_slot_15", referencedColumnName="pk")
     * })
     */
    private $pomanderSlot15;

    /**
     * @var DeepDungeonItem
     *
     * @ORM\ManyToOne(targetEntity="DeepDungeonItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pomander_slot_14", referencedColumnName="pk")
     * })
     */
    private $pomanderSlot14;

    /**
     * @var DeepDungeonItem
     *
     * @ORM\ManyToOne(targetEntity="DeepDungeonItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pomander_slot_13", referencedColumnName="pk")
     * })
     */
    private $pomanderSlot13;

    /**
     * @var DeepDungeonItem
     *
     * @ORM\ManyToOne(targetEntity="DeepDungeonItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pomander_slot_12", referencedColumnName="pk")
     * })
     */
    private $pomanderSlot12;

    /**
     * @var DeepDungeonItem
     *
     * @ORM\ManyToOne(targetEntity="DeepDungeonItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pomander_slot_11", referencedColumnName="pk")
     * })
     */
    private $pomanderSlot11;

    /**
     * @var DeepDungeonItem
     *
     * @ORM\ManyToOne(targetEntity="DeepDungeonItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pomander_slot_10", referencedColumnName="pk")
     * })
     */
    private $pomanderSlot10;

    /**
     * @var DeepDungeonItem
     *
     * @ORM\ManyToOne(targetEntity="DeepDungeonItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pomander_slot_9", referencedColumnName="pk")
     * })
     */
    private $pomanderSlot9;

    /**
     * @var DeepDungeonItem
     *
     * @ORM\ManyToOne(targetEntity="DeepDungeonItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pomander_slot_8", referencedColumnName="pk")
     * })
     */
    private $pomanderSlot8;

    /**
     * @var DeepDungeonItem
     *
     * @ORM\ManyToOne(targetEntity="DeepDungeonItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pomander_slot_7", referencedColumnName="pk")
     * })
     */
    private $pomanderSlot7;

    /**
     * @var DeepDungeonItem
     *
     * @ORM\ManyToOne(targetEntity="DeepDungeonItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pomander_slot_6", referencedColumnName="pk")
     * })
     */
    private $pomanderSlot6;

    /**
     * @var DeepDungeonItem
     *
     * @ORM\ManyToOne(targetEntity="DeepDungeonItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pomander_slot_5", referencedColumnName="pk")
     * })
     */
    private $pomanderSlot5;

    /**
     * @var DeepDungeonItem
     *
     * @ORM\ManyToOne(targetEntity="DeepDungeonItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pomander_slot_4", referencedColumnName="pk")
     * })
     */
    private $pomanderSlot4;

    /**
     * @var DeepDungeonItem
     *
     * @ORM\ManyToOne(targetEntity="DeepDungeonItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pomander_slot_3", referencedColumnName="pk")
     * })
     */
    private $pomanderSlot3;

    /**
     * @var DeepDungeonItem
     *
     * @ORM\ManyToOne(targetEntity="DeepDungeonItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pomander_slot_2", referencedColumnName="pk")
     * })
     */
    private $pomanderSlot2;

    /**
     * @var DeepDungeonItem
     *
     * @ORM\ManyToOne(targetEntity="DeepDungeonItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pomander_slot_1", referencedColumnName="pk")
     * })
     */
    private $pomanderSlot1;

    /**
     * @var DeepDungeonItem
     *
     * @ORM\ManyToOne(targetEntity="DeepDungeonItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pomander_slot_0", referencedColumnName="pk")
     * })
     */
    private $pomanderSlot0;

    /**
     * @var DeepDungeonEquipment
     *
     * @ORM\ManyToOne(targetEntity="DeepDungeonEquipment")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="aetherpool_armor", referencedColumnName="pk")
     * })
     */
    private $aetherpoolArmor;

    /**
     * @var DeepDungeonEquipment
     *
     * @ORM\ManyToOne(targetEntity="DeepDungeonEquipment")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="aetherpool_arm", referencedColumnName="pk")
     * })
     */
    private $aetherpoolArm;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getColumn25(): ?bool
    {
        return $this->column25;
    }

    public function setColumn25(?bool $column25): self
    {
        $this->column25 = $column25;

        return $this;
    }

    public function getContentFinderConditionStart(): ?ContentFinderCondition
    {
        return $this->contentFinderConditionStart;
    }

    public function setContentFinderConditionStart(?ContentFinderCondition $contentFinderConditionStart): self
    {
        $this->contentFinderConditionStart = $contentFinderConditionStart;

        return $this;
    }

    public function getMagiciteSlot3(): ?DeepDungeonMagicStone
    {
        return $this->magiciteSlot3;
    }

    public function setMagiciteSlot3(?DeepDungeonMagicStone $magiciteSlot3): self
    {
        $this->magiciteSlot3 = $magiciteSlot3;

        return $this;
    }

    public function getMagiciteSlot2(): ?DeepDungeonMagicStone
    {
        return $this->magiciteSlot2;
    }

    public function setMagiciteSlot2(?DeepDungeonMagicStone $magiciteSlot2): self
    {
        $this->magiciteSlot2 = $magiciteSlot2;

        return $this;
    }

    public function getMagiciteSlot1(): ?DeepDungeonMagicStone
    {
        return $this->magiciteSlot1;
    }

    public function setMagiciteSlot1(?DeepDungeonMagicStone $magiciteSlot1): self
    {
        $this->magiciteSlot1 = $magiciteSlot1;

        return $this;
    }

    public function getMagiciteSlot0(): ?DeepDungeonMagicStone
    {
        return $this->magiciteSlot0;
    }

    public function setMagiciteSlot0(?DeepDungeonMagicStone $magiciteSlot0): self
    {
        $this->magiciteSlot0 = $magiciteSlot0;

        return $this;
    }

    public function getPomanderSlot15(): ?DeepDungeonItem
    {
        return $this->pomanderSlot15;
    }

    public function setPomanderSlot15(?DeepDungeonItem $pomanderSlot15): self
    {
        $this->pomanderSlot15 = $pomanderSlot15;

        return $this;
    }

    public function getPomanderSlot14(): ?DeepDungeonItem
    {
        return $this->pomanderSlot14;
    }

    public function setPomanderSlot14(?DeepDungeonItem $pomanderSlot14): self
    {
        $this->pomanderSlot14 = $pomanderSlot14;

        return $this;
    }

    public function getPomanderSlot13(): ?DeepDungeonItem
    {
        return $this->pomanderSlot13;
    }

    public function setPomanderSlot13(?DeepDungeonItem $pomanderSlot13): self
    {
        $this->pomanderSlot13 = $pomanderSlot13;

        return $this;
    }

    public function getPomanderSlot12(): ?DeepDungeonItem
    {
        return $this->pomanderSlot12;
    }

    public function setPomanderSlot12(?DeepDungeonItem $pomanderSlot12): self
    {
        $this->pomanderSlot12 = $pomanderSlot12;

        return $this;
    }

    public function getPomanderSlot11(): ?DeepDungeonItem
    {
        return $this->pomanderSlot11;
    }

    public function setPomanderSlot11(?DeepDungeonItem $pomanderSlot11): self
    {
        $this->pomanderSlot11 = $pomanderSlot11;

        return $this;
    }

    public function getPomanderSlot10(): ?DeepDungeonItem
    {
        return $this->pomanderSlot10;
    }

    public function setPomanderSlot10(?DeepDungeonItem $pomanderSlot10): self
    {
        $this->pomanderSlot10 = $pomanderSlot10;

        return $this;
    }

    public function getPomanderSlot9(): ?DeepDungeonItem
    {
        return $this->pomanderSlot9;
    }

    public function setPomanderSlot9(?DeepDungeonItem $pomanderSlot9): self
    {
        $this->pomanderSlot9 = $pomanderSlot9;

        return $this;
    }

    public function getPomanderSlot8(): ?DeepDungeonItem
    {
        return $this->pomanderSlot8;
    }

    public function setPomanderSlot8(?DeepDungeonItem $pomanderSlot8): self
    {
        $this->pomanderSlot8 = $pomanderSlot8;

        return $this;
    }

    public function getPomanderSlot7(): ?DeepDungeonItem
    {
        return $this->pomanderSlot7;
    }

    public function setPomanderSlot7(?DeepDungeonItem $pomanderSlot7): self
    {
        $this->pomanderSlot7 = $pomanderSlot7;

        return $this;
    }

    public function getPomanderSlot6(): ?DeepDungeonItem
    {
        return $this->pomanderSlot6;
    }

    public function setPomanderSlot6(?DeepDungeonItem $pomanderSlot6): self
    {
        $this->pomanderSlot6 = $pomanderSlot6;

        return $this;
    }

    public function getPomanderSlot5(): ?DeepDungeonItem
    {
        return $this->pomanderSlot5;
    }

    public function setPomanderSlot5(?DeepDungeonItem $pomanderSlot5): self
    {
        $this->pomanderSlot5 = $pomanderSlot5;

        return $this;
    }

    public function getPomanderSlot4(): ?DeepDungeonItem
    {
        return $this->pomanderSlot4;
    }

    public function setPomanderSlot4(?DeepDungeonItem $pomanderSlot4): self
    {
        $this->pomanderSlot4 = $pomanderSlot4;

        return $this;
    }

    public function getPomanderSlot3(): ?DeepDungeonItem
    {
        return $this->pomanderSlot3;
    }

    public function setPomanderSlot3(?DeepDungeonItem $pomanderSlot3): self
    {
        $this->pomanderSlot3 = $pomanderSlot3;

        return $this;
    }

    public function getPomanderSlot2(): ?DeepDungeonItem
    {
        return $this->pomanderSlot2;
    }

    public function setPomanderSlot2(?DeepDungeonItem $pomanderSlot2): self
    {
        $this->pomanderSlot2 = $pomanderSlot2;

        return $this;
    }

    public function getPomanderSlot1(): ?DeepDungeonItem
    {
        return $this->pomanderSlot1;
    }

    public function setPomanderSlot1(?DeepDungeonItem $pomanderSlot1): self
    {
        $this->pomanderSlot1 = $pomanderSlot1;

        return $this;
    }

    public function getPomanderSlot0(): ?DeepDungeonItem
    {
        return $this->pomanderSlot0;
    }

    public function setPomanderSlot0(?DeepDungeonItem $pomanderSlot0): self
    {
        $this->pomanderSlot0 = $pomanderSlot0;

        return $this;
    }

    public function getAetherpoolArmor(): ?DeepDungeonEquipment
    {
        return $this->aetherpoolArmor;
    }

    public function setAetherpoolArmor(?DeepDungeonEquipment $aetherpoolArmor): self
    {
        $this->aetherpoolArmor = $aetherpoolArmor;

        return $this;
    }

    public function getAetherpoolArm(): ?DeepDungeonEquipment
    {
        return $this->aetherpoolArm;
    }

    public function setAetherpoolArm(?DeepDungeonEquipment $aetherpoolArm): self
    {
        $this->aetherpoolArm = $aetherpoolArm;

        return $this;
    }
}
