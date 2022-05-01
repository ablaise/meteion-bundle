<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GatheringLeve.
 *
 * @ORM\Table(name="gathering_leve", indexes={@ORM\Index(name="idx_fc057639fb0837b", columns={"route_0"}), @ORM\Index(name="idx_fc0576346d8accc", columns={"rule"}), @ORM\Index(name="idx_fc057636b9d2c1", columns={"route_3"}), @ORM\Index(name="idx_fc05763a4ecf1aa", columns={"bnpc_entry"}), @ORM\Index(name="idx_fc05763e8b7b3ed", columns={"route_1"}), @ORM\Index(name="idx_fc05763e7b2d2e9", columns={"required_item_1"}), @ORM\Index(name="idx_fc057637ebb8353", columns={"required_item_2"}), @ORM\Index(name="idx_fc0576371bee257", columns={"route_2"}), @ORM\Index(name="idx_fc057639bcb3c5", columns={"required_item_3"}), @ORM\Index(name="idx_fc0576390b5e27f", columns={"required_item_0"})})
 * @ORM\Entity
 */
class GatheringLeve
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="gathering_leve_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="required_item_qty_0", type="integer", nullable=true)
     */
    private $requiredItemQty0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="required_item_qty_1", type="integer", nullable=true)
     */
    private $requiredItemQty1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="required_item_qty_2", type="integer", nullable=true)
     */
    private $requiredItemQty2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="required_item_qty_3", type="integer", nullable=true)
     */
    private $requiredItemQty3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_number", type="integer", nullable=true)
     */
    private $itemNumber;

    /**
     * @var int|null
     *
     * @ORM\Column(name="varient", type="integer", nullable=true)
     */
    private $varient;

    /**
     * @var int|null
     *
     * @ORM\Column(name="objective_0", type="bigint", nullable=true)
     */
    private $objective0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="objective_1", type="bigint", nullable=true)
     */
    private $objective1;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="use_secondary_tool", type="boolean", nullable=true)
     */
    private $useSecondaryTool;

    /**
     * @var GatheringLeveBnpcEntry
     *
     * @ORM\ManyToOne(targetEntity="GatheringLeveBnpcEntry")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="bnpc_entry", referencedColumnName="pk")
     * })
     */
    private $bnpcEntry;

    /**
     * @var GatheringLeveRule
     *
     * @ORM\ManyToOne(targetEntity="GatheringLeveRule")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rule", referencedColumnName="pk")
     * })
     */
    private $rule;

    /**
     * @var EventItem
     *
     * @ORM\ManyToOne(targetEntity="EventItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="required_item_3", referencedColumnName="pk")
     * })
     */
    private $requiredItem3;

    /**
     * @var EventItem
     *
     * @ORM\ManyToOne(targetEntity="EventItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="required_item_2", referencedColumnName="pk")
     * })
     */
    private $requiredItem2;

    /**
     * @var EventItem
     *
     * @ORM\ManyToOne(targetEntity="EventItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="required_item_1", referencedColumnName="pk")
     * })
     */
    private $requiredItem1;

    /**
     * @var EventItem
     *
     * @ORM\ManyToOne(targetEntity="EventItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="required_item_0", referencedColumnName="pk")
     * })
     */
    private $requiredItem0;

    /**
     * @var GatheringLeveRoute
     *
     * @ORM\ManyToOne(targetEntity="GatheringLeveRoute")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="route_3", referencedColumnName="pk")
     * })
     */
    private $route3;

    /**
     * @var GatheringLeveRoute
     *
     * @ORM\ManyToOne(targetEntity="GatheringLeveRoute")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="route_2", referencedColumnName="pk")
     * })
     */
    private $route2;

    /**
     * @var GatheringLeveRoute
     *
     * @ORM\ManyToOne(targetEntity="GatheringLeveRoute")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="route_1", referencedColumnName="pk")
     * })
     */
    private $route1;

    /**
     * @var GatheringLeveRoute
     *
     * @ORM\ManyToOne(targetEntity="GatheringLeveRoute")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="route_0", referencedColumnName="pk")
     * })
     */
    private $route0;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getRequiredItemQty0(): ?int
    {
        return $this->requiredItemQty0;
    }

    public function setRequiredItemQty0(?int $requiredItemQty0): self
    {
        $this->requiredItemQty0 = $requiredItemQty0;

        return $this;
    }

    public function getRequiredItemQty1(): ?int
    {
        return $this->requiredItemQty1;
    }

    public function setRequiredItemQty1(?int $requiredItemQty1): self
    {
        $this->requiredItemQty1 = $requiredItemQty1;

        return $this;
    }

    public function getRequiredItemQty2(): ?int
    {
        return $this->requiredItemQty2;
    }

    public function setRequiredItemQty2(?int $requiredItemQty2): self
    {
        $this->requiredItemQty2 = $requiredItemQty2;

        return $this;
    }

    public function getRequiredItemQty3(): ?int
    {
        return $this->requiredItemQty3;
    }

    public function setRequiredItemQty3(?int $requiredItemQty3): self
    {
        $this->requiredItemQty3 = $requiredItemQty3;

        return $this;
    }

    public function getItemNumber(): ?int
    {
        return $this->itemNumber;
    }

    public function setItemNumber(?int $itemNumber): self
    {
        $this->itemNumber = $itemNumber;

        return $this;
    }

    public function getVarient(): ?int
    {
        return $this->varient;
    }

    public function setVarient(?int $varient): self
    {
        $this->varient = $varient;

        return $this;
    }

    public function getObjective0(): ?string
    {
        return $this->objective0;
    }

    public function setObjective0(?string $objective0): self
    {
        $this->objective0 = $objective0;

        return $this;
    }

    public function getObjective1(): ?string
    {
        return $this->objective1;
    }

    public function setObjective1(?string $objective1): self
    {
        $this->objective1 = $objective1;

        return $this;
    }

    public function getUseSecondaryTool(): ?bool
    {
        return $this->useSecondaryTool;
    }

    public function setUseSecondaryTool(?bool $useSecondaryTool): self
    {
        $this->useSecondaryTool = $useSecondaryTool;

        return $this;
    }

    public function getBnpcEntry(): ?GatheringLeveBnpcEntry
    {
        return $this->bnpcEntry;
    }

    public function setBnpcEntry(?GatheringLeveBnpcEntry $bnpcEntry): self
    {
        $this->bnpcEntry = $bnpcEntry;

        return $this;
    }

    public function getRule(): ?GatheringLeveRule
    {
        return $this->rule;
    }

    public function setRule(?GatheringLeveRule $rule): self
    {
        $this->rule = $rule;

        return $this;
    }

    public function getRequiredItem3(): ?EventItem
    {
        return $this->requiredItem3;
    }

    public function setRequiredItem3(?EventItem $requiredItem3): self
    {
        $this->requiredItem3 = $requiredItem3;

        return $this;
    }

    public function getRequiredItem2(): ?EventItem
    {
        return $this->requiredItem2;
    }

    public function setRequiredItem2(?EventItem $requiredItem2): self
    {
        $this->requiredItem2 = $requiredItem2;

        return $this;
    }

    public function getRequiredItem1(): ?EventItem
    {
        return $this->requiredItem1;
    }

    public function setRequiredItem1(?EventItem $requiredItem1): self
    {
        $this->requiredItem1 = $requiredItem1;

        return $this;
    }

    public function getRequiredItem0(): ?EventItem
    {
        return $this->requiredItem0;
    }

    public function setRequiredItem0(?EventItem $requiredItem0): self
    {
        $this->requiredItem0 = $requiredItem0;

        return $this;
    }

    public function getRoute3(): ?GatheringLeveRoute
    {
        return $this->route3;
    }

    public function setRoute3(?GatheringLeveRoute $route3): self
    {
        $this->route3 = $route3;

        return $this;
    }

    public function getRoute2(): ?GatheringLeveRoute
    {
        return $this->route2;
    }

    public function setRoute2(?GatheringLeveRoute $route2): self
    {
        $this->route2 = $route2;

        return $this;
    }

    public function getRoute1(): ?GatheringLeveRoute
    {
        return $this->route1;
    }

    public function setRoute1(?GatheringLeveRoute $route1): self
    {
        $this->route1 = $route1;

        return $this;
    }

    public function getRoute0(): ?GatheringLeveRoute
    {
        return $this->route0;
    }

    public function setRoute0(?GatheringLeveRoute $route0): self
    {
        $this->route0 = $route0;

        return $this;
    }
}
