<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RelicItem.
 *
 * @ORM\Table(name="relic_item", indexes={@ORM\Index(name="idx_94d49a16ee0edbf", columns={"gladiator_item"}), @ORM\Index(name="idx_94d49a16e1a88eba", columns={"pugilist_item"}), @ORM\Index(name="idx_94d49a16f981af69", columns={"arcanist_sch__item"}), @ORM\Index(name="idx_94d49a162ab71979", columns={"rogue_item"}), @ORM\Index(name="idx_94d49a16ded14aa3", columns={"lancer_item"}), @ORM\Index(name="idx_94d49a16fdd3917f", columns={"shield_item"}), @ORM\Index(name="idx_94d49a1675f9c64e", columns={"archer_item"}), @ORM\Index(name="idx_94d49a16c222c376", columns={"thaumaturge_item"}), @ORM\Index(name="idx_94d49a1698da1df2", columns={"marauder_item"}), @ORM\Index(name="idx_94d49a166dd5570b", columns={"conjurer_item"}), @ORM\Index(name="idx_94d49a168fdb8861", columns={"arcanist_smn__item"})})
 * @ORM\Entity
 */
class RelicItem
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="relic_item_pk_seq", allocationSize=1, initialValue=1)
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
     * @ORM\Column(name="column_13", type="bigint", nullable=true)
     */
    private $column13;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_14", type="bigint", nullable=true)
     */
    private $column14;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_15", type="bigint", nullable=true)
     */
    private $column15;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_16", type="bigint", nullable=true)
     */
    private $column16;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_17", type="bigint", nullable=true)
     */
    private $column17;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rogue_item", referencedColumnName="pk")
     * })
     */
    private $rogueItem;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="shield_item", referencedColumnName="pk")
     * })
     */
    private $shieldItem;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="arcanist_sch__item", referencedColumnName="pk")
     * })
     */
    private $arcanistSchItem;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="arcanist_smn__item", referencedColumnName="pk")
     * })
     */
    private $arcanistSmnItem;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="thaumaturge_item", referencedColumnName="pk")
     * })
     */
    private $thaumaturgeItem;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="conjurer_item", referencedColumnName="pk")
     * })
     */
    private $conjurerItem;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="archer_item", referencedColumnName="pk")
     * })
     */
    private $archerItem;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="lancer_item", referencedColumnName="pk")
     * })
     */
    private $lancerItem;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="marauder_item", referencedColumnName="pk")
     * })
     */
    private $marauderItem;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pugilist_item", referencedColumnName="pk")
     * })
     */
    private $pugilistItem;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gladiator_item", referencedColumnName="pk")
     * })
     */
    private $gladiatorItem;

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

    public function getColumn13(): ?string
    {
        return $this->column13;
    }

    public function setColumn13(?string $column13): self
    {
        $this->column13 = $column13;

        return $this;
    }

    public function getColumn14(): ?string
    {
        return $this->column14;
    }

    public function setColumn14(?string $column14): self
    {
        $this->column14 = $column14;

        return $this;
    }

    public function getColumn15(): ?string
    {
        return $this->column15;
    }

    public function setColumn15(?string $column15): self
    {
        $this->column15 = $column15;

        return $this;
    }

    public function getColumn16(): ?string
    {
        return $this->column16;
    }

    public function setColumn16(?string $column16): self
    {
        $this->column16 = $column16;

        return $this;
    }

    public function getColumn17(): ?string
    {
        return $this->column17;
    }

    public function setColumn17(?string $column17): self
    {
        $this->column17 = $column17;

        return $this;
    }

    public function getRogueItem(): ?Item
    {
        return $this->rogueItem;
    }

    public function setRogueItem(?Item $rogueItem): self
    {
        $this->rogueItem = $rogueItem;

        return $this;
    }

    public function getShieldItem(): ?Item
    {
        return $this->shieldItem;
    }

    public function setShieldItem(?Item $shieldItem): self
    {
        $this->shieldItem = $shieldItem;

        return $this;
    }

    public function getArcanistSchItem(): ?Item
    {
        return $this->arcanistSchItem;
    }

    public function setArcanistSchItem(?Item $arcanistSchItem): self
    {
        $this->arcanistSchItem = $arcanistSchItem;

        return $this;
    }

    public function getArcanistSmnItem(): ?Item
    {
        return $this->arcanistSmnItem;
    }

    public function setArcanistSmnItem(?Item $arcanistSmnItem): self
    {
        $this->arcanistSmnItem = $arcanistSmnItem;

        return $this;
    }

    public function getThaumaturgeItem(): ?Item
    {
        return $this->thaumaturgeItem;
    }

    public function setThaumaturgeItem(?Item $thaumaturgeItem): self
    {
        $this->thaumaturgeItem = $thaumaturgeItem;

        return $this;
    }

    public function getConjurerItem(): ?Item
    {
        return $this->conjurerItem;
    }

    public function setConjurerItem(?Item $conjurerItem): self
    {
        $this->conjurerItem = $conjurerItem;

        return $this;
    }

    public function getArcherItem(): ?Item
    {
        return $this->archerItem;
    }

    public function setArcherItem(?Item $archerItem): self
    {
        $this->archerItem = $archerItem;

        return $this;
    }

    public function getLancerItem(): ?Item
    {
        return $this->lancerItem;
    }

    public function setLancerItem(?Item $lancerItem): self
    {
        $this->lancerItem = $lancerItem;

        return $this;
    }

    public function getMarauderItem(): ?Item
    {
        return $this->marauderItem;
    }

    public function setMarauderItem(?Item $marauderItem): self
    {
        $this->marauderItem = $marauderItem;

        return $this;
    }

    public function getPugilistItem(): ?Item
    {
        return $this->pugilistItem;
    }

    public function setPugilistItem(?Item $pugilistItem): self
    {
        $this->pugilistItem = $pugilistItem;

        return $this;
    }

    public function getGladiatorItem(): ?Item
    {
        return $this->gladiatorItem;
    }

    public function setGladiatorItem(?Item $gladiatorItem): self
    {
        $this->gladiatorItem = $gladiatorItem;

        return $this;
    }
}
