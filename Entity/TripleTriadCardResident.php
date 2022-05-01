<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TripleTriadCardResident.
 *
 * @ORM\Table(name="triple_triad_card_resident", indexes={@ORM\Index(name="idx_4bbf8e4317f817", columns={"quest"}), @ORM\Index(name="idx_4bbf8ed55dfae8", columns={"triple_triad_card_type"}), @ORM\Index(name="idx_4bbf8ecd46de9f", columns={"triple_triad_card_rarity"})})
 * @ORM\Entity
 */
class TripleTriadCardResident
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="triple_triad_card_resident_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_1", type="bigint", nullable=true)
     */
    private $column1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="top", type="integer", nullable=true)
     */
    private $top;

    /**
     * @var int|null
     *
     * @ORM\Column(name="bottom", type="integer", nullable=true)
     */
    private $bottom;

    /**
     * @var int|null
     *
     * @ORM\Column(name="left", type="integer", nullable=true)
     */
    private $left;

    /**
     * @var int|null
     *
     * @ORM\Column(name="right", type="integer", nullable=true)
     */
    private $right;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sale_value", type="bigint", nullable=true)
     */
    private $saleValue;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sort_key", type="integer", nullable=true)
     */
    private $sortKey;

    /**
     * @var int|null
     *
     * @ORM\Column(name="order", type="bigint", nullable=true)
     */
    private $order;

    /**
     * @var int|null
     *
     * @ORM\Column(name="uipriority", type="integer", nullable=true)
     */
    private $uipriority;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_12", type="boolean", nullable=true)
     */
    private $column12;

    /**
     * @var int|null
     *
     * @ORM\Column(name="acquisition_type", type="integer", nullable=true)
     */
    private $acquisitionType;

    /**
     * @var int|null
     *
     * @ORM\Column(name="acquisition", type="integer", nullable=true)
     */
    private $acquisition;

    /**
     * @var int|null
     *
     * @ORM\Column(name="location", type="integer", nullable=true)
     */
    private $location;

    /**
     * @var Quest
     *
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quest", referencedColumnName="pk")
     * })
     */
    private $quest;

    /**
     * @var TripleTriadCardType
     *
     * @ORM\ManyToOne(targetEntity="TripleTriadCardType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="triple_triad_card_type", referencedColumnName="pk")
     * })
     */
    private $tripleTriadCardType;

    /**
     * @var TripleTriadCardRarity
     *
     * @ORM\ManyToOne(targetEntity="TripleTriadCardRarity")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="triple_triad_card_rarity", referencedColumnName="pk")
     * })
     */
    private $tripleTriadCardRarity;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getColumn1(): ?string
    {
        return $this->column1;
    }

    public function setColumn1(?string $column1): self
    {
        $this->column1 = $column1;

        return $this;
    }

    public function getTop(): ?int
    {
        return $this->top;
    }

    public function setTop(?int $top): self
    {
        $this->top = $top;

        return $this;
    }

    public function getBottom(): ?int
    {
        return $this->bottom;
    }

    public function setBottom(?int $bottom): self
    {
        $this->bottom = $bottom;

        return $this;
    }

    public function getLeft(): ?int
    {
        return $this->left;
    }

    public function setLeft(?int $left): self
    {
        $this->left = $left;

        return $this;
    }

    public function getRight(): ?int
    {
        return $this->right;
    }

    public function setRight(?int $right): self
    {
        $this->right = $right;

        return $this;
    }

    public function getSaleValue(): ?string
    {
        return $this->saleValue;
    }

    public function setSaleValue(?string $saleValue): self
    {
        $this->saleValue = $saleValue;

        return $this;
    }

    public function getSortKey(): ?int
    {
        return $this->sortKey;
    }

    public function setSortKey(?int $sortKey): self
    {
        $this->sortKey = $sortKey;

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

    public function getUipriority(): ?int
    {
        return $this->uipriority;
    }

    public function setUipriority(?int $uipriority): self
    {
        $this->uipriority = $uipriority;

        return $this;
    }

    public function getColumn12(): ?bool
    {
        return $this->column12;
    }

    public function setColumn12(?bool $column12): self
    {
        $this->column12 = $column12;

        return $this;
    }

    public function getAcquisitionType(): ?int
    {
        return $this->acquisitionType;
    }

    public function setAcquisitionType(?int $acquisitionType): self
    {
        $this->acquisitionType = $acquisitionType;

        return $this;
    }

    public function getAcquisition(): ?int
    {
        return $this->acquisition;
    }

    public function setAcquisition(?int $acquisition): self
    {
        $this->acquisition = $acquisition;

        return $this;
    }

    public function getLocation(): ?int
    {
        return $this->location;
    }

    public function setLocation(?int $location): self
    {
        $this->location = $location;

        return $this;
    }

    public function getQuest(): ?Quest
    {
        return $this->quest;
    }

    public function setQuest(?Quest $quest): self
    {
        $this->quest = $quest;

        return $this;
    }

    public function getTripleTriadCardType(): ?TripleTriadCardType
    {
        return $this->tripleTriadCardType;
    }

    public function setTripleTriadCardType(?TripleTriadCardType $tripleTriadCardType): self
    {
        $this->tripleTriadCardType = $tripleTriadCardType;

        return $this;
    }

    public function getTripleTriadCardRarity(): ?TripleTriadCardRarity
    {
        return $this->tripleTriadCardRarity;
    }

    public function setTripleTriadCardRarity(?TripleTriadCardRarity $tripleTriadCardRarity): self
    {
        $this->tripleTriadCardRarity = $tripleTriadCardRarity;

        return $this;
    }
}
