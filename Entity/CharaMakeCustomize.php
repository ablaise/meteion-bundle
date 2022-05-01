<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CharaMakeCustomize.
 *
 * @ORM\Table(name="chara_make_customize", indexes={@ORM\Index(name="idx_712ff5fd13056f5", columns={"hint_item"}), @ORM\Index(name="idx_712ff5fd34c60353", columns={"hint"})})
 * @ORM\Entity
 */
class CharaMakeCustomize
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="chara_make_customize_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="feature_id", type="integer", nullable=true)
     */
    private $featureId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="icon", type="integer", nullable=true)
     */
    private $icon;

    /**
     * @var int|null
     *
     * @ORM\Column(name="data", type="bigint", nullable=true)
     */
    private $data;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_purchasable", type="boolean", nullable=true)
     */
    private $isPurchasable;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_7", type="integer", nullable=true)
     */
    private $column7;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="hint_item", referencedColumnName="pk")
     * })
     */
    private $hintItem;

    /**
     * @var Lobby
     *
     * @ORM\ManyToOne(targetEntity="Lobby")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="hint", referencedColumnName="pk")
     * })
     */
    private $hint;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getFeatureId(): ?int
    {
        return $this->featureId;
    }

    public function setFeatureId(?int $featureId): self
    {
        $this->featureId = $featureId;

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

    public function getData(): ?string
    {
        return $this->data;
    }

    public function setData(?string $data): self
    {
        $this->data = $data;

        return $this;
    }

    public function getIsPurchasable(): ?bool
    {
        return $this->isPurchasable;
    }

    public function setIsPurchasable(?bool $isPurchasable): self
    {
        $this->isPurchasable = $isPurchasable;

        return $this;
    }

    public function getColumn7(): ?int
    {
        return $this->column7;
    }

    public function setColumn7(?int $column7): self
    {
        $this->column7 = $column7;

        return $this;
    }

    public function getHintItem(): ?Item
    {
        return $this->hintItem;
    }

    public function setHintItem(?Item $hintItem): self
    {
        $this->hintItem = $hintItem;

        return $this;
    }

    public function getHint(): ?Lobby
    {
        return $this->hint;
    }

    public function setHint(?Lobby $hint): self
    {
        $this->hint = $hint;

        return $this;
    }
}
