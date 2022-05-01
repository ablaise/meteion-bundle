<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CompanyCraftSequence.
 *
 * @ORM\Table(name="company_craft_sequence", indexes={@ORM\Index(name="idx_bb1cea425f66e79a", columns={"company_craft_part_6"}), @ORM\Index(name="idx_bb1cea42c66fb620", columns={"company_craft_part_5"}), @ORM\Index(name="idx_bb1cea42b60542af", columns={"company_craft_part_0"}), @ORM\Index(name="idx_bb1cea4271e1bfa0", columns={"company_craft_draft"}), @ORM\Index(name="idx_bb1cea42580b2383", columns={"company_craft_part_2"}), @ORM\Index(name="idx_bb1cea422861d70c", columns={"company_craft_part_7"}), @ORM\Index(name="idx_bb1cea42a6576981", columns={"company_craft_draft_category"}), @ORM\Index(name="idx_bb1cea42c1027239", columns={"company_craft_part_1"}), @ORM\Index(name="idx_bb1cea428f203e50", columns={"result_item"}), @ORM\Index(name="idx_bb1cea42b16886b6", columns={"company_craft_part_4"}), @ORM\Index(name="idx_bb1cea422f0c1315", columns={"company_craft_part_3"}), @ORM\Index(name="idx_bb1cea42c9cc93c2", columns={"company_craft_type"})})
 * @ORM\Entity
 */
