<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HousingYardObject.
 *
 * @ORM\Table(name="housing_yard_object", indexes={@ORM\Index(name="idx_7c0c439f9e521d46", columns={"custom_talk"}), @ORM\Index(name="idx_7c0c439f1f1b251e", columns={"item"})})
 * @ORM\Entity
 */
class HousingYardObject
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="housing_yard_object_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="model_key", type="bigint", nullable=true)
     */
    private $modelKey;

    /**
     * @var int|null
     *
     * @ORM\Column(name="housing_item_category", type="integer", nullable=true)
     */
    private $housingItemCategory;

    /**
     * @var int|null
     *
     * @ORM\Column(name="usage_type", type="integer", nullable=true)
     */
    private $usageType;

    /**
     * @var int|null
     *
     * @ORM\Column(name="usage_parameter", type="bigint", nullable=true)
     */
    private $usageParameter;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_5", type="integer", nullable=true)
     */
    private $column5;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="destroy_on_removal", type="boolean", nullable=true)
     */
    private $destroyOnRemoval;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_9", type="boolean", nullable=true)
     */
    private $column9;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_10", type="boolean", nullable=true)
     */
    private $column10;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_11", type="integer", nullable=true)
     */
    private $column11;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_12", type="integer", nullable=true)
     */
    private $column12;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_13", type="integer", nullable=true)
     */
    private $column13;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_14", type="boolean", nullable=true)
     */
    private $column14;

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
     * @var CustomTalk
     *
     * @ORM\ManyToOne(targetEntity="CustomTalk")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="custom_talk", referencedColumnName="pk")
     * })
     */
    private $customTalk;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getModelKey(): ?string
    {
        return $this->modelKey;
    }

    public function setModelKey(?string $modelKey): self
    {
        $this->modelKey = $modelKey;

        return $this;
    }

    public function getHousingItemCategory(): ?int
    {
        return $this->housingItemCategory;
    }

    public function setHousingItemCategory(?int $housingItemCategory): self
    {
        $this->housingItemCategory = $housingItemCategory;

        return $this;
    }

    public function getUsageType(): ?int
    {
        return $this->usageType;
    }

    public function setUsageType(?int $usageType): self
    {
        $this->usageType = $usageType;

        return $this;
    }

    public function getUsageParameter(): ?string
    {
        return $this->usageParameter;
    }

    public function setUsageParameter(?string $usageParameter): self
    {
        $this->usageParameter = $usageParameter;

        return $this;
    }

    public function getColumn5(): ?int
    {
        return $this->column5;
    }

    public function setColumn5(?int $column5): self
    {
        $this->column5 = $column5;

        return $this;
    }

    public function getDestroyOnRemoval(): ?bool
    {
        return $this->destroyOnRemoval;
    }

    public function setDestroyOnRemoval(?bool $destroyOnRemoval): self
    {
        $this->destroyOnRemoval = $destroyOnRemoval;

        return $this;
    }

    public function getColumn9(): ?bool
    {
        return $this->column9;
    }

    public function setColumn9(?bool $column9): self
    {
        $this->column9 = $column9;

        return $this;
    }

    public function getColumn10(): ?bool
    {
        return $this->column10;
    }

    public function setColumn10(?bool $column10): self
    {
        $this->column10 = $column10;

        return $this;
    }

    public function getColumn11(): ?int
    {
        return $this->column11;
    }

    public function setColumn11(?int $column11): self
    {
        $this->column11 = $column11;

        return $this;
    }

    public function getColumn12(): ?int
    {
        return $this->column12;
    }

    public function setColumn12(?int $column12): self
    {
        $this->column12 = $column12;

        return $this;
    }

    public function getColumn13(): ?int
    {
        return $this->column13;
    }

    public function setColumn13(?int $column13): self
    {
        $this->column13 = $column13;

        return $this;
    }

    public function getColumn14(): ?bool
    {
        return $this->column14;
    }

    public function setColumn14(?bool $column14): self
    {
        $this->column14 = $column14;

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

    public function getCustomTalk(): ?CustomTalk
    {
        return $this->customTalk;
    }

    public function setCustomTalk(?CustomTalk $customTalk): self
    {
        $this->customTalk = $customTalk;

        return $this;
    }
}
