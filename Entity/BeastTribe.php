<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BeastTribe.
 *
 * @ORM\Table(name="beast_tribe", indexes={@ORM\Index(name="idx_38b85eea95ac666a", columns={"currency_item"}), @ORM\Index(name="idx_38b85eeaf0695b72", columns={"expansion"}), @ORM\Index(name="idx_38b85eeaa813ad34", columns={"beast_rank_bonus"})})
 * @ORM\Entity
 */
class BeastTribe
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="beast_tribe_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_1", type="boolean", nullable=true)
     */
    private $column1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="min_level", type="integer", nullable=true)
     */
    private $minLevel;

    /**
     * @var int|null
     *
     * @ORM\Column(name="icon_reputation", type="integer", nullable=true)
     */
    private $iconReputation;

    /**
     * @var int|null
     *
     * @ORM\Column(name="icon", type="integer", nullable=true)
     */
    private $icon;

    /**
     * @var int|null
     *
     * @ORM\Column(name="max_rank", type="integer", nullable=true)
     */
    private $maxRank;

    /**
     * @var int|null
     *
     * @ORM\Column(name="display_order", type="integer", nullable=true)
     */
    private $displayOrder;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var int|null
     *
     * @ORM\Column(name="adjective", type="integer", nullable=true)
     */
    private $adjective;

    /**
     * @var string|null
     *
     * @ORM\Column(name="plural", type="string", length=255, nullable=true)
     */
    private $plural;

    /**
     * @var int|null
     *
     * @ORM\Column(name="possessive_pronoun", type="integer", nullable=true)
     */
    private $possessivePronoun;

    /**
     * @var int|null
     *
     * @ORM\Column(name="starts_with_vowel", type="integer", nullable=true)
     */
    private $startsWithVowel;

    /**
     * @var int|null
     *
     * @ORM\Column(name="pronoun", type="integer", nullable=true)
     */
    private $pronoun;

    /**
     * @var int|null
     *
     * @ORM\Column(name="article", type="integer", nullable=true)
     */
    private $article;

    /**
     * @var int|null
     *
     * @ORM\Column(name="def", type="integer", nullable=true)
     */
    private $def;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name_relation", type="string", length=255, nullable=true)
     */
    private $nameRelation;

    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="currency_item", referencedColumnName="pk")
     * })
     */
    private $currencyItem;

    /**
     * @var ExVersion
     *
     * @ORM\ManyToOne(targetEntity="ExVersion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="expansion", referencedColumnName="pk")
     * })
     */
    private $expansion;

    /**
     * @var BeastRankBonus
     *
     * @ORM\ManyToOne(targetEntity="BeastRankBonus")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="beast_rank_bonus", referencedColumnName="pk")
     * })
     */
    private $beastRankBonus;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getColumn1(): ?bool
    {
        return $this->column1;
    }

    public function setColumn1(?bool $column1): self
    {
        $this->column1 = $column1;

        return $this;
    }

    public function getMinLevel(): ?int
    {
        return $this->minLevel;
    }

    public function setMinLevel(?int $minLevel): self
    {
        $this->minLevel = $minLevel;

        return $this;
    }

    public function getIconReputation(): ?int
    {
        return $this->iconReputation;
    }

    public function setIconReputation(?int $iconReputation): self
    {
        $this->iconReputation = $iconReputation;

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

    public function getMaxRank(): ?int
    {
        return $this->maxRank;
    }

    public function setMaxRank(?int $maxRank): self
    {
        $this->maxRank = $maxRank;

        return $this;
    }

    public function getDisplayOrder(): ?int
    {
        return $this->displayOrder;
    }

    public function setDisplayOrder(?int $displayOrder): self
    {
        $this->displayOrder = $displayOrder;

        return $this;
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

    public function getAdjective(): ?int
    {
        return $this->adjective;
    }

    public function setAdjective(?int $adjective): self
    {
        $this->adjective = $adjective;

        return $this;
    }

    public function getPlural(): ?string
    {
        return $this->plural;
    }

    public function setPlural(?string $plural): self
    {
        $this->plural = $plural;

        return $this;
    }

    public function getPossessivePronoun(): ?int
    {
        return $this->possessivePronoun;
    }

    public function setPossessivePronoun(?int $possessivePronoun): self
    {
        $this->possessivePronoun = $possessivePronoun;

        return $this;
    }

    public function getStartsWithVowel(): ?int
    {
        return $this->startsWithVowel;
    }

    public function setStartsWithVowel(?int $startsWithVowel): self
    {
        $this->startsWithVowel = $startsWithVowel;

        return $this;
    }

    public function getPronoun(): ?int
    {
        return $this->pronoun;
    }

    public function setPronoun(?int $pronoun): self
    {
        $this->pronoun = $pronoun;

        return $this;
    }

    public function getArticle(): ?int
    {
        return $this->article;
    }

    public function setArticle(?int $article): self
    {
        $this->article = $article;

        return $this;
    }

    public function getDef(): ?int
    {
        return $this->def;
    }

    public function setDef(?int $def): self
    {
        $this->def = $def;

        return $this;
    }

    public function getNameRelation(): ?string
    {
        return $this->nameRelation;
    }

    public function setNameRelation(?string $nameRelation): self
    {
        $this->nameRelation = $nameRelation;

        return $this;
    }

    public function getCurrencyItem(): ?Item
    {
        return $this->currencyItem;
    }

    public function setCurrencyItem(?Item $currencyItem): self
    {
        $this->currencyItem = $currencyItem;

        return $this;
    }

    public function getExpansion(): ?ExVersion
    {
        return $this->expansion;
    }

    public function setExpansion(?ExVersion $expansion): self
    {
        $this->expansion = $expansion;

        return $this;
    }

    public function getBeastRankBonus(): ?BeastRankBonus
    {
        return $this->beastRankBonus;
    }

    public function setBeastRankBonus(?BeastRankBonus $beastRankBonus): self
    {
        $this->beastRankBonus = $beastRankBonus;

        return $this;
    }
}
