<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CompanyCraftProcess.
 *
 * @ORM\Table(name="company_craft_process", indexes={@ORM\Index(name="idx_7f8544908db07140", columns={"supply_item_3"}), @ORM\Index(name="idx_7f854490c7bb7cd4", columns={"supply_item_11"}), @ORM\Index(name="idx_7f854490fdda85cf", columns={"supply_item_6"}), @ORM\Index(name="idx_7f85449063be106c", columns={"supply_item_1"}), @ORM\Index(name="idx_7f8544908addb559", columns={"supply_item_7"}), @ORM\Index(name="idx_7f85449014b920fa", columns={"supply_item_0"}), @ORM\Index(name="idx_7f85449013d4e4e3", columns={"supply_item_4"}), @ORM\Index(name="idx_7f85449064d3d475", columns={"supply_item_5"}), @ORM\Index(name="idx_7f854490b0bc4c42", columns={"supply_item_10"}), @ORM\Index(name="idx_7f854490fab741d6", columns={"supply_item_2"}), @ORM\Index(name="idx_7f8544901a62a8c8", columns={"supply_item_8"}), @ORM\Index(name="idx_7f8544906d65985e", columns={"supply_item_9"})})
 * @ORM\Entity
 */
class CompanyCraftProcess
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="company_craft_process_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="set_quantity_0", type="bigint", nullable=true)
     */
    private $setQuantity0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sets_required_0", type="bigint", nullable=true)
     */
    private $setsRequired0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="set_quantity_1", type="bigint", nullable=true)
     */
    private $setQuantity1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sets_required_1", type="bigint", nullable=true)
     */
    private $setsRequired1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="set_quantity_2", type="bigint", nullable=true)
     */
    private $setQuantity2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sets_required_2", type="bigint", nullable=true)
     */
    private $setsRequired2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="set_quantity_3", type="bigint", nullable=true)
     */
    private $setQuantity3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sets_required_3", type="bigint", nullable=true)
     */
    private $setsRequired3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="set_quantity_4", type="bigint", nullable=true)
     */
    private $setQuantity4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sets_required_4", type="bigint", nullable=true)
     */
    private $setsRequired4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="set_quantity_5", type="bigint", nullable=true)
     */
    private $setQuantity5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sets_required_5", type="bigint", nullable=true)
     */
    private $setsRequired5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="set_quantity_6", type="bigint", nullable=true)
     */
    private $setQuantity6;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sets_required_6", type="bigint", nullable=true)
     */
    private $setsRequired6;

    /**
     * @var int|null
     *
     * @ORM\Column(name="set_quantity_7", type="bigint", nullable=true)
     */
    private $setQuantity7;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sets_required_7", type="bigint", nullable=true)
     */
    private $setsRequired7;

    /**
     * @var int|null
     *
     * @ORM\Column(name="set_quantity_8", type="bigint", nullable=true)
     */
    private $setQuantity8;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sets_required_8", type="bigint", nullable=true)
     */
    private $setsRequired8;

    /**
     * @var int|null
     *
     * @ORM\Column(name="set_quantity_9", type="bigint", nullable=true)
     */
    private $setQuantity9;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sets_required_9", type="bigint", nullable=true)
     */
    private $setsRequired9;

    /**
     * @var int|null
     *
     * @ORM\Column(name="set_quantity_10", type="bigint", nullable=true)
     */
    private $setQuantity10;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sets_required_10", type="bigint", nullable=true)
     */
    private $setsRequired10;

    /**
     * @var int|null
     *
     * @ORM\Column(name="set_quantity_11", type="bigint", nullable=true)
     */
    private $setQuantity11;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sets_required_11", type="bigint", nullable=true)
     */
    private $setsRequired11;

    /**
     * @var CompanyCraftSupplyItem
     *
     * @ORM\ManyToOne(targetEntity="CompanyCraftSupplyItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="supply_item_11", referencedColumnName="pk")
     * })
     */
    private $supplyItem11;

    /**
     * @var CompanyCraftSupplyItem
     *
     * @ORM\ManyToOne(targetEntity="CompanyCraftSupplyItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="supply_item_10", referencedColumnName="pk")
     * })
     */
    private $supplyItem10;

    /**
     * @var CompanyCraftSupplyItem
     *
     * @ORM\ManyToOne(targetEntity="CompanyCraftSupplyItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="supply_item_9", referencedColumnName="pk")
     * })
     */
    private $supplyItem9;

    /**
     * @var CompanyCraftSupplyItem
     *
     * @ORM\ManyToOne(targetEntity="CompanyCraftSupplyItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="supply_item_8", referencedColumnName="pk")
     * })
     */
    private $supplyItem8;

    /**
     * @var CompanyCraftSupplyItem
     *
     * @ORM\ManyToOne(targetEntity="CompanyCraftSupplyItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="supply_item_7", referencedColumnName="pk")
     * })
     */
    private $supplyItem7;

    /**
     * @var CompanyCraftSupplyItem
     *
     * @ORM\ManyToOne(targetEntity="CompanyCraftSupplyItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="supply_item_6", referencedColumnName="pk")
     * })
     */
    private $supplyItem6;

    /**
     * @var CompanyCraftSupplyItem
     *
     * @ORM\ManyToOne(targetEntity="CompanyCraftSupplyItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="supply_item_5", referencedColumnName="pk")
     * })
     */
    private $supplyItem5;

    /**
     * @var CompanyCraftSupplyItem
     *
     * @ORM\ManyToOne(targetEntity="CompanyCraftSupplyItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="supply_item_4", referencedColumnName="pk")
     * })
     */
    private $supplyItem4;

    /**
     * @var CompanyCraftSupplyItem
     *
     * @ORM\ManyToOne(targetEntity="CompanyCraftSupplyItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="supply_item_3", referencedColumnName="pk")
     * })
     */
    private $supplyItem3;

    /**
     * @var CompanyCraftSupplyItem
     *
     * @ORM\ManyToOne(targetEntity="CompanyCraftSupplyItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="supply_item_2", referencedColumnName="pk")
     * })
     */
    private $supplyItem2;

    /**
     * @var CompanyCraftSupplyItem
     *
     * @ORM\ManyToOne(targetEntity="CompanyCraftSupplyItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="supply_item_1", referencedColumnName="pk")
     * })
     */
    private $supplyItem1;

    /**
     * @var CompanyCraftSupplyItem
     *
     * @ORM\ManyToOne(targetEntity="CompanyCraftSupplyItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="supply_item_0", referencedColumnName="pk")
     * })
     */
    private $supplyItem0;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getSetQuantity0(): ?string
    {
        return $this->setQuantity0;
    }

    public function setSetQuantity0(?string $setQuantity0): self
    {
        $this->setQuantity0 = $setQuantity0;

        return $this;
    }

    public function getSetsRequired0(): ?string
    {
        return $this->setsRequired0;
    }

    public function setSetsRequired0(?string $setsRequired0): self
    {
        $this->setsRequired0 = $setsRequired0;

        return $this;
    }

    public function getSetQuantity1(): ?string
    {
        return $this->setQuantity1;
    }

    public function setSetQuantity1(?string $setQuantity1): self
    {
        $this->setQuantity1 = $setQuantity1;

        return $this;
    }

    public function getSetsRequired1(): ?string
    {
        return $this->setsRequired1;
    }

    public function setSetsRequired1(?string $setsRequired1): self
    {
        $this->setsRequired1 = $setsRequired1;

        return $this;
    }

    public function getSetQuantity2(): ?string
    {
        return $this->setQuantity2;
    }

    public function setSetQuantity2(?string $setQuantity2): self
    {
        $this->setQuantity2 = $setQuantity2;

        return $this;
    }

    public function getSetsRequired2(): ?string
    {
        return $this->setsRequired2;
    }

    public function setSetsRequired2(?string $setsRequired2): self
    {
        $this->setsRequired2 = $setsRequired2;

        return $this;
    }

    public function getSetQuantity3(): ?string
    {
        return $this->setQuantity3;
    }

    public function setSetQuantity3(?string $setQuantity3): self
    {
        $this->setQuantity3 = $setQuantity3;

        return $this;
    }

    public function getSetsRequired3(): ?string
    {
        return $this->setsRequired3;
    }

    public function setSetsRequired3(?string $setsRequired3): self
    {
        $this->setsRequired3 = $setsRequired3;

        return $this;
    }

    public function getSetQuantity4(): ?string
    {
        return $this->setQuantity4;
    }

    public function setSetQuantity4(?string $setQuantity4): self
    {
        $this->setQuantity4 = $setQuantity4;

        return $this;
    }

    public function getSetsRequired4(): ?string
    {
        return $this->setsRequired4;
    }

    public function setSetsRequired4(?string $setsRequired4): self
    {
        $this->setsRequired4 = $setsRequired4;

        return $this;
    }

    public function getSetQuantity5(): ?string
    {
        return $this->setQuantity5;
    }

    public function setSetQuantity5(?string $setQuantity5): self
    {
        $this->setQuantity5 = $setQuantity5;

        return $this;
    }

    public function getSetsRequired5(): ?string
    {
        return $this->setsRequired5;
    }

    public function setSetsRequired5(?string $setsRequired5): self
    {
        $this->setsRequired5 = $setsRequired5;

        return $this;
    }

    public function getSetQuantity6(): ?string
    {
        return $this->setQuantity6;
    }

    public function setSetQuantity6(?string $setQuantity6): self
    {
        $this->setQuantity6 = $setQuantity6;

        return $this;
    }

    public function getSetsRequired6(): ?string
    {
        return $this->setsRequired6;
    }

    public function setSetsRequired6(?string $setsRequired6): self
    {
        $this->setsRequired6 = $setsRequired6;

        return $this;
    }

    public function getSetQuantity7(): ?string
    {
        return $this->setQuantity7;
    }

    public function setSetQuantity7(?string $setQuantity7): self
    {
        $this->setQuantity7 = $setQuantity7;

        return $this;
    }

    public function getSetsRequired7(): ?string
    {
        return $this->setsRequired7;
    }

    public function setSetsRequired7(?string $setsRequired7): self
    {
        $this->setsRequired7 = $setsRequired7;

        return $this;
    }

    public function getSetQuantity8(): ?string
    {
        return $this->setQuantity8;
    }

    public function setSetQuantity8(?string $setQuantity8): self
    {
        $this->setQuantity8 = $setQuantity8;

        return $this;
    }

    public function getSetsRequired8(): ?string
    {
        return $this->setsRequired8;
    }

    public function setSetsRequired8(?string $setsRequired8): self
    {
        $this->setsRequired8 = $setsRequired8;

        return $this;
    }

    public function getSetQuantity9(): ?string
    {
        return $this->setQuantity9;
    }

    public function setSetQuantity9(?string $setQuantity9): self
    {
        $this->setQuantity9 = $setQuantity9;

        return $this;
    }

    public function getSetsRequired9(): ?string
    {
        return $this->setsRequired9;
    }

    public function setSetsRequired9(?string $setsRequired9): self
    {
        $this->setsRequired9 = $setsRequired9;

        return $this;
    }

    public function getSetQuantity10(): ?string
    {
        return $this->setQuantity10;
    }

    public function setSetQuantity10(?string $setQuantity10): self
    {
        $this->setQuantity10 = $setQuantity10;

        return $this;
    }

    public function getSetsRequired10(): ?string
    {
        return $this->setsRequired10;
    }

    public function setSetsRequired10(?string $setsRequired10): self
    {
        $this->setsRequired10 = $setsRequired10;

        return $this;
    }

    public function getSetQuantity11(): ?string
    {
        return $this->setQuantity11;
    }

    public function setSetQuantity11(?string $setQuantity11): self
    {
        $this->setQuantity11 = $setQuantity11;

        return $this;
    }

    public function getSetsRequired11(): ?string
    {
        return $this->setsRequired11;
    }

    public function setSetsRequired11(?string $setsRequired11): self
    {
        $this->setsRequired11 = $setsRequired11;

        return $this;
    }

    public function getSupplyItem11(): ?CompanyCraftSupplyItem
    {
        return $this->supplyItem11;
    }

    public function setSupplyItem11(?CompanyCraftSupplyItem $supplyItem11): self
    {
        $this->supplyItem11 = $supplyItem11;

        return $this;
    }

    public function getSupplyItem10(): ?CompanyCraftSupplyItem
    {
        return $this->supplyItem10;
    }

    public function setSupplyItem10(?CompanyCraftSupplyItem $supplyItem10): self
    {
        $this->supplyItem10 = $supplyItem10;

        return $this;
    }

    public function getSupplyItem9(): ?CompanyCraftSupplyItem
    {
        return $this->supplyItem9;
    }

    public function setSupplyItem9(?CompanyCraftSupplyItem $supplyItem9): self
    {
        $this->supplyItem9 = $supplyItem9;

        return $this;
    }

    public function getSupplyItem8(): ?CompanyCraftSupplyItem
    {
        return $this->supplyItem8;
    }

    public function setSupplyItem8(?CompanyCraftSupplyItem $supplyItem8): self
    {
        $this->supplyItem8 = $supplyItem8;

        return $this;
    }

    public function getSupplyItem7(): ?CompanyCraftSupplyItem
    {
        return $this->supplyItem7;
    }

    public function setSupplyItem7(?CompanyCraftSupplyItem $supplyItem7): self
    {
        $this->supplyItem7 = $supplyItem7;

        return $this;
    }

    public function getSupplyItem6(): ?CompanyCraftSupplyItem
    {
        return $this->supplyItem6;
    }

    public function setSupplyItem6(?CompanyCraftSupplyItem $supplyItem6): self
    {
        $this->supplyItem6 = $supplyItem6;

        return $this;
    }

    public function getSupplyItem5(): ?CompanyCraftSupplyItem
    {
        return $this->supplyItem5;
    }

    public function setSupplyItem5(?CompanyCraftSupplyItem $supplyItem5): self
    {
        $this->supplyItem5 = $supplyItem5;

        return $this;
    }

    public function getSupplyItem4(): ?CompanyCraftSupplyItem
    {
        return $this->supplyItem4;
    }

    public function setSupplyItem4(?CompanyCraftSupplyItem $supplyItem4): self
    {
        $this->supplyItem4 = $supplyItem4;

        return $this;
    }

    public function getSupplyItem3(): ?CompanyCraftSupplyItem
    {
        return $this->supplyItem3;
    }

    public function setSupplyItem3(?CompanyCraftSupplyItem $supplyItem3): self
    {
        $this->supplyItem3 = $supplyItem3;

        return $this;
    }

    public function getSupplyItem2(): ?CompanyCraftSupplyItem
    {
        return $this->supplyItem2;
    }

    public function setSupplyItem2(?CompanyCraftSupplyItem $supplyItem2): self
    {
        $this->supplyItem2 = $supplyItem2;

        return $this;
    }

    public function getSupplyItem1(): ?CompanyCraftSupplyItem
    {
        return $this->supplyItem1;
    }

    public function setSupplyItem1(?CompanyCraftSupplyItem $supplyItem1): self
    {
        $this->supplyItem1 = $supplyItem1;

        return $this;
    }

    public function getSupplyItem0(): ?CompanyCraftSupplyItem
    {
        return $this->supplyItem0;
    }

    public function setSupplyItem0(?CompanyCraftSupplyItem $supplyItem0): self
    {
        $this->supplyItem0 = $supplyItem0;

        return $this;
    }
}
