<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ornament.
 *
 * @ORM\Table(name="ornament")
 * @ORM\Entity
 */
class Ornament
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ornament_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="model", type="bigint", nullable=true)
     */
    private $model;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_2", type="integer", nullable=true)
     */
    private $column2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_3", type="integer", nullable=true)
     */
    private $column3;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="column_4", type="boolean", nullable=true)
     */
    private $column4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_5", type="integer", nullable=true)
     */
    private $column5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="column_6", type="bigint", nullable=true)
     */
    private $column6;

    /**
     * @var int|null
     *
     * @ORM\Column(name="order", type="integer", nullable=true)
     */
    private $order;

    /**
     * @var int|null
     *
     * @ORM\Column(name="icon", type="integer", nullable=true)
     */
    private $icon;

    /**
     * @var int|null
     *
     * @ORM\Column(name="transient", type="bigint", nullable=true)
     */
    private $transient;

    /**
     * @var string|null
     *
     * @ORM\Column(name="singular", type="string", length=255, nullable=true)
     */
    private $singular;

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
     * @ORM\Column(name="column_17", type="integer", nullable=true)
     */
    private $column17;

    public function getPk(): ?int
    {
        return $this->pk;
    }

    public function getModel(): ?string
    {
        return $this->model;
    }

    public function setModel(?string $model): self
    {
        $this->model = $model;

        return $this;
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

    public function getColumn3(): ?int
    {
        return $this->column3;
    }

    public function setColumn3(?int $column3): self
    {
        $this->column3 = $column3;

        return $this;
    }

    public function getColumn4(): ?bool
    {
        return $this->column4;
    }

    public function setColumn4(?bool $column4): self
    {
        $this->column4 = $column4;

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

    public function getColumn6(): ?string
    {
        return $this->column6;
    }

    public function setColumn6(?string $column6): self
    {
        $this->column6 = $column6;

        return $this;
    }

    public function getOrder(): ?int
    {
        return $this->order;
    }

    public function setOrder(?int $order): self
    {
        $this->order = $order;

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

    public function getTransient(): ?string
    {
        return $this->transient;
    }

    public function setTransient(?string $transient): self
    {
        $this->transient = $transient;

        return $this;
    }

    public function getSingular(): ?string
    {
        return $this->singular;
    }

    public function setSingular(?string $singular): self
    {
        $this->singular = $singular;

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

    public function getColumn17(): ?int
    {
        return $this->column17;
    }

    public function setColumn17(?int $column17): self
    {
        $this->column17 = $column17;

        return $this;
    }
}