class CompanyCraftSequence
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="company_craft_sequence_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="category", type="integer", nullable=true)
     */
    private $category;

    /**
     * @var int|null
     *
     * @ORM\Column(name="order", type="bigint", nullable=true)
     */
    private $order;

    /**
     * @var CompanyCraftPart
     *
     * @ORM\ManyToOne(targetEntity="CompanyCraftPart")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="company_craft_part_7", referencedColumnName="pk")
     * })
     */
    private $companyCraftPart7;

    /**
     * @var CompanyCraftPart
     *
     * @ORM\ManyToOne(targetEntity="CompanyCraftPart")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="company_craft_part_6", referencedColumnName="pk")
     * })
     */
    private $companyCraftPart6;

    /**
     * @var CompanyCraftPart
     *
     * @ORM\ManyToOne(targetEntity="CompanyCraftPart")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="company_craft_part_5", referencedColumnName="pk")
     * })
     */
    private $companyCraftPart5;

    /**
     * @var CompanyCraftPart
     *
     * @ORM\ManyToOne(targetEntity="CompanyCraftPart")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="company_craft_part_4", referencedColumnName="pk")
     * })
     */
    private $companyCraftPart4;

    /**
     * @var CompanyCraftPart
     *
     * @ORM\ManyToOne(targetEntity="CompanyCraftPart")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="company_craft_part_3", referencedColumnName="pk")
     * })
     */
    private $companyCraftPart3;

    /**
     * @var CompanyCraftPart
     *
     * @ORM\ManyToOne(targetEntity="CompanyCraftPart")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="company_craft_part_2", referencedColumnName="pk")
     * })
     */
    private $companyCraftPart2;

    /**
     * @var CompanyCraftPart
     *
     * @ORM\ManyToOne(targetEntity="CompanyCraftPart")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="company_craft_part_1", referencedColumnName="pk")
     * })
     */
    private $companyCraftPart1;

    /**
     * @var CompanyCraftPart
     *
     * @ORM\ManyToOne(targetEntity="CompanyCraftPart")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="company_craft_part_0", referencedColumnName="pk")
     * })
     */
    private $companyCraftPart0;

    /**
     * @var CompanyCraftDraft
     *
     * @ORM\ManyToOne(targetEntity="CompanyCraftDraft")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="company_craft_draft", referencedColumnName="pk")
     * })
     */
    private $companyCraftDraft;

    /**
     * @var CompanyCraftType
     *
     * @ORM\ManyToOne(targetEntity="CompanyCraftType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="company_craft_type", referencedColumnName="pk")
     * })
     */
    private $companyCraftType;

    /**
     * @var CompanyCraftDraftCategory
     *
     * @ORM\ManyToOne(targetEntity="CompanyCraftDraftCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="company_craft_draft_category", referencedColumnName="pk")
     * })
     */
    private $companyCraftDraftCategory;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="result_item", referencedColumnName="pk")
     * })
     */
    private $resultItem;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getCategory(): ?int
    {
        return $this->category;
    }

    public function setCategory(?int $category): self
    {
        $this->category = $category;

        return $this;
    }

    public function getOrder(): ?string
    {
        return $this->order;
    }

    public function setOrder(?string $order): self
    {
        $this->order = $order;

        return $this;
    }

    public function getCompanyCraftPart7(): ?CompanyCraftPart
    {
        return $this->companyCraftPart7;
    }

    public function setCompanyCraftPart7(?CompanyCraftPart $companyCraftPart7): self
    {
        $this->companyCraftPart7 = $companyCraftPart7;

        return $this;
    }

    public function getCompanyCraftPart6(): ?CompanyCraftPart
    {
        return $this->companyCraftPart6;
    }

    public function setCompanyCraftPart6(?CompanyCraftPart $companyCraftPart6): self
    {
        $this->companyCraftPart6 = $companyCraftPart6;

        return $this;
    }

    public function getCompanyCraftPart5(): ?CompanyCraftPart
    {
        return $this->companyCraftPart5;
    }

    public function setCompanyCraftPart5(?CompanyCraftPart $companyCraftPart5): self
    {
        $this->companyCraftPart5 = $companyCraftPart5;

        return $this;
    }

    public function getCompanyCraftPart4(): ?CompanyCraftPart
    {
        return $this->companyCraftPart4;
    }

    public function setCompanyCraftPart4(?CompanyCraftPart $companyCraftPart4): self
    {
        $this->companyCraftPart4 = $companyCraftPart4;

        return $this;
    }

    public function getCompanyCraftPart3(): ?CompanyCraftPart
    {
        return $this->companyCraftPart3;
    }

    public function setCompanyCraftPart3(?CompanyCraftPart $companyCraftPart3): self
    {
        $this->companyCraftPart3 = $companyCraftPart3;

        return $this;
    }

    public function getCompanyCraftPart2(): ?CompanyCraftPart
    {
        return $this->companyCraftPart2;
    }

    public function setCompanyCraftPart2(?CompanyCraftPart $companyCraftPart2): self
    {
        $this->companyCraftPart2 = $companyCraftPart2;

        return $this;
    }

    public function getCompanyCraftPart1(): ?CompanyCraftPart
    {
        return $this->companyCraftPart1;
    }

    public function setCompanyCraftPart1(?CompanyCraftPart $companyCraftPart1): self
    {
        $this->companyCraftPart1 = $companyCraftPart1;

        return $this;
    }

    public function getCompanyCraftPart0(): ?CompanyCraftPart
    {
        return $this->companyCraftPart0;
    }

    public function setCompanyCraftPart0(?CompanyCraftPart $companyCraftPart0): self
    {
        $this->companyCraftPart0 = $companyCraftPart0;

        return $this;
    }

    public function getCompanyCraftDraft(): ?CompanyCraftDraft
    {
        return $this->companyCraftDraft;
    }

    public function setCompanyCraftDraft(?CompanyCraftDraft $companyCraftDraft): self
    {
        $this->companyCraftDraft = $companyCraftDraft;

        return $this;
    }

    public function getCompanyCraftType(): ?CompanyCraftType
    {
        return $this->companyCraftType;
    }

    public function setCompanyCraftType(?CompanyCraftType $companyCraftType): self
    {
        $this->companyCraftType = $companyCraftType;

        return $this;
    }

    public function getCompanyCraftDraftCategory(): ?CompanyCraftDraftCategory
    {
        return $this->companyCraftDraftCategory;
    }

    public function setCompanyCraftDraftCategory(?CompanyCraftDraftCategory $companyCraftDraftCategory): self
    {
        $this->companyCraftDraftCategory = $companyCraftDraftCategory;

        return $this;
    }

    public function getResultItem(): ?Item
    {
        return $this->resultItem;
    }

    public function setResultItem(?Item $resultItem): self
    {
        $this->resultItem = $resultItem;

        return $this;
    }
}
