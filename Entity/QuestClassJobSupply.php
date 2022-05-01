<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * QuestClassJobSupply.
 *
 * @ORM\Table(name="quest_class_job_supply", indexes={@ORM\Index(name="idx_b82158f0ae8947ec", columns={"class_job_category"}), @ORM\Index(name="idx_b82158f01f1b251e", columns={"item"}), @ORM\Index(name="idx_b82158f0ccf3f691", columns={"enpc_resident"})})
 * @ORM\Entity
 */
class QuestClassJobSupply
{
    /**
     * @var string
     *
     * @ORM\Column(name="pk", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="quest_class_job_supply_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_2", type="integer", nullable=true)
     */
    private $column2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount_required", type="integer", nullable=true)
     */
    private $amountRequired;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="item_hq", type="boolean", nullable=true)
     */
    private $itemHq;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item", referencedColumnName="pk")
     * })
     */
    private $item;

    /**
     * @var EnpcResident
     *
     * @ORM\ManyToOne(targetEntity="EnpcResident")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="enpc_resident", referencedColumnName="pk")
     * })
     */
    private $enpcResident;

    /**
     * @var ClassJobCategory
     *
     * @ORM\ManyToOne(targetEntity="ClassJobCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="class_job_category", referencedColumnName="pk")
     * })
     */
    private $classJobCategory;

    public function getPk(): ?string
    {
        return $this->pk;
    }

    public function getColumn2(): ?int
    {
        return $this->column2;
    }

    public function setColumn2(?int $column2): self
    {
        $this->column2 = $column2;

        return $this;
    }

    public function getAmountRequired(): ?int
    {
        return $this->amountRequired;
    }

    public function setAmountRequired(?int $amountRequired): self
    {
        $this->amountRequired = $amountRequired;

        return $this;
    }

    public function getItemHq(): ?bool
    {
        return $this->itemHq;
    }

    public function setItemHq(?bool $itemHq): self
    {
        $this->itemHq = $itemHq;

        return $this;
    }

    public function getItem(): ?Item
    {
        return $this->item;
    }

    public function setItem(?Item $item): self
    {
        $this->item = $item;

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

    public function getClassJobCategory(): ?ClassJobCategory
    {
        return $this->classJobCategory;
    }

    public function setClassJobCategory(?ClassJobCategory $classJobCategory): self
    {
        $this->classJobCategory = $classJobCategory;

        return $this;
    }
}
