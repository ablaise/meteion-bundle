<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CompanyCraftDraft.
 *
 * @ORM\Table(name="company_craft_draft", indexes={@ORM\Index(name="idx_71e1bfa0e7b2d2e9", columns={"required_item_1"}), @ORM\Index(name="idx_71e1bfa0a6576981", columns={"company_craft_draft_category"}), @ORM\Index(name="idx_71e1bfa090b5e27f", columns={"required_item_0"}), @ORM\Index(name="idx_71e1bfa07ebb8353", columns={"required_item_2"})})
 * @ORM\Entity
 */
class CompanyCraftDraft
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="company_craft_draft_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var int|null
     *
     * @ORM\Column(name="required_item_count_0", type="integer", nullable=true)
     */
    private $requiredItemCount0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="required_item_count_1", type="integer", nullable=true)
     */
    private $requiredItemCount1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="required_item_count_2", type="integer", nullable=true)
     */
    private $requiredItemCount2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="order", type="bigint", nullable=true)
     */
    private $order;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="required_item_2", referencedColumnName="pk")
     * })
     */
    private $requiredItem2;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="required_item_1", referencedColumnName="pk")
     * })
     */
    private $requiredItem1;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="required_item_0", referencedColumnName="pk")
     * })
     */
    private $requiredItem0;

    /**
     * @var CompanyCraftDraftCategory
     *
     * @ORM\ManyToOne(targetEntity="CompanyCraftDraftCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="company_craft_draft_category", referencedColumnName="pk")
     * })
     */
    private $companyCraftDraftCategory;

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

    public function getRequiredItemCount0(): ?int
    {
        return $this->requiredItemCount0;
    }

    public function setRequiredItemCount0(?int $requiredItemCount0): self
    {
        $this->requiredItemCount0 = $requiredItemCount0;

        return $this;
    }

    public function getRequiredItemCount1(): ?int
    {
        return $this->requiredItemCount1;
    }

    public function setRequiredItemCount1(?int $requiredItemCount1): self
    {
        $this->requiredItemCount1 = $requiredItemCount1;

        return $this;
    }

    public function getRequiredItemCount2(): ?int
    {
        return $this->requiredItemCount2;
    }

    public function setRequiredItemCount2(?int $requiredItemCount2): self
    {
        $this->requiredItemCount2 = $requiredItemCount2;

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

    public function getRequiredItem2(): ?Item
    {
        return $this->requiredItem2;
    }

    public function setRequiredItem2(?Item $requiredItem2): self
    {
        $this->requiredItem2 = $requiredItem2;

        return $this;
    }

    public function getRequiredItem1(): ?Item
    {
        return $this->requiredItem1;
    }

    public function setRequiredItem1(?Item $requiredItem1): self
    {
        $this->requiredItem1 = $requiredItem1;

        return $this;
    }

    public function getRequiredItem0(): ?Item
    {
        return $this->requiredItem0;
    }

    public function setRequiredItem0(?Item $requiredItem0): self
    {
        $this->requiredItem0 = $requiredItem0;

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
}
