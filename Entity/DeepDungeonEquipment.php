<?php

namespace MeteionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DeepDungeonEquipment.
 *
 * @ORM\Table(name="deep_dungeon_equipment")
 * @ORM\Entity
 */
class DeepDungeonEquipment
{
    /**
     * @var int
     *
     * @ORM\Column(name="pk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="deep_dungeon_equipment_pk_seq", allocationSize=1, initialValue=1)
     */
    private $pk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="icon", type="integer", nullable=true)
     */
    private $icon;

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
     * @ORM\Column(name="column_7", type="integer", nullable=true)
     */
    private $column7;

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
     * @var string|null
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    public function getPk(): ?int
    {
        return $this->pk;
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

    public function getColumn7(): ?int
    {
        return $this->column7;
    }

    public function setColumn7(?int $column7): self
    {
        $this->column7 = $column7;

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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }
}
