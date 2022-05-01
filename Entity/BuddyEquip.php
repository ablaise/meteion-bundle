<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BuddyEquip.
 *
 * @ORM\Table(name="buddy_equip", indexes={@ORM\Index(name="idx_9608b557b5ab1f27", columns={"grand_company"})})
 * @ORM\Entity
 */
class BuddyEquip
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="buddy_equip_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

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
     * @ORM\Column(name="column_6", type="integer", nullable=true)
     */
    private $column6;

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
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var int|null
     *
     * @ORM\Column(name="model_top", type="integer", nullable=true)
     */
    private $modelTop;

    /**
     * @var int|null
     *
     * @ORM\Column(name="model_body", type="integer", nullable=true)
     */
    private $modelBody;

    /**
     * @var int|null
     *
     * @ORM\Column(name="model_legs", type="integer", nullable=true)
     */
    private $modelLegs;

    /**
     * @var int|null
     *
     * @ORM\Column(name="icon_head", type="integer", nullable=true)
     */
    private $iconHead;

    /**
     * @var int|null
     *
     * @ORM\Column(name="icon_body", type="integer", nullable=true)
     */
    private $iconBody;

    /**
     * @var int|null
     *
     * @ORM\Column(name="icon_legs", type="integer", nullable=true)
     */
    private $iconLegs;

    /**
     * @var int|null
     *
     * @ORM\Column(name="order", type="integer", nullable=true)
     */
    private $order;

    /**
     * @var GrandCompany
     *
     * @ORM\ManyToOne(targetEntity="GrandCompany")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="grand_company", referencedColumnName="pk")
     * })
     */
    private $grandCompany;

    public function getPk(): ?int
    {
        return $this->pk;
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

    public function getColumn6(): ?int
    {
        return $this->column6;
    }

    public function setColumn6(?int $column6): self
    {
        $this->column6 = $column6;

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

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getModelTop(): ?int
    {
        return $this->modelTop;
    }

    public function setModelTop(?int $modelTop): self
    {
        $this->modelTop = $modelTop;

        return $this;
    }

    public function getModelBody(): ?int
    {
        return $this->modelBody;
    }

    public function setModelBody(?int $modelBody): self
    {
        $this->modelBody = $modelBody;

        return $this;
    }

    public function getModelLegs(): ?int
    {
        return $this->modelLegs;
    }

    public function setModelLegs(?int $modelLegs): self
    {
        $this->modelLegs = $modelLegs;

        return $this;
    }

    public function getIconHead(): ?int
    {
        return $this->iconHead;
    }

    public function setIconHead(?int $iconHead): self
    {
        $this->iconHead = $iconHead;

        return $this;
    }

    public function getIconBody(): ?int
    {
        return $this->iconBody;
    }

    public function setIconBody(?int $iconBody): self
    {
        $this->iconBody = $iconBody;

        return $this;
    }

    public function getIconLegs(): ?int
    {
        return $this->iconLegs;
    }

    public function setIconLegs(?int $iconLegs): self
    {
        $this->iconLegs = $iconLegs;

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

    public function getGrandCompany(): ?GrandCompany
    {
        return $this->grandCompany;
    }

    public function setGrandCompany(?GrandCompany $grandCompany): self
    {
        $this->grandCompany = $grandCompany;

        return $this;
    }
}
